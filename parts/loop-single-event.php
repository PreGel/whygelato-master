<?php
// get raw date
$start_date = get_field('start_date', false, false);
$end_date = get_field('end_date', false, false);
// make date object
$start_date = new DateTime($start_date);
$end_date = new DateTime($end_date);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<!-- <header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> --> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php //the_post_thumbnail('full'); ?>
		<div class="event-details">
		<p><strong>Dates:</strong> from <span class="date-label"><?php echo $start_date->format('j M Y'); ?></span> until <span class="date-label"><?php echo $end_date->format('j M Y'); ?></span></p>
		<p><strong>Hours:</strong> <?php the_field('hours'); ?></p>
		<p><strong>Location:</strong> <?php the_field('event_address'); ?></p>
		<p><a class="button hollow" href="<?php the_field('event_link_or_website'); ?>" target="blank">Visit Event Website</a></p>
	    </div>
		<div class="event-intro"><?php the_field('short_description'); ?></div>
		<div class="featured-loc">
			<hr />
		<div class="event-full"><?php the_field('full_story'); ?></div>
	   </div>
	    <a class="button large" href="/events" alt="back to all events">View All Events</a>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php //comments_template(); ?>	
													
</article> <!-- end article -->