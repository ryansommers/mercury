<?php

// Remove P2's iPhone styles and viewport meta tag.
add_action( 'after_setup_theme', 'mercury_p2_remove_iPhone' );
function mercury_p2_remove_iPhone () {
	remove_action( 'wp_enqueue_scripts', 'p2_iphone_style', 1000 );
	remove_action( 'wp_head', 'p2_viewport_meta_tag', 1000 );
}

// Use Google Fonts
add_action('wp_print_styles', 'mercury_load_fonts');
function mercury_load_fonts() {
  wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,300');
  wp_enqueue_style( 'googleFonts');
}

?>