<?php
//******For Logout******
	session_start();
	unset($_SESSION["id"]);
	unset($_SESSION["username"]);
	header("Location:admin_login.php");
?>