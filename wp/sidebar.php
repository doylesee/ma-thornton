
					<div class="blog__sidebar">
						<div class="blog__sidebar-item">
							<h2>Connect With Us</h2>
							<div class="contact__social-media">
								<?php
									$args_global_links = array(
											'name'      => 'contact-section',
											'post_type' => 'page'
									);
									$a_global_links = get_posts($args_global_links);
									$post_id_global_links = $a_global_links[0]->ID;
									
									$facebook_link = get_field('facebook_link',$post_id_global_links);
									$twitter_link = get_field('twitter_link',$post_id_global_links);
									$google_plus_link = get_field('google_plus_link',$post_id_global_links);
									$linkedin_link = get_field('linkedin_link',$post_id_global_links);
								?>
								<?php if($facebook_link) { ?>
									<a href="<?php echo $facebook_link; ?>" target="_blank" class="contact__social-media--facebook">Facebook</a>
								<?php } ?>
								<?php if($twitter_link) { ?>
									<a href="<?php echo $twitter_link; ?>" target="_blank" class="contact__social-media--twitter">Twitter</a>
								<?php } ?>
								<?php if($google_plus_link) { ?>
									<a href="<?php echo $google_plus_link; ?>" target="_blank" class="contact__social-media--google-plus">Google+</a>
								<?php } ?>
								<?php if($linkedin_link) { ?>
									<a href="<?php echo $linkedin_link; ?>" target="_blank" class="contact__social-media--linkedin">LinkedIn</a>
								<?php } ?>
							</div>
						</div><!--close .blog__sidebar-item-->
						<div class="blog__sidebar-item">
							<h2>Categories</h2>
							<?php
								$args = array(
									'title_li' => ''
								);
							?>
							<ul>
								<?php wp_list_categories( $args ); ?> 
							</ul>
						</div><!--close .blog__sidebar-item-->
						<div class="blog__sidebar-item">
							<h2>Monthly Archives</h2>
							<ul>
								<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
							</ul>
						</div><!--close .blog__sidebar-item-->
					</div><!--close .blog__sidebar-->