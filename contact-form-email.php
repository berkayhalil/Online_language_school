<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$config = include('sensitiveInfo.php'); // Load SMTP credentials
$secretKey = $config['recaptcha_secret_key']; // Move this to the top

if (isset($_POST['contact_form_btn'])) {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $phoneNumber = htmlspecialchars(strip_tags(trim($_POST['phone-number'])));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Невалиден email адрес."; // Error message
        header("Location: {$_SERVER["HTTP_REFERER"]}"); // Redirect to the previous page
        exit(0); // Stop script execution
    }

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
        $response = json_decode($verifyResponse);

        
        if ($response->success) {

            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->Host = 'smtp.gmail.com';
                $mail->Username = $config['smtp_username'];
                $mail->Password = $config['smtp_password'];
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Recipients
                $mail->setFrom('berkayhalil553@gmail.com', 'Bekolingo');
                $mail->addAddress('berkayhalil553@gmail.com');

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'New enquiry - Bekolingo contact form';
                $mail->Body = "<h3>Hello, you got a new enquiry!</h3>
                            <h4>Name: $name</h4>
                            <h4>Phone: $phoneNumber</h4>
                            <h4>Email: $email</h4>
                            <h4>Message: $message</h4>";

                            if ($mail->send()) {
                                $_SESSION['status'] = "Благодарим че се свързахте с нас! - Bekolingo team";
                                $_SESSION['status_type'] = "success";
                            } else {
                                $_SESSION['status'] = "Неуспешно изпращане на данните.";
                                $_SESSION['status_type'] = "error";
                            }
            } catch (Exception $e) {
                $_SESSION['status'] = "Възникна проблем при изпращане.";
                error_log("Exception Error: {$mail->ErrorInfo}");
            }

        } else {
            $_SESSION['status'] = "Recaptcha verification failed.";
        }
    } else {
        $_SESSION['status'] = "Recaptcha verification is required.";
    }

    $redirectUrl = isset($_SERVER["HTTP_REFERER"]) ? filter_var($_SERVER["HTTP_REFERER"], FILTER_SANITIZE_URL) : 'index.php';
    header("Location: $redirectUrl");
    exit(0);
} else {
    header('Location: index.php');
    exit(0);
}
?>

