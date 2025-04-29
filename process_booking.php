<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "car_showroom");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $address = $conn->real_escape_string($_POST["address"]);
    $car_name = $conn->real_escape_string($_POST["car_name"]);
    $booking_method = $conn->real_escape_string($_POST["booking_method"]);

    // Insert data into database
    $sql = "INSERT INTO car_booking (name, address, car_name, booking_method) 
            VALUES ('$name', '$address', '$car_name', '$booking_method')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
