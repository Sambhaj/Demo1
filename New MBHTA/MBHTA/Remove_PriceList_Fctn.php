<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT * FROM list WHERE ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM list WHERE ID=".$_GET['remove_id']);
		unlink($row['Upload_Doc']); // for remove image from folder
		header("Location: Remove_PriceList.php");
	}
?>