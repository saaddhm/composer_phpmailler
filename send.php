<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$fname=$_POST['fname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saaddhm3@gmail.com';
    $mail->Password   = 'zepi tjiw jhld euuz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Expéditeur
    $mail->setFrom($email, $fname);

    // Destinataire
    $mail->addAddress('saaddhm3@gmail.com', 'Client');

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'Email envoyé avec PHPMailer';

    $mail->send();
    echo 'Message envoyé avec succès';
    header('location: ./');
} catch (Exception $e) {
    echo "Erreur : {$mail->ErrorInfo}";
}
?>


<!-- composer require phpmailer/phpmailer -->
