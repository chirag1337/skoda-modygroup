<?php
include "../config/db.php";
include "../auth/check.php";

$brands = json_decode(file_get_contents("../config/brands.json"), true);

$brand    = $_GET['brand'] ?? '';
$city = $_GET['city'] ?? '';
$start    = $_GET['start'] ?? '';
$end      = $_GET['end'] ?? '';

if (
    !isset($brands[$brand]) ||
    !in_array(strtolower($city), array_map('strtolower', $brands[$brand]['locations']))
) {
    die("Invalid request");
}

$table = $brands[$brand]['table'];

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$brand}_{$city}_leads.csv");

$sql = "
    SELECT name, mobile, email, city, location, model, salesOrService, created_at
    FROM `$table`
    WHERE LOWER(TRIM(city)) = LOWER(TRIM(?))
";

$params = [$city];
$types = "s";

if ($start && $end) {
    $sql .= " AND DATE(created_at) BETWEEN ? AND ?";
    $params[] = $start;
    $params[] = $end;
    $types .= "ss";
}

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, $types, ...$params);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$out = fopen("php://output", "w");
fputcsv($out, ['Name','Mobile','Email','City','Location','Model','Type','Created At'], ',', '"', '\\');

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($out, $row, ',', '"', '\\');
}

fclose($out);
exit;
