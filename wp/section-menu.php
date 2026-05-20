
			<div id="menu-js" class="menu <?php if(is_front_page()) { echo 'effects effects--slide-down'; } else { echo 'slideDown'; } ?>">
				<div class="row">
					<div class="small-12 medium-3 columns menu__logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/menu__logo.png" alt="M.A. Thornton" /></a>
					</div>
					<div id="menu__list-js" class="small-12 medium-6 columns menu__list">
						<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container' => false ) ); ?>
					</div>
					<div class="small-12 medium-3 columns menu__contact">
						<?php
							$args_global_links = array(
									'name'      => 'contact-section',
									'post_type' => 'page'
							);
							$a_global_links = get_posts($args_global_links);
							$post_id_global_links = $a_global_links[0]->ID;
						?>
						<?php echo get_field('contact_number',$post_id_global_links); ?>
					</div>
				</div>
			</div>