
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
	
	  $query=mysql_query("SELECT member FROM tb_register ");
	  echo "$query";
$db=mysql_select_db("db_registration");
$query = "INSERT INTO tb_register(form,member,name,address,tel_std,fax,email,mobile_no,whatsapp_no,office_address,otel_std,ofax,oemail,omobile_no,dob,marital_status,date_anni,blood_gr,education,enroll_date,asso_enroll,pop,welfare_fund,org,photo) VALUES('$first','$last','$user','$addr','$std','$fax','$email','$mobile','$whatsapp','$oaddr','$ostd','$ofax','$oemail','$omobile','$bddate','$marital','$annidate','$blood','$education','$enroll','$asso','$pop','$welfare','$org','$target_path')";

 echo "$query";
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
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="css/text" href="cs/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="js/tableExport.js"></script>
<script type="text/javascript" src="js/jquery.base64.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="jspdf/jspdf.js"></script>
<script type="text/javascript" src="jspdf/libs/base64.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="css/text" href="tcal.css">
<script type="text/javascript" src="js/tcal.js"></script> 
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

<form method="post" action="" enctype="multipart/form-data">

	<table align="center" class="demo-table" style="border:2px solid black;padding:10px">
      
		<tr>
		<th colspan="2" style="text-align:center;background-color:#A52A2A;color:#ffffff" font="50px"><strong>CONSUMER COURTS ADVOCATES'S ASSOCIATION</strong></th>
		</tr>
		 
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
		  <td>
			<input type="submit" name="submit"  value="Register" class="btnRegister" >
			
		   </td></tr>
	
	</table>
	</form>
	
	
	
	
	
	
	<?php
       $db=mysql_select_db("db_registration");
      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM tb_register ");
	  $records = array();
	  while($row = mysql_fetch_array($result)){ 
	$records[] = $row;
	  }
	       ?>
<div class="container">
	<div class="row">
		<div class="btn-group pull-right" style=" padding: 10px;">
			<div class="dropdown">
  
  
									<a href="#" onclick="$('#employees').tableExport({type:'excel',escape:'false'});"> <img src="images/download.png" width="24px"> Download</a></li>

  
 
</div>
		</div>
	</div>	
	<div class="row" style="height:300px !important;overflow:scroll;">
						<table id="employees" class="table table-striped">
				<thead>			
					<tr class="warning">
						<th>Form no</th>
         <th>Membership No</th>
         <th>Name</th>
         <th>Address</th>
         <th>Tel std</th>
		 <th>Fax</th>
		 <th>Email</th>
		 <th>Mobile No</th>
		 <th>Whatsapp No</th>
		 <th>Office Address</th>
		 <th>Telephone with Std Code</th>
		 <th>Office Fax</th>
		  <th>Office Email</th>
		   <th>Mobile No</th>
		    <th>Date Of Birth</th>
			 <th>Marital Status</th>
			  <th>Date of Marriage Anniversary</th>
			   <th>Blood Group</th> 
			   <th>Education/ Qualification</th> 
			   <th>Enrollment date & Reg. No. under Advocates Act 1961</th> 
			   <th>Association enrolled with as a member</th> 
			   <th>Place/s of Practice</th>
			    <th>Details of Membership of Advocate's Welfare Fund</th>
				 <th>Affiliation of Recognised Consumer Organisation</th>
				 <th>Photo</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($records as $row):?>
				
					<tr><td><?php echo $row['form']; ?></td> 
					<td><?php echo $row['member']; ?></td> 
					<td><?php echo $row['name']; ?></td> 
					<td><?php echo $row['address']; ?></td> 
					<td><?php echo $row['tel_std']; ?></td> 
					<td><?php echo $row['fax']; ?></td> 
				    <td><?php echo $row['email']; ?></td> 
				    <td><?php echo $row['mobile_no']; ?></td> 
				    <td><?php echo $row['whatsapp_no']; ?></td> 
				    <td><?php echo $row['office_address']; ?></td> 
					<td><?php echo $row['otel_std']; ?></td> 
					<td><?php echo $row['ofax']; ?></td>
					<td><?php echo $row['oemail']; ?></td> 
					<td><?php echo $row['omobile_no']; ?></td> 
					<td><?php echo $row['dob']; ?></td> 
					<td><?php echo $row['marital_status']; ?></td> 
					<td><?php echo $row['date_anni']; ?></td> 
					<td><?php echo $row['blood_gr']; ?></td> 
					<td><?php echo $row['education']; ?></td> 
					<td><?php echo $row['enroll_date']; ?></td> 
					<td><?php echo $row['asso_enroll']; ?></td> 
					<td><?php echo $row['pop']; ?></td> 
					<td><?php echo $row['welfare_fund']; ?></td> 
					<td><?php echo $row['org']; ?></td> 
					<td><?php echo"<img src='".$row['photo']."'  width='100' height='100' />";?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
</div>
</div>

</body>
</html>
<script type="text/javascript">
//$('#employees').tableExport();
$(function(){
	$('#example').DataTable();
      }); 
</script>