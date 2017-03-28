<?php

//Add all custom functions, hooks, filters, ajax etc here

include('functions/start.php');

include('functions/clean.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/img/logo.svg) !important; }
	    </style>';
}

//Modify "more" at end of excerpt
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpb_comment_reply_text( $link ) {
$link = str_replace( 'Reply', 'Reply&raquo;', $link );
return $link;
}
add_filter( 'comment_reply_link', 'wpb_comment_reply_text' );

?>
