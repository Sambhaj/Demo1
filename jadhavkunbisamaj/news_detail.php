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
<script type="text/javascript">
  function ChangeToPassField() {
    document.getElementById('PasswordField').type="password";
  }
  </script>
</head>

<body>
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3></h3></td>
	<td align="right" valign="top">
	<div class="log">
	
	<form  name="frm1" action="index.php" method="post">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td>Matrimony</td>
	<td><input type="button" class="signup" name="login" value="Signup" onClick="parent.location='registration.php'" /></td><td>or &nbsp;</td>
	<td><input class="txtbx" type="text" name="unm" value="username" OnClick="this.value=''" onblur="if(this.value==''){this.value='username'}"/>&nbsp;</td>
	<td><input class="txtbx" type="password" name="psw" id="PasswordField" onfocus="ChangeToPassField()" value="password" OnClick="this.value=''" /><br />
</td>
	<td><input type="submit" class="signin" name="login" value="Signin" /></td></tr>

	<tr><td align="center" colspan="5"><br /><h4>Find your better half...</h4></td></tr>
	</table>
	</div>
	</td></tr>
	</table>
	</form>
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

<div id="leftpart">
<?php require_once('db.php'); include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
   <?php
   $chkvalue = $_GET['nid']; 
   $info=$_GET['info'];

 
if($info == 'a')
{
$sql  = "SELECT headline as id,news,image FROM `tblatest_news` where news_id=$chkvalue";
}
else if($info == 'b')
{
$sql  = "SELECT headline as id,news,image FROM `tbbirth_death` where news_id=$chkvalue";
}
else if($info == 'c')
{
$sql  = "SELECT headline as id,news,image FROM `tbtoppers` where news_id=$chkvalue";
}
 
$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['id'];

if($mnm <> "")
{
echo "<center><h4>News Detail</h4></center><br /><br />";
$row = mysql_fetch_array($rs);
 list($headline, $detailnews, $image)=$row;
echo "<table width='485' border='1'  cellspacing='0' id='tb1'>
<tr><td style='padding:10px;vertical-align:top;'><b>$headline</b><br /><br /></td></tr>
<tr><td style='padding:10px;vertical-align:top;text-align:center;'><img src='news/$image' alt='' /></td></tr>
<tr><td style='padding:10px;vertical-align:top;text-align:justify;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$detailnews</td></tr>
</table> ";
}
else
{
echo "No news found";
}
?>

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
</body>
</html>
