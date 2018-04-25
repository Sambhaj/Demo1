
	<?php
include('config.php');
?>
<?php
		 
	require_once 'dbconfig.php';
	
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
		$qr = "SELECT Distinct id FROM tb_images WHERE id=$id";
 $result1 = mysql_query($qr) or die (mysql_error());
	}
			
			
			
			
			
			
			
if (isset($_POST['send'])) {
$t=$_POST["email"];
$t1=$_POST["name"];
$t2=$_POST["phone"];
$t3=$_POST["message"];
	
    $from = $_POST['email']; 
    $subject ="Sednainfosystems-Contact Form";
    $message = $_POST['comment'];
	$Body = "Sednainfosystems-Contact Form Details
	
	Name : $t1 
	Email : $t
	Mobile No. :$t2
	Message :$t3";
    $to= "neha@sednainfosystems.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $Body, $headers)) {
        echo "<script>alert('Mail sent successfully ');</script>";
    }
    else {
        echo "<script>alert('Mail not sent');</script>";
    }
}
		?>
		
		
		<div class="table-responsive">
		<form action="#" method="post">
		<table class="table table-striped table-bordered">
		    <tr><td>
		<?php
        while ($row =  mysql_fetch_array($result1)):
		echo "$id";
			
          
        
        ?>
			
			 <tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p1"  value="<?php echo $id; ?>" readonly="readonly"></td></tr>
		    <tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"  placeholder="Enter Your Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
            <tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Enter emailid"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
              <tr><td style="padding:5px; font-size:17px;color:#999999" > </td></tr>
			  <tr><td style="padding:5px;" width="100%"><input type="text"  placeholder="Contact No."  style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
               <tr><td style="padding:5px;  font-size:17px;color:#999999;"> </td></tr>
			  <tr><td style="padding:5px;"><textarea  name="message" placeholder="Message"  style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		       
			  
        </form>
		
   
  
  </div>
		</div>
					 <?php endwhile;?>
	