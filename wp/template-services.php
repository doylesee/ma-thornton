<?php 
	/* Template Name: Services page */
	get_header();
?>
		<ul class="page-nav">
			<li><a href="#section-1"></a></li>
			<li><a href="#section-2"></a></li>
			<li><a href="#section-3"></a></li>
			<li><a href="#contact-me"></a></li>
		</ul>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div id="services" class="page">
			
		<div id="menu-anchor-js"></div>	
		<div id="section-1" class="section section-1 fadeInSlow">
			<?php get_template_part('section','menu'); ?>
			<div class="row section__copy">
				<h1><?php the_title(); ?></h1>
				<div class="small-12 medium-8 end column section-1__copy slideRight">
					<?php echo get_field('content_section_1'); ?>
				</div>
			</div>
		</div><!--close .section-1-->
		
		<div id="section-2" class="section section-2">
			<div class="section-2__image effects effects--fade">
				<?php $featured_image_section_2 = get_field('featured_image_section_2'); ?>
				<img src="<?php echo $featured_image_section_2['sizes']['services_section_2_image']; ?>" alt="<?php echo $featured_image_section_2['title']; ?>" />
			</div>
			<div class="row">
				<div class="small-12 medium-6 medium-offset-6 column section__copy effects effects--slide-left">
					<?php echo get_field('content_section_2'); ?>
				</div>
			</div>
		</div><!--close .section-2-->
		
		<div id="section-3" class="section section-3">
			<div class="section-3__image effects effects--fade">
				<?php $featured_image_section_3 = get_field('featured_image_section_3'); ?>
				<img src="<?php echo $featured_image_section_3['sizes']['services_section_3_image']; ?>" alt="<?php echo $featured_image_section_3['title']; ?>" />
			</div>
			<div class="row">
				<div class="small-12 medium-6 column section__copy effects effects--slide-right">
					<?php echo get_field('content_section_3'); ?>
				</div>
			</div>
		</div><!--close .section-3-->
		
		<?php get_template_part('section','contact'); ?>
	
	</div><!--close #services-->
	<?php endwhile; else: ?>
	<?php endif; ?>
	
<?php get_footer(); ?>