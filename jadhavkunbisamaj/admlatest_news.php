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
<div id="navigation"><?php
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

if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}

?>

<form action="admlatest_news.php" method="post">
<ul>
	<li class="first"><a href="adminhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
	<li><input type="submit" style="background:transparent; border:none; font-size:14px; font-weight:bold; color:#FFFFFF;" name="logout"  value="Log Out" /> &nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?></li>	
</ul></form></div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>



<div align="center"><br />
<br />

    
	<h2>Upload News</h2>
    <?php
require_once('db.php');
?>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
          <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#pd").datepicker();
        });  </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Latest News</title>
</head>

<body>
</body>

<?php

$idd=getid($dsn);

function getid($dsn)                                                 //function to get max id from database
{
$qr="Select Max(news_id) as id from tblatest_news";
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
$memberid=$_POST["newsid"];
//updimgs("img");                          //here called function to upload imgae to server folder
	if (is_uploaded_file($HTTP_POST_FILES['img']['tmp_name']))  {   
 $info = pathinfo($_FILES['img']['name']);
 $ext = $info['extension']; // get the extension of the file
 $newname = "news" . $memberid . "." .$ext; 
 $target_img1 = 'news/'.$newname;
    if (move_uploaded_file($HTTP_POST_FILES['img']['tmp_name'],  $target_img1)) {
  //    echo "<script> alert('File uploaded')   // Echo "File uploaded";
    } else {
 // echo "<script> alert('File not moved to destination folder. Check permissions')       //  Echo "File not moved to destination folder. Check permissions";
    };
} else {$newname ="";

   // echo "<script> alert('File is not uploaded.')  Echo "File is not uploaded.";
}
	
	$newsid=$_POST["newsid"];
	$headline=$_POST["headline"];
	$news=$_POST["news"];
	$image=$_POST["img"];	
	$pdate=$_POST["pdate"];
	$submitby=$_POST["submittedby"];
	if(empty($newsid) || empty($headline) || empty($news)  || empty($pdate) || empty($submitby))
	{
	$msg ="Enter all fields";
	}
	else
	{
	mysql_set_charset('utf8');
	$qry="insert into tblatest_news values('$newsid','$headline','$news','$newname','$pdate','$submitby')";	
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Stored Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';           
                 
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
echo  '<META http-equiv="refresh" content="0;URL=admlatest_news.php">';           
}
else
{
move_uploaded_file($image_tmp_name,"news/$image_name");
echo "Uploaded sucessfully";
}
}

?>

<!--<form action="adminhome.php" method="post">
<input type="button" value="Home" onclick="location.href='adminhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />
-->
<form action="admlatest_news.php" method="post" enctype="multipart/form-data">
<table>
</tr>
<tr><td>News Id</td><td><input type="text" name="newsid" value="<?php echo $idd;?>" /></td></tr>
<tr><td>Headline</td><td><input type="text" name="headline" /></td></tr>
<tr><td>News</td><td><input type="text" name="news" /></td></tr>
<tr><td>Image</td><td><input type="file" name="img" /></td></tr>
<tr><td>Create Date</td><td> <input type="text" name="pdate"  id="pd" value="" size=16/></td></tr>
<tr><td>Submitted By</td><td><input type="text" name="submittedby" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit"/></td></tr>
</table><?php
echo $msg;
?>
</form>

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
