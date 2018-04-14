<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require_once('db.php');?>

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
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3>Find your better half...</h3></td>
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

<div id="leftpart">
<?php include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
<h2>Dr. Shyamsundar Nikam</h2><div style="text-align:justify;">
  <img src="books/alekh.jpg" width="480" align="" /><br />
    <h2>Sudhakar K Tatte</h2>
  <img src="books/Picture_088.jpg" width="480" align="" /><br />
  <img src="books/Picture_089.jpg" width="480" align="" /><br />
  <img src="books/Picture_090.jpg" width="480" align="" /><br />
  <img src="books/Picture_091.jpg" width="480" align="" /><br />  
    <h2>Vijay V Sose</h2>
 <!--<h4>Welcome at Jadhavkunbisamaj Website</h4><br /> --> 
<img src="books/Picture 740(1).jpg" width="480" align="" /><br />
<img src="books/Picture 740.jpg" width="480" align="" /><br />
<img src="books/Picture 741(1).jpg" width="480" align="" /><br />
<img src="books/Picture 746.jpg" width="480" align="" /><br />
<img src="books/Picture 746(1).jpg" width="480" align="" /><br />
<img src="books/Picture 747.jpg" width="480" align="" /><br /><br>
<img src="books/Picture 748.jpg" width="480" align="" /><br />

</div>
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
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
