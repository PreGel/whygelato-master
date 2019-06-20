<?php 
// Adjust the amount of rows in the grid
$grid_columns = 3; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer> <!--Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="large-4 medium-4 small-12 columns panel" data-equalizer-watch>
         <?php 
			// vars
				$thumb = get_field('dl_thumbnail');
				$title = get_field('title');
				$item = get_field('downloadable_file');
		?>

		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section id="archive-grid-featured-image" class="featured-image" itemprop="articleBody">
					<img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt']; ?>" />
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h3 class="title"><?php echo $title ?></h3>				
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					
					<a class="button secondary" href="<?php echo $item; ?>" alt="pdf download" target="blank">View in Browser</a>
					<a class="button secondary" href="<?php echo $item; ?>" download alt="pdf download">Download</a>
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Row: --> 

<?php endif; ?>

