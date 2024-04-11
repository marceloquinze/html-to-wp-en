<?php

function minifolio_scripts(){
	wp_enqueue_style( 'minifolio-bootstrap-css', get_template_directory_uri(  ) . '/css/bootstrap.min.css');
	wp_enqueue_style( 'minifolio-fancybox-css', get_template_directory_uri(  ) . '/css/jquery.fancybox.css');
	wp_enqueue_style( 'minifolio-main-css', get_template_directory_uri(  ) . '/css/main.css');
	wp_enqueue_style( 'minifolio-responsive-css', get_template_directory_uri(  ) . '/css/responsive.css');
	wp_enqueue_style( 'minifolio-animate-css', get_template_directory_uri(  ) . '/css/animate.min.css');
	wp_enqueue_style( 'minifolio-animate-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'minifolio_scripts');