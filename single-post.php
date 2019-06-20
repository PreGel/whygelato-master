<?php get_header(); ?>
			
<div id="content">
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- dev testing -->
	<div class="row expanded collapse">
		<div class="column">
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
							<div class="article-author">
								<!-- <img src="https://unsplash.it/50/50?image=1005" alt="" /> -->
								<?php the_author_posts_link(); ?>
							</div>
							<!-- <div class="article-comments">
								<a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 3 Comments</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end dev testing -->

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">
		
		   
		
		    	<?php get_template_part( 'parts/loop', 'single-blog' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer('alt'); ?>