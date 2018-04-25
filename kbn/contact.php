
<?php
//********* Code for Mail ********
$msg="";
$sucss="";
$req="";
if (isset($_POST['send']))
 { 
// declare all variable
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];
   
   if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["message"]))
   {
		$formcontent=" From: $name \n Email: $email \n Phone No: $phone \n Message: $message";
		$recipient = "info@khadayatabusinessnetwork.com,$email";
		$subject = "Message from KBN -Contact Form";
		$mailheader = "From: $name \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		
		$sucss="Message Sent Successfully!!";
		$_POST = array();
	}
  else
  {
	 $req="*";
	 $msg="Please Fill in all Mandatory Fields!!";
	 
  }
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<title>KHADAYATA COMMUNITY BUSINESS FORUM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>


<link rel="shortcut icon" type="image/png" href="images\KBN logo.png" width="16" height="16"/>
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
          txt1.value="";
         $('#mobNumbMsg').show();
         }
         else
         {
           $('#mobNumbMsg').hide();
         }
}
function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{ 
	 
	$('#emailMsg').show();
	
  	}else{
		$('#emailMsg').hide();
	}
}
</script>


<script>
$(function(){
    $('#orderModal').modal({
        keyboard: true,
        backdrop: "static",
        show:false,
        
    }).on('show', function(){
          var getIdFromRow = $(event.target).closest('tr').data('id');
        //make your ajax call populate items or what even you need
        $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow </script>
		
		<style>
		.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
	font-size:16px;
	 color:#000000;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}

.p{padding:0x;
   border-radius:40px;
   width:200px;
   height:160px;
   padding:15px;
   }
   h2{color: #047dc8;}
</style>

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
         <!--  <li><a href="support.html"><span>Support</span></a></li> -->
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="portfolio.html">Portfolio</span></a></li> 
		   <li class="dropdown">
             <ul class="dropbtn" style="padding-top:19px;padding-left:22px;padding-right:22px" >Events
                       <div class="dropdown-content">
					    <a href="2_july.html" >2<sup>nd</sup> july seminar</a>  
                       <a href="30April Event.html">30<sup>th</sup> April Event</a>
                        <a href="19_Aug.html" >19<sup>th</sup> Aug Event</a>
              </div></ul></li>
		  
	      <li><a href="self_invitee_form.php"><span>Self Invitee</span></a></li> 
          <li class="active"><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     <!-- <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span><big>KHADAYATA BUSINESS NETWORK</big><br/></span></a>
                       		   <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /><span><big>KHADAYATA BUSINESS NETWORK</big><br /> </span></a>
							   <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /><span><big>KHADAYATA BUSINESS NETWORK</big><br /></span></a>
							   </div>
        <div class="clr"></div>
      </div -->
    </div>
  <div class="content">
    <div class="content_resize">
      <center><h2 ><span>AREA Directors</span></h2>  </center>
      <center>
             <table  BORDER="1" RULES="rows" frame="box" cellpadding="5px" cellspacing="0px" style="background-color:ffffff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"  width="70%" height="100%" >
			     <tr style="height:35px;color:#ffffff;background-color:#00264d;"><th align="left" style="padding:9px">Area</th><th align="left" style="padding:9px">Name</th><th align="left" style="padding:9px" >Contact No</th></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;">Mira Road / Bhayander</td><td style="padding:8px;">Mr. Tejesh Vani</td><td style="padding:8px"> 9892790199</td></tr>
                 <tr ><td style="padding:8px;">Thane To Badlapur </td><td style="padding:8px"> Mr. Hardik Nadiyana</td><td style="padding:8px"> 8425043894</td></tr>
                 <tr style="background-color:#ffffff" ><td style="padding:8px;">Ghatkoper To Mulund</td><td style="padding:8px">  Mr. Kiran Desai</td><td style="padding:8px"> 9320724330</td></tr>
                 <tr ><td style="padding:8px;" Rowspan=3  >Malad To Andheri </td><td style="padding:8px; border-bottom:1px solid #F9FBFA;"> Mr. Sandeep Shah</td><td style="padding:8px;border-bottom:1px solid #F9FBFA;"> 9820318422</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA"> Mr. Jignesh Bhalavat</td><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA"> 9820395856</td></tr>
                 <tr ><td style="padding:8px">Ms. Purvi Bhalavat </td><td style="padding:8px">9820182844</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;" Rowspan=3 >Borivali / Dahisar</td><td style="padding:8px;border-bottom:1px solid #ffffff;background-color:#ffffff">  Mr. Nainesh Shah</td><td style="padding:8px;border-bottom:1px solid #ffffff;background-color:#ffffff">9821138471</td></tr>
                 <tr><td style="padding:8px;border-bottom:1px solid #ffffff;background-color:#ffffff">CA. Jayesh Shah</td><td style="padding:5px;border-bottom:1px solid #ffffff;background-color:#ffffff">9869925671</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px">CA. Narendra Shah </td><td style="padding:8px">9702643000</td></tr>
                 <tr ><td style="padding:8px;" Rowspan=4>Kandivali</td><td style="padding:8px;border-bottom:1px solid #F9FBFA;"> Ms. Pratibha Shah</td><td style="padding:8px;border-bottom:1px solid #F9FBFA;">9323994391</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA">Ms. Lata J. Shah </td><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA">9321379232</td></tr>
                 <tr ><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA">Mr. Jayesh H. Shah </td><td style="padding:8px;border-bottom:1px solid #F9FBFA;background-color:#F9FBFA">9821379232</td></tr>
                 <tr ><td style="padding:8px;background-color:#F9FBFA">Mr. Chintan Shah </td><td style="padding:8px;background-color:#F9FBFA">9969570135</td></td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;" Rowspan=3>Vile Parle To Bandra</td><td style="padding:8px;border-bottom:1px solid #ffffff;background-color:#ffffff">  Mr. Viren Shah </td><td style="padding:8px;border-bottom:1px solid #ffffff;">9969450110</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;border-bottom:1px solid #ffffff;">Mr. Yash Shah </td><td style="padding:8px;border-bottom:1px solid #ffffff;">9819111178</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px">Mr. Paresh Shah</td><td style="padding:8px"> 9987686251</td></tr>
                 <tr ><td style="padding:8px;">South Mumbai </td><td style="padding:8px">Mr. Premal Parikh </td><td style="padding:8px">9820999056</td></tr>
                 <tr style="background-color:#ffffff"><td style="padding:8px;">Matunga </td><td style="padding:8px">Dr. CA.  Chaitanya Shah </td><td style="padding:8px">9322232039</td></tr>
                 <tr ><td style="padding:8px;">Sion</td><td style="padding:8px"> Dr. Rajendra Bhalavat</td><td style="padding:8px"> 9820740668</td></tr>
             </table>
	 </center>
<br><br>
   
   
   
		  <table>
		  <tr>
		  <td><img src="images\con-person\rupa.png" class="p"></td>
		  <td><img src="images\con-person\tejasbhai.png" class="p" ></td>
		  <td><img src="images\con-person\hbn.png"  class="p" ></td>
		  <td><img src="images\con-person\kiran.png"  class="p"></td>
		  </tr>
		  
		  <tr align="center" >
		  <td  ><a href="#openModal">Ms. Rupal Shah</a></td>
		  <td><a href="#openModal1">Mr. Tejesh Vani</a></td>
		  <td><a href="#openModal2">Mr. Hardik Nadiyana</a></td>
		  <td><a href="#openModal3">Mr. Kiran Desai</a></td>
		  </tr>
		  
		  <tr>
		  <td><img src="images\con-person\sandeep-shah.png"  class="p"> </td>
		  <td ><img src="images\con-person\jigneshb.png" class="p"></td>
		  <td> <img src="images\con-person\per-icon.png"  class="p" ></td>
		  <td><img src="images\con-person\nainesh.png"  class="p"  /></td>
		  </tr>
		  
		  <tr align="center" >
		  <td ><a href="#openModal4">Mr. Sandeep Shah</a></td>
		  <td><a href="#openModal5">Mr. Jignesh Bhalavat</a></td>
		  <td><a href="#openModal6">Ms. Purvi Bhalavat</a></td>
		  <td><a href="#openModal7">Mr. Nainesh Shah</a></td>
		  </tr>
		  
		  <tr>
		  <td><img src="images\con-person\per-icon.png"  class="p" ></td>
		  <td><img src="images\con-person\narendra.png"  class="p" ></td>
		  <td><img src="images\con-person\Pratibhaben.png"  class="p"></td>
		  <td><img src="images\con-person\lataben.png"   class="p"></td>
		  </tr>
		  
		  <tr align="center" >
		  <td><a href="#openModal8">CA. Jayesh Shah</a></td>
		  <td><a href="#openModal9">CA. Narendra Shah</a></td>
		  <td><a href="#openModal10">Ms. Pratibha Shah</a></td>
		  <td><a href="#openModal11">Ms. Lata J. Shah</a></td>
		  </tr>
		  
		  <tr>
		  <td><img src="images\con-person\per-icon.png"  class="p"> </td>
		  <td ><img src="images\con-person\per-icon.png"  class="p" ></td>
		  <td><img src="images\con-person\per-icon.png"  class="p"></td>
		  <td><img src="images\con-person\per-icon.png"   class="p"></td>
		  </tr>
		  
		  <tr align="center" >
		  <td  ><a href="#openModal12">Mr. Jayesh H. Shah</a></td>
		  <td><a href="#openModal13">Mr. Chintan Shah</a></td>
		  <td><a href="#openModal14">Mr. Viren Shah</a></td>
		  <td><a href="#openModal15">Mr. Yash Shah</a></td>
		  </tr>
		  
		  <tr>
		  <td><img src="images\con-person\per-icon.png"  class="p" ></td>
		  <td ><img src="images\con-person\Premal.png"  class="p" ></td>
		  <td> <img src="images\con-person\Chaitanyashah.png"  class="p"></td>
		  <td><img src="images\con-person\Dr. Rajendra.png"   class="p"/></td>
		  </tr>
		  
		  <tr align="center" >
		  <td><a href="#openModal16">Mr. Paresh Shah</a></td>
		  <td><a href="#openModal17">Mr. Premal Parikh</a></td>
		  <td><a href="#openModal18">Dr. CA. Chaitanya Shah</a></td>
		  <td><a href="#openModal19">Dr. Rajendra Bhalavat</a></td>
		  </tr>
		  </table>
          
          
</p> 
           
<!---- for model--->
<div id="openModal" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Rupal shah</h2>
        <p>Rupal shah is Advisor in LIC .</p>
        <p><img src="images\icon\area.png"  height="19px" > Vasai To Virar<br>
		<img src="images\icon\cal.png"  height="18px" > 9820999056<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal1" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Tejesh Vani</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Mira Road / Bhayander<br>
		<img src="images\icon\cal.png"  height="18px" > 9892790199<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal2" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Hardik Nadiyana</h2>
        <p align="justify" >&nbsp;&nbsp;&nbsp;Papers Published in  15+ International Conference and IEEE<br>
        
		<ul style="padding-left:28px">
		     <li><span style="font-weight:bold">Past&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span> Prof, SIPNA CoET.</li>
		     <li><span style="font-weight:bold">Current&nbsp;&nbsp;: </span>Director, SEDNA Infosystems</li>
             <li> Conducting Technical Workshop in Engineering Colleges </li>
             <li>Expertise in .NET/ NS-2/ Big Data / Android / Matlab</li>
		 </ul>
		 </p>
        <p><img src="images\icon\area.png"  height="19px" > Thane To Badlapur<br>
		<img src="images\icon\cal.png"  height="18px" > 8425043894<br>
		<img src="images\icon\email.png"  height="18px" > sednainfo5@gmail.com</p>
    </div>
</div>
<div id="openModal3" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Kiran Desai</h2>
        <p>&nbsp;&nbsp;&nbsp;&nbsp; Kiran Desai, Destine Technologies,  Software Development. </p>
        <p><img src="images\icon\area.png"  height="19px" > Ghatkoper To Mulund<br>
		<img src="images\icon\cal.png"  height="18px" > 9320724330<br>
		<img src="images\icon\email.png"  height="18px" > kirankkdesai@gmail.com</p>
    </div>
</div>
<div id="openModal4" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Sandeep Shah</h2>
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp; Sandeep V Shah is M A in Numismatics & Archaeology  Mumbai University. Cataloguer,  Decipher, Valuers & Grader of Coins. </li>
		     <ul style="padding-left:28px">
		          <li><span style="font-weight:bold">Professional Numismatist Member :</span> Mumbai Coin Society.</li>
		          <li><span style="font-weight:bold">Member :</span> Gujarat Coin Society</li>
			 </ul>
			</p>
        <p><img src="images\icon\area.png"  height="19px" > Malad To Andheri<br>
		<img src="images\icon\cal.png"  height="18px" > 9820999056<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal5" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Jignesh Bhalavat</h2>
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp; Dr Jignesh H Bhalavat is Partner in Ankur - Germinating Ideas.We are into the field of Graphic Designing providing Creative, Quality and Cost-effective Designing solutions for the Pharmaceutical and Healthcare Industry for the past 15 years.
            Our clientele includes Ipca Laboratories, Shreya life sciences, Unichem laboratories, Lilavati Hospital to name a few.
           <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight:bold">Networks:</span> Ankur is a member with BNI for past 9 years.
            Personally have done my graduation in medicine. Enjoying a happy married life with Ms Purvi Bhalavat for past 17 years.</p>
        <p><img src="images\icon\area.png"  height="19px" > Malad To Andheri<br>
            <img src="images\icon\cal.png"  height="18px" > 9820395856<br></p>
    </div>
</div>
<div id="openModal6" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Ms. Purvi Bhalavat</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Malad To Andheri<br>
		<img src="images\icon\cal.png"  height="18px" > 9820182844<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal7" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Nainesh Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Borivali / Dahisar<br>
		<img src="images\icon\cal.png"  height="18px" > 9821138471<br>
		<!-- <img src="images\icon\email.png"  height="18px" >.</p> -->
    </div>
</div>
<div id="openModal8" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>CA. Jayesh Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Borivali / Dahisar<br>
		<img src="images\icon\cal.png"  height="18px" > 9869925671<br>
		<!-- <img src="images\icon\email.png"  height="18px" >.</p> -->
    </div>
</div>
<div id="openModal9" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>CA. Narendra Shah</h2>
        <p align="justify">Narendra H Shah  a qualified Chartered Accountant by profession as well as holding Diploma in Information Systems Audit (DISA). Having more than 18 years' experience in the fields of Accounts and Internal audit, having served Pharma, Shipping, FMCG and Diamond & Jewellery Industries. Have also worked with a well known Big 4 consulting firm Deloitte for 9 years.</p>
        <p><img src="images\icon\area.png"  height="19px" > Borivali / Dahisar<br>
<img src="images\icon\cal.png"  height="18px" > 9702643000<br>
<!-- <img src="images\icon\email.png"  height="18px" > lata_lic@yahoo.co.in<br>
<img src="images\icon\map.png"  height="18px" >--></p> 
    </div>
</div>

<div id="openModal10" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Ms. Pratibha Shah</h2>
        <p></p><img src="images\icon\area.png"  height="19px" > Kandivali<br>
		<img src="images\icon\cal.png"  height="18px" > 9323994391<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal11" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2 >Ms. Lata J. Shah</h2>
        <p></p>
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;   Lata Jayesh Shah is Advisor in Life Insurance Corp. Of India from last 17 years. Achieved 15 times MDRTCM Club members from last 8years. currently no 1 in branch.Specialist in Need base selling concept.Also well active in Lions Club as a President<br><br>
         <img src="images\icon\area.png"  height="19px" > Kandivali<br>
         <img src="images\icon\cal.png"  height="18px" >  9321379232/9821379232 /02228685487<br>
         <img src="images\icon\email.png"  height="18px" > lata_lic@yahoo.co.in<br>
          <img src="images\icon\map.png"  height="18px" >  501/D8,Ganesh siddhi soc.,<br>
                                                           Sector-5, charkop,kandivali (w),<br>
                                                           Mumbai-400067.<br>
        </p>
    </div>
</div>
<div id="openModal12" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Jayesh H. Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Kandivali<br>
		 <img src="images\icon\cal.png"  height="18px" > 9821379232<br>
		<!--  <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal13" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Chintan Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Kandivali<br>
		 <img src="images\icon\cal.png"  height="18px" > 9969570135<br>
		 <!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal14" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Viren Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Vile Parle To Bandra<br>
		<img src="images\icon\cal.png"  height="18px" > 9969450110<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal15" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Yash Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Vile Parle To Bandra<br>
		<img src="images\icon\cal.png"  height="18px" > 9819111178<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal16" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Paresh Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Vile Parle To Bandra<br>
		<img src="images\icon\cal.png"  height="18px" > 9987686251<br>
	<!-- 	<img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal17" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Mr. Premal Parikh</h2>
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Premal Parikh is a
		    <ul style="padding-left:28px" >
                <li>LIC Insurance advisor.From last 20 years active participant member in Khadayta activities </li>

               <li><span style="font-weight:bold">In Khadayata samaj : </span>Gave service as a secretery , and as a vice president of samaj </li>

               <li><span style="font-weight:bold">In Khadayta yuvak sangh :</span> gave service as a secretary and  also as a vice president</li>

               <li>Presently on post as a secretary in Nadiad Khadayta samaj.</li>
			 </ul>
		</p>
        <p>
		<img src="images\icon\area.png"  height="19px" > South Mumbai<br>
		<img src="images\icon\cal.png"  height="18px" > 9820999056<br>
		<img src="images\icon\email.png"  height="18px" > premal0209@yahoo.com</p>
    </div>
</div>
<div id="openModal18" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Dr. CA. Chaitanya Shah</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Matunga<br>
		<img src="images\icon\cal.png"  height="18px" > 9322232039<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<div id="openModal19" class="modalDialog">
    <div>	
        <a href="#close" title="Close" class="close">X</a>
        <h2>Dr. Rajendra Bhalavat</h2>
        <p></p>
        <p><img src="images\icon\area.png"  height="19px" > Sion<br>
		<img src="images\icon\cal.png"  height="18px" > 9820740668<br>
		<!-- <img src="images\icon\email.png"  height="18px" ></p> -->
    </div>
</div>
<br>
 <div class="clr"></div>
   
  <!------>
  <div class="container"> 
  <div class="row"  style="background-color:#ffffff"><br>
    <form action="" method="POST">
        <center>
          <table style="width:80%;" border="0" cellspacing="5px" cellpadding="5px" >
            <tr>
                <td colspan="2"  >
                    <h2>Get In Touch</h2>

                </td>
            </tr>
            <tr>
                <td style="height:50px">
                    <table style="width: 100%;" border="0" cellspacing="5px" cellpadding="5px">
                        <tr>
                           <td>
                               <span style="color:#DF1018;"></span> NAME 

                           </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Your Name" style="width:100%; height: 35px;padding-left:5px" value="">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="color:#DF1018;"></span> EMAIL 

                            </td>
                           </tr>
                          <tr>
                            <td>
                                <input type="text" name="email" onblur="emailvalidate();" id="email"  placeholder="Enter Your Email Id" style="width:100%; height: 35px;padding-left:5px" value=""><br><span style="display:none;color:#DF1018;font-weightbold;" id="emailMsg">Please enter valid email</span>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                  <span style="color:#DF1018;"></span> PHONE 

                            </td>
                             </tr>
                        <tr>
                            <td>
                                <input type="text"  onblur="mobval();" maxlength="10" id="mobno" placeholder="Enter Your Phone Number" style="width:100%; height: 35px;padding-left:5px" name="phone" value=""><br><span style="display:none;color:#DF1018;font-weightbold;" id="mobNumbMsg">Please enter correct mobile number</span>

                            </td>
                        </tr>
                    </table>
                </td>
                <td style="height:50px">
                     <table style="width: 100%;" border="0" cellspacing="5px" cellpadding="5px">
                        <tr>
                           <td>
                               <span style="color:#DF1018;"></span> MESSAGE 

                           </td>
                            </tr>
                         <tr>
                            <td>
                                <textarea class="txtarea" name="message" rows="10" placeholder="Enter Your Message"  style="width:100%;height:155px;padding-left:5px"></textarea>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <button id="btn" name="send" >SEND</button>
                             </td>
                         </tr>
                       </table>
                </td>
              </tr>
           </table>
         </center>
       </form>
     </div>
    </div>
   </div>
 </div>
  
  <!---footer--->
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
        <h2><span >Contact</span> Us</h2>
    
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
