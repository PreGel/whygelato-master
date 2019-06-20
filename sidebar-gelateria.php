<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">
	<?php $markerID = get_the_ID();
       	  $adr = get_field('address_one');
          $zip = get_field('zip');
          //$title = the_title();
          $desc = get_field('short_description');
          $lat = get_post_meta( get_the_ID(), '_wpgmp_metabox_latitude', true );
          $lng = get_post_meta( get_the_ID(), '_wpgmp_metabox_longitude', true );
          //$info = "<a target='_blank'  class='button' href='https://maps.google.com/maps?ll=50,50'>Open in Google Maps</a>";
	?>

	<?php //$mapShortCode = '[put_wpgm id=2 marker='.$markerID.' center_lat='.$lat.' center_lng='.$lng.' zoom=15]'; ?>
	
	<?php //$mapShortCode = '[display_map marker1='.$lat.'|'.$lng.'|'.$info.' zoom=15]'; ?>
	<?php $mapShortCode = '[display_map marker1='.$lat.'|'.$lng.' zoom=15]'; ?>

	<?php //$mapShortCode = '[display_map width="500" height="500" zoom="15" map_type="ROADMAP" map_draggable="true" scroll_wheel="true" address1="'.$adr.' '.$zip.'|'.$title.'|'.$adr.' '.$zip.'"]'; ?>

	<?php //echo $mapShortCode; ?>
	<?php echo do_shortcode($mapShortCode); ?>

	<!-- link to google maps -->
	<?php echo '<a href="https://maps.google.com/maps?ll='.$lat.','.$lng.'" class="button" alt="open in google maps" target="blank"> Open in Google Maps </a>'; ?>


	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>

	<?php //else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<!-- <div class="alert help">
		<p><?php //_e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div> -->

	<?php endif; ?>

</div>