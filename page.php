<?php get_header(); ?>

<main id="content">

	<div class="container">
		<div class="row">
			<div class="columns-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="slider_container">
						<div class="columns-4 imgslider">
							<div class="indiv_slide" style="background-image: url('/jldfamily/wp-content/uploads/2017/03/JL-Dickinson.jpg');"><!-- <img src="http://localhost:8888/jldfamily/wp-content/uploads/2017/03/JL-Dickinson.jpg"> --></div>
							<div class="indiv_slide" style="background-image: url('/jldfamily/wp-content/uploads/2017/03/IMGP1603.jpg');"><!-- <img src="http://localhost:8888/jldfamily/wp-content/uploads/2017/03/IMGP1603.jpg"> --></div>
							<div class="indiv_slide" style="background-image: url('/jldfamily/wp-content/uploads/2017/03/KVB-1.jpg');"><!-- <img src="http://localhost:8888/jldfamily/wp-content/uploads/2017/03/KVB-1.jpg"> --></div>
						</div><div class="columns-8 textslider">
							<div class="indiv_text_slide"><h3>John Lewis Dickinson</h3><h5>(1870-1954)</h5><p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p></div>
							<div class="indiv_text_slide"><h3>Mine Site Reclaimation Project Field Trip</h3><h5>West Virginia, May 2011</h5><p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod.</p></div>
							<div class="indiv_text_slide"><h3>Kanawha Valley Bank</h3><h5>Established in 1867</h5><p>Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div>
						</div>
					</div>
					<div id="content_container" class="content">
						<!-- <?php //the_content(); ?> -->
						<div class="content_columns columns-4">
							<h3>Mission</h3>
							<p>One loving family’s promise to challenge and empower one another to enhance our family’s legacy of stewardship of our land and financial resources so as to exponentially provide for future generations and our community.</p>
						</div><div class="content_columns columns-4">
							<h3>Vision</h3>
							<p>Our family and family enterprises will proactively manage our complex future by:<br><br><ul><li>Honoring our past values and future vision</li><li>Empowering our Investment Committee to evolve</li><li>Providing open communication to the entire family</li></ul></p>
						</div><div class="content_columns columns-4">
							<h3>Upcoming Events</h3>
							<p>New Event</p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
<!--
			<div class="columns-3">

				Change this to repeater of custom fields

				<?php //get_sidebar(); ?>
			</div> -->

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
