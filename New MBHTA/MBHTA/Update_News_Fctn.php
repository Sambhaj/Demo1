<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
$target_path='';
function renderForm($id, $target_path, $Head, $Desc, $error,$msg)
 {
?>
<!DOCTYPE html>
<!--BEGIN html-->
<html lang="en-US">
<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset "UTF-8";
body{
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	}
Input[type="text"] {
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
	font-size: 14px;
  border-radius: 3px;
  border: solid 1px #E7E7E7;
  box-shadow: inset 1px 1px 1px 1px #D5D5D5;
  transition: box-shadow 0.3s;
}
input[type="text"]:focus,
input[type="text"].focus {
	 border-radius: 3px;
  box-shadow: inset 1px 1px 1px 1px #c9c9c9;
}
.textar {
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
	font-size: 14px;
  border-radius: 3px;
  border: solid 1px #E7E7E7;
  box-shadow: inset 1px 1px 1px 1px #D5D5D5;
  transition: box-shadow 0.3s;
}
.textar:focus,
.textar.focus {
	 border-radius: 3px;
  box-shadow: inset 1px 1px 1px 1px #c9c9c9;
}
.utt2{
	border: none;
	background: #323232;
	color: #FFFFFF;
	padding: 5px;
	font-size:15px;
	border-radius: 5px;
	width:80px;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	height:30px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
.utt2:hover {
	background: #0FB59F;
	color: #FFFFFF;
	box-shadow: inset 0 0 0 3px #0FB59F;
}
</style>
</head>
<body>
 <form action="" method="post" enctype="multipart/form-data">
 <table>
 <tr>
 <td><input type="hidden" name="id" value="<?php echo $id; ?>"/></td>
 </tr>
 <tr>
 
 <td style="background-color:#DADADA;padding:10px;"><?php echo $id; ?></td>
 <td style="background-color:#E8E8E8;padding:10px;"><?php echo "<img src='$target_path' width='250' height='200'>"; ?><br>
 <b>Change Image:</b><br><br><input name="uploadimage"  type="file"></td>
 <td style="background-color:#E8E8E8;padding:10px;width:100%;"><b>Heading:</b><br><input type="text" style="width:90%;text-align:justify;" name="Head" value="<?php echo $Head; ?>"/><span style="color:red;"><?php echo $msg;?></span><br><br>
 <b>Description:</b><br><textarea rows="10" name="Desc" style="width:90%;text-align:justify;" class="textar"><?php echo $Desc; ?></textarea><span style="color:red;"><?php echo $msg;?></span>
 <br>&nbsp;<input type="submit" class="utt2" name="submit" value="Save">&nbsp;&nbsp; <a href="Update_Remove_News.php"><input type="button" class="utt2" value="Cancel"></a>
 </td>
 
 </tr>


 <tr>
<td colspan="3"><center><span style="color:red;"><?php echo $error;?></span></center>
 </td>
 </tr>
 </table>
 </form> 

<?php
 }
 if (isset($_POST['submit']))
 { 
	function GetImageExtension($imagetype)
	{
		if(empty($imagetype)) return false;
		switch($imagetype)
		{
			case 'image/bmp': return '.bmp';
			case 'image/gif': return '.gif';
			case 'image/jpeg': return '.jpg';
			case 'image/png': return '.png';
			default: return false;
		}
	}
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['id']))
 {
	$id = $_POST['id'];
	$Head = mysql_real_escape_string(htmlspecialchars($_POST['Head']));
	$Desc = mysql_real_escape_string(htmlspecialchars($_POST['Desc']));
 
	if ($Head == '' || $Desc == '')
	{
		$msg="*";
		$error = 'Please fill in all required fields!';
		renderForm($id, $target_path, $Head, $Desc, $error,$msg);
	}
	else
	{
		mysql_query("UPDATE news SET Headlines='$Head', Details='$Desc' WHERE News_ID='$id'") or die(mysql_error()); 
		header("Location: Update_Remove_News.php"); 
  
		if (!empty($_FILES["uploadimage"]["name"]))
		{
			// for image upload
			$file_name=$_FILES["uploadimage"]["name"];
			$temp_name=$_FILES["uploadimage"]["tmp_name"];
			$imgtype=$_FILES["uploadimage"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename=$_FILES["uploadimage"]["name"];
			$target_path = "upload/news/".$imagename;
			
			if(move_uploaded_file($temp_name, $target_path)) 
			{
				$res=mysql_query("SELECT * FROM news WHERE News_ID='$id'");
				$row=mysql_fetch_array($res);
				unlink($row['Image']);
				mysql_query("UPDATE news SET Image='$target_path' WHERE News_ID='$id'") or die(mysql_error()); 
				header("Location: Update_Remove_News.php"); 
			}	
		}
	}
 }
 }
else
 {
	if (isset($_GET['News_ID']) && is_numeric($_GET['News_ID']) && $_GET['News_ID'] > 0)
	{
		// query db
		$id = $_GET['News_ID'];
		$result = mysql_query("SELECT * FROM news WHERE News_ID=$id") or die(mysql_error()); 
		$row = mysql_fetch_array($result);
		
		if($row)
		{
			// get data from db
			$Head = $row['Headlines'];
			$Desc = $row['Details'];
			$target_path = $row['Image'];
 
			// show form
			renderForm($id, $target_path, $Head, $Desc, '','');
		}
		else
		{
			echo "No results!";
		}
	}
	else
	{
	echo 'Error!';
	}
 }
 
?>
</body>
</html>