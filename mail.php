<?php $name = $_POST['cf-name'];
$email = $_POST['cf-email'];
$message = $_POST['cf-message'];
$formcontent="From: $name \n Message: $message";
$recipient = "shaminsahebzada@gmail.com";
$subject = "Hello From Your Website - (contact form)";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>