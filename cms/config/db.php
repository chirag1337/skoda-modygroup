<?php
$conn = mysqli_connect("localhost", "root", "ottoedge@321", "modygroup_leads");

if (!$conn) {
    die("Database connection failed");
}

session_start();


// Email: admin@modygroup.co.in
// Password: admin123