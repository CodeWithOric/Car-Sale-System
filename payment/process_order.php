<?php
$conn = new mysqli("localhost", "root", "", "evokedrive");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$model = $_POST['model'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO orders (full_name, email, model, address, city, zip_code, card_name, card_number, exp_month, exp_year, cvv, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'success')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssss", $full_name, $email, $model, $address, $city, $zip_code, $card_name, $card_number, $exp_month, $exp_year, $cvv);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id;
    header("Location: check_order.php?order_id=$order_id");
} else {
    echo "Error: " . $stmt->error;
}
?>