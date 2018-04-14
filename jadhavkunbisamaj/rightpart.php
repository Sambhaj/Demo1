<div class="container">
	<h1>Success Stories</h1>
    <div class="invite">
	<marquee height="110px"  onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">
  <img src="images/wed3.jpg"  width="179" /><br /><br /><img src="images/Lagn_Bele.jpg"  width="179" /><br /><br />
	<img src="images/khapre-sonare wed2.jpg"  width="179" /><br /><br /><img src="images/bele-ghulaxe wed1.jpg"  width="179" />
    
  </marquee>
	</div>
	</div>

    <div class="space"></div>
	<div class="container">
    <h1>Abhinandan</h1>
    <div class="invite">
	 <marquee height="90px"  onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">
	<?php	mysql_set_charset('utf8');
	$bdate= date("m/d/Y") ;	
	$qr="SELECT headline as head,news_id as ns FROM `tbbirth_death` order by `news_id` desc limit 5 ";
$rs=mysql_Query($qr,$dsn);
	while($dt = mysql_fetch_array($rs)) {
	$fnm=$dt['head'];
	$nsid=$dt['ns'];
	//echo "<script> alert('$nsid')</script  ;
	echo "<a href='news_detail.php?nid=$nsid&info=b'>$fnm</a><br /><br />";		 
	}	
	echo "<hr/>";	
	?>
<br />


	<?php	mysql_set_charset('utf8');
	$bdate= date("m/d/Y") ;	
	$qr="SELECT headline as head,news_id as ns FROM `tbtoppers` order by `news_id` desc limit 5 ";
$rs=mysql_Query($qr,$dsn);
	while($dt = mysql_fetch_array($rs)) {
	$fnm=$dt['head'];
	$nsid=$dt['ns'];
	echo "<a href='news_detail.php?nid=$nsid&info=c'>$fnm</a><br /><br />";		 
	}	
	echo "<hr/>";	
	?>
	
	<!--<img src="images/r1.jpg" />&nbsp;<img src="images/r2.jpg" />-->
	</marquee>
	</div>
    </div>
    <div class="space"></div>
		<div class="container">
    <h1>Din Vishesh</h1>
    <div style="padding:10px 10px 10px 10px">
	<marquee height="77px"  onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="2">

	<?php
mysql_set_charset('utf8');
$qr="SELECT suvichar as id FROM `suvichar` ";
$rs=mysql_Query($qr,$dsn);
$row = mysql_fetch_array($rs);
$news= $row['id'];
echo "$news<br />";		
?>
	</marquee>
	</div>
    </div>
    <div class="space" style="text-align:center;"><br>आपणास मदत हवी आहे काय? <br>कृपया येथे क्लिक करा.
  <input type="button" class="signin" style="width:85%;"name="" value="समाज–हेल्प–लाईन" onClick="parent.location='helpline.php'"/>
</div>