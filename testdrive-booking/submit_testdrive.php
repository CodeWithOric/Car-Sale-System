<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "evokedrive";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . $conn);
}

// Get form values
$fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$model = mysqli_real_escape_string($conn, $_POST['model']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$license = mysqli_real_escape_string($conn, $_POST['driverLicense']);
$notes = mysqli_real_escape_string($conn, $_POST['notes']);

// Insert into database
$sql = "INSERT INTO test_drive_bookings 
(id, full_name, email, phone, model, preferred_date, preferred_time, location, driver_license, notes) 
VALUES (NULL, '$fullName', '$email', '$phone', '$model', '$date', '$time', '$location', '$license', '$notes')";

$query = mysqli_query($conn, $sql);

if(!$query){
    die("Query Error: " . mysqli_error($conn));
} else {
    echo "Booking successful!";
}

$conn->close();
?>