<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$env = parse_ini_file('.env');

$req_vars = [
    'SMTP_HOST',
    'SMTP_USERNAME',
    'SMTP_PASSWORD',
    'SMTP_FROM_EMAIL',
    'SMTP_FROM_NAME',
    'SMTP_PORT',
    'RECAPTCHA_SECRET_KEY',
];

foreach ($req_vars as $var) {
    if (!isset($env[$var]) || empty($env[$var])) {
        die('Error missing required environment variable: ' . $var);
    }
}

// Verify reCAPTCHA
$recaptcha_response = $_POST['g-recaptcha-response'];
if (empty($recaptcha_response)) {
    die('Error: Please complete the reCAPTCHA verification');
}

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret' => $env['RECAPTCHA_SECRET_KEY'],
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$recaptcha_options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($recaptcha_data)
    ]
];

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_json = json_decode($recaptcha_result, true);

if (!$recaptcha_json['success']) {
    die('Error: reCAPTCHA verification failed');
}

$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $env['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $env['SMTP_USERNAME'];
    $mail->Password = $env['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $env['SMTP_PORT'];

    // My Details
    $mail->setFrom($env['SMTP_FROM_EMAIL'], $env['SMTP_FROM_NAME']);
    $mail->addAddress($env['SMTP_FROM_EMAIL']);

    // Content
    $mail->Subject = "Contact Form Submission: $subject";
    $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";
    $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
