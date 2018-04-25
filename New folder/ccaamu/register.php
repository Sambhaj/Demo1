
<?php
include("config.php");
?>
<?php
//varible declaration
$success="";
$bddate="";
$annidate="";
$message="";

if (isset($_POST['submit']))

{
$first=$_POST['form'];
$last=$_POST['member'];
$user=$_POST['name'];
$addr=$_POST['address'];
$std=$_POST['tel_std'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$mobile=$_POST['mobile_no'];
$whatsapp=$_POST['whatsapp_no'];
$oaddr=$_POST['office_address'];
$ostd=$_POST['otel_std'];
$ofax=$_POST['ofax'];
$oemail=$_POST['oemail'];
$omobile=$_POST['omobile_no'];
$dob=$_POST['dob'];
$marital=$_POST['marital_status'];
$anni=$_POST['date_anni'];
$blood=$_POST['blood_gr'];
$education=$_POST['education'];
$enroll=$_POST['enroll_date'];
$asso=$_POST['asso_enroll'];
$pop=$_POST['pop'];
$welfare=$_POST['welfare_fund'];
$org=$_POST['org'];
 
  
 //date conversion
	
	$date2 = DateTime::createFromFormat("d/m/Y", "$dob");
   $bddate = $date2->format("Y-m-d");

	$date1 = DateTime::createFromFormat("d/m/Y", "$anni");
    $annidate = $date1->format("Y-m-d"); 
	

	
	
		function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				default: return false;
				}
	
			}
					// for image upload
				$file_name=$_FILES["photo"]["name"];
				$temp_name=$_FILES["photo"]["tmp_name"];
				$imgtype=$_FILES["photo"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename=$_FILES["photo"]["name"];
				 
				$target_path = "doc/".$imagename;
			
				move_uploaded_file($temp_name, $target_path); 
	
	
$db=mysql_select_db("db_registration");
$query = "INSERT INTO tb_register(form,member,name,address,tel_std,fax,email,mobile_no,whatsapp_no,office_address,otel_std,ofax,oemail,omobile_no,dob,marital_status,date_anni,blood_gr,education,enroll_date,asso_enroll,pop,welfare_fund,org,photo) VALUES('$first','$last','$user','$addr','$std','$fax','$email','$mobile','$whatsapp','$oaddr','$ostd','$ofax','$oemail','$omobile','$bddate','$marital','$annidate','$blood','$education','$enroll','$asso','$pop','$welfare','$org','$target_path')";


 if(mysql_query($query))
 {
 echo "<script>alert('Registration successfully');</script>";
 }
 else
 {
	echo "Registration unsuccessfully";

 }
 
}

	
 ?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="css/text" href="style.css">

<link rel="stylesheet" type="css/text" href="tcal.css">
<script type="text/javascript" src="js/tcal.js"></script> 
	<link rel="shortcut icon" type="image/png" href="images/logo.png"  width="16" height="16">

 <script type="text/javascript">
 
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

 function mobval()
{
     var txt1=document.getElementById('mobile_no');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobile_no').value;
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
function whatsapp()
{
     var txt1=document.getElementById('whatsapp_no');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('whatsapp_no').value;
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
function emailvalidate1()
{
	var x=document.getElementById('oemail').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('oemail').value="";
  	} 
}
  
 function mobval1()
{
     var txt1=document.getElementById('omobile_no');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('omobile_no').value;
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
function landline()
{
     var txt1=document.getElementById('tel_std');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{11})$/;
     var txtvalue=document.getElementById('tel_std').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 11 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }


}
function landline1()
{
     var txt1=document.getElementById('otel_std');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{11})$/;
     var txtvalue=document.getElementById('otel_std').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 11 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }


}
 
  </script>
 
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">

	<table align="center" class="demo-table" style="border:2px solid black;padding:5px;width:500px">
      
		<tr>
		<td colspan="2" align="center" bgcolor="pink" font="50px"><img src="images/logo1.png" ></td>
		<br></tr>
		 
		<tr>
			<td>Form No.</td>
			<td><input type="text" class="demoInputBox" name="form" required="required"></td>
		</tr>
		<tr>
			<td>Membership No</td>
			<td><input type="text" class="demoInputBox" name="member" required="required"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" class="demoInputBox" name="name" required="required"></td>
		</tr>
		<tr>
			<td>Photo </td>
			<td><input type="file"  name="photo" value="" required="required"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" class="demoInputBox" name="address" value="" required="required"></td>
		</tr>
		<tr>
			<td>Tel With STD Code</td>
			<td><input type="text" onblur="landline();" id="tel_std" class="demoInputBox" name="tel_std" value="" required="required"></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input type="text" class="demoInputBox" name="fax" value="" required="required"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" class="demoInputBox" onblur="emailvalidate();" id="email" name="email"  value="" required="required"></td>
		</tr>
		
		  <tr>
			<td>Mobile No</td>
			<td><input type="text" onblur="mobval();" id="mobile_no" class="demoInputBox" name="mobile_no" value="" required="required"></td>
		</tr>
		<tr>
			<td>Whatsapp No</td>
			<td><input type="text" class="demoInputBox" onblur="whatsapp();" id="whatsapp_no" name="whatsapp_no" value="" required="required"></td>
		</tr>
		<tr>
			<td>Office Address</td>
			<td><input type="text" class="demoInputBox" name="office_address" value="" required="required"></td>
		</tr>
		
		<tr>
			<td>Telephone Number with Code</td>
			<td><input type="text" onblur="landline1();" id="otel_std" class="demoInputBox" name="otel_std" value="" required="required"></td>
		</tr>
		<tr>
			<td>Office Fax</td>
			<td><input type="text" class="demoInputBox" name="ofax" value="" required="required"></td>
		</tr>
		<tr>
			<td>Office Email</td>
			<td><input type="text" class="demoInputBox" onblur="emailvalidate1();" id="oemail" name="oemail" value="" required="required"></td>
		</tr>
		<tr>
			<td>Mobile No</td>
			<td><input type="text" class="demoInputBox" onblur="mobval1();" id="omobile_no" name="omobile_no" value="" required="required"></td>
		</tr>
		<tr>
			<td>Date Of Birth</td>
			<td><input type="text"  id="InputBox"  class="tcal" placeholder="dd/mm/yy" name="dob" value="" required="required"></td>
		</tr>
		
		<tr>
			<td>Marital Status </td>
			<td><input type="radio" class="demoInputBox" name="marital_status" value="Married" required="required">Married
			<input type="radio" class="demoInputBox" name="marital_status" value="Unmarried" required="required">Unmarried</td>
		</tr>
		<tr>
			<td>Date of Marriage Anniversary </td>
			<td><input type="text" id="InputBox" class="tcal" name="date_anni" placeholder="dd/mm/yy" required="required" value=""/></td>
		</tr>
		<tr>
			<td>Blood Group  </td>
			<td><input type="text" class="demoInputBox" name="blood_gr" required="required" value=""></td>
		</tr>
		<tr>
			<td>Education/ Qualification </td>
			<td><input type="text" class="demoInputBox" name="education" required="required" value=""></td>
		</tr>
		<tr>
			<td>Enrollment date & Reg. No.
	        under Advocates Act 1961</td>
			<td><input type="text" class="demoInputBox" name="enroll_date" required="required" value=""></td>
		</tr>
		
          <tr>
			<td>Association enrolled
	         with as a member 
           </td>
			<td><input type="text" class="demoInputBox" name="asso_enroll" value="" required="required"></td>
		</tr>
		
		<tr>
			<td>Place/s of Practice  </td>
			<td><input type="text" class="demoInputBox" name="pop" value="" required="required"></td>
		</tr>
		<tr>
			<td>Details of Membership of Advocate's Welfare Fund </td>
			<td><input type="text" class="demoInputBox" name="welfare_fund" value="" required="required"></td>
		</tr>
		<tr>
			<td>Affiliation of Recognised Consumer
              Organisation </td>
			<td><input type="text" class="demoInputBox" name="org" value="" required="required"></td>
		</tr>
		
		
		<tr>
		  <td></td>
		  <td><br>
			<input type="submit" name="submit"  value="Register" class="btnRegister" required="required">
			 </td>
		</tr>
		<tr><td colspan="2" style="align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I, Declare that whatever stated above is true and correct . I agree and undertake to abide by Rules and Regulations of the CCAA as well as the Decisions and directions of Managing Committee from time to time<br>
		<b>NOTE: </b> a) Submission of form or clearance of cheque ,no way ,can be construed you as a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;member  unless the Managing Committee in its meeting approve your name.
	  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)  Cancellation of Membership solely will be the right of the CCAA Committee.
         </td></tr>
		
		
	</table>
 
</form>
</body>
</html>
