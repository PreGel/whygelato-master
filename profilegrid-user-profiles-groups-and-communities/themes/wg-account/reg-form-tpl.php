<?php
$path =  plugin_dir_url(__FILE__);
$pmrequests = new PM_request;
$basicfunctions = new Profile_Magic_Basic_Functions($this->profile_magic,$this->version);
$html_creator = new PM_HTML_Creator($this->profile_magic,$this->version);
$errors = $basicfunctions->get_error_frontend_message();
$paymentpage = $pmrequests->profile_magic_check_paid_group($gid);
?>

<?php 
if ( is_user_logged_in()) : ?>
	<?php
			$redirect_url = $pmrequests->profile_magic_get_frontend_url('pm_user_profile_page','');
	?> 
    <div class="pmagic"> 
    <div class="pm-login-box pm-dbfl pm-radius5 pm-border"> 
	  <div class="pm-login-header pm-dbfl pm-bg pm-border-bt">
		  <h4><?php _e( 'You have successfully logged in.','profile-grid' );?></h4>
		  <p><?php _e('PROCEED TO','profile-grid');?></p>
	  </div>
	   <div class="pm-login-header-buttons pm-dbfl pm-pad10">
       <div class="pm-difl pm-pad10"><a href="/downloads" class="button">Downloads</a></div>
       <div class="pm-difl pm-pad10"><a href="/add-your-shop" class="button">Add Your Gelateria</a></div>
		   <div class="pm-difl pm-pad10"><a href="<?php echo $redirect_url;?>" class="button"><?php _e('My Profile','profile-grid');?></a></div>
		   <div class="pm-difl pm-pad10"><a href="<?php echo wp_logout_url( $pmrequests->profile_magic_get_frontend_url('pm_user_login_page','')); ?>" class="button"><?php _e('Logout','profile-grid');?></a></div>
	   </div>
       </div>
       </div>
	 <?php
else:
?>

<div class="pmagic">   
<!--Form Starts-->
    <!-- pass data to pardot -->
    <!-- <form class="pmagic-form pm-dbfl" method="post" action="http://go.pregelamericas.com/l/95432/2017-09-28/2v37ss" id="pm_regform_<?php //echo $gid; ?>" name="pm_regform_<?php //echo $gid; ?>" onsubmit="return profile_magic_frontend_validation(this)" enctype="multipart/form-data"> -->
  <form class="pmagic-form pm-dbfl" method="post" action="" id="pm_regform_<?php echo $gid; ?>" name="pm_regform_<?php echo $gid; ?>" onsubmit="return profile_magic_frontend_validation(this)" enctype="multipart/form-data">
   <?php
  $html_creator->get_custom_fields_html_singlepage($gid,$fields);
  //if($pmrequests->profile_magic_show_captcha('pm_enable_recaptcha_in_reg'))
  //$html_creator->pm_get_captcha_html();
  ?>
    <div class="buttonarea pm-full-width-container">
    <div class="all_errors" style="display:none;"></div>
     <?php if($paymentpage>0):?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> 
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
    <?php endif; ?>
      <input class="button" type="submit" value="<?php _e('Submit','profile-grid');?>" name="reg_form_submit">
    </div>
  </form>
</div>
<?php endif;?>
