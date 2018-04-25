<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>

<?php
//********For new product entry***********

			function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'image/bmp': return '.bmp';
				case 'image/gif': return '.gif';
				case 'image/jpeg': return '.jpg';
				case 'image/png': return '.png';
				default: return false;
				}
			}
	     
		
		// for entering product id
		$res1 = mysql_query("SELECT max(Image_ID) FROM  slider");
		$res2 = mysql_fetch_row($res1);
		
		if(is_null($res2[0]))
		{
			$maxvalue = 1000;
			
			if (!empty($_FILES["uploadedimage"]["name"]))
			{
				
				// for image upload
				$file_name=$_FILES["uploadedimage"]["name"];
				$temp_name=$_FILES["uploadedimage"]["tmp_name"];
				$imgtype=$_FILES["uploadedimage"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename=$_FILES["uploadedimage"]["name"];
				$target_path = "img/".$imagename;
				
			//********For Duplicate data***********	
				if(isset($target_path))
				{
					// Query for check product name from table
					$query = mysql_query("SELECT * FROM slider WHERE Image_Path = '$target_path'") or die(mysql_error());
					$exist = mysql_num_rows($query);
			
					if($exist >=1)
					{
						print '<script>alert("Product Name alredy exist!");</script>' ; // for Data alredy exist
						Print '<script>window.location.assign("Slider.php");</script>';	
					}
					
			//********End Duplicate data***********	
				else
				{
					if(move_uploaded_file($temp_name, $target_path)) 
					{
						mysql_query("INSERT into slider (Image_ID,Image_Path) values('$maxvalue','$target_path') ") or die(mysql_error());
					
						print '<script>alert("Successfully data uploaded !");</script>' ; // for successful data upload
						Print '<script>window.location.assign("Slider.php");</script>'; 
					}
				}
				}
			}
			else
			{
				print '<script>alert("Enter required fields!");</script>' ; // required fields
				Print '<script>window.location.assign("Slider.php");</script>';
			}
		}
		else
		{
			$maxvalue=$res2[0]+1;
						
			if (!empty($_FILES["uploadedimage"]["name"]))
			{
				
				// for image upload
				$file_name=$_FILES["uploadedimage"]["name"];
				$temp_name=$_FILES["uploadedimage"]["tmp_name"];
				$imgtype=$_FILES["uploadedimage"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename=$_FILES["uploadedimage"]["name"];
				$target_path = "img/".$imagename;
				
			//********For Duplicate data***********	
				if(isset($target_path))
				{
					// Query for check product name from table
					$query = mysql_query("SELECT * FROM slider WHERE Image_Path = '$target_path'") or die(mysql_error());
					$exist = mysql_num_rows($query);
			
					if($exist >=1)
					{
						print '<script>alert("Product Name alredy exist!");</script>' ; // for Data alredy exist
						Print '<script>window.location.assign("Slider.php");</script>';	
					}
					
			//********End Duplicate data***********	
				else
				{
					if(move_uploaded_file($temp_name, $target_path)) 
					{
						mysql_query("INSERT into slider (Image_ID,Image_Path) values('$maxvalue','$target_path') ") or die(mysql_error());
					
						print '<script>alert("Successfully data uploaded !");</script>' ; // for successful data upload
						Print '<script>window.location.assign("Slider.php");</script>'; 
					}
				}
				}
			}
			else
			{
				print '<script>alert("Enter required fields!");</script>' ; // required fields
				Print '<script>window.location.assign("Slider.php");</script>';
			}
		}
		
//********End new product entry***********	
?>
			 
			 