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
	<td><img src="icons/matrimony.png" height="22"></td>
	<td><input type="button" class="signup" name="login" value="Signup" onClick="parent.location='registration.php'" /></td><td>or &nbsp;</td>
	<td><input class="txtbx" type="text" name="unm" value="username" OnClick="this.value=''" onblur="if(this.value==''){this.value='username'}"/>&nbsp;</td>
	<td><input class="txtbx" type="password" name="psw" id="PasswordField" onfocus="ChangeToPassField()" value="password" OnClick="this.value=''" /><br />
</td>
	<td><input type="submit" class="signin" name="login" value="Signin" /></td></tr>

	<tr><td align="right" colspan="6"><br /><h4>Find your better half... .. .</h4></td></tr>
	</table>
	</form>
	<form  name="frm2" action="index.php" method="post">
	<div class="log">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right"><img src="icons/employee.png" height="22"></td>
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
	
	 <?php include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
 <h4>Admissions to agriculture courses begin tomorrow  </h4>
<p>The online admissions to undergraduate courses in state agriculture colleges will start on Monday.</p>
<h4>Minister for third party audit of 100 agricultural feeders </h4>
<p>In view of large number of complaints by consumer activists, energy minister Chandrashekhar Bawankule has ordered a third party audit of 100 agricultural feeders.</p>
 <h4>MP proposes crop insurance based on risk mitigation </h4>
<p>Madhya Pradesh government is working on a two-fold plan to confront possibilities of an imminent drought in state.</p>
<h4>Organic farming takes baby steps in south Gujarat </h4>
<p>A jumbo Kesar mango grown at an organic farm weighs 500 grams. Pravin Desai, a progressive farmer in Valod of Tapi district has 2,000 trees that have produced 14,000 kg this year. While the organic produce is superior in quality, its high price keeps.</p>
  </div>
<div id="rightpart">

  <?php include 'rightpart.php'; ?>
    
    </div>
	<marquee style="color:#006600; font-size:14px; font-weight:bold" height="35px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="left" behavior="alternate" scrollamount="2">
<img src="icons/tree.png">	आपण हिरव्यागार वातावरणात राहू इछीता की...
रखरखीत वाळवंटात?
मर्जी आपली कारण...
जीवन आहे आपले...
झाडे लावा - झाडे जगवा!!<img src="icons/tree.png">
	</marquee>
<div class="clear"></div>
<!--<div class="bottomImg"><img src="images/bottomBg.png" alt="" /></div>-->
</div>
</div><!-- Content ends here -->

</div><!-- Content Holder ends here -->

<!--<div class="bottomImg"><img src="images/02.png" alt="" /></div> -->

<div id="footer"><!-- Footer starts here -->
  Visitor: <!-- Start of StatCounter Code for Default Guide --><script type="text/javascript">
var sc_project=9589075;
var sc_invisible=0;
var sc_security="555fc630";
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img class="statcounter"
src="http://c.statcounter.com/9589075/0/555fc630/0/" alt="web
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
  
  <a href="http://www.facebook.com/jadhavkunbisamaj" target="_blank"><img src="images/face.jpg"></img></a>
<!--<div lang="copy">&copy; Copyright 2014</div> --> 
<div class="design"><a href="http://sednainfosystems.com">&copy; Copyright 2014 | Powered by <b style="color:#EFFC7D">SEDNA</b></a></div>
<div class="clear"></div>
</div><!-- Footer ends here -->
</div><!-- Main ends here -->
<?php 
mysql_close($dsn);
?>
</body>
</html>
