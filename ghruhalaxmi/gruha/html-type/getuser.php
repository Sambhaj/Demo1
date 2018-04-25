
	<?php
include('config.php');
?>
<?php
		 
	require_once 'dbconfig.php';
	
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
        while ($row =  mysql_fetch_array($result1)):
		
			
           echo "<img src='",$row['photo'],"' width='275' height='280' /> ";
        
        ?>
			 </td>
				</tr>
			
		</table>
			
		</div>
					 <?php endwhile;?>
	