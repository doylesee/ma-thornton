
		<?php
			$args_global_links = array(
					'name'      => 'contact-section',
					'post_type' => 'page'
			);
			$a_global_links = get_posts($args_global_links);
			$post_id_global_links = $a_global_links[0]->ID;
		?>
		<div class="footer">
			<div class="row">
				<div class="small-12 medium-3 medium-offset-2 columns footer__logo">
					<img src="<?php bloginfo('template_url'); ?>/img/footer__logo.png" alt="" />
				</div>
				<div class="small-12 medium-6 end columns footer__copyright">
					 <p><?php echo get_field('address',$post_id_global_links); ?></p>
					 <p>&copy; 2015 MA Thornton. All rights reserved.</p>
				</div>
			</div>
		</div><!--close .footer-->