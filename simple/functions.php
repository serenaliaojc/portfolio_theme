<?php 

function simple_theme_setup()
{
	// featured image support
	add_theme_support( 'post-thumbnails' );

	// menus
	register_nav_menus( array(
		'primary' => __('Primary Menu')
	) );
}
add_action('after_setup_theme', 'simple_theme_setup');

// excerpt length
function set_excerpt_length()
{
	return 60;
}
add_action( 'excerpt_length', 'set_excerpt_length');

function init_widgets($id)
{
	// widget locations
	$args = array(
		'name'          => __( 'Sidebar'),
		'id'            => 'sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	);
	
	register_sidebar( $args );
}
add_action( 'widgets_init', 'init_widgets');

 ?>