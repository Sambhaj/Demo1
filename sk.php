<div class="banner-block social-container slider-blog-container">
	<div class="more-title">
        <h2 class="blog-custom-title social-custom-title secondary-font"><span>#Skechers Social Feeds</span></h2>
    </div>
	<div class="row banner-row">
		<div class="col-md-6  facebook-feed">
			  
				<?php
				$accesstoken_url = 'https://graph.facebook.com/oauth/access_token?client_id=1296002697095282&client_secret=d4e38d7a41dd0d54be1f896d55859936&grant_type=client_credentials';

				$data = json_decode(file_get_contents($accesstoken_url));
				//$return_data = explode("=", $data);
				//print_r();
				//$access_token= $return_data[0]->access_token;
				$access_token= $data->access_token;

				$fb_page_id 		= "202514763103306";
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

		</div>
		
	</div>
</div>