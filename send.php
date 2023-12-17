<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ejs06795@gmail.com';                     //SMTP username
    $mail->Password   = 'hikbxtgfdxiivrvg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ejs06795@gmail.com', 'Anajah Academy Contact Form');
    $mail->addAddress('mnasfa.houssam@gmail.com', 'Mnasfa Houssam');     //Add a recipient
    

    //Content
    $mail->isHTML(true);  
    $mail->CharSet = "UTF-8" ;                             //Set email format to HTML
    $mail->Subject = "New message from $name";
    $mail->Body    = " Hello Anajah Academy, <br><br> You got a new message from <b>$email</b>  <br><br> <b>Full Name :</b> $name <br><br> <b>Email :</b> $email <br><br> <b>Phone :</b> $phone <br><br> <b>Message :</b> $message ";
   

    $mail->send();
    echo "Message has been succesfully";
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}