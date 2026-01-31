<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div id="sidebar" class="sidebar">
    <ul class="nav flex-column pt-3">

        <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'dashboard.php') ? 'active' : '' ?>"
               href="dashboard.php">
                <i class="bi bi-speedometer2"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'export.php') ? 'active' : '' ?>"
               href="export.php">
                <i class="bi bi-download"></i>
                <span class="menu-text">Download Leads</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($currentPage === 'leads.php') ? 'active' : '' ?>"
               href="leads.php">
                <i class="bi bi-card-list"></i>
                <span class="menu-text">Leads</span>
            </a>
        </li>

    </ul>
</div>

