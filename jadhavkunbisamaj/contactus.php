<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function mobval()
{
     var txt1=document.getElementById('mobno');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}


function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email').value="";
  	} 
}

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
	<script type="text/javascript" src="supersleight-min.js"></script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>
<?php require_once('db.php'); ?>
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
    
	<h2>Contact Us [आमच्याशी संपर्क]</h2><br />

       <?php
if(isset($_POST['Submit']))  
{ 

$email="tatte07@gmail.com";
$name=$_POST["username"];
$message=$_POST["message"];
$mobno=$_POST["mobno"];
//echo "<script> alert('Select Image $mobno..$message..$name..$email')  
if($email != "" && $message != "" && $name != "")
{
$subject = "$name...$mobno";
$from = "info@jadhavkunbisamaj.com";
$headers = "From:" . $from;
$result=mail("tatte07@gmail.com",$subject,$message,$headers);

   if($result)
   {
   	$email="";
	$name="";
	$message="";
	$mobno="";
    $mesage= "Message has been sent successfully.";
	
   }
   else
   {
    $mesage= "Sorry..! email not send Try again...";
   }
}
else
{
$mesage= "Please enter Name, Message and email id";
}

}
else
{
$chkvalue = $_GET['type']; 

}
?>



<form  action="contactus.php" method="post">
<center>
<table style="vertical-align:top;"><tr><td >
<img src="1.jpg" alt="photo"/></td>
<td  style="padding:10px;">
<b>Prof. Milind K. Tatte</b><br />
1094 “Shri Swami Sammarth”<br />
“Anand Sagar” Shri Gajanan Township No 05	<br />
Pote Estate,Kathora Road <br />
Amravati -444606	<br />
<b>For Communication </b><br />
94228-58492, 77410-58492, 77450-58492.<br />
<b>Email id </b><br />
tatte07@gmail.com
</td></tr></table>
<br />
<h3>Feedback</h3>
<table bgcolor="#FFDBBE" cellpadding="10" cellspacing="10">
<tr><td colspan="2" style="color:red;">Fields with * are mandatory.</td></tr>
<tr><td>Name*</td><td><input type="text" name="username"   value="<?php echo $name;?>" /></td></tr>
<tr><td>Mobile No</td><td><input type="text" name="mobno"  id="mobno" maxlength="10" onblur="mobval();" value="<?php echo $mobno;?>" /></td></tr>
<tr><td>Email id*</td><td><input type="text" name="email" id="email" onblur="emailvalidate();" value="<?php echo $email;?>" /></td></tr>
<tr><td>Message*</td><td><textarea name="message" cols="39" rows="6"><?php echo $message;?></textarea></td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit" /></td></tr>
<tr><td></td><td><?php echo "$mesage"; ?></td></tr>
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
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
