<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // ใช้ composer

// .env
$env = parse_ini_file(__DIR__ . '/../.env');

$company = htmlspecialchars($_POST['fcompany'] ?? '');
$phone   = htmlspecialchars($_POST['fphone'] ?? '');
$name    = htmlspecialchars($_POST['fname'] ?? '');
$type    = htmlspecialchars($_POST['frestaurant'] ?? '');
$message = htmlspecialchars($_POST['fmessage'] ?? '');

// Validate

if (!$company || !$phone || !$name || !$type || !$message) {
    die("Missing required fields");
}

// Email content

$body = "
<h2>New Contact Form</h2>
<b>Company:</b> {$company}<br>
<b>Phone:</b> {$phone}<br>
<b>Name:</b> {$name}<br>
<b>Restaurant Type:</b> {$type}<br><br>
<b>Message:</b><br>
{$message}
";

// Send mail

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $env['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $env['MAIL_USERNAME'];
    $mail->Password   = $env['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $env['MAIL_PORT'];

    $mail->setFrom($env['MAIL_FROM'], 'Snowbeef Contact');
    $mail->addAddress($env['MAIL_TO']);

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form - Snowbeef';
    $mail->Body    = $body;

    $mail->send();

    // // redirect
    // header("Location: https://snowbeefthailand.com/?success=1");
    exit;

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}