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
		unlink($row['Upload_Doc']); // for remove image from folder
		header("Location: Update_Remove_Circulars.php");
	}
?>