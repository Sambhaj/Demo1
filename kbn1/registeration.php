<?php
include('config.php');
?>
<?php session_start(); if(!isset($_SESSION['username'])) { header('location:admin.php'); } ?>


<?php
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";
$new_id="serial_no";
$Sr_no="serial_no";
$fdate="";
$rdate="";
$bddate="";
$rowSQL = mysql_query( "select MAX($Sr_no)from tbmember_registration;" );
$row = mysql_fetch_array( $rowSQL );
$largestNumber = $row[0];
$new_id=$largestNumber+1;


	
if(isset($_POST['submit'])) {
	
// declare all variable

$Sr_no="serial_no";
$admin1="admin_".$_SESSION['username'];

$rdate=$_POST['reg_date'];
$name=$_POST['name'];
$address=$_POST['home_address'];
$location=$_POST['location'];
$pincode=$_POST['pincode'];
$landline=$_POST['landline_no'];
$Mobile=$_POST['mobile_no'];
$bdate=$_POST['birth_date'];
$ekda=$_POST['ekda'];
$email=$_POST['email'];
$trade=$_POST['trade_type'];
$tname=$_POST['trade_name'];
$taddress=$_POST['trade_address'];  
$tlocation=$_POST['trade_location'];
$trade_pincode=$_POST['trade_pincode'];
$tdesignation=$_POST['trade_designation'];
$mobile_1=$_POST['trade_mobile_1'];
$mobile_2=$_POST['trade_mobile_2'];
$temail_2=$_POST['trade_email'];
$twebsite=$_POST['trade_website'];
$tdescription=$_POST['trade_description'];
$rname_1=$_POST['ref_name_1'];	
$rmob_1=$_POST['ref_mob_1'];
$rname_2=$_POST['ref_name_2'];
$admin=$_POST['area_admin'];
$tdate=$_POST['fill_date'];
/* 
$originalDate = "2-03-2011";
$newDate = date("Y-m-d", strtotime($originalDate));
 */


{
	

	$date2 = DateTime::createFromFormat("d/m/Y", "$bdate");
    $bddate = $date2->format("Y-m-d");
	
	$date1 = DateTime::createFromFormat("d/m/Y", "$tdate");
    $fdate = $date1->format("Y-m-d");
	
	$date3 = DateTime::createFromFormat("d/m/Y", "$rdate");
    $f3date = $date3->format("Y-m-d");
	
	
	

	mysql_query("INSERT INTO  tbmember_registration(serial_no,registration,reg_date,name,home_address,location,pincode,landline_no,mobile_no,birth_date,ekda,email,trade_type,trade_name,trade_address,trade_location,trade_pincode,trade_designation,trade_mobile_1,trade_mobile_2,trade_email,trade_website,trade_description,ref_name_1,ref_mob_1,ref_name_2,area_admin,fill_date) VALUES('$new_id','$admin1','$f3date','$name','$address','$location','$pincode','$landline','$Mobile','$bddate','$ekda','$email','$trade','$tname','$taddress','$tlocation','$trade_pincode','$tdesignation','$mobile_1','$mobile_2','$temail_2','$twebsite','$tdescription','$rname_1','$rmob_1','$rname_2','$admin','$fdate')");
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
  function landval()
{
     var txt1=document.getElementById('phno');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{11})$/;
     var txtvalue=document.getElementById('phno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 11 digit landline number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}
 function mobval1()
{
     var txt1=document.getElementById('mobno1');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno1').value;
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
function emailvalidate1()
{
	var x=document.getElementById('email1').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email1').value="";
  	} 
}

 function mobval2()
{
     var txt1=document.getElementById('mobno2');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobno2').value;
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
				<table  style="padding-top:10px 12px 12px 12px;width:100%">
					  <tr><td Align="right" width="50px" >
                          <img src="images\rgstr.png" >
						  </td>          
                          <td>REGISTRATION FORM</td>
						  <td Align=right ><a href="dashboard.php" data-toggle="tooltip" title="Back"><img src="images\13.png" height="30px" style=""></a></td>
					  </tr>
				 </table>
           </div>
		</div>
    <div class="row"  >
     <div class="col-md-10">
		<form action="" method="post"  enctype="multipart/form-data" >
        <center> <table width="60%" height="50%" cellspacing="10px" cellpadding="10px" style= "border: 1px solid #a1a1a1; background-color:#f2f2f2; #ffebea; border-radius: 10px;margin:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
           <tr><td style="padding:5px;font-size:18px;" colspan="2"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>
	    <tr>
	           <td   style="font-size:16px;width:30%;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span> Serial No</td>
	           <td style="font-size:13px;font-weight:bold; height:25px;" ><input type="text" style="background-color:white;width:65%;"    name="serial_no" id="serial_no"  value="<?php echo @$new_id;?>"readonly="readonly"></td>
               </td> 
        </tr>
        <tr>
	           <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Register Date</td>
               <td><input type="text" style="background-color:white;width:61%;"  class="tcal" placeholder="DD/MM/YYYY"  name="reg_date" id="reg_date"  value="<?php echo isset($_POST['reg_date']) ? $_POST['reg_date'] : ''; ?>"></td>
        </tr>
        <tr>
	          <td   style="font-size:16px;font-weight:;Font-family:;text-align:right">   <span style="color:#DF1018;"><?php echo $req;?></span>Name</td>
              <td ><input type="text" style="background-color:white;width:65%;"   name="name" id="name"    value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></td>
        </tr>
        <tr>
	          <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Home Address</td> 
	          <td><textarea  style="background-color:white;width:65%;"  name="home_address" id="home_address" value="<?php echo isset($_POST['home_address']) ? $_POST['home_address'] : ''; ?>"></textarea ></td>
	    </tr>
        <tr>
	          <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Location</td>
	          <td ><input type="text" style="background-color:white;width:65%;"  name="location" id="location" value="<?php echo isset($_POST['location']) ? $_POST['location'] : ''; ?>"></td>
        </tr>
         <tr>
	          <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Pincode</td>
             <td ><input type="text" style="background-color:white;width:65%;;"  name="pincode"   id="pincode"    value="<?php echo isset($_POST['pincode']) ? $_POST['pincode'] : ''; ?>"></td>
        </tr>
        <tr>
             <td   style="font-size:16px;font-weight:;Font-family:;text-align:right">   <span style="color:#DF1018;"><?php echo $req;?></span>Landline No</td>
            <td ><input type="text"   placeholder="" style="background-color:white;width:65%;"  onblur="landval()" name="landline_no" id="phno"    value="<?php echo isset($_POST['landline_no']) ? $_POST['landline_no'] : ''; ?>"></td>
        </tr>
        <tr>
            <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Mobile No</td>
            <td ><input type="text"    style="background-color:white;width:65%;" onblur="mobval();"  name="mobile_no"  id="mobno"  value="<?php echo isset($_POST['mobile_no']) ? $_POST['mobile_no'] : ''; ?>"></td >
	    </tr>
        <tr>
	        <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Birth Date</td>
	        <td ><input type="text" style="background-color:white;width:61%;"  class="tcal" placeholder="DD/MM/YYYY" name="birth_date" id="datepicker" value="<?php echo isset($_POST['birth_date']) ? $_POST['birth_date'] : ''; ?>"></td>
        </tr>
        <tr>
             <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Ekda</td>
             <td ><input type="text"  style="background-color:white;width:65%;"  name="ekda" id="ekda"     value="<?php echo isset($_POST['ekda']) ? $_POST['ekda'] : ''; ?>"></td>
        </tr>
        <tr> 
             <td   style="font-size:16px;font-weight:;Font-family:;text-align:right">  <span style="color:#DF1018;"><?php echo $req;?></span>Email</td>
             <td ><input type="text"   style="background-color:white;width:65%;"  name="email" onblur="emailvalidate();" id="email"   value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td>
        </tr>
         <tr>
		    <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Type</td>
            <td ><input type="radio" name="trade_type"    value="business(self Employee)" >
  
 Business (Self-Employed)
	  <input type="radio" name="trade_type"    value="service" >  
   Service
 
        </tr>
        <tr>
             <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Name</td>
            <td><input type="text" style="background-color:white;width:65%;"  name="trade_name" id="trade_name"  value="<?php echo isset($_POST['trade_name']) ? $_POST['trade_name'] : ''; ?>"></td>
        </tr>
        <tr>
            <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Address</td>
            <td ><textarea  style="background-color:white;width:65%;"   name="trade_address" id="trade_address" value="<?php echo isset($_POST['trade_address']) ? $_POST['trade_address'] : ''; ?>"></textarea ></td>
        </tr>
        <tr>
           <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Location</td>
           <td ><input type="text" style="background-color:white;width:65%;"   name="trade_location" id="trade_location" value="<?php echo isset($_POST['trade_location']) ? $_POST['trade_location'] : ''; ?>"></td>
        </tr>
        <tr>
             <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Pincode</td>
             <td ><input type="text" style="background-color:white;width:65%;"  name="trade_pincode" id="trade_pincode"     value="<?php echo isset($_POST['trade_pincode']) ? $_POST['trade_pincode'] : ''; ?>"></td>
        </tr>
        <tr>
             <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Designation</td>
	         <td ><input type="text" style="background-color:white;width:65%;"  name="trade_designation" id="trade_designation" value="<?php echo isset($_POST['trade_designation']) ? $_POST['trade_designation'] : ''; ?>"></td>
	    </tr>
        <tr>
	        <td  style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Mobile 1</td>
	         <td ><input type="text" style="background-color:white;width:65%;" onblur="mobval2();"  name="trade_mobile_1" id="mobno2" value="<?php echo isset($_POST['trade_mobile_1']) ? $_POST['trade_mobile_1'] : ''; ?>"></td>
		</tr>
        <tr>
	         <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Mobile 2</td>
	         <td ><input type="text" style="background-color:white;width:65%;" onblur="mobval2();" name="trade_mobile_2" id="mobno2" value="<?php echo isset($_POST['trade_mobile_2']) ? $_POST['trade_mobile_2'] : ''; ?>"></td>
	    </tr>
        <tr>
	         <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Email</td>
	         <td ><input type="text" style="background-color:white;width:65%;"  name="trade_email"  onblur="emailvalidate1()" id="email1" value="<?php echo isset($_POST['trade_email']) ? $_POST['trade_email'] : ''; ?>"></td>
	   </tr>
	    <tr>
	         <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Website</td>
	         <td ><input type="text" style="background-color:white;width:65%;"  name="trade_website" id="trade_website" value="<?php echo isset($_POST['trade_website']) ? $_POST['trade_website'] : ''; ?>"></td>
	   </tr>
       <tr>
	         <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Trade Description</td>
		     <td ><input type="text" style="background-color:white;width:65%;"  name="trade_description" id="trade_description" value="<?php echo isset($_POST['trade_description']) ? $_POST['trade_description'] : ''; ?>"></td>

	   </tr>
       <tr>
	         <td style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Reference Name 1</td>
	         <td ><input type="text" style="background-color:white;width:65%;"  name="ref_name_1" id="ref_name_1" value="<?php echo isset($_POST['ref_name_1']) ? $_POST['ref_name_1'] : ''; ?>"></td>
	    </tr>
        <tr>
	        <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Reference Mob 1</td>
	        <td ><input type="text" style="background-color:white;width:65%;" onblur="mobval1();" name="ref_mob_1" id="mobno1" value="<?php echo isset($_POST['ref_mob_1']) ? $_POST['ref_mob_1'] : ''; ?>"></td>
	
	    </tr>
        <tr>
	        <td  style="font-size:16px;font-weight:;Font-family:;text-align:right" ><span style="color:#DF1018;"><?php echo $req;?></span>Reference Name 2</td>
	        <td ><input type="text" style="background-color:white;width:65%;"  name="ref_name_2" id="ref_name_2" value="<?php echo isset($_POST['ref_name_2']) ? $_POST['ref_name_2'] : ''; ?>"></td>
	
	    </tr>
        <tr>
	
            <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Area Admin</td>
	        <td ><input type="text" style="background-color:white;width:65%;"  name="area_admin" id="area_admin" value="<?php echo isset($_POST['area_admin']) ? $_POST['area_admin'] : ''; ?>"></td>
	
	    </tr>
        <tr>
	
           <td   style="font-size:16px;font-weight:;Font-family:;text-align:right"><span style="color:#DF1018;"><?php echo $req;?></span>Fill Date</td>
	       <td ><input type="text" style="background-color:white;width:61%;"  class="tcal" placeholder="DD/MM/YYYY" name="fill_date" id="fill_date" value="<?php echo isset($_POST['fill_date']) ? $_POST['fill_date'] : ''; ?>"></td>
	
        <tr>
         <td></td>
          <td  style="padding:15px;" ><br><input type="submit" class="utt10" id="btn" value="Submit" name="submit"></td></tr>

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
	





		
