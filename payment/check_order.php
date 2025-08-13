<?php
$conn = new mysqli("localhost", "root", "", "evokedrive");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$order_id = $_GET['order_id'] ?? null;
if (!$order_id) {
    header("Location: index.php"); // No ID → redirect home
    exit();
}

$stmt = $conn->prepare("SELECT status FROM orders WHERE order_id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$stmt->bind_result($status);

if (!$stmt->fetch() || $status !== 'success') {
    header("Location: payment/payment.html"); // Not found or failed → redirect home
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Successful</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fdfdfd;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: white;
      border-radius: 16px;
      padding: 40px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }

    .checkmark {
      width: 80px;
      height: 80px;
      background-color: #3e9d70;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 20px;
    }

    .checkmark svg {
      width: 40px;
      height: 40px;
      stroke: white;
      stroke-width: 4;
      fill: none;
    }

    h2 {
      margin: 0;
      font-size: 24px;
      color: #000;
    }

    p {
      font-size: 14px;
      color: #777;
      margin: 15px 0 30px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 14px 0;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      border: none;
      transition: 0.3s ease;
    }

    .btn-primary {
      background-color: #ff5722;
      color: white;
    }

    .btn-primary:hover {
      background-color: #e64a19;
    }

    .btn-secondary {
      background-color: transparent;
      border: 2px solid #ff5722;
      color: #000;
    }

    .btn-secondary:hover {
      background-color: #fff3ef;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="checkmark">
      <svg viewBox="0 0 24 24">
        <path d="M5 13l4 4L19 7"></path>
      </svg>
    </div>
    <h2>Order Successful<br>Thank you!</h2>
    <p>Your order has been confirmed. You will receive it within 3 days. Do you want to order anything else?</p>
    <br>
    <button class="btn btn-secondary" onclick="window.location.href='../home-page/home-page.php'">BACK TO HOME</button>
  </div>
</body>
</html>