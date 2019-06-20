<?php get_header(); ?>
			
<div id="content">
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- dev testing -->
	<div class="row expanded collapse">
		<div class="column">
			
           <div class="large-article-header overlay" <?php 
           if ( has_post_thumbnail() ) {
			 	$custom_image = get_the_post_thumbnail_url(get_the_ID(),'full');
    			echo 'style="background-image: url('.esc_url($custom_image).');"';
 				}else{
    			echo "style='background-image: url(\"https://whygelato.com/main/wp-content/themes/whygelato-master/assets/images/WG_Homepage_Find.jpg\");'";
 				}
				?>
				>
				<div class="large-article-header-content">
					<div class="center-container">
						<div class="article-title">
							<h1><?php the_title(); ?></h1>
							<h2><?php the_field('city'); ?>, <?php the_field('state'); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end dev testing -->

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">
		
		   
		
		    	<?php get_template_part( 'parts/loop', 'single-gelateria' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar('gelateria'); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer('alt'); ?>