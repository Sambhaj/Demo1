<?php
include('config.php');
?>


	<?php session_start(); if(!isset($_SESSION['username'])) { header('location:admin.php'); } ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>KHADAYATA COMMUNITY BUSINESS FORUM</title>
<meta charset="utf-8">
  
  
  <link rel="shortcut icon" type="image/png"  href="images\icon\KBN logo.png" width="16" height="16"/>
  
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />


<!----End Header----->
 	<body >
	<div class="main">
	    <div class="header">
        <div class="header_resize">
        <div class="rss">
        <p><a href="#"></a> <a href="#"></a></p>
        </div>
        <div class="logo">
	    <h1><a href="index.html"><img src="images/logo.png" alt="logo"><br><br><br><br><br><br></a> </h1>
    </div>
 </div>
 </div>
 <br>
  <div class="row" style="padding:1px 22px 0px 0px;background-color:#e6e6e6;Font-size:20px;font-family:">
	 <div class="col-md-12">
	 
					  <!-- TITLE /*  */-->
					  <table  style="padding-top:10px;width:100%">
					  <tr><td Align=center width="40px" >
                          <img src="images\admin.png" height="20px">
						  </td>          
                          <td>Welcome <?php echo $_SESSION['username']; ?></td>				 
					   <td Align=right><a href="logout.php" title="Logout" data-toggle="tooltip"><img src="images\logout.png" height="30px" style="" ></a></td></tr></table>
                         						

       </div>
   </div>
 
 <TABLE  Align="center" BORDER=1 Width=26% height=300px style="border:2px solid;background-color:#f2f2f2;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                       <tr Align=center style="background-color:#146b85;color:white;font-size:25px"><th colspan=2 height="45px">Dashboard</th></tr><br><br>
                       <tr Align=center>
                         <th  height="120px"  padding=10px>
                            <a href="changepassword.php" data-toggle="tooltip" data-placement="right"  title="Change password"><img src="images\6.png" height="80px"> </a> 
                         <td><a href="create_newadmin.php"  data-toggle="tooltip" data-placement="right"  title="Create New Admin"><img src="images\4.png" height="80px"></a>
						 </td>
						 </th>
					  </tr>

                       <tr Align=center >
					   <th  height="120px">
                           <a href="Registered_Members.php" data-toggle="tooltip" data-placement="right"  title="Show Registered Members"><img src="images\3.png" height="80px" ></a>
                          <td  height="30px"><a href="registeration.php" data-toggle="tooltip" data-placement="right"  title="Registration form"><img src="images\2.png" height="80px">
						  </td>
						</th></tr>
                      <tr Align=center >  
                       <td colspan=2  height="120px"><a href="self_invitee.php" data-toggle="tooltip" data-placement="right"  title="Show Self Invitee"><img src="images\5.png" height="80px"></a>
                     </td></tr>
</table>

</div>
 
 <br>
<!----End Main Contents---------->

<!----copyright---------->
<div class="container-fluid" id="copyright">
<div class="container" > 
 <div class="row">
 <div class="col-sm-9">Copyright © 2016 | Powered By <a href="http://sednainfosystems.com/" target=" "><b>Sedna</b></a>
 </div>

 </div>
</div>		
	 
</div>
<!----end copyright---------->
</body>
</html>