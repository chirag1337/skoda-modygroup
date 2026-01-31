<?php
include "../config/db.php";

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header("Location: ../index.php");
    exit;
}

$stmt = mysqli_prepare(
    $conn,
    "SELECT id, password FROM admins WHERE email = ? LIMIT 1"
);

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['admin_id'] = $user['id'];
    header("Location: ../dashboard.php");
    exit;
}

header("Location: ../index.php");
exit;
