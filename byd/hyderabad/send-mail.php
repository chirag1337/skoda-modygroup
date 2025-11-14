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
    $city = "Hyderabad";

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
        "Sales" => ["Begumpet", "Banjara Hills"],
        "Service" => ["Nagole"]
    ];

    if (!isset($validLocations[$salesORservice]) || !in_array($location, $validLocations[$salesORservice])) {
        echo json_encode(['status' => 400, 'message' => 'Invalid location for selected Sales/Service']);
        exit;
    }

    $validModel = ["BYD Sealion 7", "BYD eMAX 7", "Atto 3", "BYD Seal"];
    if (!in_array($model, $validModel)) {
        echo json_encode(['status' => 400, 'message' => 'Invalid model selected']);
        exit;
    }

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'sg2plzcpnl506136.prod.sin2.secureserver.net'; // GoDaddy SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'byd_mails@modygroup.co.in'; // SMTP username
        $mail->Password = 'Bebds@2025#$'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Secure encryption
        $mail->Port = 465; // SMTP port for SSL                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('groupmody@gmail.com');
        $mail->addAddress('ceo@mody-byd.in');
        $mail->addAddress('saleshead@mody-byd.in');
        $mail->addAddress('chirag@ottoedge.com'); 
        $mail->addAddress('hywel@ottoedge.com');
        $mail->addAddress('chirag@ottoedge.com');
      
        //        $mail->addCC('gopalgonda@gmail.com');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Entry - BYD ';
        $mail->Body = "<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='backgroundTable' style='background:#f4f4f4;'>
        <tr>
            <td align='center' valign='top'>
                <br />
                <table border='0' cellpadding='10' cellspacing='0' width='600' id='templatePreheader' style='background-color:#FFF;border-radius: 5px;margin-bottom:5px;box-shadow:0px 2px 2px 0px #ccc;'>
                    <tr>
                        <td valign='top' class='preheaderContent'>
                            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                <tr>
                                    <td valign='top'>
                                        <div mc:edit='std_preheader_content'>
                                                <h3>BYD</h3>
    
                                        </div>
                                    </td>
                                    <td valign='top' width='180' style='vertical-align: middle;text-align:center;'>
                                        <div mc:edit='std_preheader_links'>
                                            <a href='tel:+91 7659951111' target='_blank' style='text-decoration:none;text-transform:none;color:#555;border:1px #555 solid;padding:8px 15px;border-radius:5px;'>Call Us</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                
                <table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='margin-bottom:5px;'>
                    <tr>
                        <td align='center' valign='top'>
                            <table border='0' cellpadding='10' cellspacing='0' width='600' id='templateBody'>
                                <tr>
                                    <td valign='top' class='bodyContent' style='background-color:#FFF;border-radius: 5px;box-shadow:0px 2px 2px 0px #ccc;'>
                                        <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                            <tr>
                                                <td valign='top'>
                                                    <div mc:edit='std_content00'>
                                                        <div style='width:100%;'>
                                                            <table width='100%'>
                                                                <tbody>
                                                                    
                                                                    <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Name :</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Email:</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$email</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Phone:</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$mobile</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>City:</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$city</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Model:</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$model</td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Service or Sales:</td>
                                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>$salesORservice</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                </table>
                
    
    
                <table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer'>
                    <tr>
                        <td align='center' valign='top' style='text-align:center;'>
                            <table border='0' cellpadding='10' cellspacing='0' width='600' id='templateFooter' style='background-color: #fff;border-radius:5px;box-shadow:0px 2px 2px 0px #ccc;'>
                                <tr>
                                    <td valign='top' class='footerContent'>
                                        <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                            <tr>
                                                <td valign='top' width='370'>
                                                    <div mc:edit='std_footer'>
                                                        <em>Copyrights &copy; " . date('Y') . ". All Rights Reserved
                                                            <br /> Mody BYD Pvt. Ltd. </em>
                                                        <br>
                                                        <br />
                                                        <strong>Contact us:</strong>
                                                        <br>
                                                        <a href='tel:+91 7659951111     '>+91 7659951111</a>
                                                        <br>
                                                        <br>
                                                        <strong>Email us:</strong>
                                                        <br>
                                                        <a href='mailto:saleshead@mody-byd.in'>  saleshead@mody-byd.in </a>
                                                        <br>
                                                        <br>
                                                        
                                                        
                                                    <br>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
    
                
                <br>
            </td>
        </tr>
    </table>";

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
