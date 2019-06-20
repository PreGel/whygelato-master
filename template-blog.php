<?php
/*
Template Name: Blog (No Sidebar)
*/
?>

<?php get_header(); ?>

<div class="row expanded collapse">
	<div class="column">

		<div class="orbit" role="region" aria-label="Featured Blog Posts" data-orbit>
			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				</div>
				<ul class="orbit-container">
					<?php
					$args = array(
						'post_type' => 'post',
							//feature in slider
						'category_name' => 'featured',
							//max number to feature
						'posts_per_page' => 5);

					$wg_header_query = new WP_Query( $args );

					while ($wg_header_query->have_posts()) : $wg_header_query->the_post(); ?>
					<li class="is-active orbit-slide">
						<div class="large-article-header overlay" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
							<div class="large-article-header-content">
								<div class="center-container">
									<div class="article-date">
										<p>Published on <?php the_time('F j, Y') ?></p>
									</div>
									<div class="article-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="article-details">
										<!-- hide author info for now -->
										<!-- <div class="article-author">
											<img src="https://unsplash.it/50/50?image=1005" alt="" />
											<?php the_author_posts_link(); ?>
										</div> -->
							<!-- <div class="article-comments">
								<a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 3 Comments</a>
							</div> -->
							<a class="button secondary" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</ul>
</div>
<nav class="orbit-bullets">
	<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
	<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
	<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
</nav>
</div>
</div>
</div>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="large-12 columns" role="main">

			<?php 
	        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			// query
			$wgblog_query = new WP_Query(array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 9,
				'paged' => $paged,
				'orderby'			=> 'date')
			);

			?>
			<?php if( $wgblog_query->have_posts() ): ?>
			<?php while( $wgblog_query->have_posts() ) : $wgblog_query->the_post();  ?>



			<!-- moving grid loop here -->
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

<?php endwhile; ?>


<?php //joints_page_navi(); ?>

<?php else : ?>

	<h2>There are no blog posts at this time. Please check back soon!</h2>

<?php endif; ?>

<div class="pagination">
    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $wgblog_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
</div>

</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<?php //wp_reset_postdata(); ?>

<?php get_footer('alt'); ?>