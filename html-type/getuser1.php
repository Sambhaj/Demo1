
	<?php
include('config.php');
?>
<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) {
		$pname="";
		$id = intval($_REQUEST['id']);
		$qr = "SELECT * FROM tb_projectinfo WHERE id=$id";
 $result1 = mysql_query($qr) or die (mysql_error());
	}
			
			
			
			
			
			
			
require("class.phpmailer.php");
if(isset($_POST["submit"])){
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "gruhalaxmi.in";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@skechersindia.in";
$mail->Password = "sm)ykm78fwEG";


$t=$_POST["email"];
$t1=$_POST["name"];
$t2=$_POST["phone"];
$t3=$_POST["message"];
$id=$_POST["id"];


$mail->From = "noreply@gruhalaxmi.in";


$mail->FromName = "Gruhalaxmi";


$mail->AddAddress("sednainfo5@gmail.com");

////$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);


$mail->Subject = "Gruhalaxmi-Contact Form";


$mail->Body = "<b>Ghrhalaxmi-Contact Form Details </b><br/><br/> Project Name:$id <br/> Name : $t1<br/> Email : $t<br/> Mobile No. :$t2<br/> address :$id";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "<script>alert('Message Could Not Be Sent.');</script>";
echo "Mailer Error: " . $mail->ErrorInfo;

exit;
}


echo "<script>alert('Thank you for contacting us. We will be in touch with you very soon');</script>";

}
		?>
		
		
		<div class="table-responsive">
		<form action="#" method="post">
		
		<h4 class="modal-title">
                            	<span> Contact Form </span>
                            </h4> 
		<table class="table table-striped table-bordered">
		    <tr><td>
		<?php
        while ($row =  mysql_fetch_array($result1)):
		echo "$pname";
			
          
        
        ?>
			
			  <tr><td style="padding:5px;"><input type="text" style="width:100%;height:30px"   name="id" id="id"  value="<?php echo $row[2]; ?>" readonly="readonly"></td></tr>
		      <tr><td style="padding:5px;"><input type="text" name="name" style="width:100%;height:30px"  placeholder="Name" required="required" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
              <tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Email"  required="required" style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
            
			  <tr><td style="padding:5px;" width="100%"><input type="number" maxlength="10" placeholder="Contact No."  style="width:100%;height:30px" required="required" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
               <tr><td style="padding:5px;  font-size:17px;color:#999999;"> </td></tr>
			  <tr><td style="padding:5px;"><textarea  name="message" placeholder="Message"  required="required" style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		       
			  
        </form>
		
   
  
  </div>
		</div>
					 <?php endwhile;?>
	