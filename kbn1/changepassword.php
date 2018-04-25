
<?php 
	include('config.php'); // // include database file
?>
<?php session_start(); if(!isset($_SESSION['username'])) { header('location:admin.php'); } ?>
<?php
$msg="";
$blanck="";
$succes="";
$message="";

if(isset($_POST['submit'])){
       /*  $username = $_POST['username']; */
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
		$newpassword==$confirmnewpassword;
		
	
		
		$rowSQL = mysql_query("SELECT * FROM tbadministrator WHERE password = '". $_POST["password"]."'");
        $row = mysql_fetch_array( $rowSQL );
        $oldpass = $row[1];
	
	
	if($oldpass==$password)
	{
		if($newpassword==$confirmnewpassword)
				{
					$sql=mysql_query("UPDATE tbadministrator SET password='$newpassword' where password='$password'");
					if($sql)
					{
					$message ="Congratulations! You have successfully changed your password";
					}
				}
				else
				{
				$message ="The new password and confirm new password fields must be the same";
				} 
	} 
	else 
	{
		 $message="You entered an incorrect password"; 
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

  <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style>
#btn{
  margin: 0 auto;
  width:100px;
  height:35px;
  font-weight: bold;
  background-color: #146b85;
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
  border-color: #146b85;
  text-decoration:none;
}
  
</style>


<!----End Header----->
<body style="background-color:">

<div class="main">
 <div class="header">
    <div class="header_resize">
      <div class="rss">
        <p><a href="#"></a> <a href="#"></a></p>
        </div>
        <div class="logo">
	     <h1><a href="index.html"><img src="images/logo.png"  alt="logo"><br><br><br><br><br><br></a> </h1>
      </div>
    </div>
 </div><br><br>
 <div class="row" style="padding:1px 22px 0px 0px;background-color:#e6e6e6;Font-size:20px;font-family:">
	 <div class="col-md-12">
	 
					  <!-- TITLE /*  */-->
					  <table  style="padding-top:10px;width:100%">
					  <tr><td Align=center width="40px" >
                         <a href="dashboard.php" title="Back" data-toggle="tooltip"><img src="images\13.png" height="30px"  >
						  </td>          
                         <td>Welcome <?php echo $_SESSION['username']; ?></td>				 
					   <td Align=right><a href="logout.php" tite="Logout"><img src="images\logout.png" height="30px"> </a></td></tr></table>
        </div>
	</div>						


 <div class="container" style="background:url(images\1.jpg)"><br>
 <div class="row">
 <div class="col-md-12">
 <form method="POST" action="" enctype="multipart/form-data"> 
		<center> <br><br>
		<table style="border-width:5px solid; background-color:#e6e6e6;width:29%;height:250px;cellpadding:5px;cellspacing:10px;border:1px solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
		<tr style="background-color:#146b85" >
		<td colspan="2" padding="10px" align="center" style="color:white"><img src="images\change.png" width="70px" height="30px"  style="padding:8px 2px 0px 0px">
       <br>Change Password</td>
		</tr>

		
        <tr>
	     <td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:">Old Password: </td>
		 <td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
        <input type="password"  style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" name="password"  placeholder="old password"  value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"></td>
        </tr>
        <tr>
        <td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:">New Password: </td>
	    <td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
        <input type="password" style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" name="newpassword"  placeholder="new password" value="<?php echo isset($_POST['newpassword']) ? $_POST['newpassword'] : ''; ?>"></td>
        </tr>
        <tr>
        <td style="padding:5px; text-align:right;font-size:13px;font-weight:bold;background-color:">Confirm Password :</td>
	    <td  style="padding:5px; text-align:right;font-size:13px;font-weight:bold;" >
        <input type="password" style="width:90%;color:#000000;padding-left:5px;font-weight:bold;height:25px" name="confirmnewpassword" placeholder="re-enter password"value="<?php echo isset($_POST['confirmnewpassword']) ? $_POST['confirmnewpassword'] : ''; ?>"></td></td>
        </tr>
	    <tr>
		<td>
		</td>
		<td style="padding:10px 10px 10px 20px;" >
		<input type="submit" name="submit" id="btn" style="color:white;background-color:#146b85;height:30px;width:80px;font-weight:bold;font-size:15px;" value="Update" > 

		</td>
		</tr>
       </table></form>
	
	 <br><center><span style="color:#006699;font-weight:bold;"><?php echo $message; ?></span></center><br><br>
	 <!----End Main Contents---------->
</div>
</div>
</div>
<!----copyright---------->
<div class="container-fluid" id="copyright">
<div class="container" > 
 <div class="row">
   <div class="col-sm-12">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a></div>
 </div>
</div>		
	 
</div>
<!----end copyright---------->
	</body>
	</html>  