<?php
function betterleg_enqueue_styles() {
  wp_enqueue_style( 'betterleg-css', get_stylesheet_directory_uri() . '/style.css', array('normalize') ); 
}
add_action( 'wp_enqueue_scripts', 'betterleg_enqueue_styles' );
?>