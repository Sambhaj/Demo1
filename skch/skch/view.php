
<?php
include("config.php");
?>

	<?php
       $db=mysql_select_db("db_skech");
      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM tb_register order by id desc limit 1 ");
	  $records = array();
	  while($row = mysql_fetch_array($result)){ 
	$records[] = $row;
	  }
	       ?>
		   <html>
		   
		   <head>
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="js/tableExport.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>

<script type="text/javascript" src="js/tableExport.js"></script>
<script type="text/javascript" src="js/jquery.base64.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		
	<div class="row" style="background-color:#C7EAFD">
	<center>
	<img src="images/logo.png">
							
	</center>
	</div>
	<div class="row" style="height:auto !important;overflow:scroll;">
						<table id="employees" class="table table-striped">
						
							<thead>
					<tr class="" style="background-color:#e6f6fe">
						<th>Name</th>
                        <th>Gender</th>
						   <th>City</th>
						   <th>Pincode</th>
                        <th>Contact No</th>
		                 <th>Email</th>
               		   <th>Attend</th>
					      <th>Partner Type</th>
					       <th>Expected Time Of Arrival</th>
		                 <th>Meal Preference</th>
		                 <th>T-shirt Size</th>
		                 <th>Shoe Size(Men)</th>
                        <th>Shoe Size(Women)</th>
		       		    <th>Address</th>
		 		    </tr>
				</thead>
				<tbody>
				<?php foreach($records as $row):?>
				
					<tr><td><?php echo $row['name']; ?></td> 
					<td><?php echo $row['gender']; ?></td> 
					<td><?php echo $row['city']; ?></td> 
					<td><?php echo $row['pincode']; ?></td> 
					<td><?php echo $row['contact_no']; ?></td> 
					<td><?php echo $row['email']; ?></td> 
					<td><?php echo $row['attend']; ?></td> 
					<td><?php echo $row['partner_type']; ?></td> 
					<td><?php echo $row['arrival_time']; ?></td> 
					<td><?php echo $row['meal']; ?></td> 
					<td><?php echo $row['t_size']; ?></td> 
					<td><?php echo $row['sm_size']; ?></td> 
					<td><?php echo $row['sw_size']; ?></td> 
					<td><?php echo $row['con_address']; ?></td> 
				    
					</tr>
				<?php endforeach; ?>
					</tbody>
					</table>
</div>
</div>

</body>
</html>
<script type="text/javascript">
//$('#employees').tableExport();
$(function(){
	$('#example').DataTable();
      }); 
</script>