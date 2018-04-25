<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
	if(isset($_GET['remove_id']))
	{
		$res=mysql_query("SELECT * FROM list WHERE ID=".$_GET['remove_id']);
		$row=mysql_fetch_array($res);
		mysql_query("DELETE FROM list WHERE ID=".$_GET['remove_id']);
		unlink($row['Upload_Doc']); // remove image from folder
		header("Location: Remove_PriceList.php");
	}
?>
<!DOCTYPE html>
<!--BEGIN html-->
<html lang="en-US">
<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset "UTF-8";
body{
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	text-align:justify;
	}
.utt2{
	border: none;
	background: #323232;
	color: #FFFFFF;
	padding: 5px;
	font-size:15px;
	border-radius: 5px;
	width:80px;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	height:30px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
.utt2:hover {
	background: #0FB59F;
	color: #FFFFFF;
	box-shadow: inset 0 0 0 3px #0FB59F;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('');
		$.get('PriceList_Fetch.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

	});
	</script>
<script type="text/javascript">
function remove(id)
{
	if(confirm(' Sure to remove file ? '))
	{
		window.location='Remove_PriceList_Fctn.php?remove_id='+id;
	}
}
</script>
</head>
<body>
<table>
<tr>
<td style="background-color:#E8E8E8;padding:10px;width:100%;">
<center><form method="POST" action="" enctype="multipart/form-data"> 
	<select name="parent_cat" id="parent_cat" style="height:30px;margin-top:0px;font-family: 'Open Sans', sans-serif;">
			<option value="">Select Organization Name</option> 
            <?php
					$query_parent = mysql_query("SELECT DISTINCT Organization_Name FROM list ORDER BY Organization_Name ASC") or die("Query failed: ".mysql_error());
					while($r=mysql_fetch_row($query_parent))
					{ 
						echo "<option value='$r[0]'> $r[0] </option>"; // fetch all product types data from database
					}
             ?>
	</select>
	
	<select name="sub_cat" id="sub_cat" style="height:30px;font-family: 'Open Sans', sans-serif;"><option value=""></option> </select>

	
	<input type="submit" name="submit" class="utt2" value="Search">
	
	</form>	</center>
	<td></tr></table>
<?php 
$msg="";
if(isset($_POST['submit']))
	{
		$query=mysql_query("Select * from list where Member_ID='$_POST[sub_cat]'") or die(mysql_error());
	
	$result=mysql_query("Select DISTINCT Organization_Name, Member_ID from list where Member_ID='$_POST[sub_cat]'") or die(mysql_error());
					while($r = mysql_fetch_row($result))
					{
					echo "<center><table>";
					echo "<tr style='background-color:#D6D6D6;'>";
					echo "<td style='padding:10px;'><b style='font-size:16px;'>Member_ID</b></td>";
					echo "<td style='padding:10px;'><b style='font-size:16px;'>Organization Name</b></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td style='padding:10px;text-align:center;'>$r[1]</td>";
					echo "<td style='padding:10px;text-align:center;'>$r[0]</td>";
					echo "</tr>";
					echo "</table></center>";
					?>
					
				<?php
					}
					while($row = mysql_fetch_row($query)) 
				{
					$name=$row[3];
					$id=$row[0];
					//$target=substr("$name",12);
				 echo "<center><table><tr><td style='padding:10px;background-color:#E8E8E8;'><img src='images/doc.png' style='width:30px;height:30px;'><b>$name</b></td>";
					 // fetching all values of product name from database
				
?>
	<td style='text-align:center;padding:10px;background-color:#E8E8E8;'><a href="javascript:remove(<?php echo $id ?>)"><img src="images/delete.png" alt="Delete" style="width:25px;height:25px;"></a></td>
	</tr></table></center>
	<?php 
		}
	}			?>
	
</body>
</html>