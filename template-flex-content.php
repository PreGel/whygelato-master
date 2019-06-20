<?php
/* Template Name: Flexible Content */
?>

<?php get_header(); ?>

<div id="content">


	<?php

// check if the flexible content field has rows of data
	if( have_rows('standard_section') ): ?>
	<div id="wg-inner-content">
		<?php 

     // loop through the rows of data
		while ( have_rows('standard_section') ) : the_row();

		if( get_row_layout() == 'intro_row' ):

        	// vars
			$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

		?>

		<!-- Intro Row -->
		<div class="wg-section wg-intro">
			<div class="row">
				<div class="large-12 columns text-center">
					<h1 class="section-title"><?php echo $title; ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns text-center">
					<h2 class="section-copy"><?php echo $text; ?></h2>
				</div>
			</div>
		</div>

		<?php elseif( get_row_layout() == 'standard_row' ):

        	// vars
		$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

		?>

		<!-- Standard Row -->

		<div class="wg-section">
			<div class="row">
				<div class="large-12 columns text-center">
					<h2 class="section-title"><?php echo $title; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<div class="section-copy section-lone-copy"><?php echo $text; ?></div>
				</div>
			</div>
		</div>

		<?php elseif( get_row_layout() == 'split_row' ):

        	// vars
		$title_left = get_sub_field('section_title_left');
		$text_left = get_sub_field('section_text_left');
		$title_right = get_sub_field('section_title_right');
		$text_right = get_sub_field('section_text_right');

		?>

		<!-- Standard Row -->
		<div class="wg-section">
			<div class="row">
				<div class="large-6 columns text-center">
					<h2 class="section-title"><?php echo $title_left; ?></h2>
					<div class="section-copy"><?php echo $text_left; ?></div>
				</div>
				<div class="large-6 columns text-center">
					<h2 class="section-title"><?php echo $title_right; ?></h2>
					<div class="section-copy"><?php echo $text_right; ?></div>
				</div>
			</div>
		</div>

		<?php  elseif( get_row_layout() == 'left_img_row' ): 

      	// vars
		$image = get_sub_field('left_image');
		$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

        ?>

        	<!-- Left Image Row -->
			<div class="wg-full-section">
			 <div class="row">
			  <div class="small-12 large-5 columns text-center ready">
			   <div class="section-img">
				 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			   </div>
			  </div>
			  <div class="small-12 large-7 columns">
			  	<div class="section-text">
			  	 <h3><?php echo $title; ?></h3>
				 <?php echo $text; ?>
				</div>
			  </div>
			 </div>
			</div>
	
		<?php  elseif( get_row_layout() == 'two_thirds_row' ): 

      	// vars
		$image = get_sub_field('left_image');
		$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

        ?>

        	<!-- Left Image Row -->
			<div class="wg-full-section">
			 <div class="row">
			  <div class="small-12 large-4 columns text-center ready">
			   <div class="section-img">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			   </div>
			  </div>
			  <div class="small-12 large-8 columns">
			  	<div class="two-thirds-section-text">
			  	 <h3><?php echo $title; ?></h3>
				 <?php echo $text; ?>
				</div>
			  </div>
			 </div>
			</div>

		<?php  elseif( get_row_layout() == 'right_img_row' ): 

      	// vars
		$image = get_sub_field('right_image');
		$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

        ?>

        	<!-- Right Image Row -->
			<div class="wg-full-section">
			 <div class="row">
			 	<div class="small-12 large-7 columns">
			 		<div class="section-text">
			 	<h3><?php echo $title; ?></h3>
				 <?php echo $text; ?>
				</div>
			  </div>
			  <div class="small-12 large-5 columns text-center ready">
			   <div class="section-img">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			   </div>
			  </div>
			 </div>
			</div>

		<?php  elseif( get_row_layout() == 'icons_row_three_wide' ): 

      	// vars
		$icon_one = get_sub_field('icon_one');
		$text_one = get_sub_field('text_one');
		$icon_two = get_sub_field('icon_two');
		$text_two = get_sub_field('text_two');
		$icon_three = get_sub_field('icon_three');
		$text_three = get_sub_field('text_three');	
		?>
		
		<!-- Icons over text row -->
		<div class="wg-section">
			<div class="row">
				<div class="large-4 columns text-center">
					<div class="navicon"><?php echo $icon_one; ?></div>
					<h2 class="section-title"><?php echo $text_one; ?></h2>
				</div>
				<div class="large-4 columns text-center">
					<div class="navicon"><?php echo $icon_two; ?></div>
					<h2 class="section-title"><?php echo $text_two; ?></h2>
				</div>
				<div class="large-4 columns text-center">
					<div class="navicon"><?php echo $icon_three; ?></div>
					<h2 class="section-title"><?php echo $text_three; ?></h2>
				</div>
			</div>
		</div>

		<?php  elseif( get_row_layout() == 'pagination_button' ): 

       //vars
		$left_button = get_sub_field('left_button');
		$right_button = get_sub_field('right_button');
		?>
		
		<!-- Page Prev Next -->
		<div class="wg-section">
			<div class="row">
				<div class="large-6 columns text-center">
					<?php echo $left_button; ?>
				</div>

				<div class="large-6 columns text-center">
					<?php echo $right_button; ?>
				</div>
			</div>
		</div>

		<?php  endif;


		endwhile;

		else :

    // no layouts found
			?>
	</div> <!-- end #wg-inner-content -->
<?php endif; ?>

</div> <!-- end #content -->


<?php get_footer('alt'); ?>


