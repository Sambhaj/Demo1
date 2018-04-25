<?php
include('config.php');
?>
<?php
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";

if(isset($_POST['submit'])) {
	
// declare all variable
$fname=$_POST['name'];
$street_no=$_POST['street_no'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
//$gender=$_POST['gender'];
$contact_no=$_POST['cont_no'];
$email=$_POST['email'];
$booking=$_POST['booking'];
$dinner=$_POST['dinner'];
$june=$booking.",".$dinner;
/* $pptype=$_POST['pptype'];
$ptype=$_POST['ptype']; */
//$partype=$pptype.":-".$ptype;
$expectedday=$_POST['expectedday'];
$etime=$_POST['etime'];

$meal=$_POST['meal'];
$health=$_POST['health'];
$tsize=$_POST['tsize'];
$msize=$_POST['msize'];
$wsize=$_POST['wsize']; 
//$con_add=$_POST['con_add'];
$men="";
	
{
	
$check=mysql_query("select contact_no from tb_register where contact_no='$contact_no'");

    $checkrows=mysql_num_rows($check);

   if($checkrows>0) 
{
   echo "<script>alert('This contact no is already register');</script>";
} 
else{

mysql_query("INSERT INTO  tb_register(name,contact_no,email,attend,expected_day,arrival_time,meal,t_size,sm_size,sw_size,health,street_no,city,state,pincode) VALUES('$fname','$contact_no','$email','$june','$expectedday','$etime','$meal','$tsize','$msize','$wsize','$health','$street_no','$city','$state','$pincode')");

	echo "<script>alert('Thank you for registering for IPC - January 2018. You will receive your assigned group number shortly.');</script>";
	
header('Location: register.html');
	
}

 }
}








?>



<?php

require("class.phpmailer.php");
if(isset($_POST["submit"])){
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "skechersindia.in";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@skechersindia.in";
$mail->Password = "sm)ykm78fwEG";

$mail->From = "noreply@skechersindia.in";
$mail->FromName = "skechersindia";
$mail->AddAddress($_POST["email"]);
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Skechers Indian Product Conference January 2018";
$mail->Body = '<html><a href="http://skechersindia.in/IPC/register.php"><img src="http://skechersindia.in/IPC/images/mail.png" / alt="my picture"></a><br/></html>';
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "<script>Message has been sent</script>";
}

?>