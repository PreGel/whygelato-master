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

