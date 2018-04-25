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
		$recipient = "addoncargo@apcargo.in,$email";
		$subject = "Message from Inquiry Form";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Thank you ! ";
		$_POST = array();
	}
  else
  {
	
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A.P. CARGO CLEARSHIP PVT. LTD.</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
     <link rel="shortcut icon" type="image/png" href="images/logo1.png" width="16" height="16"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
function toggleDiv(divId) {
   $("#"+divId).toggle();
   
}
</script>

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
}</script>
	
	 <style>.p{border:1px solid #e6e6e6;}</style>
	
	</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<div><img src="images/ico/logo.png"></div>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT US</a></li>
				<li><a href="#work" class="smoothScroll">SERVICES</a></li>
				<li><a href="#team" class="smoothScroll">CLIENTELE</a></li>
				<!-- <li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li> -->
				<!-- <li><a href="#pricing" class="smoothScroll">PRICING</a></li> -->
				<li><a href="#contact" class="smoothScroll">CONTACT US</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- <h3>WEB DESIGN / WEB DEVELOPMENT / SOCIAL MEDIA</h3>
				<h1>DIGITAL TEAM</h1>
				<hr> -->
			<!-- 	<a href="#work" class="smoothScroll btn btn-danger">What we do</a>
				<a href="#contact" class="smoothScroll btn btn-default">Talk to us</a> -->
<!-- 				<marquee direction="right" scrolldelay="300" width="100%" height="100%" scrollamount="13" onmouseover="this.stop();" onmouseout="this.start();" ><p style="text-align:justify;">
Active port Location :<br>
Nhava Sheva, India
Mangalore, Karnataka
Hazira Port, Gujarat
</marquee -->
			</div>
		</div>
	</div>		
</section>
<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
				<!-- 	<strong>02</strong> -->
					<h1 class="heading bold">ABOUT US</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				
				<center><img src="images/service-img.png" width="100%" height="450px"></center>
			</div>
			<div class="col-md-8 col-sm-12">
			<!-- 	<h3 class="bold">DIGITAL TEAM</h3> -->
				<!-- <h1 class="heading bold">Best Design Agency from California</h1> -->
				<!-- Nav tabs -->
				
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Director</a></li>
					<li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">About Company</a></li>
					<li><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Contact Person</a></li>
					
				</ul>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>
               Mr. Prafulla Shridhar Parab and Dr.Mrs.Sandhya P. Parab are the director of 'A P CARGO CLEARSHIP PRIVATE LIMITED'.</p>
              <p> Cell  No.: 09322999750</p>
            <p> Tel.No: 022 23482219</p>
             <p>Fax : 022 23480230</p>
             <p>Email Id : addoncargo@apcargo.in</p>
                  
               <p> 413 Rajgore Chambers,<br>
                     99,Surat Street,<br>
                     Masjid Bunder,<br>
                    Mumbai-400 009.
              </p>
						<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p> -->
					</div>
					<div role="tabpanel" class="tab-pane" id="mobile">
					
						<p align="justify">We are inspired by Shridhar Parab Legacy laid down by Ramchandra Vithoba Parab (available on Google Search), A person with vision, editor of wages calculator published in 1919 by M/s. Mackinnon Mackenzie & co, Karachi. Offers no apology for this work, which he believes is the first of its kind published in India. He has been for many years the head accounts clerk in the office of the agents the British India steam navigation company ltd Karachi and it has been one of his duties to check portage bills of the company’s steamers. Being unable to procure a Ready Calculator in sterling to assist him in his work, he prepared one for his own use and he now places it before the public confident that it will be found useful by all officers of the British India steam navigation company and others companies shipping masters etc. 
 						<a href="javascript:toggleDiv('myContent2');" style="color:#00ffff">Read More...</a></p><br>
				
						<span id="myContent2" style="align:justify;display:none;font-size:16px;"><b>A P Cargo Clearship Private Limited</b> is a Private incorporated on 22 May 2003 established by Mr. Prafulla Shridhar Parab. It is classified as Non-govt company and is registered at Register of Companies, Mumbai. Its authorized share capital is Rs. 100,000 and its paid up capital is Rs. 100,000.It is involved in supporting and auxiliary transport activities<br>
<b>we are well capable of meeting the diverse needs of today’s demanding business in this competitive markets.</b><br>

In order to provide a comprehensive service, we have realized that it is important to have a strict control of the operations, hence under the directorship each of these activities are managed by senior professionals with supporting experienced staff. It is our family values that make us one strong team. As individual units our companies offer specialization, expertise, efficiency and excellence in their individual capacity, Relations with All Major Shipping Lines are favourable work together as a team.
 
We offer our clients personalized, prompt, efficient service. We provide various services under one roof, This in turn improves our operative efficiency & guarantees good service
</span>
						
						</p><center>
						<table  width="100%" >
						<tr align="center">
						  <td><a href="https://www.fffai.org/" target="_blank"><img src="images/ffai.jpg" height="50px">
						  </td><td><a href="http://www.bchaa.com/" target="_blank"><img src="images/bchaa.png" height="100px" style="text-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></a></td>
						  </tr>
						<tr align="center">
						   <td ><a href="https://www.fffai.org/" target="_blank">Federation of Freight Forwarders’<br> Associations in India </td>
						   <td ><a href="http://www.bchaa.com/" target="_blank">&nbsp;&nbsp;&nbsp;Brihanmumbai Custom House Agents’<br>  Association</a></td>
						   </tr>
						</table></center>
				    </div>
					
				    <div role="tabpanel" class="tab-pane" id="social">
						<p><table class="p" width="400px" height="250px" style="padding:20px" align="center">
						<tr align="center" style="font-weight:bold" class="p"><td  style="border:1px solid #e6e6e6" >Area</td><td  style="border:1px solid #e6e6e6">Name</td><td  style="border:1px solid #e6e6e6">Mob.No.</td></tr>
                       <tr align="center" class="p"><td  class="p">Mumbai office </td><td>Mr.Prafulla S. Parab </td><td class="p">9322999750.</td></tr>
						
						<tr align="center" ><td rowspan="2"  style="border:1px solid #e6e6e6"> Nhava Sheva </td><td>Mr. Sanjay S. Pawer</td><td class="p"> 9930580277</td></tr>
						<tr align="center" class="p"><td>Mr. Raju K. Meshram</td><td class="p">9820759458</td></tr>
						<tr align="center" class="p"><td rowspan="2">Mumbai</td><td class="p">Mr. Mahesh Vichare </td><td>9870080731</td>
						<tr align="center" class="p"><td class="p">Ms. Pranita Bhosale</td><td></td></tr></table></p>
					</div>

				</div>
				
			</div>

		</div>
	</div>
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<!-- <strong>01</strong> -->
					<h1 class="heading bold"><center> OUR  SERVICES</center></h1>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
									
					<h3>&#x25cf;   Customs House Agents</h3>
					<p>EXPORT & IMPORT Shipment & Clearance of all HS code Commodities.
                    We are specialized in highly perishable cargo stuffed in refrigerated container offers customs clearance.  Have well conversant in Customs rules & regulation with huge experience.  
                  </p>              
            <p><a href="javascript:toggleDiv('myContent1');" style="color:#00ffff">We provide following types of services. (BY SEA)</a></p>
			<span id="myContent1" style="display:none;">
			<ul>
					<li>	Export Customs Clearance</li>
					<li>	Import Customs Clearance</li>
					<li>	Registration / clearance / completion under EPCG, DEEC, DFRC License.</li>
					<li>	Refrigerated Container Transportation</li>
					<li>	GENSET fitted trailers operating with GPS system</li>
					</ul>
			</span>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
			
					<h3>&#x25cf;  Sea Freight Forwarders</h3>
                   <p>Offers competitive Freight, Specialization in Reefers </p>
				   <h3>&#x25cf; 	Logistics Solutions</h3>
                  <p>Road transportation On Genset fitted trailers from Site to Port</p>
                  <h3>&#x25cf; Dock stuffing</h3>
                    <p>ON WHEEL FCL & LCL cargo stuffing</p>


			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
			
					<h3>&#x25cf;  Additional Services</h3>
					<ul>
					<li>	GSP (FORM A) </li>
					<li>	CERTIFICATE OF ORIGIN from Bombay Chamber, Menon Chamber & legalization of documents from concern consulate </li>
					<li>	Health , Phyto Sanitary, fumigation Certificate </li>
					<li>	Marine Insurance</li>
					</ul>
                      </p></div>
			<marquee direction="left" scrolldelay="300" width="100%" height="100%" scrollamount="22" onmouseover="this.stop();" onmouseout="this.start();" ><p style="text-align:justify;">

<span style="color:#E9C92D;font-size:19px">Active Port Location :- </span>
<span style="font-size:19px">Nhava Sheva, India.&nbsp;&nbsp;&nbsp;&nbsp;
                            Mangalore, Karnataka.&nbsp;&nbsp;&nbsp;&nbsp;
                            Hazira Port, Gujarat.
</marquee>
			
			
		</div>
	</div>
</section>


<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<!-- <strong>03</strong> -->
					<h1 class="heading bold">CLIENTELE</h1>
					<hr>
				</div>
			</div>
				<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/sanchita.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						
							<h4>SANCHITA</h4>
							<h3> MARINE PRODUCTS PVT.LTD  </h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			
				<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/Clientale/naik.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							 <h4>NAIK</h4>
							<h3>OCEANIC EXPORTS PVT.LTD.</h3>
							<hr>							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/tandels.png" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						
							<h4>TENDELS</h4>
							<h3>TENDELS SHRIMP HATCHERY</h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
				<img src="images/Clientale/sterling-foods.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						 <h4>STERLING FOODS</h4>
							<h3>STERLING FOODS. </h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/Clientale/corlim.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						 <h4>CORLIM</h4>
							<h3>CORLIM EXPORT PVT.LTD. </h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
				
			</div>
				<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/indy.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>INDY GLOBAL VENTURES</h4>
							<!-- <!-- <h3>Senior Designer</h3> -->
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			
		</div>
<br>
		<div class="row">

		
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
						<img src="images/Clientale/goan-bounty.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						<h4>GOAN BOUNTY</h4>
							<h3>PROCESSOR AND EXPORTER OF MARINE PRODUCT</h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/goan_fresh.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						
							<h4>GOAN FRESH</h4>
							<h3> MARINE EXPORTS Pvt.Ltd</h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
		<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/panacea.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>PANACEA  EXIM </h4>
							<h3>PANACEA EXIM </h3>
						<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/indotech.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>INDOTECH</h4>
							<h3>EXPORTER OF MARINE PRODUCT</h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			
			
				<!-- <div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/goan_fresh.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						
							<h4>GOAN FRESH</h4>
							<h3> MARINE EXPORTS Pvt.Ltd</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> 
						</div>
				</div>
			    </div>-->
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/indus1.png" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>INDUS</h4>
							<h3>INDUS</h3> 
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
				<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/saivsai.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>SHIV SAI EXPORTS</h4>
							<h3>FRUITS AND VEGITABLES </h3>
						<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">

	
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/rectical.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>RECTICAL</h4>
							<h3>THE PASSION FOR COMFORT </h3>
						<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/stellar.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>STELLAR</h4>
							<h3>STELLAR OF MARINE FOODS</h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/Clientale/stellaragro.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>STELLAR AGRO</h4>
							<h3>INGRIENTS FOR PERFECTION </h3> 
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
			</div>
				<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/Clientale/alica.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
						 <h4>ALKA</h4>
							<h3>ALKA TRADING CO. </h3>
							<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				</div>
				</div>
				
					<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				    <div class="team-wrapper">
					<img src="images/Clientale/sbc.jpg" class="img-responsive" alt="team img" style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>SBC</h4>
							<h3>SRI BALAHA CHEMICAL PRIVATE LIMITED </h3>
						<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				     </div>
			     </div>
				 
					<div class="col-md-2 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				    <div class="team-wrapper">
					<img src="images/Clientale/sea-island.jpg" class="img-responsive"  style="border:1px solid #cccccc;border-radius: 25px;height:150px">
						<div class="team-des">
							<h4>SEA ISLAND</h4>
							<h3>SEA ISLAND BRAND</h3>
						<hr>
							<!-- <ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul> -->
						</div>
				     </div>
			     </div>
			</div>
		
		</div>
			
	</div>
</section>



<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<!-- <strong>06</strong> -->
					<h1 class="heading bold">CONTACT US</h1>
					<hr>
				</div>
			</div>
            <div class="col-md-12 col-sm-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.2194328043934!2d72.8833757138507!3d19.054087457614735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8badfc55651%3A0x77e15d535a4376b9!2sA.P.+CARGO+CLEARSHIP+PVT.LTD.!5e0!3m2!1sen!2sin!4v1480761435875" width="1130" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>               </div>
	         </div>
			<div class="col-md-6 col-sm-12">
				<h2 class="heading bold">CONTACT INFO</h2>
				<h3><i class="fa fa-map-marker" aria-hidden="true"></i> ADDRESS</h3>
				<p>413 Rajgore Chambers,<br>
                     99,Surat Street,<br>
                     Masjid Bunder,<br>
                    Mumbai-400 009.</p>
					
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope small-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL ID</h3>
					<p>addoncargo@apcargo.in</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone small-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>022-23482219</p>
				</div>
					<div class="col-md-6 col-sm-4">
				</h3><i class="fa fa-fax" aria-hidden="true" ></i>  <b>FAX</b></h3>
				<p>022-23480230 </p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
			<h2 class="heading bold">INQUIRY FORM</h2>
			  <span style="color:#ffff66;font-size:17px"><?php echo $msg;?></span>
				<form action="" method="POST" >
				<span style="color:#ffff66;"><?php echo $sucss;?></span>
<br>
  <div class="col-md-6 col-sm-6">
  
  <span style="color:#ffffff; font-size:18px" ><?php echo $req;?> Fullname</span>  <input type="text" name="name" style="width:100%;color:#595959;height:30px;" placeholder="Enter your Name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
 <br><br>
  <span style="color:#ffffff;font-size:18px"><?php echo $req;?>Email ID </span>  <br><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Enter Your Email Id"  style="width:100%;color:#595959;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
  </div>
  <div class="col-md-6 col-sm-6">
  <span style="color:#ffffff;font-size:18px"><?php echo $req;?> Phone No.</span>  <br><input type="text"   placeholder="Enter Your Phone Number"  style="width:100%;color:#595959;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
<br><br>
  <span style="color:#ffffff;font-size:18px"><?php echo $req;?>Message</span>   <br><textarea class="" name="message" rows="" placeholder="Enter Your Message"  style="width:100%;color:#595959;height:30px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
 
 <br><br>


<input type="submit"  class="form-control"  height="100%" value="Send" name="send">

 </form>
			</div>
			   
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a></p>
				<hr>
				<ul class="social-icon">
					<!-- <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li> -->
					<!-- <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li> -->
					<!-- <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<--<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li> -->
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>