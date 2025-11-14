<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['btnSubmitData'])) {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $model = $_POST['model'];
    $salesORservice = $_POST['salesORservice'];
    $city = 'Mumbai';

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
        "Sales" => ["Mumbai North", "Vasai","Kalyan","Thane","Panjim","Goa"],
        "Service" => ["Mumbai North","Thane","Goa"]
    ];

    if (!isset($validLocations[$salesORservice]) || !in_array($location, $validLocations[$salesORservice])) {
        echo json_encode(['status' => 400, 'message' => 'Invalid location for selected Sales/Service']);
        exit;
    }

    $validModel = ["VIRTUS", "TAIGUN", "GOLF GTI", "TIGUAN R-LINE"];
    if (!in_array($model, $validModel)) {
        echo json_encode(['status' => 400, 'message' => 'Invalid model selected']);
        exit;
    }

    //Create an instance; passing `true` enables exceptions
    include_once('PHPMailer_5.2.2-beta2/class.phpmailer.php');
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->isSMTP();                                            //Send using SMTP
        // $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
        // $mail->SMTPAuth = true;                                     //Enable SMTP authentication
        // $mail->Username = 'groupmody@gmail.com';                    //SMTP username
        // $mail->Password = 'iqsgsjkbmigmgzlj';                       //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
        // $mail->Port = 587;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('no_reply@modygroup.co.in');
        $mail->addAddress('crhead@vw-modyautocorp.co.in');
        $mail->addAddress('vp.sales@vw-modyautocorp.co.in');
        $mail->addAddress('chirag@ottoedge.com');
        $mail->addAddress('gorav@ottoedge.com');
        $mail->addAddress('hywel@ottoedge.com');
      
        //        $mail->addCC('gopalgonda@gmail.com');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Entry - Volkswagen ';
        $mail->Body = "
            <table border='2' cellpadding='5' cellspacing='3' height='100%' width='100%' id='backgroundTable' style='background:#f4f4f4; text-align: left;'>
                <tr>
                   <td>Name:</td><td>$name</td>
                </tr>
                <tr>
                   <td>Mobile Number:</td>
                   <td>$mobile</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>$city</td>
                </tr>
                <tr>
                    <th>Model </th>
                    <td>$model</td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td>$location</td>
                </tr>
                <tr>
                    <th>Sales or service</th>
                    <td>$salesORservice</td>
                </tr>
              
                              
            </table>
        ";

        if ($mail->send()) {     
            $_SESSION['form_submitted'] = true;
            header("Location: thankyou.php");
            exit();
        } else {
            header('Location: index.php');
            exit();
        }

    } catch (Exception $e) {
        // $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>
