<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<ul>
	<li class="first"><a href="profile.php" title="">Home</a></li>
<li><a href="aboutus.html" title="">About Us</a></li>
	<li><a href="history.html" title="">History</a></li>
	<li><a href="litrature.html" title="">Litreature</a></li>
	<li><a href="spiritual.html" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.html" title="">Contact Us</a></li>
</ul>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div id="leftpart">
	<div class="container">
    <h1>Wedding Invitation</h1>
	<div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Wedding Invitation and it's related information.<br /><br /><br />
	Wedding Invitation and it's related information.
	</marquee>
	</div>
    </div>
	<div class="space"></div>
	<div class="container">
    <h1>Sansmaran</h1>
	<div class="invite">
	<marquee height="110px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Sansmaran and it's related information & content.
	</marquee>
	</div>
	</div>
	<div class="space"></div>
	<div class="container">
    <h1>Search for Gotra</h1>
	<div ><br />
	&nbsp;&nbsp;Surname: <input class="txtbx" type="text" /><br />
	<div style="margin-left:58px"><input type="submit" class="signin" name="login" value="Login" /></div>
	<br /><br />
	</div>
	</div>
	<div class="space"></div>
	
</div>

<div id="middlepart">
    
	<h2>User Profile</h2>
    <?php
session_start();
if(isset($_SESSION['uname']))
{
$nm=$_SESSION['uname'];
//echo "$nm";
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';

}
?>


<?php
if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}
?>
<center>
<form action="index.php" method="post">
<input type="button" value="Home" onclick="location.href='index.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form>
<br />
<a href="changepssword.php">Change Password</a>
<br />
<br />
<a href="editprofile.php">Edit Profile</a>
<br />
<br />
<a href="frmlatest_news.php">Upload News</a>
<br />
<br />
<a href="frmbirth_death.php">Birth Date</a>
<br />
<br />
<a href="frmtoppers.php">Toppers</a>
<br />
<br />
<a href="frmsendmessage.php">Send Message</a>
</center>

	<div class="space1"></div>
</div>

<div id="rightpart">
	<div class="container">
	<h1>Contributors</h1>
    <div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	<img src="images/r2.jpg" /><br /><br /><img src="images/r1.jpg" /><br /><br /><img src="images/r2.jpg" />
	</marquee>
	</div>
	</div>

    <div class="space"></div>
	<div class="container">
    <h1>Abhinandan</h1>
    <div class="invite">
	<marquee height="110px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="left" behavior="alternate" scrollamount="2">
	<img src="images/r1.jpg" />&nbsp;<img src="images/r2.jpg" />
	</marquee>
	</div>
    </div>
    <div class="space"></div>
		<div class="container">
	 <h1>Din Vishesh</h1>
    <div style="padding:10px 10px 10px 10px">
	<marquee height="77px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Din Vishesh and it's related information ...
	</marquee>
	</div>
    </div>
    <div class="space"></div>
    
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
</body>
</html>
