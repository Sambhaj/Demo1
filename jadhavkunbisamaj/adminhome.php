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
<div id="navigation">  <?php
session_start();
if(isset($_SESSION['auname']))
{
$nm=$_SESSION['auname'];
//echo "$nm";

}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';

}
?>
<form action="adminhome.php" method="post">
<ul>
	<li class="first"><a href="index.php" title="">Home</a></li>
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



<div  align="center"><br />
<br />

    
	<h2>Admin Home</h2>
  


<?php
if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}
?>



<center>
<!--<form action="adminhome.php" method="post">
<input type="button" value="Home" onclick="location.href='adminhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />
-->

<table width="650px" cellspacing="7" cellpadding="7">
<tr>
<td><img src="icons/add_user.png" alt="Add user" height="40" width="40"/></td>
<td><a href="admregistration.php"><font size="3">New Registration</font></a></td>
<td>
  <img src="icons/news_up.png" alt="upload news" height="40" width="40"/>
</td>
<td><a href="admlatest_news.php">
  <font size="3">Upload News</font></a></td>
  
  <td>
  <img src="icons/del_news.jpg" alt="delete news" height="40" width="40"/>
</td>
<td><a href="deleteadmnews.php"><font size="3">Delete News</font></a></td></tr>

<tr>

<td><img src="icons/edit_profile.png" alt="edit profile" height="40" width="40"/></td>
<td><a href="admeditprofile.php">
  <font size="3">Edit Profile</font></a></td>
<td>
  <img src="icons/bdicon.jpg" alt="birthday" height="40" width="40"/>
</td>
<td><a href="admbirth_day.php"><font size="3">Abhinandan(Birth Day)</font></a></td>


<td>
  <img src="icons/delete_user.png" alt="delete profile" height="40" width="40"/>
</td>
<td><a href="adm_deleteuser.php"><font size="3">Delete Profile</font></a></td>

</tr>

<tr>
<!--<td>
  <img src="icons/po.jpg" alt="product offer" height="40" width="40"/>
</td>
<td>
<a href="admproductoffer.php">
  <font size="3"> Product Offer</font></a>  
  </td>-->


<td>
  <img src="icons/user-icon.png" alt="edit profile" height="40" width="40"/>
</td>
<td><a href="admuserdetail.php"><font size="3">User Detail</font></a></td>

<td>
  <img src="icons/topper.jpg" alt="Add user" height="40" width="40"/>
</td>
<td><a href="admtoppers.php"><font size="3">Abhinandan(Toppers)</font></a></td>

<td>
  <img src="icons/del_top.jpg" alt="Add user" height="40" width="40"/>
</td>
<td><a href="deleteadmtoppers.php"><font size="3">Delete Toppers</font></a></td>
</tr>



<tr>
<td>
  <img src="icons/cp.jpg" alt="change password" height="40" width="40"/>
</td>
<td><a href="admchangepssword.php"><font size="3">Change Password</font></a></td>

<td>
  <img src="icons/up_svr.jpg" alt="upload suvichar" height="40" width="40"/>
</td>
<td><a href="suvichar.php"><font size="3">Upload Dinvishesh </font></a></td><td>
  <img src="icons/del_bd.jpg" alt="delete birthday" height="40" width="40"/>
</td>
<td><a href="deleteadmbirthday.php"><font size="3">Delete Birth Day</font></a></td>
</tr>

<tr>

<td>
  <img src="icons/um.jpg" alt="delete profile" height="40" width="40"/>
</td>
<td><a href="admmessagedisplay.php"><font size="3">User Messages</font></a></td>

<td>
  <img src="icons/sansmaran.jpg" alt="Add user" height="40" width="40"/>
</td>
<td><a href="admsansmaran.php"><font size="3">Add Sansmaran</font></a></td>





<td>
  <img src="icons/delete.jpg" alt="Add user" height="40" width="40"/>
</td>
<td><a href="deletesansmaran.php"><font size="3">Delete Sansmaran</font></a></td>
</tr><tr>

<td>
  <img src="icons/mail_forward.png" alt="delete profile" height="40" width="40"/>
</td>
<td><a href="admsendmessage.php"><font size="3">Send Message</font></a></td>

<td>
  <img src="icons/upld.png" alt="delete profile" height="40" width="40"/>
</td>
<td><a href="adm_m_todga.php"><font size="3">Upload Mahinacha Todga</font></a></td>

<td>
  <img src="icons/user-icon.png" alt="edit profile" height="40" width="40"/>
</td>
<td><a href="admemployerdetail.php"><font size="3">Employer Detail</font></a></td>
</tr>
<tr>
<td>
  <img src="icons/editdel.png" alt="edit profile" height="40" width="40"/>
</td>
<td><a href="displaya_acharya.php"><font size="3">Edit & Delete Acharya</font></a></td>
<td>
  <img src="icons/editdel.png" alt="edit profile" height="40" width="40"/>
</td>
<td><a href="edit_employee.php"><font size="3">Edit Employee Details</font></a></td>
</tr>
</table>
</center>

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
</div><!-- Main ends here -->
</body>
</html>
