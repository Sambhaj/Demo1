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
	
	mysql_query("INSERT INTO `tbself_invitee` (`reg_date`, `name`, `mobile_no`) VALUES('$dt1','$name','$Mobile')");
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
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/tcal.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	
	
	
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
 
  <body  background="images/body-bg.jpg" >
<style>
a {
	background-color: transparent;
    color:images/logo.jpg;
    text-decoration:none;
    text-transform:uppercase;
}
topnav {
    background-color:images/logo.jpg;
    font-family:Roboto Condensed;
    font-size:.875em;
    overflow:hidden;
    padding-left:4%;
}
nav ul {
	font-family:'Oswald', sans-serif;font-size:14px
    padding:0;
    margin:0;
}
nav ul li {
	 a:hover;
    list-style-type:none;
    float:right;
    position:relative;
    padding:0;
    margin:0;
	parent color:#ffae00;
}
nav ul li a {
	display: block;
    color: white;
    text-align: right;
	
   
    padding:px 10px;
    margin:0;
}
 
nav ul li a
nav ul li a:focus {
	
    background-color:;
    color:red;
    text-decoration:
    font-weight:24px;
}

.dropbtn {
    background :url(http://sktthemesdemo.net/interior/wp-content/themes/interior-pro/images/header_bg.png);
    color: white;
    padding: 7px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:black;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: black;

}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background:url(http://sktthemesdemo.net/interior/wp-content/themes/interior-pro/images/header_bg.png);
}

.fa {
  padding: 10px;
  font-size: 18px;
  width: 17px;
  height:17px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 100%;
}

.fa:hover {
    opacity: 0.9;
	background: #ffae00;
}

.fa-facebook {
  background: white;
  color: black;
}

.fa-twitter {
  background: white;
  color: black;
}

.fa-google {
  background: white;
  color: black;
}

.fa-linkedin {
  background: white;
  color: black;
}

.fa-youtube {
  background: white;
  color: black;
}

</style>

  
 </head>
 <div class="main">
 <div class="header" style="height:140px;background :url(http://sktthemesdemo.net/interior/wp-content/themes/interior-pro/images/header_bg.png)" >
    <div class="header_resize" > 
      <div class="logo">
	  <div class="topnav" id="myTopnav" style="padding-bottom:40px;text-align:center;">

<a  href=" http://khadayatabusinessnetwork.com/wp/"><img src="images/KBN logo.png" style="padding-left:2px;padding-top:6px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="http://khadayatabusinessnetwork.com/wp/" style="font-family:Roboto Condensed;color:white;font-size:16px">  HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp
            
 <a  href="http://khadayatabusinessnetwork.com/wp/about-us/" style="font-family:Roboto Condensed;color:white;font-size:16px">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp
  <div class="dropdown">
  <button class="dropbtn" style="font-family:Roboto Condensed;color:white;
    font-size: 16px;">EVENTS</button>
  <div class="dropdown-content" >
    <a href="http://khadayatabusinessnetwork.com/wp/2018-2/" style="font-family:Roboto Condensed;color:white;font-size:14px">2018</a>
    <a href="http://khadayatabusinessnetwork.com/wp/2017-2/" style="font-family:Roboto Condensed;color:white;font-size:14px">2017</a>
    <a href="http://khadayatabusinessnetwork.com/wp/event-trade-fairs/" style="font-family:Roboto Condensed;color:white;font-size:14px">TRADE FAIRS</a>
    <a href="http://khadayatabusinessnetwork.com/wp/event-business-seminar/" style="font-family:Roboto Condensed;color:white;font-size:14px">INFORMATIVE WORKSHOPS</a>
    <a href="http://khadayatabusinessnetwork.com/wp/event-business-meet/" style="font-family:Roboto Condensed;color:white;font-size:14px">BUSINESS MEETS</a>
	 <a href="http://khadayatabusinessnetwork.com/wp/event-picnic/" style="font-family:Roboto Condensed;color:white;font-size:14px">SOCIAL EVENTS</a>
  </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a  href="http://khadayatabusinessnetwork.com/wp/gallery-2/" style="font-family:Roboto Condensed;color:white;font-size:16px">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	       <a href="http://khadayatabusinessnetwork.com/kcbf/business1.php" style="font-family:Roboto Condensed;color:white;font-size:16px">BUSINESS DIRECTORY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://khadayatabusinessnetwork.com/kcbf/join_kcbf.php" style="font-family:Roboto Condensed;color:white;font-size:16px">JOIN KCBF</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <a href="http://khadayatabusinessnetwork.com/wp/contact-us/" style="font-family:Roboto Condensed;color:white;font-size:16px">CONTACT US</a>
  

	  </div>
	  </div>
 </div>
 </div><br><br>



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
		</div>*/--><table >
					  <tr >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;       
                        <span style="font-size: 30px;color: white;font-family:Calibre;text-align:center">Join KCBF</span>
						  
					  </tr></br></br></br></br>
					   
					  
					  
				 </table>
				 
				 <div class="row" text-align="justify" >
     <div class="col-md-12"><center><table><tr><td style="color:#c4c5c6;font-size: 18px;font-family:sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A unique initiative in our Khadayata Community. The objective is to bring all  <span style="font-weight:bold;">  "Working<br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khadayatas" </span>- all over the world on one platform.Whereby:-
</td></table></center><center><table><tr><td><ul style="text-align:font-size: 18px;font-family:sans-serif;">
<span style="color:#c4c5c6;font-size: 18px;text-align:justify;">
<li>  New career entrants can get support and guidance.</li>
<li>The existing working professionals and businessmen can support each other in promoting <br> and resolving their respective careers and related issues.</li>
<li> Support and work for betterment of Khadayata Community at large.</li>
<li>   A web-site is being designed to create extensive database of all Khadayatas anywhere in the <br> world and will be operational soon.</li>
<li>  We would like all working Khadayatas to upload their details so that they can become part <br> of this initiative. </li>
<li> With passage of time it is also proposed to take up Khadayata communities larger issue in <br>the socio-economic context.</li>
<li> Life Membership starts at Just Rs 2500/-</li></br></br>

					  
					  
					  </span>
					 </ul> </td></tr></table</center>
					  </div>
					  </div>
				 
				 
				 
				 
    <div class="row"  >
     <div class="col-md-10">
	<form action="" method="POST"  >
        <center> <table width="30%" height="70%" cellspacing="10px" cellpadding="5px" style= "border: 1px solid #a1a1a1; background-color:#f7dca3;border: border-collapse: collapse;
    border-radius: 30px;
    border-style: hidden; 
    box-shadow: 0 0 0 3px white; border-radius: 40px;margin:50px;">
            <tr style="background-color:#146b85;color:#ffffff;font-size:20px;"><th style="font-size:28px;text-align:center; background-color:#ffae00;font-family: Roboto Condensed;border-radius:60px;">Join KCBF</th></tr>
			<tr><td style="padding:5px;font-size:18px;;"><span style="color:#DF1018;"><?php echo $msg;?></span><span style="color:green;"><?php echo $sucss;?></span></td></tr>
	         <tr>
	         <td style="font-size:16px;font-family: Roboto Condensed;text-align:left"><span style="color:#DF1018;"><?php echo $req;?></span>Name</td></tr>
             <tr><td ><input type="text" style="background-color:white;width:95%;height:25px;padding:4px"   name="name" id="name"  placeholder="Enter Your Name"></td>
             
             <tr><td   style="font-size:16px;font-family: Roboto Condensed;text-align:left"><span style="color:#DF1018;"><?php echo $req;?></span> Mobile No.</td></tr>
             <td> <input type= "text"    style="background-color:white;width:95%;height:25px;padding:4px"  name="mobile_no"  id="mobno" placeholder="Enter Your Mobile No" ></td >
	      </tr>
	      <tr>
        <td  style="padding:15px;text-align:center" ><input style="font-family: Roboto Condensed;color:white;background-color:#ffae00;height:50px;width:120px;font-weight:bold;font-size:15px;border: border-collapse: collapse;
    border-radius: 30px;"type="submit" onclick="resetform()" class="utt10" id="btn" value="Submit" name="submit"></td></tr>

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
<div class="footer" style="height:270px;background :url(http://sktthemesdemo.net/interior/wp-content/themes/interior-pro/images/header_bg.png)"><br>
<center><h2 style="font-size: 34px;font-family: Roboto Condensed;text-align: center;padding-bottom: 25px;margin-bottom: 25px;position: relative;text-align:center;color:white"> Social Links</h2>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/1729224980651514/videos/1836146663292678/" target="_blank" class="fa fa-facebook"></a>
<a href="#" target="_blank" class="fa fa-twitter"></a>
<a href="#" target="_blank" class="fa fa-google"></a>
<a href="https://www.linkedin.com/in/khadayata-community-business-forum-b4232b14b/" target="_blank" class="fa fa-linkedin"></a>
<a href="#" target="_blank" class="fa fa-youtube"></a>
</center><br><p style="font-size: 12px;font-family: Roboto Condensed;text-align: center;color:white"><a  href="http://khadayatabusinessnetwork.com/wp/" style="font-size: 10px;font-family: Roboto Condensed;color:white" > Home </a>&nbsp; &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a href="http://khadayatabusinessnetwork.com/wp/about-us/" style="font-size: 10px;font-family: Roboto Condensed;color:white" >About Us</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a  href="http://khadayatabusinessnetwork.com/wp/gallery/" style="font-size: 10px;font-family: Roboto Condensed;color:white" >Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a  href="http://khadayatabusinessnetwork.com/wp/event-trade-fairs/" style="font-size: 10px;font-family: Roboto Condensed;color:white" >Events</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a  href="http://khadayatabusinessnetwork.com/kcbf/self_invitee_form.php" style="font-size: 10px;font-family: Roboto Condensed;color:white" >Self Invitee</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a  href="http://khadayatabusinessnetwork.com/wp/business-directory/" style="font-size: 10px;font-family: Roboto Condensed;color:white" >Business Directory</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 
<a  href="http://khadayatabusinessnetwork.com/wp/contact-us/" style="font-size: 10px;font-family: Roboto Condensed;color:white" >Contact Us</a></p>
<p style="text-align:center;font-size: 12px;font-family: Roboto Condensed;color:white">&copy; 2016 <a target="_blank" href="http://sednainfosystems.com/" style="font-size: 12px;font-family: Roboto Condensed;color:#ffae00" >Sedna</a> . All Rights Reserved .</p><br><br>
	</div> 
 

<!----end copyright---------->
</body>
</html>
	





		
