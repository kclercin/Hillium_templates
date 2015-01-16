<?php

$name = $_POST['contactName']; // contain name of person
$email = $_POST['email']; // Email address of sender
$subject = $_POST['subject']; // Your website URL
$body = $_POST['comments']; // Your message
$receiver = "email@gmail.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to
if (!empty($name) & !empty($email) && !empty($body)) {
    $body = "Name:{$name}\n\nSubject :{$subject}\n\nComments:{$body}";
	$send = mail($receiver, 'Contact Form Submission', $body, "From: {$email}"); //Change Contact Form Submission to what you want the incoming email to be called
    if ($send) {
        echo 'true'; //if everything is ok,always return true , else ajax submission won't work
    }

}

?>