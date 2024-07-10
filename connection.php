<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "45Sas@rama";
$dbname = "placeorder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize POST data
$full_name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip'];
$card_name = $_POST['cardName'];
$card_number = $_POST['cardNum'];
$exp_month = $_POST['expMonth'];
$exp_year = $_POST['expYear'];
$cvv = $_POST['cvv'];

// Prepare and bind
$insert = "INSERT INTO orders (full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insert);
$stmt->bind_param("sssssssssss", $full_name, $email, $address, $city, $state, $zip_code, $card_name, $card_number, $exp_month, $exp_year, $cvv);

// Execute and send response
$response = array();
if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
