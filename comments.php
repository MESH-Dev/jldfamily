<?php if ( have_comments() ) : ?>
	<img src="<?php bloginfo('template_directory'); ?>/img/top-accent.jpg">
	<h2>Comments</h2>
	
	<?php wp_list_comments( array('style' => 'div') ); ?>

<?php endif; ?>

<?php comment_form(); ?>