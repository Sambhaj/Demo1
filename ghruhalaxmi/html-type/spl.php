<?php 
	include('config.php'); // // include database file
?>
	<?php session_start();
	if(isset($_SESSION['id']))  
		
		{
			
			$a=$_SESSION['id'];
			
		}
	?>

<?php
$blanck="";
$succes="";
if(isset($_GET['pid']))
{
   $id = $_GET['pid'];

}

if(isset($_POST['send']))
{

$ftype=$_POST['ftype'];
$area=$_POST['area'];
$cost=$_POST['cost'];
$pdate1=$_POST['pdate'];
$project_status=$_POST['project_status'];

$pdate=$pdate1.':'.$project_status;


function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'application/pdf': return '.pdf';
				case 'application/msword': return '.doc';
				case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': return '.docx';
				case 'application/txt': return '.txt';
				case 'application/vnd.ms-excel': return '.xls';
				case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': return '.xlsx';
				case 'application/vnd.ms-powerpoint': return '.ppt';
				case 'application/zip': return '.zip';
				
				default: return false;
				}
			}
			
	 			// for image upload
				$file_name=$_FILES["uploaddoc"]["name"];
				$temp_name=$_FILES["uploaddoc"]["tmp_name"];
				$imgtype=$_FILES["uploaddoc"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename1=$_FILES["uploaddoc"]["name"];
				  $imagename=$a.'spl'.'-'.$imagename1;
				$target_path = "doc/spl/".$imagename;
			
				move_uploaded_file($temp_name, $target_path); 	
				 $q=mysql_query("INSERT INTO `tb_temp` (`flat_type`, `carpet_area`, `cost`, `pdate`, `photo`) VALUES ('$ftype', '$area', '$cost', '$pdate', '$target_path');");
				 
echo "<script type=\"text/javascript\" charset=\"utf-8\">window.self.close()</script>";				 
				 $succes = "Data Save Successfully";
	}
			else
			{
				$msg="*";
				$blanck="Please Fill In All Mandatory Fields!";
			}
	
	




   ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="js/tcal.js"></script> 




<style>
#btn{
  margin: 0 auto;
  width:100px;
  font-size:17px;
  height:45px;
  font-weight: bold;
  background-color: #db2723;
  border: 1px solid transparent;
  text-decoration:none;
  color: white;
 cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #db2723;
   font-size:20px;
  border-color: #db2723;
  text-decoration:none;
}


body{
	
	font-size: 14px;
    margin: 15px 0px;
    font-weight: 200;
    max-height: 100px;
    overflow: auto;
    color: #1a1a1a;
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
</style>

</head>
<body>
<div class="col-md-12"  >
<center><img src="images/logo-2.png" ></center>
</div>


<script type="text/javascript">
    function ShowHideDiv() {
        var project_status = document.getElementById("project_status");
        var pdate1 = document.getElementById("pdate1");
        pdate1.style.display = project_status.checked ? "block" : "none";
    }
</script>
</script>
<center>
<form method="POST" action="" name=""  enctype="multipart/form-data"> 
<center>
<table style="font-family: sans-serif; width: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.6);cellpadding:15px;" border="1px"  cellspacing="8px" cellpadding="5px" class=".table-scrollable">
<thead >
<tr>
<th style="height: 40px; text-align: center; ;padding: 20px 20px 8px 20px; color: #ffffff; background-color: #db2723;" colspan="4"><label style="font-size: 25px;"><b>Project Information</b></label>
</th>
</tr>

</thead>
<tbody style="padding:15px;cellspacing:15px">
<tr>
<th style="text-align: left; bold: true; font-size: 25px; height: 20px;" colspan="4"><strong><label>Specification</label></strong></th>
</tr>
<tr><td> Flat type </td><td>
 <select style="width: 90%; height: 30px; border-radius: 4px;" name="ftype" id="ftype"  >
 
  <option  value="">Select</option>
 <option value="1 RK">1 RK</option>
<option value="1 BHK Flat">1 BHK Flat</option>
<option value="1.5 BHK Flat">1.5 BHK Flat</option>
<option value="2 BHK Flat">2 BHK Flat</option>
<option value="2.5 BHK Flat">2.5 BHK Flat</option>
<option value="3 BHK Flat">3 BHK Flat</option>
<option value="4 BHK Flat">4 BHK Flat</option>
<option value="Studio Apartment">Studio Apartment</option>
</select>
</td>
   </tr>
<tr>
<td>Area </td>
<td><input name="area" id="area"  style="width: 90%; height: 30px; border-radius: 4px;"  type="text" placeholder=" area in sqft"> 
</td>
  
</tr>
<tr>
<td>Cost </td>
<td><input name="cost" id="cost" style="width: 90%; height: 30px; border-radius: 4px;"   type="text"></td>

</tr>

<tr>
<td><label>Possession Date</label></td>
<td colspan="">
    <input type="radio" id="project_status" name="project_status"  value="Under Construction" onclick="ShowHideDiv()" /><label> Under Construction</label>
    <input type="radio" id="project_status" name="project_status" value="Ready" onclick="ShowHideDiv()" /><label>Ready</label><br>
<div id="pdate1" style="display: none" >
 
    <input type="text" id="pdate" name="pdate" class="tcal" style="width: 90%; height: 30px; border-radius: 4px;" placeholder="Enter The Date">
</div>

</td>
</tr>
<tr>
<input name="id"  value="<?php echo $id;?>" hidden="true" >	
		<td >Photo  </td>
		<td>
		<br><input name="uploaddoc" type="file" accept="image/pdf">
		</td>
		</tr>

<tr>
<td colspan="2" ><input id="btn" style="width: 100%;" name="send" type="submit" value="Send" /></td>
</tr>
</table> </center>
</form>
<br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $blanck; ?></span><span style="color:#5DB047;font-weight:bold;"><?php   echo $succes;?></span></center><br>
 <br><br>
</body>
</html>