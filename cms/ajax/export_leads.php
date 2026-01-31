<?php
include "../config/db.php";
include "../auth/check.php";

$brands = json_decode(file_get_contents("../config/brands.json"), true);

$brand    = $_GET['brand'] ?? '';
$city = $_GET['city'] ?? '';
$start    = $_GET['start'] ?? '';
$end      = $_GET['end'] ?? '';

if (!isset($brands[$brand])) {
    die("Invalid brand");
}

$table = $brands[$brand]['table'];

$city = strtolower(trim($city));

$allowedCities = array_map(
    fn($c) => strtolower(trim($c)),
    $brands[$brand]['locations']
);

if ($city !== 'all' && !in_array($city, $allowedCities)) {
    die("Invalid city");
}


$table = $brands[$brand]['table'];

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$brand}_{$city}_leads.csv");

$sql = "
    SELECT name, mobile, email, city, location, model, salesOrService, created_at
    FROM `$table`
    WHERE 1
";

$params = [];
$types = "";

/* CITY FILTER */
if ($city !== 'all') {
    $sql .= " AND LOWER(TRIM(city)) = ?";
    $params[] = $city;
    $types .= "s";
}

/* DATE FILTER */
if ($start && !$end) {
    // start date → today
    $sql .= " AND DATE(created_at) >= ?";
    $params[] = $start;
    $types .= "s";
}

if ($start && $end) {
    $sql .= " AND DATE(created_at) BETWEEN ? AND ?";
    $params[] = $start;
    $params[] = $end;
    $types .= "ss";
}


$stmt = mysqli_prepare($conn, $sql);
if (!empty($params)) {
    mysqli_stmt_bind_param($stmt, $types, ...$params);
}
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$out = fopen("php://output", "w");
fputcsv($out, ['Name','Mobile','Email','City','Location','Model','Type','Created At'], ',', '"', '\\');

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($out, $row, ',', '"', '\\');
}

fclose($out);
exit;
