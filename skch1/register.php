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
$fname=$_POST['name'];
$street_no=$_POST['street_no'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
//$gender=$_POST['gender'];
$contact_no=$_POST['cont_no'];
$email=$_POST['email'];
$booking=$_POST['booking'];
$General_Session=$_POST['General_Session'];

$dinner=$_POST['dinner'];
$june=$dinner.",".$General_Session.",".$booking;
/* $pptype=$_POST['pptype'];
$ptype=$_POST['ptype']; */
//$partype=$pptype.":-".$ptype;
$expectedday=$_POST['expectedday'];
$etime=$_POST['etime'];

$meal=$_POST['meal'];
$health=$_POST['health'];
$tsize=$_POST['tsize'];
$msize=$_POST['msize'];
$wsize=$_POST['wsize']; 
//$con_add=$_POST['con_add'];
$men="";
	
{
	
$check=mysql_query("select contact_no from tb_register where contact_no='$contact_no'");

    $checkrows=mysql_num_rows($check);

   if($checkrows>0) 
{
   echo "<script>alert('This contact no is already register');</script>";
} 
else{

mysql_query("INSERT INTO  tb_register(name,contact_no,email,attend,expected_day,arrival_time,meal,t_size,sm_size,sw_size,health,street_no,city,state,pincode) VALUES('$fname','$contact_no','$email','$june','$expectedday','$etime','$meal','$tsize','$msize','$wsize','$health','$street_no','$city','$state','$pincode')");

	echo "<script>alert('Thank you for registering for IPC - January 2018. You will receive your assigned group number shortly.');</script>";
	
/* header('Location: register.php'); */
	
}

 }
}








?>



<?php

require("class.phpmailer.php");
if(isset($_POST["submit"])){
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "skechersindia.in";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@skechersindia.in";
$mail->Password = "sm)ykm78fwEG";

$mail->From = "noreply@skechersindia.in";
$mail->FromName = "skechersindia";
$mail->AddAddress($_POST["email"]);
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Skechers Indian Product Conference January 2018";
$mail->Body = '<img src="http://skechersindia.in/IPC/images/mail.png" /><br/>';
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "<script>Message has been sent</script>";
}

?>

<!DOCTYPE html>
<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
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
     var digits=/^([0-9]{6})$/;
     var txtvalue=document.getElementById('mobno1').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 6 digit pincode number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}

  </script>
   <script>jQuery(document).ready(function($) {
  var requiredCheckboxes = $(':checkbox[required]');
  requiredCheckboxes.on('change', function(e) {
    var checkboxGroup = requiredCheckboxes.filter('[id="' + $(this).attr('id') + '"]');
    var isChecked = checkboxGroup.is(':checked');
    checkboxGroup.prop('required', !isChecked);
  });
});</script>
<script type="text/javascript">
function toggleSelect(id)
{
    if (id == 'men')
    {
		
          document.getElementById('msize').style['display'] = 'none';
		
		   document.getElementById('wsize').style['display'] = 'block';
		   
		   
          
    }

    if (id == 'women')
    {
          document.getElementById('wsize').style['display'] = 'none';
		   document.getElementById('msize').style['display'] = 'block';

    }
}
</script>


<script type="text/javascript">
function checkvalue(val)
{
    if(val==="others")
       document.getElementById('ptype').style.display='block';
    else
       document.getElementById('pptype').style.display='none'; 
}
</script>

<style>
#borderimg { 
    border: 45px solid transparent;
    padding: 0px;
	height:auto;
	
    -webkit-border-image: url(images/4.png) ;
    -o-border-image: url(images/4.png) ;
    border-image: url(images/4.png) 30 round;

	
}</style>





</head>
<body style="background-image: url(images/bg.png);font-size:15px">
<div class='panel-heading' style="">
        <center><h5><img src="images/logo1.png" style="width:;height:auto"></h5><center>
      </div>
  <div class='container' id="borderimg" style="border-bottom-color:#00000">
    <div class='panel panel-primary dialog-panel' style="background-color:">
      
	
      <div class='panel-body'style="color:white;background-image: url(images/bg.png)">
        <form class='form-horizontal' action="" method="post" >
          <!-- <div class='form-group' >
        <label class='control-label col-md-8 col-md-offset-4' > <b>CONTACT INFORMATION </b> </label>
		
          </div> -->
         <div class='form-group'>
            <label class='control-label col-md-4 col-md-offset-2' for='id_title' style="text-align:left;bold:true;font-size:20px;"><b>CONTACT INFORMATION </b></label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              
            </div>
          </div>
          
		  
		  
		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Attendee's Name</label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="name" id='id_first_name' placeholder='' type='text' required="required">
                </div>
              </div>
              
            </div>
          </div>
          
		  		  
          <div class='form-group'>
            
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Email Address</label>
             <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
               
                  <input class='form-control' id='email' onblur="emailvalidate();" placeholder='' type='text' name="email" required="required"><br/>
               
              </div>
             
            </div>
			</div>
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact No</label>
            <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
                  <input class='form-control' id='mobno' onblur="mobval();" placeholder='' type='text' name="cont_no" required="required">
               
              </div>
              
            </div>
			</div>
			
          </div>
		  <div class='form-group'>
            
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Apt No./Street Name</label>
             <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
               
                  <input class='form-control' placeholder='' type='text' name="street_no" id='street_no' required="required"><br/>
               
              </div>
             
            </div>
			</div>
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>City</label>
            <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
                  <input class='form-control'  placeholder='' type='text' name="city" id='city' required="required">
               
              </div>
              
            </div>
			</div>
			
          </div>
		   <div class='form-group'>
            
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>State</label>
             <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
               
                 <select  required="required" style="height:30px;width:100%;border-radius:5px"  id='state' name="state" >
                   <option value="">--Select--</option>
				    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Orissa">Orissa</option>
					<option value="Pondicherry">Pondicherry</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
 </select>
               
              </div>
             
            </div>
			</div>
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Pincode</label>
            <div class='col-md-8'>
			<div class='col-md-7 indent-small'>
              <div class='form-group internal'>
                  <input class='form-control'  placeholder='' type='text' name="pincode" id='pincode' required="required">
               
              </div>
              
            </div>
			</div>
			
          </div>
		  
		   <div class='form-group'>
            <label class='control-label col-md-4 col-md-offset-2' for='id_title' style="text-align:left;bold:true;font-size:20px;"><b>CONFERENCE DETAILS </b></label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              
            </div>
          </div>
		  <!--  <div class='form-group' style="text-align:left;bold:true;font-size:20px;height:23px">
        <label style="padding-left:200px">CONFERENCE DETAILS</label>
          </div> -->
     
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Attend</label>
            <div class='col-md-8' >
              <div class='col-md-3'>
                <div class='form-group internal' >
                 <input  type='checkbox' value='22nd Jan 2018 Product Presentations ' name="dinner" required="required" id="event" > 22<sup>nd</sup> Jan 2018 <br>&bull; Product Presentations <br>
                </div>
              </div>
			  <div class='col-md-3'>
                <div class='form-group internal'>
				    <input  type='checkbox' value='22nd Jan 2018 General Session' name="General_Session" required="required" id="event"> 22<sup>nd</sup> Jan 2018 <br>&bull; General Session
                </div>
              </div>
			  <div class='col-md-3'>
                <div class='form-group internal'>
				    <input  type='checkbox' value='23rd Jan 2018 Product Presentations' name="booking" required="required" id="event"> 23<sup>rd</sup> Jan 2018 <br>&bull; Product Presentations
                </div>
              </div>
			 
			  
              
            </div>
          </div>
		   <!-- <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Partner Details</label>
             <div class='col-md-8' >
              <div class='col-md-4'>
                <div class='form-group internal'>
                  <select name="pptype" class='form-control'  onchange='checkvalue(this.value)' required="required" > 
				             <option value="">Select </option>
                          <option value="Distributor">Distributor</option>
							   <option value="Franchise Owner"> Franchise Owner</option>
							   <option value="MBO partner">MBO partner</option>
							   <option value="Ecom Partner">Ecommerce Partner</option>
							   <option value="Institutional Sales Partner">Institutional Sales Partner</option>
							   <option value="others">Others</option>
                  </select> 
                </div>
              </div>
              <div class='col-md-4'>
			  <input type="text" class='form-control' name="ptype" id="ptype" style='display:none'/>
			     </div>              
            </div>
			</div> -->
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Expected Day</label>
            <div class='col-md-8'>
              
              
                <div class='col-md-4'>
                <div class='form-group internal' >
                 <input  type='radio' value='21st January 2018' name="expectedday" required="required" id="day" > 21<sup>st</sup>January 2018
                </div>
              </div>
			  <div class='col-md-4'>
                <div class='form-group internal' >
                 <input  type='radio' value='22nd January 2018' name="expectedday" required="required" id="day" > 22<sup>nd</sup>January 2018
                </div>
              </div>
              
              
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Time Of Arrival </label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="etime" id='id_first_name' placeholder='' type='text' required="required">
                </div>
              </div>
              
            </div>
          </div>
		  
		  
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Meal Preference</label>
            <div class='col-md-8' >
              <div class='col-md-3'>
                <div class='form-group internal' >
                 <input  type='radio' value='veg' name="meal" required="required" id="meal" > Veg
                </div>
              </div>
			  <div class='col-md-3'>
                <div class='form-group internal'>
				    <input  type='radio' value='Nonveg' name="meal" required="required" id="meal"> Non-Veg
                </div>
              </div>
			  <div class='col-md-3'>
                <div class='form-group internal'>
				    <input  type='radio' value='Jain' name="meal" required="required" id="meal"> Jain
                </div>
              </div>
			  
			  
              
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title1'>Dietary Restrictions(like Vegan) /<br/> Food Allergy(like Peanut,Soy)</label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="health" id='health' placeholder='' type='text'>
                </div>
              </div>
              
            </div>
          </div>
		   <!-- <div class='form-group'style="text-align:left;bold:true;font-size:20px;height:20px;padding:23px">
        <label style="padding-left:200px">PERSONAL DETAILS</label>
          </div> -->
		  
		  <div class='form-group'>
            <label class='control-label col-md-4 col-md-offset-2' for='id_title' style="text-align:left;bold:true;font-size:20px;"><b>PERSONAL DETAILS </b></label>
            <div class='col-md-8'>
              
              <div class='col-md-7 indent-small'>
                <div class='form-group internal'>
                </div>
              </div>
              
            </div>
          </div>
		  
		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>T-Shirt Size</label>
            <div class='col-md-8'>
              <div class='col-md-7'>
                <div class='form-group internal'>
                  <select  required="required" class='form-control' id='id_equipment' style="width:100%" name="tsize" >
                   <option value="">Select </option>
				             <option value="XS">XS</option>
							   <option value="S">S</option>
							   <option value="L">L</option>
							   <option value="M">M</option>
							   <option value="XL">XL</option>
							   <option value="XXL">XXL</option>
							 </select>
                </div>
              </div>
			                   

            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Shoe Size (US)</label>
            <div class='col-md-8' >
              <div class='col-md-4'>
                <div class='form-group internal' >            
                    <input type='radio' name='campustype' value='in' onclick="toggleSelect('women');" required="required"/><label for='men'> &nbsp;Men</label><br />
                       <select  class='form-control' id='msize' style="width:180px;display:none;" name="msize"  >
                         <option value="select">Select  </option>
				             <option value="7">7</option>
							 <option value="8">8</option>
							 <option value="9">9</option>
							 <option value="10">10</option>
							 <option value="11">11</option>
	                  </select> 
						</div>
              </div>
			  
			  <div class='col-md-6'>
                <div class='form-group internal'>            
                    <input type='radio' name='campustype' value='off' onclick="toggleSelect('men');" required="required" /><label for='women'>&nbsp; Women</label>
                       <select class='form-control' id='wsize' style="width:180px;display:none;" name="wsize" >
                         <option value="select" >Select </option>
				             <option value="5">5</option>
							 <option value="6">6</option>
							 <option value="7">7</option>
							 <option value="8">8</option>
							 <option value="9">9</option>
							  <option value="10">10</option>
			  </select>  
						</div>
              </div>
			  
              
            </div>
          </div>
          
          <!-- <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Contact Address <br>(Apt No./Street name, City, State, Pin code)</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='' rows='3' name="con_add" required="required"></textarea>
            </div>
			
          </div> -->
          <div class='form-group'>
            <div class='col-md-offset-5 col-md-2'>
              <button class='btn-lg btn-primary' type='submit' name="submit">Submit</button>
            </div>
            <div class='col-md-3'>
			   <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>

          </div>
		   <div class='form-group'>
		   <div class='col-md-offset-12 col-md-3'>
			   
            </div>
            <div class='col-md-offset-12 col-md-8'>
              <label style="color:#008CBA;text-align:center;font-style:italic;font-size:15px">Please Note:- *All Product Presentations will be conducted at Skechers Headquarters</label>
            </div>
           

          </div>
		  
		  

        </form>
      </div>
    </div>
  </div>
</body>
</body>
</html>