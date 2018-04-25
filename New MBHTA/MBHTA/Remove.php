<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
//********End Database connection*********
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT Image_Path FROM slider WHERE Image_ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM slider WHERE Image_ID=".$_GET['remove_id']);
		unlink($row['Image_Path']); // remove image from folder
		header("Location: Remove.php");
}?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<head>
<script type="text/javascript">
function remove(id)
{
	if(confirm(' Sure to remove file ? '))
	{
		window.location='delete.php?remove_id='+id;
	}
}
</script>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset "UTF-8";
body{
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	}
</style>
</head>
<body>
	<table>
	<?php
		$query=("SELECT * FROM Slider");
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
	?>
	<tr>
	<td style="background-color:#DADADA;padding:10px;"><?php echo $row['0'];?></td>
	<td style="background-color:#E8E8E8;padding:10px;width:100%;text-align:center;"><?php echo "<img src='$row[1]' width='200' height='100'>";?></td>
	<td style="background-color:#DADADA;padding:10px;"><a href="javascript:remove(<?php echo $row['Image_ID'] ?>)"><img src="images/delete.png" alt="Delete" style="float:right;width:30px;height:30px;"></a></td>
	</tr>
	<?php
		}
	?>
	</table>
</body>
</html>