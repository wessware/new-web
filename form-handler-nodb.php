<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $phone \n Mail: $email \n Message: $message";

$recipient = "setkenya@gmail.com";

$subject = "Contact Form";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for your Feedback on Set Kenya. \n 
We will use it to the best of effect. Follow this link to return to our <a href="index.html">home page"</a>;

?>