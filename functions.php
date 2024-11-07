<?php
function immiex_child_enqueue_styles() {
    //wp_dequeue_style( 'immiex-google-fonts' );
    $parent_style = 'immiex-style';
    $dependency = array('bootstrap', 'immiex-default-style');   

	wp_enqueue_style( 'Inter-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', false );
    wp_enqueue_style('child-theme-custom-css', get_stylesheet_directory_uri() . '/custom.css', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'immiex_child_enqueue_styles' );