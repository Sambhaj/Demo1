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
<script type="text/javascript">
  function ChangeToPassField() {
    document.getElementById('PasswordField').type="password";
  }
  </script>
  
  <script language="javascript" src="js/prototype-1.6.0.2.js" type="text/javascript"></script>
<script language="javascript" src="js/preview_templates.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
<!--

function loadPre(id,name,ref,w,h){
 new TemplatePreview(id, {
        title:  name,
        src:    ref,
        width:  w,
        height: h      });
}
// -->

</script>
</head>

<body>
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="910px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3></h3></td>
	<td align="right" valign="top">
	<div class="log">
	<?php 
 
//ob_start("ob_gzhandler");
if ($_SERVER["REQUEST_METHOD"] == "POST")                       //check post back event
{

$unm=$_POST["unm"];
$psw=$_POST["psw"];
if($unm <> "" || $psw <> "" )
{
require_once('db.php');
$qr="Select username as usrnm,member_id as id from tbregistration where username='$unm' and password='$psw' and verified is true and activate is true";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());
$row = mysql_fetch_array($rs);
$uname= $row['usrnm'];
$id=$row['id'];
if($uname <> "")
{ 
session_start();
// store session data
$_SESSION['uuname']=$uname;
$_SESSION['type']="user";
$_SESSION['id']=$id;
//echo "Pageviews=". $_SESSION['uuname'];
echo  '<META http-equiv="refresh" content="0;URL=userhome.php">';
}
else
{
echo "<script> alert('User account is not activated please contact to Admin')</script>"; 
echo  '<META http-equiv="refresh" content="0;URL=index.php">';
}
}
else
{
echo "<script> alert('Please enter required fields')</script>"; 
}

}
?>
	<form  name="frm1" action="index.php" method="post">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td><b>Matrimony</b></td>
	<td><input type="button" class="signup" name="login" value="Signup" onClick="parent.location='registration.php'" /></td><td>or &nbsp;</td>
	<td><input class="txtbx" type="text" name="unm" value="username" OnClick="this.value=''" onblur="if(this.value==''){this.value='username'}"/>&nbsp;</td>
	<td><input class="txtbx" type="password" name="psw" id="PasswordField" onfocus="ChangeToPassField()" value="password" OnClick="this.value=''" /><br />
</td>
	<td><input type="submit" class="signin" name="login" value="Signin" /></td></tr>

	<tr><td height="35px" align="right" colspan="6"><h4>Matrimony and Employee Login</h4></td></tr>
	</table>
	</form>
	<form  name="frm2" action="index.php" method="post">
	<div class="log">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right"><b>Employee Reference </b></td>
	<td><input type="button" class="signup" name="sign" value="Signup" onClick="parent.location='signup_employer.php'" /></td><td>or &nbsp;</td>
	<td><input class="txtbxsrch" type="text" onClick="parent.location='esearch.php'" /> </td>
	<td><!--<input class="txtbx" type="password" /> -->
</td>
	<td><input type="button" class="srch" name="search" value="Search" onClick="parent.location='esearch.php'" /></td></tr>
	<!--<tr><td align="right" colspan="6"><br /><a style="text-decoration:none" class="signin" href="signup_employer.php">SignUp Employer</a>&nbsp;<a style="text-decoration:none" class="signin" href="esearch.php">Search Employer</a></td></tr> -->
	</table>
	</div>
	</form>
	</div>
	</td></tr>
	</table>
	
</div><!-- Header ends here -->
<div id="navigation">
<ul>
	<li class="first"><a href="#" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title=""><img src="images/new.gif" height="12" />Spiritual</a></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
</ul>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div id="leftpart">
	
	 <?php include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
    <div style="width:480px;">
    <marquee height="153px" onmouseover="this.stop();" onmouseout="this.start();"direction="left" behavior="scroll" scrollamount="2">
    <img src="images/img10.jpg" width="230" height="153" border="0" /> <img src="images/img11.JPG" width="230" height="153" border="0" /> <img src="images/img04.jpg" width="230" height="153" border="0"> <img src="images/img06.jpg" width="230" height="153" border="0"> <img src="images/img07.jpg" width="230" height="153" border="0"> <img src="images/img08.jpg" width="230" height="153" border="0"> <img src="images/img09.jpg" width="230" height="153" border="0"> <img src="images/img02.png" border="0"> <img src="images/img03.jpg" width="221" height="153" border="0">
    </marquee>
    </div>
	<!--<h2>Welcome to our Website</h2>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nb