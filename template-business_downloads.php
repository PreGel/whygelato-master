<?php
/* Template Name: Business Downloads */
?>

<?php get_header(); ?>

<?php
$pmrequests = new PM_request;
$current_user = wp_get_current_user();
?>


<div id="content">

	<div class="pmagic">  
		<div class="pm-login-box pm-dbfl pm-border pm-radius5"> 
		<?php if(isset($pm_error) && $pm_error!='' && !is_user_logged_in()):?>
			<div class="pm-login-box-error pm-dbfl pm-pad10 pm-border-bt"><?php echo $pm_error;?></div>
		<?php endif;?>

		<?php
		if ( is_user_logged_in() ) :
			//echo 'Welcome, registered user!'; ?>


        <?php
			$redirect_url = $pmrequests->profile_magic_get_frontend_url('pm_user_profile_page','');
			?> 
			<div class="pm-login-header pm-dbfl pm-bg pm-pad10 pm-border-bt">
				<h3><?php echo 'Hi, ' . $current_user->user_firstname . '<br />You are now logged in and can download any of our resources below!';?></h3>
				<p><?php _e('PROCEED TO','profile-grid');?></p>
				
			</div>
			<div class="pm-login-header-buttons pm-dbfl pm-pad10">
				<div class="pm-center-button pm-difl pm-pad10"><a href="<?php echo $redirect_url;?>" class="pm_button"><?php _e('My Profile','profile-grid');?></a></div>
				<div class="pm-center-button pm-difl pm-pad10"><a href="<?php echo wp_logout_url( $pmrequests->profile_magic_get_frontend_url('pm_user_login_page','')); ?>" class="pm_button"><?php _e('Logout','profile-grid');?></a></div>
			</div>



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

			</div> <!-- end wg-collateral-content -->

		<?php endif; ?>

	
	<?php else:
		echo do_shortcode('[PM_Login]');
		?>
  <div>Dont have an account with us? <a href="/pm_registration">Register Here, it's quick and easy!</a></div>
  <?php endif; ?>

  </div>

</div> <!-- end pmagic -->
<!-- </div> --> <!-- end pmagic -->

</div> <!-- end #content -->




<?php get_footer('alt'); ?>


