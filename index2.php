<?php
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/* Include the Composer generated autoload.php file. */
require 'vendor/autoload.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF; // You can set this to DEBUG_SERVER or DEBUG_CLIENT for debugging
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'emeriebow78@gmail.com'; // Your Gmail email address
    $mail->Password   = 'bmoyqgmodswblekp'; // Your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
    $mail->Port       = 465; // TCP port to connect to (465 for SSL)

    // Recipients
    $mail->setFrom('emeriebow78@gmail.com', 'Holyboi'); // Set your name and email address
    $mail->addAddress('d.champs001@gmail.com', 'Kojo0skilzz'); // Add recipient email address and name

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'wanna say hi';
    $mail->Body    = 'im fine and u and u and u and u and u and u, u just ignore my chat and dont wanna reply;well this is the stmp.ive finally learnt git indirectly and this is example of dat i wanna show u';

    // Send email
    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} catch (\Exception $e) {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
}
?>