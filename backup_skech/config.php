<?php

//********Database connection*******

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'utsavjph_skechers'); 
define('DB_USER','utsavjph_skecher'); 
define('DB_PASSWORD','Skch!@#1'); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

//********End Database connection*********

?>