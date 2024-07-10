<?php
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL user
$password = "45Sas@rama"; // Default XAMPP MySQL root password is empty

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
