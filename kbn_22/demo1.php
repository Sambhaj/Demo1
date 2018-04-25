<?php
include("config.php");
?>
<?php require_once 'config.php';
	
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
		$qr = "SELECT * FROM tbmember_registration WHERE id=$id";
 $result1 = mysql_query($qr) or die (mysql_error());
 echo"$id";
	}
?>			
 <?php
        while ($row =  mysql_fetch_array($result1)):
		
		
           
        $card="$row[3]";
		echo"$card";
		
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

$name=$_POST['name'];
	
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
/* 
$originalDate = "2-03-2011";
$newDate = date("Y-m-d", strtotime($originalDate));
 */

{
	$dt1=date("Y-m-d");


  /* 
	$date3 = DateTime::createFromFormat("d/m/Y", "$date");
    $f3date = $date3->format("Y-m-d") */;
	
	$a=mysql_query("INSERT INTO tb_business(card_name,name,email,phone,message) VALUES('$card','$name','$email','$phone','$message')");
	echo"$a";
	$sucss="Register Successfully";

} 
}
else {
			 $req="";
	 $msg="Please Fill In All Mandatory Fields!";
			}

?>

	<label id="myText<?php echo $dataid;?>" style="display:none;"><?php echo $dataName; ?></label>
	<button onclick="foo.call(this)" class="btn" id="<?php echo $dataid;?>" data-name-btn="<?php echo $dataName?>"           style="background:url(http://sktthemesdemo.net/interior/wp-content/themes/interior-pro/images/body-bg.png); border:red;">
	<?php
     
	?></button>


					 
<script>
var foo = function()
{
    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal


var idget = this.id;
var btn = document.getElementsByClassName(idget);
	

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 

    modal.style.display = "block";
	var x = document.getElementById("myText"+idget).textContent;
   document.getElementsByClassName("appear")[0].innerHTML = x;


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}};
		
	</script>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<body  >
<div class="main">
  

 <!----Header----->
  <div class="container"> 
  <div class="row"  style="background-color:#ffffff"><br>
 
    <form action="" method="POST">
        <center>
          <table style="width:80%;" border="0" cellspacing="5px" cellpadding="5px" >
            <tr>
                <td colspan="2"  >
                    <h2>Get In Touch</h2>

                </td>
            </tr>
            <tr>
                <td style="height:50px">
                    <table style="width: 100%;" border="0" cellspacing="5px" cellpadding="5px">
                        <tr>
                           <td>
                               <span style="color:#DF1018;"></span> NAME 

                           </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="name" name="name" placeholder="Enter Your Name" style="width:100%; height: 35px;padding-left:5px" value="">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="color:#DF1018;"></span> EMAIL 

                            </td>
                           </tr>
                          <tr>
                            <td>
                                <input type="text" name="email" onblur="emailvalidate();" id="email"  placeholder="Enter Your Email Id" style="width:100%; height: 35px;padding-left:5px" value=""><br><span style="display:none;color:#DF1018;font-weightbold;" id="emailMsg">Please enter valid email</span>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                  <span style="color:#DF1018;"></span> PHONE 

                            </td>
                             </tr>
                        <tr>
                            <td>
                                <input type="text"  onblur="mobval();" maxlength="10" id="phone" placeholder="Enter Your Phone Number" style="width:100%; height: 35px;padding-left:5px" name="phone" value=""><br><span style="display:none;color:#DF1018;font-weightbold;" id="mobNumbMsg">Please enter correct mobile number</span>

                            </td>
                        </tr>
                    </table>
                </td>
                <td style="height:50px">
                     <table style="width: 100%;" border="0" cellspacing="5px" cellpadding="5px">
                        <tr>
                           <td>
                               <span style="color:#DF1018;"></span> MESSAGE 

                           </td>
                            </tr>
                         <tr>
                            <td>
                                <textarea class="txtarea" name="message" rows="10" placeholder="Enter Your Message"  style="width:100%;height:155px;padding-left:5px"></textarea>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <button id="btn" name="submit">SUBMIT</button>
                             </td>
                         </tr>
                       </table>
                </td>
              </tr>
           </table>
         </center>
       </form>
     </div>
    </div>
</div>
<!----End Main Contents---------->
 <?php endwhile;?>


</body>
</html>





		
