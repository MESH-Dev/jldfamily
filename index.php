<?php get_header(); ?>

<main id="content">

	<div class="container shaun index">
 
			<div class="posts_list columns-9">

				<?php if ( have_posts() ) : ?>
					<?php 

					if (is_home()) { 

						}else{
						?>

						<h1>
							<?php if ( is_day() ) : ?>
								<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
							<?php elseif ( is_month() ) : ?>
								<?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
							<?php elseif ( is_year() ) : ?>
								<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
							<?php elseif ( is_author() ) : ?>
								<?php printf( __( 'Posts by: <span>%s</span>' ), get_the_author() ); ?>
							<?php elseif ( is_category() ) : ?>
								<?php single_cat_title('Browsing posts in: '); ?>
								<?php //printf( __( 'Browsing Posts in: <span>%s</span>' ), single_cat_title() ); ?>
							<?php elseif ( is_tag() ) : ?>
								<?php single_tag_title('Posts tagged as: '); ?>
							<?php else : ?>
								<?php _e( '' ); ?>
							<?php endif; ?>
						</h1>
					<?php } ?>
					<?php 
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						//$the_query = new WP_Query( array('posts_per_page'=>5, 'orderby' => 'date', 'order' =>'DESC', 'paged'=>$paged) );
					?>

					<?php while (have_posts() ) : the_post(); 
							$post_month = get_the_date('m'); 
							//var_dump($post_month);
							$post_day = get_the_date('d');
							$post_year = get_the_date('Y');
					?>

						<div class="post_listitem row">


							<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
							<h6 class="postinfo">Published <a href="<?php echo get_day_link($post_year, $post_month, $post_day); ?>"><?php echo get_the_date(); ?></a> by <?php the_author_posts_link(); ?> </h6><!-- | Categories: <?php the_category(', '); ?> --> <!-- | <?php comments_popup_link(); ?> -->
							<?php 	// check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium', array('class' => 'alignleft'));
								} 
							?>
							<?php the_excerpt('...'); ?>
							<?php //the_excerpt('Read more &#8658'); ?>
							<h6><a href="<?php the_permalink(); ?>">Read More &raquo;</a></h6>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>

				<div class="pagination">
				<?php 
				//Display paged links, this is a "get" so echo is important
				echo paginate_links(array('prev_text' => __('&laquo; '), 'next_text' => __(' &raquo;'),)); 
				?>
				</div>
			</div>
			<div class="sidebar columns-3">
				<?php get_sidebar(); ?>
			</div>
 
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
