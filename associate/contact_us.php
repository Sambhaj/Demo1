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
   
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message";
		$recipient = "info@swissairport-transfer.com,swissairport-transfer@hotmail.com,$email";
		$subject = "Message from Excel Steels";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
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
  <link rel='stylesheet'   href='menu.css' type='text/css' media='all' />
 
  <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>

   
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
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

<nav class="navbar navbar-findcond navbar-fixed-top" style="background-color:#023A5C">
    <div class="container" >
		<div class="navbar-header">
			<button type="button" style="background-color:#FFFFFF;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
				<span class="sr-only" style="background-color:#5DB047;">Toggle navigation</span>
				<span class="icon-bar" style="background-color:#5DB047;"></span>
				<span class="icon-bar" style="background-color:#5DB047;"></span>
				<span class="icon-bar" style="background-color:#5DB047;"></span>
			</button>
			<a href="index.php"><img src="images/logo.png" height="89"></a>
		</div>
		<div class="nav navbar-nav navbar-right" style="padding-top:20px;">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
<li>&nbsp;</li>
        <li><a href="about_us.php">About us</a>
            
        </li>
<li>&nbsp;</li>
        <li><a class="fly" href="#">Services</a>
            <ul class="dd">
                  <li><a href="audits.html">Audits & Assurance </a></li>
                <li><a href="taxadvisory.html">Tax Advisory & Compliance</a></li>
              
                    </ul>
                </li>
<li>&nbsp;</li>
                <li><a href="contact_us.php">Contact us</a>
                    
                </li>
            </ul>
        </li>

    </ul>
</div>
	</div>
</nav>
</div>
<!----End Header----->
<div class="container-fluid" id="meta">
<h1>JAGDISH B. SHAH AND ASSOCIATES</h1>
<h3>CHARTERED ACCOUNTANTS</h3>
<center><p></p></center>
</div>
<!----Start header banner----->
<div class="container-fluid" >
<div class="row" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.487665493675!2d72.8251982149!3d18.998220987132584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cec3f462dfbd%3A0x8f317d1b39e5e5ce!2sSenapati+Bapat+Marg%2C+Lower+Parel%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1470383200581" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<!----End header banner----->
 <div class="container" id="mainblock">
<div class="row">
<div class="col-sm-6" >

<span style="  font-weight:bold; font-size:18px; ">Quick Contact</span><br><br>
<span class="glyphicon glyphicon-map-marker" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> 7, Bharat Nagar, Behind Ambit, Senapati Bapat Marg, Lower Parel (West), Mumbai - 400 013 (Maharashtra) India.
<br><br><span class="glyphicon glyphicon-earphone" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> + 249 00163
<br><br><span class="glyphicon glyphicon-print" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> 249 141 90
<br><br><span class="glyphicon glyphicon-envelope" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> jbshahassociates@gmail.com

<div class="col-sm-6"  ><p style="font-size:13px;text-align:justify;">
<span style="  font-weight:bold;  font-size:18px; padding:5px;">Inquiry Form</span>

<form action="" method="POST">

<table width="100%" class="contfrm">
 
 
<tr><td style="padding:5px; font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span> Fullname :</td><td style="padding:5px;"><input type="text" name="name" style="width:100%;" placeholder="Enter your Name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
 <tr><td style="padding:5px; font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span> Email ID :</td><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Enter your Email id" style="width:100%;" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
 <tr><td style="padding:5px; font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span> Phone No. :</td><td style="padding:5px;"><input type="text"   placeholder="Enter your Phone number" style="width:100%;" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
  <tr><td style="padding:5px; font-size:13px;font-weight:bold;vertical-align:top;"><span style="color:#DF1018;"><?php echo $req;?></span> Message :</td><td style="padding:5px;"><textarea class="contfrm1" name="message" rows="" style="width:100%;"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
 
 
<tr>
<td></td>
<td style="padding:5px;"><input type="submit" class="utt10" value="Send" name="send"></td>
</tr>
 <tr><td></td><td style="padding:5px;font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>

</table>
 </form>



 
</div>
</div>


</div>
<!----End Main Contents---------->
 
<div class="container-fluid" id="footerbottom"> 
 <div class="container" id="footerbottom">
 <div class="row" >
  <div class="col-md-3"><h3>About us</h3><p>We have well trained and experienced personnel proficient in all aspects of our assignments supported by the most modern and sophisticated infrastructure. Our teams of highly skilled and motivated personnel have gained in-depth experience in providing multitude of services.</p>
 </div>
   <div class="col-md-3"><h3>Quick Contacts</h3><p>
  <span class="glyphicon glyphicon-map-marker" style="color:#FFFFFF;text-align:justify"></span>&nbsp; 2, Adarsh Peace Land, 125, Prabhat Colony, 7th Road,
Santacruz (East), Mumbai - 400 055 <br>
<span class="glyphicon glyphicon-phone-alt" style="color:#FFFFFF;"></span>&nbsp;  022- 26103445<br>

<span class="glyphicon glyphicon-map-marker" style="color:#FFFFFF;text-align:justify"></span> 7, Bharat Nagar, Behind Ambit, Senapati Bapat Marg, Lower Parel (West),<br> Mumbai - 400 013 (Maharashtra) India. <br>

<span class="glyphicon glyphicon-phone-alt" style="color:#FFFFFF;"></span>  &nbsp;22-2491 4190 / 2490 0163<br>


<span class="glyphicon glyphicon-print" style="color:#FFFFFF;"></span> &nbsp;022-2491 4190 <br>
 

<span class="glyphicon glyphicon-envelope" style="color:#FFFFFF;"></span> &nbsp;  jbshahassociates@gmail.com<br>

 </p>
 </div>
  <div class="col-md-3"><h3>Quick Links</h3><p>
  <ul>
  <li><b style="font-size:12px;color:#FFFFFF;">&#x25FE;</b> <a href="about_us.html">About us</a></li>
  <li><b style="font-size:12px;color:#FFFFFF;">&#x25FE;</b> <a href="services.html">Services</a></li>
  <li><b style="font-size:12px;color:#FFFFFF;">&#x25FE;</b> <a href="contact_us.php">Contact us</a></li>
  
  </ul></p>
 </div>
  <div class="col-md-3"><h3>Map</h3><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.487665493675!2d72.8251982149!3d18.998220987132584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cec3f462dfbd%3A0x8f317d1b39e5e5ce!2sSenapati+Bapat+Marg%2C+Lower+Parel%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1470383200581" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></p>
 </div>
  </div>
   </div>
   </div>
<!----copyright---------->
<div class="container-fluid" id="copyright">
<div class="container" > 
 <div class="row">
 <div class="col-sm-9">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a>
 </div>
 <div class="col-sm-3" ><table style="float:right;"><tr><td class="scl-grid"> <a href="#"><span class="scl-icon"> </span></a></td><td class="scl-grid"> <a href="#"><span class="scl-icon1"> </span></a></td><td class="scl-grid"> <a href="#"><span class="scl-icon2"> </span></a></td><td class="scl-grid"> <a href="#"><span class="scl-icon3"> </span></a></td></tr></table>
		
 </div>
 </div>
</div>		
	 
</div>
<!----end copyright---------->
</body>
</html>