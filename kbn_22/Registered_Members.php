<?php
include('config.php');
?>
<?php session_start(); if(!isset($_SESSION['username'])) { header('location:admin.php'); } ?>
<?php

	$message="";
if(isset($_POST['search']))
{
	//declare all variable//
$Sr_no="serial_no";
$admin1="admin_".$_SESSION['username'];
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
$valueToSearch = $_POST['valueToSearch'];
$to = $_POST['to'];
$value = $_POST['value'];
   
{
	   
   $date3 = DateTime::createFromFormat("d/m/Y", "$to");
    $f3date = $date3->format("Y-m-d");
	
	
	$date2 = DateTime::createFromFormat("d/m/Y", "$value");
    $bddate = $date2->format("Y-m-d");
   
   /*     $query = "SELECT * FROM tbmember_registration  WHERE name LIKE '%$valueToSearch%'  AND reg_date LIKE  '%$value%'";
 *//*     $query = "SELECT * FROM tbmember_registration  WHERE name LIKE '%$valueToSearch%'"; */
          $query = "SELECT * FROM tbmember_registration  WHERE reg_date BETWEEN '$bddate'  AND  '$f3date'";
 
        $search_result = filterTable($query);
}}
	 else if(isset($_POST['Go']))
	 {
		$valueToSearch = $_POST['valueToSearch']; 
	  $query = "SELECT * FROM tbmember_registration  WHERE name LIKE '%$valueToSearch%'"; 
	  $search_result = filterTable($query);
	 
	 }
    else
	{
	 $query = "SELECT * FROM tbmember_registration ORDER BY reg_date DESC";
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
<script type="text/javascript" src="js/tcal.js"></script> <script type="text/javascript" src="js/tcal.js"></script> 

<script type="text/javascript" src="js/npm.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />


		 
</head>
	<!----End Header----->
 <body>
 
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
   <div class="row" style="padding:5px 10px 5px 5px;background-color:#e6e6e6;Font-size:20px;width:101%">
	    <div class="col-md-12">
	               <!-- TITLE /*  */-->
				     <table  style="padding-top:10px;width:100%;">
					    <tr>
					        <td Align=center width="40px" ><a href="dashboard.php"><img src="images\13.png" height="30px"></td>          
                            <td>Welcome <?php echo $_SESSION['username']; ?></td>				 
					        <td Align=right><a href="logout.php" tite="Logout" data-toggle="tooltip"><img src="images\logout.png" height="30px" style="" ></a></td>
					    </tr>
				    </table>
        </div>
	</div>
 	
<br><br><br>
<div class="container">
<div class="row">
<div class="col-md-12">

     <form action="" method="post" >	   
            <center> Enter Date From:&nbsp;<input type="text" name="value" placeholder="Enter the date" class="tcal" >&nbsp;&nbsp; To &nbsp;&nbsp;&nbsp;<input type="text" name="to" placeholder="Enter the date"  class="tcal"  >
			               &nbsp;&nbsp;<input type="submit" name="search" value="Search"><br><br></center>  
             
              <center>Enter the Name:&nbsp;<input type="text" name="valueToSearch" placeholder="Enter the name" >
			  &nbsp;       <input type="submit"  name="Go"  value="Go"><br></center><br><br> </center>
			                       
            <div style="height:600px; width: 100%; font-size: 12px; overflow: auto;">
            <table class = "table table-striped" border="" width="100px" height="100%" style="padding:2px;margin:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <tr style="background-color:  #146b85;color:white;border:px solid black;height:10px">
                    <th>Sr No</th>
					 <th>Registration</th>
                    <th>Register Date</th>
                    <th>Name</th>
                    <th>Home Address</th>
					<th>Location</th>
                    <th>Pincode</th>
					<th>Landline No</th>
                    <th>Mobile No</th>
					<th>Birth  Date</th>
                    <th>Ekda</th>
					<th>Email</th>
                    <th>Trade Type</th>
					<th>Trade Name</th>
                    <th>Trade Address</th>
					<th>Trade Location</th>
                    <th>Trade Pincode</th>
					<th>Trade Designation</th>
                    <th>Trade Mobile 1</th>
					<th>Trade Mobile 2</th>
                    <th>Trade Email</th>
					<th>Trade Website</th>
                    <th>Trade Description</th>
					<th>Reference Name 1</th>
					<th>Reference Mob 1</th>
					<th>Reference Name 2</th>
					<th>Area Admin</th>
					<th>Fill Date</th>
					
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):
				
              
				?>
				
                <tr   style="background-color: ;border:px solid black">
                    <td ><?php echo $row['serial_no'];?></td>
					<td ><?php echo $row['registration'];?></td>
					
                    <td><?php echo $row['reg_date'];?></td>
                    <td ><?php echo $row['name'];?></td>
                    <td><?php echo $row['home_address'];?></td>
					<td><?php echo $row['location'];?></td>
                    <td ><?php echo $row['pincode'];?></td>
                    <td><?php echo $row['landline_no'];?></td>
                    <td ><?php echo $row['mobile_no'];?></td>
					<td><?php echo $row['birth_date'];?></td>
                    <td><?php echo $row['ekda'];?></td>
                    <td><?php echo $row['email'];?></td>
					<td><?php echo $row['trade_type'];?></td>
                    <td><?php echo $row['trade_name'];?></td>
                    <td><?php echo $row['trade_address'];?></td>
					<td><?php echo $row['trade_location'];?></td>
                    <td><?php echo $row['trade_pincode'];?></td>
                    <td><?php echo $row['trade_designation'];?></td>
					<td><?php echo $row['trade_mobile_1'];?></td>
                    <td><?php echo $row['trade_mobile_2'];?></td>
                    <td><?php echo $row['trade_email'];?></td>
					<td><?php echo $row['trade_website'];?></td>
                    <td><?php echo $row['trade_description'];?></td>
                    <td><?php echo $row['ref_name_1'];?></td>
					<td><?php echo $row['ref_mob_1'];?></td>
                    <td><?php echo $row['ref_name_2'];?></td>
                    <td><?php echo $row['area_admin'];?></td>
					<td><?php echo $row['fill_date'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
			</div>
        </form>
		<br>
		<br>
		<!----End Main Contents---------->
</div>
</div>
</div>
</div>
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
