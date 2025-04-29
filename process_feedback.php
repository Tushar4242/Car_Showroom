<?php
$conn = new mysqli("localhost", "root", "", "car_showroom");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $feedback = $conn->real_escape_string($_POST["feedback"]);

    $sql = "INSERT INTO feedback (name, feedback) VALUES ('$name', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
