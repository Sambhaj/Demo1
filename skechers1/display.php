<?php 
	include('config.php'); // // include database file
?>
<?php

	$message="";
if(isset($_POST['search']))
{
	//declare all variable//
	
      $search_result="";
      $valueToSearch = $_POST['valueToSearch']; 
	  $query = "SELECT * FROM tb_register WHERE partner_type LIKE '%$valueToSearch%'"; 
	  $search_result = filterTable($query);
   
}
    else
	{
	 $query = "SELECT * FROM tb_register";
	 $search_result = filterTable($query);
     }

   
 
// function to connect and execute the query
function filterTable($query)
{
    $filter_Result = mysql_query($query);
    return $filter_Result;
}

?>
			
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
    <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!--Export DataTable-->
    <script type="text/javascript" src="js/tableExport.js"></script><!--Export DataTable-->
    <script type="text/javascript" src="js/jquery.base64.js"></script><!--Export DataTable-->
  
  
  

  
  <style> 
	  
        
		
		#btn{
  margin: 0 auto;
  width:160px;
 
  height:33px;
  font-weight: bold;
  background-color: #ffffff;
  border: 1px solid transparent;
  text-decoration:none;
  color: #000000;
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
  border-color: #146b85;
  text-decoration:none;
  
}

 </style>
</head>
<body style="background-color:black">
<div id="main" ><!-- Main starts here -->

<div id="header" style="padding-top:40px"><!-- Header starts here -->
<center>
	<table border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.jpg" /></td>
		</tr></table>
	</center>
</div><!-- Header ends here -->


<div id="contentHolder" style="padding-top:40px"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">

  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
     
	<div class='panel-heading' style="background-color:#008CBA;text-align:right">
        <button style="color:#000000;" id="btn" onclick="$('#employees').tableExport({type:'excel',escape:'false'});" name="download"  style="padding-left:20px;"><img src="images/download.png" width="28px">&nbsp;&nbsp; Export To Excel</button>	             

      </div>
      <div class='panel-body'>
        <form class='form-horizontal' action="" method="post" >
          <div class='form-group'>
                 
          </div>
		  
           <div class='form-group'>
		   <div class='col-md-offset-2 col-md-4'>
             <select class='form-control' id='id_equipment' name="valueToSearch">
                   <option value="0">--Select--</option>
	                         <option value="Distributor ">Distributor </option>
                             <option value="Franchise Owner">Franchise Owner</option>
                             <option value="MBO Partner">MBO Partner</option>
	                         <option value="Ecommerce Partner">Ecommerce Partner </option>
	                         <option value="Institutional Sales Partner">Institutional Sales Partner</option>
	                         <option value="Others">Others</option>
                             	                         
                  </select> 
            </div>
            <div class='col-md-offset-12 col-md-4'>
			<button class='btn-lg btn-primary' type='submit' name="search" style="background-color:#008CBA;border-color:#008CBA">Search</button>
			</div>
			
           
          </div>
          <div class='form-group'>

          <div class='col-md-8' style="height:90%;width:100%;font-size:2px;overflow: auto;">
              <div class='col-md-2'>
                <div class='form-group internal'>
                 <table id="employees"  width="width:100%"class = "table table-striped"  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <thead >
				<tr  style="font-size:15px;border:1px solid #ddd;width:100%">
                    <th>Name</th>
					<th>Email</th>
					<th>Contact Number</th>
                    <th>Apt No./ Street Name</th>
                    <th>City</th>
                    <th>State</th>
					<th>Pincode</th>
					<th>Attend</th>
                    <th>Partner Details</th>
					<th>Others</th>
					<th>Expected Day</th>
                    <th>Time Of Arrival</th>
                    <th>Meal Preference</th>
					<th>Dietary Restrictions / Food Allergy</th>
					<th>T-Shirt Size</th>
                    <th>Shoe Size (US) Men</th>
					<th>Shoe Size (US) Women</th>
				</tr>
				</thead>
				<tbody>
      <!-- populate table from mysql database -->
                <?php while($row = mysql_fetch_array($search_result)):
				
              
				?>
				 <tr    style="font-size:15px">
                    <td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['contact_no'];?></td>
					<td><?php echo $row['street_no'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['state'];?></td>
					<td><?php echo $row['pincode'];?></td>
                    <td><?php echo $row['attend'];?></td>
					<td><?php echo $row['expected_day'];?></td>					
					<td><?php echo $row['arrival_time'];?></td>
                    <td><?php echo $row['meal'];?></td> 
					<td><?php echo $row['health'];?></td>
                    <td><?php echo $row['t_size'];?></td>
					<td><?php echo $row['sm_size'];?></td>
                    <td><?php echo $row['sw_size'];?></td>
                </tr>
                 <?php endwhile;?>
				 </tbody>
            </table>
                </div>
              </div>
              
              
            </div>
			 
            
          </div>
        
          
         
          
          
         
          
        </form>
      </div>
	  
<div id="rightpart">
    
    </div>	
<div class="clear"></div>

</div>
</div><!-- Content ends here -->

</div><!-- Content Holder ends here -->

<!--<div class="bottomImg"><img src="images/02.png" alt="" /></div> -->

</div><!-- Main ends here -->
	
</body>
</html>
<script type="text/javascript">
//$('#employees').tableExport();
$(function(){
	$('#example').DataTable();
      }); 
</script>