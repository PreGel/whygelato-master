<?php get_header(); ?>

<?php
$pmrequests = new PM_request;
$current_user = wp_get_current_user();
?>

<div id="content">
	<div class="row">
		<div class="large-12 columns">
			<!-- start restriced section top -->
			<div class="restrict">  
				<!-- <div class="pm-login-box pm-dbfl pm-border pm-radius5">  -->
				<?php if(isset($pm_error) && $pm_error!='' && !is_user_logged_in()):?>
				<div class="pm-login-box-error pm-dbfl pm-pad10 pm-border-bt"><?php echo $pm_error;?></div>
			<?php endif;?>

			<?php
			if ( is_user_logged_in() ) :
			//echo 'Welcome, registered user!'; ?>


		<?php
		$redirect_url = $pmrequests->profile_magic_get_frontend_url('pm_user_profile_page','');
		?> 
		<div class="wg-login-box pm-dbfl pm-border pm-radius5">
			<div class="pm-login-header-buttons pm-dbfl pm-pad10">
                <div class="pm-difl pm-pad10"><a href="/add-your-shop" class="button">Add Your Gelateria</a></div>
				<div class="pm-difl pm-pad10"><a href="<?php echo $redirect_url;?>" class="button"><?php _e('My Profile','profile-grid');?></a></div>
				<div class="pm-difl pm-pad10"><a href="<?php echo wp_logout_url( $pmrequests->profile_magic_get_frontend_url('pm_user_login_page','')); ?>" class="button"><?php _e('Logout','profile-grid');?></a></div>
			</div>
			<div class="pm-login-header pm-dbfl pm-bg pm-pad10 pm-border-bt">
				<h3><?php echo 'Hi, ' . $current_user->user_firstname . ' You are now logged in and can download any of our resources below!';?></h3>
				<!-- <p><?php //_e('PROCEED TO','profile-grid');?></p> -->

			</div>
		</div>

		<!-- end restriced section top -->
		
		<div id="inner-content" class="row">
			
			<main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive-grid-download' ); ?>
				
			<?php endwhile; ?>	

			<?php joints_page_navi(); ?>
			
		<?php else : ?>
		
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		
	<?php endif; ?>
	
</main> <!-- end #main -->

<?php //get_sidebar(); ?>

</div> <!-- end #inner-content -->

<!-- start restriced section bottom -->

<?php else: ?>
	<h4>Please log-in below to view the downloads.</h4>
	<h5>If you do not have a log-in, please <a href="/pm_registration" class="button"> register here, it's quick and easy! </a></h5>
	<?php echo do_shortcode('[PM_Login]');
	?>
<?php endif; ?>

<!-- </div> -->

</div> <!-- end pmagic -->
<!-- end restriced section bottom -->
</div>
</div>
</div> <!-- end #content -->

<?php get_footer('alt'); ?>