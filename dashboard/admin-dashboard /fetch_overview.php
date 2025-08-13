<?php
header('Content-Type: application/json');

// DB connection info — replace with your actual credentials
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_db_user';
$pass = 'your_db_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

// Prepare sample SQL queries (customize to your schema)

// This example assumes you have a table `sales_data` with columns:
//  - metric (varchar): 'total_revenue', 'net_profit', 'time_sold', 'growth'
//  - value (decimal or int)
//  - week_start_date (date)

function getMetricData($pdo, $metric) {
    // This week start (Monday)
    $thisWeekStart = date('Y-m-d', strtotime('monday this week'));
    $lastWeekStart = date('Y-m-d', strtotime('monday last week'));

    // Query values for this week and last week
    $stmt = $pdo->prepare("SELECT week_start_date, value FROM sales_data WHERE metric = :metric AND (week_start_date = :thisWeek OR week_start_date = :lastWeek)");
    $stmt->execute([
        ':metric' => $metric,
        ':thisWeek' => $thisWeekStart,
        ':lastWeek' => $lastWeekStart
    ]);

    $result = ['this_week' => null, 'last_week' => null];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($row['week_start_date'] === $thisWeekStart) {
            $result['this_week'] = $row['value'];
        } else if ($row['week_start_date'] === $lastWeekStart) {
            $result['last_week'] = $row['value'];
        }
    }
    return $result;
}

// Fetch all metrics
$metrics = ['total_revenue', 'net_profit', 'time_sold', 'growth'];
$response = [];

foreach ($metrics as $metric) {
    $response[$metric] = getMetricData($pdo, $metric);
}

echo json_encode($response);
