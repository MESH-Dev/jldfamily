<?php get_header(); ?>
<main id="content">
	<div class="container">
		<div class="row">
		<div class="post_content columns-9" id="content">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<div class="post">
					<h1><?php the_title(); ?></h1>
					<?php 
						$post_month = get_the_date('m'); 
						//var_dump($post_month);
						$post_day = get_the_date('d');
						$post_year = get_the_date('Y');
					?>
					<p class="postinfo">Published <a href="<?php echo get_day_link($post_year, $post_month, $post_day); ?>"><?php the_date() ?></a> by <?php the_author_posts_link(); ?></p>
					<?php 	// check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium');
								} 
							?>
					<?php the_content(); ?>
					<p>Categories: <?php the_category(', '); ?><!-- <a href="">19th Century</a> --></p>
					<p><?php the_tags("Tagged: "); ?><!-- <a href="">John L. Dickinson</a>, <a href="">Banks</a>, <a href="">History</a>, <a href="">McCoy</a> --></p>
				</div>
				<div id="content_container"></div>
				<?php comments_template( '', true ); ?>
				
			<?php endwhile; ?>

		</div><!-- End of Content --><div class="sidebar columns-3">
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>