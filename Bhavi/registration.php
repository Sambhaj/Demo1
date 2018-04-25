<?php
include('config.php');
?>

<?php


require("class.phpmailer.php");
if(isset($_POST['submit']))
{
	// declare all variable
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$maratial=$_POST['maratial'];
	$education=$_POST['education'];
	$college=$_POST['college'];
	$university=$_POST['university'];
	$grade=$_POST['grade'];
	$gradn_year=$_POST['gradn_year'];
	$first_lang=$_POST['first_lang'];
	$second_lang=$_POST['second_lang'];
	$third_lang=$_POST['third_lang'];
	$resume=$_POST['resume'];
	$otherinfo=$_POST['otherinfo'];
	
	{
		mysql_query("INSERT INTO tbregistration (name, phone, email, DOB, gender, address, city, country, maratial_status, education, college, university, grade, graduation_year, first_lang, second_lang, third_lang, resume, other_info) 
			VALUES ('$name', '$phone', '$email', '$dob', '$gender', '$address', '$city', '$country', '$maratial', '$education', '$college', '$university', '$grade', '$gradn_year', '$first_lang', '$second_lang', '$third_lang', '$resume', '$otherinfo')");

		//echo "<script>alert('Register succssefully')</script>";
	}

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "rudrathespa.com";
	$mail->SMTPAuth = true;
	//$mail->SMTPSecure = "ssl";
	$mail->Port = 587;
	$mail->Username = "test@skechersindia.in";
	$mail->Password = "sm)ykm78fwEG";

	$mail1 = new PHPMailer();
	$mail1->IsSMTP();
	$mail1->Host = "rudrathespa.com";
	$mail1->SMTPAuth = true;
	$mail1->Port = 587;
	$mail1->Username = "test@skechersindia.in";
	$mail1->Password = "sm)ykm78fwEG";

	
	$mail->From = "noreply@bhaviindia.com";
	$mail1->From = "noreply@bhaviindia.com";

	$mail->FromName = "Bhavi India";
	$mail1->FromName = "Bhavi India";

	$mail->AddAddress($_POST["email"]);
	$mail1->AddAddress("sednainfo5@gmail.com");

	////$mail->AddReplyTo("mail@mail.com");

	$mail->IsHTML(true);
	$mail1->IsHTML(true);

	$mail->Subject = "Bhavi India Apply Online";
	$mail1->Subject = "Bhavi India Apply Online Client Details";

	$mail->Body = "Thank You For Applying !!...";
	$mail1->Body = "Name : $name<br/>Email :$email<br/>Mobile No. :$phone";
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send())
	{
	echo "<script>alert('Message Could Not Be Sent.');</script>";
	echo "Mailer Error: " . $mail->ErrorInfo;
	//echo "Mailer Error: " . $mail1->ErrorInfo;

	exit;
	}
	if(!$mail1->Send())
	{
	echo "<script>alert('Message Could Not Be Sent.');</script>";
	echo "Mailer Error: " . $mail1->ErrorInfo;

	exit;
	}

	echo "<script>alert('Thank you for Applying.');</script>";

	
	
}

 


?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
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

  </script>
  
</head> 
<body>
 <form action="" method="post" >
<table style="border:1px solid black; width:60%;background-color:#e6e6e6" cellpadding="20px" cellspacing="20px" align='center'>
<tr></tr>
<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Your Name </font></td>
    <td style="padding-left:30px"><input type='text'  name='name' style="width:80%;border-radius:5px"></td>
</tr>
<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Your Phone</font></td>
    <td style="padding-left:30px"><input type='text' maxlength="10" onblur="mobval()" id="mobno"  name='phone' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Your E-mail</font></td>
    <td style="padding-left:30px"><input type='text'  name='email' id="email" onblur="emailvalidate();"   style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Date of Birth</font></td>
    <td style="padding-left:30px"><input type='text'  name='dob' class="tcal" style="width:80%;border-radius:5px"></td>
</tr>

<tr>
 <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Gender</font></td>
 <td style="padding-left:30px">
<input type="radio"  name="gender" value="Male">&nbsp;&nbsp;&nbsp;<label for="Male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="Female">&nbsp;&nbsp;&nbsp;<label for="Female">Female</label> 
   </td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Address</font></td>
    <td style="padding-left:30px"><input type='text'  name='address' style="width:80%;border-radius:5px"></td>
</tr>


<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; City</font></td>
    <td style="padding-left:30px"><input type='text'   name='city' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Country</font></td>
    <td style="padding-left:30px"><input type='text'  name='country' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Marital Status</font></td>
    <td style="padding-left:30px"><label for="Marital Status"></label><select id="Marital Status" name="maratial" style="width:80%;height:32px;border-radius:5px;">
	       <option>--Select--</option>
			<option>Single</option>
			<option>Engaged</option>
			<option>Married</option>
		</select>
    </td> 
</tr>

	<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Education</font></td>
    <td style="padding-left:30px"><input type='text'  name='education' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Institute/College</font></td>
    <td style="padding-left:30px"><input type='text' name='college' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; University</font></td>
    <td style="padding-left:30px"><input type='text'  name='university' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"> <font size="3">&nbsp;&nbsp; Grade</font></td>
	<td style="padding-left:30px"><label for="Grade"></label><select id="Grade" name="grade" style="width:80%;height:32px;border-radius:5px">
			<option>--Select--</option>
			<option>Excellent</option>
			<option>Very Good</option>
			<option>Good</option>
			<option>Pass</option>
			</select>
		</td> 
	</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Graduation Year</font></td>
    <td style="padding-left:30px"><input type='text'  name='gradn_year' style="width:80%;border-radius:5px" ></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; First Language</font></td>
    <td style="padding-left:30px"><input type='text'  name='first_lang' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"> <font size="3">&nbsp;&nbsp; Second Language</font></td>
    <td style="padding-left:30px"><input type='text'  name='second_lang' style="width:80%;border-radius:5px"></td>
</tr>

<tr>
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Third Language</font></td>
    <td style="padding-left:30px"><input type='text'  name='third_lang' style="width:80%;border-radius:5px"></td>
</tr>

<tr >
    <td style="width:220px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Your Resume</font></td>
  <td style="padding-left:30px"><textarea  input type='text' style="height:150px;width:315px" name='resume'></textarea></td>
	</tr>

<tr >
    <td style="width:230px;padding:10px;padding-left:30px"><font size="3">&nbsp;&nbsp; Other Information if any</font> </td>
  <td style="padding-left:30px"><textarea  input type='text' style="height:150px;width:315px" name='otherinfo'></textarea></td>
	</tr>
<tr>
<td></td>
    <td style="padding-left:30px"> 	
              <button class='btn-lg btn-primary' type='submit' name="submit" style="background-color:#689F1D;border-color:#689F1D">Submit</button>
	
	</font></td>
</tr>

</table>
</form>
</body>
</html>