

if(isset($_POST['submitform'])){

 

$name = trim(mysql_escape_string($_POST['name']));

$email = trim(mysql_escape_string($_POST['email']));

$passwords = trim(mysql_escape_string($_POST['pwd']));

$password = md5($passwords);

 

$query_verify_email = &quot;SELECT * FROM register WHERE email ='$email' and isactive = 1&quot;;

$verified_email = mysqli_query($con,$query_verify_email);

if (!$verified_email) {

echo ' System Error';

}

if (mysqli_num_rows($verified_email) == 0) {

// Generate a unique code:

$hash = md5(uniqid(rand(), true));

$query_create_user = &quot;INSERT INTO <code>register</code> ( <code>name</code>, <code>email</code>, <code>password</code>, <code>hash</code>) VALUES ( '$name', '$email', '$password', '$hash')&quot;;

$created_user = mysqli_query($con,$query_create_user);

if (!$created_user) {

echo 'Query Failed ';

}

 

if (mysqli_affected_rows($con) == 1) { //If the Insert Query was successfull.

 

$subject = 'Activate Your Email';

 

$headers = &quot;From: admin@infotuts.com \r\n&quot;;

$headers .= &quot;MIME-Version: 1.0\r\n&quot;;

$headers .= &quot;Content-Type: text/html; charset=ISO-8859-1\r\n&quot;;

$url= BASE_PATH . '/verify.php?email=' . urlencode($email) . &quot;&amp;key=$hash&quot;;

 

$message ='&lt;p&gt;To activate your account please click on Activate buttton&lt;/p&gt;';

$message.='&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt; &lt;tr&gt;';

$message .= '&lt;td align=&quot;center&quot; width=&quot;300&quot; height=&quot;40&quot; bgcolor=&quot;#000091&quot; style=&quot;-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;

 

color: #ffffff; display: block;&quot;&gt;';

 

$message .= '&lt;a href=&quot;'.$url.'&quot; style=&quot;color: #ffffff; font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none;



line-height:40px; width:100%; display:inline-block&quot;&gt;Click to Activate&lt;/a&gt;';

$message .= '&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;';

 

mail($email, $subject, $message, $headers);

 

echo '&lt;div&gt;A confirmation email

has been sent to &lt;b&gt;'. $email.' &lt;/b&gt; Please click on the Activate Button to Activate your account &lt;/div&gt;';

} else { // If it did not run OK.

echo '&lt;div&gt;You could not be registered due to a system

error. We apologize for any

inconvenience.&lt;/div&gt;';

}

}

else{

echo '&lt;div&gt;Email already registered&lt;/div&gt;';}

}
 

?&gt;