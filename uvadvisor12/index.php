<?php 
	include('config.php'); // // include database file
?>
<?php
if(isset($_POST['submit']))
{
	$entity = $_POST['etype'];
	$name = $_POST['ename'];
	$c_number = $_POST['cnumber'];
	$ir_number = $_POST['irnumber'];
	$address = $_POST['add'];
	$person = $_POST['person1'];
	$g_number = $_POST['gnumber'];
	$p_number = $_POST['pnumber'];
	$m_email = $_POST['memail'];
	$pass_confirm = $_POST['pass1'];
	$pass = $_POST['pass2'];
	$num_user = $_POST['user2'];
	$t_number = $_POST['phone12'];
	$f_number = $_POST['confirm'];
	$value=$_POST['yesno'];

	
if($value=='india')
{
			if($name==null  || $address==null || $person==null || $m_email==null || $num_user==null)
			{
				echo "<script>alert('field with * are mandatory..!')</script>";

			}
			else if($entity=="Insurance Company" || $entity=="Insurance Broker" || $entity=="Insurance Agent")

			{
				if($ir_number=="")
					{
						echo "<script>alert('IRDA  no are mandatory..!')</script>";
					}
					else
					{
						if($entity=="Others")
						{
							$val = $_POST['demo'];
						}
						else
						{
							$val = $_POST['etype'];
						}
				
						mysql_query("INSERT into india (entity ,name,cnumber,irnumber,address,person,gnumber,pnumber,email,password,cofirm_password,user,phone,fconfirm) values('$val','$name','$c_number','$ir_number','$address','$person','$g_number','$p_number','$m_email','$pass_confirm','$pass','$num_user','$t_number','$f_number')") or die(mysql_error());	 
						echo "<script>alert('Registration Done Successfully..!')</script>";
					
			       }
			}
			else
			{
				if($entity=="Others")
				{
					$val = $_POST['demo'];
				}
				else
				{
					$val = $_POST['etype'];
				}
				
				mysql_query("INSERT into india (entity ,name,cnumber,irnumber,address,person,gnumber,pnumber,email,password,cofirm_password,user,phone,fconfirm) values('$val','$name','$c_number','$ir_number','$address','$person','$g_number','$p_number','$m_email','$pass_confirm','$pass','$num_user','$t_number','$f_number')") or die(mysql_error());	 
				echo "<script>alert('Registration Done Successfully..!')</script>";
					
			}
			
				
			
}	

else
   {
		$entity = $_POST['etype1'];
		$name = $_POST['name'];
		$c_number = $_POST['address'];
		$ir_number = $_POST['rnumber'];
		$address = $_POST['email'];
		$person = $_POST['pass'];
		$g_number = $_POST['user'];
		$p_number = $_POST['phone'];
		$m_email = $_POST['person'];
		$pass_confirm = $_POST['f_confirm'];
	if($name==null || $c_number==null || $address==null || $g_number==null || $m_email==null)
		{
			echo "<script>alert('field with * are mandatory..!')</script>";

		}
	else
{
		if($entity=="Others")
		{
			$val1 = $_POST['demo1'];
		}
		else
		{
			$val1 = $_POST['etype1'];
		}
	mysql_query("INSERT into world (entity ,name,address,rnumber,email,password,user,phone,person,f_confirm) values('$val1','$name','$c_number','$ir_number','$address','$person','$g_number','$p_number','$m_email','$pass_confirm')") or die(mysql_error());	 
	echo "<script>alert('Registration Done Successfully..!')</script>";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
 window.onload = function() {
    document.getElementById('ifYes').style.display = 'block';
    document.getElementById('ifNo').style.display = 'none';
}
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifNo').style.display = 'none';
        document.getElementById('redhat1').style.display = 'none';
        document.getElementById('aix1').style.display = 'none';
    } 
    else if(document.getElementById('noCheck').checked) {
        document.getElementById('ifNo').style.display = 'block';
        document.getElementById('ifYes').style.display = 'none';
        document.getElementById('redhat1').style.display = 'none';
        document.getElementById('aix1').style.display = 'none';
   }
}
function yesnoCheck1() {
   if(document.getElementById('redhat').checked) {
       document.getElementById('redhat1').style.display = 'block';
       document.getElementById('aix1').style.display = 'none';
    }
   if(document.getElementById('aix').checked) {
       document.getElementById('aix1').style.display = 'block';
       document.getElementById('redhat1').style.display = 'none';
    }
}
function mobval2()
{
     var txt1=document.getElementById('phone');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('phone').value;
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
	var x=document.getElementById('email123').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email').value="";
  	} 
}
function mobval21()
{
     var txt1=document.getElementById('phone1');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('phone1').value;
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
	var x=document.getElementById('email1234').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("You have entered an invalid email address..!");
	document.getElementById('email').value="";
  	} 
}
function Validate()
{
        var password = document.getElementById('c_pass123').value;
        var confirmPassword = document.getElementById('c_pass').value;
        if (password != confirmPassword)
		{
            alert("Passwords must be same as Confirm Password...!");
        }
 }
 function Validate1()
{
        var password = document.getElementById('pass21').value;
        var confirmPassword = document.getElementById('c_pass1').value;
        if (password != confirmPassword)
		{
            alert("Passwords must be same as Confirm Password...!");
        }
 }
 function CheckColors(val){
 var element=document.getElementById('etype');
 if(val=='select'||val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckColors1(val){
 var element=document.getElementById('etype1');
 if(val=='select'||val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}
 $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Insurance Company") {
			 document.getElementById('irda').readOnly=false;
            } else if($(this).val() == "Insurance Broker"){
			 document.getElementById('irda').readOnly=false;
            }
			else if($(this).val() == "Insurance Agent"){
			 document.getElementById('irda').readOnly=false;
			}
			else{
			 /* $("#irda").hide(); */
			 document.getElementById('irda').readOnly=true;
			}
        });
    });

window.onload=function() {
 document.getElementById("ddlPassport").onchange=function() {   
var ddl=document.getElementById("ddlPassport").value;
if(ddl1=="Individual")
{
	   document.getElementById("per123").value=document.getElementById("ename").value;
}	
 }
}
window.onload=function() {
 document.getElementById("ddlPassport123").onchange=function() {   
var ddl=document.getElementById("ddlPassport123").value;
if(ddl2=="Individual")
{
	   document.getElementById("per1234").value=document.getElementById("email").value;
}	
 }
}
</script>

</head>
<body>
<form method="POST" action=""> 
<center><center><table  width="90%" height="100%" cellpadding="2px" cellspacing="10px" padding-top="50px" style="border-radius: 25px;background: #f8f8f8;border:solid 3px #FFBF0D;">
<tr><td>
<span style="font-size:20px;">Select Country :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" onclick="javascript:yesnoCheck();" checked name="yesno" value="india" id="yesCheck"/>India
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" value="world" id="noCheck"/>World</span>

<br><br>
<div id="ifYes" >
<center><table  width="88%" height="90%" cellpadding="2px" cellspacing="10px" padding-top="50px" style="border-radius: 25px;background: #f8f8f8;">

<th colspan="4" style="background-color:#FFBF0D;"><label for='name' style="color:white;font-size:40px;" >Registration Form </label> </th>
<tr><td></td></tr>
<tr><td colspan="4"><span style="color:red">Field with * are mandatory</span></td>
</tr>
<tr><td></td></tr>
<tr>
<td>
<label for='email' >	Name of Entity/<br>Individual<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name="ename" id="ename" maxlength="50" style="width: 170px;height:25px" />
</td>
<td><label for='name'>	Type of Entity  </label></td>

<td>

<SELECT  name="etype" id="ddlPassport"  style="width: 170px;height:25px" onchange='CheckColors(this.value);' >
  <option value="Select">Select</option>
  <option value="Insurance Company">Insurance Company</option>
  <option value="Insurance Broker">Insurance Broker</option>
  <option value="Insurance Agent">Insurance Agent</option>
  <option value="Company">Company</option>
  <option value="Non-Profit Entity">Non-Profit Entity</option>
  <option value="Individual">Individual</option>
  <option value="Government Entity">Government Entity</option>
  <option value="Others">Others</option>
  
</select>


  <br>
<input type="text" name="demo" id="etype" style='display:none;width: 170px;height:25px'/>
	</td>	     
			


</tr>
<tr>
<td>
<label for='username' >	CIN Number</label>
</td>
<td>
<input type='text' name='cnumber' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>



<td>
<label for='username' >	IRDA Registration <br>Number<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name='irnumber' id='irda' maxlength="50" style="width: 170px;height:25px"  />
</td>

</tr><tr>
<td>
<label for='username' >		Address<span style="color:red">&nbsp;*</span></label>
</td>
<td>
<input type='text' name='add' id='username' maxlength="50" style="width: 170px;height:25px"  />
</td>


<td>
<label for='username' >	Name of Contact <br>Person <span style="color:red">&nbsp;*</span></label>
</td>
<td>
<input type='text' name='person1' id='per123' maxlength="50" style="width: 170px;height:25px" />
</td>

</tr><tr>
<td>
<label for='username' >		GST Number</label>
</td>
<td>
<input type='text' name='gnumber' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>


<td>
<label for='username' >PAN Number</label>
</td>
<td>
<input type='text' name='pnumber' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>

</tr><tr>
<td>
<label for='username' >		Master Email <br>id (username)<span style="color:red">&nbsp;*</span></label>
</td>
<td>
<input type='text' name='memail' id='email123' onblur="emailvalidate();" maxlength="50" style="width: 170px;height:25px" />
</td>


<td>
<label for='username' >		Password</label>
</td>
<td>
<input type='password' name='pass1' id='c_pass123' maxlength="50" style="width: 170px;height:25px" />
</td>


</tr><tr>
<td>
<label for='username' >		 Confirm Password</label>
</td>
<td>
<input type='password' name='pass2' id='c_pass' onblur="Validate();" maxlength="50" style="width: 170px;height:25px" />
</td>
<td>
<label for='username' >		Number of <br>additional User<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name='user2' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>




</tr><tr>
<td>
<label for='username' >		Telephone Number</label>
</td>
<td>
<input type='text' name='phone12' id='phone' onblur="mobval2();" maxlength="50" style="width: 170px;height:25px" />
</td>
<td>
<label for='username' >Fees confirmation</label>
</td>
<td>
<input type='text' name='confirm' id='username' maxlength="50"  style="width: 170px;height:25px"/>
</td>

<tr><td></td></tr>

</table>

</div>
<div id="ifNo" style="display:none">
<center><table visible="false" width="88%" height="90%" cellpadding="2px" cellspacing="10px" padding-top="50px" style="border-radius: 25px;background: #f8f8f8;">
<th colspan="4" style="background-color:#FFBF0D;"><label for='name' style="color:white;font-size:40px;" >Registration Form </label> </th>
<tr><td></td></tr>
<tr><td colspan="4"><span style="color:red">Field with * are mandatory</span></td></tr>
<tr><td></td></tr>
<tr>
<td>
<label for='email' >	Name of Entity/ <br>Individual<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name='name' id='email' maxlength="50" style="width: 170px;height:25px"/>
</td>
<td><label for='name' >	Type of Entity  </label></td>
<td>

<SELECT  name="etype1" id="ddlPassport"  style="width: 170px;height:25px" onchange='CheckColors1(this.value);' >
  <option value="Select">Select</option>
  <option value="Insurance Company">Insurance Company</option>
  <option value="Insurance Broker">Insurance Broker</option>
  <option value="Insurance Agent">Insurance Agent</option>
  <option value="Company">Company</option>
  <option value="Non-Profit Entity">Non-Profit Entity</option>
  <option value="Individual">Individual</option>
  <option value="Government Entity">Government Entity</option>
  <option value="Others">Others</option>
  
</select>


  <br>
<input type="text" name="demo1" id="etype1" style='display:none;width: 170px;height:25px'/>
	</td>	     


</tr>
<tr>
<td>
<label for='username' >	Address<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name='address' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>



<td>
<label for='username' >	Entity Registration <br>Number </label>
</td>
<td>
<input type='text' name='rnumber' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>

</tr><tr>
<td>
<label for='username' >		Master Email <br>id(Username)<span style="color:red">&nbsp;*</span> </label>
</td>
<td>
<input type='text' name='email' id='email1234' onblur="emailvalidate1();"maxlength="50" style="width: 170px;height:25px" />
</td>


<td>
<label for='username' >	Password </label>
</td>
<td>
<input type='password' name='pass' id='pass21' maxlength="50" style="width: 170px;height:25px" />
</td>

</tr><tr>
<td>
<label for='username' >		 Confirm Password</label>
</td>
<td>
<input type='password' name='pass2' id='c_pass1' onblur="Validate1();" maxlength="50" style="width: 170px;height:25px" />
</td>
<td>
<label for='username' >	Number of additional <br>users required <span style="color:red">&nbsp;*</span></label>
</td>
<td>
<input type='text' name='user' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>




</tr><tr>
<td>
<label for='username' >Telephone Number</label>
</td>
<td>
<input type='text' name='phone' id='phone1' onblur="mobval21();" maxlength="50" style="width: 170px;height:25px" />
</td>
<td>
<label for='username' >		Name of Contact <br>Person  <span style="color:red">&nbsp;*</span></label>
</td>
<td>
<input type='text' name='person' id='per1234' maxlength="50" style="width: 170px;height:25px" />
</td>

</tr><tr>
<td>
<label for='username' >		Fees confirmation</label>
</td>
<td>
<input type='text' name='f_confirm' id='username' maxlength="50" style="width: 170px;height:25px" />
</td>

<tr><td></td></tr>
</table></center>

</div>
<center><table>
<tr><td>

<input type='submit' name='submit' value='Submit' style="color:white;background-color:#FFBF0D;width:120px;height:40px;font-size:25px;" />
</td></tr>
</table></center>
</tr></table>
</body> 
</html>