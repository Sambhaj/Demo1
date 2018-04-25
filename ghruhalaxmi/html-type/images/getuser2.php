	<?php
include('config.php');
?>
<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
		$qr = "SELECT * FROM tb_specification WHERE id=$id";
 $result1 = mysql_query($qr) or die (mysql_error());
	}
			
		?>
		
		
		<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

.zoom {
   
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}
</style>
 
</head>
<body style=background-color:black>

		<div class="table-responsive">
		
		
		<?php
        while ($row =  mysql_fetch_array($result1)):
		
			
           
        
        ?>
		<center>
		<div >
		<table  style="font-size:15px;width:80%;height:auto">
		
		   <tr style="box-shadow: 0 0 20px rgba(0,0,0,0.6);-moz-box-shadow: 0 0 20px rgba(0,0,0,0.6);-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.6);-o-box-shadow: 0 0 20px rgba(0,0,0,0.6);" >
		   <td style="width:200px" >
		<div class="zoom"><?php echo "<img src='",$row['flat_img'],"' width='200px' height='180px' /> ";?></div>
		   </td>
		   
			<td style="width:120px">
			<span style="color:red">&#8377;<label width="120px;"><?php echo $row['flat_cost']; ?></label></span><br/></br>
			<label width="120px;"><?php echo $row['flat_type']; ?></label><br/>
			<span style="color:gray"><label width="120px"><?php echo $row['carpet_area']; ?></label><span><br/></br>
			<span style="color:gray"><label width="120px"><?php echo $row['possession_date'];?><label><span><br/>
			</td><br/>
			</tr>
		  
			
			
			
				
			
		</table>
		</div>
		</center>
			
		</div>
					 <?php endwhile;?>
					