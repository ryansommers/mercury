<?php

// Remove P2's iPhone styles and viewport meta tag.
add_action( 'after_setup_theme', 'p2_remove_iPhone' );
function p2_remove_iPhone () {
	remove_action( 'wp_enqueue_scripts', 'p2_iphone_style', 1000 );
	remove_action( 'wp_head', 'p2_viewport_meta_tag', 1000 );
}

?>