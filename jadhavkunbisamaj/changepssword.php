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
<ul>
	<li class="first"><a href="profile.php" title="">Home</a></li>
	<li><a href="#" title="">About Us</a></li>
	<li><a href="#" title="">History</a></li>
	<li><a href="#" title="">Litreature</a></li>
	<li><a href="#" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="#" title="">Contact Us</a></li>
</ul>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div id="leftpart">
	<div class="container">
    <h1>Wedding Invitation</h1>
	<div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Wedding Invitation and it's related information.<br /><br /><br />
	Wedding Invitation and it's related information.
	</marquee>
	</div>
    </div>
	<div class="space"></div>
	<div class="container">
    <h1>Sansmaran</h1>
	<div class="invite">
	<marquee height="110px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Sansmaran and it's related information & content.
	</marquee>
	</div>
	</div>
	<div class="space"></div>
	<div class="container">
    <h1>Search for Gotra</h1>
	<div ><br />
	&nbsp;&nbsp;Surname: <input class="txtbx" type="text" /><br />
	<div style="margin-left:58px"><input type="submit" class="signin" name="login" value="Login" /></div>
	<br /><br />
	</div>
	</div>
	<div class="space"></div>
	
</div>

<div id="middlepart">
    
	<h2>User Profile</h2>
    <?php
	
if(isset($_SESSION['auname']))
{
$nm=$_SESSION['auname'];
//echo "$nm";
}
else if(isset($_SESSION['uuname']))
{
$nm=$_SESSION['uuname'];
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';

}

?>

<?php
if(isset($_POST['Submit']))     
{
$username=$_POST["username"];
$oldpsw=$_POST["oldpsw"];
$password=$_POST["password"];
$confpsw=$_POST["c_password"];
if($username != "" and $password != "")
{
if($confpsw == $password)
{
if(isset($_SESSION['type']))
{
$typ=$_SESSION['type'];
}
if($typ == "admin")
{
$qr="Select username as unm,password as psw from tbadmin where username='$username' and password='$oldpsw'";
}
else if($typ == "user")
{
$qr="Select username as unm,password as psw from tbregistration where username='$username' and password='$oldpsw'";
}


$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$unm= $row['unm'];
$psw= $row['psw'];
if($unm == $username and $psw == $oldpsw)
{

if($typ == "admin")
{
$qry="update tbadmin set password='$password' where username='$username' and password='$oldpsw'";
}
else if($typ == "user")
{
$qry="update tbregistration set password='$password' where username='$username' and password='$oldpsw'";
}
	
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Password changed Successfully')</script>"; 
	if($typ == "admin")
{
	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';
}
else if($typ == "user")
{
	echo  '<META http-equiv="refresh" content="0;URL=userhome.php">';
}
                           
      }  
}
else
{
$msg="Username not availabel";
//	echo "<script> alert('Username not availabel')
	//echo  '<META http-equiv="refresh" content="0;URL=changepssword.php">';                           
}
}
else
{
$msg="New Password and Cofirm Password should be same";
//echo "<script> alert('New Password and Cofirm Password should be same')
}
}
else
{
$msg="Please enter all fields";
//echo "<script> alert('Please enter all fields')

}

}

if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}
if(isset($_POST['home']))     
{

if(isset($_SESSION['type']))
{
$typ=$_SESSION['type'];
}

if($typ == "admin")
{
	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';
}
else if($typ == "user")
{
	echo  '<META http-equiv="refresh" content="0;URL=userhome.php">';
}
}
?>
<form action="changepssword.php" method="post">
<center>
<input type="submit" value="Home" name="home" />&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?><br />
<br />

<h2>Change Password</h2>
<br />
<table>
<tr><td>Username</td><td><input type="text" name="username"   value="<?php echo $username;?>" /></td></tr>
<tr><td>Old Password</td><td><input type="password" name="oldpsw" /></td></tr>
<tr><td>New Password</td><td><input type="password" name="password" /></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="c_password" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit" /></td></tr>
<tr><td></td><td><?php echo "$msg"; ?> </td></tr>
</table>


</center>
</form>


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
</body>
</html>
