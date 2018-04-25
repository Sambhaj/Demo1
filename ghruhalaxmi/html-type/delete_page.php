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



body {margin:0;font-family:Arial}

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
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>





<div class="container" style="padding-top:20px">

 <div class="table-responsive">          
 <form action="" method="post" >	
 <a href="image-upload.php" name="delete"><strong>Back</strong></a>

     <br><br>       
              <table class="table" width="100%" height="auto" style="font-size:14px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">
			   <tbody>
        <tr>
		<td colspan="19" style="text-align:center;background-color: #db2723;color:white;font-size:20px">Delete Project Information</td>
		</tr>
		<tr><td></td></tr>
        <tr> 
          <td><strong><font color="#000000">ID</font></strong></td>
          <td><strong><font color="#000000">Project ID</font></strong></td>
          <td><strong><font color="#000000">Project Name</font></strong></td>
          <td><strong><font color="#000000">Project Type</font></strong></td>
          <td><strong><font color="#000000">Location</font></strong></td>
          <td><strong><font color="#000000">Video Link</font></strong></td>
          <td><strong><font color="#000000">Address</font></strong></td>
          <td><strong><font color="#000000">Brochure</font></strong></td>
          <td><strong><font color="#000000">Gym</font></strong></td>
		  <td><strong><font color="#000000">Temple</font></strong></td>
		  <td><strong><font color="#000000">Swimming Pool</font></strong></td>
		  <td><strong><font color="#000000">School</font></strong></td>
		  <td><strong><font color="#000000">Garden</font></strong></td>
		  <td><strong><font color="#000000">Lift</font></strong></td>
		  <td><strong><font color="#000000">Club House</font></strong></td>
		  <td><strong><font color="#000000">Security</font></strong></td>
		  <td><strong><font color="#000000">Hospital</font></strong></td>
		  <td><strong><font color="#000000">Parking</font></strong></td>
		  <td></td>
        </tr>
  <?PHP
    include("config.php");
      	
    $qr = "SELECT * FROM `tb_projectinfo` ";
    $result1 = mysql_query($qr) or die (mysql_error());

    while($row=mysql_fetch_array($result1))
    {
    ?>
        <tr> 
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['project_id']; ?></td>
          <td><?php echo $row['project_name']; ?></td>
          <td><?php echo $row['project_type']; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['video_link']; ?></td>
          <td><?php echo $row['address']; ?></td>
		  <td><?php echo $row['brochure']; ?></td>
		  <td><?php echo $row['gym']; ?></td>
		  <td><?php echo $row['temple']; ?></td>
		  <td><?php echo $row['swimming_pool']; ?></td>
		  <td><?php echo $row['school']; ?></td>
		  <td><?php echo $row['garden']; ?></td>
		  <td><?php echo $row['lift']; ?></td>
		  <td><?php echo $row['club_house']; ?></td>
		  <td><?php echo $row['security']; ?></td>
		  <td><?php echo $row['hospital']; ?></td>
		  <td><?php echo $row['parking']; ?></td>         
		  <td> <a href="Clientdel.php?id=<?php echo $row['id']; ?>" name="delete1"><strong>Delete</strong></a></td>
        </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </form>
  </body>
  </html>