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
$gender=$_POST['gender'];
$contact_no=$_POST['cont_no'];
$email=$_POST['email'];


$booking=$_POST['booking'];
$dinner=$_POST['dinner'];
$june=$booking.",".$dinner;

$ptype=$_POST['ptype'];
$pptype=$_POST['pptype'];

 $partype=$pptype.":-".$ptype;
$etime=$_POST['etime'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$meal=$_POST['meal'];
$tsize=$_POST['tsize'];
$msize=$_POST['msize'];

$wsize=$_POST['wsize']; 
$con_add=$_POST['con_add'];
$men="";
	
{
	
$check=mysql_query("select contact_no from tb_register where contact_no='$contact_no'");

    $checkrows=mysql_num_rows($check);

   if($checkrows>0) 
{
   echo "<script>alert('This contact no is already register');</script>";
} 
else{

mysql_query("INSERT INTO  tb_register(name,gender,city,pincode,contact_no,email,con_address,attend,partner_type,arrival_time,meal,t_size,sm_size,sw_size) VALUES('$fname','$gender','$city','$pincode','$contact_no','$email','$con_add','$june','$partype','$etime','$meal','$tsize','$msize','$wsize')");


	echo "<script>alert('Record Saved Successfully.We will contact you soon!.');</script>";
	header("Location:view.php");
	
}

 }
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







</head>
<body>
  <div class='container' >
    <div class='panel panel-primary dialog-panel' style="background-color:#C7EAFD">
      <div class='panel-heading' style="background-color:#C7EAFD">
        <center><h5><img src="images/logo.png" style="width:50%;height:auto"></h5><center>
      </div>
	  <div class='panel-heading'>
	  <img src="images/reg.png">          

      </div>
      <div class='panel-body'>
        <form class='form-horizontal' action="" method="post" >
          <div class='form-group'>
        <label style="color:red;padding-left:20px">* All Fields Are Mandatory ! </label>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              
              <div class='col-md-6 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="name" id='id_first_name' placeholder='' type='text' required="required">
                </div>
              </div>
              
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Gender</label>
            <div class='col-md-8'>
             
              <div class='col-md-6 indent-small'>
                <div class='form-group internal'>
                   <select required="required" class='form-control' id='id_equipment' name="gender" >
                   <option value="">Select </option>
	                         <option value="Female">Female</option>
                             <option value="Male">Male</option>
                           
                  </select>
                </div>
              </div>
            
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>City</label>
            <div class='col-md-8'>
              
              <div class='col-md-6 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="city" id='id_first_name' placeholder='' type='text' required="required">

                </div>
              </div>
              
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Pincode</label>
            <div class='col-md-8'>
              
              <div class='col-md-6 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' name="pincode" id='mobno1' onblur="mobval1();" placeholder='' type='text' required="required">
                </div>
              </div>
              
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact No</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='mobno' onblur="mobval();"  type='text' name="cont_no" required="required">
                </div>
              </div>
              
            </div>
			<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Email-Id</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='email' onblur="emailvalidate();" placeholder='' type='text' name="email" required="required">
                </div>
              </div>
             
            </div>
			
			
          </div>
		  
     
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Attend</label>
            <div class='col-md-8' >
              <div class='col-md-5'>
                <div class='form-group internal' >
                 <input  type='checkbox' value='24th June Product Presentation & Evening Dinner' name="dinner" required="required" id="event" > 24<sup>th</sup> June <br>&bull;  Product Presentation <br>&bull; Evening Dinner<br>
                </div>
              </div>
			  <div class='col-md-5'>
                <div class='form-group internal'>
				    <input  type='checkbox' value='25th June Product booking' name="booking" required="required" id="event"> 25<sup>th</sup> June <br>&bull; Product Booking
                </div>
              </div>
			  
              
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Partner Type</label>
             <div class='col-md-8' >
              <div class='col-md-4'>
                <div class='form-group internal'>
                  <select name="pptype" class='form-control'  onchange='checkvalue(this.value)' required="required" > 
				             <option value="">Select </option>
                          <option value="Distributor">Distributor</option>
							   <option value="Franchise Owner"> Franchise Owner</option>
							   <option value="MBO partner">MBO partner</option>
							   <option value="Ecom Partner">Ecom Partner</option>
							   <option value="Institutional Sales Partner">Institutional Sales Partner</option>
							   <option value="others">Others</option>
                  </select> 

                </div>
              </div>
			   
              <div class='col-md-4'>
			  <input type="text" class='form-control' name="ptype" id="ptype" style='display:none'/>
			     </div>              

            </div>
			
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Expected Time Of Arrival</label>
            <div class='col-md-8'>
              
              <div class='col-md-6 indent-small'>
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
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>T-Shirt Size</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select  required="required" class='form-control' id='id_equipment' style="width:335px" name="tsize" >
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
                    <input type='radio' name='campustype' value='in' onclick="toggleSelect('women');" required="required"/><label for='men'>Men</label><br />
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
			  
			  <div class='col-md-4'>
                <div class='form-group internal'>            
                    <input type='radio' name='campustype' value='off' onclick="toggleSelect('men');" required="required" /><label for='women'>Women</label>
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
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Contact Address</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='' rows='3' name="con_add" required="required"></textarea>
            </div>
			
          </div>
          <div class='form-group'>
            <div class='col-md-offset-5 col-md-2'>
              <button class='btn-lg btn-primary' type='submit' name="submit">Submit</button>
            </div>
            <div class='col-md-3'>
			   <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>

          </div>
		  
		  

        </form>
      </div>
    </div>
  </div>
</body>
</body>
</html>