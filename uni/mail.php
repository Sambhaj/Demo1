<?php
//********* Code for Mail ********
$msg="";
$sucss="";
$req="";
if (isset($_POST['send']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$phone = $_POST['phone'];
	$phone = $_POST['phone'];
   
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["city"]&&!empty($_POST["phone"]&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n Email: $email \n Phone No: $phone \n Message: $message";
		$recipient = "info@khadayatabusinessnetwork.com,$email";
		$subject = "Message from KBN -Contact Form";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Sent Successfully!!";
		$_POST = array();
	}
  else
  {
	 $req="*";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>
