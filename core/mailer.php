<?php
    ini_set('display_errors', 0);
    error_reporting(E_ALL);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    try {
        require __DIR__ . '/../vendor/autoload.php';
        $env = parse_ini_file(__DIR__ . '/../config.ini');

        if (!$env) { die("System config error."); }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Invalid Request Method.");
        }

        $company = isset($_POST['fcompany']) ? htmlspecialchars(trim($_POST['fcompany'])) : '';
        $phone   = isset($_POST['fphone']) ? htmlspecialchars(trim($_POST['fphone'])) : '';
        $name    = isset($_POST['fname']) ? htmlspecialchars(trim($_POST['fname'])) : '';
        $type    = isset($_POST['frestaurant']) ? htmlspecialchars(trim($_POST['frestaurant'])) : '';
        $message = isset($_POST['fmessage']) ? htmlspecialchars(trim($_POST['fmessage'])) : '';
        $recaptcha = isset($_POST['recaptcha_response']) ? $_POST['recaptcha_response'] : '';

        // MARK: VALIDATE FORM

        if (!$company || !$phone || !$name || !$type || !$message) {
            die("Missing required fields.");
        }

        if (!$recaptcha) {
            die("reCAPTCHA missing.");
        }

        // MARK: VERIFY reCAPTCHA

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
            'secret' => $env['RECAPTCHA_SECRET_KEY'],
            'response' => $recaptcha
        )));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $verify = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($verify);

        if (!$response || empty($response->success) || $response->score < 0.5) {
            die("reCAPTCHA verification failed.");
        }

        // MARK: EMAIL TEMPLATE

        $logoUrl = 'http://206.189.90.152/~rncaqsh123/demo/assets/images/logo/logo-snow-beef.png';

        $body = '
            <!DOCTYPE html>
            <html>
            <head>
            <meta charset="UTF-8">
            </head>

            <body style="margin:0; padding:0; font-family:Sarabun, Arial, sans-serif;">

            <div style="max-width:600px; margin:40px auto; background:#141416; border-radius:12px; overflow:hidden; border:1px solid rgba(226,194,130,0.2);">

                <div style="text-align:center; padding:30px 20px; border-bottom:1px solid rgba(226,194,130,0.2);">
                    <img src="'.$logoUrl.'" style="max-width:80px; margin-bottom: 15px;">
                    <div style="color:#E2C282; font-size:14px; letter-spacing:2px; font-family:Times New Roman, serif;">
                        SNOW BEEF THAILAND
                    </div>
                </div>

                <div style="padding:25px 30px; text-align:center;">
                    <h2 style="color:#E2C282;">New Contact Request</h2>
                    <p style="color:#aaa;">มีผู้ติดต่อใหม่จากเว็บไซต์</p>
                </div>

                <div style="padding:0 30px 30px; color:#fff;">

                    <p><b style="color:#E2C282;">Company:</b><br>'.$company.'</p>
                    <p><b style="color:#E2C282;">Phone:</b><br>'.$phone.'</p>
                    <p><b style="color:#E2C282;">Name:</b><br>'.$name.'</p>
                    <p><b style="color:#E2C282;">Restaurant Type:</b><br>'.$type.'</p>

                    <div style="margin-top:20px;">
                        <b style="color:#E2C282;">Message:</b>
                        <div style="margin-top:10px; padding:15px; background:#1c1c1e; border-radius:8px;">
                            '.$message.'
                        </div>
                    </div>

                </div>

                <div style="text-align:center; padding:20px; font-size:12px; color:#777;">
                    Snow Beef Thailand © '.date("Y").'
                </div>

            </div>

            </body>
            </html>
        ';

        // MARK: SEND EMAIL

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $env['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $env['MAIL_USERNAME'];
        $mail->Password   = $env['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = (int)$env['MAIL_PORT'];
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($env['MAIL_FROM'], 'Snowbeef Website');
        $mail->addAddress($env['MAIL_TO']);
        $mail->addReplyTo($env['MAIL_FROM'], 'Customer');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form - Snowbeef';
        $mail->Body    = $body;

        $mail->send();

        header("Location: https://www.snowbeefthailand.com/demo/contact.php");
        exit;

    } catch (Exception $e) {
        die("Error sending email. Please try again later.");
    }
?>