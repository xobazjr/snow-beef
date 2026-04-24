<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// CONFIG 
$fromEmail = "no-reply@snowbeefthailand.com";
$toEmail   = "chayada@biofresh.co.th";

// GET DATA 
$fcompany     = htmlspecialchars($_POST['fcompany'] ?? '');
$fphone       = htmlspecialchars($_POST['fphone'] ?? '');
$fname        = htmlspecialchars($_POST['fname'] ?? '');
$frestaurant  = htmlspecialchars($_POST['frestaurant'] ?? '');
$fmessage     = htmlspecialchars($_POST['fmessage'] ?? '');

// BUILD MESSAGE
$message = "
<h2>New Contact Form</h2>
<p><strong>Company:</strong> {$fcompany}</p>
<p><strong>Phone:</strong> {$fphone}</p>
<p><strong>Name:</strong> {$fname}</p>
<p><strong>Restaurant Type:</strong> {$frestaurant}</p>
<p><strong>Message:</strong><br>{$fmessage}</p>
";

// MAIL 
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = "smtp-relay.brevo.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "7479cc001@smtp-brevo.com";
    $mail->Password   = "YOUR_NEW_PASSWORD";
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->CharSet = "UTF-8";

    $mail->setFrom($fromEmail, "Snowbeef Website");
    $mail->addAddress($toEmail);

    $mail->Subject = "New Contact from Snowbeef";
    $mail->isHTML(true);
    $mail->Body = $message;

    $mail->send();

    header("Location: https://snowbeefthailand.com/?success=1");
    exit;

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}