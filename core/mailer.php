<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

// .env
$env = parse_ini_file(__DIR__ . '/../.env');

$company = htmlspecialchars(trim($_POST['fcompany'] ?? ''));
$phone   = htmlspecialchars(trim($_POST['fphone'] ?? ''));
$name    = htmlspecialchars(trim($_POST['fname'] ?? ''));
$type    = htmlspecialchars(trim($_POST['frestaurant'] ?? ''));
$message = htmlspecialchars(trim($_POST['fmessage'] ?? ''));

// Validate
if (!$company || !$phone || !$name || !$type || !$message) {
    die("Missing required fields");
}

// Email content
$logoUrl = 'http://206.189.90.152/~rncaqsh123/demo/assets/images/logo/logo-snow-beef.png';

$body = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body style="margin:0; padding:0; font-family:Sarabun, Arial, sans-serif;">

<div style="max-width:600px; margin:40px auto; background:#141416; border-radius:12px; overflow:hidden; border:1px solid rgba(226,194,130,0.2);">

    <!-- HEADER -->
    <div style="text-align:center; padding:30px 20px; border-bottom:1px solid rgba(226,194,130,0.2);">
        <img src="'.$logoUrl.'" alt="Snow Beef" style="max-width: 80px; margin-bottom:10px;">
        <div style="color:#E2C282; font-size:14px; letter-spacing:2px; font-family:Times New Roman, Times, serif;">
            SNOW BEEF THAILAND
        </div>
    </div>

    <!-- TITLE -->
    <div style="padding:25px 30px; text-align:center;">
        <h2 style="margin:0; color:#E2C282; font-weight:500;">New Contact Request</h2>
        <p style="color:#aaa; font-size:14px; margin-top:8px;">มีผู้ติดต่อใหม่จากเว็บไซต์</p>
    </div>

    <!-- CONTENT -->
    <div style="padding:0 30px 30px; color:#fff;">

        <div style="margin-bottom:15px;">
            <span style="color:#E2C282;">Company:</span><br>
            <span>'.$company.'</span>
        </div>

        <div style="margin-bottom:15px;">
            <span style="color:#E2C282;">Phone:</span><br>
            <span>'.$phone.'</span>
        </div>

        <div style="margin-bottom:15px;">
            <span style="color:#E2C282;">Name:</span><br>
            <span>'.$name.'</span>
        </div>

        <div style="margin-bottom:15px;">
            <span style="color:#E2C282;">Restaurant Type:</span><br>
            <span>'.$type.'</span>
        </div>

        <div style="margin-top:25px;">
            <span style="color:#E2C282;">Message:</span>
            <div style="margin-top:8px; padding:15px; background:#1c1c1e; border-radius:8px; line-height:1.6;">
                '.$message.'
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <div style="text-align:center; padding:20px; font-size:12px; color:#777; border-top:1px solid rgba(226,194,130,0.2);">
        Snow Beef Thailand © '.date("Y").'<br>
        Premium Australian Beef Experience
    </div>

</div>

</body>
</html>
';

// Send mail
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $env['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $env['MAIL_USERNAME'];
    $mail->Password   = $env['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int)$env['MAIL_PORT'];

    $mail->CharSet = 'UTF-8';

    $mail->setFrom($env['MAIL_USERNAME'], 'Snowbeef Website');

    $mail->addAddress($env['MAIL_TO']);

    $mail->addReplyTo($env['MAIL_USERNAME'], 'Customer');

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form - Snowbeef';
    $mail->Body    = $body;

    $mail->send();

    // header("Location: /?success=1");
    header("Location: /snow-beef/?success=1");
    exit;

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}