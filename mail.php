<?php
// include required phpmailer filesystem
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// Define name spaces 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Create instance of phpmailer
$mail = new PHPMailer();
// Set mailer to use smtp mail
$mail->isSMTP();
// Define smtp host 
$mail->Host = "smtp.gmail.com";

// enable smtp authentication
$mail->SMTPAuth = "true";
// Set type of encryption (ssl/tls) 
$mail->SMTPSecure = "tls";
// Set port to connect smtp
$mail->Port = "587";
// Set gmail username
$mail->Username = "developer.wale@gmail.com";
// Set gmail password
$mail->Password = "olufemi@442";
// Enable HTML body//
$mail->isHTML(true);
// Set email subject
$mail->Subject = "Notification @Meristem Securities Limited";
// Set sender email
// $mail->setFrom("developer.wale@gmail.com");
$mail->setFrom('developer.wale@gmail.com', 'Meristem Notification');
// Email body 
$mail->Body = "<h1>This is notify you that a new client's have registered with us</h1>";
// Add recipient
// $mail->addAddress("developer.wale@gmail.com");
$mail->addAddress('fawemimoolawaleolufemi@gmail.com', 'MSL');

// $mail->addReplyTo
$mail->addBCC('oladelefawemimo@gmail.com');
$mail->addCC('princefawemimoolawale@gmail.com');
// Finally send email
if ($mail->Send() ) { 
   //echo "Email sent...!!!!";
}else{ 
    echo"Error!!!";
}
// Closing smtp connection
$mail->smtpClose();

?>










