<?php

if (! function_exists('glasseye_setup')) {

	function glasseye_setup() {
		// let wordpress handle the title tags
		add_theme_support('title-tag');
	}

}
add_action('after_setup_theme', 'glasseye_setup');

// register menus
function register_glasseye_menus() {
	register_nav_menus([
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')

	]);
}
add_action('init', 'register_glasseye_menus');

// add style sheets
function glasseye_scripts() {
	wp_enqueue_style('glasseye_styles', get_stylesheet_uri());
	wp_enqueue_style('glasseye_google_fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web');
}
add_action('wp_enqueue_scripts', 'glasseye_scripts');

// register widget / sidebar area
function glasseye_widget_init() {
	register_sidebar([
		'name' => __('Main Sidebar', 'glasseye'), // t() - translate function
		'id' => 'main-sidebar',
		'description' => __('Widgets added here will appear in all pages using the 2 column template'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>'

	]);
}
add_action('widgets_init', 'glasseye_widget_init');