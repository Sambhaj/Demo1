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
$name = $_POST['name'];
$Mobile=$_POST['mobile_no'];
$date="";

/* 
$originalDate = "2-03-2011";
$newDate = date("Y-m-d", strtotime($originalDate));
 */

{
	$dt1=date("Y-m-d");


  
  /* 
	$date3 = DateTime::createFromFormat("d/m/Y", "$date");
    $f3date = $date3->format("Y-m-d") */;
	
	$qr=mysql_query("INSERT INTO  tbself_invitee(reg_date,name,mobile_no) VALUES(' $dt1','$name','$Mobile')");
	echo"<script>alert($name)</script>";
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
<title>KHADAYATA COMMUNITY BUSINESS FORUM</title>
<head>
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
  
   <link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="js/tcal.js"></script> 
	<script>function resetform() {
document.getElementById("myform").reset();
}</script>
  
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
  </script>
 
  
  
</head>
<body  >
<div class="main">
  <div class="header">
    <div class="header_resize">
     <!--  <div class="rss">
        <p><a href="#">Subscribe to</a> <a href="#"><img src="images/rss.gif" width="16" height="16" alt="" /></a></p>
      </div> -->
      <div class="logo">
        <h1><a href="index.html"><img src="images/logo.png" alt="logo"><br><br><br><br><br><br></a> </h1>
      </div>
      <div class="clr"></div>
      <!-- <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>
      </div> -->
      <div class="menu_nav">
        <ul>
          <li ><a href="index.html"><span>Home </span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
     	  <li><a href="portfolio.html">Portfolio</a></li>
		  <li class="dropdown">
             <ul class="dropbtn" style="padding-top:19px;padding-left:22px;padding-right:22px" >Events
                       <div class="dropdown-content">
					   <a href="2_july.html" >2<sup>nd</sup> july seminar</a> 
                       <a href="30April Event.html">30<sup>th</sup> April Event</a>
                       <a href="19_Aug.html" >19<sup>th</sup> Aug Event</a> 
              </div></ul></li>
	      <li class="active"><a href="self_invitee_form.php"><span>Self Invitee</span></a></li> 
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    
  </div>


 <!----Header----->
<div class="container-fluid" >
   <div class="container">
	
      <!-- <div class="row" style="padding:2px;background-color:#e6e6e6;Font-size:20px;font-family:">
	       <div class="col-md-12">
	 				   TITLE /*  
				<table  style="padding:5px 5px 5px 5px;width:100%">
					  <tr><td Align="right" width="50px" >
                          <img src="images\rgstr.png" >
						  </td>          
                        <td>SELF INVITEE FORM</td>
						  
					  </tr>
				 </table>
           </div>
		</div>*/-->
    <div class="row"  >
     <div class="col-md-10">
		<form action="" method="post"  >
        <center> <table width="30%" height="50%" cellspacing="10px" cellpadding="5px" style= "border: 1px solid #a1a1a1; background-color:#f2f2f2; #ffebea; border-radius: 10px;margin:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <tr style="background-color:#146b85;color:#ffffff;font-size:20px;"><th style="height:45px">SELF INVITEE FORM</th></tr>
			<tr><td style="padding:5px;font-size:18px;;"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>
	         <tr>
	         <td style="font-size:16px;"><span style="color:#DF1018;"><?php echo $req;?></span>Name</td></tr>
             <tr><td ><input type="text" style="background-color:white;width:95%;height:25px;padding:4px"   name="name" id="name"  placeholder="Enter Your Name"  value=""></td>
             
             <tr><td   style="font-size:16px;align:center"><span style="color:#DF1018;"><?php echo $req;?></span>Mobile No.</td></tr>
             <td ><input type="text"    style="background-color:white;width:95%;height:25px;padding:4px" onblur="mobval();"  name="mobile_no"  id="mobno" placeholder="Enter Your Mobile No"  value="<?php echo isset($_POST['mobile_no']) ? $_POST['mobile_no'] : ''; ?>"></td >
	      </tr>
	      <tr>
        
          <td  style="padding:15px;align:left" ><input type="submit" onclick="resetform()" class="utt10" id="btn" value="Submit" name="submit"></td></tr>

	      <tr><td></td></td></tr>
        </table> </center>
        </form>
          <br><center><span style="color:#006699;font-weight:bold;"><?php echo $message; ?></span></center><br>
       </div>
    </div>
  </div>
</div>
</div>
<!----End Main Contents---------->

 <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Location</span></h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.2826878347!2d72.74111790713513!3d19.082769838238054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1477575377840" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--         <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> 
 -->     <!--  <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>to.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div> -->
	  </div>
      <div class="col c2">
        <h2><span>Contact</span> Us</h2>
    
        <p class="contact_info"> <span style="color:#00ace6">Address:</span> <br>C/o Lata J Shah, 501, Ganesh Siddhi CHS, Sector 5, Charkop, Kandivali West, Mumbai 400067<br />
         <!--  <span>Telephone:</span> <br /> -->
        <!--   <span>FAX:</span> <br />
          <span>Others:</span> <br /> -->
          <span style="color:#00ace6">E-mail:</span> info@khadayatabusinessnetwork.com </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="http://sednainfosystems.com/">Sedna</a> All Rights Reserved</p>
     <!--  <p class="rf">Design by <a target="_blank" href=""></a></p> -->

    </div>
  </div>
</div>
</body>
</html>





		
