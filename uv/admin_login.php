<?php 
	include('config.php'); // // include database file
?>
<?php
	session_start(); //start user session
	$message="";
	
	if(count($_POST)>0) 
	{
	 


	$result = mysql_query("SELECT * FROM tb_admin WHERE BINARY username='" . $_POST["username"] . "' and BINARY password = '". $_POST["password"]."'");
	$row  = mysql_fetch_array($result);
	
	if(is_array($row)) 
	{
		$_SESSION["id"] = $row[id];
		$_SESSION["username"] = $row[username];
	} 
	else 
	{
		$message = "Invalid Username or Password!"; // if user invalid
	}
	}

	if(isset($_SESSION["username"])) 
	{
		header("Location:admin_panel.php"); // if user valid it redirect to the home page
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome To UV Advisory  </title>
	
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

	<style>
   table {
           background-color:#FFFFFF;
            width:350px;
            height:100px;
        
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            border-radius:20px;
        }
        th {
            background-color:#FECB39;
            padding:15px;
           border-top-left-radius: 20px;
           border-top-right-radius:20px;
        }
        td {
             padding:15px;
        }
		
		#btn{
  margin: 0 auto;
  width:100px;
  height:35px;
  font-weight: bold;
  background-color: #FECB39;
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
  color: #146b85;
   font-size:15px;
  border-color: #000000;
  text-decoration:none;
}

 
 </style>
	</head><!--/head-->

<body >

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
                    <a class="navbar-brand" href="index.php"><img src="images/ico/logo1.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li ><a href="about-us.html">About Us</a></li>
						<li ><a href="services.php" >Services</i></a>
                            
                        </li>
                        <li><a href="clientele.html">Clientele</a></li>
                        <li><a href="#">Media Presence</a></li>
                       
                        <li><a href="http://liabilityleanings.blogspot.in/" target="blank">Blog</a></li> 
                        <li><a href="contact-us.html">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->
<!----Start header banner----->
 
<!----End header banner----->
<!----Start Main Contents---------->
 <div class="container-fluid"> 
 <div class="container" style=""><br><br><br>
 <form method="POST" action="" enctype="multipart/form-data"> 
  <center>
    <table style="width:300px;">
         <tr>
             <th colspan="2" style="height:50px;text-align:center;font-size:20px"> Admin Login</th>
         </tr>
        
         <tr>
             <td><img src="images/ico/4.png" > </td>
                <td><input style="color:#000000;width:100%;padding:5px" type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
         </tr>
         <tr>
              <td><img src="images/ico/6.png" ></td>
                <td><input style="color:#000000;width:100%;padding:5px" type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"></td>
         </tr>
         <tr><td></td>
            <td><input type="submit" name="submit" id="btn"  style="color:#000000;width:100%" value="Login" ></td>
	     </tr>
        
    </table>		




 </center>
</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div><br>
 </div>
<!----End Main Contents---------->
 
<!--/#bottom-->
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
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>