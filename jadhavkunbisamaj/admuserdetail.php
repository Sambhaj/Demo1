<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php
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

<form action="admbirth_day.php" method="post">
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



<div align="center"><br />
<br />

    

<br />
<br />

<center>
<!--<form action="adminhome.php" method="post">
<input type="button" value="Home" onclick="location.href='adminhome.php'"/>&nbsp;&nbsp;&nbsp;
<input type="submit" name="logout"  value="Log Out" />&nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?>
</form><br />
<br />
-->
<h2>User Detail</h2>

</center>
<?php 
$sql  = "select member_id,first_name, father_name, surname,username,password, created_by, current_status, address, mobile_no, landline_no, taluka, district, country, age, gender, height, birth_date, native, complex, mname, uncle_name, religion, caste, sub_caste, gotra, qualification, degree, current_job_profile, company, work_experience, service_type, service_location, annual_income, other_remark, expectation, expection_job, image_1, email, send_sms, promotional_offer, activate, verified from  tbregistration order by member_id asc";

$rs = mysql_query($sql);
		echo "<table width='485' border='1'  style='background-color:#FFCC99;'  cellspacing='0' id='tb1' >
		<tr class='head'>
		<th>Member Id</th>
		<th>Name</th>
		<th>UserName</th>
		<th>Password</th>
		<th>Created By</th>
		<th>Current Status</th>
		<th>Address</th>
		<th>Mobile No</th>
		<th>Landline No</th>
		<th>Taluka</th>
		<th>District</th>
		<th>Country</th>
		<th>Age</th>
 		<th>Gender</th>
		<th>Height</th>
		<th>Birth Date</th>
		<th>Native</th>
		<th>Complex</th>
		<th>Mother Name</th>
		<th>Uncle Name</th>
		<th>Religion</th>
		<th>Caste</th>
		<th>Sub Caste</th>
		<th>Gotra</th>
		<th>Qualification</th>
		<th>Degree</th>
		<th>Current Job Profile</th>
		<th>Company</th>
		<th>Work Experience</th>
		<th>Service Type</th>
		<th>Service Location</th>
		<th>Annual Income</th>
		<th>Other Remark</th>
		<th>Expection</th>
		<th>Expection Job</th>
		<th>Image 1</th>
		<th>Email</th>
		<th>Send SMS</th>
		<th>Promotional Offer</th>
		<th>Activat</th>
		<th>Verified</th>
		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($rs))
  {
  
  list($member_id,$first_name, $father_name, $surname, $username,$password, $created_by, $current_status, $address, $mobile_no, $landline_no, $taluka, $district, $country, $age, $gender, $height, $birth_date, $native, $complex, $mname, $uncle_name, $religion, $caste, $sub_caste, $gotra, $qualification, $degree, $current_job_profile, $company, $work_experience, $service_type, $service_location, $annual_income, $other_remark, $expectation, $expection_job, $image_1, $email, $send_sms, $promotional_offer, $activate, $verified)=$row;

  $name= $first_name . " " . $father_name . " " . $surname;
   echo "<tr >";
  echo "<td style='padding:5px;vertical-align:top;'>" . $member_id . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $name . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $username . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $password . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $created_by . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $current_status . "</td>";  
  echo "<td style='padding:5px;vertical-align:top;'>" . $address . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $mobile_no . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $landline_no . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $taluka . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $district . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $country . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $age . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $gender . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $height . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $birth_date . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $native . "</td>";
    echo "<td style='padding:5px;vertical-align:top;'>" . $complex . "</td>";
	  echo "<td style='padding:5px;vertical-align:top;'>" . $mname . "</td>";
	    echo "<td style='padding:5px;vertical-align:top;'>" . $uncle_name . "</td>";
		  echo "<td style='padding:5px;vertical-align:top;'>" . $religion . "</td>";
		    echo "<td style='padding:5px;vertical-align:top;'>" . $caste . "</td>";
			  echo "<td style='padding:5px;vertical-align:top;'>" . $sub_caste . "</td>";
			    echo "<td style='padding:5px;vertical-align:top;'>" . $gotra . "</td>";  echo "<td>" . $qualification . "</td>";  echo "<td>" . $degree . "</td>";
				  echo "<td style='padding:5px;vertical-align:top;'>" . $current_job_profile . "</td>";
				    echo "<td style='padding:5px;vertical-align:top;'>" . $company . "</td>";
					  echo "<td style='padding:5px;vertical-align:top;'>" . $work_experience . "</td>";
					    echo "<td style='padding:5px;vertical-align:top;'>" . $service_type . "</td>";
						  echo "<td style='padding:5px;vertical-align:top;'>" . $service_location . "</td>";
						    echo "<td style='padding:5px;vertical-align:top;'>" . $annual_income . "</td>";
							  echo "<td style='padding:5px;vertical-align:top;'>" . $other_remark . "</td>";
							    echo "<td style='padding:5px;vertical-align:top;'>" . $expectation . "</td>";
								  echo "<td style='padding:5px;vertical-align:top;'>" . $expection_job . "</td>";
								  
								  if($image_1 == "")
								  {
								  $image_1="default.jpg";
								  }
								    echo "<td style='padding:5px;vertical-align:top;'><img src='upload/$image_1' width='80px' height='75px' alt='img'  /></td>";
									  echo "<td style='padding:5px;vertical-align:top;'>" . $email . "</td>";
									    echo "<td style='padding:5px;vertical-align:top;'>" . $send_sms . "</td>";
										 echo "<td style='padding:5px;vertical-align:top;'>" . $promotional_offer . "</td>";
									    echo "<td style='padding:5px;vertical-align:top;'>" . $activate . "</td>";
										 echo "<td style='padding:5px;vertical-align:top;'>" . $verified . "</td>";									   
  echo "</tr>";
  }
echo "</table>";
//}
?>

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
