<?php
		 
	require_once 'dbconfig.php';
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "SELECT * FROM tb_images WHERE id=:id";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
			
		?>
			
		<div class="table-responsive">
		 <h4 class="modal-title">
                            	<i class="fa fa-building"></i> Project Images
                            </h4>
		<table class="table table-striped table-bordered">
		    <tr>
			    <th>First Name</th>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><?php echo "<img src='",$row['photo'],"' width='275' height='280' />"?></td>
			</tr>
			
		</table>
			
		</div>
			
		<?php				
	}