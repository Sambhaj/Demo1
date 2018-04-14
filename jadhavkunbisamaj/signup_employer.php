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
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#dt").datepicker();
        });  </script>
<script type="text/javascript">

function isNumeric(keyCode)
{
      if(keyCode==16)
            isShift = true;
 
    return ((keyCode >= 48 && keyCode <= 57 || keyCode == 8 || keyCode == 9 || keyCode == 46 || keyCode == 188 || keyCode == 37 || keyCode == 38 || keyCode == 39 || keyCode == 40  ||
            (keyCode >= 96 && keyCode <= 105)) && isShift == false);
}


function show()
{var a=document.getElementById('native')
var b=a.options[a.selectedIndex].text;
if(b == "Other")
{document.getElementById('otehrnative').style.visibility='visible';}
else{document.getElementById('otehrnative').style.visibility='hidden';}}

function showd()
{var a=document.getElementById('district')
var b=a.options[a.selectedIndex].text;
if(b == "Other")
{document.getElementById('otherdistrict').style.visibility='visible';}
else{document.getElementById('otherdistrict').style.visibility='hidden';}}

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


function makehide()
{
document.getElementById('otehrnative').style.visibility='hidden';
document.getElementById('otherdistrict').style.visibility='hidden';
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
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>
</head>

<body  onload="makehide()">

<?php require_once('db.php'); ?>


<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3>Welcome to User Homepage</h3></td>
	<td align="right" valign="top">
	
	</td>
	</tr></table>
</div><!-- Header ends here -->

<div id="navigation">
<form action="signup_employer.php" method="post">
<ul>
	<li class="first"><a href="index.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
		
</ul></form>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>


<div align="center"><br />
<br />
<h2>SignUp Employee</h2>
    
    <?php
$idd=getid($dsn);

function getid($dsn)                                                 //function to get max id from database
{
$qr="Select Max(emp_id) as id from tbemp_search";
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
//======================






//if(isset($_POST['Submit']))                        //check post back event
if(isset($_POST['Submit']))
{
$ok="ok";
$empid=$_POST["empid"];

if(!empty($_POST["emp_name"]))
{
$empname=$_POST["emp_name"];
}

if(!empty($_POST["emp_type"]))
{
$emptype=$_POST["emp_type"];
}

if(!empty($_POST["address"]))
{
$add=$_POST["address"];
}

if(!empty($_POST["location"]))
{
$location=$_POST["location"];
}

if(!empty($_POST["designation"]))
{
$designation=$_POST["designation"];
}

if(!empty($_POST["department"]))
{
$department=$_POST["department"];
}

if(!empty($_POST["qualification"]))
{
$qualification=$_POST["qualification"];
}

if(!empty($_POST["mobile_no"]))
{
$mobile_no=$_POST["mobile_no"];
}

if(!empty($_POST["email"]))
{
$email=$_POST["email"];
}

$emp_type=$_POST["emp_type"];
if($emp_type == "Select")
{
$emp_type="NA";
}

$location=$_POST["location"];
if($location == "Select")
{
$location="NA";
}

$qualification=$_POST["qualification"];
if($qualification == "Select")
{
$qualification="NA";
}
//$username=$_POST["username"];

//if($username != "")
//{
//$qr="Select username as unm from tbregistration where username='$username'";
//$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
//$row = mysql_fetch_array($rs);
//$unm= $row['unm'];
//if($unm == $username)
//{
//echo "<script> alert('user name is already exist')</script>"; 
	//$ok="nok";
//goto end;
//exit();
//history.back();

//}
//}

if(empty($_POST["emp_name"]))
{
echo "<script> alert('Please Enter Employee Name')</script>"; 
	$ok="nok";
//	goto end;
}
else if(empty($_POST["emp_type"]))
{
	echo "<script> alert('Please Enter Employee Type')</script>"; 
//	goto end;
		$ok="nok";
}
else if(empty($_POST["location"]))
{
	echo "<script> alert('Please Enter Location')</script>"; 
//	goto end;
		$ok="nok";
}
else if(empty($_POST["qualification"]))
{
	echo "<script> alert('Please Enter Qualification')</script>"; 
//	goto end;
		$ok="nok";
}
else if(empty($_POST["mobile_no"]))
{
	echo "<script> alert('Please Enter Mobile Number')</script>"; 
//	goto end;
		$ok="nok";
}

if($ok=="ok")
{
	$qry="insert into tbemp_search(
emp_id,emp_name,emp_type,address,location,designation,department,qualification,mobile_no,email) values('$empid','$empname','$emptype','$add','$location','$designation','$department','$qualification','$mobile_no','$email')";
 

	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Stored Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
  } 
  }    
}
?>
<center>
<form action="signup_employer.php" id="form1" method="post">
<h1>&nbsp;</h1>
<table bgcolor="#FFDBBE" cellpadding="10" cellspacing="10">
<tr><td colspan="2"><span class="style1">Fields with * are mandatory</span>.</td></tr>
<tr><td><!--Emp Id --></td><td><input type="text" size="30px" style="display:none"  readonly="true" name="empid" value="<?php echo $idd;?>" /></td></tr>
<tr><td>Employee Name*</td><td><input type="text" size="30px" name="emp_name" value="<?php echo $empname;?>"  /></td></tr>
<tr><td>Employee Type*</td><td>
<!--<input type="text" size="30px" name="emp_type" value="             <?php /*?><?php echo $emptype;?><?php */?>               " /> -->

<?php 
echo "<SELECT  NAME='emp_type' style='width:205px;' id='emp_type' onchange='showd();'>
<option selected='selected'>Select</option>
<option>Government</option>
<option>Semi-Government</option>
<option>Private</option>
<option>Business</option>
<option >Other</option>";
if($emp_type <> "" && $emp_type <> "NA")
{
echo "<option  value='$emp_type'  selected='selected'>$emp_type</option>";
}
echo "</SELECT>";?>

</td></tr>
<tr><td>Address</td><td><textarea name="address" cols="23" rows="3"><?php echo $add;?></textarea></td></tr>
<tr><td>Location *</td><td>
<!--<input type="text" size="30px" name="location" value="       <?php /*?><?php echo $location;?><?php */?>            " /> -->

<?php 
echo "<SELECT  NAME='location' style='width:205px;' id='location' onchange='showd();' >
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
 echo "</SELECT>";?> &nbsp;&nbsp;&nbsp;&nbsp;
 <!--<input type="text" size="15px" name='otherloc' id="otherloc" /> -->

</td></tr>
<tr><td>Designation</td><td><input type="text" size="30px" name="designation" value="<?php echo $designation;?>" /></td></tr>
<tr><td>Department/Office/College</td><td><input type="text" size="30px" name="department" value="<?php echo $department;?>" /></td></tr>
<tr><td>Qualification *</td><td>
<!--<input type="text" size="30px" name="qualification" value="      <?php /*?><?php echo $qualification;?><?php */?>             " /> -->

<?php echo "
<select name='qualification' style='width:205px;'>
<option>Select</option>
<option >12th & Not Pursuing Graduation</option><option >B.Arch. (Architecture)</option><option >B.Com. (Commerce)</option><option >B.Ed. (Education)</option><option >B.El.Ed. (Elementary Education)</option><option>B.Lib.Sc. (Library Sciences)</option><option>B.P.Ed. (Physical Education)</option><option>B.Pharm. (Pharmacy)</option><option>B.Plan. (Planning)</option><option>B.Sc. (Science)</option><option>B.V.Sc. (Veterinary Science)</option><option>BA (Arts)</option><option>BBA/ BBM/ BBS</option><option >BCA (Computer Application)</option><option>BDS (Dental Surgery)</option><option>BE/ B.Tech (Engineering)</option><option>BFA (Fine Arts)</option><option>BGL</option><option>BHM (Hotel Management)</option><option>BHMS (Homeopathy)</option><option >BL/LLB</option><option >BPT (Physiotherapy)</option><option >BSW (Social Work)</option><option>Bachelor of Fashion Technology</option><option >Diploma-Arts/ Graphic Designing</option><option>Diploma-Engineering</option><option >Diploma-Fashion/ Design</option><option >Diploma-Languages</option><option >MBBS</option><option >Pilot Licenses</option><option >Diploma-Other Diploma</option><option >Other School/ Graduation</option><option>M.E.</option><option>M.Tech</option><option>MCA</option><option>M.A.</option><option>M.Sc.</option><option>PhD</option><option>Masters</option><option>Bachlors</option>";

if($qualification <> "" && $qualification <> "NA")
{
echo "<option  value='$qualification'  selected='selected'>$qualification</option>";
}
echo "</select>";?>

</td></tr>
<tr><td>Mobile No*</td><td><input type="text" size="30px" name="mobile_no" id="mobile_no" onblur="mobval();" maxlength="10"  onkeydown="return isNumeric(event.keyCode);" value="<?php echo $mobile_no;?>" /></td></tr>
<tr><td>Email</td><td><input type="text" name="email" id="email" onblur="emailvalidate();" size="30px" value="<?php echo $email;?>" /></td></tr>
<tr><td></td><td><input type="submit" name="Submit" style="width:100px;" value="Submit"/></td></tr>
</table>
</form>
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
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
