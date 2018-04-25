<?php
include('config.php');
?>
<?php

	$message="";
 	 $query = "SELECT * FROM tb_contact";
	 $search_result = filterTable($query);

   
 
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "db_vailax");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VAILAX</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
	<link rel="shortcut icon" type="image/png" href="images/icon/logo.png"  width="16" height="16">
    


  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<img src="images/icon/logo1.png" style="height:60px">
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="contact.html" >Contact Us</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>		
			</div>		
		</div>	
	</div>
	
	<!-- <div class="map">
		<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
	</div> -->
	
	<section id="contact-page">
        <div class="container" >
            <div class="center">        
               
               
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-12 ">
                    
                    <div id="errormessage"></div>
                                          
                </div>
				
				
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	
	
	<div>
	<div class="gmap-area"  >
            <div class="container" >
                <div class="row">
				<form action="" method="post" >	   
            
             
              
			                       
                  <div class="col-sm-6 map-content" style="color:red">
                
                       <table  class="table table-striped" height="auto">
						
							<thead>
					<tr class="" style="background-color:#6699ff;">
						<th>Name</th>
                        <th>Email</th>
						 <th>Mobile No</th>
               		     <th>Inquiry</th>
		 		    </tr>
				</thead>
				<tbody>
				 <?php while($row = mysqli_fetch_array($search_result)):
				
              
				?>
				
				
					<tr style="color:#000000">
                    <td><?php echo $row['name']; ?></td> 
					<td><?php echo $row['email']; ?></td> 
					<td><?php echo $row['mobile_no']; ?></td> 
					<td><?php echo $row['inquiry']; ?></td> 
				    
					</tr>
				                <?php endwhile;?>
					</tbody>
					</table>         
                           
                    </div>
					 </form>
					 
                </div>
            </div><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						
                        <div class="credits">
                            
                           Copyright © 2017 | Powered By <a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>