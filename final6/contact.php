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


$t=$_POST["email"];
$t1=$_POST["name"];
$t2=$_POST["phone"];
$t3=$_POST["message"];


$mail->From = "noreply@rudramthespa.com";


$mail->FromName = "Rudram-The Spa";


$mail->AddAddress("update.rudrathespa@gmail.com");

////$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);


$mail->Subject = "Rudram-The Spa-Contact Form";


$mail->Body = "<b>Rudram-The Spa-Contact Form Details </b><br/><br/> Name : $t1<br/> Email : $t<br/> Mobile No. :$t2<br/> Message :$t3";
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
<link rel="shortcut icon" type="image/png" href="images/logo1.png" width="16" height="16"/>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
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
								<li><a href="online-booking.php" class="link-kumya"><span data-letters="Online-Booking">Online Booking</span></a></li>	
								<li><a href="contact.php" class="link-kumya active scroll"><span data-letters="Contact">Contact Us</span></a></li></li>
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
	<!-- contact -->
	<div class="w3lscontact">
		<div class="container">
			<div class="contact-agileinfo">
				<div class="col-md-6 contact-grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.7120133015396!2d72.83914708381184!3d19.070417137010757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c3267d7723115%3A0xa4edc908ea9e18f1!2sRudra-The+Spa!5e0!3m2!1sen!2sin!4v1513238773256" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 contact-grid">
					<h3 class="wthree-title">Get in Touch</h3>
<!-- 					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
 -->					<form action="#" method="post"> 
						<input type="text" name="name" placeholder="Name" required="">
						<input type="text" class="ipt-agileits" name="email" placeholder="Email" > 
						<input type="text" name="phone" placeholder="Telephone" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" name="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-address">
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>101,Multilink House Bldg, 3rd Road, Opp.Unicontinental Hotel, Near Khar Station,Khar (W) 400 052</li>
					<li><i class="glyphicon glyphicon-phone"></i>+91 704532 0057 / +91 70452 0039</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:update.rudrathespa@gmail.com"> update.rudrathespa@gmail.com</a></li>
				</ul>
			</div> 
		</div>
	</div>
	<!-- //contact -->
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
	<!-- //script-for prettySticky -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>