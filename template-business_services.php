<?php
/* Template Name: Business Services Content */
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
	</div>

<?php  endif;


endwhile;

else :

    // no layouts found
	?>

<?php endif; ?>

</div>


<div id="tools" data-magellan-target="tools">
	<!-- <div class="row large-12 text-center">
		<h2>Service &amp; Tools</h2>
	</div> -->
	<div class="ready row small-up-1 medium-up-2 large-up-2" data-equalizer data-equalize-on="medium">
		<div class="column trailhead">
			<div class="wrapper" data-equalizer-watch>
				<a href="legal-advice">
					<div class="text-center">
					<svg id="Layer_7" data-name="Layer 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.9 100">
						<title>legal-advice</title>
						<path class="draw-path svcs-icon" d="M93.4,91.4H26.5a4,4,0,0,1-4-4V43.2a4,4,0,0,1,4-4H93.4a4,4,0,0,1,4,4V87.4A4,4,0,0,1,93.4,91.4ZM74,39.2V31.3a4,4,0,0,0-4-4H50.1a4,4,0,0,0-4,4v7.9M42.5,78.7V72.3a1,1,0,0,0-1-1H35.1a1,1,0,0,0-1,1v6.4a.94.94,0,0,0,1,1h6.4A1,1,0,0,0,42.5,78.7Zm43.6,0V72.3a1.08,1.08,0,0,0-1-1H78.7a1.08,1.08,0,0,0-1,1v6.4a1,1,0,0,0,1,1h6.4A.94.94,0,0,0,86.1,78.7Zm-9.4-3.8H43.3m43.8,0H97m-73.5,0h9.9" transform="translate(-21 -25.8)"/></svg>
						</div>
						<div class="mo-link">
						<h3>Legal Advice</h3>
						<!-- <p class="button hollow">Learn More</p> -->
						<p>Learn More</p>
					    </div>
					</a>
				</div>
			</div>
			<div class="column trailhead">
				<div class="wrapper" data-equalizer-watch>
					<a href="marketing-geomarketing">
						<div class="text-center">
						<svg id="Layer_6" data-name="Layer 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79 100">
							<title>marketing</title>
							<path class="draw-path svcs-icon" d="M98,49.81C98,63.14,94.2,74,89.51,74S81,63.14,81,49.81s3.8-24.14,8.49-24.14S98,36.48,98,49.81ZM89,25.69s-20.47,7.14-38.35,9.82c-14.26,2.14-24.14,2.68-24.14,2.68S22,41.76,22,49.81a18.51,18.51,0,0,0,4.47,12.52s9.65.2,22.35,1.79C63.13,65.91,88.16,74,88.16,74M44.61,36.35a34.45,34.45,0,0,0-2.93,12.57,65.45,65.45,0,0,0,2,14.71m39.54-4.87c3.7,0,6.71-3.8,6.71-8.49s-3-8.49-6.71-8.49M33.62,63.22,40.78,90s.89,2.68,2.68,3.58a8.91,8.91,0,0,0,3.58.89s3.58,0,5.36-.89.89-3.58.89-3.58L42.56,64.12" transform="translate(-20.5 -24.17)"/></svg>
							</div>
							<div class="mo-link">
							<h3>Marketing &amp; Geomarketing</h3>
							<p>Learn More</p>
						    </div>
						</a>
					</div>

				</div>
				<div class="column trailhead">
					<div class="wrapper" data-equalizer-watch>
						<a href="real-estate">
							<div class="text-center">
							<svg id="real-estate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.97 100">
								<title>real-estate</title>
								<path class="draw-path svcs-icon" d="M17.31,103h85M68.9,101.18V15l-2,.6L28.84,27.14S25.2,28.35,24,30.78a12.1,12.1,0,0,0-1.21,4.86v65.54m74,0V38.06c0-1.21,0-4.86-3.64-6.07L70.11,24.71M37.28,91.59V87M47,91.59V87m8.5,4.61V87m-18.21-5.1V77.27M47,81.88V77.27m8.5,4.61V77.27M37.28,73.39V68.78M47,73.39V68.78m8.5,4.61V68.78m-18.21-5.1V59.06M47,63.68V59.06m8.5,4.61V59.06M37.28,55.18V50.57M47,55.18V50.57m8.5,4.61V50.57m-18.21-5.1V40.86M47,45.47V40.86m8.5,4.61V40.86M83.4,91.59V87m0-5.1V77.27m0-3.88V68.78m0-5.1V59.06m0-3.88V50.57m0-5.1V40.86" transform="translate(-17.31 -12.98)"/></svg>
								</div>
								<div class="mo-link">
								<h3>Real Estate</h3>
								<p>Learn More</p>
							    </div>
							</a>
						</div>
					</div>
					<div class="column trailhead">
						<div class="wrapper" data-equalizer-watch>
							<a href="business-plan">
								<div class="text-center">
								<svg id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.33 100">
									<title>business-plan</title>
									<path class="draw-path svcs-icon" d="M29.4,38.2A5.2,5.2,0,1,1,24.2,33,5.2,5.2,0,0,1,29.4,38.2Zm7.8-.37h63.14M24.2,53.8A5.2,5.2,0,1,0,29.4,59,5.2,5.2,0,0,0,24.2,53.8Zm13,4.83h63.14m-74.66,16a5.2,5.2,0,1,0,5.2,5.2A5.2,5.2,0,0,0,25.69,74.6Zm13,4.83h63.14" transform="translate(-17.5 -31.5)"/></svg>
									</div>
									<div class="mo-link">
									<h3>Business&nbsp;Plan / Investments Evaluation</h3>
									<p>Learn More</p>
								    </div>
								</a>
							</div>
						</div>
					</div>
					<div class="ready row small-up-1 medium-up-2 large-up-2" data-equalizer data-equalize-on="medium">
					<div class="column trailhead">
						<div class="wrapper" data-equalizer-watch>
							<a href="vendors">
								<div class="text-center">
								<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74.06 100">
									<title>vendors</title>
									<path class="draw-path svcs-icon" d="M56.62,43.37,72.53,27.46a13.84,13.84,0,0,1,19.51,0h0A13.84,13.84,0,0,1,92,47l-16.8,16.8a13.84,13.84,0,0,1-19.51,0h0" transform="translate(-23.5 -21.94)"/>
									<path class="draw-path svcs-icon" d="M64.44,73.68,48.54,89.59a13.84,13.84,0,0,1-19.51,0h0a13.84,13.84,0,0,1,0-19.51l16.8-16.8a13.84,13.84,0,0,1,19.51,0h0" transform="translate(-23.5 -21.94)"/></svg>
									</div>
									<div class="mo-link">
									<h3>Vendors</h3>
									<p>Learn More</p>
								</div>
								</a>
							</div>
						</div>
						<div class="column trailhead">
							<div class="wrapper" data-equalizer-watch>
								<a href="training">
									<div class="text-center">
									<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.74 100">
										<title>training</title>
										<path class="draw-path svcs-icon" d="M59.43,31.5,101.5,44.93,59.43,59.25h0L18.25,45.82ZM31.68,51.19V64.62s10.77,8.17,23.27,9C69.27,74.47,79.12,70,79.12,70m9-12.53s-5.37.9-5.37,6.27S87.18,70,87.18,70L83.6,87h9L88.07,70s5.37-.9,5.37-6.27-5.37-6.27-5.37-6.27V50.3L58.53,44.93" transform="translate(-13.55 -29.92)"/></svg>
										</div>
										<div class="mo-link">
										<h3>Training</h3>
										<p>Learn More</p>
									    </div>
									</a>
								</div>
							</div>
							<div class="column trailhead">
								<div class="wrapper" data-equalizer-watch>
									<a href="start-up-assistance">
										<div class="text-center">
										<svg id="Layer_5" data-name="Layer 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.99 100">
											<title>startup</title>
											<path class="draw-path svcs-icon" d="M83.53,47.49a9,9,0,1,1-9-9A9,9,0,0,1,83.53,47.49Zm-43.67,27c-4.61,0-9.63,8.35-9.63,8.35s-8.11,15-7,16.06c1.25,1.28,16-7.07,16-7.07s8.35-5,8.35-9.63A7.29,7.29,0,0,0,39.86,74.46ZM53,68.36a39.59,39.59,0,0,0,9,6.42S81,71.89,91.56,54.23C99.44,41.1,98,24.05,98,24.05A65.37,65.37,0,0,0,70,29.51C53.47,36.72,46.61,59.37,46.61,59.37A39.59,39.59,0,0,0,53,68.36Zm1-24.72s-7.38-1-14.13,5.78C33.44,55.84,27,66.11,27.66,66.75s5.74-5.34,12.2-6.42C47.57,59,46.29,59,46.29,59m17,15.72s0-1.28-1.27,6.42c-1.07,6.46-7,11.57-6.4,12.21S66.5,87.6,72.91,81.17C79.65,74.41,78.67,67,78.67,67" transform="translate(-21.6 -22.5)"/></svg>
											</div>
											<div class="mo-link">
											<h3>Start-up Assistance</h3>
											<p>Learn More</p>
										    </div>
										</a>
									</div>
								</div>
							</div>
				</div>

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
											<div class="section-copy"><?php echo $text; ?></div>
										</div>
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
								<div class="row expanded">
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
								<div class="row expanded">
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
					</div>

					<?php  endif;


					endwhile;

					else :

    // no layouts found
						?>


				</div> <!-- end #pg-inner-content -->
			<?php endif; ?>

		</div> <!-- end #content -->


		<?php get_footer('alt'); ?>


