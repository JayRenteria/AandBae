<?php

// specify the site url and the home url
update_option('siteurl','http://aandbae.com');
update_option('home','http://aandbae.com');

/**
 * load the js files
 */
function aandbaeSplash_load_js() {

	// old browsers compatibility
	global $wp_scripts;
	wp_register_script('html5_shiv', '/js/html5shiv.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

	wp_register_script('bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3', true);
	wp_enqueue_script('bootstrap_js');
}
add_action('wp_enqueue_scripts', 'aandbaeSplash_load_js');


/**
 * load the css files
 */
function aandbaeSplash_load_css() {
	wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
	wp_enqueue_style('vanilla_css', get_template_directory_uri() . '/css/vanilla.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'aandbaeSplash_load_css');

/**
 * remove the admin Word Press bar
 */
 function aandbaeSplash_remove_admin_bar() {
   if (!current_user_can('administrator') && !is_admin()) {
     show_admin_bar(false);
   }
 }
 add_action('after_setup_theme', 'aandbaeSplash_remove_admin_bar');


/*
 * Widget creation
 */
function aandbaeSplash_create_widget( $name, $id, $before_widget, $after_widget, $before_title, $after_title, $description ) {

	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => __( $description ),
		'before_widget' => $before_widget,
		'after_widget'  => $after_widget,
		'before_title'  => $before_title,
		'after_title'   => $after_title
	);

	register_sidebar( $args );
}

// top images
aandbaeSplash_create_widget( 'Main Left Image', 'main-left-image', '', '', '', '', 'Widget for changing the Main Left Image.');
aandbaeSplash_create_widget( 'Main Middle Image', 'main-middle-image', '', '', '', '', 'Widget for changing the Main Middle Image.');
aandbaeSplash_create_widget( 'Main Right Image', 'main-right-image', '', '', '', '', 'Widget for changing the Main Right Image.');

// artists photos
aandbaeSplash_create_widget( 'Left Artist Photo', 'left-artist-photo', '', '', '', '', 'Widget for changing the Artist on the left.');
aandbaeSplash_create_widget( 'Right Artist Photo', 'right-artist-photo', '', '', '', '', 'Widget for changing the Artist on the right.');

// change main text
aandbaeSplash_create_widget( 'Main Text', 'main-text', '', '', '', '', 'Widget for changing the Main Text.');

?>