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

$flag="";
$flag1="";
 $qr = "SELECT email FROM tb_register";
 $result = mysql_query($qr) or die (mysql_error());
 
if(isset($_POST['show']))
{
	$email=$_POST["email"];
	$qr="Select * from tb_register where email='$email'";
	
		
		$result = mysql_query($qr) or die (mysql_error()); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
while ($row = mysql_fetch_array($result))
{
	    $email=$row["email"];
	    $faculty=$row['faculty'];
        $name= $row['name'];
		$subfaculty=$row['subfaculty'];
		$subject=$row['subject'];
		$phd_title=$row['phd_title'];
		$awarded_year=$row['awarded_year'];
	    $uni_name=$row['uni_name'];
		$work_add=$row['work_add'];
		$self_add=$row['self_add'];
		$cont_no=$row['cont_no'];
		$cont_no2=$row['cont_no2'];
		$national=$row['publish_ppr_N'];
	    $international=$row['publish_ppr_IN'];
	  
		$national_no=$row['national_no'];
		$intl_no=$row['intl_no'];
		$flag=false;
		
		$hobby="";
		$hobbyid = $row['publish_ppr_N'];
$hobbyname = $row['publish_ppr_N'];
$hob_id=explode(',',$hobby);
$size = sizeof($hob_id);
for($i=0;$i<$size;$i++) 
{
 if($hob_id[$i]==$hobbyid)
 {
   $flag=true;
 } 
}



$flag1=false;
		
		$hobby1="";
		$hobbyid1 = $row['publish_ppr_IN'];
$hobbyname1 = $row['publish_ppr_IN'];
$hob_id1=explode(',',$hobby);
$size = sizeof($hob_id1);
for($i=0;$i<$size;$i++) 
{
 if($hob_id1[$i]==$hobbyid1)
 {
   $flag1=true;
 } 
}
		
		
		
		
		
		
}
}
	
	
if(isset($_POST['submit'])) 
{			
$email=$_POST["email"];
    $name= $_POST['name'];
	$faculty= $_POST['country'];
	$subfaculty= $_POST['state'];
	$subject= $_POST['sub'];
	$tittle=$_POST['tittle'];
   $awarded_year=$_POST['awarded_year'];
   $uni_name=$_POST['uni_name'];
	$national=$_POST['national'];
	$international=$_POST['international'];
	$national_no=$_POST['national_no'];
	$intl_no=$_POST['intl_no'];
	$work_add=$_POST['work_add'];
	$self_add=$_POST['self_add'];
	$contact_no1=$_POST['cont_no1'];
	$contact_no2=$_POST['cont_no2'];
	
	{
		$qry="update tb_register set name='$name',faculty='$faculty',subfaculty='$subfaculty',subject='$subject',phd_title='$tittle',awarded_year='$awarded_year',uni_name='$uni_name',work_add='$work_add',self_add='$self_add',cont_no='$contact_no1',cont_no2='$contact_no2',publish_ppr_N='$national',publish_ppr_IN='$international',national_no='$national_no',intl_no='$intl_no' where email='$email'";
	    if (!mysql_Query($qry))                       //check query execured or not
		{
			echo "$qry";die('Error: ' . mysql_error());
		}
		else
		{
			echo "<script> alert('Profile updated Successfully')</script>"; 
			echo'<META http-equiv="refresh" content="0;URL=displaya_acharya.php">';
		
		} 
	}
}

if(isset($_POST['submit1'])) 
{		
	// declare all variable
	$email=$_POST['email'];	
	{
		$qry="delete from tb_register where email='$email'";
	    if (!mysql_Query($qry))                       //check query execured or not
		{
			echo "$qry";die('Error: ' . mysql_error());
		}
		else
		{
			echo "<script> alert('Profile Deleted Successfully')</script>"; 

			echo'<META http-equiv="refresh" content="0;URL=displaya_acharya.php">';          
		} 
	}
}

if(isset($_POST['submit2'])) 
{		
	echo'<META http-equiv="refresh" content="0;URL=adminhome.php">';          
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
	<li><a href="spiritual.php" title="">JKS Aacharya Manch</a></li>	
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
          <div >
		       <label class='control-label col-md-10' style="color:red">* Plese Select Email ID first and click on show button to update or delete record</label>

          </div>
		  <br><br><br><br>
		   <div class='form-group'>
           <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Email-Id</label>
            <div class='col-md-8'>
              <div class='form-group'>
                <div class='col-md-6'>
				
                 <select  class='form-control' name="email" value="<?php if(isset($email)) echo $email; ?> ">
				<option selected='selected'>Select</option>
        <?php
        while ($row =  mysql_fetch_array($result))
		{
			
            echo '<option value="'.$row['email'].'">'.$row['email'].'</option>';
        }
        ?>
		<?php
		if($email <> "" && $email <> "NA")
{
	echo "<option  value='$email'  selected='selected'>$email</option>";

}?>
    </select>

              		

				</div>
				 <div class='col-md-4'>
                     <button type='submit' name="show" style="background-color:#689F1D;border-color:#689F1D;color:white;width:50%;height:35px;"><b>Show</b></button>            
   			      </div>
              </div>
            </div>
			
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Prof Dr.</label>
            <div class='col-md-8'>
             
              <div class='col-md-8 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="name" id='id_first_name' value="<?php if(isset($name)) echo $name; ?>" placeholder='Name' type='text'>
                </div>
              </div>
              
            </div>
          </div>
         	  
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Faculty Of</label>
            <div class='col-md-8'>
             
              <div class='col-md-8 indent-small'>
                <div class='form-group internal'>
                    <select class='form-control'  id="country" name="country" required="required">
                    <option value="0"><?php if(isset($faculty)) echo $faculty; ?></option>
					 
                  </select>
				  <span style="color:red">please select faculty and subfaculty at time of updation</span>
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
                   
				  <select class='form-control' name="state" id="state" required="required">
				      <option value="0"><?php if(isset($subfaculty)) echo $subfaculty; ?></option>
				  </select>
                </div>

              </div>
            
            </div>
			
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Subject</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
		      <input class='form-control' id='id_email' value="<?php if(isset($subject)) echo $subject; ?>"  placeholder='' type='text' name="sub">
                </div>
              </div>
              
            </div>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Ph.D Title</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' value="<?php if(isset($phd_title)) echo $phd_title; ?>" placeholder='' type='text' name="tittle">
                </div>
              </div>
             
            </div>
			
          </div>
		    <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Awarded Year</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
 
							 
<?php 
echo "<SELECT  class='form-control'  NAME='awarded_year' style='width:205px;' ;' >
<option selected='selected'>Select</option>
<option>2017</option>
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>";
if($awarded_year <> "" && $awarded_year <> "NA")
{
	echo "<option  value='$awarded_year'  selected='selected'>$awarded_year</option>";

}
 echo "</SELECT>";?>
              </div>
              </div>
             
            </div>
			
			
          </div>
         <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>University Name</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
		  
					
					<?php 
echo "<SELECT  class='form-control'  NAME='uni_name' style='width:205px;' ;' >
<option selected='selected'>Select</option>
<option>Dr. Babasaheb Ambedkar Marathwada University, Aurangabad-431 004.</option>
<option>Dr. Babasaheb Ambedkar Technological University, Lonere-402 103</option>
<option>Dr. Punjabrao Deshmukh Krishi Vidyapeeth, Akola-444 104.</option>
<option>Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya, Nagpur-441 106</option>
<option>Konkan Krishi Vidyapeeth, Dapoli, District Ratnagiri-415 712</option>
<option>Maharashtra Animal & Fishery Sciences University, Seminary Hills, Nagpur-440 006</option>
<option>Maharashtra University of Health Sciences, Nashik-422 013</option>
<option>Mahatma Phule Krishi Vidyapeeth, Rahuri-413 722</option>
<option>Marathwada Agricultural University, Parbhani-431 402</option>
<option>Mumbai University, Mumbai-400 032</option>
<option>North Maharashtra University, Jalgaon- 425 001</option>
<option>Pune University, Pune-411 007</option>
<option>Sant Gadge Baba Amravati University, Amravati-444 602.</option>
<option>Shivaji University, Kolhapur-416 004</option>
<option>Smt. Nathibai Damodar Thackersey Women's University, Mumbai-400 020</option>
<option>Solapur University, Solapur, Solapur Pune Road, Kegaon, Solapur-413 255</option>
<option>Swami Ramanand Teerth Marathwada University, Nanded-431 606.</option>
<option>The Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur-440 001 (M.S).</option>
<option>Yashwant Rao Chavan Maharashtra Open University, Nashik-422 222</option>
<option>Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Post Box No. 16, Panchtila, Umri Village, Arvi Road, Wardha, Mumbai - 442 001</option>
<option>Bharati Vidyapeeth Bharati Vidyapeeth Bhawan, Lal Bahadur Shastri Marg, Pune-411 03</option>
<option>MaharashtraCentral Institute of Fisheries Education Fisheries University Road, 7 Bungalows, Andheri West, Mumbai-400 061 Maharashtra</option>
<option>D.Y. Patil Educational Society Line Bazar, Kasaba, Bavada, Kolhapur-416 006 (Maharashtra)</option>
<option>Datta Meghe Institute of Medical Sciences Atrey Layout, Pratap Nagar, Nagpur-440 022 (Maharashtra)</option>
<option>Deccan College Postgraduate & Research Institute Pune-411 006 Maharashtra</option>
<option>Dr. D.Y. Patil Vidyapeeth Sant Tukaram Nagar, Pimpri, Pune-411 018 Maharashtra</option>
<option>Gokhale Institute of Politics & Economics BMC College Road, Deccan Gymkhana, Pune-411 004 Maharashtra</option>
<option>Homi Bhabha National Institute Regd. Office: Knowledge Management Group, Bhabha Atomic Research Centre, Central Complex, Mumbai-400 085 Maharashtra</option>
<option>Indira Gandhi Institute of Development Research General Vaidya Marg, Santosh Nagar, Goregaon East, Mumbai-400 065 Maharashtra</option>
<option>Institute of Armament Technology Girinagar, Pune-411 025 Maharashtra</option>
<option>International Institute for Population Sciences Govandi Station Road, Deonar, Mumbai-400 088 Maharashtra</option>
<option>Krishna Institute of Medical Sciences Malka Pur, Karad, Distt. Satara-415</option>
<option>MGM Institute of Health Sciences MGM Campus, Sector-18, Kamothe, Navi Mumbai-410 209</option>
<option>Narsee Monjee Institute of Management Studies VL Mehta Road, Vile Parle West, Mumbai-400 056 Maharashtra </option>
<option>Padmashree Dr. D.Y. Patl Vidyapeeth Vidya Nagar, Sector 7, Nerul, Navi Mumbai-400 706 Maharashtra</option>
<option>Pravara Institute of Medical Sciences P.O.-Loni BK-413 736, District Ahmednagar Maharashtra</option>
<option>SYMBIOSIS - International University, Senapati Bapat Road, Pune-411 004 Maharashtra</option>
<option> Tata Institute of Fundamental Research Homi Bhabha Road, Mumbai-400 005 Maharashtra</option>

<option>Tata Institute of Social Sciences VN Purav Marg, Deonar, Mumbai-400 088 Maharashtra</option>
<option>Tilak Maharashtra Vidyapeeth Vidyapeeth Bhawan, Gultekedi, Pune-411 037 Maharashtra </option>

<option>Institute of Chemical Technology Matunga, Mumbai Maharashtra</option>


";

if($uni_name <> "" && $uni_name <> "NA")
{
	echo "<option  value='$uni_name'  selected='selected'>$uni_name</option>";

}
 echo "</SELECT>";?>
					
					
		

                  
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
			 <label class='control-label col-md-4' for='id_slide'>Publish Paper</label>

            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal'>
				<?php
				
				if($flag==true) 
{
     ?>
	  <input  type='checkbox' value='National' name="national[]"  id="national"<?php if(isset($national))  ?>> National<br><br>
 <?php
 $flag=false;
} 
else 
{
 ?>
 <input  type='checkbox' name='national[]' id="national" value="<?php echo $row['publish_ppr_N']; ?>" checked  > <?php echo $row['publish_ppr_N']; ?>  National<br><br>
 <?php
}
?>


<?php
if($flag1==true) 
{
     ?>
	 <input  type='checkbox' value='international' name="international[]"  id="international"<?php if(isset($international))  ?>> International<br><br>
 <?php
 $flag=false;
} 
else 
{
 ?>
 <input  type='checkbox' name='international[]' id="international"value="<?php echo $row['publish_ppr_IN']; ?>" checked  > <?php echo $row['publish_ppr_IN']; ?> International<br><br>
 <?php
}
?>

                   
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
				         <?php 
echo "<SELECT  class='form-control'  NAME='national_no' style='width:205px;' ;' >
<option selected='selected'>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
";
if($national_no <> "" && $national_no <> "NA")
{
	echo "<option  value='$national_no'  selected='selected'>$national_no</option>";

}
 echo "</SELECT>";?>
 <br>
				             <?php 
echo "<SELECT  class='form-control'  NAME='intl_no' style='width:205px;' ;' >
<option selected='selected'>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
";
if($intl_no <> "" && $intl_no <> "NA")
{
	echo "<option  value='$intl_no'  selected='selected'>$intl_no</option>";

}
 echo "</SELECT>";?>					
				  
                 
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Self Address </label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments'  placeholder=''  name="self_add">
			  <?php if(isset($self_add)) echo $self_add; ?>
			  </textarea>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Working Address </label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' value="<?php echo $work_add;?>" placeholder='' rows='2' name="work_add">
			   <?php if(isset($work_add)) echo $work_add; ?>
			  </textarea>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact No</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='mobno' onblur="mobval();" value="<?php if(isset($cont_no)) echo $cont_no; ?>" placeholder='' type='text' name="cont_no1">
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='mobno1' onblur="mobval1();"  value="<?php if(isset($cont_no2)) echo $cont_no2; ?>" placeholder='' type='text' name="cont_no2">
                </div>
              </div>
            </div>
			
			
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-2'>
              <button class='btn-lg btn-primary' type='submit' name="submit" style="background-color:#689F1D;border-color:#689F1D">Update</button>
            </div>
            <div class='col-md-2'>
              <button class='btn-lg btn-danger'  type='submit' name='submit1'>Delete</button>
            </div>
			<div class='col-md-2'>
              <button class='btn-lg btn-danger'  type='submit' name='submit2'>Back</button>
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