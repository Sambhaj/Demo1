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

  


<center>
<!--<form action="adminhome.php" method="post">
<input type="button" value="Home" onclick="location.href='userhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />-->
<form action="userprofilesearch.php" method="post">

<h2>Profile Search</h2>
<br /><center>
<table><tr><td>
Search using  &nbsp;&nbsp;<input type="radio" name="search" value="Age" />Age &nbsp;&nbsp;<input type="radio" name="search" value="Qualification" />Qualification &nbsp;&nbsp;<input type="radio" name="search" value="Service" />Service<br />
<br />
<input type="text" name="txtrvalue" value="" />
<input type="submit" name="Submit" value="Find Profile" />
</td><td>Search For Your Match Profile <br /><br />

<input type="submit" name="Submit" value="Match Profile" /></td></tr></table>
<br />
<br /></center>
<?php 

if(isset($_POST['Submit']))  
{

$btnvalue=$_POST['Submit'];


$unm=$_SESSION['uuname'];
$qr="Select gender as gendr from tbregistration where username='$unm'";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$gender= $row['gendr'];
$search=$_POST['search'];
$txtval=$_POST['txtrvalue'];
if($search == "Age")
{
$dbval="age";
}
else if($search == "Qualification")
{
$dbval="qualification";
}
else if($search == "Service")
{
$dbval="service_type";
}

if($btnvalue == "Match Profile")
{

$sql  = "select first_name as unm, father_name, surname, current_status, address, mobile_no, landline_no, taluka, district, country, age, gender, height, birth_date, native, complex, mname, uncle_name, religion, caste, sub_caste, gotra, qualification, degree, current_job_profile, company, work_experience, service_type, service_location, annual_income, other_remark, expectation, expection_job, image_1, image_2, image_3, image_4, image_5, email from  tbregistration where gender  NOT LIKE  '$gender';";
$rs = mysql_query($sql);

$rs1 = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['unm'];

	

}
else
{
if($txtval == "" || $dbval =="")
{
}
else if($btnvalue == "Find Profile")
{
$sql  = "select first_name as unm, father_name, surname, current_status, address, mobile_no, landline_no, taluka, district, country, age, gender, height, birth_date, native, complex, mname, uncle_name, religion, caste, sub_caste, gotra, qualification, degree, current_job_profile, company, work_experience, service_type, service_location, annual_income, other_remark, expectation, expection_job, image_1, image_2, image_3, image_4, image_5, email from  tbregistration where $dbval='$txtval' and gender  NOT LIKE '$gender';";
$rs = mysql_query($sql);
		$rs1 = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['unm'];

		}
}


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
  echo "<td><img src='upload/$image_1'  width='80px' height='75px' alt='img' /></td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $name . "</td>";  
  echo "<td style='padding:5px;vertical-align:top;'>" . $adres . "</td>";  
  echo "<td style='padding:5px;vertical-align:top;'>" . $personal . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $quali . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $job . "</td>"; 
  echo "<td style='padding:5px;vertical-align:top;'>" . $expect . "</td>"; 
  //echo "<td>" . $mobile_no . "</td>"; 
  //echo "<td>" . $landline_no . "</td>"; 
  //echo "<td>" . $taluka . "</td>";
  //echo "<td>" . $district . "</td>";
  //echo "<td>" . $country . "</td>";
//  echo "<td>" . $age . "</td>";
  //echo "<td>" . $gender . "</td>";
  //echo "<td>" . $birth_date . "</td>";
  //echo "<td>" . $height . "</td>";
  //echo "<td>" . $native . "</td>";
    //echo "<td>" . $complex . "</td>";
	  //echo "<td>" . $mname . "</td>";
	    //echo "<td>" . $uncle_name . "</td>";
		  //echo "<td>" . $religion . "</td>";
		    //echo "<td>" . $caste . "</td>";
			  //echo "<td>" . $sub_caste . "</td>";
			  //  echo "<td>" . $gotra . "</td>";  echo "<td>" . $qualification . "</td>";  echo "<td>" . $degree . "</td>";
				//  echo "<td>" . $current_job_profile . "</td>";
				  //  echo "<td>" . $company . "</td>";
					//  echo "<td>" . $work_experience . "</td>";
					  //  echo "<td>" . $service_type . "</td>";
						//  echo "<td>" . $service_location . "</td>";
						  //  echo "<td>" . $annual_income . "</td>";
							//  echo "<td>" . $other_remark . "</td>";
							  //  echo "<td>" . $expectation . "</td>";
							//	  echo "<td>" . $expection_job . "</td>";

							//	 echo "<td><img src='upload/$image_2' alt='img' /></td>";
									//  echo "<td><img src='upload/$image_3' alt='img' /></td>";
									  // echo "<td><img src='upload/$image_4' alt='img' /></td>";
									   // echo "<td><img src='upload/$image_5' alt='img' /></td>";
						//				 echo "<td>" . $email . "</td>";
									   							   
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
</form>

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
