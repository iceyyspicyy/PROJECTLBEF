<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'aryenmaharjan14331@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "UserName: $name. \n".
            "User Email : $visitor_email.\n".
            "Subject: $Subject.\n".
            "User Message : $message. \n";

$to = 'aryenmaharjan14331@gmail.com';  /*where you want to receive the inquires */

$headers = 'From: $email_from \r\n';

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

?>