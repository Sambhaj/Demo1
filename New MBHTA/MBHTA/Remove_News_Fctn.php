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
		unlink($row['Image']); // for remove image from folder
		header("Location: Update_Remove_News.php");
	}
?>