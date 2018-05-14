<?php 

function theme_enqueue_styles() {
	wp_enqueue_style( 'twentyfifteen-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Implements hook_widgets_init(): not using it
function twentyseventeenchild_widgets_inits()
{
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => 'content footer',
		'id'            => 'content_footer_1',
		// 'description'   => '',
		// 'class'         => '',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	);
	
	register_sidebar( $args );
	register_widget( 'Recent_Work_Widget' );
	
}
twentyseventeenchild_widgets_inits();

/**
* 
*/
class Recent_Work_Widget extends WP_Widget
{
	
	function __construct()
	{
		parent::__construct(
			'recentwork_widget',
			'Most Recent Work',
			array(
				'description' => __( 'Display most recent work', 'text_domain' ) 
				)
			);
	}

	public function widget($args, $instance)
	{
		echo $args['before_widget'];
		if (!empty($instance['title'])) {
			echo $args['before_title'].apply_filters( 'widget_title', $instance['title'].$args['after_title'] );
		}

		$param = array(
			'posts_per_page' => 1,
			'offset' => 0,
			'category_name' => 'work',
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish' );
		$work = get_posts( $param );
		foreach ($work as $w) {
			setup_postdata( $w );
			echo "<h3>".$w->post_title."</h3>";
			// wp_reset_postdata();
		}

		echo $args['after_widget'];
	}

	public function form($instance)
	{
		$title = !empty($instance['title']) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		echo "<p><label for='".esc_attr( $this->get_field_id('title') )."'>"; 
		echo esc_attr_e( 'Title', 'text_domain' ).'</label>';
		echo "<input class='widefat' id='".esc_attr( $this->get_field_id('title') )."' name='".esc_attr( $this->get_field_name('title') )."' type='text' value='".esc_attr($title)."'></p>";
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;
	}
} 

 ?>