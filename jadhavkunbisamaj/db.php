<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$hostname_db = "localhost";
$database_db = "jadhavkunbisamaj";
$username_db = "root";
$password_db = "";
$dsn = mysql_connect($hostname_db, $username_db, $password_db) ; 


if(!@$dsn || !@mysql_select_db("jadhavkunbisamaj"))
{

}
else
{

}
 

?>