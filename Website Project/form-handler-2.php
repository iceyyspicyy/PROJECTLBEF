<?php
$name = $_POST['name'];
$student_id = $_POST['studentID'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$message = $_POST['message'];

$email_from = 'aryenmaharjan14331@gmail.com';
$email_subject = 'Fund Submission';
$email_body = "Username: $name. \n".
                "User-email: $email. \n".
                "Student ID : $student_id. \n".
                "Amount Funded: $amount. \n".
                "User Message: $message. \n";

$to = 'aryenmaharjan14331@gmail.com';
$headers = 'From: $email \r\n';
$headers .= "Reply-to: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: fund.html")

?>