<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","587");
$to = "njokusunnyojo@gmail.com";
$from = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["subject"];
$number = $_POST["number"];
$cmessage = $_POST["your_message"];
$company = $_POST["company_name"];
$companyadd = $_POST["company_address"];

$headers = "From: $from";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "You have a message from your portfolio.";

$logo = 'img/logo.png';
$link = '#';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr>";
$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
$body .= "<td style='border:none;'><strong>Company Name:</strong> {$company}</td>";
$body .= "<td style='border:none;'><strong>Company Address:</strong> {$companyadd}</td>";


$body .= "<tr><td></td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";
ini_set("SMTP", "ssl://smtp.gmail.com");
ini_set("smtp_port", "587");
$send = mail($to, $subject, $body, $headers);
if ($send) {
    $_SESSION["success"] = 'Sent';
    header("Location:index.php");
} else {
    $_SESSION["error"] = 'Sorry, error occured.';
    header("Location:index.php");
}
