
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>#SKECHERS SOCIAL FEEDS</h1>
<div class="row">
		<div class="col-md-4">
		<h3>SKECHERS </h3>
		<a href="<?php echo (!empty($block1_link))? $block1_link:"#"; ?>">
		<img alt="" src="<?php echo (!empty($block1))? $upload_url.$block1:$media_url."skechers/every-step.jpg"; ?>">
		</a>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS PERFORMANCE</h3>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS GORUN CLUB</h3>
		</div>
</div>
<div class="row">
		<div class="col-md-4">
		<h3>SKECHERS</h3>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS PERFORMANCE</h3>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS GORUN CLUB</h3>
		</div>
</div>
<div class="row">
		<div class="col-md-4">
		<h3>SKECHERS</h3>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS PERFORMANCE</h3>
		</div>
		<div class="col-md-4">
		<h3>SKECHERS GORUN CLUB</h3>
		</div>
</div>
		
			  






</div>



<div class="banner-block social-container slider-blog-container">
	<div class="more-title">
        <h2 class="blog-custom-title social-custom-title secondary-font"><span>#Skechers Social Feeds</span></h2>
    </div>
	<div class="row banner-row">
		<div class="col-md-6  facebook-feed">
			  
				<?php
				$accesstoken_url = 'https://www.instagram.com/p/BYDa_iIAVu3/?taken-by=sednainfo5';

				$data = json_decode(file_get_contents($accesstoken_url));
				//$return_data = explode("=", $data);
				//print_r();
				//$access_token= $return_data[0]->access_token;
				$access_token= $data->access_token;

				$fb_page_id 		= "490514147981638";
				$profile_photo_src 	= "https://graph.facebook.com/{$fb_page_id}/picture?type=square";
				$access_token 		= $access_token;
				$fields 			= "id,message,picture,full_picture,link,name,description,created_time,from,object_id";
				$limit 				= 6;

				$json_link = "https://graph.facebook.com/{$fb_page_id}/posts?access_token={$access_token}&fields={$fields}&limit={$limit}";
				$json = file_get_contents($json_link);
				$obj = json_decode($json, true);
				$fb_count = 1;
				// echo "<pre>"; print_r($obj); exit();
				
				foreach ($obj['data'] as $value) {
					if($fb_count <= 4):
						if(!empty($value['link'])):
							$image = (!empty($value['full_picture']))? $value['full_picture']:'https://graph.facebook.com/'.$value['object_id'].'/picture';

							?>
							<div class="col-md-6">
							<div class="feed-box ov-box">
								<div class="fb_pic">
									<a target="_blank" href="<?php echo $value['link']; ?>"><img src="<?php echo $image; ?>" /></a>
								</div>
								<div class="fb_content">
									<p>
										<a target="_blank" href="<?php echo $value['link']; ?>">
											Skechers
											<span class="meta_date"><?php echo date("j F, Y", strtotime($value['created_time'])); ?></span>
										</a>
									</p>
									
								</div>

								<div class="soc-icon">
						        	<a target="_blank" href="<?php echo $value['link']; ?>"><img src="<?php echo $this->getSkinUrl('images/facebook.jpg',array('_secure'=>true)) ?>" /></a>
						        </div>
								<i class="clearfix"></i>
								
								<div class="overbox">
									<a target="_blank" href="<?php echo $value['link']; ?>">
		                                <div class="tagline overtext"><?php echo substr($value['message'], 0, 250); ?>...</div>
		                            </a>
		                       	</div>
		                       	
						    </div>
						  	</div>
						<?php
							$fb_count++;
							
						endif;
					else:
						break;
					endif;

				}
				?>
		</div>

		<div class="col-md-6 twitter-feed">

		<?php
			 $twitterUrl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB).'tweet-php/TweetPHP.php';

			$twitterData = file_get_contents($twitterUrl);
			
			$twitterData = json_decode($twitterData);
		
			$count = 0;
			

			foreach ($twitterData as $value) {

				//print_r($value);

				if($count >= 5){
					break;
				}

				$text = substr($value->text, 0, 250).'...';
				$image= $value->entities->media[0]->media_url_https;
				$url  = 'https://twitter.com/SkechersIndia/status/'.$value->id.'/';
				$screen_name = $value->user->screen_name;

				if(!empty($image)):
				?>
				<div class="col-md-6">
				<div class="feed-box ov-box">
					<div class="fb_pic">
						<a target="_blank" href="<?php echo $url; ?>">
							<?php if(!empty($image)){ ?>
									<img src="<?php echo $image; ?>" />
							<?php }else{ ?>
									<p><?php echo $text; ?></p>
							<?php } ?>
						</a>
					</div>
					<div class="fb_content">
						<p>
							<a target="_blank" href="<?php echo $url; ?>">
								@<?php echo $screen_name; ?>
								<span class="meta_date"><?php echo date("j F, Y", strtotime($value->created_at)); ?></span>
							</a>
						</p>
					</div>

					<div class="soc-icon">
			        	<a target="_blank" href="<?php echo $url; ?>">
			        		<img src="<?php echo $this->getSkinUrl('images/twitter.jpg',array('_secure'=>true)) ?>" />
			        	</a>
			        </div>
					<i class="clearfix"></i>

					<div class="overbox">
						<a target="_blank" href="<?php echo $url; ?>">
                            <div class="tagline overtext"><?php echo $text; ?></div>
                        </a>
                    </div>
		        </div>
			  	</div>
				<?php
					$count++;
				endif;
				
				
			}
	

		?>

		
		
		sedna<a href="<blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:34.375% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYK43U_gLeo/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by sedna (@sednainfo5)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-08-24T08:39:00+00:00">Aug 24, 2017 at 1:39am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>"></script>
		</div>
		
	</div>
</div>




