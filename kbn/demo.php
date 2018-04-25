
<?php
include('config.php');
?>

				     
					 
					 
					 <?php



	
if(isset($_POST['search']))
{
	//declare all variable//
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
       $qr = "SELECT * FROM `tbmember_registration`  ORDER BY `serial_no` DESC LIMIT 1";
      $result = mysql_query($qr) or die (mysql_error());
	 $search_result = filterTable($query);

     }

   
 
// function to connect and execute the query
function filterTable($query)
{
    $filter_Result = mysql_query($query);
    return $filter_Result;
}
 

?>


<!DOCTYPE html>
<html>
<head>
<title>KHADAYATA COMMUNITY BUSINESS FORUM</title>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

		 
</head>
	<!----End Header----->
 <body background="images/body-bg.jpg">
 <div class="main">
 <div class="header">
    <div class="header_resize">
     
      <div class="logo">
	  <h1><img src="images/logo.jpg" alt="logo"><br><br><br><br><br><br> </h1>
      </div>
    </div>
 </div>
 
>
	    
	               <!-- TITLE /*  */-->


<div class="row">
<div class="col-md-12">

     <form action="" method="post" >	   
            <center><span style="font-size: 18px;color: white;"> Enter Date From: </span>&nbsp;<input type="text" name="value" placeholder="Enter the date" class="tcal" >&nbsp;&nbsp;<span style="font-size: 18px;color: white;"> To </span>&nbsp;&nbsp;&nbsp;<input type="text" name="to" placeholder="Enter the date"  class="tcal"  >
			    <br><br>          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit" name="search" value="Search"><br><br></center>  
             
              <center><span style="font-size: 18px;color: white;">Enter the Name:</span>&nbsp;<input type="text" name="valueToSearch" placeholder="Enter the name" >
			  <br> <br>         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;       <input type="submit"  name="Go"  value="Go"><br></center><br><br> </center>
			                       
            <div style="height:500px; width: 100%; font-size: 12px; overflow: auto;">
            <table border="" width="120%" height="20%" style="padding:2px;margin:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <tr style="background-color: #ffae00;font-weight:bold;border-radius:5px;color:black;border:px solid black;height:10px">
                    <th style=font-weight:bold;color:black;>Sr No</th>
					 <th style=font-weight:bold;color:black;>Registration</th>
                    <th style=font-weight:bold;color:black;>Register Date</th>
                    <th style=font-weight:bold;color:black;>Name</th>
                    <th style=font-weight:bold;color:black;>Home Address</th>
					<th style=font-weight:bold;color:black;>Location</th>
                    <th style=font-weight:bold;color:black;>Pincode</th>
					<th style=font-weight:bold;color:black;>Landline No</th>
                    <th style=font-weight:bold;color:black;>Mobile No</th>
					<th style=font-weight:bold;color:black;>Birth  Date</th>
                    <th style=font-weight:bold;color:black;>Ekda</th>
					<th style=font-weight:bold;color:black;>Email</th>
                    <th style=font-weight:bold;color:black;>Trade Type</th>
					<th style=font-weight:bold;color:black;>Trade Name</th>
                    <th style=font-weight:bold;color:black;>Trade Address</th>
					<th style=font-weight:bold;color:black;>Trade Location</th>
                    <th style=font-weight:bold;color:black;>Trade Pincode</th>
					<th style=font-weight:bold;color:black;>Trade Designation</th>
                    <th style=font-weight:bold;color:black;>Trade Mobile 1</th>
					<th style=font-weight:bold;color:black;>Trade Mobile 2</th>
                    <th style=font-weight:bold;color:black;>Trade Email</th>
					<th style=font-weight:bold;color:black;>Trade Website</th>
                    <th style=font-weight:bold;color:black;>Trade Description</th>
					<th style=font-weight:bold;color:black;>Reference Name 1</th>
					<th style=font-weight:bold;color:black;>Reference Mob 1</th>
					<th style=font-weight:bold;color:black;>Reference Name 2</th>
					<th style=font-weight:bold;color:black;>Area Admin</th>
					<th style=font-weight:bold;color:black;>Fill Date</th>
					
					
                </tr>

      <!-- populate table from mysql database -->
                 <?php while($row = mysql_fetch_array($result)):
				
              
				?>
				
                <tr   style="background-color:white:3px solid white">
                    <td style="font-weight:;color:;"><?php echo $row[0];?></td>
					<td ><?php echo $row['registration'];?></td>
					
                    <td><?php echo $row[1];?></td>
                    <td ><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
                    <td ><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td ><?php echo $row[7];?></td>
					<td><?php echo $row[8];?></td>
                    <td><?php echo $row[9];?></td>
                    <td><?php echo $row[10];?></td>
					<td><?php echo $row[11];?></td>
                    <td><?php echo $row[12];?></td>
                    <td><?php echo $row[13];?></td>
					<td><?php echo $row[14];?></td>
                    <td><?php echo $row[15];?></td>
                    <td><?php echo $row[16];?></td>
					<td><?php echo $row[17];?></td>
                    <td><?php echo $row[18];?></td>
                    <td><?php echo $row[19];?></td>
					<td><?php echo $row[20];?></td>
                    <td><?php echo $row[21];?></td>
                    <td><?php echo $row[22];?></td>
					<td><?php echo $row[23];?></td>
                    <td><?php echo $row[24];?></td>
                    <td><?php echo $row[25];?></td>
					<td><?php echo $row[26];?></td>
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
 <div class="logo">
	  <img src="images/logo1.jpg" alt="logo">
	<center><span ="font-size:28px;font-family: Roboto Condensed;color:white;"> Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b><span="font-size:28px;font-family: Roboto Condensed;color:white;">Sedna</span></b></a></span></center>
      
 
</div>
 </div>
</div>		
	
</div>
<!----end copyright---------->
        
    </body>
</html>
