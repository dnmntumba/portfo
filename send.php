<?php
session_start();
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    exit("Accès interdit");
}

// =========================
// CSRF PROTECTION
// =========================

if(
    empty($_POST['csrf_token']) ||
    empty($_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
){
    exit("CSRF détecté");
}

header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: no-referrer");
header("Content-Security-Policy: default-src 'self'");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php';
require 'security/firewall.php';

if(class_exists('Firewall')){
    $firewall = new Firewall();
    $firewall->check();
}


// =========================
// LOAD .ENV
// =========================
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    exit("Accès interdit");
}


// =========================
// RECAPTCHA V3 VERIFICATION
// =========================

$secretKey = $_ENV['RECAPTCHA_SECRET'];

$token = $_POST['g-recaptcha-response'] ?? '';

if(!$token){
    exit("Token manquant");
}

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret="
    . $secretKey
    . "&response="
    . $token
);

$response = json_decode($verify);

if(!$response->success || $response->score < 0.5){
    exit("Suspicion de bot détectée");
}


// =========================
// DONNÉES
// =========================

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if(empty($name) || empty($email) || empty($message)){
    exit("Champs requis manquants");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    exit("Email invalide");
}

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = nl2br(htmlspecialchars($message));


// =========================
// EMAIL (MODIFIÉ UNIQUEMENT ICI)
// =========================

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    // 🔥 SECURISÉ (.env)
    $mail->Username = $_ENV['SMTP_USER'];
    $mail->Password = $_ENV['SMTP_PASS'];

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_ENV['SMTP_USER'], 'Portfolio Contact');
    $mail->addReplyTo($email, $name);
    $mail->addAddress($_ENV['SMTP_USER']);

    $mail->isHTML(true);
    $mail->Subject = "Nouveau message - $name";

    $mail->Body = "
    <div style='max-width:700px;margin:auto;background:#0f172a;border-radius:20px;overflow:hidden;font-family:Arial,sans-serif;border:1px solid #1e293b;'>
    ```
    <div style='background:linear-gradient(135deg,#00bfff,#7b2cff);padding:35px;text-align:center;'>

        <h1 style='margin:0;color:#ffffff;font-size:30px;'>
            Nouveau Message
        </h1>

        <p style='margin-top:10px;color:#ffffff;font-size:15px;'>
            Un visiteur vous a contacté depuis votre portfolio
        </p>

    </div>

    <div style='padding:30px;background:#0f172a;'>

        <div style='background:#111827;padding:18px;border-radius:12px;margin-bottom:15px;'>

            <div style='font-size:13px;color:#00bfff;font-weight:bold;margin-bottom:5px;'>
                NOM DU VISITEUR
            </div>

            <div style='font-size:16px;color:#ffffff;'>
                $name
            </div>

        </div>

        <div style='background:#111827;padding:18px;border-radius:12px;margin-bottom:15px;'>

            <div style='font-size:13px;color:#00bfff;font-weight:bold;margin-bottom:5px;'>
                ADRESSE EMAIL
            </div>

            <div style='font-size:16px;color:#ffffff;'>
                $email
            </div>

        </div>

        <div style='background:#111827;padding:20px;border-radius:12px;border-left:4px solid #00bfff;'>

            <div style='font-size:13px;color:#00bfff;font-weight:bold;margin-bottom:10px;'>
                MESSAGE
            </div>

            <div style='font-size:15px;line-height:1.8;color:#d1d5db;'>
                $message
            </div>

        </div>

    </div>

    <div style='background:#0b1220;padding:20px;text-align:center;border-top:1px solid #1e293b;'>

        <p style='margin:0;color:#94a3b8;font-size:13px;'>
            Message envoyé depuis votre Formulaire Portfolio Dan NTUMBA
        </p>

    </div>
    ```
    </div>
    ";


    $mail->send();

    // 🔥 destruction du token CSRF utilisé
    unset($_SESSION['csrf_token']);

    header("Location: index.php?success=1");
    exit;

} catch (Exception $e) {
    echo "error";
}
?>