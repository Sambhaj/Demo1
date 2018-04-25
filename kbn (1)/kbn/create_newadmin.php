<?php 
	include('config.php'); // // include database file
?>
<?php session_start(); if(!isset($_SESSION['username'])) { header('location:admin.php'); } ?>


<?php

$message="";
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";
	
if(isset($_POST['submit'])) {
	
// declare all variable
$usname=$_POST['username'];
$newpassword=$_POST['newpassword'];
   
        $confirmnewpassword = $_POST['confirmnewpassword'];
		$newpassword==$confirmnewpassword;

		
		 if (!empty($_POST["username"])&&!empty($_POST["newpassword"]))
   {
		
if($newpassword==$confirmnewpassword)
				{
					$sql=mysql_query("INSERT INTO  tbadministrator(username,password) VALUES('$usname','$newpassword')");
					if($sql)
					{
					$message ="Congratulations! You have successfully create new admin !!";
					}
				}
				   else
				   {
				   $message ="The new password and confirm new password fields must be the same";
				   } 
   }
   else{
	    $req="*";
	  $message="Please Fill in all Mandatory Fields!!";
   }
 
}


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

  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />



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
 <br><br>
   <div class="row" style="padding:1px 22px 0px 0px;background-color:#e6e6e6;Font-size:20px;font-family:">
	    <div class="col-md-12">
	 
					  <!-- TITLE /*  */-->
					  <table  style="padding-top:10px;width:100%">
					  <tr><td Align=center width="40px" >
                          <a href="dashboard.php"><img src="images\13.png" height="30px">
						  </td>          
                         <td>Welcome <?php echo $_SESSION['username']; ?></td>				 
					   <td Align=right><a href="logout.php" tite="Logout" data-toggle="tooltip"><img src="images\logout.png" height="30px" style="" ></a></td></tr></table>
        </div>
	</div>
 
 
  <div class="container" style="background:url(images\1.jpg)"><br>
 <div class="row">
 <div class="col-md-12">
 <form method="POST" action="" enctype="multipart/form-data"> 
		<center> <br><br>
		<table style="border-width:5px solid; background-color:#e6e6e6;width:26%;height:250px;cellpadding:5px;cellspacing:10px;border:1px solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
		<tr style="background-color:#146b85" >
		<td colspan="2" padding="10px" align="center" style="color:white"><img src="images\9.png" width="50px" height="50px"><br>Create New Account</td>
		</tr>
		<tr>
		<td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;">Username:</td>
		<td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;">
		<input style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" type="text"  placeholder="username"     name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
		</td>
		</tr>
		<tr>
       <td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:"> Password: </td>
	   <td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
       <input type="password" style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" name="newpassword"  placeholder=" password" value="<?php echo isset($_POST['newpassword']) ? $_POST['newpassword'] : ''; ?>"></td>
       </tr>
       <tr>
       <td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:">Retype-Password :</td>
	   <td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
       <input type="password" style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" name="confirmnewpassword" placeholder="re-enter password"value="<?php echo isset($_POST['confirmnewpassword']) ? $_POST['confirmnewpassword'] : ''; ?>"></td></td>
       </tr>
	    <tr>
		<td>
		</td>
		<td style="padding-left:20px;" >
		<input type="submit" name="submit" id="btn" style="color:white;background-color:#146b85;height:30px;width:80px;font-weight:bold;font-size:15px;" value="Submit" > 
		 <a href="dashboard.php" tite=""><input type="button" id="btn" style="color:white;background-color:#146b85;height:30px;width:80px;font-weight:bold;font-size:15px;" name="logout" value="Cancal" ></a>
		</td>
		</tr>
		 
		</table> </center>
	</form><br><center><span style="color:#006699;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div>
 </div>
 </div>
 </div>
 <br>
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