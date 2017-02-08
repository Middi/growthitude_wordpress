<?php
// Enable thumbnails
add_theme_support( 'post-thumbnails' );

// Enable Menus
add_theme_support( 'menus' );


//create a permalink after the excerpt
function wpfme_replace_excerpt($content) {
	return str_replace('...',
		'<a class="readmore" href="'. get_permalink() .'">Continue Reading</a>',
		$content
	);
}
add_filter('the_excerpt', 'wpfme_replace_excerpt');


//custom excerpt length
function wpfme_custom_excerpt_length( $length ) {
	//the amount of words to return
	return 26;
}

add_filter( 'excerpt_length', 'wpfme_custom_excerpt_length');



?>
