<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT * FROM news WHERE News_ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM news WHERE News_ID=".$_GET['remove_id']);
		unlink($row['Image']); // remove image from folder
		header("Location: Update_Remove_News.php");
	}
?>
<!DOCTYPE html>
<!--BEGIN html-->
<html lang="en-US">
<head>
<script type="text/javascript">
function remove(id)
{
	if(confirm(' Sure to delete file ? '))
	{
		window.location='Remove_News_Fctn.php?remove_id='+id;
	}
}
</script>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset "UTF-8";
body{
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	text-align:justify;
	}
</style>
</head>
<body>
<table>
	<?php
		$query=("SELECT * FROM news");
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
	?>
	<tr>
	<td style="background-color:#DADADA;padding:10px;"><?php echo $row['0'];?></td>
	<td style="background-color:#E8E8E8;padding:10px;width:100%;">
	<?php 
	echo "<table>";
	echo "<tr>";
	echo "<td style='width:180px;height:120px;'>";
	echo "<img src='$row[3]' width='100%' height='100%'>";
	echo "</td>";
	echo "<td>";
	echo "<b style='font-size:16px;text-align:justify;'>$row[1]</b><br>$row[2]";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	?>
	</td>
	<td style="background-color:#DADADA;padding:10px;"><?php echo "<a href='Update_News_Fctn.php?News_ID=" . $row['News_ID'] . "'><img src='images/editt.png' alt='Edit' style='float:right;width:30px;height:30px;'></a>";?></td>
	<td style="background-color:#DADADA;padding:10px;"><a href="javascript:remove(<?php echo $row['News_ID'] ?>)"><img src="images/delete.png" alt="Delete" style="float:right;width:30px;height:30px;"></a></td>
	</tr>
	<?php
		}
	?>
</table>
</body>
</html>
