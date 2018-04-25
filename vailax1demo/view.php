<?php 
	include('config.php'); // // include database file
?>
<?php



	session_start(); //start user session
	$message="";
	
	$vailax=$_POST['vailax'];

	
	if(isset($_POST['submit']))
	{
	 if( $vailax=="vailax")
	 {
		 header("Location:view1.php");
	 }
	
	else 
	{
		$message = "Invalid name !"; // if user invalid
	}
	}
	


	/* if(isset($_SESSION["username"])) 
	{
		header("Location:index.html"); // if user valid it redirect to the home page
	} */
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VAILAX</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
	<link rel="shortcut icon" type="image/png" href="images/icon/logo.png"  width="16" height="16">
    

<style>
#btn{
  margin: 0 auto;
  width:100px;
  height:35px;
  font-weight: bold;
  background-color: #6699ff;
  border: 1px solid transparent;
  text-decoration:none;
  color: #ffffff;
cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #6699ff;
  border-color: #6699ff;
  text-decoration:none;
}
</style>
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<img src="images/icon/logo1.png" style="height:60px">
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="contact.html" >Contact Us</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				
			</div>		
		</div>	
	</div>
	
	<!-- <div class="map">
		<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
	</div> -->
	
	<section id="contact-page">
        <div class="container" >
            <div class="center">        
               
               
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-12 ">
                    
                    <div id="errormessage"></div>
                                          
                </div>
				
				
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	
	
	<div>
	<div class="gmap-area"  >
            <div class="container" height="100%">
                <div class="row">
				<form action="" method="post" ><center>	   
            <table style="border:2px solid #6699ff;padding:100px;width:40%;height:200px;text-align:center"><tr><td>
            <input type="text" name="vailax" placeholder="" style="color:black;width:300px" ></td>
			</tr><tr><td>
			 <input type="submit"  name="submit" id="btn" value="Submit" >			    </td> </tr></table>   </center>	  
               <span style="color:#DB5353;font-weight:bold;"><?php echo $message; ?></span></center><br>			 
          <br><br><br><br><br><br>
                </div>
            </div>
        </div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						
                        <div class="credits">
                            
                           Copyright © 2017 | Powered By <a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>