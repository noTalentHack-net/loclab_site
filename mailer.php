<?php
if(isset($_POST['submit'])) {
$to = "mo.cordero12@gmail.com";
$subject = "Locus Labs Question/Feedback";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $message";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
// header('Location: confirmation.htm');
} else {
// handle the error somehow
}
?>