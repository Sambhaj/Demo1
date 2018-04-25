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
	$message = $_POST['message'];
	$phone = $_POST['phone'];
   
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n Email: $email \n Phone No: $phone \n Message: $message";
		$recipient = "ccgnik@gmail.com,info@utsavaestore.com";
		$subject = "Message from Swiss Airport Transfer Website";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Inquiry Send Successfully!!";
		$_POST = array();
	}
  else
  {
	 $req="*";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Utsav Darpan | Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
   
  <link rel='stylesheet'   href='css/bootstrap.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='css/bootstrap.min.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='css/bootstrap-theme.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='css/bootstrap-theme.min.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='css/bootstrap.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='style.css' type='text/css' media='all' />
  <link rel='stylesheet'   href='tcal.css' type='text/css' media='all' />
   <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>

   <script type="text/javascript" src="tcal.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
    <script type="text/javascript">
function mobval()
{
     var txt1=document.getElementById('mobno');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}
function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email').value="";
  	} 
}
</script>
</head>
<body>

<!----Header----->
<div class="container-fluid"  id="header"> 

<nav class="navbar navbar-findcond navbar-fixed-top" style="background-color:#F93C3C">
    <div class="container" >
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php"><img src="images/logo.jpg" height="89"></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right"><br>
				
				 <li>
                                <a href="index.php"  >Home</a>
                                
                            </li>
                            <li>
                                <a href="prices.php"   >Prices</a>
                                
                            </li>
							 
							<li>
                                <a href="order_form.php" >Order Form</a>
                                
                            </li>
							  
							<li>
                                <a href="contact_us.php"   class="active" style="background-color:#FFFFFF;color:#DF1018;">Contact Us</a>
                                
                            </li>
      </ul>
			
		</div>
	</div>
</nav>
</div>
<!----End Header----->

 <!----Meta----->
<div class="container" id="meta" style="margin-top:10px;">
<h1>GET IN TOUCH WITH UTSAV DARPAN</h1>
<h3>ANY QUERY REGARDING TO ORDER PLEASE CONTACT US</h3>
<center><p></p></center>
</div>
<!----End Meta----->

<!----Main Contents----->
<div class="container" >
<center>
  
<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d235.8400738382727!2d72.82313847055082!3d18.95611357930435!3m2!1i1024!2i768!4f13.1!2m1!1s+Vithalbhai++Patel+Road%2C+Nathalal+Bhuvan%2C!5e0!3m2!1sen!2sin!4v1468651975447" width="100%" height="250" frameborder="0" style="border:1px solid #DF1018;" allowfullscreen></iframe>
</center>
<br>
</div>
<div class="container" >
<div class="row">
  <div class="col-sm-6" id="home">
<form action="" method="POST">
  <table style="width:100%;">
  <tr><td colspan="2"><h2 style="font-weight:bold;color:#DF1018;font-size:16px;">GET IN TOUCH</h2></td></tr>
  <tr><td style="width:15%"><span style="color:#DF1018;"><?php echo $req;?></span> NAME :</td><td><input type="text" name="name" placeholder="Enter your Name" style="width:100%;" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
  <tr><td><span style="color:#DF1018;"><?php echo $req;?></span> EMAIL :</td><td><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Enter your Email id" style="width:100%;" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr>
  <tr><td> PHONE :</td><td><input type="text"   placeholder="Enter your Phone number" style="width:100%;" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
  <tr><td style="vertical-align:top;"><span style="color:#DF1018;"><?php echo $req;?></span> MESSAGE :</td><td><textarea class="txtarea" name="message" rows="10" style="width:100%;"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  <tr><td></td><td><button class="utt2" name="send">SEND</button></td></tr>
  <tr><td></td><td><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>
  </table>
 </form>
  </div>
  <div class="col-sm-6" >
  <table style="width:100%;">
  <tr><td colspan="2"><h2 style="font-weight:bold;color:#DF1018;font-size:16px;">OUR LOCATION</h2></td></tr>
    <tr >
	<td style="padding-top:12px;"><img src="images/loc.png" width="26" height="26"></td>
	<td style="padding-top:12px;padding-left:5px;"> <b>Creative Prints</b>
133, V. P. Road, Nathalal Bhuvan,
3rd Flr., Opp. Sicka Nagar,
Charniroad East, Mumbai - 400004 (Maharashtra) India. </td>
	</tr>
	<tr>
	<td style="padding-top:12px;"><img src="images/msg.png" width="26" height="26"></td>
	<td style="padding-top:12px;padding-left:5px;"><a href="mailto:ccgnik@gmail.com" style="text-decoration:none;">ccgnik@gmail.com</a> | <a href="mailto:info@utsavaestore.com" style="text-decoration:none;">info@utsavaestore.com</a></td>
	</tr>
	<tr>
	<td style="padding-top:12px;"><img src="images/whats.png" width="26" height="26"></td>
	<td style="padding-top:12px;padding-left:5px;">+91 916 733 9603</td>
	</tr>
	</table><br>
  </div>
 </div>
</div>
<!----End Main Contents----->

<!----Copyright----->
<div class="container-fluid" id="copyright"> 
Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a> | <a href="#">Privacy Policy</a>
                
</div>
<!----End Copyright----->

</body>
</html>