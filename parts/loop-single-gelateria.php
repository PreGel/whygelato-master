<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
    <section class="entry-content" itemprop="articleBody">
    	<h5><?php the_field('short_description'); ?></h5>
		<!-- // get basic info about the gelateria -->
		<p><a href="tel:<?php the_field('phone'); ?>"><i class="fi-telephone"></i> <?php the_field('phone'); ?></a></p>
		<address>
		<?php the_field('address_one'); ?><br />
		<?php the_field('address_two'); ?><br />
		<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?>
	    </address>
	    <p><a class="button hollow" href="<?php the_field('website'); ?>" target="blank"><i class="fi-web"></i> Visit Website</a></p>
		<!-- // if featured, get featured business extra info -->
		<div class="featured-loc">
			<hr />
		<?php the_field('full_story'); ?>
	   </div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>	
													
</article> <!-- end article -->