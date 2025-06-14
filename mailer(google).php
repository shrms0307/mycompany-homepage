<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

header('Content-Type: application/json'); // JSON 응답을 설정

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $inquiry = $_POST['q_option'];
    $message = $_POST['q_content'];

    $post_m = "이름: " . $name . "<br>전화번호: " . $phone . "<br>이메일: " . $email . "<br>문의내용: " . $message;

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com" 
        $mail->SMTPAuth = true;
        $mail->Username =  "nogeunseong1@gmail.com"
        $mail->Password = "bvoo nqdp ffcb fvln"; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // SMTP 포트로는 465 아니면 587, 구글은 587 
        $mail->CharSet = "utf-8";
        $mail->setFrom('', '더바이럴 문의'); // 보내는 사람
        $mail->addAddress('account1@the-viral.co.kr', '더바이럴 담당자'); // 받는 사람
        $mail->isHTML(true);
        $mail->Subject = $inquiry; // 제목
        $mail->Body = $post_m; // 내용
        $mail->send();

        // 응답 메시지
        $response = array(
            "status" => "success",
            "message" => "통신 성공~",
            "data" => array(
                "name" => htmlspecialchars($name),
                "phone" => htmlspecialchars($phone),
                "email" => htmlspecialchars($email),
                "inquiry" => htmlspecialchars($inquiry),
                "message" => htmlspecialchars($message)
            )
        );

        echo json_encode($response);
    } catch (Exception $e) {
        $response = array(
            "status" => "error",
            "message" => "Email sending failed: " . $mail->ErrorInfo
        );
        echo json_encode($response);
    }
} else {
    $response = array(
        "status" => "error",
        "message" => "Invalid request method"
    );
    echo json_encode($response);
}
?>
