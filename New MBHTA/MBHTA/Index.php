<?php
header('Refresh: 10;url=http://www.beltshoses.in/');
?>
<!DOCTYPE html>
<html>
<head>
   <title>Welcome to THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</title>
	<link href="http://www.beltshoses.in/wp-content/uploads/2016/01/fav.png" rel="icon" type="image/x-icon" />
            
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href="js/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset "UTF-8";
body{
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	}
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
        header {display:block;padding:60px 0 20px;text-align:center;position:absolute;top:8%;left:8%;z-index:4;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #fff;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;
            background: #C00;
            color: #fff;
        }
		.utt2{
	border: none;
	background: #323232;
	color: #FFFFFF;
	padding: 5px;
	font-size:12px;
	border-radius: 5px;
	width:90px;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	height:30px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
.utt2:hover {
	background: rgba(0,0,0,0);
	color: #323232;
	box-shadow: inset 0 0 0 3px #323232;
}
    </style>
</head>
<body>
   
    <!--start-->
	<center><img src="images/logo.png" style="width:80px;height:80px;"><br>
	<span style="font-weight:bold;">Welcome To</span><br>
	<span style="font-weight:bold;font-size:18px;">THE MAHARASHTRA BELTS & HOSES TRADERS ASSOCIATION</span></center>
    <div id="ninja-slider" style="width:68%; margin-top:10px;">
        <div class="slider-inner">
            <ul>
<?php 
include('Config.php');

 // query for select all products data
	 $query_parent=mysql_query("Select * from slider") or die("Query failed: ".mysql_error());
        
	// fetching all data in table format
         while($r=mysql_fetch_row($query_parent))
         {
			echo "<li>";
            echo "<img class='ns-img' src='$r[1]' width='100%' height='100%'>";
			echo "</li>";
			
		}
?>
            </ul>
           
			
        </div>
		<center>
		<table>
		<tr>
		<td style="border-bottom:3px solid black;width:1200px;text-align:right;padding:3px;">
		<button onclick="parent.location='http://www.beltshoses.in/'" class="utt2"><b>Skip</b></button>
		
		</tr>
		</td>
		</table>
		</center>
    </div>
    <!--end-->
   
</body>
</html>


                   
               
          

