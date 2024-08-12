const express = require('express');
const mysql = require('mysql2');
const path = require('path');
const cors = require('cors');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

const app = express();

// Middleware to parse JSON bodies and URL-encoded data
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Enable CORS
app.use(cors());

// Serve static files from the 'public' directory
app.use(express.static(path.join(__dirname, 'public')));

// Create a MySQL connection
const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'Bishopdee1',
  database: 'storeDB'
});

// Connect to MySQL
db.connect((err) => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the MySQL database.');
});

// JWT Middleware
const authenticateJWT = (req, res, next) => {
  const authHeader = req.headers['authorization'];
  const token = authHeader && authHeader.split(' ')[1];

  if (token == null) return res.sendStatus(401);

  jwt.verify(token, 'your-jwt-secret', (err, user) => {
    if (err) return res.sendStatus(403);
    req.user = user;
    next();
  });
};

// User registration route
app.post('/register', (req, res) => {
  const { username, password, email } = req.body;

  bcrypt.hash(password, 10, (err, hashedPassword) => {
    if (err) return res.status(500).send('Error hashing password');

    db.query('INSERT INTO users (username, password, email) VALUES (?, ?, ?)', [username, hashedPassword, email], (err) => {
      if (err) return res.status(500).send('Error registering user');
      res.status(201).send('User registered');
    });
  });
});

// User login route
app.post('/login', (req, res) => {
  const { username, password } = req.body;

  db.query('SELECT * FROM users WHERE username = ?', [username], (err, results) => {
    if (err) return res.status(500).send('Database error');
    if (results.length === 0) return res.status(401).json({ message: 'Incorrect username or password' });

    const user = results[0];
    bcrypt.compare(password, user.password, (err, match) => {
      if (err) return res.status(500).send('Error comparing passwords');
      if (!match) return res.status(401).json({ message: 'Incorrect username or password' });

      // Create JWT token
      const token = jwt.sign({ id: user.id, username: user.username }, 'your-jwt-secret', { expiresIn: '1h' });
      res.json({ token });
    });
  });
});

// Route to fetch products from the database
app.get('/api/products', (req, res) => {
  const sql = 'SELECT id, name, category, description, price, image FROM products';
  db.query(sql, (err, results) => {
    if (err) {
      console.error('Error fetching products from the database:', err);
      return res.status(500).send('Error fetching products');
    }
    res.json(results);
  });
});

// Route to handle booking submission
app.post('/api/bookings', authenticateJWT, (req, res) => {
  const { productId } = req.body;
  const userId = req.user.id; // User ID from JWT

  if (!productId || !userId) {
    return res.status(400).send('Product ID and User ID are required');
  }

  const sql = 'INSERT INTO bookings (product_id, user_id, date) VALUES (?, ?, NOW())';
  db.query(sql, [productId, userId], (err, result) => {
    if (err) {
      console.error('Error inserting booking into the database:', err);
      return res.status(500).send('Error processing your booking');
    }
    res.send('Booking recorded successfully!');
  });
});

// Route to fetch all bookings (for viewing or editing purposes)
app.get('/api/bookings', (req, res) => {
  const sql = 'SELECT * FROM bookings';
  db.query(sql, (err, results) => {
    if (err) {
      console.error('Error fetching bookings from the database:', err);
      return res.status(500).send('Error fetching bookings');
    }
    res.json(results);
  });
});

// Route to handle form submissions
app.post('/api/form_submissions', (req, res) => {
  const { name, email, service, message } = req.body;

  // Validate the input
  if (!name || !email || !service) {
    return res.status(400).send('Name, email, and service are required');
  }

  // Insert form data into the database
  const sql = 'INSERT INTO form_submissions (name, email, service, message) VALUES (?, ?, ?, ?)';
  db.query(sql, [name, email, service, message], (err, results) => {
    if (err) {
      console.error('Error inserting form data into the database:', err);
      return res.status(500).send('Error processing your form submission');
    }
    res.send('Thank you for your submission! We will get back to you shortly.');
  });
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
 