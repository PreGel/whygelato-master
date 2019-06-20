<div id="sidebar-footer" class="sidebar large-4 medium-6 small-12 columns" role="complementary">

	<?php if ( is_active_sidebar( 'footer' ) ) : ?>

		<?php dynamic_sidebar( 'footer' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<!-- <div class="alert help">
		<p><?php //_e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div> -->

	<?php endif; ?>

</div>