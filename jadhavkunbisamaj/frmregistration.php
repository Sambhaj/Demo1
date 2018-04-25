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
<?php
require_once('db.php');
?>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<script type="text/javascript">

function isNumeric(keyCode)
{
      if(keyCode==16)
            isShift = true;
 
    return ((keyCode >= 48 && keyCode <= 57 || keyCode == 8 || keyCode == 9 || keyCode == 46 || keyCode == 188 || keyCode == 37 || keyCode == 38 || keyCode == 39 || keyCode == 40  ||
            (keyCode >= 96 && keyCode <= 105)) && isShift == false);
}




function CheckPassword1(inputtxt)   
{   
//alert(inputtxt.value);
//var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8}$/;  
var decimal=/^[0-9a-bA-B]+$/;
if(inputtxt.value.match(decimal))   
{   
alert('Correct, try another...')  
return true;  
}  
else  
{   
alert('Wrong...!')  
return false;  
}  
}   





//code to check password alphnumeric
 function CheckPassword() {
        var name = document.getElementById("password").value;
       var pattern = /^[A-Za-z0-9 ]{8}$/;
//	  var pattern= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8}$/;   
        if (pattern.test(name)) {
//            alert(name +" has alphanumeric value");
            return true;
        } else {
            alert("Name is not valid.Please input alphanumeric value!");
			 document.getElementById("password").value="";
            return false;
        }
    }

//========

function makevisible(ee,txt1)
{
var e=document.getElementById(ee);
if(e.options[e.selectedIndex].text == "others")
{
document.getElementById(txt1).style.visibility='visible';
 }
 else
 {
document.getElementById(txt1).style.visibility='hidden';
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
function chkpsw()
{

}

function mobval()
{
     var txt1=document.getElementById('mobno');
     //var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
     var lnth=txt1.value.length; 
       //   lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
          // var msg="Please enter 10 digit mobile number.";
 		  // lbl1.innerHTML=msg;
		   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
         // lbl1.innerHTML="";
          return true;
         }
}

</script>
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>
</head>

<body onload="makehide();">
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3></h3></td>
	<td align="right" valign="top">
	<div class="log">
	<?php 
 
//ob_start("ob_gzhandler");
if ($_SERVER["REQUEST_METHOD"] == "POST")                       //check post back event
{
require_once('db.php');
$unm=$_POST["unm"];
$psw=$_POST["psw"];
if($unm <> "" || $psw <> "" )
{
$qr="Select username as usrnm from tbregistration where username='$unm' and password='$psw'";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$uname= $row['usrnm'];

if($uname <> "")
{ 
session_start();
// store session data
$_SESSION['uname']=$uname;
echo "Pageviews=". $_SESSION['uname'];
echo  '<META http-equiv="refresh" content="0;URL=index.php">';
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=login.php">';
}
}
else
{
echo "<script> alert('Please enter required fields')</script>"; 
}

}
?>
	<form  name="frm1" action="index.php" method="post">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td>Matrimony</td>
	<td><input type="button" class="signup" name="login" value="Signup" onClick="parent.location='frmregistration.php'" /></td><td>or &nbsp;</td>
	<td><input class="txtbx" type="text" name="unm" value="username" OnClick="this.value=''" onblur="if(this.value==''){this.value='username'}"/>&nbsp;</td>
	<td><input class="txtbx" type="text" name="psw" id="PasswordField" onfocus="ChangeToPassField()" value="password" OnClick="this.value=''" /></td>
	<td><input type="submit" class="signin" name="login" value="Signin" /></td></tr>
	<tr><td align="center" colspan="5"><br /><h4>Find your better half...</h4></td></tr>
	</table>
	</form>
</div>
</td></tr>
</table>
	
</div><!-- Header ends here -->
<div id="navigation">
<ul>
	<li class="first"><a href="index.php" title="">Home</a></li>
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

	<h2>Quick Register</h2>
    
    <?php
$idd=getid($dsn);

function getid($dsn)                                                 //function to get max id from database
{
$qr="Select Max(member_id) as id from tbregistration";
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
$memberid=$_POST["memberid"];

if(!empty($_POST["first_name"]))
{
$fname=$_POST["first_name"];
}

if(!empty($_POST["father_name"]))
{
$fathername=$_POST["father_name"];
}


if(!empty($_POST["surname"]))
{
$surname=$_POST["surname"];
}


$createdby=$_POST["createdby"];
 
if($createdby == "Select")
{
$createdby="NA";
}

$current_status=$_POST["curent_status"];


if($current_status == "Select")
{
$current_status="NA";
}

$address=$_POST["address"];


$mobno=$_POST["mobno"];


$landlineno=$_POST["landlineno"];


$taluka=$_POST["taluka"];


$district=$_POST["district"];
if($district == "Select")
{
$district="NA";
}
else if($district == "others")
{
$district=$_POST["otherdistrict"];
}

$country=$_POST["country"];


$age=$_POST["age"];
if($age == "Select")
{
$age="NA";
}


$gender=$_POST["gender"];
if($gender=="Male")
	{
	$gender="M";
	}
	else if($gender == "Female")
	{
		$gender="F";
	}	


$height=$_POST["height"];
if($height == "Select")
{
$height="NA";
}

if(!empty($_POST["bdate"]))
{
$birthdate=$_POST["bdate"];
}


$native=$_POST["native"];
if($native == "Select")
{
$native="NA";
}
else if($native == "others")
{
$native=$_POST["otehrnative"];
}


$complex=$_POST["complex"];
if($complex == "Select")
{
$complex="NA";
}


$mname=$_POST["mname"];


$unclename=$_POST["unclename"];


$religion=$_POST["religion"];


$caste=$_POST["caste"];


$subcast=$_POST["subcaste"];


$gotra=$_POST["gotra"];
if($gotra == "Select")
{
$gotra="NA";
}


$qualification=$_POST["qualification"];
if($qualification == "Select")
{
$qualification="NA";
}


$degree=$_POST["degree"];
if($degree == "Select")
{
$degree="NA";
}

$jobprofile=$_POST["jobprofile"];
if($jobprofile == "Select")
{
$jobprofile="NA";
}

$company=$_POST["company"];


$experience=$_POST["experience"];
if($experience == "Select")
{
$experience="NA";
}

$sv_type=$_POST["servicetype"];
if($sv_type == "Select")
{
$sv_type="NA";
}
$service_location=$_POST["service_location"];
$annualincome=$_POST["annual_income"];
if($annualincome == "Select")
{
$annualincome="NA";
}
$remark=$_POST["remark"];
$expection=$_POST["expection"];
$expectionjob=$_POST["expectionjob"];
if($expectionjob == "Select")
{
$expectionjob="NA";
}
if(!empty($_FILES['img1']['name']))
{
 updimgs("img1");                          //here called function to upload imgae to server folder
 $image1=$_POST["img1"];
}

if(!empty($_FILES['img2']['name']))
{
updimgs("img2");
$image2=$_POST["img2"];
}
else
{ $image2="NA";}
if(!empty($_FILES['img3']['name']))
{
updimgs("img3");
$image3=$_POST["img3"];
}
else
{ $image3="NA";}
if(!empty($_FILES['img4']['name']))
{
updimgs("img4");
$image4=$_POST["img4"];
}
else
{ $image4="NA";}
if(!empty($_FILES['img5']['name']))
{
updimgs("img5");
$image5=$_POST["img5"];
}
else
{ $image5="NA";}

$username=$_POST["username"];

if($username != "")
{
$qr="Select username as unm from tbregistration where username='$username'";
$rs=mysql_Query($qr,$dsn) or die(mysql_error());;
$row = mysql_fetch_array($rs);
$unm= $row['unm'];
if($unm == $username)
{
echo "<script> alert('user name is already exist')</script>"; 
	$ok="nok";
//goto end;
//exit();
//history.back();

}
}


if(!empty($_POST["email"]))
{
$email=$_POST["email"];
}



$password=$_POST["password"];

$sendsms=$_POST["sms"];
if($sendsms == "yes")
{

$sendsms="1";
}
else if($sendsms == "no")
{
$sendsms="0";
}





$promotionoffer=$_POST["offer"];
if($promotionoffer == "yes")
{
$promotionoffer="1";
}
else if($promotionoffer == "no")
{
$promotionoffer="0";
}



	
$activate=$_POST["activate"];
if($activate == "yes")
{
$activate="1";
}
else if($activate == "no")
{
$activate="0";
}

$verified=$_POST["verified"];
if($verified == "yes")
{
$verified="1";
}
else if($verified == "no")
{
$verified="0";
}

if(empty($_POST["first_name"]))
{
echo "<script> alert('Enter first name Compulsory')</script>"; 
	$ok="nok";
//	goto end;
}
else if(empty($_POST["father_name"]))
{
	echo "<script> alert('Enter father name Compulsory')</script>"; 
	//goto end;
		$ok="nok";
}
else if(empty($_POST["surname"]))
{
	echo "<script> alert('Enter surname Compulsory')</script>"; 
	//goto end;
		$ok="nok";
}
else if(empty($_POST["bdate"]))
{
	echo "<script> alert('Enter Birth Date Compulsory')</script>"; 
	//goto end;
		$ok="nok";
}
//else if(empty($_FILES['img1']['name']))
//{
	//echo "<script> alert('Select Image 1 Compulsory')
	//goto end;
//		$ok="nok";
//}
else if(empty($_POST["email"]))
{
	echo "<script> alert('Enter email Compulsory')</script>"; 
//	goto end;
	$ok="nok";
}
else if($sendsms <> "1")
{
if($sendsms <> "0")
{
echo "<script> alert('$sendsms')</script>"; 
	echo "<script> alert('select Send smsOption')</script>"; 
		
		$ok="nok";
		//goto end;	
}
}
if($promotionoffer <> "1" )
{
if($promotionoffer <> "0")
{
	echo "<script> alert('select promotion offer option')</script>"; 
	
	$ok="nok";//goto end;
	}
}
 if($verified <> "1")
{
if($verified <> "0")
{
	echo "<script> alert('select activate option')</script>"; 
	
		$ok="nok";//goto end;
}
}
 if($verified <> "1")
{
 if($verified <> "0")
 {
	echo "<script> alert('select verfied option')</script>"; 
	
		$ok="nok";//goto end;
 }
}

if($ok=="ok")
{
	$qry="insert into tbregistration values('$memberid','$fname','$fathername','$surname','$createdby','$current_status','$address','$mobno','$landlineno','$taluka','$district','$country','$age','$gender','$height','$birthdate','$native','$complex','$mname','$unclename','$religion','$caste','$subcast','$gotra','$qualification','$degree','$jobprofile','$company','$experience','$sv_type','$service_location','$annualincome','$remark','$expection','$expectionjob','$image1','$image2','$image3','$image4','$image5','$username','$password','$email','$sendsms','$promotionoffer','$activate','$verified')";
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {
	echo "<script> alert('Stored Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=frmregistration.php">';                           
  } 
  }  
	  
}


//=======================================
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
echo  '<META http-equiv="refresh" content="0;URL=frmbirth_death.php">';           
}
else
{
move_uploaded_file($image_tmp_name,"upload/$image_name");
echo "Uploaded sucessfully";
}
}

//end:
?>




<form action="frmregistration.php" id="form1" method="post">
<h1>&nbsp;</h1>
<table bgcolor="#FFDBBE" cellpadding="10" cellspacing="10">
<tr><td colspan="2"><span class="style1">Fields with * are mandatory</span>.</td>
</tr>
<tr><td>Member Id</td><td><input type="text" disabled="disabled" name="memberid" value="<?php echo $idd;?>" /></td></tr>
<tr>
  <td>First Name*</td>
  <td><input type="text" name="first_name" value="<?php echo $fname;?>"  /></td></tr>
<tr>
  <td>Father Name*</td>
  <td><input type="text" name="father_name" value="<?php echo $fathername;?>" /></td></tr>
<tr>
  <td>Surname*</td>
  <td><input type="text" name="surname" value="<?php echo $surname;?>" /></td></tr>
<tr><td>Created By</td><td>
<?php
echo "<select name='createdby'><option>Select</option><option>Self</option><option>Parents</option><option>Friend</option><option>Admin</option><option>Other</option>";
if($createdby <> "" && $createdby <> "NA"  )
{
echo "<option  value='$createdby'  selected='selected'>$createdby</option>";
}
 echo "</select>"?>    </td></tr>
 
<tr><td>Current Status</td><td>
<?php
echo "<select name='curent_status'><option>Select</option><option>Single</option><option>Divorce</option><option>Others</option>";
if($current_status <> "" && $current_status <> "NA")
{
echo "<option  value='$current_status'  selected='selected'>$current_status</option>";
}
 echo "</select>"?>    </td></tr>
<tr><td>Address</td><td><input type="text" name="address" value="<?php echo $address;?>"  /></td></tr>
<tr><td>Mobile No</td><td><input type="text" name="mobno" onblur="mobval();"  onkeydown="return isNumeric(event.keyCode);"              value="<?php echo $mobno;?>" /></td></tr>
<tr><td>Landline No</td><td><input type="text" name="landlineno" onkeydown="return isNumeric(event.keyCode);"  value="<?php echo $landlineno;?>"/></td></tr>
<tr><td>Taluka</td><td><input type="text" name="taluka" value="<?php echo $taluka;?>" /></td></tr>


<?php
// <tr><td>District</td><td>
//echo "<select name='district' onchange='makevisible('district','otherdistrict');'/><option>Select</option><option>Amravati</option>//<option>Akola</option><option>Bhopal</option><option>others</option>";
//if($district <> "" && $district <> "NA")
//{
//echo "<option  value='$district'  selected='selected'>$district</option>";
//}
 //echo "</select>"
 
//echo "<input type="text" name='otherdistrict' /> </td></tr> "
 
 ?>




	<tr><td>District<td ><SELECT  NAME="district"><option label="Select" value="" selected="selected">Select</option>
<option>Agartala</option>
<option label="Agra" value="Agra">Agra</option>
<option label="Ahmedabad" value="Ahmedabad">Ahmedabad</option>
<option label="Aizwal" value="Aizwal">Aizwal</option>
<option label="Aligarh" value="Aligarh">Aligarh</option>
<option label="Allahabad" value="Allahabad">Allahabad</option>
<option label="Amravati" value="Amravati">Amravati</option>
<option label="Amritsar" value="Amritsar">Amritsar</option>
<option label="Aurangabad" value="Aurangabad">Aurangabad</option>
<option label="Bangalore" value="Bangalore">Bangalore</option>
<option label="Baroda" value="Baroda">Baroda</option>
<option label="Bhopal" value="Bhopal">Bhopal</option>
<option label="Bhubaneshwar" value="Bhubaneshwar">Bhubaneshwar</option>
<option label="Bokaro" value="Bokaro">Bokaro</option>
<option label="Chandigarh" value="Chandigarh">Chandigarh</option>
<option label="Chennai" value="Chennai">Chennai</option>
<option label="Cochin" value="Cochin">Cochin</option>
<option label="Coimbatore" value="Coimbatore">Coimbatore</option>
<option label="Cuttack" value="Cuttack">Cuttack</option>
<option label="Dehradun" value="Dehradun">Dehradun</option>
<option label="Delhi" value="Delhi">Delhi</option>
<option label="Dimapur" value="Dimapur">Dimapur</option>
<option label="Durgapur" value="Durgapur">Durgapur</option>
<option label="Faridabad" value="Faridabad">Faridabad</option>
<option label="Gandhinagar" value="Gandhinagar">Gandhinagar</option>
<option label="Ghaziabad" value="Ghaziabad">Ghaziabad</option>
<option label="Goa" value="Goa">Goa</option>
<option label="Gurgaon" value="Gurgaon">Gurgaon</option>
<option label="Guwahati" value="Guwahati">Guwahati</option>
<option label="Gwalior" value="Gwalior">Gwalior</option>
<option label="Hyderabad" value="Hyderabad">Hyderabad</option>
<option label="Imphal" value="Imphal">Imphal</option>
<option label="Indore" value="Indore">Indore</option>
<option label="Jabalpur" value="Jabalpur">Jabalpur</option>
<option label="Jaipur" value="Jaipur">Jaipur</option>
<option label="Jammu" value="Jammu">Jammu</option>
<option label="Jamnagar" value="Jamnagar">Jamnagar</option>
<option label="Jamshedpur" value="Jamshedpur">Jamshedpur</option>
<option label="Jodhpur" value="Jodhpur">Jodhpur</option>
<option label="Jullundhar" value="Jullundhar">Jullundhar</option>
<option label="Kanpur" value="Kanpur">Kanpur</option>
<option label="Kolhapur" value="Kolhapur">Kolhapur</option>
<option label="Kolkata" value="Kolkata">Kolkata</option>
<option label="Lucknow" value="Lucknow">Lucknow</option>
<option label="Ludhiana" value="Ludhiana">Ludhiana</option>
<option label="Madurai" value="Madurai">Madurai</option>
<option label="Mangalore" value="Mangalore">Mangalore</option>
<option label="Margaon" value="Margaon">Margaon</option>
<option label="Mumbai" value="Mumbai">Mumbai</option>
<option label="Mysore" value="Mysore">Mysore</option>
<option label="Nagpur" value="Nagpur">Nagpur</option>
<option label="Nasik" value="Nasik">Nasik</option>
<option label="NOIDA" value="NOIDA">NOIDA</option>
<option label="Patna" value="Patna">Patna</option>
<option label="Panjim" value="Panjim">Panjim</option>
<option label="Pondicherry" value="Pondicherry">Pondicherry</option>
<option label="Pune" value="Pune">Pune</option>
<option label="Raipur" value="Raipur">Raipur</option>
<option label="Ranchi" value="Ranchi">Ranchi</option>
<option label="Rourkela" value="Rourkela">Rourkela</option>
<option label="Rajkot" value="Rajkot">Rajkot</option>
<option label="Salem" value="Salem">Salem</option>
<option label="Secunderabad" value="Secunderabad">Secunderabad</option>
<option label="Shillong" value="Shillong">Shillong</option>
<option label="Siliguri" value="Siliguri">Siliguri</option>
<option label="Srinagar" value="Srinagar">Srinagar</option>
<option label="Surat" value="Surat">Surat</option>
<option label="Thane" value="Thane">Thane</option>
<option label="Thiruvananthapuram" value="Thiruvananthapuram">Thiruvananthapuram</option>

<option label="Tiruchirapalli" value="Tiruchirapalli">Tiruchirapalli</option>
<option label="Udaipur" value="Udaipur">Udaipur</option>
<option label="Varanasi" value="Varanasi">Varanasi</option>
<option label="Vellore" value="Vellore">Vellore</option>
<option label="Vijaywada" value="Vijaywada">Vijaywada</option>
<option label="Vishakapatnam" value="Vishakapatnam">Vishakapatnam</option>
<option label="Other" value="Other">Other</option>
</SELECT><input type="text" name='otherdistrict' /> </td></tr>


<tr><td>Country</td><td><input type="text" name="country"  value="india" /></td></tr>
<tr><td>Age</td><td>
<?php
echo "<select name='age'><option>Select</option><option>20-23</option><option>24-26</option><option>27-30</option><option>31-33</option><option>34-36</option><option>above 37</option>";
if($age <> "" && $age <> "NA")
{
echo "<option  value='$age'  selected='selected'>$age</option>";
}
 echo "</select>";?></td></tr>
<tr><td>Gender</td><td><input type="radio" value="Male" name="gender"  <?php if (isset($gender) && $gender=="M") echo "checked";?>  />Male<input type="radio" value="Female" name="gender"  <?php if (isset($gender) && $gender=="F") echo "checked";?> />Female </td></tr>

<tr><td>Height</td><td><select name="height"><option>Select</option><option>4-4.5</option><option>5-5.5</option></select>In Feet</td></tr>

<tr><td>Birth Date</td><td><input type="text" name="bdate"  class="tcal"  value="<?php echo $birthdate;?>" /></td></tr>
<tr><td>Native</td><td> <select name="native" onchange="makevisible('native','otehrnative');"><option>Select</option><option>others</select>   <input type="text" name="otehrnative" /></td></tr>
<tr><td>Complex</td><td>
<?php
echo "<select name='complex'><option>Select</option><option>Fair</option><option>Wheatish</option>";
if($complex <> "" && $complex <> "NA")
{
echo "<option  value='$complex'  selected='selected'>$complex</option>";
}
 echo "</select>"?>
</td></tr>
<tr><td>Mother Name</td><td><input type="text" name="mname" value="<?php echo $mname;?>"  /></td></tr> 
<tr><td>Maternal Uncle Name</td><td><input type="text" name="unclename" value="<?php echo $unclename;?>"  /></td></tr> 
<tr><td>Religion</td><td><input type="text" name="religion" value="<?php echo $religion;?>"  /></td></tr> 
<tr><td>Caste</td><td><input type="text" name="caste" value="Hindu"  /></td></tr> 
<tr><td>Sub Caste</td><td><input type="text" name="subcaste" value="Jadhav"  /></td></tr> 
 <tr><td>Gotra</td><td>
 <?php
echo "<select name='gotra'><option>Select</option><option>a</option><option>b</option><option>c</option><option>d</option>";
if($gotra <> "" && $gotra <> "NA")
{
echo "<option  value='$gotra'  selected='selected'>$gotra</option>";
}
 echo "</select>"?>
</td></tr>
<tr><td>Qualification</td>
<td>
<select name='qualification'>
<option>Select</option>
<option >12th & Not Pursuing Graduation</option><option >B.Arch. (Architecture)</option><option >B.Com. (Commerce)</option><option >B.Ed. (Education)</option><option >B.El.Ed. (Elementary Education)</option><option>B.Lib.Sc. (Library Sciences)</option><option>B.P.Ed. (Physical Education)</option><option>B.Pharm. (Pharmacy)</option><option>B.Plan. (Planning)</option><option>B.Sc. (Science)</option><option>B.V.Sc. (Veterinary Science)</option><option>BA (Arts)</option><option>BBA/ BBM/ BBS</option><option >BCA (Computer Application)</option><option>BDS (Dental Surgery)</option><option>BE/ B.Tech (Engineering)</option><option>BFA (Fine Arts)</option><option>BGL</option><option>BHM (Hotel Management)</option><option>BHMS (Homeopathy)</option><option >BL/LLB</option><option >BPT (Physiotherapy)</option><option >BSW (Social Work)</option><option>Bachelor of Fashion Technology</option><option >Diploma-Arts/ Graphic Designing</option><option>Diploma-Engineering</option><option >Diploma-Fashion/ Design</option><option >Diploma-Languages</option><option >MBBS</option><option >Pilot Licenses</option><option >Diploma-Other Diploma</option><option >Other School/ Graduation</option><option>M.E.</option><option>M.Tech</option><option>MCA</option><option>PhD</option><option>Masters</option><option>Bachlors</option>
</select>

</td></tr>





<?php
//echo "<select name='qualification'><option>Select</option><option>PhD</option><option>ME</option><option>MSc</option><option>BSc</option><option>BA</option>";
//if($qualification <> "" && $qualification <> "NA")
//{
//echo "<option  value='$qualification'  selected='selected'>$qualification</option>";
//}
 //echo "</select>"?>


<tr><td>Degree</td><td>
<select>
<option >Select</option>
<option >Agriculture</option><option >Anthropology</option><option >Biochemistry</option><option >Bioinformatics</option><option >Biology</option><option >Biomedical Sciences</option><option >Biotechnology</option><option >Botany</option><option>Chemistry</option><option >Computer Science</option><option>Dairy Technology</option><option>Economics</option><option >Electronics/ Telecommunications</option><option >Environmental Science</option><option >Food & Nutrition</option><option>Food Technology</option><option >General</option><option >Geography</option><option >Geology</option><option>Home Science</option><option>Life Sciences</option><option>Maths</option><option >Medical Lab Technology</option><option >Microbiology</option><option >Nursing</option><option >Physics</option><option >Statistics</option><option >Zoology</option><option >Other B.Sc.</option>
</select></td></tr>



<?php
//echo "<select name='degree'><option>Select</option><option>Computer</option><option>Electronics</option><option>Marketing</option>";
//if($degree <> "" && $degree <> "NA")
//{
//echo "<option  value='$degree'  selected='selected'>$degree</option>";
//}
 //echo "</select>"?>

<tr><td>Current Job Profile</td><td>
<?php
echo "<select name='jobprofile'><option>Select</option><option>Trainee</option><option>Associate</option><option>Junior</option><option>Junior</option><option>Senior</option><option>Manager</option><option>Lecturer</option><option>Others</option>";
if($jobprofile <> "" && $jobprofile <> "NA")
{
echo "<option  value='$jobprofile'  selected='selected'>$jobprofile</option>";
}
 echo "</select>"?></td></tr>
<tr><td>Company/ Institute</td><td><input type="text" name="company" value="<?php echo $company;?>"  /></td></tr>
<tr><td>Working Experience</td><td>
<?php
echo "<select name='experience'><option>Select</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>9</option>><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>";
if($experience <> "" && $experience <> "NA")
{
echo "<option  value='$experience'  selected='selected'>$experience</option>";
}
 echo "</select>"?>
 </td></tr>
<tr><td>Service Type</td><td>
<?php
echo "<select name='servicetype'><option>Select</option><option>Private</option><option>Government</option><option>Semi-Govt</option><option>Owner</option><option>Business</option><option>Industry</option><option>Father-Own</option>";
if($sv_type <> "" && $sv_type <> "NA")
{
echo "<option  value='$sv_type'  selected='selected'>$sv_type</option>";
}
 echo "</select>"?>
</td></tr>
<tr><td>Service Location</td><td><input type="text" name="service_location"  value="<?php echo $service_location;?>" /></td></tr>
<tr><td>Annual Income</td><td>
<?php
echo "<select name='annual_income'><option>Select</option><option>1-1.5</option><option>2-3</option><option>3-4</option><option>4-6</option><option>6-8</option><option>8-10</option><option>Above 10</option>";
if($annualincome <> "" && $annualincome <> "NA")
{
echo "<option  value='$annualincome'  selected='selected'>$annualincome</option>";
}
 echo "</select>"?>

</td></tr>
<tr><td>Other Remark</td><td><input type="text" name="remark" value="<?php echo $remark;?>" /></td></tr>
<tr><td>Expection</td><td><input type="text" name="expection" value="<?php echo $expection;?>" /></td></tr>
<tr><td>Expection Job</td><td>
<?php
echo "<select name='expectionjob'><option>Select</option><option>Working</option><option>HouseWife</option><option>Associate in business</option><option>Government Job</option><option>Semi-Govt-Job</option><option>Business</option>";
if($expectionjob <> "" && $expectionjob <> "NA")
{
echo "<option  value='$expectionjob'  selected='selected'>$expectionjob</option>";
}
 echo "</select>"?>

</td></tr>
<tr>
  <td>Image 1*</td>
  <td><input type="file" name="img1" value="<?php echo $image1;?>" /></td></tr>
<tr><td>Image 2</td><td><input type="file" name="img2" value="<?php echo $image2;?>" /></td></tr>
<tr><td>Image 3</td><td><input type="file" name="img3" value="<?php echo $image3;?>" /></td></tr>
<tr><td>Image 4</td><td><input type="file" name="img4" value="<?php echo $image4;?>" /></td></tr>
<tr><td>Image 5</td><td><input type="file" name="img5"  value="<?php echo $image5;?>"/></td></tr>
<tr><td>User Name</td><td><input type="text" name="username" maxlength="10" value="<?php echo $username;?>"/> 	</td> </tr>
<tr><td>Password</td><td><input  type="password" name="password" maxlength="8" onblur="CheckPassword();" value="<?php echo $password;?>" />Minimum 8 characters with alphabets and numbers 	</td></tr>
<tr>
  <td>Email*</td>
  <td><input type="text" name="email" onblur="emailvalidate();" value="<?php echo $email;?>" /></td></tr>
<tr>
  <td>Send Sms*</td>
  <td> <input type="radio" value="yes" name="sms"  <?php if (isset($sendsms) && $sendsms=="1") echo "checked";?>   />Yes<input type="radio" value="no" name="sms"  <?php if (isset($sendsms) && $sendsms=="0") echo "checked";?>  />No   </td></tr>
<tr>
  <td>Promotional Offer*</td>
  <td> <input type="radio" value="yes" name="offer" <?php if (isset($promotionoffer) && $promotionoffer=="1") echo "checked";?>    />Yes<input type="radio" value="no" name="offer" <?php if (isset($promotionoffer) && $promotionoffer=="0") echo "checked";?> />No   </td></tr>
<tr>
  <td>Activate*</td>
  <td> <input type="radio" value="yes" name="activate"  <?php if (isset($activate) && $activate=="1") echo "checked";?>   />Yes<input type="radio" value="no" name="activate" <?php if (isset($activate) && $activate=="0") echo "checked";?>    />No   </td></tr>
<tr>
  <td>Verified*</td>
  <td> <input type="radio" value="yes" name="verified" <?php if (isset($verified) && $verified=="1") echo "checked";?>    />Yes<input type="radio" value="no" name="verified" <?php if (isset($verified) && $verified=="0") echo "checked";?>   />No   </td></tr>
<tr><td></td><td><input type="submit" name="Submit" value="Submit"/></td></tr>

</table>
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
