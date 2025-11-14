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

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'groupmody@gmail.com';                  //SMTP username
        $mail->Password   = 'iqsgsjkbmigmgzlj';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('groupmody@gmail.com', 'New Entry - Skoda');
        // $mail->addAddress('crhead.sales@skoda-modyindiacars.co.in');
        // $mail->addAddress('vp.sales@skoda-modyindiacars.co.in');
        // $mail->addAddress('chirag@ottoedge.com');
        // $mail->addAddress('gorav@ottoedge.com');
        // $mail->addAddress('hywel@ottoedge.com');
        $mail->addAddress('ajay@ottoedge.com');
      
        //        $mail->addCC('gopalgonda@gmail.com');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Entry - Skoda ';
        $mail->Body    = "
            <table border='2' cellpadding='5' cellspacing='3' height='100%' width='100%' id='backgroundTable' style='background:#f4f4f4; text-align: left;'>
                <tr>
                   <td>Name:</td><td>$name</td>
                </tr>
                <tr>
                   <td>Mobile Number:</td><td>$mobile</td>
                </tr>
                <tr>
                <td>Email:</td><td>$email</td>
                </tr>
                <tr>
                    <th>Model </th>
                    <td>$model</td>
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
