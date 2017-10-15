<?php

function customThemeEnqueues(){
	wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/CustomThemeStyle.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/customThemeScript.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'customThemeEnqueues');

function customThemeSetup(){
	add_theme_support('menus');
	register_nav_menu('primary', 'This is the main navigation, positioned at the top of the page.');
	register_nav_menu('seconday', 'This is the secondary navigation, positioned at the bottom of the page.');	
}

add_action('init', 'customThemeSetup');