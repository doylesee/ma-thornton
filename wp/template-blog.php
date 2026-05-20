<?php 
	/* Template Name: Blog page */
	get_header();
?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div id="blog" class="page">
		
		<div id="menu-anchor-js"></div>
		<?php get_template_part('section','menu'); ?>
			
		<div class="blog__wrapper">
			<div class="row">
				<div class="small-12 column blog__heading">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="small-12 medium-9 columns">
					<div class="blog__list">
						<?php
							$i_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$a_args	=	array(
								'post_type'			=> 'post',
								'orderby'			=> 'date',
								'order'				=> 'DESC',
								'posts_per_page'	=> 3,
								'paged'				=> $i_paged
							);
							$o_query = new WP_Query( $a_args );
								
							while ( $o_query->have_posts() ) {
								$o_query->the_post();
						?>
						<div class="blog__item">
							<h2><?php echo get_the_title()?></h2>
							<div class="blog__item-date"><?php echo get_the_time('F d, Y'); ?></div>
							<div class="blog__item-image">
								<?php
									$featured_image = get_field('featured_image',get_the_ID());
									if ($featured_image) {
								?>
								<img src="<?php echo $featured_image['sizes']['large']; ?>" alt="<?php echo $featured_image['title']; ?>" />
								<?php } ?>
							</div>
							<p><?php echo wp_trim_words(get_the_content(),60,''); ?></p>
							<a href="<?php echo get_permalink(); ?>" class="blog__item-read-more">Read More</a>
						</div><!--close .blog__item-->
						<?php } ?>
						<div class="blog__nav-buttons">
							<?php
								$i_temp = 99999;
								$a_nav = array(
									'base'   		=> str_replace($i_temp, '%#%', esc_url(get_pagenum_link($i_temp))),
									'format'		=> '',
									'current' 		=> max( 1, $i_paged ),
									'total' 		=> $o_query->max_num_pages,
									'prev_text' 	=> 'Previous Page',
									'next_text' 	=> 'Next Page',
									'type'			=> 'plain',
									'end_size'		=> 1,
									'mid_size'		=> 1
								);
								echo paginate_links( $a_nav );
								wp_reset_postdata();
							?>						
						</div>
					</div><!--close .blog__list-->
				</div>
				<div class="small-12 medium-3 columns">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div><!--close .blog__list-wrapper-->
		
		<?php get_template_part('section','footer'); ?>
		
	<?php endwhile; else: ?>
	<?php endif; ?>
	
<?php get_footer(); ?>