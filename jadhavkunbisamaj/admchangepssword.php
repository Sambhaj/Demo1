<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
require_once('db.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
	<script type="text/javascript" src="supersleight-min.js"></script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3>Welcome to User Homepage</h3></td>
	<td align="right" valign="top">
	
	</td>
	</tr></table>
</div><!-- Header ends here -->
<div id="navigation">
   <?php
	session_start();
if(isset($_SESSION['auname']))
{
$nm=$_SESSION['auname'];
//echo "$nm";
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';
}

?>
<form action="adminhome.php" method="post">
<ul>
	<li class="first"><a href="adminhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
	<li><input type="submit" style="background:transparent; border:none; font-size:14px; font-weight:bold; color:#FFFFFF;" name="logout"  value="Log Out" /> &nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?></li>	
</ul></form>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div  align="center"><br />
<br />

    
	<br />
<br />

 

<?php
if(isset($_POST['Submit']))     
{
$username=$_POST["username"];
$oldpsw=$_POST["oldpsw"];
$password=$_POST["password"];
$confpsw=$_POST["c_password"];
if($username != "" and $password != "")
{
if($confpsw == $password)
{
$qr="Select username as unm,password as psw from tbadmin where username='$username' and password='$oldpsw'";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$unm= $row['unm'];
$psw= $row['psw'];
if($unm == $username and $psw == $oldpsw)
{
	$qry="update tbadmin set password='$password' where username='$username' and password='$oldpsw'";
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Password changed Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';                          
      }  
}
else
{
$msg="Username not availabel";
}
}
else
{
$msg="New Password and Cofirm Password should be same";
}
}
else
{
$msg="Please enter all fields";
}
}

if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}
?>
<form action="admchangepssword.php" method="post"><!--
<center>
<input type="button" value="Home" onclick="location.href='adminhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?><br />
<br />
-->
<h2>Change Password</h2>
<br />
<table>
<tr><td>Username</td><td><input type="text" name="username"   value="<?php echo $username;?>" /></td></tr>
<tr><td>Old Password</td><td><input type="password" name="oldpsw" /></td></tr>
<tr><td>New Password</td><td><input type="password" name="password" /></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="c_password" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit" /></td></tr>
<tr><td></td><td><?php echo "$msg"; ?> </td></tr>
</table>


</center>
</form>


	<div class="space1"></div>
</div>


<div class="clear"></div>
<!--<div class="bottomImg"><img src="images/bottomBg.png" alt="" /></div>-->
</div>
</div><!-- Content ends here -->
</div><!-- Content Holder ends here -->

<!--<div class="bottomImg"><img src="images/02.png" alt="" /></div> -->

<div id="footer"><!-- Footer starts here -->
<!--<div lang="copy">&copy; Copyright 2014</div> -->
<div class="design">&copy; Copyright 2014 |<a href="http://sednainfosystems.com">Powered by SEDNA</a></div>
<div class="clear"></div>
</div><!-- Footer ends here -->
</div><!-- Main ends here -->
<?php 
mysql_close($dsn);
?>
</body>
</html>
