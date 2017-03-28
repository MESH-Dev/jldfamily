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

	<h2>Authors</h2>
	<ul>
		<?php wp_list_authors(); ?>
	</ul>

	<h2>Categories</h2>
	<ul>
		<?php wp_list_categories(array('title_li'=>'')); ?>
	</ul>

	<h2>Tags</h2>
	<ul>
		<?php wp_tag_cloud(); ?>
	</ul>
	
	<h2>Archives</h2>
	<ul>
		<?php wp_get_archives(array('show_post_count' => true)); ?>
	</ul>
</div><!-- End of Sidebar -->

