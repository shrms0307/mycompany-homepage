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

// POST 데이터가 잘 들어오는지 확인
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST); // 여기에 $_POST 데이터가 있는지 확인
    $name = $_POST['name'] ?? '이름 없음';
    $phone = $_POST['phone'] ?? '전화번호 없음';
    $email = $_POST['mail'] ?? '이메일 없음';
    $inquiry = $_POST['q_option'] ?? '문의 내용 없음';
    $message = $_POST['q_content'] ?? '메시지 없음';

    // PHPMailer 설정
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtps.hiworks.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ng.seong@the-viral.co.kr";
        $mail->Password = "RNGJgQjRk6aC8q5oklc3";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465; // 587 (TLS) 또는 465 (SSL)
        $mail->CharSet = "utf-8";
        $mail->setFrom('ng.seong@the-viral.co.kr', '더바이럴 문의'); // 보내는 사람 설정
        $mail->addAddress('account1@the-viral.co.kr', '더바이럴 담당자'); // 받는 사람 설정
        $mail->isHTML(true);
        $mail->Subject = $inquiry;
        $mail->Body = "이름: $name <br> 전화번호: $phone <br> 이메일: $email <br> 문의내용: $message";
        $mail->SMTPDebug = 0;
        $mail->send();
        $mail->Timeout = 10;

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
