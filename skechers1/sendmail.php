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

mysql_query("INSERT INTO  tb_register(name,contact_no,email,attend,partner_type,expected_day,arrival_time,meal,t_size,sm_size,sw_size,health,street_no,city,state,pincode) VALUES('$fname','$contact_no','$email','$june','$expectedday','$etime','$meal','$tsize','$msize','$wsize','$health','$street_no','$city','$state','$pincode')");

header('Location: register.html');
	echo "<script>alert('Thank you for registering for IPC - January 2018. You will receive your assigned group number shortly.');</script>";
	
	
}

 }
}








?>

<?php
if(isset($_POST["submit"])){

$to = $_POST["email"];
$subject = " Skechers Indian Product Conference January 2018";
$from="shiba@sednainfosystems.com";

            $body = '<html><body>';
            $body .= '<img src="http://acda.in/littlemee/skechers/images/mail.png" /><br/>';
            $body .= "</body></html>";

        $headers = "From: $from \r\n";
        //$headers .= "Reply-To: $$from \r\n";
        $headers = 'MIME-Version: 1.0' . "\r\n" .
           'Content-type: text/html; charset=iso-8859-1' . "\r\n" .

           'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $body,$headers);
}
?>
