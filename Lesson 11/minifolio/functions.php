<?php

function minifolio_scripts(){
	wp_enqueue_style( 'minifolio-bootstrap-css', get_template_directory_uri(  ) . '/css/bootstrap.min.css');
	wp_enqueue_style( 'minifolio-fancybox-css', get_template_directory_uri(  ) . '/css/jquery.fancybox.css');
	wp_enqueue_style( 'minifolio-main-css', get_template_directory_uri(  ) . '/css/main.css');
	wp_enqueue_style( 'minifolio-responsive-css', get_template_directory_uri(  ) . '/css/responsive.css');
	wp_enqueue_style( 'minifolio-animate-css', get_template_directory_uri(  ) . '/css/animate.min.css');
	wp_enqueue_style( 'minifolio-animate-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	wp_register_script('jquery2', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
	wp_enqueue_script('minifolio-bootstrap-js', get_template_directory_uri(  ) . '/js/bootstrap.min.js', array('jquery2'), null, true );
	wp_enqueue_script('minifolio-fancybox-js', get_template_directory_uri(  ) . '/js/jquery.fancybox.pack.js', array(), null, true );
	wp_enqueue_script('minifolio-waypoints-js', get_template_directory_uri(  ) . '/js/jquery.waypoints.min.js', array(), null, true );
	wp_enqueue_script('minifolio-retina-js', get_template_directory_uri(  ) . '/js/retina.min.js', array(), null, true );
	wp_enqueue_script('minifolio-modernizr-js', get_template_directory_uri(  ) . '/js/modernizr.js', array(), null, true );
	wp_enqueue_script('minifolio-main-js', get_template_directory_uri(  ) . '/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'minifolio_scripts');

add_action( 'widgets_init', 'minifolio_sidebars');
function minifolio_sidebars(){
	register_sidebar(
		array(
			'name'	=> 'Banner',
			'id'	=> 'banner',
			'description'	=> 'Place your widgets here',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>'
		)
	);
	register_sidebar(
		array(
			'name'	=> 'About Me',
			'id'	=> 'about-me',
			'description'	=> 'Place your widgets here',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>'
		)
	);
	register_sidebar(
		array(
			'name'	=> 'Hire Me',
			'id'	=> 'hire-me',
			'description'	=> 'Place your widgets here',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>'
		)
	);
	register_sidebar(
		array(
			'name'	=> 'Contact',
			'id'	=> 'contact',
			'description'	=> 'Place your widgets here',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>'
		)
	);
}

register_nav_menus(
	array(
		'main_menu'	=> 'Main Menu',
		'social_media'	=> 'Social Menu'
	)
);

add_theme_support('post-thumbnails');