<?php
//********* Code for Mail ********
$msg="";

if (isset($_POST['send']))
 { 
// declare all variable
	$name = $_POST['name'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$mobno = $_POST['mobno'];
	$email = $_POST['email'];
	$othername = $_POST['othername'];
	$amount = $_POST['amount'];
   
   if (!empty($_POST["name"])&&!empty($_POST["city"])&&!empty($_POST["address"])&&!empty($_POST["email"])&&!empty($_POST["amount"]))
   {
		$formcontent=" From: $name \n City: $city \n Address: $address \n Mobile No: $mobno \n  Email: $email \n  Support from: $othername \n  Amount: $amount";
		$recipient = "tatte07@gmail.com";
		$subject = "Education Fund Details";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		print '<script>alert("Education Fund Details Send Successfully!");</script>' ;
		Print '<script>window.location.assign("education_fund.php");</script>'; 
	}
  else
  {
	 $msg="Please fill in all mandatory fields!";
	 
  }
 }
?>

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
    
	<h2>Education Fund [ शैक्षणिक कोष]</h2>
	<div style="text-align:justify;">
<form method="POST" action="">
<table border="1" bgcolor="#FFDBBE" style="padding:5px;" >
	<tr>
		<td colspan="2" style="padding:5px;font-weight: bold;">आपले सहर्ष स्वागत आहे...</td>
	</tr>
	<tr>
		<td colspan="2" style="padding:5px;font-weight: bold;color:red;">Fields with * are mandatory</td>
	</tr>
	<tr>
		<td width="42%" style="padding:5px;">Name / नाव *</td>
		<td> <input type="text" class="txtbx" style="width:95%;" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px;">City / गाव *</td>
		<td> <input type="text" style="width:75%;" class="txtbx" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px;">Address / पत्ता *</td>
		<td> <textarea class="txtbx" name="address" style="width:75%;height:60px;"><?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?></textarea></td>
	</tr>
	<tr>
		<td style="padding:5px;">Mobile No. / मोबा.न. </td>
		<td> <input type="text" maxlength="10" onblur="mobval();" id="mobno" style="width:75%;" class="txtbx" name="mobno" value="<?php echo isset($_POST['mobno']) ? $_POST['mobno'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px;">Email id / ई-मेल *</td>
		<td> <input type="text" style="width:75%;" onblur="emailvalidate();" id="email" class="txtbx" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px;">If any other name / मदत कोण्याच्या नावाने करायची असल्यास </td>
		<td> <input type="text" style="width:95%;" class="txtbx" name="othername" value="<?php echo isset($_POST['othername']) ? $_POST['othername'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px;">The amount of aid / मदत रक्कम *</td>
		<td> <input type="text" style="width:75%;" class="txtbx" name="amount" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>"></td>
	</tr>
	<tr>
		<td style="padding:5px; padding-left:0px;"></td>
		<td><input type="submit" class="signin" name="send" value="SEND / पाठवा" /><input type="button" class="signin" name="cancel" value="CANCEL / रद्द" onclick="parent.location='index.php'"/></td>
	</tr>
	<tr>
		<td colspan="2" style="padding:5px; padding-left:0px;text-align:center;"><span style="color:red;"><?php echo $msg;?></span></td>
	</tr>
</table>
</form>
<br><br>
<center>
<table border="1" bgcolor="#FFDBBE" >
	<tr>
		<td style="width:50%; padding:3px;font-weight: bold;">ऑन – लाईन</td>
		<td style="width:50%; padding:3px;font-weight: bold;">ऑफ – लाईन</td>
	</tr>
	<tr>
		<td style="padding:5px;">बँक ऑफ महाराष्ट्र, कठोरा, अमरावती.<br> 
		खाते क्र. 	: २००९४८९८९९१ / 20094898991<br>
		आय.एफ.एस सी. : MAHB0001621
</td>
		<td style="padding:5px;">काँल करा. <br>
		९४२२८५८४९२ / ७७४५०५८४९२<br>
		9422858492 / 7745058492
</td>
	</tr>
</table></center>
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
