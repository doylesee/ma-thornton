<?php 
	/* Template Name: Home Page (Full Content) */
	get_header();
?>

		<ul class="page-nav">
			<li><a href="#section-1"></a></li>
			<li><a href="#the-coach"></a></li>
			<li><a href="#section-3"></a></li>
			<li><a href="#contact-me"></a></li>
		</ul>
		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div id="home" class="page">
	
		<div id="section-1" class="section section-1 fadeIn">
			<div class="hide"><img src="<?php bloginfo('template_url'); ?>/img/home-section-1-bg.jpg" alt="MA Thornton" /></div>
			<div class="section__overlay"></div>
			<div class="row section__copy fadeInSlow">
				<div class="small-12 medium-10 medium-offset-1 end column">
					<img src="<?php bloginfo('template_url'); ?>/img/home-section-1__logo.png" alt="" class="section-1__logo" />
					<h2><?php echo get_field('sub_heading_section_1'); ?></h2>
					<a href="<?php echo get_field('schedule_a_complimentary_consultation_link_section_1'); ?>" class="section__button anchor-link hvr-sweep-to-top">Schedule a Complimentary Consultation</a>
				</div>
			</div>
		</div><!--close .section-1-->
		
		<div id="menu-anchor-js"></div>	
		<div id="the-coach" class="section section-2">
			<?php get_template_part('section','menu'); ?>
			<div class="section__overlay"></div>
			<div class="section-2__image fadeInSlow">
				<?php $featured_image_section_2 = get_field('featured_image_section_2'); ?>
				<img src="<?php echo $featured_image_section_2['sizes']['home_section_2_image']; ?>" alt="<?php echo $featured_image_section_2['title']; ?>" />
			</div>
			<div class="row section__copy">
				<div class="small-12 medium-6 medium-offset-6 column slideLeft">
					<h2><?php the_title(); ?></h2>
					<?php echo get_field('content_section_2'); ?>
					<a href="<?php echo get_field('hire_me_link_section_2'); ?>" class="section__button hvr-sweep-to-top">Hire Me</a>
				</div>
			</div>
		</div><!--close .section-2-->
		
		<div id="section-3" class="section section-3">
			<div class="row section__copy">
				<div class="small-12 column">
					<h2 class="effects effects--fade-slow"><?php echo get_field('heading_section_3'); ?></h2>
					<div class="row">
						<div class="small-12 medium-4 columns section-3__item effects effects--fade-slow">
							<?php $item_1_icon_section_3 = get_field('item_1_icon_section_3'); ?>
							<img src="<?php echo $item_1_icon_section_3['sizes']['home_section_3_item_image']; ?>" alt="<?php echo $item_1_icon_section_3['title']; ?>" class="hvr-pulse-grow" />
							<?php echo get_field('item_1_content_section_3'); ?>
						</div>
						<div class="small-12 medium-4 columns section-3__item effects effects--fade-slow">
							<?php $item_2_icon_section_3 = get_field('item_2_icon_section_3'); ?>
							<img src="<?php echo $item_2_icon_section_3['sizes']['home_section_3_item_image']; ?>" alt="<?php echo $item_2_icon_section_3['title']; ?>" class="hvr-pulse-grow" />
							<?php echo get_field('item_2_content_section_3'); ?>
						</div>
						<div class="small-12 medium-4 columns section-3__item effects effects--fade-slow">
							<?php $item_3_icon_section_3 = get_field('item_3_icon_section_3'); ?>
							<img src="<?php echo $item_3_icon_section_3['sizes']['home_section_3_item_image']; ?>" alt="<?php echo $item_3_icon_section_3['title']; ?>" class="hvr-pulse-grow" />
							<?php echo get_field('item_3_content_section_3'); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--close .section-3-->
		
		<?php get_template_part('section','contact'); ?>
	
	</div><!--close #home-->
	<?php endwhile; else: ?>
	<?php endif; ?>
	
<?php get_footer(); ?>