<?php 
	include('config.php'); // // include database file
?>
<?php

$msg="";
$blanck="";
$succes="";

	session_start(); //start user session
	
	$message="";
	
	if(count($_POST)>0) 
	{
	 


	$result = mysql_query("SELECT * FROM tbadministrator WHERE BINARY username='" . $_POST["username"] . "' and BINARY password = '". $_POST["password"]."'");
	$row  = mysql_fetch_array($result);
	
	if(is_array($row)) 
	{
		
		$_SESSION["username"] = $row[username];
		header("Location:dashboard.php");
	} 
	else 
	{
		$message = "Invalid Username or Password!"; // if user invalid
	}
	}
	


	/* if(isset($_SESSION["username"])) 
	{
		header("Location:index.html"); // if user valid it redirect to the home page
	} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KHADAYATA COMMUNITY BUSINESS FORUM</title>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
   
  
  
  <link rel="shortcut icon" type="image/png"  href="images\icon\KBN logo.png" width="16" height="16"/>
 <script language="Javascript" type="text/javascript">
      
  function preventback() 
{  
window.history.forward();  
  } 
  setTimeout("preventback()",0);
  window.onunload = function(){null};
   </script> 
   
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
  
 
  
 </head> 
  
     
  
<!----End Header----->
 <body >
 <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="rss">
        <p><a href="#"></a> <a href="#"></a></p>
      </div>
      <div class="logo">
	  <h1><a href="index.html"><img src="images/logo.png" alt="logo"><br><br><br><br><br><br></a> </h1>
      </div>
    </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
 <form method="POST" action="" enctype="multipart/form-data"> 
		<center> <br><br><br><br><br>
		<table style="border-width:5px solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color:#e6e6e6;width:25%;height:250px;cellpadding:5px;cellspacing:10px;border:1px solid">
		<tr style="background-color:#146b85" >
		<td colspan="2" padding="10px" align="center" style="background-color:;color:white;font-size:19px"><img src="images\9.png" width="50px" height="50px"><br>Login Form</td>
		</tr>
		<tr>
		<td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;"><img src="images\7.png" height="20px"></td>
		<td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;">
		<input style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" type="text"  placeholder="Username"     name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
		</td>
		</tr>
		
		<tr style="background-color:">
		<td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:"><img src="images\8.png" height="20px"> </td>
		<td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
		<input style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" type="password"  placeholder="password"     name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
		</td>
		</tr>
			
		<tr>
		<td>
		</td>
		<td style="padding-left:20px;" >
		<input type="submit" id="btn" name="submit" OnClick="preventback()" style="color:white;background-color:#146b85;height:30px;width:80px;font-weight:bold;font-size:15px;" value="Login" > 
		</td>    
		</tr>
		 
		</table> </center>
		</form><br><center><span style="color:#006699;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div>
 </div>
 </div>
 </div>
 <br><br><br><br><br>
<!----End Main Contents---------->

<!----copyright---------->
<div class="container-fluid" id="copyright">
<div class="container" > 
 <div class="row">
 <div class="col-sm-9">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a>
 </div>

 </div>
</div>		
	 
</div>
<!----end copyright---------->
</body>
</html>