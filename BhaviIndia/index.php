<?php 
	include('config.php'); // // include database file
?>
<?php
$msg="";
$sucss="";
$req="";
$blank="";

 if(isset($_POST['submit_X']) || isset($_POST['submit_Y']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
{

mysql_query("INSERT INTO contact VALUES('$name','$email','$phone','$message')");

$sucss="Message Send Successfully";
		
}}
else {
	 $req="";
	 $msg="";
			}
			
		?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bhaviindia</title>

        <!-- CSS -->
		<link rel="shortcut icon" type="image/png" href="assets/ico/8.png"  width="16" height="16">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
       
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<link  href="https://wrapbootstrap.com/theme/areta-agency-portfolio-template-WB0L5XF38?ref=azmind">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
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
<style>
	.dropdown {
    position: relative;
    display: inline-block;
	
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#2baaaa;
	
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 20px;
}

.dropdown:hover .dropdown-content {
    display: block;
	 background-color: #4289b2;

}
</style>
    <body>
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img" ></div>
    	</div>
		
		<!-- Top menu -->
		<nav>
		<div class="col-sm-4"><img src="assets/ico/8.png"   style="padding:10px;height:75px;width:130px;"></div>
			<div class="col-sm-8"><a class="scroll-link" href="#top-content">Home</a>
			<a class="scroll-link" href="#process" >About Us</a>
			<li class="dropdown">
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Products<b class="caret"></b></a>
				  <ul >
				  <span class="dropdown-content"> 
					<a class="scroll-link" href="#what-we-do">Chemical</a>
					<a class="scroll-link" href="#testimonials">Dyes</a>
					</span>
				  </ul>
			</li>
			<a class="scroll-link" href="#team">Contact Us</a>
			 <div class="hide-menu">
				<a href=""><i class="fa fa-bars"></i></a>
			</div></div>
		</nav>
		<div class="show-menu">
			<a href=""><i class="fa fa-bars"></i></a>
		</div>
		
        <!-- Top content -->
        <div class="top-content">
            <div class="top-content-text wow fadeInUp">
            	<span></span></div>
            	<h1><a href=""></a></h1>
            	<!-- <div class="divider-2"><span></span></div> -->
            	<p></p>
            	<div class="top-content-bottom-link" >
            		<a class="big-link-1" href="" >Welcome To Bhavi India</a>
            	</div><br><br><br>
		<br><br><br>
		<br>
            </div><br><br>
		
        </div>
       
		<!-- The team -->
		 <div class="block-1-container process-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	               <div class="col-sm-12 block-1 section-description wow fadeIn">		
	                    <h2>About Us</h2>
	                      <div class="divider-1 wow fadeInUp"><span></span></div>
						
	                    <p  style="font-size:16px;text-align:justify;">
	                    	Welcome To <b>Bhavi India,</b> <br>
	                    	 Bhavi India International Private Limited is an ISO 9002:2008 certified Government of India recognized Star Export House dealing in a wide variety of dyes and chemicals for various industries like Paper, Textile,  Cosmetics.
                             Wide exposure of Indian market, extensive business relationship, strong technical know-how enable us to satisfy our customers' requirements. 
                             With a state-of-the art in-house Laboratory, we can develop dyes shades to suit customers' requirements.<br>
	                   	                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     Bhavi International Private Limited exporters of dyes and dyes intermediaries are sincerely committed to excellence and providing customers with the products that consistently exceeds their need and expectation by continually improving the effectiveness of the quality management system.

					   </p>
	                </div>
	            </div>
	            <div class="row">
				<div class="col-sm-1"></div>
	                <div class="col-sm-3 ">
		                
		                	<img src="assets/ico/1.png" height="105px">
		               
					
	                    <h3>Mr.Umesh M.Shah</h3>
	                    <p ><b>Managing Director</b><br>Bhavi India International Private Limited<br><p>
	                      
		                	
		                </div>
	              
	                <div class="col-sm-6 team-box wow fadeInUp"  style="font-size:13px;text-align:justify;">
	                <br>          <p>
						"Bhavi India International Private Limited company is a government recognised export house & ISO 9002-2008 company.I am passionate about introducing new ideas & bringing innovative solutions. Always looking for new business opportunities. Founder of Bhavi International as a sole proprietor engaged in exports only.	"		
						</p>
	                   
	                </div>
					  </div>
					
					<div class="col-sm-1"></div>
	                <div class="col-sm-3 "><br><br><br><br>
		                
		                	<img src="assets\ico\1.png" height="105px">
		               
	                    <h4>Ms. Swati S. Taishetye </h4>
	                    <p ><b>Q.C. Manager</b></p>  
                   <br>						
				   <img src="assets\ico\1.png" height="105px">
				   <h4>Ms. Shylaja S. Kumar</h4>
				   <p ><b>Export Manager</b>
				    <br>	<br>					
				   <img src="assets\ico\1.png" height="105px">
				   <h4> Mr. Kirit Merwana</h4>
				   <p ><b>Adminstrator</b>
	                </div>
	                <div class="col-sm-6 team-box wow fadeInUp"  style="font-size:13px;text-align:justify;">
	                <br><br><br>
					<h3>Misson & Vision</h3>
	                    <p>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Word 'Bhavi' means future and the “future is ours.” The Indian economy is growing at a good speed and we at Bhavi are all set to keep pace with that growth. Our Misson is to keep up to date with the technology and market expectations and give the best of goods and services to our Clients. To build Customer confidence with pure satisfactions and reliability.
						</p>
						<h3>Our Strength</h3>

                   <p>Representative office in Middle East.<br>

                      State-of-the art laboratory with testing facilities for all parameters.<br>

                      Extensive logistics network.<br>

                     Equipped with requisite technical know-how.<br>

                      Systematic tie-up with manufacturers.<br>
</p>

	                   
	                </div>
					
	                
					
					
					
					
					
	            </div>
	        </div>
        </div>
        
		<!-- What we do -->
        
       <div class="what-we-do-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 what-we-do section-description wow fadeIn">
	                    <h2>Chemical</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                   
	                </div>
	            </div>
				<div class="row">
                	<div class="col-sm-1 what-we-do-box wow fadeInUp">
	                	
	                    <p></p>
                    </div>
	            <div class="row">
                	<div class="col-sm-2 what-we-do-box wow fadeInUp">
					<a  href="coating_chemical.html" target="_blank" ><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="coating_chemical.html" target="_blank" ><h3>Coating Chemical</h3> </a>
	                 
					 				   
                    </div>
					<div class="col-sm-2 what-we-do-box wow fadeInUp">
	             	<a  href="chemical\defoamers\BILFOAM_NDW.pdf  " > <div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                 <a  href="chemical\defoamers\BILFOAM_NDW.pdf  " ><h3>Defoamers</h3><!-- <b class="caret"> --></b></a>
	                  			  
                    </div>
					<div class="col-sm-2 what-we-do-box wow fadeInUp">
					<a  href="chemical\sizing agent\Harisize 400 A  (Anionic Surface Sizing Agent).pdf " ><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="chemical\sizing agent\Harisize 400 A  (Anionic Surface Sizing Agent).pdf " > <h3>Sizing Agent</h3></a>
	                   
                    </div>
                    <div class="col-sm-2 what-we-do-box wow fadeInDown">
	              <a  href="chemical\slimicides\BhaviItrol - 6226.pdf"><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="chemical\slimicides\BhaviItrol - 6226.pdf"><h3>Slimicides</h3></a>
                    </div>
                    <div class="col-sm-2 what-we-do-box wow fadeInUp">
	                <a  href="Strength Impuver.html"   target="_blank">	<div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="Strength Impuver.html"   target="_blank">   <h3>Strength Impover</h3></a>
                    </div>
					<div class="col-sm-1 what-we-do-box wow fadeInUp">
	                	                  
                    </div>
	            </div>
				<br><br><br><br>
	        </div>
        </div>
        </div>
        <!-- Our process -->
        <div class="testimonials-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeInUp">
	                	<h2>Dyes</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    
	                </div>
	            </div>
	            <div class="row">
				<div class="col-sm-2 what-we-do-box wow fadeInUp">
	               
	                   
                    </div>
                	<div class="col-sm-2 what-we-do-box wow fadeInUp">
				<a  href="dyes\Brown Mixture.pdf" target="_blank" ><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
					
	                <a  href="dyes\Brown Mixture.pdf" target="_blank" ><h3>Brown Mixture</h3> </a> </div>
					<div class="col-sm-2 what-we-do-box wow fadeInUp">
	                <a  href="dyes\Harimine.pdf  "><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                 <a  href="dyes\Harimine.pdf  " ><h3>Harimine</h3></a>
	                  			  
                    </div>
					<div class="col-sm-2 what-we-do-box wow fadeInUp">
					<a  href="dyes\Harisol.pdf " ><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="dyes\Harisol.pdf " > <h3>Harisol</h3></a>
	                   
                    </div>
                    <div class="col-sm-2 what-we-do-box wow fadeInDown">
	                 <a  href="dyes\Optical Brightners.pdf"><div class="what-we-do-box-icon"><i class="fa fa-file-pdf-o"></i></div></a><br>
	                <a  href="dyes\Optical Brightners.pdf"><h3>Optical <br>Brightners</h3></a>
					<br><br><br><br><br><br>
                    </div>
                    
					
	            </div>
			    </div>
			    </div>  
        
       <!--  <!-- Contact us -->
         <div class="team-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 team section-description wow fadeIn">
	                	<h2>Contact Us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            
	            <div class="row">
	            	<div class="col-sm-12 block-1-left wow fadeInLeft">
	            		<div >
	            			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15081.21452869339!2d72.9134542!3d19.0943312!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5733ad61b3f639e6!2sBhavi+International+Private+Limited!5e0!3m2!1sen!2sin!4v1475325265599" width="1000" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	            		</div>
	            	</div>
					<div class="col-sm-1 block-1-left wow fadeInUp" style="text-align:justify;">
					</div>
					
	            	<div class="col-sm-5 block-1-left wow fadeInUp" style="text-align:justify;">
	            		<h3><b>Address</b></h3>
					
						
	            		<span class="glyphicon glyphicon-map-marker" style="font-size:13px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span>
						&nbsp;209, Mewad Building Estate, 
						    Patanwala Industrial Estate,
						    L.B.S.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marg, Ghatkopar West,
      						Mumbai, Maharashtra-400086.
                          <br><br><span class="glyphicon glyphicon-earphone" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> 
						     &nbsp; +91 22 2500 0429,
							       +91 22 2500 5008,
							       +91 878 323 3444 
							
								<br><br><span class="glyphicon glyphicon-print" style="font-size:12px;color:#FFFFFF;background:#023A5C; padding:3px;border-radius:20%;"></span> &nbsp; +91 22 2500 5008

							<br><br><span class="glyphicon glyphicon-envelope" style="font-size:12px;color:#FFFFFF;background:#023A5C;padding:3px;border-radius:20%;"></span> &nbsp;umesh@bhaviindia.com,info@bhaviindia.com
							  	</div>
					<div class="col-sm-6 block-1-left wow fadeInUp" style="text-align:justify;">
	            		<h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Form</b></h3>
						
		
	            		<p><form action="index.html" method="POST">

                 <table width="88%" class="contfrm">
 
 
                 <tr><td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span><img src="assets\ico\user2.png"  height="22px" ></td><td style="padding:5px;"><input type="text" name="name" placeholder="Enter your Name"   style="width:100%;" ></td></tr>
 
                 <tr><td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span><img src="assets\ico\email.png"  height="22px" ></td><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email" placeholder="Enter your Email id" style="width:100%;" ></td></tr> 
 
                 <tr><td style="padding:5px;text-align:right; font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $req;?></span> <img src="assets\ico\3.png"    height="22px"  ></td><td style="padding:5px;"><input type="text" name="phone" onblur="mobval();" id="mobno"  placeholder="Enter your Phone number" style="width:100%;"  ></td></tr>
 
                      <tr><td style="padding:5px;text-align:right; font-size:13px;font-weight:bold;vertical-align:top;"><span style="color:#DF1018;"><?php echo $req;?></span><img src="assets\ico\msg.png"  height="22x" > </td><td style="padding:5px;"><textarea class="contfrm1" name="message"  placeholder="Enter your message" rows="" style="width:100%;"></textarea></td></tr>
 
 
                <tr>
                <td></td>
                      <td style="padding:5px;"><center><input type="image"  src="assets\img\backgrounds\send1.png" width="80px" height="40px"class="utt10" value="submit" name="submit"></center></td> 
                 </tr>
                <tr><td></td><td style="padding:5px;font-size:13px;font-weight:bold;"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:blue;"><?php echo $sucss;?></span></td></tr>

</table>
                </form> </p>
							
	            	</div>
					</div>
	        </div>
        </div>
		</div>
		
        <!-- Scroll to top -->
        <div class="section-container section-container-gray">
	        <div class="container">
		        <div class="row">
		        	<div class="col-sm-12">
		        		<div class="scroll-to-top">
		        			<a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
		        		</div>
		        	</div>
		        </div>
	        </div>
        </div>
                
        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
                    <div class="col-sm-7 footer-copyright">
                    	Copyright © 2015 | Powered By<a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a>.
                    </div>
                    <div class="col-sm-5 footer-social">
                    	<a href="#"><img src="assets\ico\fb.png" height="30px"></a>
	                	
	                    <a href="#"><img src="assets\ico\tiw.png" height="30px"></a>
	                  
	                  
                    </div>
	            </div>
	        </div>
        </footer>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>