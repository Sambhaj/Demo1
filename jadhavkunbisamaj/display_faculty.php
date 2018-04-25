<?php 
	include('db.php'); // // include database file
?>
<?php

	$message="";
if(isset($_POST['search']))
{
	//declare all variable//
	
$search_result="";
$valueToSearch = $_POST['valueToSearch']; 
	  $query = "SELECT * FROM tb_register WHERE faculty LIKE '%$valueToSearch%'"; 
	  $search_result = filterTable($query);
   
}
    else
	{
	 $query = "SELECT * FROM tb_register";
	 $search_result = filterTable($query);
     }

   
 
// function to connect and execute the query
function filterTable($query)
{
    $filter_Result = mysql_query($query);
    return $filter_Result;
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
  <script language="javascript" src="js/prototype-1.6.0.2.js" type="text/javascript"></script>
<script language="javascript" src="js/preview_templates.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"></script>
 
  <style> 
	  
        
		
		#btn{
  margin: 0 auto;
  width:100px;
 
  height:33px;
  font-weight: bold;
  background-color: #ffffff;
  border: 1px solid transparent;
  text-decoration:none;
  color: #000000;
  cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #146b85;
  border-color: #146b85;
  text-decoration:none;
  font-size:16px;
}

 </style>
</head>
<body>
<div id="main" ><!-- Main starts here -->

<div id="header" style="padding:6px 330px 10px 24px;"><!-- Header starts here -->

	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3>Find your better half...</h3></td>
		</tr></table>
	
</div><!-- Header ends here -->


<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">

  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
     
	<div class='panel-heading' style="background-color:#689F1D;text-align:right">
        <button style="color:#000000;" id="btn" onclick="parent.location='register.php'"  style="padding-left:20px;">Back</button>	             

      </div>
      <div class='panel-body'>
        <form class='form-horizontal' action="" method="post" >
          <div class='form-group'>
                   

          </div>
           <div class='form-group'>
		   <div class='col-md-offset-2 col-md-4'>
             <select class='form-control' id='id_equipment' name="valueToSearch">
                   <option value="0">Select </option>
	                         <option value="Art">Art</option>
                             <option value="Commerce">Commerce</option>
                             <option value="Science">Science</option>
	                         <option value="Education">Education</option>
	                         <option value="Engineering & Technology">Engineering & Technology</option>
	                         <option value="Home Science">Home Science</option>
                             <option value="Law">Law</option>
	                         <option value="Medicine">Medicine</option>
	                         <option value="Social Science">Social Science</option>
                  </select> 
            </div>
            <div class='col-md-offset-12 col-md-4'>
			<button class='btn-lg btn-primary' type='submit' name="search" style="background-color:#689F1D;border-color:#689F1D">Search</button>
			</div>
			
           
          </div>
          <div class='form-group'>

          <div class='col-md-8' style="height:90%;width:100%;font-size:2px;overflow: auto;">
              <div class='col-md-2'>
                <div class='form-group internal'>
                 <table  class = "table table-striped"  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <tr  style="font-size:15px">
                    <th >Name</th>
					 <th>Faculty</th>
					 <th>Subfaculty</th>
                    <th>Subject</th>
                    <th>Ph.D Title</th>
                    <th>Awarded Year</th>
					<th>University Name</th>
					<th>Publish Paper National</th>
					<th>Publish Paper International</th>
					<th>National No</th>
                    <th>International No</th>
					<th>Self Address</th>
                    <th>Working Address</th>
					<th>Contact No1</th>
					<th>Contact No2</th>
                    <th>Email-Id</th>
				</tr>
      <!-- populate table from mysql database -->
                <?php while($row = mysql_fetch_array($search_result)):
				
               $a= $row['publish_ppr_N'];
			   if ($a=="National")
			   {
				   $national="National";
			   }
			   else if ($a=="Array")
			   {
				   $national="National";
			   }
			   else
			   {
				   $national="";
			   }
			   $b= $row['publish_ppr_IN'];
			   if ($b=="International")
			   {
				   $international="International";
			   }
			   else if ($b=="Array")
			   {
				   $international="International";
			   }
			   else
			   {
				   $international="";
			   }
				?>
				 <tr    style="font-size:15px">
                    <td ><?php echo $row['name'];?></td>
					<td ><?php echo $row['faculty'];?></td>
					<td ><?php echo $row['subfaculty'];?></td>
					<td><?php echo $row['subject'];?></td>
                    <td ><?php echo $row['phd_title'];?></td>
                    <td><?php echo $row['awarded_year'];?></td>
					<td><?php echo $row['uni_name'];?></td>
					<td><?php echo $national;?></td>
					<td><?php echo $international;?></td>
                    <td><?php echo $row['national_no'];?></td>
					
                    <td ><?php echo $row['intl_no'];?></td>
					<td><?php echo $row['self_add'];?></td>
                    <td><?php echo $row['work_add'];?></td> 
					<td><?php echo $row['cont_no'];?></td>
                    <td><?php echo $row['cont_no2'];?></td>
					<td><?php echo $row['email'];?></td>
                   
                </tr>
                 <?php endwhile;?>
            </table>
                </div>
              </div>
              
              
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