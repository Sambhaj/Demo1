<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php
require_once('db.php');
?>
<script type="text/javascript">
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
<li class="first"><a href="userhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
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
	<form action="gotra.php" method="post">
	&nbsp;&nbsp;Surname: <input class="txtbx" type="text" name="txtsurname" /><br />
	<div style="margin-left:58px"><input type="submit" class="signin" name="Search" value="Search" /></div></form>
	<br /><br />
	</div>
	</div>
	<div class="space"></div>
	
</div>

<div id="middlepart">
    
	<h2>User Profile</h2>
    <?php
if(isset($_POST['Submit']))  
{
 
$chkvalue=$_POST["hide"];
$email=$_POST['email'];
$username=$_POST["username"];
//echo "<script> alert('$chkvalue')
if($email != "" and $username !="")
{

if($chkvalue == "admin")
{
$passward=mysql_query("SELECT password FROM tbadmin where username='$username'");

}
else if($chkvalue == "user")
{
$passward=mysql_query("SELECT password FROM tbregistration where username='$username'");
}

$count=mysql_num_rows($passward);
$subject = "Password recovery message";
$message = "Hello! $username your passward is $count.";
$from = "asksedna@gmail.com";
$headers = "From:" . $from;
$result=mail($email,$subject,$message,$headers);

   if($result)
   {
    $mesage= "your password has been email to you.";
   }
   else
   {
    $mesage= "Sorry..! email not send Try again...";
   }
}
else
{
$mesage= "Please enter username and email id";
}

}
else
{
$chkvalue = $_GET['type']; 

}
?>



<form  action="forgotpassword.php" method="post">
<center>
<h3>Forgot Password</h3>
<br />
<table>
<tr><td>Username</td><td><input type="text" name="username"   value="<?php echo $username;?>" /></td></tr>
<tr><td>Email id</td><td><input type="text" name="email" id="email" onblur="emailvalidate();" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit" /></td></tr>
<tr><td></td><td><?php echo "$mesage"; ?></td></tr>
</table>
<input type='hidden' name='hide' value=<?php echo "$chkvalue"; ?> />
</center>
</form>

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
    <div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	<?php
		mysql_set_charset('utf8');
$qr="SELECT suvichar as id FROM `suvichar` ";
$rs=mysql_Query($qr,$dsn);
$row = mysql_fetch_array($rs);
$news= $row['id'];
echo "$news<br />";		
?>
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
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
