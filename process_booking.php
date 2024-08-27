<?php
// Database credentials
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

// Get form data
$service = $_POST['service'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (service, name, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $service, $name, $email, $message);

// Execute statement
if ($stmt->execute()) {
  // Send confirmation email
  $to = $email;
  $subject = "Booking Confirmation";
  $body = "Dear $name,\n\nThank you for booking our $service services. We have received your message and will get back to you shortly.\n\nBest regards,\nServeTech";
  $headers = "From: support@servetechmw.com";

  if (mail($to, $subject, $body, $headers)) {
    echo "Booking successful! A confirmation email has been sent.";
  } else {
    echo "Booking successful, but there was an error sending the confirmation email.";
  }
} else {
  echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
