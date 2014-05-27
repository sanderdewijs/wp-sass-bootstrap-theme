<?php

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/styles.css' );
	wp_enqueue_style('print_css', get_template_directory_uri() . '/bootstrap/css/print.css' );

}

	add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
}

	add_action('wp_enqueue_scripts', 'theme_js' );

	add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus( 
		array(
				'header_menu' => __( 'Header Menu' )
			)
	 );

}	

	add_action( 'init', 'register_theme_menus' );

function create_widget($name, $id, $description) {

	register_sidebar( array(
		'name' 			=> __( $name ),
		'id' 			=> $id,
		'description' 	=> __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h3>',
		'after_title'	=> '</h3>'
		));
}

// frontpage widgets

	create_widget( 'Front Page Left', 'front-page-left', 'Display on the left of the homepage' );
	create_widget( 'Front Page middle', 'front-page-middle', 'Display on the middle of the homepage' );
	create_widget( 'Front Page right', 'front-page-right', 'Display on the right of the homepage' );

// sidebar Widgets	

	create_widget( 'Sidebar Widgets', 'sidebar-widget', 'Display on the page sidebar' );
?>