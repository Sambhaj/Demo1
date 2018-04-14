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

<script type="text/livescript">
function confm()
{
var result=confirm("Are you sure want to delete current record");
if(result==true)
{
return true;
}
else
{
return false;
}

}

</script>

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
if(isset($_SESSION['auname']))
{
$nm=$_SESSION['auname'];
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
<form action="adm_deleteuser.php" method="post">

<ul>
	<li class="first"><a href="adminhome.php" title="">Home</a></li>
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
<!--
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
	<form action="gotra.php" method="post">
	&nbsp;&nbsp;Surname: <input class="txtbx" type="text" name="txtsurname" /><br />
	<div style="margin-left:58px"><input type="submit" class="signin" name="Search" value="Search" /></div></form>
	<br /><br />
	</div>
	</div>
	<div class="space"></div>
	
</div>-->

<div >
    
<br /><br /><br />
<br />

  


<center>
<!--<form action="adminhome.php" method="post">
<input type="button" value="Home" onclick="location.href='userhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />-->
<form action="adm_deleteuser.php" method="post">

    <table><tr><td>Select User Id &nbsp;&nbsp;&nbsp;</td><td>
<?php
$unmm=$_POST['userid'];
$qr="SELECT  member_id as id from tbregistration order by member_id asc";
$rs=mysql_Query($qr,$dsn);
echo "<select name='userid'><option>Select</option>";
	while($dt = mysql_fetch_array($rs)) {
	echo "<option  value='$dt[id]'>$dt[id]</option>";
	}
if($unmm <> "" )
{
echo "<option  value='$unmm'  selected='selected'>$unmm</option>";
}
	echo "</select>" ?>
</td><td>&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" name="Search" />
</td><td>&nbsp;&nbsp;&nbsp;</td><td><input type="submit" value="Delete" name="Delete" onclick=" return confm()" /> </td></tr></table><br />

</form>

<?php 

if(isset($_POST['Search']))  
{
$uid=$_POST['userid'];
$sql  = "select first_name as unm, father_name, surname, current_status, address, mobile_no, landline_no, taluka, district, country, age, gender, height, birth_date, native, complex, mname, uncle_name, religion, caste, sub_caste, gotra, qualification, degree, current_job_profile, company, work_experience, service_type, service_location, annual_income, other_remark, expectation, expection_job, image_1, email from  tbregistration where member_id= '$uid' ;";
$rs = mysql_query($sql);

$rs1 = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['unm'];

  
if($mnm <> "")
{
	echo "&nbsp;&nbsp;<table width='685' border='1'  cellspacing='0' id='tb1'>
		<tr class='head'>
		<th></th>				
		<th width='100'>Name Status</th>
		<th>Address</th>
		<th>Personal Detail</th>
		<th>Qualification No</th>
		<th width='100'>Job Detail</th>
		<th>Expection</th>					
		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($rs))
  {
  
  list($first_name, $father_name, $surname, $current_status, $address, $mobile_no, $landline_no, $taluka, $district, $country, $age, $gender, $height, $birth_date, $native, $complex, $mname, $uncle_name, $religion, $caste, $sub_caste, $gotra, $qualification, $degree, $current_job_profile, $company, $work_experience, $service_type, $service_location, $annual_income, $other_remark, $expectation, $expection_job, $image_1, $image_2, $image_3, $image_4, $image_5, $email, $send_sms, $promotional_offer, $activate, $verified)=$row;

  $name= $first_name . " " . $father_name . " " . $surname;
  $adres=$address . "<br/> " . $taluka . "<br/> " . $district . "<br/> " . $country . ",<br/> Contact :" . $mobile_no;
  $personal= "Height : " . $height . " <br/>Birth Date : " . $birth_date . "<br/>Gotra : " . $gotra;
  $quali=$qualification . " " . $degree; 
  $job= "Position" . $current_job_profile . "Service Type :" . $service_type .",<br/>Company :" . $company . ",<br/>Location :" . $service_location;
  $expect=$expectation . " " . $expection_job;
   echo "<tr>";
    
								  if($image_1 == "")
								  {
								  $image_1="default.jpg";
								  }
  echo "<td><img src='upload/$image_1' alt='img' width='80px' height='75px'/></td>";
  echo "<td style='padding:5px;vertical-align:top;'> " . $name  . "</td>";  
  echo "<td style='padding:5px;vertical-align:top;'>" . $adres . "</td>";  
  echo "<td style='padding:5px;vertical-align:top;'>" . $personal . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $quali . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $job . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $expect . "</td>"; 
									   							   
  echo "</tr>";
  }
echo "</table>";
}
else
{
echo "No Profile match";
}
}
?>



<?php 
if(isset($_POST['Delete']))  
{
$uid=$_POST['userid'];

$qry="Delete  from tbregistration where member_id=$uid";
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Profile Deleted Successfully')</script>"; 

	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';                           
  } 
}

?>



</center>

	<div class="space1"></div>
</div>
<!--
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
    
    </div>-->
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
