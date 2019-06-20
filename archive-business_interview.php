<?php get_header(); ?>

<div id="content">
 <div class="wg-section wg-intro wg-shop-intro">
  <div class="row">
   <div class="large-12 columns text-center">
	<h1 class="section-title">Business Interviews</h1>
   </div>
  </div>
  <div class="row">
   <div class="large-12 columns text-center">
	<h2 class="section-copy">Because You Deserve To Know</h2>
   </div>
  </div>
 </div>
 <div id="inner-content" class="row">
  <main id="main" class="large-12 columns" role="main">

   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <!-- To see additional archive styles, visit the /parts directory -->
	
	<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
				    
	<?php endwhile; ?>	

		<?php joints_page_navi(); ?>
					
	<?php else : ?>
											
		<?php get_template_part( 'parts/content', 'missing' ); ?>
						
	<?php endif; ?>

  </main> <!-- end #main -->
 </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php wp_reset_postdata(); ?>

<?php get_footer('alt'); ?>