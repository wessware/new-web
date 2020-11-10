<?php
$name = $_POST["name"];
$email = $_POST["mail"];
$phone = $_POST["phone"]
$message = $_POST["message"]

$formContent = "From: $name <br>"
        . "Phone: $phone <br>"
        . "Mail: $email <br>"
        . "Message: $message";

$recipient = "setkenya@gmail.com";
$subject = "Content Form";
$mailHeader ="MIME-Version: 1.0" . "\r\n"
        . "Content-type: text/html; charset=iso-8859-1" . "\r\n"
        . "From: " . $email . "\r\n"
        . "Reply-To: ". $email . "\r\n"
        . "X-Mailer: PHP/". phpversion();
$success =mail($recipient, $subject, $formContent, $mailHeader);
echo "Thanks. Email is being sent to our team."
        . ($success ? "successful" : "failed")
        . ". <a href="'index.html'>Home</a>";
?>