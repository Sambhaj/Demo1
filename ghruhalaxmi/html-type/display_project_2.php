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
$main_id="";
$select="";
session_start(); //start user session
$flag="";

$flag1="";
 /* $qr = "SELECT tb_projectinfo.* ,tb_specification.*,tb_images.* FROM tb_projectinfo JOIN tb_specification ON tb_projectinfo.id=tb_specification.id JOIN tb_images ON tb_specification.id=tb_images.id";
 $result = mysql_query($qr) or die (mysql_error()); */

 
 if(isset($_POST['search']))
{
	//declare all variable//

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$location=$_POST['location'];
$vlink=$_POST['vlink'];
$flat=$_POST['flat'];
$area=$_POST['area'];
$gym=$_POST['gym'];
$swimming=$_POST['swimming'];
$school=$_POST['school'];
$garden=$_POST['garden'];  
$temple=$_POST['temple'];
$commercial=$_POST['commercial'];
$hospital=$_POST['hospital'];

$parking=$_POST['parking'];
$address=$_POST['address'];


$lift=$_POST['lift'];
$club=$_POST['club'];
$security=$_POST['security'];
$spl=$_POST['spl'];

$rtype=$_POST['rtype'];

$rarea=$_POST['rarea'];

$rcost=$_POST['rcost'];

$ctype=$_POST['ctype'];
$carea=$_POST['carea'];
$ccost=$_POST['ccost'];

$valueToSearch = $_POST['valueToSearch'];
$valueToSearch1= $_POST['valueToSearch1'];

$valueToSearch2 = $_POST['valueToSearch2'];

$project_status=$_POST['project_status'];

$pdate1=$_POST['pdate'];
$pdate=$pdate1.$project_status;

$to = $_POST['to'];
$value = $_POST['value'];
   
{

     $query = "SELECT tb_projectinfo.* ,tb_specification.* FROM tb_projectinfo JOIN tb_specification ON tb_projectinfo.id=tb_specification.id JOIN tb_images ON tb_specification.id=tb_images.id WHERE spl_type LIKE '%$valueToSearch%'";

         $result = mysql_query($query) or die (mysql_error());
		 
}}
	 else if(isset($_POST['search1']))
	 {
		$valueToSearch1= $_POST['valueToSearch1'];
	  $query = "SELECT tb_projectinfo.* ,tb_specification.* FROM tb_projectinfo JOIN tb_specification ON tb_projectinfo.id=tb_specification.id   WHERE location LIKE '%$valueToSearch1%'"; 

	         $result = mysql_query($query) or die (mysql_error());

	 
	 }
    else if(isset($_POST['search2']))
	{
			$to = $_POST['to'];
$value = $_POST['value'];	
 $qr = "SELECT tb_projectinfo.* ,tb_specification.* FROM tb_projectinfo JOIN tb_specification ON tb_projectinfo.id=tb_specification.id WHERE flat_cost_R BETWEEN '$to'  AND  '$value'";
 $result = mysql_query($qr) or die (mysql_error());

     }
	  else 
	{
 $qr = "SELECT DISTINCT tb_projectinfo.* ,tb_specification.* FROM tb_projectinfo JOIN tb_specification ON tb_projectinfo.id=tb_specification.id ";
 $result = mysql_query($qr) or die (mysql_error());
 $result1 = mysql_query($qr) or die (mysql_error());
     }

 
 // function to connect and execute the query
function filterTable($query)
{
    $filter_Result = mysql_query($query);
    return $filter_Result;
}
 
  
 		
require("class.phpmailer.php");
if(isset($_POST["send"])){
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "gruhalaxmi.in";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@skechersindia.in";
$mail->Password = "sm)ykm78fwEG";


$t=$_POST["email"];
$t1=$_POST["name"];
$t2=$_POST["phone"];
$t3=$_POST["message"];
$id=$_POST["id"];


$mail->From = "noreply@gruhalaxmi.in";


$mail->FromName = "Ghrhalaxmi";


$mail->AddAddress("sednainfo5@gmail.com");

////$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);


$mail->Subject = "Ghrhalaxmi-Contact Form";


$mail->Body = "<b>Ghrhalaxmi-Contact Form Details </b><br/><br/> $id </br>Name : $t1<br/> Email : $t<br/> Mobile No. :$t2<br/> Message :$t3";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "<script>alert('Message Could Not Be Sent.');</script>";
echo "Mailer Error: " . $mail->ErrorInfo;

exit;
}


echo "<script>alert('Thank you for contacting us. We will be in touch with you very soon');</script>";

}
 
 
 
 
 
 
 
 
 
 
 
 
 
?>
<html>
<head>
<style>


#btn{
  margin: 0 auto;
  width:100px;
  font-size:17px;
  height:45px;
  font-weight: bold;
  background-color: #db2723;
  border: 1px solid transparent;
  text-decoration:none;
  color: white;
 cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #db2723;
   font-size:20px;
  border-color: #db2723;
  text-decoration:none;
}

.btn{
  margin: 0 auto;
  width:100px;
  font-size:14px;
 line-height: 30px;
     height: 30px
  font-weight: bold;
  background-color: #db2723;
  border: 1px solid transparent;
  text-decoration:none;
  color: white;
 cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}





.button {
  background-image: url(images/img.jpg);
  background-repeat: no-repeat;
  
  width: 220px;
 
  margin: 7px 0 5px 7px;
  padding: 3px 0 6px 0;
  cursor: hand;
  cursor: pointer;
  color: #2C2C2C;
  font-family: Tahoma;
  font-size: 11px;
}



body {font-size: 14px;
    margin: 15px 0px;
    font-weight: 200;
    max-height: 100px;
    overflow: auto;
    color: #666;}

.topnav {
  overflow: hidden;
  background-color: #ffffff;
}

.topnav a {
  float: left;
  display: block;
  color: #767676;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #db2723;
  color: #ffffff;
}

.active {
  background-color:#db2723;
  color: #ffffff;

}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
	color: #74838B !important;
	text-decoration: none;
	background-color: #f3f5f6;
	background-image: -moz-linear-gradient(top, #f3f5f6, #eaebec);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3f5f6), to(#eaebec));
	background-image: -webkit-linear-gradient(top, #f3f5f6, #eaebec);
	background-image: -o-linear-gradient(top, #f3f5f6, #eaebec);
	background-image: linear-gradient(to bottom, #f3f5f6, #eaebec);  
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}







.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #767676;
   color: #adaeb1;;
   text-align: center;
}





@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
  
  /* Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}
/* Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
  
  
</style>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
<div class="topnav" id="myTopnav" style="padding:20px">
<div class="col-md-7"  style="padding: 0 15px;">
<img src="images/logo-2.jpg" style="padding-left:100px">
</div>
<div class="col-md-5" style="text-align:right;padding:0 15px">
  <a href="http://gruhalaxmi.in/gruha/" >Home</a>
  <a href="http://gruhalaxmi.in/gruha/?page_id=212t">About Us</a>
  <a href="http://gruhalaxmi.in/gruha/html-type/display_projects.php" class="active" style="color:white">Projects</a>
  <a href="http://gruhalaxmi.in/gruha/?page_id=215&customize_changeset_uuid=e696e9ab-6a2e-4c3f-a488-a9eec0fd0f44">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<div class="container" style="padding-top:20px">
<div class='panel-heading' style="">

 <div class="table-responsive">          
 <form action="" method="post" >	   
            
              <table class="table" width="100%" height="auto" style="font-size:14px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">
			   <tbody>
			 <tr style="padding-top:10px">
			     <td>Specification:</td>
				 <td> <select  class='form-control' name="valueToSearch">
				 <option value="">Select </option>
			    <option value='Residential'>Residential</option>
				<option value='Commercial'>Commercial</option>
				<option value='Other'>Other</option>
				

				</td>
				<td ><input type="submit" class='form-control'name="search" style="background-color: #db2723;font-weight: bold;color:#ffffff" value="Search" ></td>
				 
				 
			     <td>Location </td><td>
				 
				 <select  class='form-control' name="valueToSearch1" value="<?php if(isset($valueToSearch1)) echo $email; ?> ">
				<option selected='selected'>Select</option>
        <?php
        while ($row =  mysql_fetch_array($result1))
		{
			
            echo '<option value="'.$row['location'].'">'.$row['location'].'</option>';
        }
        ?>
		<?php
		if($valueToSearch1 <> "" && $valueToSearch1 <> "NA")
{
	echo "<option  value='$valueToSearch1'  selected='selected'>$valueToSearch1</option>";

}?>
    </select>
				 
				 
				 </td>
				  <td><input type="submit" class='form-control'style="background-color: #db2723;font-weight: bold;color:#ffffff" name="search1" value="Search"></td>
			     <td>Price:</td>
				 <td> <select  class='form-control' name="to" placeholder="Min">
				 <option value="">Select </option>
			    <option value='500000'> 5 Lac</option>
				<option value='1000000'> 10 Lac</option>
				<option value='2000000'>20 Lac</option>
				<option value='2000000'>20 Lac</option>
				<option value='3000000'>30 Lac</option>
				<option value='4000000'>40 Lac</option>
				<option value='5000000'>50 Lac</option>
				<option value='6000000'>60 Lac</option>

				
				</select>
				<td>
				To </td>
				</td>
				<td><select  class='form-control' name="value" placeholder="Max">
				 <option value="">Select </option>
			    <option value='500000'> 5 Lac</option>
				<option value='1000000'> 10 Lac</option>
				<option value='2000000'>20 Lac</option>
				<option value='2000000'>20 Lac</option>
				<option value='3000000'>30 Lac</option>
				<option value='4000000'>40 Lac</option>
				<option value='5000000'>50 Lac</option>
				<option value='6000000'>60 Lac</option>  
</td>
</select>
				  <td><input type="submit" class='form-control' style="background-color: #db2723;font-weight: bold;color:#ffffff"  name="search2" value="Search"></td>
				 
				 
				 
			  </tr>
			    </tbody>
			  </table>

			</form>
           
                

      <!-- populate table from mysql database -->
                <?php while($row = mysql_fetch_array($result)):
				 $a= $row['gym'];
			   if ($a=="gym")
			   {
				   $gym="<img src=images/gym.png>";
				   
			   }
			    else
			   {
				   $gym="<img src=images/NA.jpg>";
			   }
              
			  
			  
			   $b= $row['temple'];
			   if ($b=="temple")
			   {
				   $temple="<img src=images/Temple.png>";
				   
			   }
			    else
			   {
				   $temple="<img src=images/NA.jpg>";
			   }
              
			   $c= $row['swimming_pool'];
			   if ($c=="swimming_pool")
			   {
				   $swimming_pool="<img src=images/swimming.png>";
			   }
			    else
			   {
				   $swimming_pool="<img src=images/NA.jpg>";
			   }
              
			    $d= $row['school'];
			   if ($d=="school")
			   {
				   $school="<img src=images/school.png>";
			   }
			    else
			   {
				   $school="<img src=images/NA.jpg>";
			   }
              
			   $e= $row['garden'];
			   if ($e=="garden")
			   {
				   $garden="<img src=images/garden.png>";
			   }
			    else
			   {
				   $garden="<img src=images/NA.jpg>";
			   }
              
			   $f= $row['club_house'];
			   if ($f=="club_house")
			   {
				   $club_house="<img src=images/culb_house.png>";
			   }
			    else
			   {
				   $club_house="<img src=images/NA.jpg>";
			   }
              
			   $g= $row['lift'];
			   if ($g=="lift")
			   {
				   $lift="<img src=images/lift.png>";
			   }
			    else
			   {
				   $lift="<img src=images/NA.jpg>";
			   }
              
			   $h= $row['security'];
			   if ($h=="security")
			   {
				   $security="<img src=images/security.png>";
			   }
			    else
			   {
				   $security="<img src=images/NA.jpg>";
			   }
              
			   $m= $row['hospital'];
			   if ($m=="hospital")
			   {
				   $hospital="<img src=images/hospital.png>";
			   }
			    else
			   {
				   $hospital="<img src=images/NA.jpg>";
			   }
              
			   $n= $row['parking'];
			   if ($n=="parking")
			   {
				   $parking="<img src=images/parking.png>";
				  
			   }
			    else
			   {
				   $parking="<img src=images/NA.jpg>";
			   }
              
				?>
				 <div class="table-responsive">          

				 <div style="height:auto;width:98%; font-size: 12px; ">
			   <table class = "table" width="100%" height="auto" style="padding:2px;margin:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top:2000px;font-size:14px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">

				<tbody>
				<tr  style="border:px solid black;background-color:">
                       <td ><B><?php echo $row[1];?></B></td>
					  
					   <td></td>
                  <td></td> <td></td>
					   <td></td>
				       
					</tr>
					<tr>
                    <td rowspan="3" >
					<img src="images/tanishka2.jpg" width="50%" height="auto" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['id']; ?>" id="getUser" class="button" >

					</td>
					<td><b> <?php echo $row[2];?></b></td>

					   <td><span style="color:#b3b3b3">(Specification)</span></br><?php echo $row['spl_type'];?></td>
					    <td><span style="color:#b3b3b3">(Location)</span></br><?php echo $row['location'];?></td>
						<td><?php echo "<a href='download.php?nama=".$row['brochure']." ' style='text-decoration:none;font-size:13px;' ></b><img src='images/download1.png' alt='Download' width='100''></a>" ?></td>
					</tr>
					<tr  style="border:px solid black;background-color:">
                       
					   <td><span style="color:#b3b3b3">(Carpet Area)</span><br><?php echo $row['carpet_area(R)']; echo $row['carpet_area(C)'];?></td>
					 				         <td><span style="color:#b3b3b3">(Status) </span><br>   <?php echo $row['possession_date'];?></td>

					   
					   <td><i class="fa fa-bed" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $row['flat_type(R)']; echo $row['flat_type(C)'];?></td>
					  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" width="50%" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['id']; ?>" id="getUser1" class="btn" value="Contact Now"></td>

					   <td></td>
				       
					</tr>
					<tr>
                       <td ><span style="color:#b3b3b3">(Description)</span><br> <?php echo $row[6];?></td>
					   
					     <td><span style="color:#b3b3b3">(Project Type)</span><br><?php echo $row['project_type'];?></td>

                      
                         					     <td>&nbsp;&nbsp;&#8377 <?php echo $row['flat_cost_R']; echo $row['flat_cost_C'];?></td>
						   <td><?php $message="$row[5] ";
						$position=40;
                     $post = substr($message, 0, $position); 
					 
						?>
						
						<?php echo "<a href=$row[5]  style='font-size:13px;font-weight:bold;  target='_blank''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/viedo.png'></a>";?>

</td>
					</tr>
					</tbody>
					</table>
					
					</div>
					
					 <div style="height:auto;width:98%; font-size: 12px; ">
					<table class = "table table-striped" width="90%" height="auto" style="padding:2px;margin:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);text-align:center;font-size:14px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">
                     <tbody>
					<tr>
					<td style="font-size:22px"><b>Amenities</b></td>
					<td></td>
					<td></td><td></td><td></td>
					</tr>
					<tr>
				   <td><?php echo $gym ;?></td>
					   <td><?php echo $temple ;?></td>
                       <td><?php echo $swimming_pool;?></td>
                       <td><?php echo $school;?></td>
                       <td><?php echo $garden;?></td>
                   </tr>
				   <tr>

					   <td>Gym </td>
					   <td>Temple </td>
                       <td>Swimming Pool</td>
                       <td>School</td>
                       <td>Garden</td>
                   </tr>
				<tr>
				       <td><?php echo $hospital;?></td>
                       <td><?php echo $lift;?></td>
					   <td><?php echo $club_house;?></td>
                       <td><?php echo $security;?></td>
                       <td><?php echo $parking;?></td>
				</tr>
					<tr>
				       <td>Hospital</td>
                       <td>Lift</td>
					   <td>Club House</td>
                       <td>Security</td>
                       <td>Parking</td>
				</tr>
				
					 <?php endwhile;?>
					 
					 </tbody>
					</table></br></br></br></br></br></br>
						
</div>
</div>
</div>
</div>
</div>
</div>
 <div class="table-responsive">          
 
        <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<!-- <h4 class="modal-title">
                            	<i class="fa fa-building"></i> Project Images
                            </h4> 
                       </div> 
                       <div class="modal-body"> 
                       
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="ajax-loader.gif">
                       	   </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>
                             
                        </div> 
                        <div class="modal-footer"> 
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                        </div> 
                        
                 </div> 
              </div>
       </div><!-- /.modal -->    
    </div>
    </div>
<div class="footer">
<div class="span5 cp" style="text-align:left;padding-left:45px;padding:15px">
                       Copyright © 2018 | Powered By <a href="http://sednainfosystems.com/" style="text-decoration: none"><span style="a:text-decoration: none">&nbsp;&nbsp;Sedna</span></a> 
			 </div></div>

<script src="../assets/jquery-1.12.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser1', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'getuser1.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
</body>
</html>
