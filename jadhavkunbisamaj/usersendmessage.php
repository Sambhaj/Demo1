<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php
require_once('db.php');
//include('db.php');
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
<form action="userhome.php" method="post">
<ul>
	<li class="first"><a href="userhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
	<li><input type="submit" style="background:transparent; border:none; font-size:14px; font-weight:bold; color:#FFFFFF;" name="logout"  value="Log Out" /> &nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?></li>	
</ul></form>
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

    



<?php
function getid($dsn)                                                 //function to get max id from database
{
$qr="Select Max(message_id) as id from tbusermessage";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$id= $row['id'];
if($id != "")
{
$idd=$id + 1;
}
else
{
$idd=1;
}
return $idd;
} 

if(isset($_POST['Submit']))                        //check post back event
{

	$message_id=getid($dsn);	
	$username=$_SESSION['uuname'];
	$message=$_POST["message"];
	$message_date=date("Y/m/d");
		
	if(empty($message))
	{
	$msg ="Please Enter Message";
	
	}
	else
	{
	$qry="insert into tbusermessage values('$message_id','$username','$message','$message_date')";	
		
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Message Stored Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=userhome.php">';                          
  	  }   
	 }
}
?>
<center>
<!--<form action="usersendmessage.php" method="post">
<input type="button" value="Home" onclick="location.href='userhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />-->
<form action="usersendmessage.php" method="post">

<h2>Send message</h2>
<br />


<table>
<tr><td>Message</td><td><textarea name="message" ></textarea></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit" /></td></tr>
<tr><td></td><td><?php echo "$msg"; ?> </td></tr>
</table>

</form></center>

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
</div><!-- Main ends here -->
<?php 
mysql_close($dsn);
?>
</body>
</html>