
	<?php
include('config.php');
?>
<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) {
		$id = intval($_REQUEST['id']);
		$qr = "SELECT * FROM tb_images WHERE id=$id";
 $result1 = mysql_query($qr) or die (mysql_error());
	}
			
		?>
		<div class="table-responsive">
		
		<table class="table table-striped table-bordered">
		    <tr><td>
		<?php
		$row =  mysql_fetch_array($result1);
       for(int i=0;i<=$row.count-1;i++)
	   {
			echo "<img src='",$row['photo']['i'],"' width='275' height='280' /> ";
			i=i+1;
			echo "<img src='",$row['photo']['i'],"' width='275' height='280' /> ";
	   }
		
			
        
        ?>
			 </td>
				</tr>
			
		</table>
			
		</div>
					 <?php endwhile;?>
					