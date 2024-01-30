<?php

include("../config.php");

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// echo"   <br/>". $name ." <br/>". $email ."<br/>". $subject ."<br/>". $message ."<br/>";
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "jigar.baraiya@vijigi.com";
$mail->Password = "hebj fcrc adjk yslj";

$mail->setFrom('noreply@vijigi.com', 'vijigi');
$mail->addAddress($email,$name);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();


$query = "DELETE FROM request WHERE oem_email = '$email'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:requests.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }
?>