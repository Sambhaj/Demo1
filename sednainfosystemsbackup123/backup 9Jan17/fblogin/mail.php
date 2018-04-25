<?php
$to = "amoljain108@rediffmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "amoljain108@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>