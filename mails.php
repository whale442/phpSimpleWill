<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';




function sendEmail($body)
{

    $mail = new PHPMailer(true);                              
    try {
        //Server settings
        $mail->SMTPDebug = 0;                               
        $mail->isSMTP();                                    
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;                               
        $mail->Username = 'developer.wale@gmail.com';                  
        $mail->Password = 'olufemi@442';                           
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;                                    

        //Recipients
        $mail->setFrom('developer.wale@gmail.com');
      
        $mail->addAddress('developer.wale@gmail.com');
     
        $mail->addBCC('developer.wale@gmail.com');
        $mail->addCC('fawemimoolawaleolufemi@gmail.com');
      
        //Content
        $mail->isHTML(true);                               
        $mail->Subject = 'Notify me';
        
        $mail->Body = $body;
        $mail->send();
        $mail->ErrorInfo;
      echo "<script>
        alert('Email has been sent successfully.');
    </script>";

    } catch (Exception $e) {  
    echo 'Message could not be sent. Mailer Error: ';
    $mail->ErrorInfo;
    }


}

?>



