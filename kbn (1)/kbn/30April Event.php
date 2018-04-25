<?php
//********* Code for Mail ********
$msg="";
$sucss="";
$req="";
if (isset($_POST['send']))
 { 
// declare all variable
	$name = $_POST['name'];
	
	$mobno = $_POST['mobno'];
   
   if (!empty($_POST["name"])&&!empty($_POST["mobno"]))
   {
		$formcontent=" From: $name \n\n mobile No: $mobno";
		$recipient = "addoncargo@apcargo.in,$email";
		$subject = "Message from Inquiry Form";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Thank you ! ";
		$_POST = array();
	}
  else
  {
	
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>KHADAYATA BUSINESS NETWORK FORUM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="shortcut icon" type="image/png" href="images\KBN logo.png" width="16" height="16"/>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
     <!--  <div class="rss">
        <p><a href="#">Subscribe to</a> <a href="#"><img src="images/rss.gif" width="16" height="16" alt="" /></a></p>
      </div> -->
      <div class="logo">
        <h1><a href="index.html"><img src="images/logo.png"  alt="logo"><br><br><br><br><br><br></a> </h1>
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
             <li><a href="portfolio.html">Portfolio</span></a></li>
	         <li><a href="self_invitee_form.php"><span>Self Invitee</span></a></li> 
             <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     
  </div>
  <div class="content">

    <div class="content_resize">
	
      <div class="mainbar" style="width:50%">
        <div class="article"> 
		  <h2><span style="color:#047DC8"> Event Attendant  </span></h2><br>
		  
		  <p><img src="images/111.jpg" style="height:570px" ></p>
		   
           
         
          
          <div class="clr"></div>
        </div>
               
      </div>
	     
      <div class="sidebar" style="float:left;width:50%">
         <h2 style="border-bottom:1px solid #d3d3d3;"><span style="color:#047DC8;"> </span></h2>
       
          <div class="clr" ></div>
		  <br> 
          
<table height="30%" width="90%" cellspacing="5px" cellpadding="1px" style= "border: 1px solid #a1a1a1;background-color:#f2f2f2; #ffebea; border-radius: 10px;V;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
		    <tr style="border:1px solid">
		        <td>Mr. Bipin Narshana</td>
				  <td>Mr. Kiran Desai</td>
				   <td>Ms. Pratibha Shah</td>
				 
				  
			</tr>
			
			
		   <tr>
		   <td>Mr. Chirag K Shah</td>
		   <td>Mr. Khushal Desai </td>	
          <td>Mr.Piyushbhai Gudana</td>		   
		   </tr>
			
			<tr>
			<td> Dr. Chaitanya Shah</td>
			 <td>Ms. Lata J. Shah</td>	
		     <td>Dr. Rajendra Bhalavat</td>
			 </tr>
			  
			 		  
			   
			    
	
		   <tr> 
			   <td>Mr. Chintan Shah</td>
			    <td>Mr. Nainesh Shah</td>
			  <td>Mr. Sandeep Shah</td>
			   
			    
			</tr>
		   <tr>
		       <td>Mr. Hardik Nadiyana</td>
			    <td>Mr. Narendra Shah</td>
			   <td>Mr.Sagar Soni</td>
				
				
				
			</tr>
			<tr>
		      <td>Mr. Jayesh H. Shah</td>
			  <td>Mr. Paresh Shah</td>
			  <td>Mr. Tejesh Vani</td>
			  
			   
			</tr>
			<tr>
			    <td>Mr. Jignesh Bhalavat</td>
				  <td>Mr. Premal Parikh</td>
				 <td>Mr. Viren Shah</td>
				  
			</tr>
			<tr>
			    <td>Mr. Jayesh Shah</td>
				<td>Ms. Purvi Bhalavat</td>
               <td>Mr. Yash Shah</td>
		   </tr>
		   </table>
		<br>
		 <form action="" method="post"  id="" name="">
       <table  height="40%" width="90%" cellspacing="10px" cellpadding="5px" style= "border: 1px solid #a1a1a1;background-color:#f2f2f2; #ffebea; border-radius: 10px;C;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
            <tr style="background-color:#146b85;color:#ffffff;font-size:20px;"><th style="height:45px">30 April Event</th></tr>
	         <tr>
	         <td style="font-size:16px;"><span style="color:#DF1018;"><?php echo $req;?></span>Name</td></tr>
             <tr><td ><input type="text" style="background-color:white;width:95%;height:25px;padding:4px"   name="name" id="name"  placeholder="Enter Your Name"  ></td>
             
             <tr><td   style="font-size:16px;align:center"><span style="color:#DF1018;"><?php echo $req;?></span>Mobile No.</td></tr>
             <td ><input type="text"    style="background-color:white;width:95%;height:25px;padding:4px" onblur="mobval();"  name="mobno"  id="mobno" placeholder="Enter Your Mobile No"  ></td >
	         </tr>
	         <tr><td  style="padding:15px;align:left" ><input type="submit" onclick="resetform()" id="btn" value="Send" name="send"></td></tr>

	      
        </table> 
		<br>
        </form>
     <!--    <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#"></a><br />
             </li>
            <li><a href="#"><br />
             </li>
            <li><a href="#"></a><br />
              </li>
            <li><a href="#"></a><br />
             </li>
            <li><a href="#"></a><br />
              </li>
            <li><a href="#"></a><br />
             </li>
          </ul> 
        </div> -->
      </div>
      <div class="clr"></div>
	   
    </div>
	</div>
		
  </div>
  

  
  
  
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Location</span></h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.2826878347!2d72.74111790713513!3d19.082769838238054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1477575377840" width="500px" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        <div style="clear:both;"></div>
        </div>
      </div>
</div>
</body>
</html>
