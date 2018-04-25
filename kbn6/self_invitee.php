<?php
include('config.php');
?>

<?php

session_start(); //start user session
	$message="";
$Sr_no="serial_no";
$rdate="reg_date";
$name="name";
$address="home_address";
$location="location";
$pincode="pincode";
$landline="landline_no";
$Mobile="mobile_no";
$bdate="birth_date";
$ekda="ekda";
$email="email";
$trade="trade_type";
$tname="trade_name";
$taddress="trade_address";  
$tlocation="trade_location";
$trade_pincode="trade_pincode";
$tdesignation="trade_designation";
$mobile_1="trade_mobile_1";
$mobile_2="trade_mobile_2";
$temail_2="trade_email";
$twebsite="trade_website";
$tdescription="trade_description";
$rname_1="ref_name_1";	
$rmob_1="ref_mob_1";
$rname_2="ref_name_2";
$admin="area_admin";
$tdate="fill_date";	

{	
  	 $query = "SELECT * FROM tbself_invitee ORDER BY reg_date DESC";
	 $search_result = filterTable($query);
 }

  // function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "kbn");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
       <title>KHADAYATA COMMUNITY BUSINESS FORUM</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />

<link rel="shortcut icon" type="image/png" href="images\KBN logo.png" width="16" height="16"/>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   <link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="js/tcal.js"></script> <script type="text/javascript" src="js/tcal.js"></script>   <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/npm.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />


	<style>
	table{
		width:10%;
	}
	</style>
	
</head>
<!----End Header----->
 <body  >
 
 <div class="main">
 <div class="header">
    <div class="header_resize">
      <div class="rss">
        <p><a href="#"></a> <a href="#"></a></p>
      </div>
      <div class="logo">
	  <h1><a href="index.html"><img src="images/logo.png" alt="logo"><br><br><br><br><br><br></a> </h1>
      </div>
 </div>
 </div>
 <br><br>
   <div class="row" style="padding:5px 15px 5px 5px;background-color:#e6e6e6;Font-size:20px;width:101%">
	   <div class="col-md-12">
	 
					  <!-- TITLE /*  */-->
					  <table  style="width:100%">
					   <tr><td Align=center width="40px" >
                          <a href="dashboard.php"><img src="images\13.png" height="30px" ></td>
          
                         <td>Welcome <?php echo $_SESSION['username']; ?></td>				 
					     <td Align=right><a href="logout.php" tite="Logout" data-toggle="tooltip"><img src="images\logout.png" height="30px" style="" ></a></td>
					   </tr>
					  </table>
                         						
        </div>
    </div>                      
							
 

<br><br><br>
          <div class="container">
            <div class="row"  >
			<div class="col-md-4">
			</div>
   		      <div class="col-md-4" >
                 <div style=" width: 100%; font-size: 12px; overflow: auto;">
                 <table class = "table table-striped" border="" width="100px" style="padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                   <tr style="background-color: #146b85;color:white;border:px solid black; width:20%">
                    <th>Register Date</th>
                    <th>Name</th>
                    <th>Mobile No</th>
				   </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):	?>
				    <tr  style="background-color: ;border:px solid black; width:10%">
                      <td><?php echo $row[0];?></td>
                      <td><?php echo $row[1];?></td>
                      <td><?php echo $row[2];?></td>
                   </tr>
                <?php endwhile;?>
               </table>
		      </div>
		</div>
		</div>
		</div>
		
		</div>
		<br><br><br><br>
		<!----End Main Contents---------->

<!----copyright---------->
<div class="container-fluid" id="copyright">
  <div class="container" > 
    <div class="row">
       <div class="col-sm-9">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a>
      </div>
    </div>
  </div>		
</div>
<!----end copyright---------->
  </body>
</html>
