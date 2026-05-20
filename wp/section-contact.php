
		<?php
			$args_global_links = array(
					'name'      => 'contact-section',
					'post_type' => 'page'
			);
			$a_global_links = get_posts($args_global_links);
			$post_id_global_links = $a_global_links[0]->ID;
		?>
		<div id="contact-me" class="section contact">
			<div class="section__overlay"></div>
			<div class="row section__copy effects effects--fade-slow">
				<div class="small-12 medium-10 medium-offset-1 end column">
					<h2><?php echo get_field('heading',$post_id_global_links); ?></h2>
					<p><?php echo get_field('short_description',$post_id_global_links); ?></p>
					<a href="mailto:<?php echo get_field('email',$post_id_global_links); ?>" class="section__button hvr-sweep-to-top">Email Me</a>
					<p class="contact__phone">or CALL ME <span><?php echo get_field('contact_number',$post_id_global_links); ?></span></p>
					<!--<p class="contact__address"><?php //echo get_field('address',$post_id_global_links); ?></p>-->
					<div class="contact__social-media">
						<?php
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
				</div>
			</div>
			<?php get_template_part('section','footer'); ?>
		</div><!--close .contact-->