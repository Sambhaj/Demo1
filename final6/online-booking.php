<?php

require("class.phpmailer.php");
if(isset($_POST["submit"])){
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "rudramthespa.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@skechersindia.in";
$mail->Password = "sm)ykm78fwEG";

$mail1 = new PHPMailer();
$mail1->IsSMTP();
$mail1->Host = "rudramthespa.com";
$mail1->SMTPAuth = true;
$mail1->Port = 587;
$mail1->Username = "test@skechersindia.in";
$mail1->Password = "sm)ykm78fwEG";

$t=$_POST["email"];

$t1=$_POST["name"];
$t2=$_POST["phone"];
$t3=$_POST["service"];
$t4=$_POST["reg_date"];
$t5=$_POST["preferedtime"];

$mail->From = "noreply@rudrathespa.com";
$mail1->From = "noreply@rudramthespa.com";

$mail->FromName = "Rudram-The Spa";
$mail1->FromName = "Rudram-The Spa";

$mail->AddAddress($_POST["email"]);
$mail1->AddAddress("sednainfo5@gmail.com");

////$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);
$mail1->IsHTML(true);

$mail->Subject = "Rudram-The Spa-Online-Booking";
$mail1->Subject = "Rudram-The Spa-Online-Booking Client Details";

$mail->Body = '<img src="http://rudramthespa.com/images/mail.png">';
$mail1->Body = "<b>Rudram-The Spa-Online-Booking Client Details </b><br/><br/> Name : $t1<br/>Email : $t<br/>Mobile No. :$t2<br/>Service :$t3<br/>Date : $t4<br/>Preferred Time : $t5";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "<script>alert('Message Could Not Be Sent.');</script>";
echo "Mailer Error: " . $mail->ErrorInfo;
//echo "Mailer Error: " . $mail1->ErrorInfo;

exit;
}
if(!$mail1->Send())
{
echo "<script>alert('Message Could Not Be Sent.');</script>";
echo "Mailer Error: " . $mail1->ErrorInfo;

exit;
}

echo "<script>alert('Thank you for Booking.');</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rudram-The Spa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smart phone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/prettySticky.css" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet"> 
 <link rel="stylesheet" type="text/css" href="css/tcal.css" />
	<script type="text/javascript" src="js/tcal.js"></script> 
	
	<link rel="shortcut icon" type="image/png" href="images/logo1.png" width="16" height="16"/>
 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
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
	document.getElementById('email1').value="";
  	} 
}</script>
<style>
#p{ 	border: 1px solid #e0e0e0;
	padding:5px 18px;
	color: #616161;
	background: #fff;
	box-shadow: none !important;
	width: 100%;
	font-size: 0.85em;
	font-weight: 300;
	height: 40px;
	border-radius: 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	-ms-border-radius: 0px;
	-o-border-radius: 0px;
	-webkit-appearance: none;
	outline:none;}</style>
</head>
<body>
	<!-- banner -->
	<div  id="home" class="w3banner about-banner">
		<div class="banner-info">
			<!-- navigation -->
			<div class="top-nav">
				<nav>
					<div class="container">
						<div class="navbar-header logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="index.html"><img src="images/logo.png" style="width: 77%;float: left;text-align: right;height:auto;"></a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-right">
								<li><a href="index.html" class="link-kumya"><span data-letters="Home">Home</span></a></li>
								<li><a href="about.html" class="link-kumya"><span data-letters="About Us">About Us</span></a></li>
                             <li><a href="#" class="dropdown-toggle link-kumya" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Services">Services</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="basic-facial.html" class="link-kumya active scroll"><span data-letters="Basic Facials">Basic Facials</span></a></li>
										<li><a href="foot-reflexology.html" class="link-kumya"><span data-letters="Foot Reflexology">Foot Reflexology & Specific Therapy</span></a></li>
										
										<li><a href="full-body-massage.html" class="link-kumya"><span data-letters="Full Body Massage">Full Body Massage</span></a></li>
										<li><a href="therapy-combination.html" class="link-kumya"><span data-letters="Therapy Combination">Therapy Combination</span></a></li>
										<li><a href="scrub-n-bodypolish.html" class="link-kumya"><span data-letters="Scrubs & Body Polish">Scrubs & Body Polish</span></a></li>
										<li><a href="special_packages.html" class="link-kumya"><span data-letters="Special Packages">Special Packages</span></a></li>
										<li><a href="couple-packages-jacuzzi.html" class="link-kumya"><span data-letters="Couple Packages With Jacuzzi">Couple Packages With Jacuzzi</span></a></li>
										
									</ul>
								</li> 								
								<li><a href="membership.html" class="link-kumya"><span data-letters="Membership">Membership</span></a></li>
								
								<li><a href="online-booking.php" class="link-kumya active scroll"><span data-letters="Online Booking">Online Booking</span></a></li>		
								<li><a href="contact.php" class="link-kumya "><span data-letters="Contact">Contact Us</span></a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
			</div>	
			<!-- //navigation -->
			<div class="banner-text">
				<h2>Rejuvenate Your Senses Here ...</h2>
			</div>	
		</div>
	</div>
	<!-- //banner -->
	<!-- short codes -->
	<div class="codes">
		<div class="container"> 
			<h3 class="wthree-title">Online Booking</h3>
			<div class="grid_3 grid_4 ">
				 
			<div class="grid_3 grid_4" style="border:px solid ">
				<h3 class="w3ls-hdg"></h3>
				<div class="tab-content">
				        <form class='form-horizontal' action="" method="post" >

					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name= "name"  id="name" required="required" >
								</div>
								
							</div>
							
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Mobile No</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" onblur="mobval();" name="phone" id="mobno" required="required">
								</div>
							</div>
						
							<div class="form-group w3-agile">
								<label for="txtarea1" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-8"><input type="text" name="email" onblur="emailvalidate();" id="email" class="form-control1" required="required"></textarea></div>
							</div>
							
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Service</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1 input-sm" name= "service"  id= "service" required="required">
								</div>
							</div>
							<div class="form-group">
								<label for="mediuminput" class="col-sm-2 control-label">Date</label>
								<div class="col-sm-8">
									<input type="text" id="p" class="tcal" placeholder="DD/MM/YYYY"  name="reg_date" id="reg_date" required="required">
								</div>
							</div>
							<div class="form-group mb-n">
								<label for="largeinput" class="col-sm-2 control-label label-input-lg">Prefered Time</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1 input-lg" name= "preferedtime" required="required">
								</div>
							</div>
							<div class="form-group mb-n">
							<label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>
							<div class="col-sm-8">
								<div class="w3lsmore">
						<center><button class='btn-lg btn-danger' style="outline: none;border: none;background: #FF5722;
    color: #fff;
    padding: 0.8em 0;
    width: 100%;
    text-align: center;
    font-size: 1em;"type='submit' name="submit">Submit</button> </center>
					</div></div>
							</div>
							
						</form>
					</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
	</div>   
	<!-- //short-codes -->    
	<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="col-md-5 ftr-wthree-grids">
				<h3></h3>
				 <img src="images/spa4.gif" alt=""/>
				
			</div> 
			<div class="col-md-3 ftr-wthree-grids">
				<h3>Contact Me</h3>
				<p >101,Multilink House Bldg, 3rd Road, Opp.Unicontinental Hotel, Near Khar Station,Khar (W) 400 052<br>
					<span>Office : +91 7045320057 /<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91 7045320039</span>
				</p>
				<div class="footer-bottom">
					<a href="https://www.facebook.com/rudra-spa-1712369095500750/"><span>Facebook</span></a>
					<a href="#"><span>Pinterest</span></a>
					<a href="whatsapp://send?text=http://rudrathespa.com/index.html" data-action="share/whatsapp/share"><span>Whatsapp Share </span></a>
					<a href="tel:7045320057"><span>Call Us</span></a>
				</div>
			</div> 
			<div class="col-md-4 ftr-wthree-grids">
				<h3>Review</h3>
				<p align='justify'>This was a wonderful experience. The staff member was responsive and helpful, when I was setting up my appointment. Staff member was thorough in the consultation about what I was looking for and pressure and needs. I have very much enjoyed my massage and facial.</p>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2017 Rudram The Spa. All rights reserved | Design by <a href="http://sednainfosystems.com/">Sedna</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- script-for prettySticky -->
	<script src="js/prettySticky.js"></script>
	<!--//script-for prettySticky -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>