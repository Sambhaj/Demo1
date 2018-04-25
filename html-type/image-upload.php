<?php 
	include('config.php'); // // include database file
?>

<?php
$msg="";
$blanck="";
$succes="";
$Sr_no="serial_no";

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

$rtype=$_POST['rtype'];

$rarea=$_POST['rarea'];

$rcost=$_POST['rcost'];

$ctype=$_POST['ctype'];
$carea=$_POST['carea'];
$ccost=$_POST['ccost'];


$project_status=$_POST['project_status'];

$pdate1=$_POST['pdate'];
$pdate=$pdate1.$project_status;

if ($vlink !="")
				{
					$link="http://".$vlink;
				}
				else
				{
					$link="";
				}



 $q=mysql_query("INSERT INTO `tb_specification` (`id`, `spl_type`, `flat_type(R)`, `flat_type(C)`, `carpet_area(R)`, `flat_cost_C`, `flat_cost_R`, `carpet_area(C)`, `possession_date`) VALUES('$id','$spl','$rtype','$ctype','$rarea','$carea','$rcost','$ccost','$pdate')");

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
				$imagename=$_FILES["uploaddoc"]["name"];
				 
				$target_path = "doc/".$imagename;
			
				move_uploaded_file($temp_name, $target_path); 
				 
		 
               
               mysql_query("INSERT INTO  tb_projectinfo(id,project_id,project_name,project_type,location,video_link,address,brochure,gym,temple,swimming_pool,school,garden,lift,club_house,security,hospital,parking) VALUES('$id','$pid','$pname','$ptype','$location','$link','$address','$target_path','$gym','$temple','$swimming','$school','$garden','$lift','$club','$security','$hospital','$parking')");

	 
 if(isset($_FILES['files']))
 { 
          foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name)
		  {
        $target="doc/";
	    $target=$target.$_FILES['files']['name'][$key];
	
            if(move_uploaded_file($tmp_name, $target)){
               
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
<head>
   <link rel="stylesheet" type="text/css" href="css/tcal.css" />
<script type="text/javascript" src="js/tcal.js"></script> 


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
</style>

</head>
<body>
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
<table style="font-family: sans-serif; width: 70%; box-shadow: 0 0 10px rgba(0,0,0,0.6);cellpadding:15px;" border="1px"  cellspacing="8px" cellpadding="5px" class=".table-scrollable">
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
<th style="text-align: left; bold: true; font-size: 25px; height: 20px;" colspan="4"><strong><label>Amenities</label></strong></th>
</tr>
<tr>
<td><input id="event" name="gym"  type="checkbox" value="gym" /> Gym</td>
<td><input id="temple" name="swimming"  type="checkbox" value="swimming_pool" /> Swimming pool</td>
<td><input id="school" name="school"  type="checkbox" value="school" /> School</td>
<td><input id="garden" name="garden" type="checkbox" value="garden" /> Garden</td>
</tr>
<tr>
<td><input id="temple" name="temple"  type="checkbox" value="temple" /> Temple</td>
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
<td colspan="2"><input id="spl" name="spl"  type="radio" value="Residential"  onClick="chMd()" required="required">Residential </td>
<td ><input id="spl" name="spl"  type="radio" value="Commercial" onClick="chMd()" required="required"> Commercial</td>
<td><input id="spl" name="spl"  type="radio" value="Other" onClick="chMd()" checked="checked" required="required"/>Other</td>
</tr>

<tr><td> Flat type (R)</td><td><select id="rtype" style="width: 91%; height: 45px; border-radius: 4px;" name="rtype" disabled="disabled" >
<option value="">--Select--</option>
<option value="1 BHK Flat">1 BHK Flat</option>
<option value="2 BHK Flat">2 BHK Flat</option>
<option value="Other">Other</option>
</select></td>
   <td> Flat type (C)</td><td><select id="ctype" style="width: 91%; height: 45px; border-radius: 4px;" name="ctype" disabled="disabled" >
<option value="">--Select--</option>
<option value="1 BHK Flat">1 BHK Flat</option>
<option value="2 BHK Flat">2 BHK Flat</option>
<option value="Other">Other</option>
</select></td></tr>
<tr>
<td>Carpet area (R)</td>
<td><input name="rarea" id="rarea"  style="width: 90%; height: 30px; border-radius: 4px;" disabled="disabled" type="text" placeholder=" Area in sqft"> 
</td>
<td>Carpet area (C)</td><td><input name="carea" id="carea" style="width: 90%; height: 30px; border-radius: 4px;"  disabled="disabled" type="text" placeholder=" Area in sqft">
  
</td></tr>
<tr>
<td>Cost (R)</td>
<td><input name="rcost" id="rcost" style="width: 90%; height: 30px; border-radius: 4px;"  disabled="disabled" type="text"></td>
<td>Cost  (C)</td>
<td><input name="ccost" id="ccost" style="width: 90%; height: 30px; border-radius: 4px;"  disabled="disabled" type="text"></td>
</tr>

<tr>
<td><label>Possession Date</label></td>
<td colspan="">
    <input type="radio" id="project_status" name="project_status"  value="Under Construction" onclick="ShowHideDiv()" /><label> Under Construction</label>
    <input type="radio" id="project_status" name="project_status" value="Ready" onclick="ShowHideDiv()" /><label>Ready</label><br>
<div id="pdate1" style="display: none">
 
    <input type="text" id="pdate" name="pdate" class="tcal" style="width: 90%; height: 30px; border-radius: 4px;" placeholder="Enter The Date">
</div>

</td>
</tr>

<tr>
<td colspan="2" ><input id="btn" style="width: 100%;" name="submit" type="submit" value="Submit" /></td>
<td colspan="2"><input id="btn" style="width: 100%;" name="cancel" type="submit" value="Cancel" /></td>

</tr>
		 
		</table> </center>
		</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $blanck; ?></span><span style="color:#5DB047;font-weight:bold;"><?php   echo $succes;?></span></center><br>
 <br><br>
 
 


</body>
</html>