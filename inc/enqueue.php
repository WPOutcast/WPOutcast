<?php
function wpoutcast_scripts() {

	wp_enqueue_style('bootstrap_style_min', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'wpoutcast-style', get_stylesheet_uri() );
	
	wp_enqueue_style('font-awesome-min',get_template_directory_uri().'/css/font-awesome.min.css');

	wp_enqueue_style('animate_min',get_template_directory_uri().'/css/animate.min.css');


	/* Js script */
/*
    wp_enqueue_script( 'wpoutcast-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));*/

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.min.js' , array('jquery'));

    wp_enqueue_script('smartmenus_bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js' , array('jquery'));

    wp_enqueue_script('wpoutcast_custom', get_template_directory_uri() . '/js/custom.js' , array('jquery'));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'wpoutcast_scripts');


function wpoutcast_registers() {

	wp_enqueue_script( 'customizer_script', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '20120206', true  );
}
add_action( 'customize_controls_enqueue_scripts', 'wpoutcast_registers' );

?>