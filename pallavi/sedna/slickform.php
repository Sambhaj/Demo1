<?php


if(isset($_REQUEST["isvalid"])){
	
	$youremail = "asksedna@gmail.com"; // Enter your email here!!
	$usersname = $_POST["usersname"];
	$usersemail = $_POST["usersemail"];
	$usersphonenumber = $_POST["usersphone"];
	$mailsubject = "Message From Sedna website: contact page";	
	$usersmessage = $_POST["userscomment"];
	$message =
	
	"$usersname has contacted you from your site.
	
	$subject:
	
	Their Message is as follows:
	
	$usersmessage
	
	...............................................
	
	Contact details:
	
	Phone Number: $usersphonenumber
	Email Address: $usersemail"; 
	
	$headers = 'From:' . $usersemail . "\r\n";
	mail($youremail, $mailsubject, $message, $headers);
	
	echo " Message send successfully";
	
} else {
	
	echo "try again later....!";
	
}