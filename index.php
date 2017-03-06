<?php get_header(); ?>

<main id="content">

	<div class="container">
		<div class="row">
			<div class="posts_list columns-9">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="post_listitem">
						<h1><?php the_title(); ?></h1>
						<h6>Published on <a href="">May 21, 2016</a> by <a href="">George Dickinson</a></h6>
						<?php the_excerpt(); ?>
						<h6><a href="">Read More >></a></h6>
					</div>
				<?php endwhile; ?>
			</div><div class="sidebar columns-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


</main><!-- End of Content -->
<div id="content_container">
	<div class="content_columns"></div>
</div>
<?php get_footer(); ?>
