<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
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
        <title>Data Entry View | THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</title>
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
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="http://www.beltshoses.in/wp-content/themes/evolve/ie.css">
        <![endif]-->

    </head><!--END head-->

    <!--BEGIN body-->
    <body>
                 
  
              <!--BEGIN .entry-content .article-->
                <div class="entry-content" style="margin-top:0px;">
                   
<!-------------Your contents body---------------------->	
	<!---Body of menus contents--->
	<table>
	<tr>
	<td colspan="21" ><center><button onclick="parent.location='Members_Sheet.php'">Back</button> <button onclick="window.print();">Print</button> <button onclick="parent.location='csv.php'">Download</button></center></td>
	</tr >
	<tr style="background-color:#D9D9D9;">
	<td style="padding:10px;text-align:center;font-weight: bold;">Mailing List ID</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Membership No</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Organization Name</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Address1</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Address2</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Address3</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">City</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Postal Code</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Home Phone</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Work Phone</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Mobile Phone</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Fax Number</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Alternative Phone</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Email Address</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Emrgcy Contact Name</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Emrgcy Contact Phone</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Website</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Major Deal In</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Date Updated</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Membership Status</td>
	<td style="padding:10px;text-align:center;font-weight: bold;">Date Joined</td>
	</tr>
	<?php
		$query=("SELECT * FROM data_entry");
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
	?>
	<tr style="background-color:#FAFAFA;">
	<td style="text-align:center;padding:10px;"><?php echo $row['0'];?></td>
	<td style="text-align:center;padding:10px;"><?php echo $row['1'];?></td>
	<td style="text-align:center;padding:10px;"><?php echo $row['2'];?></td>
	<td style="padding:10px;"><?php echo $row['3'];?></td>
	<td style="padding:10px;"><?php echo $row['4'];?></td>
	<td style="padding:10px;"><?php echo $row['5'];?></td>
	<td style="padding:10px;"><?php echo $row['6'];?></td>
	<td style="padding:10px;"><?php echo $row['7'];?></td>
	<td style="padding:10px;"><?php echo $row['8'];?></td>
	<td style="padding:10px;"><?php echo $row['9'];?></td>
	<td style="padding:10px;"><?php echo $row['10'];?></td>
	<td style="padding:10px;"><?php echo $row['11'];?></td>
	<td style="padding:10px;"><?php echo $row['12'];?></td>
	<td style="padding:10px;"><?php echo $row['13'];?></td>
	<td style="padding:10px;"><?php echo $row['14'];?></td>
	<td style="padding:10px;"><?php echo $row['15'];?></td>
	<td style="padding:10px;"><?php echo $row['16'];?></td>
	<td style="padding:10px;"><?php echo $row['17'];?></td>
	<td style="padding:10px;"><?php echo $row['18'];?></td>
	<td style="padding:10px;"><?php echo $row['19'];?></td>
	<td style="padding:10px;"><?php echo $row['20'];?></td>
	</tr>
	<?php
		}
	?>
	</table>
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