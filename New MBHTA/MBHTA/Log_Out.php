<?php
//******For Logout******
	session_start();
	unset($_SESSION["Admin_ID"]);
	unset($_SESSION["Admin_Name"]);
	header("Location:Admin_Login.php");
?>