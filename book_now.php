<?php
// book_now.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product ID from query string
$product_id = $_GET['product_id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Prepare and execute the booking insertion
    $stmt = $conn->prepare("INSERT INTO store_bookings (product_id, email) VALUES (?, ?)");

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("is", $product_id, $email);

    if ($stmt->execute()) {
        // Send email notification
        $to = 'support@servetechmw.com'; // Change this to your email
        $subject = 'New Booking Received';
        $message = "A new booking has been made for product ID: $product_id.\n\nCustomer Email: $email";
        $headers = "From:bandadouglas20@gmail.com.com"; // Change this to a valid sender email

        if (mail($to, $subject, $message, $headers)) {
            echo "Booking successful! We have sent a confirmation email.";
        } else {
            echo "Booking successful, but email notification failed.";
        }
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Fetch product details for display
    $stmt = $conn->prepare("SELECT name FROM products WHERE id = ?");

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $stmt->bind_result($product_name);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Book Now</h1>
        <p>Product: <?php echo htmlspecialchars($product_name); ?></p>
        <form action="book_now.php?product_id=<?php echo htmlspecialchars($product_id); ?>" method="POST">
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Confirm Booking</button>
        </form>
    </div>
</body>
</html>
