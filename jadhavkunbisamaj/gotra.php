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

require_once('db.php');
<div id="leftpart">
	<?php 
	require_once('db.php');
	include 'leftpart.php'; ?>
	
</div>

<div id="middlepart">
    
	<h2>User Profile</h2>
   	<?php 
	
	
if(isset($_POST['Search']))                           //check post back event
{
$surname=$_POST["txtsurname"];	

if($surname <> "")
{
$sql  = "SELECT `MAIN KUL` as mnm, `SUB-KUL OR SURNAME`, `VANSH`, `GOTRA`, `KULDAIVAT`, `KULDAIVATA` FROM `tbgotra` where `SUB-KUL OR SURNAME` like '$surname'";
$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['mnm'];

if($mnm <> "")
{
echo "<b>Search result for '$surname'</b></br></br>";
		echo "<table width='650' border='1' style='text-align:center; '  height='50px' cellspacing='0' id='tb1'>
		<tr class='head'>
		<th>Sr. No </th>
		<th>Main Kul</th>
		<th>Sub Kul Or Surname</th>		
		<th>Vansh</th>
		<th>Gotra</th>
		<th>Kuldaivat</th>
		<th>Kuldaivata</th>
		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$no=1;
while($row = mysql_fetch_array($rs))
  {
  
  list($mainkul, $subkul_surname, $vansh,$gotra, $kuldaivat,$kuldaivata)=$row;
  
   echo "<tr>";
   echo "<td>" . $no . "</td>"; 
  echo "<td>" . $mainkul . "</td>";
  echo "<td>" . $subkul_surname . "</td>";
  echo "<td>" . $vansh . "</td>"; 							   
    echo "<td>" . $gotra . "</td>";
   echo "<td>" . $kuldaivat . "</td>";
   echo "<td>" . $kuldaivata . "</td>"; 							   
						     
  echo "</tr>";
  $no ++;
  }
echo "</table>";
}
else
{
echo "Search not found";
}
}
else
{
echo "Please Enter Surname To Search";
}
}
?>
<br />
<br />



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
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
