<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$company_name = $_POST["company_name"];
$company_address = $_POST["company_address"];
$subject = $_POST["subject"];
$phone = $_POST["number"];
$message = $_POST["your_message"];

$toEmail = 'njokusunnyojo@gmail.com';
$senderName = $name;
$mailSubject = $subject;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $senderName . '  <your online portfolio>' . "\r\n";

$txt = $message . "\r\n" . "Sender email:  " . $email . "\r\n" . "Sender Phone number" . $phone . "\r\n" . "Company Name: " . $company_name . "\r\n" . "Company Address:" . $company_address;
$txt = str_replace("\n.", "\n..", $txt);
$txt = wordwrap($txt, 70);

$send = mail($toEmail, $mailSubject, $txt, $headers);
if ($send) {
    $_SESSION["success"] = "Email Sent. I'll get back to you";
    header("Location: index.php");
} else {
    $_SESSION["error"] = 'Error occured, Please try again.';
    header("Location: index.php");
}