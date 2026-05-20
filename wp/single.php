<?php get_header(); ?>
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div id="blog" class="page">
		
		<div id="menu-anchor-js"></div>
		<?php get_template_part('section','menu'); ?>
			
		<div class="blog__wrapper">
			<div class="row">
				<div class="small-12 column blog__heading">
					<a href="<?php get_home_url(); ?>/blog">Main</a><?php previous_post_link('%link','Next Post'); ?>
				</div>
				<div class="small-12 medium-9 columns">
					<div class="blog__list">
						<div class="blog__item blog__item--details">
							<h1><?php the_title(); ?></h1>
							<div class="blog__item-date"><?php the_time('F d, Y'); ?></div>
							<div class="blog__item-image">
								<?php
									$featured_image = get_field('featured_image');
									if ($featured_image) {
								?>
								<img src="<?php echo $featured_image['sizes']['large']; ?>" alt="<?php echo $featured_image['title']; ?>" />
								<?php } ?>
							</div>
							<?php the_content(); ?>
						</div><!--close .blog__item-->
						
						<?php comments_template(); ?>
										
					</div><!--close .blog__list-->
				</div>
				<div class="small-12 medium-3 columns">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div><!--close .blog__list-wrapper-->
		
		<?php get_template_part('section','footer'); ?>
		
	</div><!--close #blog-->
	
	<?php endwhile; else: ?>
	<?php endif; ?>

<?php get_footer(); ?>