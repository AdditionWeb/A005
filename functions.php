<?php
/**
 * Loads the child theme textdomain.
 */
function oneway_child_theme_setup() {
    load_child_theme_textdomain( 'oneway');
}
add_action( 'after_setup_theme', 'oneway_child_theme_setup' );

function oneway_child_enqueue_styles() {
    $parent_style = 'oneway-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'oneway-style',get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'oneway_child_enqueue_styles',99);
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_add_parent_dep' ) ):
function chld_thm_cfg_add_parent_dep() {
    global $wp_styles;
    array_unshift( $wp_styles->registered[ 'oneway-style' ]->deps, 'oneway-parent-style' );
}
endif;
add_action( 'wp_head', 'chld_thm_cfg_add_parent_dep', 2 );

// END ENQUEUE PARENT ACTION

// Include A005 Customizer Options
include( 'inc/customizer.php' );

// Include 404 Page Text
include( 'inc/template-tags.php' );