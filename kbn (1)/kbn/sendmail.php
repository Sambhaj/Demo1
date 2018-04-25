<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you '
	);

    $name = @trim(stripslashes($_POST['name'])); 
	$phone = @trim(stripslashes($_POST['phone']));
   
    $email_from = $email;
    $email_to = 'info@khadayatabusinessnetwork.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'phone: ' . $phone;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
	?>
