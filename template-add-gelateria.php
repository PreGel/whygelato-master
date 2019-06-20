<?php
/*
Template Name: Add Gelateria (No Sidebar)
*/
?>
<?php
$pmrequests = new PM_request;
$current_user = wp_get_current_user();
?>

<?php get_header(); ?>
			
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
				<div class="pm-difl pm-pad10"><a href="/downloads" class="button">Downloads</a></div>
				<div class="pm-difl pm-pad10"><a href="<?php echo $redirect_url;?>" class="button"><?php _e('My Profile','profile-grid');?></a></div>
				<div class="pm-difl pm-pad10"><a href="<?php echo wp_logout_url( $pmrequests->profile_magic_get_frontend_url('pm_user_login_page','')); ?>" class="button"><?php _e('Logout','profile-grid');?></a></div>
			</div>
			<div class="pm-login-header pm-dbfl pm-bg pm-pad10 pm-border-bt">
				<h3><?php echo 'Hi, ' . $current_user->user_firstname . '<br /> You are now logged in! To complete your Gelateria listing request, simply verify the information below and submit.';?></h3>
				<!-- <p><?php //_e('PROCEED TO','profile-grid');?></p> -->

			</div>
		</div>

		<!-- end restriced section top -->
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>						

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

		<!-- start restriced section bottom -->

<?php else: ?>
	<h1>Add Your Gelateria</h1>
	<h4>Great! Let's get started.</h4>
	<h4>If you have a log-in with us, please log-in below to add your gelateria.</h4>
	<h4>If you do not have a log-in, please <a href="/pm_registration" class="button secondary"> register here </a> it's quick and easy!</h4>
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
