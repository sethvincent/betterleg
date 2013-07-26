<?php

register_sidebar(array(
  'name' => __( 'Blog Sidebar' ),
  'id' => 'blog-sidebar',
  'description' => __( 'Widgets in this area will be shown in the blog sidebar area.' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));


function betterleg_enqueue_styles() {
  wp_enqueue_style( 'betterleg-css', get_stylesheet_directory_uri() . '/style.css', array('normalize') ); 
}
add_action( 'wp_enqueue_scripts', 'betterleg_enqueue_styles' );
?>