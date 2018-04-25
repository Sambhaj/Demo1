
<!DOCTYPE html>
<html>
<head>
<title>PHP Email Verification Script</title>
<link href="css/style.css" rel="stylesheet">
<style>
*----- Below line is to import Google fonts in our page. -------------*/
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
/*---------- CSS For the required HTML elements---------*/
#mainform{
width:960px;
margin:30px auto;
padding-top:20px;
font-family:'Fauna One',serif;
text-align:center
}
#mainform h2{
width:480px
}
#form{
background-color:#fff;
color:#123456;
box-shadow:0 1px 1px 1px gray;
font-weight:400;
width:480px;
margin:70px 0 0;
height:300px
}
h3{
margin-top:0;
color:#fff;
background-color:#1CC32B;
text-align:center;
width:100%;
height:50px;
padding-top:30px
}
input{
width:300px;
height:30px;
margin-top:10px;
border-radius:3px;
padding:2px;
box-shadow:0 1px 1px 0 #a9a9a9
}
input[type=submit]{
background-color:#1CC32B;
border:1px solid #fff;
font-family:'Fauna One',serif;
font-weight:700;
font-size:18px;
color:#fff;
margin-left:60px
}
#message{
width:100%px;
margin-top:50px;
font-size:14px
}
#alert{
margin-top:10px
}
#one{
padding:5px;
color:red
}
#two{
padding:5px;
color:green
}
#three{
padding:5px;
color:red
}
#innerdiv{
float:left;
width:50%;
height:500px;
padding:50px 30px 30px;
margin-top:30px
}
</style>
</head>
<body>
<div id="mainform">
<div id="innerdiv">
<!-- Required Div Starts Here -->
<h2>PHP Email Verification</h2>
<form action="" id="form" method="get" name="form">
<h3>Email Verification Form</h3>
<label>Name :</label>
<input id="name" name="name" placeholder="Name" type="text">
<label>Email :</label>
<input id="email" name="email" placeholder="Email" type="text">
<input id="submit" name="submit" type="submit" value="Verify">
<div id="alert">
<?php 
	include('config.php'); // // include database file
?>
<?php
if (isset($_GET['submit'])) {
if (empty($_GET['name']) || empty($_GET['email'])) {
echo '<span id="one">***Fill All Fields***</span>';
} else {
$name2 = $_GET['name'];
$email2 = $_GET['email'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server

$query = mysql_query("select * from india where email='$email2'", $connection); // My-SQL Query to fetch particular matching row.
$rows = mysql_num_rows($query);
if ($rows == 1) {
echo '<span id="two">***Email Verification Success***</span>';
} else {
echo '<span id="three">***Email Verification Failed***</span>';
}
}
}
?>
</div>
</form>
</div>
</div>
</body>
</html>