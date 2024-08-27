<?php
// Database configuration
$servername = "localhost"; // Typically 'localhost' for cPanel
$username = "servetec_user"; // Your database username
$password = "LX*CDhMEJ2GA"; // Your database password
$dbname = "servetec_servetechmw"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>
