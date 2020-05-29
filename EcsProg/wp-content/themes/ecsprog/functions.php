<?php
/**
 * proba functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package proba
 */
?>

<?php
add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','script_theme');

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'style_blog', get_template_directory_uri().'./assets/css/style_blog.css');
}

function script_theme(){
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
	wp_enqueue_script('customizer', get_template_directory_uri() . '/assets/js/customizer.js');
	wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js');
}
?>