<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harisnaseer258@gmail.com';                     //SMTP username
    $mail->Password   = 'your secret code';                               //SMTP password
    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harisnaseer258@gmail.com', 'Sir Haris');
    $mail->addAddress('abdulbasithussain2020@gmail.com', 'Abdul Basit');     //Add a recipient
    $mail->addAddress('haris_naseer@aptechnorth.edu.pk');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
   
      $mail->addAttachment('C:\xampp\htdocs\2301B2 PHP\file uploading\img');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PHP Assignment';
    $mail->Body    = 'Please submit assignment on<b>01-December-2023</b>';
    $mail->AltBody = 'Please submit assignment on 01-December-2023';

    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}