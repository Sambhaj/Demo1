<?php 
	include('config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php




$msg="";
$blanck="";
$succes="";
 
if(isset($_POST['submit']))
	{
		function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'application/pdf': return '.pdf';
				case 'application/msword': return '.doc';
				case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': return '.docx';
				case 'application/txt': return '.txt';
				case 'application/vnd.ms-excel': return '.xls';
				case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': return '.xlsx';
				case 'application/vnd.ms-powerpoint': return '.ppt';
				case 'application/zip': return '.zip';
				
				default: return false;
				}
			}
			
	 
 
			
			if (!empty($_POST["desc"]))
			{
				// for data upload
				 
				$desc = $_POST['desc']; 
				$link = $_POST['link'];	
				
				if ($link !="")
				{
					$lk="http://".$link;
				}
				else
				{
					$lk="";
				}
				
				
				// for image upload
				$file_name=$_FILES["uploaddoc"]["name"];
				$temp_name=$_FILES["uploaddoc"]["tmp_name"];
				$imgtype=$_FILES["uploaddoc"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename=$_FILES["uploaddoc"]["name"];
				 
				$target_path = "doc/".$imagename;
			
				move_uploaded_file($temp_name, $target_path); 
				 
		 
			
		 
					mysql_query("INSERT into tb_docs (id,description,doc,link) values('','$desc','$target_path','$lk') ") or die(mysql_error());	 
 
	             $succes = "Data Save Successfully";
	            $_POST = array();
			 
			 
				 
			}
			else
			{
				$msg="*";
				$blanck="Please Fillup Required Field!";
			}
		}
		
	/* {
	 $query = "SELECT * FROM tb_docs ORDER BY id DESC";
	 $search_result = filterTable($query);
     } */
	 
// function to connect and execute the query
function filterTable($query)
{
    include('config.php'); 
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
	 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Ravi Wakode Sir's Banking Institute</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	
			<link rel="shortcut icon" type="image/png" href="images/ico/logo1.png"  width="16" height="16">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style> 
	  .t{
           background-color:#FFFFFF;
            width:350px;
            height:100px;
        
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            border-radius:20px;
        }
        th {
            background-color:#015070;
			color:#ffffff;
            padding:15px;
           
          
        }
        td {
             padding:10px;
            background-color:#99b3ff;
			 border-top-left-radius: 20px;
           border-top-right-radius:20px;
		   border-bottom-left-radius: 20px;
           border-bottom-right-radius:20px;
		   font-size:15px;
		   color:#003366;

			 
        }
		
		
		#btn{
  margin: 0 auto;
  width:100px;
  height:35px;
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
  border-color: #000000;
  text-decoration:none;
}

 </style>
	</head><!--/head-->

<body>
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                                <img src="images/ico/logo.png">
                
            </div>
        </div>
    </header>
<!----Start Main Contents---------->
<br><br>
			
<div class="container-fluid"  style="background-color:#015070">
            <div class="container">
			  <div class="row" style="padding:10px;background-color:#015070;color:#ffffff;font-size:19px">
			    <table style="width:100%"><tr><th style="text-align:left">Welcome : <?php 

				if($_SESSION["username"]) 
				{
					echo $_SESSION["username"];
				}else
				{
					print '<script>alert("Please Login!");</script>' ;
					Print '<script>window.location.assign("admin_login.php");</script>';
				}?></th>
				<th style="text-align:right;">
				
				<button style="color:#146b85;" id="btn" onclick="parent.location='logout.php'">Logout</button></th></tr>
				</table>
				
			  </div>
		   </div>
		</div>
                   <hr>
 
          <form method="POST" action="" enctype="multipart/form-data"> 
		         <center> <table style="border-radius: 20px;width:50%;background-color:#99b3ff;" >
		          <tr>
		          <td style="text-align:right;"><br>Upload Doc :  </td>
		          <td>
		          <br><input name="uploaddoc" type="file">
		          </td>
		          </tr>
		          <tr>
		          <td  style="text-align:right;vertical-align:top;"><span style="color:#FFFFFF;"><?php echo $msg;?></span> Description : </td>
		          <td ><textarea style="width:90%;color:#000000;padding-left:5px;" rows="7" name="desc" ><?php echo isset($_POST['desc']) ? $_POST['desc'] : ''; ?></textarea>
		          </td>
		          </tr>
		          <tr>
		          <td style="text-align:right;">Add Link :  </td>
		          <td><input style="width:90%;color:#000000;padding-left:5px;" type="text" name="link" value="<?php echo isset($_POST['link']) ? $_POST['link'] : ''; ?>">
		          </td>
		          </tr>
		    	  <tr>
		          <td>
		          </td>
		          <td><input type="submit" id="btn" name="submit" style="color:#ffffff;background-color:#015070" value="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="view.php"><input type="button" id="btn" name="View" style="color:#ffffff;background-color:#015070" value="View" > </a>		
		          </td>
		          </tr>
		 		</table> </center>
		</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $blanck; ?></span><span style="color:#c52d2f;font-weight:bold;">
		                                                                 <?php   echo $succes;?></span></center><br>
		
		
		
          <center><table  width="50%" style="background-color:#99b3ff;" class="t">
    <thead>
	
        <tr  >
            <?php $result = mysql_query("SELECT * FROM tb_docs") or die(mysql_error()); 
            $row_count = 1;
            $row = mysql_fetch_assoc($result);
           
			?>
			<th style="border-top-left-radius: 20px;" > Sr. No </th>
			<th > Id </th>
			<th  style="align:center" >Description </th>
			<th style="align:center"> Document</th>
			<th style="align:center;">Link</th>
			<th style="align:left;border-top-right-radius:20px;">Action</th>
        </tr>
    </thead>
    <tbody style="width:50%">
<?php 
mysql_data_seek($result, 0);
while($row = mysql_fetch_assoc($result)){
?>
	<?php
	
    echo "<tr>";
    
    echo "<td>" . $row_count ."</td>";

    foreach($row as $key=>$value)
    {

    echo "<td>";
    echo $row[$key];
    echo "</td>";
}
    $row_count++;
    ?>

    <td style="color:white;">
    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this  ?')" name="delete"><img src="images/delete_icon.png"></a>
	
    </td>

    <?php


    echo "</tr>";
}   

echo "</table>";


?>


    </tbody>
</table></center>
<br><br>
 </div>
 </div>
 </div>
<!----End Main Contents---------->
<!--/#bottom-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://sednainfosystems.com/" >Sedna</a>. All Rights Reserved.
                </div>
               
            </div>
        </div>
    </footer><!--/#footer-->
    

   
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>