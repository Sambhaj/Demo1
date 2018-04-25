<?php 
	include('config.php'); // // include database file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Services |  Welcome To UV Advisory  </title>
    <link rel="stylesheet" href="styles.css" />
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="shortcut icon" type="image/png" href="images/ico/logo.png"  width="16" height="16">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
			<div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +91 9757129164</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="blank"><i class="fa fa-linkedin"></i></a></li> 
                                
                            </ul>
                            
                       </div>
                    </div>
                </div>
                
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/ico/logo1.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
						<li  class="active" ><a href="services.php" >Services </a></li>
                        <li><a href="clientele.html">Clientele</a></li>
                        <li><a href="#">Media Presence</a></li>
                       
                        <li><a href="http://liabilityleanings.blogspot.in/" target="_blank">Blog</a></li> 
                        <li><a href="contact-us.html">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-8 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
						<h2>Provides niche consultancy to </h2>
             <p><img src="images/1.jpg" width="800px" height="400px" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" ></p>
                        </div>
                    </div><!--/.col-md-4-->

                   <div class="col-md-4 col-sm-6 wow fadeInDown"  >
				   <h2>Downloads</h2>
                        <div class="feature-wrap" style="background-color:#f2f2f2">
                            
                           
                             <marquee direction="up" scrolldelay="200" width="100%" height="390px" scrollamount="11" onmouseover="this.stop();" onmouseout="this.start();" >
  <ul>
 <?php 
 // query for select all products data
	 $query_parent=mysql_query("Select * from tb_docs ORDER BY id DESC") or die("Query failed: ".mysql_error());
        
	/* // fetching all data in table format */
         while($r=mysql_fetch_row($query_parent))
         {			 			 
	
			echo "<b style='font-size:13px;'></b><br>";
			 echo "<li class='content'><b>$r[1]</b><br>";
			
		/* 	if ($r[2] == 'doc/') */
			
		/* 	}else{ */
				echo "<center><a href='download.php?nama=".$r[2]."' style='text-decoration:none;font-size:13px;'></b><img src='images/download1.png' alt='Download' width='140''></a></center>";
			
			
			 echo " <a href=$r[3]  style='font-size:13px;font-weight:bold;  '> $r[3]</a> ";
			/* echo "<b><a href='".$r[3]."'></b></a>"; */
			  echo "  </li>"; 
		}
?> 
				   
              
                
                
                    
            </ul>
          
       </marquee>
                        </div>
                    </div><!--/.col-md-4-->

                    <!--/.col-md-4-->

                    <!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row--> 


            <div class="get-started center wow fadeInDown">
                <h2> Services</h2>
                
            </div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
               
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown" >
                    <div class="clients-comments text-center" >
				
                        <img src="images/service1.png" class="img-circle" alt=""><br><br>
						<h2>Product Development</h2>
                        <p align="justify" >Subsequently as a Corporate Accounts Practice leader in Tata AIG, she was keenly involved in Product Development for the retail lines such as Bundled Policies for Offices and for the SME sector. She strongly believes that product development is a constantly reinventing process for an insurance organisation, not only does it bring new products to the market but also provides  value additions , enhancements and differentiators in an existing product to provide an unbeatable competitive edge to the insurance company  <br><br>
                        In her Aon Asia role, she was identified as the Cyber Product Leader for Aon in Asia and has been deeply involved in discussing various endorsements enhancing the base product offered by the insurance companies in the Region. 
                         The immense esteem and reputation she enjoys in the Indian market coupled with her strong technical skills, her rich work experience in India positions her as strong contender for a senior role  with few to match her overall persona. 
                        <br><hr></p>
                        
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/service2.png" class="img-circle" alt=""><br><br>
						<h2>Underwriting</h2>
                        <p align="justify">Subsequently from 2006 to 2008 as the National Head for Tata AIG Corporate accounts Practice in Tata AIG General Insurance Company, she was responsible for delivering strong underwriting results on Property, Small Business Solutions, Marine and Casualty lines of Business. <br><br>Her experience  in India equips her with a discerning ability to balance the needs of a central underwriting process for complex products and a decentralised underwriting authority model  for retail volume driven policies,  endeavouring to maintain profitability in both models.  She believes that  there can be no compromise to good underwriting  which along with good claims management , efficient reinsurance and a watchful eye on expense control is vital for achieving and maintaining a COR (Combined Operating Ratio) below 100% .
						<br><br><br><br><hr>
						</p>
                        
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/service3.png" class="img-circle" alt=""><br><br>
						<h2>Claims </h2>
                        <p align="justify">As the COO for Aon India at the time, her adroit handling of the 2008 terrorism claim for the Indian Hotels Company Ltd. (more famously known as the Taj Hotels 26/11 terrorism claim) resulted in a successful claims resolution for the  insurer , reinsurer and the client. This was a difficult claim in many respects:<br>
                          1.	The property loss was enormous and the subsequent reinstatement had to be handled appropriately for the demanding hospitality industry. <br>
                          2.	The Business Interruption claim was compounded by internal factors such as the staggered reopening of various restaurants and different revenue generating facilities and the external factors such as the accompanying economic downturn affecting tourism and hospitality.<br>
                          3.	The claim lay against not any one insurance company but the Terrorism pool run by GIC whose constituent members were the Chief Underwriting Officers of every General Insurance Company in India.
                                Besides this, her strong liability background gives her an unparalleled edge in handling Financial Lines and liability claims which is a rare skill set in India.
                         <hr></p>
                       
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->


     <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Quick Links</h3>
                        <ul>
						    <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            
                            <li><a href="services.php">Services</a></li>
                            <li><a href="#">Clientele</a></li>
                            <li><a href="#">Media Presence</a></li>
                            <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="_blank">Blog</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Social Links</h3>
                        <ul>
                            
                                <li><a href="#"><i class="fa fa-facebook"></i><span style="padding:15px">   Facebook </span></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i><span style="padding:9px">  Twitter</span></a></li>
                                <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="_blank"><i class="fa fa-linkedin"></i> <span style="padding:10px"> Linkedin</span></a></li> 
                                
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Quick Contacts</h3>
                        <ul>
                           
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span style="padding:12px"> Gr. Floor, Sekhsaria House,
		        	                   28, Babulnath Road,<br>
	     	                           Mumbai 400007.</span>
                                    </p>
                                    <p><i class="fa fa-phone" aria-hidden="true"></i> <span style="padding:9px">  +91 9757129164 <br></span>
                                    <i class = "fa fa-envelope" aria-hidden = "true"> </i><span style="padding:5px">  uttara.vaid@uvadvisory.com </span></p>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Map</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.4383310235403!2d72.80582241489927!3d18.95623958715669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce091299bd07%3A0x64668aa9d0fcef28!2sSekhsaria+House!5e0!3m2!1sen!2sin!4v1484855920206" width="260" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>       

                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://sednainfosystems.com/" >Sedna</a>. All Rights Reserved.
                </div>
               
            </div>
        </div>
    </footer><!--/#footer-->

	<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>