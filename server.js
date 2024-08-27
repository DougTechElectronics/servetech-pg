require('dotenv').config(); // Load environment variables

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

// Create a MySQL connection using environment variables
const db = mysql.createConnection({
  DB_HOST: process.env.localhost,
  DB_USER: process.env.servetec_storage,
  DB_PASSWORD: process.env.Bishopdee1.,
  DATABASE: process.env.servetec_servedata,
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

  jwt.verify(token, process.env.JWT_SECRET, (err, user) => {
    if (err) return res.sendStatus(403);
    req.user = user;
    next();
  });
};

// User registration route
app.post('/register', (req, res) => {
  const { username, password, email } = req.body;

  bcrypt.hash(password, 10, (err, hashedPassword) => {
    if (err) return res.status(500).json({ message: 'Error hashing password' });

    db.query('INSERT INTO users (username, password, email) VALUES (?, ?, ?)', [username, hashedPassword, email], (err) => {
      if (err) return res.status(500).json({ message: 'Error registering user' });
      res.status(201).json({ message: 'User registered' });
    });
  });
});


// User login route
app.post('/login', (req, res) => {
  const { username, password } = req.body;

  db.query('SELECT * FROM users WHERE username = ?', [username], (err, results) => {
    if (err) return res.status(500).json({ message: 'Database error' });
    if (results.length === 0) return res.status(401).json({ message: 'Incorrect username or password' });

    const user = results[0];
    bcrypt.compare(password, user.password, (err, match) => {
      if (err) return res.status(500).json({ message: 'Error comparing passwords' });
      if (!match) return res.status(401).json({ message: 'Incorrect username or password' });

      // Create JWT token
      const token = jwt.sign({ id: user.id, username: user.username }, process.env.JWT_SECRET, { expiresIn: '1h' });
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
      return res.status(500).json({ message: 'Error fetching products' });
    }
    res.json(results);
  });
});

// Route to handle booking submission
app.post('/api/bookings', authenticateJWT, (req, res) => {
  const { productId } = req.body;
  const userId = req.user.id; // User ID from JWT

  if (!productId || !userId) {
    return res.status(400).json({ message: 'Product ID and User ID are required' });
  }

  const sql = 'INSERT INTO bookings (product_id, user_id, date) VALUES (?, ?, NOW())';
  db.query(sql, [productId, userId], (err, result) => {
    if (err) {
      console.error('Error inserting booking into the database:', err);
      return res.status(500).json({ message: 'Error processing your booking' });
    }
    res.json({ message: 'Booking recorded successfully!' });
  });
});

// Route to fetch all bookings (for viewing or editing purposes)
app.get('/api/bookings', (req, res) => {
  const sql = 'SELECT * FROM bookings';
  db.query(sql, (err, results) => {
    if (err) {
      console.error('Error fetching bookings from the database:', err);
      return res.status(500).json({ message: 'Error fetching bookings' });
    }
    res.json(results);
  });
});

// Route to handle form submissions
app.post('/api/form_submissions', (req, res) => {
  const { name, email, service, message } = req.body;

  // Validate the input
  if (!name || !email || !service) {
    return res.status(400).json({ message: 'Name, email, and service are required' });
  }

  // Insert form data into the database
  const sql = 'INSERT INTO form_submissions (name, email, service, message) VALUES (?, ?, ?, ?)';
  db.query(sql, [name, email, service, message], (err, results) => {
    if (err) {
      console.error('Error inserting form data into the database:', err);
      return res.status(500).json({ message: 'Error processing your form submission' });
    }
    res.status(200).json({ message: 'Thank you for your submission! We will get back to you shortly.' });
  });
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});








// server.js
const express = require('express');
const path = require('path');

const app = express();
const port = 8080; // You can use any port number you prefer

// Serve static files from the "public" directory
app.use(express.static(path.join(__dirname, 'public')));

// Serve the index.html file by default
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Start the server
app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});

