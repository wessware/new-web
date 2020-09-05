<?php
// Emails form data to you and the person submitting the form

// Set your email below
$myemail = "admin@setkenya.org"; 

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//check the name 
if (strlen($name) < 2) {
    $error['name'] = "Please re-enter a valid name";
}
//check the mail address
if(!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is'), $email) {
    $error['mail'] = "Please enter a valid email address";
}
//check the message
if(strlen($message) < 15) {
    $error['message'] = "Please re-enter your message. It should have at least 15 characters."
}

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your Feedback",$msg);
echo 'Set Kenya values your Feedback. Thank you for your Contribution.  <a href="index.html">Click here to return to our homepage.</a>';

?>
