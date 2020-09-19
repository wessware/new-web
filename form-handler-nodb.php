<?php
$myemail = "setkenya@gmail.com"; 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if (strlen($name) < 2) {
    $error['name'] = "Please re-enter a valid name";
}
if(!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is'), $email) {
    $error['email'] = "Please enter a valid email address";
}
if(strlen($message) < 15) {
    $error['message'] = "Please re-enter your message. It should have at least 15 characters."
}

$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your Feedback",$msg);
echo 'Set Kenya values your Feedback. Thank you for your Contribution.  <a href="index.html">Click here to return to our homepage.</a>';
?>
