<?php
// $conn = mysqli_connect("localhost", "root", "ottoedge@321", "modygroup_leads");
$conn = mysqli_connect("34.28.236.146:3306", "skoda-ottomac", "skod@Ottomac", "modygroup_leads");

if (!$conn) {
    die("Database connection failed");
}

session_start();


// Email: admin@modygroup.co.in
// Password: admin123