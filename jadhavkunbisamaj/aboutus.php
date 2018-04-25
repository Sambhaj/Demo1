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
    
	<h2>About Us [आमच्याबद्दल]</h2><div style="text-align:justify;">
 <h4>Welcome at Jadhavkunbisamaj Website</h4><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="/images/yuva_logo.png" align="center" width="200" height"150"/> <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This website is our first effort to adjoin the samaj Bandhav of <b>Jadhav Kunbi Community.</b> I want to cover the complete details of our Samaj ,their Locality and there was created communication between the bandhav by means of the information and technology by this site<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this modern era, the great changes are taking place on the global scenario. The development of information technology segment is playing a big role in bringing the different persons of the world much closure to each other for their exchange of views for various things. Whole of the life style, social customs, business relations, education systems are changing in a new way of living. Almost all the persons of the different societies are adopting the new changes for keeping their live hood in accordance. This development factor inspired me to contribute my experience of computer engineering and information technology  to 
<b>"jadhav kunbi Samaj"</b> so I decided to develop a website named <b>"www.jadhavkunbisamaj.com"</b> for the samaj in order to bring the each person of the jadhavkunbi Samaj wherever they may be living in any part of world to come close to each other for exchanging the new thoughts for the welfare and the development of the jadhavkunbi Samaj. To convey the fast informations to the<b>"jadhavkunbi Samaj"</b> I have made the web site most convenient, so any person knows little internet knowledge can see the matter subject of their choice in any part of the world. Further my motto is to given a platform to expose the good thinking about the samaj  or given a guidance to the samaj bandhav. I would like to exposure information about the marital candidate status of the samaj. This website <b>"www.jadhavkunbisamaj.com"</b> will certainly prove most truthful for the development of social links among all the member of the jadhavkunbi Samaj. From my side, I request to all the members of the jadhavkunbi Samaj to kindly make the awareness of the site among all they are willing to aid any new subject or matter which is they feel very necessary and in the benefit of the " jadhavkunbi Samaj".
To keep the website update in this highly competitive developing age. It is humble request from my side kindly give me the feedback.


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
