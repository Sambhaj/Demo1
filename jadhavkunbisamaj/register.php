<?php
include('db.php');
?>
<?php
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";
$main_id="";
$select="";

/* $sql=mysql_query("SELECT subfaculty FROM faculty where faculty="$faculty" ");
	echo"$sql"; */
if(isset($_POST['submit'])) {
	
// declare all variable
$ppr="";
$mr=$_POST['mr'];

$fname=$_POST['name'];
$name=$mr.".".$fname;
$faculty=$_POST['country'];
$subfaculty=$_POST['state'];


$cont_no1=$_POST['cont_no1'];
$cont_no2=$_POST['cont_no2'];

$email=$_POST['email'];
$awar_yr=$_POST['awar_yr'];
$national=$_POST['national'];
$international=$_POST['international'];


$uni=$_POST['uni'];
$tittle=$_POST['tittle'];

$sub=$_POST['sub'];
$work_add=$_POST['work_add'];
$self_add=$_POST['self_add'];
$nat_no=$_POST['nat_no'];
$intl_no=$_POST['intl_no'];



{
	
mysql_query("INSERT INTO  tb_register(name,faculty,subfaculty,subject,phd_title,awarded_year,uni_name,work_add,self_add,cont_no,cont_no2,email,publish_ppr_N,publish_ppr_IN,national_no,intl_no) VALUES('$name','$faculty','$subfaculty','$sub','$tittle','$awar_yr','$uni','$work_add','$self_add','$cont_no1','$cont_no2','$email','$national','$international','$nat_no','$intl_no')");

	echo "<script>alert('Register succssefully')</script>";
	echo"$international";
} 
}
else {
			
	echo"Please Fill In All Mandatory Fields!";
	 
			}



?>
			
			<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
   
   <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
  
  
   <link rel="stylesheet" href="select_jquery.css"/>
  
<!-- include JavaScript file here-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="select_jquery.js"></script>
  
  
  
  
  
  
  
  
  
  <script language="javascript" src="js/prototype-1.6.0.2.js" type="text/javascript"></script>
<script language="javascript" src="js/preview_templates.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"></script>
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

  </script>
  <SCRIPT LANGUAGE="javascript">
<!--
function OnChange(dropdown)
{
    var myindex  = dropdown.selectedIndex
    var SelValue = dropdown.options[myindex].value
    var baseURL  = <Some value based on SelValue>
    top.location.href = baseURL;
    
    return true;
}
//-->
</SCRIPT>

</head>
<body background-color="#C7EAFD">
<div id="main" ><!-- Main starts here -->

<div id="header" style="padding:3px 330px 110px 24px;background-color:#C7EAFD"><!-- Header starts here -->

	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td ><h3 style="font-family: Pristina;font-size:32px;font-weight:bold">जे के एस आचार्य</h3></td>
	<td align="right" valign="top">
	
	</td>
	</tr></table>
	
</div><!-- Header ends here -->

<div id="navigation" style="margin:0px 7px -34px 6px;">
<ul>
	<li class="first"><a href="index.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
    <li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="register.php" title="">JKS Aacharya Manch</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
</ul>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">

 
	<br>
<div class="clear"></div>
<div id="leftpart">
	
	
</div>
<script>// Countries
var country_arr = new Array("Art", "Commerce", "Science", "Education", "Engineering and Technology", "Home Science", "Law", "Medicine", "Social Science")
// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Music|Urdu|Sanskrit|Hindi|English|Marathi|Persion";
s_a[2] = "Business Management|Commerce|Business Economics|Account n Stats";
s_a[3] = "Chemistry|Botany|Physics|Biochemistry/micro|Mathematices|Biotechnology|Zoology|Statices|Computer Science|Geology|Environmental Science";
s_a[4] = "Education|Physical Education";
s_a[5] = "Computer Engineering|civil Engineering|Production Engineering|Production Engineering|Electronic Engineering|Mechanical  Engineering|Information Technology|Textile Engineering|Chemical Engineering|Electrical Engineering";
s_a[6] = "Home science|Cosmetic technology";
s_a[7] = "Law";
s_a[8] = "pharmaceutical science";
s_a[9] = "Ecomomics|Library Science|Sociology|Mass Communication|Histroy|Psycology|Social Work|Geography|Home Economics|Yog-shastra|Philosophy|Political Science";


function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select Subfaculty', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Faculty', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}</script>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
     
	
      <div class='panel-body'>
        <form class='form-horizontal' action="" method="post" >
          <div class='form-group'>
                   <label  style="font-size:26px;font-family: Pristina;color: #BC0346;padding-left:190px" >Registration Form</label>
				   <a href="display_faculty.php"  style="font-size:20px;font-family: Pristina;font-weight:bold;color: #BC0346;padding-left:250px" >Search</a>
                  <marquee style="color:#006600; font-size:14px; font-weight:bold" height="55px" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="alternate" scrollamount="2">
            	जाधव कुणबी समाजातील आचार्य पदवी(Ph.D) प्राप्त संशोधकानी येथे नोंदणी करावी.
	</marquee>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Prof Dr.</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title' name="mr">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                   </select>
                </div>
              </div>
              <div class='col-md-6 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="name" id='id_first_name' placeholder='Name' type='text'>
                </div>
              </div>
              
            </div>
          </div>
         	  
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Faculty Of</label>
            <div class='col-md-8'>
             
              <div class='col-md-8 indent-small'>
                <div class='form-group internal'>
                    <select class='form-control'  id="country" name="country">
              
                  </select>
                </div>
				<script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>
              </div>
            
            </div>
			  <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Subfaculty Of</label>
            <div class='col-md-8'>
             
              <div class='col-md-8 indent-small'>
                <div class='form-group internal'>
                   
				  <select class='form-control' name="state" id="state"></select>
                </div>

              </div>
            
            </div>
			
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Subject</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
		      <input class='form-control' id='id_email' placeholder='' type='text' name="sub">
                </div>
              </div>
              
            </div>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Ph.D Title</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='' type='text' name="tittle">
                </div>
              </div>
             
            </div>
			
          </div>
		    <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Awarded Year</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
 <select class='form-control' id='id_equipment' name="awar_yr">
                   <option value="0">Select </option>
				             <option value="2017">2017</option>
							 <option value="2016">2016</option>
							 <option value="2015">2015</option>
							 <option value="2014">2014</option>
							 <option value="2013">2013</option>
							 <option value="2012">2012</option>
							 <option value="2011">2011</option>
							 <option value="2010">2010</option>
							 <option value="2009">2009</option>
	                         <option value="2008">2008</option>
                             <option value="2007">2007</option>
                             <option value="2006">2006</option>
                             <option value="2005">2005</option>
                             <option value="2004">2004</option>
                             <option value="2003">2003</option>
                             <option value="2002">2002</option>
                             <option value="2001">2001</option>
							 <option value="2000">2000</option>
							 <option value="1999">1999</option>
							 <option value="1998">1998</option>
							 <option value="1997">1997</option>
						     <option value="1996">1996</option>
							 <option value="1995">1995</option>
							 <option value="1994">1994</option>
							 <option value="1993">1993</option>
							 <option value="1992">1992</option>
							 <option value="1991">1991</option>
							 <option value="1990">1990</option>
							 <option value="1989">1989</option>
							 <option value="1988">1988</option>
							 <option value="1987">1987</option>
							 <option value="1986">1986</option>
							 <option value="1985">1985</option>
                        </select>
                                 </div>
              </div>
             
            </div>
			
			
          </div>
         <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>University Name</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
		    <select class='form-control' id='id_equipment' name="uni">
                   <option value="0">Select </option>
				             <option value="Dr. Babasaheb Ambedkar Marathwada University, Aurangabad-431 004.">Dr. Babasaheb Ambedkar Marathwada University, Aurangabad-431 004.</option>
							 <option value="Dr. Babasaheb Ambedkar Technological University, Lonere-402 103">Dr. Babasaheb Ambedkar Technological University, Lonere-402 103</option>
							 <option value="Dr. Punjabrao Deshmukh Krishi Vidyapeeth, Akola-444 104.">Dr. Punjabrao Deshmukh Krishi Vidyapeeth, Akola-444 104.</option>
							 <option value="Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya, Nagpur-441 106">Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya, Nagpur-441 106</option>
							 <option value="Konkan Krishi Vidyapeeth, Dapoli, District Ratnagiri-415 712">Konkan Krishi Vidyapeeth, Dapoli, District Ratnagiri-415 712</option>
							 <option value="Maharashtra Animal & Fishery Sciences University, Seminary Hills, Nagpur-440 006">Maharashtra Animal & Fishery Sciences University, Seminary Hills, Nagpur-440 006</option>
							 <option value="Maharashtra University of Health Sciences, Nashik-422 013">Maharashtra University of Health Sciences, Nashik-422 013</option>
							 <option value="Mahatma Phule Krishi Vidyapeeth, Rahuri-413 722">Mahatma Phule Krishi Vidyapeeth, Rahuri-413 722</option>
							 <option value="Marathwada Agricultural University, Parbhani-431 402">Marathwada Agricultural University, Parbhani-431 402</option>
							 <option value="Mumbai University, Mumbai-400 032">Mumbai University, Mumbai-400 032</option>
							 <option value="North Maharashtra University, Jalgaon- 425 001">North Maharashtra University, Jalgaon- 425 001</option>
							 <option value="Pune University, Pune-411 007">Pune University, Pune-411 007</option>
							 <option value="Sant Gadge Baba Amravati University, Amravati-444 602.">Sant Gadge Baba Amravati University, Amravati-444 602.</option>
							 <option value="Shivaji University, Kolhapur-416 004">Shivaji University, Kolhapur-416 004</option>
							 <option value="Smt. Nathibai Damodar Thackersey Women's University, Mumbai-400 020">Smt. Nathibai Damodar Thackersey Women's University, Mumbai-400 020</option>
							 <option value="Solapur University, Solapur, Solapur Pune Road, Kegaon, Solapur-413 255">Solapur University, Solapur, Solapur Pune Road, Kegaon, Solapur-413 255</option>
							 <option value="Swami Ramanand Teerth Marathwada University, Nanded-431 606.">Swami Ramanand Teerth Marathwada University, Nanded-431 606.</option>
							 <option value="The Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur-440 001 (M.S).">The Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur-440 001 (M.S).</option>
							 <option value=" Yashwant Rao Chavan Maharashtra Open University, Nashik-422 222"> Yashwant Rao Chavan Maharashtra Open University, Nashik-422 222</option>
							 <option value="Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Post Box No. 16, Panchtila, Umri Village, Arvi Road, Wardha, Mumbai - 442 001">Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Post Box No. 16, Panchtila, Umri Village, Arvi Road, Wardha, Mumbai - 442 001</option>
							 <option value="Bharati Vidyapeeth Bharati Vidyapeeth Bhawan, Lal Bahadur Shastri Marg, Pune-411 03">Bharati Vidyapeeth Bharati Vidyapeeth Bhawan, Lal Bahadur Shastri Marg, Pune-411 03</option>
							 <option value="MaharashtraCentral Institute of Fisheries Education Fisheries University Road, 7 Bungalows, Andheri West, Mumbai-400 061 Maharashtra">MaharashtraCentral Institute of Fisheries Education Fisheries University Road, 7 Bungalows, Andheri West, Mumbai-400 061 Maharashtra</option>
							 <option value="D.Y. Patil Educational Society Line Bazar, Kasaba, Bavada, Kolhapur-416 006 (Maharashtra)">D.Y. Patil Educational Society Line Bazar, Kasaba, Bavada, Kolhapur-416 006 (Maharashtra)</option>
							 <option value="Datta Meghe Institute of Medical Sciences Atrey Layout, Pratap Nagar, Nagpur-440 022 (Maharashtra)">Datta Meghe Institute of Medical Sciences Atrey Layout, Pratap Nagar, Nagpur-440 022 (Maharashtra)</option>
							 <option value="Deccan College Postgraduate & Research Institute Pune-411 006 Maharashtra">Deccan College Postgraduate & Research Institute Pune-411 006 Maharashtra</option>
							 <option value="Dr. D.Y. Patil Vidyapeeth Sant Tukaram Nagar, Pimpri, Pune-411 018 Maharashtra">Dr. D.Y. Patil Vidyapeeth Sant Tukaram Nagar, Pimpri, Pune-411 018 Maharashtra</option>
							 <option value="Gokhale Institute of Politics & Economics BMC College Road, Deccan Gymkhana, Pune-411 004 Maharashtra">Gokhale Institute of Politics & Economics BMC College Road, Deccan Gymkhana, Pune-411 004 Maharashtra</option>
							 <option value="Homi Bhabha National Institute Regd. Office: Knowledge Management Group, Bhabha Atomic Research Centre, Central Complex, Mumbai-400 085 Maharashtra">Homi Bhabha National Institute Regd. Office: Knowledge Management Group, Bhabha Atomic Research Centre, Central Complex, Mumbai-400 085 Maharashtra</option>
							 <option value="Indira Gandhi Institute of Development Research General Vaidya Marg, Santosh Nagar, Goregaon East, Mumbai-400 065 Maharashtra">Indira Gandhi Institute of Development Research General Vaidya Marg, Santosh Nagar, Goregaon East, Mumbai-400 065 Maharashtra</option>
							 <option value=" Institute of Armament Technology Girinagar, Pune-411 025 Maharashtra"> Institute of Armament Technology Girinagar, Pune-411 025 Maharashtra</option>
							 <option value="International Institute for Population Sciences Govandi Station Road, Deonar, Mumbai-400 088 Maharashtra">International Institute for Population Sciences Govandi Station Road, Deonar, Mumbai-400 088 Maharashtra</option>
							 <option value=" Krishna Institute of Medical Sciences Malka Pur, Karad, Distt. Satara-415"> Krishna Institute of Medical Sciences Malka Pur, Karad, Distt. Satara-415</option>
							 <option value="MGM Institute of Health Sciences MGM Campus, Sector-18, Kamothe, Navi Mumbai-410 209">MGM Institute of Health Sciences MGM Campus, Sector-18, Kamothe, Navi Mumbai-410 209</option>
							 <option value="Narsee Monjee Institute of Management Studies VL Mehta Road, Vile Parle West, Mumbai-400 056 Maharashtra ">Narsee Monjee Institute of Management Studies VL Mehta Road, Vile Parle West, Mumbai-400 056 Maharashtra </option>
							 <option value="Padmashree Dr. D.Y. Patl Vidyapeeth Vidya Nagar, Sector 7, Nerul, Navi Mumbai-400 706 Maharashtra">Padmashree Dr. D.Y. Patl Vidyapeeth Vidya Nagar, Sector 7, Nerul, Navi Mumbai-400 706 Maharashtra</option>
							 <option value="Pravara Institute of Medical Sciences P.O.-Loni BK-413 736, District Ahmednagar Maharashtra">Pravara Institute of Medical Sciences P.O.-Loni BK-413 736, District Ahmednagar Maharashtra</option>
							 <option value="SYMBIOSIS - International University, Senapati Bapat Road, Pune-411 004 Maharashtra">SYMBIOSIS - International University, Senapati Bapat Road, Pune-411 004 Maharashtra</option>
							 <option value=" Tata Institute of Fundamental Research Homi Bhabha Road, Mumbai-400 005 Maharashtra "> Tata Institute of Fundamental Research Homi Bhabha Road, Mumbai-400 005 Maharashtra </option>
							 <option value="Tata Institute of Social Sciences VN Purav Marg, Deonar, Mumbai-400 088 Maharashtra">Tata Institute of Social Sciences VN Purav Marg, Deonar, Mumbai-400 088 Maharashtra</option>
							 <option value="Tilak Maharashtra Vidyapeeth Vidyapeeth Bhawan, Gultekedi, Pune-411 037 Maharashtra ">Tilak Maharashtra Vidyapeeth Vidyapeeth Bhawan, Gultekedi, Pune-411 037 Maharashtra </option>
							 <option value="Institute of Chemical Technology Matunga, Mumbai Maharashtra">Institute of Chemical Technology Matunga, Mumbai Maharashtra</option>
									 
                        </select>
                  
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
			 <label class='control-label col-md-4' for='id_slide'>Publish Paper</label>

            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal'>
                   
                    <input  type='checkbox' value='National' name="national"> National<br><br>
				    <input  type='checkbox' value='International' name="international"> International
                 
                </div>
              </div>
			  
              <div class='col-md-1'>
                <div class='form-group internal'>
                  <label  for='id_slide' >No</label><br><br>
                   <label  for='id_slide' >No</label>

              </div>
			  
			  </div>
			  
			  <div class='col-md-3' >
			  
                <div class='form-group internal' >
                   <select id='id_equipment' class='form-control' name="nat_no">
                   <option value="0">Select </option>
				             <option value="1">1</option>
							 <option value="2">2</option>
							 <option value="3">3</option>
							 <option value="4">4</option>
							 <option value="5">5</option>
							 <option value="6">6</option>
							 <option value="7">7</option>
							 <option value="8">8</option>
							 <option value="9">9</option>
	                         <option value="10">10</option>
                             <option value="11">11</option>
                             <option value="12">12</option>
                             <option value="13">13</option>
                             <option value="14">14</option>
                             <option value="15">15</option>
                             <option value="16">16</option>
                             <option value="17">17</option>
							 <option value="18">18</option>
							 <option value="19">19</option>
							 <option value="20">20</option>
							 <option value="21">21</option>
						     <option value="22">22</option>
							 <option value="23">23</option>
							 <option value="24">24</option>
							 <option value="25">25</option>
							 
                        </select><br>
                    <select id='id_equipment' class='form-control'  name="intl_no"  >
                   <option value="0">Select </option>
				             <option value="1">1</option>
							 <option value="2">2</option>
							 <option value="3">3</option>
							 <option value="4">4</option>
							 <option value="5">5</option>
							 <option value="6">6</option>
							 <option value="7">7</option>
							 <option value="8">8</option>
							 <option value="9">9</option>
	                         <option value="10">10</option>
                             <option value="11">11</option>
                             <option value="12">12</option>
                             <option value="13">13</option>
                             <option value="14">14</option>
                             <option value="15">15</option>
                             <option value="16">16</option>
                             <option value="17">17</option>
							 <option value="18">18</option>
							 <option value="19">19</option>
							 <option value="20">20</option>
							 <option value="21">21</option>
						     <option value="22">22</option>
							 <option value="23">23</option>
							 <option value="24">24</option>
							 <option value="25">25</option>
							 
                        </select>						
				  
                 
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Self Address </label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='' rows='2' name="self_add"></textarea>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Working Address </label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='' rows='2' name="work_add"></textarea>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact No</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='mobno' onblur="mobval();" placeholder='' type='text' name="cont_no1">
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='mobno1' onblur="mobval1();"  placeholder='' type='text' name="cont_no2">
                </div>
              </div>
            </div>
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Email-Id</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='email' onblur="emailvalidate();" placeholder='E-mail' type='text' name="email">
                </div>
              </div>
             
            </div>
			
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="submit" style="background-color:#689F1D;border-color:#689F1D">Submit</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
		 
        </form>
      </div>
	  
<div id="rightpart">
    
    </div>	
<div class="clear"></div>
<marquee style="color:#006600; font-size:14px; font-weight:bold" height="55px" onmouseover="this.stop();" onmouseout="this.start();" direction="left" behavior="alternate" scrollamount="2">
<img src="icons/tree.png">	आपण हिरव्यागार वातावरणात राहू इछीता की...
रखरखीत वाळवंटात?
मर्जी आपली कारण...
जीवन आहे आपले...
झाडे लावा - झाडे जगवा!!<img src="icons/tree.png">
	</marquee>
</div>
</div><!-- Content ends here -->

</div><!-- Content Holder ends here -->

<!--<div class="bottomImg"><img src="images/02.png" alt="" /></div> -->

<div id="footer" ><!-- Footer starts here -->
  Visitor: <!-- Start of StatCounter Code for Default Guide --><script type="text/javascript">
var sc_project=9589075;
var sc_invisible=0;
var sc_security="555fc630";
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img class="statcounter"
src="http://c.statcounter.com/9589075/0/555fc630/0/" alt="web
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
  
  <a href="http://www.facebook.com/jadhavkunbisamaj" target="_blank"><img src="images/face.jpg"></img></a>
<!--<div lang="copy">&copy; Copyright 2014</div> --> 
<div class="design"><a href="http://sednainfosystems.com">&copy; Copyright 2014 | Powered by <b style="color:#EFFC7D">SEDNA</b></a></div>
<div class="clear"></div>
</div><!-- Footer ends here -->
</div><!-- Main ends here -->
	

</body>
</html>