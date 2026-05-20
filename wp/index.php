<?php get_header(); ?>
	
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
						<div class="blog__item">
							<?php echo the_content(); ?>
						</div><!--close .blog__item-->
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