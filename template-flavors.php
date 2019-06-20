<?php
/* Template Name: Flavor Cards */
?>

<?php get_header(); ?>

<div id="content">

	<div id="wg-inner-content">
	
	<div class="wg-section wg-intro">
	 <div class="row">
	  <div class="large-12 columns text-center">
	    <h1 class="section-title"><span>Why</span>Gelato?</h1>
	   </div>
      </div>
	  <div class="row">
	  <div class="large-12 columns text-center">
	    <h2 class="section-copy">Because You Deserve to Know What Your Flavor Says About You</h2>
	  </div>
	 </div>
	</div>

	<?php if( have_rows('flavor') ): ?>
		
	<div class="row">
	 <div class="flavor-card-container">
	  <?php while( have_rows('flavor') ): the_row(); ?>

		<div class="large-3 medium-6 small-12 columns end">

		 <div class="flip-card card" style="background: url(<?php the_sub_field('image'); ?>); background-size: cover;" ontouchstart="this.classList.toggle('hover');">
			<h3 id="flavor-title"><?php the_sub_field('name'); ?></h3>
		  <div class="flip-card-inner">
		   <div class="flip-card-inner-front" >
		   </div>
		   <div class="flip-card-inner-back">
			<h3 class="flip-card-inner-back-title"><?php the_sub_field('name'); ?></h3>
			<p class="flip-card-inner-back-text"><?php the_sub_field('answer'); ?></p>

			<a class="twitter-share-button" data-url="http://bit.ly/2w8JMcN" data-text="I Found Out My Flavor, What's Your Flavor?" data-hashtags="MyGelatoFlavor,WhatsYourFlavor" >Tweet</a>

			<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwhygelato.com%2Fflavors%2Fyour-flavor%2F&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId" width="59" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		   </div>
		  </div>
		 </div>

		</div>
			
		<?php endwhile; ?>
	 </div>
	</div>
	
<?php endif; ?>

</div> <!-- end #wg-inner-content -->

</div> <!-- end #content -->

<?php get_footer('alt'); ?>