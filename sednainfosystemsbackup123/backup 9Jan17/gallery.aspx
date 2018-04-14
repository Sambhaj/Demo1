
<%@ Page Language="C#" AutoEventWireup="true"  CodeFile="gallery.aspx.cs" Inherits="gallery" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1" runat="server">
    <title>&sect;&Xi; Welcome to Sedna Infosystems</title>
    <link rel="shortcut icon" href="images/sedna.png" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="gal.css" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
            <table width="55px" height="160px" class="social_r" border="0" cellpadding="0" cellspacing="0">
            <tr><td height="7px" align="center"></td></tr>
            <tr><td align="center"><a href="https://www.facebook.com/pages/SednaInfosystems/203973059653300"><img src="images/f.png" title="Facebook" alt="f" /></a></td></tr>
            <tr><td align="center"><a href="https://plus.google.com/106955248615388392783/about"><img src="images/google.png" title="Google+"  alt="g"/></a></td></tr>
            <tr><td align="center"><a href="https://twitter.com/sednainfo"><img src="images/twitt.png" title="Twitter" alt="t"/></a></td></tr>
            <tr><td align="center"><a href="http://sednainfo.blogspot.in/"><img src="images/blog.png" title="Blog" alt="b" /></a></td></tr>
           <%-- <tr><td align="center"><a href=""><img src="images/linkd.png" title="Linkdin" alt="l"/></a></td></tr>
            <tr><td align="center"><a href=""><img src="images/msg.png" title="Message" alt="m"/></a></td></tr>--%>
            <tr><td height="7px" align="center"></td></tr>
            </table>
    <form id="form1" runat="server">
    <div>
        <table align="center" class="main" border="0" cellpadding="0" cellspacing="0">
        <tr>
        <td class="header" colspan="3">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr><td><img src="images/logo.png" /></td><td align="center" valign="top"></td></tr>
            </table>
        </td>
        </tr>
        <tr><td class="menu_h" colspan="3">
        <div class="container">
        <ul id="nav">
                <li><a href="Default.aspx">Home</a></li>
                <li><a class="hsubs" href="about.aspx">About Us</a>
                   
                </li>
                <li><a class="hsubs" href="team.aspx">Team</a>
                    
                </li>
                <li><a class="hsubs" href="#">Products</a>
                    <ul class="subs">
                        <li><a href="jalseva.aspx">Watercan Distribution Systems</a></li>
                        <li><a href="ims.aspx">Institute Management System</a></li>
                        <li><a href="onlinetest.aspx">Online Objective Test Series</a></li>
                        <li><a href="matrimony.aspx">Matrimony Match Making</a></li>
                        <li><a href="job_card.aspx">Job Card Pro</a></li>
                        <li><a href="hospital.aspx">Hospital ERP</a></li>
                        <li><a href="mlm.aspx">MLM</a></li>
                        <li><a href="hotel.aspx">Hotel Pro</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.aspx">Portfolio</a></li>
                <li><a href="clientele.aspx">Clientele</a></li>
                <li><a class="hsubs" href="#">Weblinks</a>
                    <ul class="subs">
                        <li><a href="http://sedna.biz/">sedna.biz</a></li>
                        <li><a href="http://sms.sedna.biz/">sms.sedna.biz</a></li>
                        <li><a href="http://projects.sedna.biz/">projects.sedna.biz</a></li>
                        <li><a href="http://jalseva.in/">jalseva.in</a></li>
                    </ul>
                </li>
                <li><a href="contact.aspx">Contact Us</a></li>
                <li><a href="sitemap.aspx">Sitemap</a></li>
                <div id="lavalamp"></div>
            </ul>
           </div>
        
        </td></tr>
        <tr><td height="3px" colspan="3"></td></tr>
        
        <tr bgcolor="white">
            <td class="col">
            <div class="middle">

<ul id="slideshow">
	  <li>
			<h3>Photo Gallery</h3>
			<span>photos/1.png</span>
		  <p></p>
			<a href="#"><img src="thumbnails/1.png" alt="" /></a>
		</li>
		<li>
			<h3>Photo Gallery</h3>
			<span>photos/2.jpg</span>
			<p></p>
			<img src="thumbnails/2.jpg" alt="" />
		</li>
		<li>
			<h3>Photo Gallery</h3>
			<span>photos/3.jpg</span>
			<p></p>
			<a href="#"><img src="thumbnails/3.jpg" alt="" /></a>
		</li>
		<li>
			<h3>Photo Gallery</h3>
			<span>photos/4.jpg</span>
			<p></p>
			<a href="#"><img src="thumbnails/4.jpg" alt="" /></a>
		</li>
	</ul>
	<div id="wrapper">
		<div id="fullsize">
			<div id="imgprev" class="imgnav" title="Previous Image"></div>
			<div id="imglink"></div>
			<div id="imgnext" class="imgnav" title="Next Image"></div>
			<div id="image"></div>
			<div id="information">
				<h3></h3>
				<p></p>
			</div>
		</div>
		<div id="thumbnails">
			<div id="slideleft" title="Slide Left"></div>
			<div id="slidearea">
				<div id="slider"></div>
			</div>
			<div id="slideright" title="Slide Right"></div>
		</div>
	</div>
	<br /><br /><br /><br />
<script type="text/javascript" src="compressed.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>

</div>
            </td>     
        </tr>
        <tr><td class="blank"></td></tr>
        <tr><td class="footer" colspan="3">
        
       <table align="center" width="960px">
        <tr>
        <td width="240px">
        <h4>SEDNA</h4>
        <ul>
        <li><a href="http://sednainfo.blogspot.in/">Blog</a></li>
        <li><a href="http://youtube.com/asksedna">Youtube</a></li>        
        <li><a href="gallery.aspx">Photo Gallery</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Website</h4>
        <ul>
        <li><a href="http://sedna.biz/" target="_blank">www.sedna.biz</a></li>
        <li><a href="http://sms.sedna.biz/">sms.sedna.biz</a></li>
        <li><a href="http://projects.sedna.biz/">projects.sedna.biz</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Software</h4>
        <ul>
        <li><a href="ims.aspx">Institute Management System</a></li>
        <li><a href="hotel.aspx">Hotel Management Software</a></li>
        <li><a href="hospital.aspx">Hospital Management Software</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Web Development</h4>
        <ul>
        <li><a href="design.aspx">Design & Usability</a></li>
        <li><a href="web_development.aspx">Website Development</a></li>
        <li><a href="web_app.aspx">Web Application Development</a></li>
        </ul>
        </td>
        </tr>
        </table>
        <div class="copy">Copyright &copy; 2013 All Rights Reserved <a style="color:#F9FCAE; font-weight:bold" href="http://www.sednainfosystems.com">SEDNA</a> | 
        <br /><div class="dis_poli"><a href="disclaimer.aspx">Disclaimer</a> || <a href="privacy.aspx">Privacy policy</a></div>
        </div>
        </td></tr>
        </table>
    </div>
    </form>
</body>
</html>

