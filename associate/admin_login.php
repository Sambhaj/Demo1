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
  <title>Jagdish B. Shah & Associates | About us</title>
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
  
  <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>

   
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
  table{
	 background-color:#5DB047;
	
	
 }
 table td{
	 font-size:13px;
	 padding:5px;
	 color:#FFFFFF;
	 font-weight:bold;
 }
 
 </style>
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
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right"><br>
				
				 <li>
                                <a href="index.php"  >Home</a>
                                
                            </li>
                            <li>
                                <a href="about_us.html" >About us</a>
                                
                            </li>
							 
							<li>
                                <a href="services.html"  >Services</a>
                                
                            </li>
							 
							  
							<li>
                                <a href="contact_us.php"  >Contact us</a>
                                
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
 
<!----End header banner----->
<!----Start Main Contents---------->
 <div class="container-fluid"> 
 <div class="container" style="background:#DCDCDC;"><br>
 <form method="POST" action="" enctype="multipart/form-data"> 
		<center> <table style="border-radius: 25px; " >
		 <tr>
		<td style="text-align:right;"><br>Username :  </td>
		<td><br>
		<input style="width:90%;color:#000000;padding-left:5px;font-weight:bold;" type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
		</td>
		</tr>
		<tr>
		<td style="text-align:right;">Password :  </td>
		<td>
		<input style="width:90%;color:#000000;padding-left:5px;font-weight:bold;" type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
		</td>
		</tr>
		
		
		<tr>
		<td>
		</td>
		<td>
		<input type="submit" name="submit" style="color:#000000;" value="Submit" > 
		</td>
		</tr>
		 
		</table> </center>
		</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div>
 </div>
<!----End Main Contents---------->
 
<div class="container-fluid" id="footerbottom"> 
 <div class="container" id="footerbottom">
 <div class="row" >
  <div class="col-md-3"><h3>About us</h3><p>We have  well trained and experienced personnel proficient in all aspects of our assignments supported by the most modern and sophisticated infrastructure. Our teams of highly skilled and motivated personnel have gained in-depth experience in providing multitude of services.</p>
 </div>
  <div class="col-md-3"><h3>Quick Contacts</h3><p>
  
  <span class="glyphicon glyphicon-map-marker" style="color:#FFFFFF;"></span> 7, Bharat Nagar, Behind Ambit, Senapati Bapat Marg, Lower Parel (West), Mumbai - 400 013 (Maharashtra) India. <br>

<span class="glyphicon glyphicon-phone-alt" style="color:#FFFFFF;"></span> &nbsp;022-2491 4190 / 2490 0163<br>

<span class="glyphicon glyphicon-print" style="color:#FFFFFF;"></span> &nbsp;022-2389 4782 <br>
 

<span class="glyphicon glyphicon-envelope" style="color:#FFFFFF;"></span> &nbsp; jbshah@cajbshahassociates.com<br>

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