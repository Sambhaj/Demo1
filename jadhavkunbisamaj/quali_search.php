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

	<form action="quali_search.php" method="post">
	Qualification: <br />
	<!--<input type="text" name="txtquali" /> --> 
	
	<?php echo "
<select name='txtquali' style='width:205px;'>
<option>Select</option>
<option >12th & Not Pursuing Graduation</option><option >B.Arch. (Architecture)</option><option >B.Com. (Commerce)</option><option >B.Ed. (Education)</option><option >B.El.Ed. (Elementary Education)</option><option>B.Lib.Sc. (Library Sciences)</option><option>B.P.Ed. (Physical Education)</option><option>B.Pharm. (Pharmacy)</option><option>B.Plan. (Planning)</option><option>B.Sc. (Science)</option><option>B.V.Sc. (Veterinary Science)</option><option>BA (Arts)</option><option>BBA/ BBM/ BBS</option><option >BCA (Computer Application)</option><option>BDS (Dental Surgery)</option><option>BE/ B.Tech (Engineering)</option><option>BFA (Fine Arts)</option><option>BGL</option><option>BHM (Hotel Management)</option><option>BHMS (Homeopathy)</option><option >BL/LLB</option><option >BPT (Physiotherapy)</option><option >BSW (Social Work)</option><option>Bachelor of Fashion Technology</option><option >Diploma-Arts/ Graphic Designing</option><option>Diploma-Engineering</option><option >Diploma-Fashion/ Design</option><option >Diploma-Languages</option><option >MBBS</option><option >Pilot Licenses</option><option >Diploma-Other Diploma</option><option >Other School/ Graduation</option><option>M.E.</option><option>M.Tech</option><option>MCA</option><option>M.A.</option><option>M.Sc.</option><option>PhD</option><option>Masters</option><option>Bachlors</option>";

if($qualification <> "" && $qualification <> "NA")
{
echo "<option  value='$qualification'  selected='selected'>$qualification</option>";
}
echo "</select>";?>
	
	&nbsp; <input type="submit" name="Search" value="Search" />
	</form>
	<br />
   	<?php 
if(isset($_POST['Search']))                           //check post back event
{
$empquali=$_POST["txtquali"];	

if($empquali <> "")
{
$sql  = "SELECT `emp_name` as lnm, `designation`, `department`, `qualification`, `mobile_no`, `email` FROM `tbemp_search` where `qualification` like '$empquali'";
$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$lnm= $row1['lnm'];

if($lnm <> "")
{
echo "<b style='color:#000'>Search Result for $empquali</b></br></br>";
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
echo "Please Enter Qualification To Search";
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
        <!--<form action="quali_search.php" method="post">
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
