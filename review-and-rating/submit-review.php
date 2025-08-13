<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connect to database
$conn = new mysqli("localhost", "root", "", "evokedrive");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data
$username = $_POST['username'] ?? '';
$rating = (int) ($_POST['rating'] ?? 0);
$opinion = trim($_POST['opinion'] ?? '');

if (!$username || !$rating || !$opinion) {
    die("Please fill out all required fields.");
}

// Handle image upload
$profilePath = $uploadDir . $filename; // e.g., "uploads/image.jpg"
$uploadDir = "uploads/";

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['profile']) && $_FILES['profile']['error'] === 0) {
    $filename = time() . "_" . basename($_FILES['profile']['name']);
    $targetPath = $uploadDir . $filename;
    $fileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['profile']['tmp_name'], $targetPath)) {
            $profilePath = $targetPath;
        } else {
            die("Failed to move uploaded file.");
        }
    } else {
        die("Only JPG, PNG, and GIF files are allowed.");
    }
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO reviews (username, profile, rating, opinion) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $username, $profilePath, $rating, $opinion);

if ($stmt->execute()) {
    header("Location: review_and_rating.php");
    exit();
} else {
    echo "Error saving review.";
}

$stmt->close();
$conn->close();
?>