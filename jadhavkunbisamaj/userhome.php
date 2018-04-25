<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once('db.php');?>

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
if(isset($_SESSION['uuname']))
{
$nm=$_SESSION['uuname'];
//echo "$nm";

}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';

}
?>
<form action="userhome.php" method="post">
<ul>
	<li class="first"><a href="index.php" title="">Home</a></li>
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

<div id="leftpart">
<?php include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
    
	<h2>User Profile</h2>
  

<?php
if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}
?>



<center>
<!--
<form action="userhome.php" method="post">
<input type="button" value="Home" onclick="location.href='userhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />-->

<table style=" text-align:center; "><tr><td width="200px">
<a href="usereditprofile.php">
<img src="icons/edit.png"/>
<h4	><b>Update Profile</b></h4></a><br />

</td><td width="200px">
<a href="userprofilesearch.php"><img src="icons/edit_user.png" /><h4><b>Search Profile</b></h4></a>

</td></tr>
<tr><td>

<a href="usermessagedisplay.php"><img src="icons/mail_forward.png"/><h4><b>Messages</b></h4></a>
</td><td>

<a href="usersendmessage.php"><img src="icons/mail_send.png" /><h4><b>Send Message</b></h4></a><br />
</td></tr>
<tr><td colspan="2">

<a href="userchangepssword.php"><img src="icons/exchange.png" /><h4><b>Change Password</b></h4></a>
</td></tr></table>
<br />
</center>

	<div class="space1"></div>
</div>

<div id="rightpart">
	 <?php include 'rightpart.php'; ?>
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
//mysql_close($dsn);
?>
</body>
</html>
