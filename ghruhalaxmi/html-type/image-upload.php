<?php 
	include('config.php'); // // include database file
?>

<?php
$msg="";
$blanck="";
$succes="";
session_start(); //start user session
$id="";
$new = mysql_query( "select MAX(id)from tb_projectinfo" );
$row = mysql_fetch_array( $new);
$id = $row[0];
 if($id==0)
 {
	$id=1; 
 }
 else
 {
	 $id=$id+1;
 }

 $_SESSION["id"] = $id;
if(isset($_POST['submit']))
	{
		// declare all variable
		$Sr_no="serial_no";

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$location=$_POST['location'];
$vlink=$_POST['vlink'];
$flat=$_POST['flat'];
$area=$_POST['area'];
$gym=$_POST['gym'];
$swimming=$_POST['swimming'];
$school=$_POST['school'];
$garden=$_POST['garden'];  
$temple=$_POST['temple'];
$commercial=$_POST['commercial'];
$hospital=$_POST['hospital'];
$parking=$_POST['parking'];
$address=$_POST['address'];
$lift=$_POST['lift'];
$club=$_POST['club'];
$security=$_POST['security'];
$spl=$_POST['spl'];



		$result2=mysql_query("select * from tb_temp");
				
         $num_rows = mysql_num_rows($result2);
       
		while ($row = mysql_fetch_array($result2)) {
   

			
			$rtype=$row['flat_type'];
		
			$carea=$row['carpet_area'];
			$ccost= $row['cost'];
			$pdate1= $row['pdate'];
			$img =$row['photo'];

			 $q=mysql_query("INSERT INTO `tb_specification` (`id`, `spl_type`, `flat_type`, `flat_cost`, `carpet_area`, `possession_date`, `flat_img`) VALUES ('$id','$spl','$rtype', '$ccost', '$carea', '$pdate1', '$img');");
			 $p=mysql_query("delete from tb_temp");
		}

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
				   $imagename=$id.'brochure'.'-'.$imagename1;
				$target_path = "doc/brochure/".$imagename;
			
				move_uploaded_file($temp_name, $target_path); 
				
				
				$file_name=$_FILES["uploaddoc1"]["name"];
				$temp_name=$_FILES["uploaddoc1"]["tmp_name"];
				$imgtype=$_FILES["uploaddoc1"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename2=$_FILES["uploaddoc1"]["name"];
				   $imagename3=$id.'main_project'.'-'.$imagename2;
				$target_path2 = "doc/project_img/".$imagename3;
			
				move_uploaded_file($temp_name, $target_path2); 
				
				   

				
               mysql_query("INSERT INTO  tb_projectinfo(id,project_id,project_name,project_type,location,video_link,address,brochure,gym,temple,swimming_pool,school,garden,lift,club_house,security,hospital,parking,pic_temp) VALUES('$id','$pid','$pname','$ptype','$location','$vlink','$address','$target_path','$gym','$temple','$swimming','$school','$garden','$lift','$club','$security','$hospital','$parking','$target_path2')");

	 
 if(isset($_FILES['files']))
 { 
          foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name)
		  {
			  
        $target="doc/";
	    $target=$target.$id.'-'.$_FILES['files']['name'][$key];
	
            if(move_uploaded_file($tmp_name, $target))
			{
               
               mysql_query("INSERT INTO tb_images(id,photo) VALUES('$id','$target')");
			    
			}
		  }
 }
 
 

 
 
	$succes = "Data Save Successfully";
	$_POST = array();			 
	}
			else
			{
				$msg="*";
				$blanck="Please Fill In All Mandatory Fields!";
			}
	
	 
?>


<!DOCTYPE html>
<html lang="en">
<title>
Gruhalaxmi Associates
</title>
<head>
  <link rel="shortcut icon" type="image/png" href="images\logo-2.png" width="16" height="16"/>
  <link rel="stylesheet" type="text/css" href="css/tcal.css" />
  <script type="text/javascript" src="js/tcal.js"></script> 
  <meta name="description" content="Builders Commercial Real Estate Projects Land Developers Home Offices">
  <meta name="description" content="Mumbai Navi Mumbai Thane Kalyan Dombivli">

</script>

<script>
 function chMd()
 {
  // initialize form with empty field
  document.forms[0].rtype.disabled=false;
  document.forms[0].rtype.value="";
 
  document.forms[0].rarea.disabled=false;
  document.forms[0].rarea.value="";
 
document.forms[0].rcost.disabled=false;
  document.forms[0].rcost="";
 
  document.forms[0].submit.disabled=false;
 
  for(var i=0;i<document.forms[0].elements.length;i++)
  {
    if(document.forms[0].elements[i].name=="spl")
    {
     if(document.forms[0].elements[i].value=="Other")
     {
       if(document.forms[0].elements[i].checked==true){
 
        document.forms[0].rtype.disabled=true;
        document.forms[0].rarea.disabled=true;
        document.forms[0].rcost.disabled=true;

 
        document.forms[0].ctype.disabled=true;
        document.forms[0].carea.disabled=true;
        document.forms[0].ccost.disabled=true;
        document.forms[0].project_status.disabled=true;

        document.forms[0].submit.disabled=true;
       }
     }
     else if(document.forms[0].elements[i].value=="Residential")
     {
       if(document.forms[0].elements[i].checked==true){
        document.forms[0].rtype.disabled=false;
        document.forms[0].rarea.disabled=false;
        document.forms[0].rcost.disabled=false;

 
        document.forms[0].ctype.disabled=true;
        document.forms[0].carea.disabled=true;
        document.forms[0].ccost.disabled=true;
 
        document.forms[0].submit.disabled=false;
       }
     }
     else if(document.forms[0].elements[i].value=="Commercial")
     {
       if(document.forms[0].elements[i].checked==true){
        document.forms[0].rtype.disabled=true;
        document.forms[0].rarea.disabled=true;
        document.forms[0].rcost.disabled=true;
 
        document.forms[0].ctype.disabled=false;
        document.forms[0].carea.disabled=false;
        document.forms[0].ccost.disabled=false;
 
        document.forms[0].submit.disabled=false;
       }
     }
    }
  }
 }
</script>

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
<center>
<form method="POST" action="" name="fRadio"  enctype="multipart/form-data"> 
<center>
<table style="font-family: sans-serif; width: 80%; box-shadow: 0 0 10px rgba(0,0,0,0.6);cellpadding:15px;border:1px ridge"   cellspacing="8px" cellpadding="5px" class=".table-scrollable">
<thead >
<tr>
<th style="height: 40px; text-align: center; ;padding: 20px 20px 8px 20px; color: #ffffff; background-color: #db2723;" colspan="4"><label style="font-size: 25px;"><b>Project Information</b></label>
</th>
</tr>

</thead>
<tbody style="padding:15px;cellspacing:15px">
<input name="id"  value="<?php echo $id;?>" hidden="true" >
<tr>
<th style="text-align: left; bold: true; font-size: 25px; height: 20px;" colspan="4"><strong><label>Site Details</label></strong></th>
</tr>
<tr >

<td ><label>Project Id</label></td>
<td><input id="pid" style="width: 90%; height: 30px; border-radius: 4px;" name="pid" required="required" type="text" placeholder="" /></td>
<td><label>Location</label></td>
<td><input id="location" style="width: 90%; height: 30px; border-radius: 4px;" name="location" required="required" type="text" /></td>
</tr>
<tr>
<td><label>Project Name</label></td>
<td><input id="email" style="width: 90%; height: 30px; border-radius: 4px;" name="pname" required="required" type="text" /></td>
<td><label>Address</label></td>
<td colspan=""><input id="address" style="width: 90%; height: 30px; border-radius: 4px;" name="address" type="text" /></td>
</tr>
<tr>
<td><label>Video Link</label></td>
<td colspan=""><input id="vlink" style="width: 90%; height: 30px; border-radius: 4px;" name="vlink"  type="text" placeholder="" /></td>
<td><label>Project Type</label></td>
<td><select id="ptype" style="width: 91%; height: 45px; border-radius: 4px;" name="ptype" required="required">
<option value="">--Select--</option>
<option value="Residential">Residential</option>
<option value="Commercial">Commercial</option>
<option value="other">Other</option>
</select></td>

</tr>
<tr>
<input name="id"  value="<?php echo $id;?>" hidden="true" >
	
		<td >Photo  </td>
		<td>
		<br><input name="files[]" type="file" multiple="true" accept="image/x-png,image/gif,image/jpeg" required="required">
		</td>
		<td >Brochure  </td>
		<td>
		<br><input name="uploaddoc" type="file" accept="image/pdf">
		</td>
		</tr>
		<tr>
<th style="color: #333;font-size: 26px;font-weight: 300;text-align:left" colspan="4"><strong><label>Amenities</label></strong></th>
</tr>
<tr>
<td><input id="event" name="gym"  type="checkbox" value="gym" /> Gym</td>
<td><input id="temple" name="swimming"  type="checkbox" value="swimming_pool" /> Swimming pool</td>
<td><input id="school" name="school"  type="checkbox" value="school" /> School</td>
<td><input id="garden" name="garden" type="checkbox" value="garden" /> Garden</td>
</tr>

<tr>
<td><input id="temple" name="temple"  type="checkbox" value="temple" />Temple</td>
<td><input id="hospital" name="hospital"  type="checkbox" value="hospital" /> Hospital</td>
<td><input id="lift" name="lift" type="checkbox" value="lift" /> lift</td>
<td><input id="club" name="club"  type="checkbox" value="club_house" />  Club house</td>
</tr>

<tr>
<td><input id="security" name="security"  type="checkbox" value="security" /> Security</td>
<td><input id="parking" name="parking"  type="checkbox" value="parking" /> Parking</td>

</tr>
<tr>
</tr>
<tr>
<th style="text-align: left; bold: true; font-size: 25px; height: 20px;" colspan="4"><strong><label>Specification</label></strong></th>
</tr>
<tr>
<td colspan="2"><input id="spl" name="spl"  type="radio" value="Residential"   required="required">Residential </td>
<td ><input id="spl" name="spl"  type="radio" value="Commercial" required="required"> Commercial</td>
<td><input id="spl" name="spl"  type="radio" value="Other"  checked="checked" required="required"/>Other</td>
</tr>

<tr><td> Flat type </td><td>
 <select  name="rtype" id="rtype" onChange="window.open('spl.php?src=' + document.dropform.dropdown.options[document.dropform.dropdown.selectedIndex].value, 'largerImage', 'height=500, width=620, top=20, left=250, toolbar=no, menubar=no, location=no, resizable=no, scrollbars=no, status=no')">
 
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
<td>Project Banner</td>
<td><input type="file" id="uploaddoc1" name="uploaddoc1"></td>
   </tr>
<tr>
<td colspan="2" ><input id="btn" style="width: 100%;" name="submit" type="submit" value="Submit" /></td>
<td colspan="2" style="text-align:center;background-color: #db2723;color:white;font-size:20px"> <a href="delete_page.php" name="delete" id="btn"><strong>Delete</strong></a></td>

</tr>
</table> </center>
</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $blanck; ?></span><span style="color:#5DB047;font-weight:bold;"><?php   echo "<script>alert('$succes')</script>";?></span></center><br>
 <br><br>
 
 <form name="dropform"><select name="dropdown" hidden="true" onChange="window.open('http://www.example.com/showphp.php?src=' + document.dropform.dropdown.options[document.dropform.dropdown.selectedIndex].value, 'largerImage', 'height=500, width=750, top=50, left=2500, toolbar=no, menubar=no, location=no, resizable=no, scrollbars=no, status=no')">
<option value="1 RK">1 RK</option>
<option value="1 BHK Flat">1 BHK Flat</option>
<option value="1.5 BHK Flat">1.5 BHK Flat</option>
<option value="2 BHK Flat">2 BHK Flat</option>
<option value="2.5 BHK Flat">2.5 BHK Flat</option>
<option value="3 BHK Flat">3 BHK Flat</option>
<option value="4 BHK Flat">4 BHK Flat</option>
<option value="Studio Apartment">Studio Apartment</option>

</select>
 </form>


</body>
</html>