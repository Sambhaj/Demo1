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
    
	<h2>Toppers</h2>
    <?php
require_once('db.php');
?>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Toppers</title>
</head>

<body>
</body>
<?php

if(isset($_SESSION['uname']))
{
$nm=$_SESSION['uname'];
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

<?php

$idd=getid($dsn);

function getid($dsn)                                                 //function to get max id from database
{
$qr="Select Max(news_id) as id from tbtoppers";
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




if(isset($_POST['Submit']))                           //check post back event
{
//updimgs("img");                          //here called function to upload imgae to server folder

	
	
	$newsid=$_POST["newsid"];	
	$headline=$_POST["headline"];
	$news=$_POST["news"];
	$image=$_POST["img"];	
	$pdate=$_POST["pdate"];
	$submitby=$_POST["submittedby"];
	
	if(empty($newsid) || empty($headline) || empty($news) || empty($pdate) || empty($submitby))
	{
	$msg ="Enter all fields";
	}
	else
	{
	
	$qry="insert into tbtoppers values('$newsid','$headline','$news','$image','$pdate','$submitby')";	
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Stored Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=index.php">';           
                 
//	$idd=getid($dsn);                                             //called max id function to get updated max id
  	  }   	  
	}	
}
function updimgs($imgnm)                                // function to upload image
{
 echo $image_name=$_FILES['$imgnm']['name'];
echo $image_type=$_FILES['$imgnm']['type'];
echo $image_type=$$_FILES['$imgnm']['size'];
echo $image_temp_name=$_FILES['$imgnm']['tmp_name'];
if($image_name == "" )
{
echo "<script> alert('Select Image $imgnm')  </script>";
//exit();											//    it stops the execution
echo  '<META http-equiv="refresh" content="0;URL=frmtoppers.php">';           
}
else
{
move_uploaded_file($image_tmp_name,"upload/$image_name");
echo "Uploaded sucessfully";
}
}

?>

<form action="index.php" method="post">
<input type="button" value="Home" onclick="location.href='profile.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
</tr>
<tr><td>News Id</td><td><input type="text" name="newsid" value="<?php echo $idd;?>" /></td></tr>
<tr><td>Headline</td><td><input type="text" name="headline"  value="<?php echo $headline;?>" /></td></tr>
<tr><td>News</td><td><input type="text" name="news"  value="<?php echo $news;?>" /></td></tr>
<tr><td>Image</td><td><input type="file" name="img"  value="<?php echo $image;?>" /></td></tr>
<tr><td>Create Date</td><td> <input type="text" name="pdate" class="tcal"  value="<?php echo $pdate;?>"  size=10/></td></tr>
<tr><td>Submitted By</td><td><input type="text" name="submittedby"  value="<?php echo $submitby;?>" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit"/></td></tr>
</table>
<?php
echo $msg;
?>
</form>

	<div class="space1"></div>
</div>

<div id="rightpart">
	<div class="container">
	<h1>Contributors</h1>
    <div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	<img src="images/r2.jpg" /><br /><br /><img src="images/r1.jpg" /><br /><br /><img src="images/r2.jpg" />
	</marquee>
	</div>
	</div>

    <div class="space"></div>
	<div class="container">
    <h1>Abhinandan</h1>
    <div class="invite">
	<marquee height="110px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="left" behavior="alternate" scrollamount="2">
	<img src="images/r1.jpg" />&nbsp;<img src="images/r2.jpg" />
	</marquee>
	</div>
    </div>
    <div class="space"></div>
	<div class="container">
    <h1>Din Vishesh</h1>
    <div class="invite">
	<marquee height="100px" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" direction="up" scrollamount="2">
	Din Vishesh and it's related information ...
	</marquee>
	</div>
    </div>
    <div class="space"></div>
    
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
