<?php
include('config.php');
?>


<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    //$x = 'confirm("Are you sure you want to delete this product")';
    //echo $x;
  $result =  mysql_query("DELETE FROM `tb_projectinfo` WHERE id = '$id'");
  $result =  mysql_query("DELETE FROM `tb_specification` WHERE id = '$id'");
  $result =  mysql_query("DELETE FROM `tb_images` WHERE id = '$id'");
   /*  //echo "alert('Row Deletion Successful')";
	$row = mysql_fetch_assoc($result)
    $lr = $row;
    echo "$lr"; */
header("Location:delete_page.php");
}
    ?>
