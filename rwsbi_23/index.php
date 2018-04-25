

<?php 
	include('config.php'); // // include database file
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome to Ravi Wakode Sir's Banking Institute</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" type="image/png" href="images/ico/logo1.png"  width="16" height="16">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<style>
div.scroll {
    background-color: #ffffff;
	display: block;
    width: 350px;
    height: 150px;
    overflow: auto;
} 
th{border:1px solid gray;text-align:center;padding:5px;}
td{border:1px solid gray;padding:5px;}
.p{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)}
.t{text-align:center;}</style>

	</style>
	
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.php"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
						    <li> <a href="http://exam.rwsbi.com" target="">Online Exams</a></li>
                         <li><a href="career.html">Career</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams  <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="IBPS-CWE (Clerical).html" >IBPS CWE (Clerical)</a></li>
				                    <li><a href="IBPS -CWE (PO).html" >IBPS CWE (PO)</a></li>
				                      <li><a href="SBI(PO).html" >SBI(PO)</a></li>
				                        <li><a href="SBI-Clerical.html" >SBI Clerical</a></li>
				                         <li><a href="IBPS-CWE (RRB).html" >IBPS-CWE (RRB)</a></li>
				                         <li><a href="IBPS-CWE SO.html" >IBPS CWE SO</a></li>
				                         <li><a href="SSC-CGL.html" >SSC CGL</a></li>
				                       <li><a href="RBI-Assistant-Recruitment-Exam.html" >RBI-Assistant-Recruitment-Exam</a></li> 
				                      <li><a href="CAT.html" > About CAT</a></li>
				                    <li class="divider"></li>
                                <li><a href="Syllabus.html">Syllabus</a></li>
                            </ul>
                        </li>
						  <li><a href="portfolio.html">Portfolio</a></li>
                       <li ><a href="course.html">Courses</a></li> 
                        <li><a href="contact-us.html">Contact Us</a></li>
                       
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
	<br><br><br><br>
	
<section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
               
               <img src="images\sample\slider\slider1.jpg" alt="" />
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <img src="images\sample\slider\slider2.jpg" alt="" />
            </div>
            <!--Slider Item2-->
        </div>
        <!--Slider Item3-->
    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
<!--Services-->
<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <h2>Welcome to Ravi Wakode Sir’s Banking & Educational Institute</h2><br>
                <p class="no-margin">"Ravi Wakode Sir’s Banking & Educational Institute" (RWSBI) has started from October, 2010 in renowned Amravati city from Maharashtra State directed by Mr. Ravikumar Niranjan Wakode.
                    <br><br>
                 Institute is recognized for his Aggressive Excellence and Imparting a triumph caliber for banking examination as well as CMAT for MBA aspirant student also for MPSC/UPSC [CSAT] and LIC, SSC.<br>
				</p>
            </div>
            
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
       

        <div class="row-fluid">
		<div class="span4">
                <table class="p" width="350px" height="200px" >
				<tr><th style="background:#3fbceb;color:#ffffff" height="20px" padding="10px" >Current News</th></tr>
				<tr><td><marquee direction="up" scrolldelay="300" width="100%" height="110px" scrollamount="11" onmouseover="this.stop();" onmouseout="this.start();" >
  <ul>
 <?php 
 // query for select all products data
	 $query_parent=mysql_query("Select * from tb_docs_news ORDER BY id DESC") or die("Query failed: ".mysql_error());
        
	/* // fetching all data in table format */
         while($r=mysql_fetch_row($query_parent))
         {			 			 
	
			echo "<b style='font-size:13px;'></b><br>";
			echo "<li class='content'><b>$r[1]</b><br>";
			
		/* 	if ($r[2] == 'doc/') */
			
		/* 	}else{ */
				echo "<center><a href='download.php?nama=".$r[2]."' style='text-decoration:none;font-size:13px;'></b><img src='images/download.png' alt='Download' width='140''></a></center>";
			
			$position=40; // Define how many character you want to display.

$message="$r[3] "; 

$post = substr($message, 0, $position); 

echo "<a href=$r[3]  style='font-size:13px;font-weight:bold;  '>$post</a>";

			
			
			/* echo "<b><a href='".$r[3]."'></b></a>"; */
			  echo "  </li>"; 
		}
?> 
				   
             
    </ul>
          
       </marquee></td></tr>
				</table>
            </div>
                       

            <div class="span4">
               <table class="p" width="350px" height="200px" >
				<tr><th style="background:#3fbceb;color:#ffffff" height="20px" padding="10px" >Job Section</th></tr>
				<tr><td><marquee direction="up" scrolldelay="300" width="100%" height="110px" scrollamount="11" onmouseover="this.stop();" onmouseout="this.start();" >
				    <ul>
				        <?php 
 // query for select all products data
	 $query_parent=mysql_query("Select * from tb_docs_job ORDER BY id DESC") or die("Query failed: ".mysql_error());
        
	/* // fetching all data in table format */
         while($r=mysql_fetch_row($query_parent))
         {			 			 
	
			echo "<b style='font-size:13px;'></b><br>";
			echo "<li class='content'><b>$r[1]</b><br>";
			
		/* 	if ($r[2] == 'doc/') */
			
		/* 	}else{ */
				echo "<center><a href='download.php?nama=".$r[2]."' style='text-decoration:none;font-size:13px;'></b><img src='images/download.png' alt='Download' width='140''></a></center>";
			
			
			$position=40; // Define how many character you want to display.

$message="$r[3] "; 

$post = substr($message, 0, $position); 

echo "<a href=$r[3]  style='font-size:13px;font-weight:bold;  '>$post</a>";

			/* echo "<b><a href='".$r[3]."'></b></a>"; */
			  echo "  </li>"; 
		}
?> 
				    </ul>   
				
				 </marquee></td></tr>
				</table>
            </div>            

           <div class="span4">
                
                     <table class="p" width="350px" height="200px" >
					 				<tr><th style="background:#3fbceb;color:#ffffff" height="20px" padding="10px" >Upcoming Exams</th></tr>
                     <tr><td><div class="scroll">
					                    <ul><?php 
 // query for select all products data
	 $query_parent=mysql_query("Select * from tb_docs_exams ORDER BY id DESC") or die("Query failed: ".mysql_error());
        
	/* // fetching all data in table format */
         while($r=mysql_fetch_row($query_parent))
         {			 			 
	
			echo "<b style='font-size:13px;'></b><br>";
			echo "<li class='content'><b>$r[1]</b><br>";
			
		/* 	if ($r[2] == 'doc/') */
			
		/* 	}else{ */
				echo "<center><a href='download.php?nama=".$r[2]."' style='text-decoration:none;font-size:13px;'></b><img src='images/download.png' alt='Download' width='140''></a></center>";
			
			
			 $position=40; // Define how many character you want to display.

$message="$r[3] "; 

$post = substr($message, 0, $position); 

echo "<a href=$r[3]  style='font-size:13px;font-weight:bold;  '>$post</a>";

			/* echo "<b><a href='".$r[3]."'></b></a>"; */
			  echo "  </li>"; 
		}
?> 
					                    </ul>
					      </div></td></tr>
					   </table>
                    </div>
                </div>
            </div> 
        <div class="gap"></div>
</section>
<!--/Services-->

<div style="background-color:gray;padding:40px">
     <MARQUEE behavior="scroll" direction="left" width="100%">
        <img src="images/Logos/NABARD.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/Logos/SBI_po.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/Logos/SBI_clerk.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/RBI_gradeB_officer.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/IBPS_po.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/IBPS_clerk.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/IBPS RRB Officer Scale I.png">&nbsp;&nbsp;&nbsp;&nbsp;
	    <img src="images/Logos/IBPS RRB Office Assistant.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/NABARD Development Assistant.png">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/Logos/RBI Office Assistant.png">
		
     </MARQUEE>
</div>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Our Services</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p><ul>
				         <li>RWS Banking Institute</li>
				         <li>RWS Overseas Consultancy</li>
				         <li>RWS Job Placement & Guideline Center</li>
				    </ul>
				</p>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                             </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>


<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                       Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a> 
			 </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                 </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>