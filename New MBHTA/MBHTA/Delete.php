<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT Image_Path FROM slider WHERE Image_ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM slider WHERE Image_ID=".$_GET['remove_id']);
		unlink($row['Image_Path']); // for remove image from folder
		header("Location: Remove.php");
	}
?>