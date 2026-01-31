<?php
include "config/db.php";

if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login | Leads CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm p-4" style="width:360px;">
        <h4 class="text-center mb-3">Leads CMS Login</h4>

        <form method="post" action="auth/login.php">
            <input
                type="email"
                name="email"
                class="form-control mb-3"
                placeholder="Email"
                required
            >
            <input
                type="password"
                name="password"
                class="form-control mb-3"
                placeholder="Password"
                required
            >
            <button class="btn btn-dark w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>
