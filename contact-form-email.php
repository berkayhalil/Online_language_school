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
    $formTitle = htmlspecialchars($_POST['form_name']);
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $phoneNumber = htmlspecialchars(strip_tags(trim($_POST['phone-number'])));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));
    $courseLevel = htmlspecialchars(strip_tags(trim($_POST['course-level'])));
    $course = htmlspecialchars(strip_tags(trim($_POST['course'])));

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
                $mail->setFrom('info.bekolingo@gmail.com', 'Bekolingo');
                $mail->addAddress('info.bekolingo@gmail.com');

                // Content
                if (!empty($courseLevel)) {
                    $courseInfo = "<h4>Level: $courseLevel</h4>";
                } else {
                    $courseInfo = "<h4>Level: It is not specified</h4>";
                }



                $mail->isHTML(true);
                if ($formTitle == "ЗАЯВИ КУРС") {
                    $mail->Subject = 'BEKOLINGO - New course application ';
                    $formContent = 'Hello, you got a new application from ' . $name;
                } else if ($formTitle == "ЗАЯВИ БЕЗПЛАТНА КОНСУЛТАЦИЯ") {
                    $mail->Subject = 'BEKOLINGO - New consultation request';
                    $formContent = 'Hello, you got a new consultation request from ' . $name;
                } else if ($formTitle == "ИЗПРАТИ СЪОБЩЕНИЕ") {
                    $mail->Subject = 'BEKOLINGO - New message';
                    $formContent = 'BEKOLINGO - Hello you got a new message from ' . $name;
                }
                $mail->Body = "<h3>$formContent</h3>
                            <h4>Name: $name</h4>
                            <h4>Phone: $phoneNumber</h4>
                            <h4>Email: $email</h4>
                            <h4>Course: $course</h4>
                             $courseInfo
                            <h4>Message: $message</h4>";//check for $couse if it doesn't exist then don't send it;!!!
                // check also the form name!!!
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