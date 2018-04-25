<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php

	$msg = "";
	$msgg = "";

	if(isset($_POST['submit']))
	{
		if(!empty($_POST["mailid"])&&!empty($_POST["membershipno"])&&!empty($_POST["orgname"])&&!empty($_POST["addr1"])&&!empty($_POST["city"])&&!empty($_POST["pincode"])&&!empty($_POST["membership"])&&!empty($_POST["websitename"])&&!empty($_POST["majordeal"])&&!empty($_POST["day"])&&!empty($_POST["month"])&&!empty($_POST["year"])&&!empty($_POST["joindate"])&&!empty($_POST["joinmonth"])&&!empty($_POST["joinyear"]))
		{
			// Declaration of all variable
			
			$mailid = test_input($_POST['mailid']);
			$membershipno = $_POST['membershipno'];
			$orgname  = $_POST['orgname'];
			$addr1 = $_POST['addr1'];
			$addr2 = $_POST['addr2'];
			$addr3 = $_POST['addr3'];
			$city = $_POST['city'];
			$pincode = $_POST['pincode'];
			$hphone = $_POST['hphone'];
			$wphone = $_POST['wphone'];
			$mobilenum = $_POST['mobilenum'];
			$fax = $_POST['fax'];
			$altrnum = $_POST['altrnum'];
			$email = $_POST['email'];
			$econtactname = $_POST['econtactname'];
			$econtactphone = $_POST['econtactphone'];
			$websitename = $_POST['websitename'];
			$majordeal = $_POST['majordeal'];
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			$dateupdate = $day.'-'.$month.'-'.$year;
			$membership = $_POST['membership'];
			$joindate = $_POST['joindate'];
			$joinmonth = $_POST['joinmonth'];
			$joinyear = $_POST['joinyear'];
			$joindata = $joindate.'-'.$joinmonth.'-'.$joinyear;
	
			if(isset($_POST["membershipno"]))
			{
				// Query for check product name from table
				$query = mysql_query("SELECT * FROM data_entry WHERE Membership_No = '$_POST[membershipno]'") or die(mysql_error());
				$exist = mysql_num_rows($query);
			
				if($exist >=1)
				{
					print '<script>alert("Data alredy exist!");</script>' ; // for Data alredy exist
				}
			else
			{
				mysql_query("INSERT into data_entry(Mailing_List_ID,Membership_No,Organization_Name,Address_1,Address_2,Address_3,City,Postal_Code,Home_Phone,Work_Phone,Mobile_Phone,Fax_Number,Alternative_Phone,Email_Address,Emrgcy_Contact_Name,Emrgcy_Contact_Phone,Website,Major_Deal_In,Date_Updated,Membership_Status,Date_Joined) values('$mailid','$membershipno','$orgname','$addr1','$addr2','$addr3','$city','$pincode','$hphone','$wphone','$mobilenum','$fax','$altrnum','$email','$econtactname','$econtactphone','$websitename','$majordeal','$dateupdate','$membership','$joindata')") or die(mysql_error());
				print '<script>alert("Data Upload Successfully!");</script>' ; // for Data alredy exist
				Print '<script>window.location.assign("Data_Entry.php");</script>'; 
			}
			}
		}
		else
		{
			$msg="*";
			$msgg="Please fill in all required fields!";
		}
	}

	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<!--BEGIN html-->
<html lang="en-US">
    <!--BEGIN head-->
    <head>

                    <!-- Favicon -->
            <!-- Firefox, Chrome, Safari, IE 11+ and Opera. -->
            <link href="http://www.beltshoses.in/wp-content/uploads/2016/01/fav.png" rel="icon" type="image/x-icon" />
        
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Data Entry | THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</title>
<link rel="alternate" type="application/rss+xml" title="THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION &raquo; Feed" href="http://www.beltshoses.in/feed/" />
<link rel="alternate" type="application/rss+xml" title="THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION &raquo; Comments Feed" href="http://www.beltshoses.in/comments/feed/" />
			<link rel="stylesheet" href="css/menu.css">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.beltshoses.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.3"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<script>function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
</script>
<link rel='stylesheet' id='parallaxcss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/parallax.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesomecss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/fontawesome/css/font-awesome.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='maincss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/style.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapcss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/css/bootstrap.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapcsstheme-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/css/bootstrap-theme.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='dynamic-css-css'  href='http://www.beltshoses.in/wp-admin/admin-ajax.php?action=evolve_dynamic_css&#038;ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-evl_options-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A700%2C400&#038;subset=greek-ext%2Cgreek&#038;ver=1455523406' type='text/css' media='all' />
<script type='text/javascript' src='http://www.beltshoses.in/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/parallax.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/modernizr.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/carousel.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/tipsy.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/fields.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/jquery.scroll.pack.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/supersubs.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/superfish.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/hoverIntent.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/buttons.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/ddslick.js?ver=4.3.3'></script>
<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;language=en&#038;ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/js/bootstrap.js?ver=4.3.3'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.beltshoses.in/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.beltshoses.in/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.3.3" />
<link rel='canonical' href='http://www.beltshoses.in/about-us/' />
<link rel='shortlink' href='http://www.beltshoses.in/?p=12' />
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,700' rel='stylesheet' type='text/css'>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="http://www.beltshoses.in/wp-content/themes/evolve/ie.css">
        <![endif]-->

    </head><!--END head-->

    <!--BEGIN body-->
    <body class="page page-id-12 page-template-default">
                    <div id="wrapper">
                        <div id="top"></div>
            <!--BEGIN .header-pattern-->
            <div class="header-pattern">
                <!--BEGIN .header-border-->
                <div class="header-border">
                    <!--BEGIN .header-->
                    <div class="header">
                        <!--BEGIN .container-header-->
                        <div class="container container-header">
                            <!--BEGIN #righttopcolumn-->
                            <div id="righttopcolumn">
                                                                <!--BEGIN #subscribe-follow-->
                                    <div id="social">
                                           
                                        													
                                    </div>
                                    <!--END #subscribe-follow-->
                                                                </div>
                                <!--END #righttopcolumn-->
                                <div class='header-logo-container'><a href=http://www.beltshoses.in><img id='logo-image' class='img-responsive' src=http://www.beltshoses.in/wp-content/uploads/2016/01/logo11.png /></a></div>                            <!--BEGIN .title-container-->
                            <div class="title-container ">
                                                                         <div id="logo" ><a href="http://www.beltshoses.in"><b style="font-family: 'Exo 2', sans-serif;letter-spacing: 0px;">THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</b></a></div>
                                    <div id="tagline">  &nbsp;&nbsp;ESTD. 2001</div>                                
                            </div>
                            <!--END .title-container-->
                        </div>
                        <!--END .container-header-->
                    </div>
                    <!--END .header-->
                </div>
                <!--END .header-border-->
            </div>
            <!--END .header-pattern-->
            <div class="menu-container">
                                    <div class="fluid-width">
                                        <div class="menu-header">
                        <!--BEGIN .container-menu-->
                        <div class="container nacked-menu container-menu">
                                                            
                                                                    <!--BEGIN #searchform-->
<!-------------Admin Header---------------------->
	<div style="height:35px;">
		<p style="color:white;margin-top:5px;padding:5px;margin-left:10px;"><b>Welcome,
		<?php 
				if($_SESSION["Admin_Name"]) 
				{
					echo $_SESSION["Admin_Name"];
				}else
				{
					print '<script>alert("Please Login!");</script>' ;
					Print '<script>window.location.assign("Admin_Login.php");</script>';
				}
		?></b><button onclick="parent.location='Log_Out.php'" value="Logout" style="float:right;height:30px;margin-top:-5px;">Logout</button></p>
	</div>
<!-------------End Admin Header---------------------->  
                                    <div class="clearfix"></div>
                                    <!--END #searchform-->
                                                            </div><!-- /.container -->
                    </div><!-- /.menu-header -->
                   
                                        </div><!-- /.fluid-width -->
                                <!--BEGIN .content-->
                <div class="content singular page pageid-12">
                                        <!--BEGIN .container-->
                    <div class="container container-center row">
                        <!--BEGIN #content-->
                        <div id="content">
                            
<!--BEGIN #primary .hfeed-->

<div id="primary" class=" col-md-12 full-width col-single">

    
    
            <!--BEGIN .hentry-->
            <div id="post-12" class="post-12 page type-page status-publish hentry p publish first-page untagged">

                
                

                <!--BEGIN .entry-content .article-->
                <div class="entry-content article">
                    
		
	
<!-------------Your contents body---------------------->	
		<!---Vertical Menus--->		
		<div id='cssmenu' style="float:left;">
		<ul>
		<li ><a href='Admin_Login.php'><span>Dashboard</span></a></li>
		<li><a href='Slider.php'><span>Slider</span></a></li>
		<li><a href='News.php'><span>News</span></a></li>
		<li><a href='Circulars.php'><span>Circulars</span></a></li>
		<li><a href='Price_List.php'><span>Price List</span></a></li>
		<li class='active'><a href='Data_Entry.php'><span>Data Entry</span></a></li>
		<li><a href='Members_Sheet.php'><span>Members Sheet</span></a></li>
		<li class='last'><a href='Change_Pass.php'><span>Change Password</span></a></li>
		</ul>
	</div>	
		<!---End Vertical Menus--->
		
		<!---Body of menus contents--->
		<div style="float:left;margin-left:10px;width:80%">
		<form method="POST" action="">
		<table>
		<tr>
		<td colspan="4" align="center" style="border-bottom:1px #272727 solid; text-align:center;font-size:16px;padding:10px;background-color:#38A3E1;font-family: 'roboto';color:#FFFFFF;">Data Entry</td>
		</tr>
		<tr>
		<td style="text-align:right;">Mailing List ID:</td>
		<td><input type="text" style="width:60%;" name="mailid" value="<?php echo isset($_POST['mailid']) ? $_POST['mailid'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		<td style="text-align:right;">Membership No:</td>
		<td><input type="text" style="width:80%;" name="membershipno" value="<?php echo isset($_POST['membershipno']) ? $_POST['membershipno'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Organization Name:</td>
		<td colspan="3"><input type="text" style="width:60%;" name="orgname" value="<?php echo isset($_POST['orgname']) ? $_POST['orgname'] : ''; ?>"><span style="color:red;" ><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Address1:</td>
		<td><textarea name="addr1" style="width:80%;"><?php echo isset($_POST['addr1']) ? $_POST['addr1'] : ''; ?></textarea><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		<td style="text-align:right;">Address2:</td>
		<td><textarea name="addr2" style="width:80%;"><?php echo isset($_POST['addr2']) ? $_POST['addr2'] : ''; ?></textarea></td>
		</tr>
		<tr>
		<td style="text-align:right;">Address3:</td>
		<td ><textarea name="addr3" style="width:80%;"><?php echo isset($_POST['addr3']) ? $_POST['addr3'] : ''; ?></textarea></td>
		<td style="text-align:right;">City:<br><br><br>Postal Code:</td>
		<td><input type="text" style="width:80%;" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span><br>
			<br><input type="text" style="width:50%;" name="pincode" value="<?php echo isset($_POST['pincode']) ? $_POST['pincode'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Home Phone:</td>
		<td><input type="text" style="width:80%;" name="hphone" value="<?php echo isset($_POST['hphone']) ? $_POST['hphone'] : ''; ?>"></td>
		<td style="text-align:right;">Work Phone:</td>
		<td><input type="text" style="width:80%;" name="wphone" value="<?php echo isset($_POST['wphone']) ? $_POST['wphone'] : ''; ?>"></td>
		</tr>
		<tr>
		<td style="text-align:right;">Mobile Phone:</td>
		<td><input type="text" style="width:80%;" name="mobilenum" value="<?php echo isset($_POST['mobilenum']) ? $_POST['mobilenum'] : ''; ?>"></td>
		<td style="text-align:right;">Fax Number:</td>
		<td><input type="text" style="width:80%;" name="fax" value="<?php echo isset($_POST['fax']) ? $_POST['fax'] : ''; ?>"></td>
		</tr>
		<tr>
		<td style="text-align:right;">Alternative Phone:</td>
		<td><input type="text" style="width:80%;" name="altrnum" value="<?php echo isset($_POST['altrnum']) ? $_POST['altrnum'] : ''; ?>"></td>
		<td style="text-align:right;">Email Address:</td>
		<td><input type="email" style="width:80%;" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></td>
		</tr>
		<tr>
		<td style="text-align:right;">Emrgcy Contact Name:</td>
		<td><input type="text" style="width:80%;" name="econtactname" value="<?php echo isset($_POST['econtactname']) ? $_POST['econtactname'] : ''; ?>"></td>
		<td style="text-align:right;">Emrgcy Contact Phone:</td>
		<td><input type="text" style="width:80%;" name="econtactphone" value="<?php echo isset($_POST['econtactphone']) ? $_POST['econtactphone'] : ''; ?>"></td>
		</tr>
		<tr>
		<td style="text-align:right;">Website Name:</td>
		<td><input type="text" style="width:80%;" name="websitename" value="<?php echo isset($_POST['websitename']) ? $_POST['websitename'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		<td style="text-align:right;">Major Deal in:</td>
		<td><input type="text" style="width:80%;" name="majordeal" value="<?php echo isset($_POST['majordeal']) ? $_POST['majordeal'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Membership Status:</td>
		<td colspan="3"><input type="text" style="width:60%;" name="membership" value="<?php echo isset($_POST['membership']) ? $_POST['membership'] : ''; ?>"><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Date Updated:</td>
		<td>
			<select name="day" style="height:30px;"><option value="">Day</option>
			<?php
					for($i=1;$i<=31;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
			?>
			</select>
			<select name="month" style="height:30px;"><option value="">Month</option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
			</select>
			<select name="year" style="height:30px;"><option value="">Year</option>
			<?php
					for($i=1960;$i<=2016;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
			?>
			</select><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		
		<td style="text-align:right;">Date Joined:</td>
		<td>
			<select name="joindate" style="height:30px;"><option value="">Day</option>
			<?php
					for($i=1;$i<=31;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
			?>
			</select>
			<select name="joinmonth" style="height:30px;"><option value="">Month</option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
			</select>
			<select name="joinyear" style="height:30px;"><option value="">Year</option>
			<?php
					for($i=1960;$i<=2016;$i++)
					{
						echo '<option value='.$i.'>'.$i.'</option>';
					}
			?>
			</select><span style="color:red;"><?php echo htmlspecialchars($msg);?></span></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Submit"></td>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td colspan="4" style="text-align:center;"><span style="color:red;"><?php echo htmlspecialchars($msgg);?></span></td>
		</tr>
		</table>
		</form>
		</div>
	<!---End body of menus contents--->
<!-------------End your contents body---------------------->
	

                    <div class="clearfix"></div>

                </div><!--END .entry-content .article-->

                <!-- Auto Discovery Trackbacks
                <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/">
		<rdf:Description rdf:about="http://www.beltshoses.in/about-us/"
    dc:identifier="http://www.beltshoses.in/about-us/"
    dc:title="About us"
    trackback:ping="http://www.beltshoses.in/about-us/trackback/" />
</rdf:RDF>                -->
                <!--END .hentry-->
            </div>

            
            
<div id="comments">   
    </div>


            

    <!--END #primary .hfeed-->
</div>



<!--END #content-->
</div>
<!--END .container-->
</div>
<!--END .content-->
</div>
<!--BEGIN .content-bottom-->
<div class="content-bottom">
    <!--END .content-bottom-->
</div>
<!--BEGIN .footer-->
<div class="footer">
    <!--BEGIN .container-->
    <div class="container container-footer">
                <div class="clearfix"></div>
        <div style="font-family: 'roboto'; font-size: 14px; text-align:center;"><h5>Copyright © 2016 | Powered By<a href="http://sednainfosystems.com/" target=" "><b> Sedna</b></h5> </a></div>        <!-- Theme Hook -->
        
    <script type="text/javascript">
        var $jx = jQuery.noConflict();
        $jx("div.post").mouseover(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'hidden');
                }
        );
        $jx("div.type-page").mouseover(
                function () {
                    $jx(this).find("span.edit-page").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-page").css('visibility', 'hidden');
                }
        );
        $jx("div.type-attachment").mouseover(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'hidden');
                }
        );
        $jx("li.comment").mouseover(
                function () {
                    $jx(this).find("span.edit-comment").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-comment").css('visibility', 'hidden');
                }
                );</script> 

    

    
        <script type="text/javascript">
            /*----------------------------*/
            /* Animated Buttons
             /*----------------------------*/

            var $animated = jQuery.noConflict();
            $animated('.post-more').hover(
                    function () {
                        $animated(this).addClass('animated pulse')
                    },
                    function () {
                        $animated(this).removeClass('animated pulse')
                    }
            )
            $animated('.read-more').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )
            $animated('#submit').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )
            $animated('input[type="submit"]').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )

        </script>

    

    
        <script type="text/javascript">
            /*----------------*/
            /* AnythingSlider
             /*----------------*/
            var $s = jQuery.noConflict();
            $s(
                    function () {
                        $s('#slides')
                                .anythingSlider({autoPlay: true, delay: 7000, })
                    }
            )
        </script>

    

            <script type="text/javascript">
            /*----------------*/
            /* Parallax Slider
             /*----------------*/

            var $par = jQuery.noConflict();
            $par('#da-slider').cslider(
                    {
                        autoplay: true,
                        bgincrement: 450,
                        interval: 4000                    }
                    );</script>

    
    <script type="text/javascript">
        /*----------------------*/
        /* Bootstrap Slider
         /*---------------------*/

        var $carousel = jQuery.noConflict();
        $carousel('#myCarousel').carousel(
                {
                    interval: 7000
                }
        )

        $carousel('#carousel-nav a').click(
                function (q) {
                    q.preventDefault();
                    targetSlide = $carousel(this).attr('data-to') - 1;
                    $carousel('#myCarousel').carousel(targetSlide);
                    $carousel(this).addClass('active').siblings().removeClass('active');
                }
        );
        $carousel('#bootstrap-slider').carousel(
                {
                    interval: 7000                }
        )

        $carousel('#carousel-nav a').click(
                function (q) {
                    q.preventDefault();
                    targetSlide = $carousel(this).attr('data-to') - 1;
                    $carousel('#bootstrap-slider').carousel(targetSlide);
                    $carousel(this).addClass('active').siblings().removeClass('active');
                }
        );
        // $('#carousel-rel a').click(function(q){
        //         console.log('Clicked');
        //         targetSlide = (parseInt($('#carousel-rel a.active').data('to')) + 1) % 3;
        //         console.log('targetSlide');
        //         $('#carousel-rel a[data-to='+ targetSlide +']').addClass('active').siblings().removeClass('active');
        //     });
    </script>


            <!--END .container-->
    </div>
    <!--END .footer-->
</div>
<!--END body-->
    <a href="#top" id="top-link"><div id="backtotop"></div></a>
        <script>
			if (jQuery(".posts-container-infinite").length == 1) {
			var ias = jQuery.ias({
			 container: ".posts-container-infinite",
			 item: "div.post",
			 pagination: "div.pagination",
			 next: "a.pagination-next",
		   });
		   
			ias.extension(new IASTriggerExtension({
				text: "Load more items",
				offset: 99999
			}));
		   ias.extension(new IASSpinnerExtension({
				src: "http://www.beltshoses.in/wp-content/themes/evolve/library/media/images/loader.gif"			   
		   }));
		   ias.extension(new IASNoneLeftExtension());
			}
		</script><script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/tabs.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/main.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/gmap.js?ver=4.3.3'></script>
</body>
<!--END html(kthxbye)-->
</html>