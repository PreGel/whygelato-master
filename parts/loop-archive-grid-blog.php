<?php 
// Adjust the amount of rows in the grid
$grid_columns = 3; ?>

<?php if( 0 === ( $wgblog_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer> <!--Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="large-4 medium-4 small-12 columns panel" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section id="archive-grid-featured-image" class="featured-image" itemprop="articleBody">
					<?php the_post_thumbnail('full'); ?>
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
					<?php //get_template_part( 'parts/content', 'byline'); ?>				
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					
					<p><a href="<?php the_permalink(); ?>"class="button hollow">Read More</a></p> 
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wgblog_query->current_post + 1 )  % $grid_columns ||  ( $wgblog_query->current_post + 1 ) ===  $wgblog_query->post_count ): ?>

   </div>  <!--End Row: --> 

<?php endif; ?>

