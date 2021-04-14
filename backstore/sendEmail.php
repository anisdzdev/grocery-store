<?php
if (!isset($_SESSION)) {
    session_start();
}

$name = $_POST["name"];
$orderNum = $_POST["orderNum"];
$total = $_POST["total"];
$status = $_POST["status"];
$cart = $_POST["cart"];

$handle = fopen("../backstore/database/users.csv", "r");

while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $fullName = $row[2]." ".$row[3];
    if ($fullName === $name) {
        $_SESSION['emailOrder'] = $row[0];
        break;
    }
}
fclose($handle);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "../mail/PHPMailer.php";
include "../mail/SMTP.php";
include "../mail/Exception.php";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'tropicalflavorsoen228@gmail.com';                     //SMTP username
    $mail->Password = 'vdmnekslftbvcnhj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('tropicalflavorsoen228@gmail.com', 'Tropical Flavors');
    $mail->addAddress($_SESSION['emailOrder'], $name);     //Add a recipient     //Name is optional
    $mail->addReplyTo('tropicalflavorsoen228@gmail.com', 'Tropical Flavors Email Service');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Updated Order';
    $mail->Body = "Your order has been updated";
    $mail->AltBody = "Your order has been updated";

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: order-list.php");