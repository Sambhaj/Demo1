<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
 require_once('db.php');
?>
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
   <?php
session_start();
if(isset($_SESSION['uuname']))
{
$nm=$_SESSION['uuname'];
//echo "$nm";
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';

}

if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}

?>
<form action="usermessagedisplay.php" method="post">
<ul>
	<li class="first"><a href="userhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
<li><input type="submit" style="background:transparent; border:none; font-size:14px; font-weight:bold; color:#FFFFFF;" name="logout"  value="Log Out" /> &nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?></li>	
</ul>
</form>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div id="leftpart">
	<?php include 'leftpart.php'; ?>
</div>

<div id="middlepart">
    
	<br />
<br />

 


<center>
<!--<form action="usermessagedisplay.php" method="post">
<input type="button" value="Home" onclick="location.href='userhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form>-->
<h2>User Messages</h2>

<?php 
$username=$_SESSION["uuname"];	
$sql  = "SELECT `username` as unm, `message`, `message_date` FROM `tbmessage` where `username`= '$username'";
$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['unm'];

if($mnm <> "")
{
		echo "<table width='485' border='1'  cellspacing='0' id='tb1'>
		<tr class='head'>
		<th width='210px'> User Name</th>
		<th width='210px'>Message</th>		
		<th width='90px'>Date</th>
		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($rs))
  {
  
  list($username, $message, $message_date)=$row;

  $name= $first_name . " " . $father_name . " " . $surname;
   echo "<tr>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $username . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $message . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $message_date . "</td>"; 							   
  echo "</tr>";
  }
echo "</table>";
}
else
{
echo "No Message in inbox";
}

?>

</center>

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
