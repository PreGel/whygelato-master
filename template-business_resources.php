<?php
/* Template Name: Business Resources Content */
?>

<?php get_header(); ?>


<div id="content">


<?php

// check if the flexible content field has rows of data
	if( have_rows('intro_section') ): ?>
	<div id="wg-inner-content">
		<?php 

     // loop through the rows of data
		while ( have_rows('intro_section') ) : the_row();

		if( get_row_layout() == 'intro_row' ):

        	// vars
			$title = get_sub_field('section_title');
		    $text = get_sub_field('section_text');

		?>

		<!-- Content section 1 -->
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

<?php  endif;


endwhile;

else :

    // no layouts found
	?>

<?php endif; ?>

</div> <!-- end wg-inner-content -->



							<?php

// check if the flexible content field has rows of data
							if( have_rows('standard_section') ): ?>
							<div id="wg-inner-content">
								<?php 

     // loop through the rows of data
								while ( have_rows('standard_section') ) : the_row();

								if( get_row_layout() == 'standard_row' ):

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
										<div class="large-12 columns text-center">
											<div class="section-copy section-lone-copy"><?php echo $text; ?></div>
										</div>
									</div>
								</div>

							<?php  elseif( get_row_layout() == 'left_img_row' ): 

      	// vars
							$image = get_sub_field('left_image');
							$title = get_sub_field('section_title');
							$text = get_sub_field('section_text');

							?>

							<!-- Content section 1 -->
							<div class="wg-full-section">
								<div class="row">
									<div class="small-12 large-5 columns text-left ready">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>
									<div class="small-12 large-7 columns">
										<div class="section-text">
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

							<!-- Content section 1 -->
							<div class="wg-full-section">
								<div class="row">
									<div class="small-12 large-7 columns">
										<div class="section-text">
											<h3><?php echo $title; ?></h3>
											<?php echo $text; ?>
										</div>
									</div>
									<div class="small-12 large-5 columns text-right ready">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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

							<!-- Content section -->
							<div class="wg-section">
								<div class="row">
									<div class="large-4 columns text-center">
										<img src="<?php echo $icon_one['url']; ?>" alt="<?php echo $icon_one['alt']; ?>" />
										<h2 class="section-title"><?php echo $text_one; ?></h2>
									</div>
									<div class="large-4 columns text-center">
										<img src="<?php echo $icon_two['url']; ?>" alt="<?php echo $icon_two['alt']; ?>" />
										<h2 class="section-title"><?php echo $text_two; ?></h2>
									</div>
									<div class="large-4 columns text-center">
										<img src="<?php echo $icon_three['url']; ?>" alt="<?php echo $icon_three['alt']; ?>" />
										<h2 class="section-title"><?php echo $text_three; ?></h2>
									</div>
								</div>
							</div>

						<?php  elseif( get_row_layout() == 'pagination_button' ): 

       //vars
						$left_button = get_sub_field('left_button');
						$right_button = get_sub_field('right_button');
						?>

						<!-- Content section -->
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

			<?php

// check if the collateral content field has rows of data
	if( have_rows('collateral_section') ): ?>
	<div id="wg-collateral-content">
		<?php 

     // loop through the rows of data
		while ( have_rows('collateral_section') ) : the_row();

		if( get_row_layout() == 'pdf_download_row' ):

        	// vars
        	$thumb_one = get_sub_field('dl_thumb_one');
        	$title_one = get_sub_field('dl_title_one');
			$item_one = get_sub_field('dl_one');

			$thumb_two = get_sub_field('dl_thumb_two');
        	$title_two = get_sub_field('dl_title_two');
			$item_two = get_sub_field('dl_two');

			$thumb_three = get_sub_field('dl_thumb_three');
        	$title_three = get_sub_field('dl_title_three');
			$item_three = get_sub_field('dl_three');
		    

		?>

		<!-- Content section 1 -->
		<div class="wg-section">
			<div class="row">
				<div class="large-12 columns text-center">
					<h1 class="section-title">Downloadable Resources</h1>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns text-center">
					<img src="<?php echo $thumb_one['url']; ?>" alt="<?php echo $thumb_one['alt']; ?>" />
					<p><?php echo $title_one ?></p>
					<a class="button secondary" href="<?php echo $item_one; ?>" alt="pdf download">View in Browser</a>
					<a class="button secondary" href="<?php echo $item_one; ?>" download alt="pdf download">Download</a>
				</div>
				<div class="large-4 columns text-center">
					<img src="<?php echo $thumb_two['url']; ?>" alt="<?php echo $thumb_two['alt']; ?>" />
					<p><?php echo $title_two ?></p>
					<a class="button secondary" href="<?php echo $item_two; ?>" alt="pdf download">View in Browser</a>
					<a class="button secondary" href="<?php echo $item_two; ?>" download alt="pdf download">Download</a>
				</div>
				<div class="large-4 columns text-center">
					<img src="<?php echo $thumb_three['url']; ?>" alt="<?php echo $thumb_three['alt']; ?>" />
					<p><?php echo $title_three ?></p>
					<a class="button secondary" href="<?php echo $item_three; ?>" alt="pdf download">View in Browser</a>
					<a class="button secondary" href="<?php echo $item_three; ?>" download alt="pdf download">Download</a>
				</div>
			</div>
		</div>

<?php  endif;


endwhile;

else :

    // no layouts found
	?>

<?php endif; ?>

</div> <!-- end wg-collateral-content -->

		</div> <!-- end #content -->


		<?php get_footer('alt'); ?>


