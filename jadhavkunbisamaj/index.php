<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once('db.php');?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
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
		$qr="Select username as usrnm,member_id as id,activate as status from tbregistration where username='$unm' and password='$psw'";
		$rs=mysql_Query($qr,$dsn) or die(mysql_error());
		$row = mysql_fetch_array($rs);
		echo"$row";
		$uname= $row['usrnm'];
		$id=$row['id'];
		$status=$row['status'];
		if($uname <> "")
		{ 				
			session_start();
			// store session data
			$_SESSION['uuname']=$uname;
			$_SESSION['type']="user";
			$_SESSION['id']=$id;
			$_SESSION['status']=$status;
			//echo "Pageviews=". $_SESSION['uuname'];
			if($status == 1)
			{		
				echo  '<META http-equiv="refresh" content="0;URL=userhome.php">';
			}
			else
			{
				echo "<script> alert('Please pay Rs 500 to account of Milind Keshavrao Tatte Bank of Maharashtra Branch kathora(BK)Account No 20094898991 IFSC MABH0001621!')</script>"; 
				echo  '<META http-equiv="refresh" content="0;URL=index.php">';
			}
		}
		else
		{
		echo "<script> alert('Please check the user name or password!')</script>"; 
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
	<li class="first"><a href="index.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
    <li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="register.php" title="">JKS Aacharya Manch</a></li>
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
    <div style="width:480px;">
    <marquee height="153px" onmouseover="this.stop();" onmouseout="this.start();"direction="left" behavior="scroll" scrollamount="12">
	<img src="images/img25.png" width="230" height="153" border="0" />&nbsp;
	<img src="images/img18.jpg" width="230" height="153" border="0" />&nbsp;
    <img src="images/img19.jpg" width="230" height="153" border="0" />&nbsp;
    <img src="images/img01.jpg" width="230" height="153" border="0" />&nbsp;
    <img src="images/img02.png" width="230" height="153" border="0" />&nbsp;
    <img src="images/img03.jpg" width="230" height="153" border="0" />&nbsp;
    <img src="images/img05.jpg" width="230" height="153" border="0" />&nbsp;
    
    </marquee>
    </div>
	<!--<h2>Welcome to our Website</h2>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This web site is our first effort to adjoin the samaj Bandhav of jadhav Kunbi Community. I want to cover the complete details of our Samaj ,their Locality and there was created communication between the bandhav by means of the information and technology by this site.....</p> -->
    <h4>Latest News</h4>
    <div style="width:460px; height:100px; border:1px solid #C3A292; overflow:hidden; padding:10px 10px 10px 10px;">
    <marquee height="90px" onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">
<?php

mysql_set_charset('utf8');
$qr="SELECT headline as id,news_id as n_id FROM `tblatest_news` order by `news_id` desc limit 5 ";
$rs=mysql_Query($qr,$dsn);
	while($dt = mysql_fetch_array($rs)) {
  	$news=$dt[id];
	$news_id=$dt[n_id];
	echo "<a href='news_detail.php?nid=$news_id&info=a'>$news</a><br /><br />";

	
	}	
   // Latest news and it's related information will be display here....<br /><br /><br />
   // Latest news and it's related information will be display here....
	 ?>
    </marquee>
    </div>
	<input type="button" class="signin" name="" value="अधिक माहिती..." onClick="parent.location='aboutus.php'"  />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" class="signin" name="" value="आमचे प्रतिनिधी" onClick="parent.location='our_representative.php'"  />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" class="signin" name="" value="समाज कार्यकारिणी" onClick="parent.location='society_executive.php'"  /><br/><br/>
    <div id="sliderFrame">
        <div id="slider">            
                <img src="images/img1.PNG" ALT="" />            
                <img src="images/img2.PNG" alt="" />
                <img src="images/img3.PNG" alt="" />  
                 <img src="images/img4.PNG" alt="" />  
				 <img src="images/img1.PNG" ALT="" />  
				  <img src="images/img07.png" alt="" />  
				  <img src="images/img1.PNG" ALT="" />  
				 
                         
        </div>    	
        </div>
    <br />
	<input type="button" class="signup" name="" value="समाज साहित्यिक" onClick="parent.location='book.php'"  /> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://jksyuva.blogspot.in/" target="_blank"><input type="button" class="signup" name="" value="समाज युवा जगत" onClick="" /></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://jkskrushi.blogspot.in/" target="_blank"><input type="button" class="signup" name="" value="समाज कृषि जगत" onClick="" /></a><br /><br />
	<div class="space1"></div>
</div>
<div id="rightpart">
  <?php include 'rightpart.php'; ?>    
    </div>	
<div class="clear"></div>
<marquee style="color:#006600; font-size:14px; font-weight:bold" height="55px" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="alternate" scrollamount="2">
<img src="icons/tree.png">	आपण हिरव्यागार वातावरणात राहू इछीता की...
रखरखीत वाळवंटात?
मर्जी आपली कारण...
जीवन आहे आपले...
झाडे लावा - झाडे जगवा!!<img src="icons/tree.png">
	</marquee>
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
