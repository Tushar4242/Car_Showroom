<?php
$host = "localhost"; // XAMPP default is "localhost"
$user = "root"; // Default MySQL user
$password = ""; // Default is empty (no password)
$database = "car_showroom"; // Database name

$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

