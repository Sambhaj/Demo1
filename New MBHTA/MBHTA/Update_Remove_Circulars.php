<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT * FROM circulars WHERE Circular_ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM circulars WHERE Circular_ID=".$_GET['remove_id']);
		unlink($row['Upload_Doc']); // remove image from folder
		header("Location: Update_Remove_Circulars.php");
	}
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
	text-align:justify;
	}
</style>
<script type="text/javascript">
function remove(id)
{
	if(confirm(' Sure to remove file ? '))
	{
		window.location='Remove_Circulars_Fctn.php?remove_id='+id;
	}
}
</script>
</head>
<body>
<table>

<?php
		$query=("SELECT * FROM circulars");
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$name=$row[3];
	?>
    	
	<tr>
	<td style="background-color:#DADADA;padding:10px;"><?php echo $row['0'];?></td>
	<td style="background-color:#E8E8E8;padding:10px;width:100%;">
	<?php 
	
	echo "<table>";
	echo "<tr>";
	echo "<td>";
	echo "<b style='font-size:16px;text-align:justify;'>$row[1]</b><br>$row[2]<br>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";

?>
	<td style="background-color:#DADADA;padding:10px;"><?php echo "<a href='Download.php?nama=".$name."'><img src='images/download.png' alt='Download' style='float:right;width:30px;height:30px;'></a>"?></td>
	<td style="background-color:#DADADA;padding:10px;"><?php echo "<a href='Update_Circulars_Fctn.php?Circular_ID=" . $row['Circular_ID'] . "'><img src='images/editt.png' alt='Edit' style='float:right;width:30px;height:30px;'></a>";?></td>
	<td style="background-color:#DADADA;padding:10px;"><a href="javascript:remove(<?php echo $row['Circular_ID'] ?>)"><img src="images/delete.png" alt="Delete" style="float:right;width:30px;height:30px;"></a></td>
	</tr>
	<?php
		}
	?>
</table>
</body>
</html>