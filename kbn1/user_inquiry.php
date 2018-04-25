<?php
include('config.php');
?>


<?php
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";


	
if(isset($_POST['submit'])) {
	
// declare all variable


$name=$_POST['name'];
$location=$_POST['location'];
$Mobile=$_POST['mobile_no'];
$email=$_POST['email'];

/* 
$originalDate = "2-03-2011";
$newDate = date("Y-m-d", strtotime($originalDate));
 */


{
	

	
	
	

	mysql_query("INSERT INTO  user_inquiry(name,mobile_no,email,location) VALUES('$name','$Mobile','$email','$location')");
	$sucss="Register Successfully";
} 
}
else {
			 $req="";
	 $msg="Please Fill In All Mandatory Fields!";
			}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>KHADAYATA COMMUNITY BUSINESS FORUM</title>

  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
  
  
  <link rel="shortcut icon" type="image/png" href="images\icon\KBN logo.png" width="16" height="16"/>

   
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
    
   <link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="js/tcal.js"></script> 
 
  
 <script type="text/javascript">
  function mobval()
{
     var txt1=document.getElementById('mobno');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}
function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email').value="";
  	} 
}
  
  </script>
 
  
 
</head>
<body  >
<div class="main">
 <div class="header">
    <div class="header_resize">
      <div class="rss">
        <p><a href="#"></a> <a href="#"></a></p>
      </div>
      <div class="logo">
	  <h1><a href="index.html"><img src="images/logo.png"  alt="logo"><br><br><br><br><br><br></a> </h1>
      </div>
 </div>
 </div>


 <!----Header----->
<div class="container-fluid" >
   <div class="container">
	<br>
       <div class="row" style="padding:2px;background-color:#e6e6e6;Font-size:20px;font-family:">
	       <div class="col-md-12">
	 				  <!-- TITLE /*  */-->
				
           </div>
		</div>
    <div class="row"  >
     <div class="col-md-10">
		<form action="" method="post"  enctype="multipart/form-data" >
        <center> <table width="30%" height="50%" cellspacing="10px" cellpadding="10px" style= "border: 1px solid #a1a1a1; background-color:#f2f2f2; #ffebea; border-radius: 10px;margin:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                       <tr style="background-color:#146b85;color:#ffffff;font-size:20px;"><th style="height:45px" colspan="2">USER INQUIRY FORM</th></tr>

		   <tr><td style="padding:5px;font-size:18px;" colspan="2"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>
	   
        <tr>
	          <td   style="font-size:16px;font-weight:;Font-family:;text-align:right">   <span style="color:#DF1018;"><?php echo $req;?></span>Name</td>
              <td ><input type="text" style="background-color:white;width:65%;"   name="name" id="name" placeholder="Enter Your Name"   value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td>
        </tr>
       
       
       
       
       
       
       
       
       
         
       
        <tr>
            <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Mobile No</td>
            <td ><input type="text"    style="background-color:white;width:65%;" onblur="mobval();"  name="mobile_no"  id="mobno" placeholder="Enter Your Mobile No" value="<?php echo isset($_POST['mobile_no']) ? $_POST['mobile_no'] : ''; ?>"></td >
	    </tr>
        
       
        <tr> 
             <td   style="font-size:16px;font-weight:;Font-family:;text-align:right">  <span style="color:#DF1018;"><?php echo $req;?></span>Email</td>
             <td ><input type="text"   style="background-color:white;width:65%;"  name="email" onblur="emailvalidate();" id="email"  placeholder="Enter Your Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td>
        </tr>
        
		 <tr>
	          <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Location</td>
	          <td ><input type="text" style="background-color:white;width:65%;"  name="location" id="location" placeholder="Enter Your Location" value="<?php echo isset($_POST['location']) ? $_POST['location'] : ''; ?>"></td>
        </tr>
		
        <tr>
         <td></td>
          <td  style="padding:15px;" ><br><input type="submit" class="utt10" id="btn" value="Submit" name="submit"></td>
		</tr>

	    <tr><td></td></td></tr>
   </table> </center>

</form><br><center><span style="color:#006699;font-weight:bold;"><?php echo $message; ?></span></center><br>
</div>
</div>
</div>
</div>
</div>
<!----End Main Contents---------->

<!----copyright---------->
<div class="container-fluid" id="copyright">
<div class="container" > 
 <div class="row">
 <div class="col-sm-9">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a>
 </div>

 </div>
</div>		
	
</div>
<!----end copyright---------->
</body>
</html>
	





		
