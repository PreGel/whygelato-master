<?php get_header(); ?>

<div class="row expanded collapse">
	<div class="column">

		<div class="orbit" role="region" aria-label="Featured Event" data-orbit>
			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				</div>
				<ul class="orbit-container">
					<?php
					$args = array(
						'post_type' => 'event',
							//feature in slider
						'tax_query' => array(
							array(
								'taxonomy' => 'event_cat',
								'field' => 'name',
								'terms' => 'featured',
								'meta_key'			=> 'start_date',
								'orderby'			=> 'meta_value',
								'order'				=> 'ASC',
								'meta_query' => array(
									array(
										'key' => 'end_date',
										'value' => $today,
										'compare' => '>=',
										'type' => 'DATE'
										))
								)
							),
							//max number to feature
						'post_per_page' => 5);

					$wg_header_query = new WP_Query( $args );

					while ($wg_header_query->have_posts()) : $wg_header_query->the_post(); ?>
					<li class="is-active orbit-slide">
						<div class="large-article-header overlay" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
							<div class="large-article-header-content">
								<div class="center-container">
									<div class="article-date">
										<span class="label secondary">Featured Event</span>
									</div>
									<div class="article-title">
										<h1><?php the_title(); ?></h1>
										<h2><?php the_field('city'); ?>, <?php the_field('state'); ?></h2>
									</div>
									<!-- <div class="article-details">
										<p><?php //echo get_field('start_date');?> - <?php //echo get_field('end_date');?></p>
									</div> -->
									<a class="button secondary" href="<?php the_permalink(); ?>">Learn More</a>
								</div>
							</div>
						</div>
					</li>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		</div>
	<!-- <nav class="orbit-bullets">
		<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
		<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
		<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
	</nav> -->
</div>
</div>
</div>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="large-12 columns" role="main">
			<!-- <?php //do_action('show_beautiful_filters'); ?> -->
			<?php 
		    // only show events that are not past end date
			$today = date('Ymd', strtotime('+2 hours'));
			// query
			$wg_grid_query = new WP_Query(array(
				'post_type'			=> 'event',
				//'posts_per_page'	=> -1,
				'meta_key'			=> 'start_date',
				'orderby'			=> 'meta_value',
				'order'				=> 'ASC',
				'meta_query' => array(
					array(
						'key' => 'end_date',
						'value' => $today,
						'compare' => '>=',
						'type' => 'DATE'
						))
				));
				?>
				<?php if( $wg_grid_query->have_posts() ): ?>
				<?php while( $wg_grid_query->have_posts() ) : $wg_grid_query->the_post();  ?>

				<!-- moving grid loop here -->
				<?php 
// get raw date
				$date = get_field('start_date', false, false);
// make date object
				$date = new DateTime($date);
// Adjust the amount of rows in the grid
				$grid_columns = 3; ?>

				<?php if( 0 === ( $wg_grid_query->current_post  ) % $grid_columns ): ?>

				<div class="row archive-grid" data-equalizer> <!--Begin Row:--> 

				<?php endif; ?> 

				<!--Item: -->
				<div class="large-4 medium-4 small-12 columns panel" data-equalizer-watch>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

						<section class="featured-image" itemprop="articleBody">
							<?php the_post_thumbnail('events-grid'); ?>
						</section> <!-- end article section -->

						<header class="article-header">
							<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>					
						</header> <!-- end article header -->	

						<section class="entry-content" itemprop="articleBody">
							<p><?php echo $date->format('j M Y'); ?><br />
								<?php the_field('city'); ?>, <?php the_field('state'); ?></p>
								<p><a href="<?php the_permalink(); ?>"class="button hollow">Learn More</a></p>
							</section> <!-- end article section -->

						</article> <!-- end article -->

					</div>

					<?php if( 0 === ( $wg_grid_query->current_post + 1 )  % $grid_columns ||  ( $wg_grid_query->current_post + 1 ) ===  $wg_grid_query->post_count ): ?>

				</div>  <!--End Row: --> 

			<?php endif; ?>


		<?php endwhile; ?>	

		<?php joints_page_navi(); ?>

	<?php else : ?>

	<h2>There are no events listed at this time. Please check back soon!</h2>

	<?php //get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
<?php //wp_reset_query();	?>


</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<?php wp_reset_postdata(); ?>

<?php get_footer('alt'); ?>