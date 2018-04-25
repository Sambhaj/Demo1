<?php
//********* Code for Mail ********
$msg="";
$sucss="";
$req="";
$p1="Invoice Pro";
$p2="Institute Management System";
$p3="Online Objective Test Series";
$p4="Matrimony Community";
$p5="Hospital ERP";
$p6="Hotel Management System";
$p7="Water Distribution";
$p8="Saloon Pro";
$p9="Bulk SMS";
$product="";
if (isset($_POST['send1']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p1 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
 if (isset($_POST['send2']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p2 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send3']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p3 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send4']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p4 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send5']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p5 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send6']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p6 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send7']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p7 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send8']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p8 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }if (isset($_POST['send9']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
	
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n\n Product: $p9 \n\n Email: $email \n\n Phone No: $phone \n\n Message: $message \n\n product: $product";
		$recipient = "asksedna@gmail.com,$email";
		$subject = "Message from Sedna-products";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Send Successfully";
		$_POST = array();
	}
  else
  {
	 $req="";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Sedna: Software, Website: matrimony, School, College, Coaching, Hospital, Service Sation, Joomla, .NET, Mumbai, Maharashtra, MP, India ISO 9001:2008</title>
<meta property="og:url" content="http://www.valeron.net/index.html" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Free responsive web template Istria" />
<meta property="og:description" content="Free responsive web template Istria 1 by Valeron design studio" />
<meta property="og:image" content="http://www.valeron.net/img/valeron-artist.jpg" />
<meta name="description" content="Free responsive web template Istria 1 by Valeron design studio" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="robots" content="index,follow,all" />
<meta name="keywords" content="Izrada web stranica, web studio Istra" />
<meta name="author" content="Valeron design studio" />
<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
<link rel="shortcut icon" type="image/png" href="images\ico\logo1.png" width="16" height="16"/>


<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="img/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="css/grid.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/overlay.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
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
<script src="js/jquery.the-modal.js"></script> 
<script type="text/javascript">
		jQuery(function($){
			// bind event handlers to modal triggers
			$('body').on('click', '.trigger', function(e){
				e.preventDefault();
				$('#test-modal').modal().open();
			});
				$('body').on('click', '.trigger2', function(e){
				e.preventDefault();
				$('#test-modal2').modal().open();
			});
			$('body').on('click', '.trigger3', function(e){
				e.preventDefault();
				$('#test-modal3').modal().open();
			});

			// attach modal close handler
			$('.modal .close').on('click', function(e){
				e.preventDefault();
				$.modal().close();
			});

			// below isn't important (demo-specific things)
			$('.modal .more-toggle').on('click', function(e){
				e.stopPropagation();
				$('.modal .more').toggle();
			});
		});
	</script>
<style>


 #btn{
  margin: 0 auto;
width:100%;height:40px;
  font-weight: bold;
  background-color: #00BFF0;
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
  color: #00BFF0;
  border-color: #146b85;
  text-decoration:none;
}
	   
</style>
</head>
<body >
<div class="animsition-overlay">
  <div id="section-1">
    <header class="main_h">
      <div class="menufix"> <a class="logo" href="index.php"><img src="images\ico\logo-sample.png" alt="Hello"></a>
        <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
        <nav>
          <ul>
            <li><a class="out active animsition-link" href="index.php">HOME</a></li>
            <li class="line"><a class="out animsition-link" href="about_us.html">ABOUT US</a></li>
			<li class="line"><a class="out animsition-link" href="product.php">PRODUCTS</a></li>
            <li class="line"><a class="out animsition-link" href="service.html">SERVICES</a></li>
            <li class="line"><a class="out animsition-link" href="team.html">TEAM</a></li>
		    <li class="line"><a class="out animsition-link" href="contact.php">CONTACT US</a></li>
          </ul>
        </nav>
      </div>
      <!-- / row --> 
      
    </header>
    <div class="hero">
      <h1 id="title-1"><em><span><img src="images\ico\logo.png" style="height:120px;padding-top:18px"></span></em>We love working with clients who love to standout from the crowd</h1>
      <div class="social-btn-container">
        <span class="social-btn-box"> <a href="https://plus.google.com/106955248615388392783" target="_blank" class="google-plus-btn"><i class="fa fa-google-plus"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://www.facebook.com/SednaInfosystems/" target="_blank" class="facebook-btn"><i class="fa fa-facebook"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://twitter.com/sednainfo" target="_blank"  class="twitter-btn"><i class="fa fa-twitter"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://in.linkedin.com/in/hardik-nadiyana-5340aa10" target="_blank" class="linkedin-btn"><i class="fa fa-linkedin"></i></a> </span><!-- /.social-btn-box --> 
        <span class="social-btn-box"> <a href="https://youtube.com/sednainfo" target="_blank" class="youtube-btn"><i class="fa fa-youtube"></i></a> </span><!-- /.social-btn-box --> 
      </div>
      <!-- /.social-btn-container -->
      
      <div class="fixbottarro"> <a class="scroll" href="#section-2">Scroll for more</a> </div>
    </div>
    <!-- /.hero --> 
  </div>
  <!-- END #section-1 -->
  
  <div id="section-2">
    <div class="grid">
      <div class="col_12">
        <h2 class="title-2">
          <span class="wow fadeInUp" data-wow-duration="2s">Sedna Infosystems</span>
		</h2>
      </div>
      <!-- END col_12 --> 
    </div>
    <!-- END .GRID -->
    
    <div class="grid flex">
      <div class="row">
        <div class="colw_6 wow zoomIn">
          <div class="wrapimg hack960">
            <div class="pic"> <img src="images/web-dizajn-1.jpg" class="pic-image full-width" alt="Pic"/>
              <!--<div class="pic-caption top-to-bottom">
                <h4 class="pic-title">Free web template</h4> 
              </div>-->
            </div>
          </div>
          <!-- END wrapimg --> 
        </div>
        <!-- END col_6 -->
        
        <div class="colw_6 ">
          <div class="box66">
           
            
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEDNA Infosystems established in 2005, believes in delivering high quality and cost-effective IT Solutions. Our services ranges from High End Web Designing Solution, Android Application Development with  customized software development.We also develop high end research based solutions catering cutting edge technology. We have good team and professional work culture to move towards achieveing goals in timely manner. <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The alliance of professionals from different background has provided excellence to working of the company. The zest to provide transparent solutions to the clients is the motto and cost effective solutions is the vision in such competitive market which excels us to out perform every time</p>

          </div>
          <!-- END box66 --> 
        </div>
        <!-- END col_6 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
    <!-- End GRID FLEX --> 
    
  </div>
  <!-- END #section-2 -->
  
   <div class="backimg" id="section-3">
    <div class="bghover wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
      <div class="grid flex16">
        <div class="row paddtop5">
           <!--<h3 class="paraw wow fadeInUpBig" data-wow-duration="2s" data-wow-delay=".5s">Products</h3>--> 
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay=".7s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox lightblue column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe reladiv">
              <center><h5 class="title0">Invoice Pro</h5></center>
			   <p><div class="col_12">
			<center><img src="images/products/1.png" height="130px"></center>
			<a href="pdf/invoice-pro.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>
			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
             </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="1.1s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox purple column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Institute Management System</h5></center>
               <p><div class="col_12">
			   <center><img src="images/products/11.png" height="130px"></center>
			  <a href="pdf/ims.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>

			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger2">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
            </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="1.5s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox pictonblue column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Online Objective Test Series</h5></center>
			        <p><div class="col_12">
					<center><img src="images/products/8.png" height="130px"></center>
			 			<a href=""><center><img src="images/ico/downlload_icon.png" ></center></a>

			    <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger3">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
                         </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 --> 
          
        </div>
        <!-- END row -->
        
        <div class="row">
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="1.6s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox pink7 column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Matrimony Community</h5></center>
               <p><div class="col_12">
			   <center><img src="images/products/6.png" height="130px"></center>
			   <a href=""><center><img src="images/ico/downlload_icon.png" ></center></a>

			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger4">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
            </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="2s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox indigo column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Hospital ERP</h5></center>
               <p><div class="col_12">
			   <center><img src="images/products/9.png" height="130px"></center>
			   <a href="pdf/Hospital.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>

			   
			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger5">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
			  </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="1.6s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox purple column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Hotel Management System</h5></center>
               <p><div class="col_12">
			   <center><img src="images/products/10.png" height="130px">	</center>
			   <a href=""><center><img src="images/ico/downlload_icon.png" ></center></a>

			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger6">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </div></p>
            </div>
            <!-- END col_10 --> 
          </div>
         
          <!-- END col_4 --> 
          
        </div>
        <!-- END row --> 
		<div class="row">
           <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="2.4s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox pink column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Water Distribution</h5></center>
              <p><div class="col_12">
			  <center><img src="images/products/7.png" height="130px"></center>
			  <a href="pdf/water-distribution.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>

			     <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger7">Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
            </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="2s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox pink7 column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Saloon Pro</h5></center>
               <p><div class="col_12">
			   <center><img src="images/products/3.png" height="130px"></center>
				<a href="pdf/saloon-pro.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>

			   
			    <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger8" <?php echo $p8; ?>>Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
			  </div>
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 -->
          
          <div class="col_4 bghwhite column2 wow zoomIn" data-wow-delay="2.4s">
            <div class="colw_2 alomdebe vito">
              <div class="iconfullbox pictonblue column2">
                <div class="iconfull"></div>
                <!-- END iconfull --> 
              </div>
              <!-- END iconfullbox --> 
            </div>
            <!-- END colw_4 -->
            <div class="colw_10 padd5555 alomdebe">
              <center><h5 class="title0">Bulk SMS</h5></center>
              <p><div class="col_12">
			  <center><img src="images/products/4.png" height="130px"></center>
			  <a href="pdf/bulk.pdf"><center><img src="images/ico/downlload_icon.png" ></center></a>

			   
			   
			 <div class="fix-btn-blog"> <a href="#" class="istria-btn trigger9"  >Buy Now</a>
              <div class="istria-over"></div>
              <div class="istria-line left">
                <div class="inner"></div>
              </div>
              <!-- END istria-line left -->
              <div class="istria-line right">
                <div class="inner"></div>
              </div>
              <!-- END istria-line right --> 
            </div>
			  </ul></div></p>
            </div>
		
            <!-- END col_10 --> 
          </div>
          <!-- END col_4 --> 
          
        </div>
        <!-- END row --> 
		
        
      </div>
      <!-- End GRID FLEX16 --> 
    </div>
	
    <!-- END bghover --> 
    </div>
  <!-- END #section-3 -->
  
  <div id="section-4">
    <div class="grid flex">
      <h4 class="title-4">What Our Clients Say</h4>
      <article> <img src="images/web-dizajn-5.jpg" alt="Web design Istra" data-parallax='{"y": 230}'/>
        <div class="absomid-cbp white7 corner">
          <div id="cbp-qtrotator" class="cbp-qtrotator">
            <div class="cbp-qtcontent">
              <blockquote>
                <p>There Guys Are Highly Co-Operative with Good Time Around.</p>
                <footer>Holy cross Marathi High School</footer>
              </blockquote>
            </div>
            <div class="cbp-qtcontent">
              <blockquote>
                <p>Proper Guidance With Good Communications Skills.</p>
                <footer>Jadhav Kunbi Samaj</footer>
              </blockquote>
            </div>
            <div class="cbp-qtcontent">
              <blockquote>
                <p>Timely Service With Proper Feedback Of Job.</p>
                <footer>Murkey Hospital.</footer>
              </blockquote>
            </div>
            <div class="cbp-qtcontent">
              <blockquote>
                <p>SEDNA Has Good Team To Work Upon The Projects.</p>
                <footer>Vishwabharti Public School.</footer>
              </blockquote>
            </div>
          </div>
        </div>
        <!-- END absomid --> 
      </article>
      <div class="row">
        <div class="owl50">
          <h5 class="title-5 wow fadeInUp" data-wow-duration="1s"> Technologies We Use</h5>
          <div id="owl-partners" class="owl-carousel"> <img src="images\Tech\1.png"  class="blackwhiteimg"><img src="images\Tech\2.png" alt="web dizajn Istra" class="blackwhiteimg"><img src="images\Tech\3.png"  class="blackwhiteimg"><img src="images\Tech\4.png"  class="blackwhiteimg"><img src="images\Tech\5.png" alt="web dizajn Istra" class="blackwhiteimg"><img src="images\Tech\6.png" alt="web dizajn Istra" class="blackwhiteimg"><img src="images\Tech\7.png" alt="web dizajn Istra" class="blackwhiteimg"><img src="images\Tech\8.png" alt="web dizajn Istra" class="blackwhiteimg"> </div>
          <!-- END #owl-partners .owl-carousel --> 
        </div>
        <!-- END 0wl50 --> 
        
      </div>
      <!-- END row --> 
    </div>
    <!-- END .GRID FLEX --> 
    
  </div>
  <!-- END #section-3 -->
  
  <div id="section-5">
    <div class="grid flex16">
      <div class="row">
        <div class="colw_6">
          <div class="box66">
            <h5 class="title-3">Customized Software</h5>
             <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We believe in development. The progess is always their with walking step taken one step at a time. So, we are open for any customized software development in the field related to the technological enhancement and in service to living beings. We are ready to analyze the system and take challenging job for accomplishment. The risk are always measured achieves the objective. Its always the planing approach with co-operation, therefore clients' need to be prepared for themselves to be executed by us.<br><br>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custom software (also known as bespoke software or tailor made software) is software that is specially developed for some specific organization or other user. As such, it can be contrasted with the use of software packages developed for the mass market, such as commercial off-the-shelf (COTS) software, or existing free software.</p><br>
			   
             </div>
			
          <!-- END box66 --> 
        </div>
        <!-- END col_6 -->
        
        <div class="colw_6 hack960 paddbott100 wow zoomIn">
          <div class="wrapimg">
            <div class="pic"> <img src="images/web-dizajn-3.jpg" class="pic-image full-width" alt="Pic"/>
              
            </div>
          </div>
          <!-- END wrapimg --> 
        </div>
        <!-- END col_6 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
	
    <!-- END .GRID FLEX16 --> 
    
  </div>
  <!-- END #section-4 -->
  
     <div style="background-color:#4d94ff">
    <div class="grid flex16">
      <div class="row paddtop5">
        <div class="col_3 beta boxwsha font90 column2 wow fadeInUpBig" data-wow-duration="1s">
          <h4 class="color90 gray3 enticlick"><center><a href="http://sedna.biz/" class="linkline" target="_blank">sedna.biz</a></center></h4>
		    <p align="center"><a href="http://sedna.biz/" class="linkline" target="_blank"><img src="images/b3.png" ></a></p>
		 

         
		</div>
        <!-- END col_3 -->
        
        <div class="col_3 beta boxwsha font90 column2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
          <h4 class="color90 gray3 enticlick"><center><a href="http://projects.sedna.biz/" class="linkline" target="_blank">projects.sedna.biz</a></center></h4>
		    <p align="center"><a href="http://projects.sedna.biz/" class="linkline" target="_blank"><img src="images/b1.png" ></a></p>
           
		</div>
        <!-- END col_3 -->
        
        <div class="col_3 beta boxwsha font90 column2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".6s">
          <h4 class="color90 gray3"><center><a href="http://sms.sedna.biz/" class="linkline" target="_blank">sms.sedna.biz</a></center></h4>
		    <p align="center"><a href="http://sms.sedna.biz/" class="linkline" target="_blank"><img src="images/b2.png" ></a></p>
                
				  </div>
        <!-- END col_3 -->
        
        <div class="col_3 beta boxwsha font90 column2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".9s">
          <h4 class="color90 gray3"><center><a href="http://acda.in/sedna-soft/emp_login.aspx" class="linkline" target="_blank">Connected With    <img src="images\ico\fb-icon.jpg" style="padding-left:8px"></a></center></h4>
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSednaInfosystems%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>          <!-- END colw_12 alomdebe -->
          <p align="center"><a href="http://www.indiamart.com/sedna-infosystems" class="linkline" target="_blank"><img src="images/b5.png" ></a></p>
          
          <!-- END colw_12 --> 
          
        </div>
        <!-- END col_3 --> 
        
      </div>
      <!-- END row -->
      
      <div class="row">
        <div class="col_12"> </div>
        <!-- END col_12 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
    <!-- End GRID FLEX16 --> 
    
  </div>
		
		
		
		
		
  	<div class="modal" id="test-modal" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p1; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p1"  value="<?php echo $p1; ?>" readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
			  
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal2" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p2; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p2" readonly="readonly" value="<?php echo $p2; ?>"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal3" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p3; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p3"  value="<?php echo $p3; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal4" style="display: none"> <a href="#" class="close">&times;</a>
  <h5>  <?php echo $p4; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p4"  value="<?php echo $p4; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal5" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p5; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p5"  value="<?php echo $p5; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal6" style="display: none"> <a href="#" class="close">&times;</a>
  <h5><?php echo $p6; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p6"  value="<?php echo $p6; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal7" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p7; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p7"  value="<?php echo $p7; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email" style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"   style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
    	<div class="modal" id="test-modal8" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p8; ?></h5>
  <div class="more">
      
        <form action="" method="POST">

           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p8"  value="<?php echo $p8; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"   style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		  		
               <span style="color:#003399;"><?php echo $sucss;?></span>
        </form>
		
   
  
  </div>
  </div>
  <div class="modal" id="test-modal9" style="display: none"> <a href="#" class="close">&times;</a>
  <h5> <?php echo $p9; ?></h5>
  <div class="more">
      
        <form action="" method="POST">
 
           <table width="100%" height="100%"class="" >
		       <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span>Product</td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" style="width:100%;height:30px"   name="product" id="p9"  value="<?php echo $p9; ?>"readonly="readonly"></td></tr>
		   
             <tr><td style="padding:5px; font-size:17px;color:#999999"  width="50%"><span ><?php echo $req;?></span> Name </td></tr><tr><td style="padding:5px;font-size:20px;"><input type="text" name="name" style="width:100%;height:30px"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px; font-size:17px;color:#999999"><span style="color:#666666;"><?php echo $req;?></span> Email Id </td></tr><tr><td style="padding:5px;"><input type="text" name="email" onblur="emailvalidate();" id="email"  style="width:100%;height:30px" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td></tr> 
 
              <tr><td style="padding:5px; font-size:17px;color:#999999" ><span ><?php echo $req;?></span> Contact No. </td></tr><tr><td style="padding:5px;" width="100%"><input type="text"    style="width:100%;height:30px" onblur="mobval();" name="phone" id="mobno" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"></td></tr>
 
              <tr><td style="padding:5px;  font-size:17px;color:#999999;"><span ><?php echo $req;?></span> Message </td></tr><tr><td style="padding:5px;"><textarea  name="message"  style="width:100%;height:65px"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea></td></tr>
  
              <tr><td style="padding:5px;width:100%" ><input type="submit" id="btn"  width="100%" value="Send" name="send"></td></tr>
           </table>
		        <span style="color:#DF1018;"><?php echo $msg;?></span><br><br>
		 
               <span style="color:#003399;"><?php echo $sucss;?></span>
			   
        </form>
		
   
  
  </div>
  </div>
		
		
		       <!-- END col_12 -->
        <div id="section-credits">
    <div class="grid">
      <div class="row paddtop100">
        
        <!-- END col_12 -->
        
      
        <!-- END col_6 -->
        
        
        <!-- END col_6 --> 
        
      </div>
      <!-- END row --> 
      
    </div>
    <!-- End GRID FLEX -->
    
    <p class="dolje">Copyright © 2005 | Powered By    <a href="http://sednainfosystems.com/" class="linkline">Sedna</a></p>
  </div>
  <!-- END #section-credits --> 
</div>
<!-- END .animsition-overla --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.matchHeight-min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/animsition.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
<script src="js/jquery.parallax-scroll.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.cbpQTRotator.min.js"></script> 
<script src="js/jquery.the-modal.js"></script> 
<script type="text/javascript">
		jQuery(function($){
			// bind event handlers to modal triggers
			
			$('body').on('click', '.trigger', function(e){
				e.preventDefault();
				$('#test-modal').modal().open();
			});
				$('body').on('click', '.trigger2', function(e){
				e.preventDefault();
				$('#test-modal2').modal().open();
			});
			$('body').on('click', '.trigger3', function(e){
				e.preventDefault();
				$('#test-modal3').modal().open();
			});

			
			$('body').on('click', '.trigger4', function(e){
				e.preventDefault();
				$('#test-modal4').modal().open();
			});
			
			$('body').on('click', '.trigger5', function(e){
				e.preventDefault();
				$('#test-modal5').modal().open();
			});
			$('body').on('click', '.trigger6', function(e){
				e.preventDefault();
				$('#test-modal6').modal().open();
			});
			$('body').on('click', '.trigger7', function(e){
				e.preventDefault();
				$('#test-modal7').modal().open();
			});
			$('body').on('click', '.trigger8', function(e){
				e.preventDefault();
				$('#test-modal8').modal().open();
			});
			$('body').on('click', '.trigger9', function(e){
				e.preventDefault();
				$('#test-modal8').modal().open();
			});
			// attach modal close handler
			$('.modal .close').on('click', function(e){
				e.preventDefault();
				$.modal().close();
			});

			// below isn't important (demo-specific things)
			$('.modal .more-toggle').on('click', function(e){
				e.stopPropagation();
				$('.modal .more').toggle();
			});
		});
	</script>
<script>
    $(document).ready(function() {
     
      $("#owl-partners").owlCarousel({
     
          autoPlay: 4000, 
          stopOnHover : true,
          pagination : false,
          items : 5,
          itemsDesktop : [1199,4],
          itemsDesktopSmall : [959,3]     
      });     
    });
</script> 
<script>
	$( function() {
	$( '#cbp-qtrotator' ).cbpQTRotator();					
	});
</script> 
<script src="js/functions.js"></script> 
<script src="js/particle.js"></script> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15815880-3']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
  <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60329720-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>