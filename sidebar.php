<div id="sidebar">
	
	<?php 
	//if ( ! dynamic_sidebar('primary-widget-area') ) : ?>
		
		<!-- Sidebar content if no widgets
			Example:
			<div class="box">
				<h2>Pages</h2>
				<ul>
					<?php wp_list_pages(); ?>
				</ul>
			</div>
		-->
		
	<?php //endif; ?>

	<h3>Authors</h3>
	<ul>
		<?php wp_list_authors(); ?>
	</ul>

	<h3>Categories</h3>
	<ul>
		<?php wp_list_categories(array('title_li'=>'')); ?>
	</ul>

	<h3>Tags</h3>
	<ul>
		<?php wp_tag_cloud(); ?>
	</ul>

	<h3>Archives</h3>
	<ul>
		<?php wp_get_archives(array('show_post_count' => true)); ?>
	</ul>
</div><!-- End of Sidebar -->

