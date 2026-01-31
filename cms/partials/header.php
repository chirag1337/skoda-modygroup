<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leads CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 240px;
            height: 100vh;
            background: #212529;
            transition: width 0.3s;
            z-index: 1000;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #343a40;
            color: #fff;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar.collapsed .menu-text {
            display: none;
        }

        .sidebar.collapsed .nav-link {
            justify-content: center;
        }

        .logo-text {
            transition: opacity 0.3s;
        }

        .sidebar.collapsed + .content .logo-text {
            display: none;
        }

        .content {
            flex: 1;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .content.collapsed {
            margin-left: 70px;
        }

        .content-wrapper {
            margin-left: 240px;
            margin-top: 56px;
            min-height: calc(100vh - 56px);
            display: flex;
            flex-direction: column;
            transition: margin-left 0.3s ease;
        }

        .content-wrapper.collapsed {
            margin-left: 70px;
        }

        .footer {
            border-top: 1px solid #e5e5e5;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="d-flex align-items-center">
        <button id="sidebarToggle" class="btn btn-dark me-2">
            <i class="bi bi-list"></i>
        </button>

        <span class="navbar-brand mb-0 fw-bold">
            <img src="assets/images/logos/logo.png" height="28" class="me-2">
            <!-- <span class="logo-text">Leads CMS</span> -->
        </span>
    </div>

    <div class="dropdown me-4">
        <a class="text-white dropdown-toggle text-decoration-none" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i> Admin
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item text-danger" href="auth/logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

