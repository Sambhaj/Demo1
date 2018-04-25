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
			<li class="first"><a href="index.php" title="">Home</a></li>
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



<div  align="center"><br />
<br />

    
	<h2>User Profile</h2>
    <?php 
 
//ob_start("ob_gzhandler");
if ($_SERVER["REQUEST_METHOD"] == "POST")                       //check post back event
{
require_once('db.php');
$unm=$_POST["unm"];
$psw=$_POST["psw"];
if($unm <> "" || $psw <> "" )
{
$qr="Select username as usrnm from tbadmin where username='$unm' and password='$psw'";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$uname= $row['usrnm'];

if($uname <> "")
{ 
session_start();
// store session data
$_SESSION['auname']=$uname;
$_SESSION['type']="admin";
//echo "Pageviews=". $_SESSION['uuname'];
echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';
}
}
else
{
echo "<script> alert('Please enter required fields')</script>"; 
}
mysql_close($dsn);

}

?>
<form  name="frm1" action="adminlogin.php" method="post">
<center>
<h2>Login</h2>
<table>

<tr><td>User Name</td><td><input type="text" name="unm" /></td></tr>
<tr><td>Password</td><td><input type="password" name="psw" /></td></tr>
<tr><td></td><td><input type="submit" name="login" value="Login" /></td></tr>
<tr><td></td><td><a  href="forgotpassword.php?type= <?php echo "admin"; ?> " >Forgot Password</a></td></tr>
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

</body>
</html>
