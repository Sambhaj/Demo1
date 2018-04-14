<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/tab.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
	<script type="text/javascript" src="supersleight-min.js"></script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style>.shead{ background-color:#750000; color:#FFFFFF; }.tblbg{background-color:#BDFCAB; text-align:center}</style>
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

<div id="middlepart">
<?php require_once('db.php'); ?>
<!--tbs-->
    <div class="wrapper" style="margin-left:90px;">
  <h2>Employee Search</h2>
  <div id="tabContainer">
    <div id="tabs">
      <ul>
        <li id="tabHeader_1"><a href="esearch.php">Employee Type</a></li>
        <li id="tabHeader_2"><a href="loc_search.php">Location</a></li>
        <li id="tabHeader_3"><a href="quali_search.php">Qualification</a></li>
      </ul>
    </div>
    <div id="tabscontent">
      <div class="tabpage" id="tabpage_1">
	
	<form action="loc_search.php" method="post">
	Location: <br />
	<!--<input type="text" name="txtlocation" /> -->
	<?php 
echo "<SELECT  NAME='txtlocation' style='width:205px;' id='location' onchange='showd();' >
<option selected='selected'>Select</option>
<option>Achalpur</option>
<option>Ahmednagar</option>
<option>Akola</option>
<option>Amravati</option>
<option>Arvi</option>
<option>Aurangabad</option>
<option>Agartala</option>
<option>Agra</option>
<option >Aligarh</option>
<option>Aloda</option>
<option >Allahabad</option>
<option >Amritsar</option>
<option>Beed</option>
<option>Bhandara</option>
<option>Buldhana</option>
<option >Bangalore</option>
<option >Baroda</option>
<option >Bhopal</option>
<option >Bhubaneshwar</option>
<option>Chandrapur</option>
<option >Chandigarh</option>
<option>Chanpa</option>
<option >Chennai</option>
<option >Cochin</option>
<option >Coimbatore</option>
<option>Dawsa</option>
<option>Dharni</option>
<option>Dhule</option>
<option >Dehradun</option>
<option >Delhi</option>
<option >Durgapur</option>
<option>Gadchiroli</option>
<option>Gondia</option>
<option >Gandhinagar</option>
<option >Goa</option>
<option >Gurgaon</option>
<option >Guwahati</option>
<option >Gwalior</option>
<option>Hingoli</option>
<option >Hyderabad</option>
<option >Indore</option>
<option>Jalgaon</option>
<option>Jalna</option>
<option >Jabalpur</option>
<option >Jaipur</option>
<option >Jammu</option>
<option >Jamnagar</option>
<option >Jamshedpur</option>
<option >Jodhpur</option>
<option >Jullundhar</option>
<option >Kanpur</option>
<option>Katol</option>
<option>Khperkheda</option>
<option >Kolhapur</option>
<option >Kolkata</option>
<option>Koradi</option>
<option>Latur</option>
<option>Loni</option>
<option >Lucknow</option>
<option >Ludhiana</option>
<option >Mangalore</option>
<option>Morshi</option>
<option >Mumbai</option>
<option >Mysore</option>
<option >Nagpur</option>
<option >Nasik</option>
<option >NOIDA</option>
<option>Nanded</option>
<option>Nandurbar</option>
<option>Nashik</option>
<option>Osmanabad</option>
<option>Pandhurna</option>
<option>Parshivani</option>
<option>Paratwada</option>
<option>Parbhani</option>
<option>Pota</option>
<option>Pune</option>
<option>Pusad</option>
<option >Patna</option>
<option >Panjim</option>
<option >Pondicherry</option>
<option >Raipur</option>
<option >Ranchi</option>
<option>Rohana</option>
<option >Rourkela</option>
<option >Rajkot</option>
<option>Raigarh</option>
<option>Ratnagiri</option>
<option>Sangli</option>
<option>Satara</option>
<option>Sindhudurg</option>
<option>Saoner</option>
<option>Solapur</option>
<option >Secunderabad</option>
<option>Silewada</option>
<option >Shillong</option>
<option >Siliguri</option>
<option >Srinagar</option>
<option >Surat</option>
<option>Tamaswadi</option>
<option >Thane</option>
<option >Thiruvananthapuram</option>
<option >Tiruchirapalli</option>
<option >Udaipur</option>
<option >Varanasi</option>
<option >Vellore</option>
<option >Vijaywada</option>
<option >Vishakapatnam</option>
<option>Wardha</option>
<option>Warud</option>
<option>Washim</option>
<option>Yavatmal</option>
<option >Other</option>";
if($location <> "" && $location <> "NA")
{
echo "<option  value='$location'  selected='selected'>$location</option>";
}
 echo "</SELECT>";?>
	 &nbsp; <input type="submit" name="Search" value="Search" />
	</form>
	<br />
   	<?php 
if(isset($_POST['Search']))                           //check post back event
{
$emploc=$_POST["txtlocation"];	

if($emploc <> "")
{
$sql  = "SELECT `emp_name` as lnm, `designation`, `department`, `qualification`, `mobile_no`, `email` FROM `tbemp_search` where `location` like '$emploc'";
$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$lnm= $row1['lnm'];

if($lnm <> "")
{
echo "<b style='color:#000'>Search Result for $emploc</b></br></br>";
		echo "<table align='center' class='tblbg' width='650' border='1' bordercolor='#FFFFFF' height='50px' cellspacing='1' id='tb1'>
		<tr class='shead'>	
		<th>S No</th>			
		<th>Employee Name</th>
		<th>Designation</th>
		<th>Department</th>
		<th>Qualification</th>
		<th>Mobile</th>
		<th>Email</th>					
		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$no=1;
while($row = mysql_fetch_array($rs))
  {
  
  list($name, $des, $dept, $quali, $mob, $eml)=$row;

  
   echo "<tr>";
   echo "<td>" . $no . "</td>"; 
  echo "<td>" . $name . "</td>";
  echo "<td>" . $des . "</td>";
  echo "<td>" . $dept . "</td>"; 							   
    echo "<td>" . $quali . "</td>";
   echo "<td>" . $mob . "</td>";
   echo "<td>" . $eml . "</td>"; 							   
						     
  echo "</tr>";
  $no ++;
  }
echo "</table>";
}
else
{
echo "Record not found";
}
}
else
{
echo "Please Enter Location To Search";
}
}
?>
<br />
<br />
		
		
      </div>
      <div class="tabpage" id="tabpage_2">
       <!--<form action="loc_search.php" method="post">
	Location: <br />
	<input type="text" name="txtlocation" /> &nbsp; <input type="submit" name="Search" value="Search" />
	</form> -->
	<br />
<br />
      </div>
      <div class="tabpage" id="tabpage_3">
      <!-- <form action="quali_search.php" method="post">
	Qualification: <br />
	<input type="text" name="txtquali" /> &nbsp; <input type="submit" name="Search" value="Search" />
	</form> -->
	<br />
<br />
      </div>
    </div>
  </div>
   </div>
<script src="js/tabs_old.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1332079-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--tbe-->
	
	
	



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
