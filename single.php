<?php get_header(); ?>
<main id="content">
	<div class="container">
		<div class="row">
		<div class="post_content columns-9" id="content">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<div class="post">
					<h1><?php the_title(); ?></h1>
					<p class="postinfo">Published <a href=""><?php the_date() ?></a> by <a href=""><?php the_author(); ?></a>
					
					<?php the_content(); ?>
					<p>Categories: <a href="">19th Century</a></p>
					<p>Tagged: <a href="">John L. Dickinson</a>, <a href="">Banks</a>, <a href="">History</a>, <a href="">McCoy</a></p>
				</div>
				<div id="content_container"></div>
				<!-- <?php //comments_template( '', true ); ?> -->
				
			<?php endwhile; ?>

		</div><!-- End of Content --><div class="sidebar columns-3">
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>