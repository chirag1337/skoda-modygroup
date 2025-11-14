<?php
session_start();
$connection = mysqli_connect("p3nlmysql11plsk.secureserver.net:3306", "modygroup_user", "Modygroup@321", "modygroup_leads");
// $connection = mysqli_connect("localhost", "root", "Modygroup@321", "modygroup_leads");

if (isset($_POST['btnSubmitData'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $model = $_POST['model'];
    $salesORservice = $_POST['salesORservice'];

    if (empty($name) || strlen($name) < 2) {
        echo json_encode(['status' => 400, 'message' => 'Please enter a valid name']);
        exit;
    }

    if (!preg_match('/^[0-9]{10,13}$/', $mobile)) {
        echo json_encode(['status' => 400, 'message' => 'Please enter a valid mobile number']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 400, 'message' => 'Please enter a valid email address']);
        exit;
    }

    $validSalesService = ["Sales", "Service"];
    if (!in_array($salesORservice, $validSalesService)) {
        echo json_encode(['status' => 400, 'message' => 'Invalid Sales/Service option']);
        exit;
    }

    $validLocations = [
        "Sales" => ["Andheri", "Worli", "Chembur"],
        "Service" => ["Mahalaxmi", "Kurla", "Goregaon"]
    ];

    if (!isset($validLocations[$salesORservice]) || !in_array($location, $validLocations[$salesORservice])) {
        echo json_encode(['status' => 400, 'message' => 'Invalid location for selected Sales/Service']);
        exit;
    }

    $validModel = ["Slavia", "Kushaq", "Kodiaq", "Kylaq"];
    if (!in_array($model, $validModel)) {
        echo json_encode(['status' => 400, 'message' => 'Invalid model selected']);
        exit;
    }

    $query = "INSERT INTO skoda (name, mobile, email, location, model, salesORservice) VALUES ('$name', '$mobile', '$email', '$location', '$model', '$salesORservice')";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        include 'send-mail.php';
        echo json_encode(['status' => 200, 'message' => 'Form submitted successfully']);
        exit;
    } else {
        echo json_encode(['status' => 500, 'message' => 'Database insert failed']);
        exit;
    }
}
?>