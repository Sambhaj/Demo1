<?php 
	include('config.php'); // // include database file
?>
<?php
	session_start(); //start user session
	$message="";
	
	if(count($_POST)>0) 
	{
	 


	$result = mysql_query("SELECT * FROM tb_admin WHERE BINARY username='" . $_POST["username"] . "' and BINARY password = '". $_POST["password"]."'");
	$row  = mysql_fetch_array($result);
	
	if(is_array($row)) 
	{
		$_SESSION["id"] = $row[id];
		$_SESSION["username"] = $row[username];
	} 
	else 
	{
		$message = "Invalid Username or Password!"; // if user invalid
	}
	}

	if(isset($_SESSION["username"])) 
	{
		header("Location:admin_dashboard.php"); // if user valid it redirect to the home page
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome to Ravi Wakode Sir's Banking Institute</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" type="image/png" href="images/ico/logo1.png"  width="16" height="16">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<style>
   table {
           background-color:#FFFFFF;
            width:350px;
            height:100px;
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            border-radius:20px;
        }
        th {
            background-color:#99b3ff;
            padding:15px;
           border-top-left-radius: 20px;
           border-top-right-radius:20px;
        }
        td {
             padding:15px;
        }
		
		#btn{
  margin: 0 auto;
  width:100px;
  height:45px;
  font-weight: bold;
  background-color: #99b3ff;
  border: 1px solid transparent;
  text-decoration:none;
  color: #003366;
 cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #146b85;
   font-size:15px;
  border-color: #000000;
  text-decoration:none;
}

 
 </style>
	</head><!--/head-->

<body >

    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <!--/.nav-collapse -->
            </div>
        </div>
    </header><!--/header-->
<!----Start header banner----->
 
<!----End header banner----->
<!----Start Main Contents---------->
 <div class="container-fluid"> 
 <div class="container" style=""><br><br><br>
 <form method="POST" action="" enctype="multipart/form-data"> 
  <center>
    <table style="width:28%;">
         <tr>
             <th style="height:50px;text-align:center;font-size:20px"> Admin Login</th>
         </tr>
        
         <tr>
            
                <td ><input style="width:88%;" placeholder="Enter Your Username" type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
         </tr>
         <tr>
              
                <td ><input style="width:88%;" type="password" placeholder="Enter Your Password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"></td>
         </tr>
         <tr>
            <td><input type="submit" name="submit" id="btn"  style="width:100%;font-size:20px" value="Login" ></td>
	     </tr>
        
    </table>		

 </center>
</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div><br>
 </div>
<!----End Main Contents---------->
 
<!--/#bottom-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://sednainfosystems.com/" >Sedna</a>. All Rights Reserved.
                </div>
               
            </div>
        </div>
    </footer><!--/#footer-->
    
    
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>