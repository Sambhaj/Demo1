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