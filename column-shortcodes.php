<?php
/*
Plugin Name: Column Shortcodes for Genesis Framework
Plugin URI: http://desperatelyseekingwp.com/genesis-column-shortcodes
Description: Enables column shortcodes in the Genesis Framework.
Version: 0.9
Author: Cathy Tibbles
Author URI: http://desperatelyseekingwp.com/about
License: GPL2
*/

	//begin writing shortcodes
	function one_half_first() {
	return '<div class="one-half first">';
	}
	add_shortcode("one-half first","one_half_first");

	function one_half() {
	return '<div class="one-half">';
	}
	add_shortcode('one-half','one_half');

	function one_third_first() {
	return '<div class="one-third first">';
	}
	add_shortcode("one-third first","one_third_first");

	function one_third() {
	return '<div class="one-third">';
		}
	add_shortcode('one-third','one_third');

	function one_fourth_first() {
	return '<div class="one-fourth first">';
	}
	add_shortcode("one-fourth first","one_fourth_first");

	function one_fourth() {
	return '<div class="one-fourth">';
	}
	add_shortcode('one-fourth','one_fourth');

	function one_fifth_first() {
	return '<div class="one-fifth first">';
	}
	add_shortcode("one-fifth first","one_fifth_first");

	function one_fifth() {
	return '<div class="one-fifth">';
	}
	add_shortcode('one-fifth','one_fifth');

	function one_sixth_first() {
	return '<div class="one-sixth first">';
	}
	add_shortcode("one-sixth first","one_sixth_first");

	function one_sixth() {
	return '<div class="one-sixth">';
	}
	add_shortcode('one-sixth','one_sixth');

	function end_column() {
	return '</div>';
	}
	add_shortcode('end-column','end_column');

/**
 * Add contextual help menu
 */
 
	add_action('load-edit-post.php', 'dswp_admin_add_help_tab');

function dswp_admin_add_help_tab () {
 
    $screen = get_current_screen();

    if ( $screen->id != 'edit-post.php' || 'edit-page.php')
    return;

    // Add my_help_tab if in edit post or page
    $screen->add_help_tab( array(
        'id'	=> 'shortcodes',
        'title'	=> __('Shortcodes'),
        'content'	=> '<p>' . __('Available Genesis Column shortcodes are [one-half first] [one-half] [one-third first] [one-third] [one-fourth first] [one-fourth] [one-fifth first] [one-fifth] [one-sixth first] [one-sixth] <strong>[end-column]</strong>') . '</p>' . '<p>' . __('<strong>Note</strong> - Each column must begin with a shortcode containing "first". Each column <strong>must</strong> end with an [end-column] shortcode. ') . '</p>',
		) ); 
}
?>