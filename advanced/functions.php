<?php 

function adv_theme_support()
{
	// nav menus
	register_nav_menus( array(
		'primary'=>__('Primary Menu'),
		'footer'=>__('Footer Menu')
	) );

	// featured image support
	add_theme_support( 'post-thumbnails' );

	// post format support
	add_theme_support( 'post-formats', array('aside','gallery','link') );
}
add_action( 'after_setup_theme', 'adv_theme_support');

// widget locations
function init_widgets($id)
{
	$args = array(
		'name'          => __( 'Sidebar'),
		'id'            => 'sidebar',
		'before_widget' => '<div class="block side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );
}
add_action('widgets_init','init_widgets');

// excerpt length
function adv_set_excerpt_length(){
	return 25;
}
add_filter('excerpt_length', 'adv_set_excerpt_length');

function get_top_parent(){
	global $post;
	if($post->post_parent){
		$ancestors = get_post_ancestors($post->ID);
		return $ancestors[0];
	}
	return $post->ID;
}

function page_is_parent()
{	
	global $post;
	$pages = get_pages( 'child_of='.$post->ID  );
	return count($pages);
}

?>