<div class="container">
    <h1>Wedding Invitation</h1>
	<div class="invite">
	<!--<marquee height="100px" onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="2">
	
	<img src='Images/magnify.png' width='15' height='15' class='corner' style='display: none' />
	<center><a href='images/invite01_l.png'><!--<strong>Invitation</strong><br /> 
	 <img name='images/invite01.jpg' alt=INVITATION src='images/invite01.jpg' border='0' style='border-color: 777777;' id = 'tpl_19'/></a>
		 <br /> <script  type="text/javascript">
       image = new Image;
	   image.src = 'images/invite01_l.png';	   
		new TemplatePreview('tpl_19', {
        title:  '',
        src:    image.src,
        width:  image.width,
        height:  image.height   });

    </script>-->
	<!--</marquee> -->
    <marquee height="100px" onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="2">
      <a href="http://www.jadhavkunbisamaj.com/images/img056.jpg"><img src ="images/img056.jpg" width="200" height="200"></img></a>
      &nbsp;&nbsp;
<!--        <a href="http://www.jadhavkunbisamaj.com/images/img057.jpg"><img src ="images/img057.jpg" width="200" height="200"></img></a>
      &nbsp;&nbsp;
        <a href="http://www.jadhavkunbisamaj.com/images/img058.jpg"><img src ="images/img058.jpg" width="200" height="200"></img></a>
      &nbsp;&nbsp;
        <a href="http://www.jadhavkunbisamaj.com/images/img059.jpg"><img src ="images/img059.jpg" width="200" height="200"></img></a>-->        
      </marquee>

    <ilayer id="slidensmain" width=&{"slidewidth"}; height=&{"slideheight"}; bgColor=&{"slidebgcolor"}; visibility="hide">
      <layer id="slidenssub" width=&{"slidewidth"}; left="0" top="0"></layer>
    </ilayer>
	</div>
    <!--<ul>
    	<li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul> -->
    <!--<div class="button"><input type="button" value="Read More" class="learnmore" /></div> -->
    </div>
	<div class="space"></div>
	<div class="container">
    <h1>Sansmaran</h1>
	<div class="invite">
	<marquee height="110px" onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">


      <?php	mysql_set_charset('utf8');
	$bdate= date("m/d/Y") ;	
	$qr="SELECT smtext as id FROM `tbsansmaran`ORDER BY smid DESC; ";
$rs=mysql_Query($qr,$dsn);
	while($dt = mysql_fetch_array($rs)) {
	$fnm=$dt['id'];	 
	echo "$fnm<br /><br />";	 echo "<hr/>";	
	}	
	
	?>
	
	
	
	
	
	
	
 
	</marquee>
	</div>
	</div>
	<div class="space"></div>
	<div class="container">
    <h1>Search for Gotra</h1>
	<div ><br />
	<form action="gotra.php" method="post">
	&nbsp;&nbsp;Surname: <input class="txtbx" type="text" name="txtsurname" /><br />
	<div style="margin-left:58px"><input type="submit" class="signin" name="Search" value="Search" /></div></form>
	<br />
	</div>
	</div>
<div class="space" style="text-align:center;">
<br>
<img src="1.png" style="width:35px;height:30px;">
<a href="education_fund.php">शैक्षणिक कोषात आपला सहभाग नोंद्विण्यासाठी कृपया येथे क्लिक करा.</a>
<a href="education.doc"><input type="button" class="signin" style="width:85%;margin-top:10px;"name="" value="शैक्षणिक कोष"/></a>
</div>
	