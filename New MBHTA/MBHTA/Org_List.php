<?php 
include('Config.php'); // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php

//******Connection for second dropdown list*******

	if($parent_cat = $_GET['parent_cat'])
	{
		$query = mysql_query("SELECT Membership_No FROM data_entry WHERE Organization_Name LIKE '%$_GET[parent_cat]%' ORDER BY Organization_Name ASC");
		while($row = mysql_fetch_row($query)) 
		{
			echo "<option value='$row[0]'>$row[0]</option>"; // fetching all values of product name from database
		}
	}

//******End connection for second dropdown list*******
?>