<?php // functions.php


 //****************
// $CONTACT_FORM_7

add_action('wp_print_scripts', function () {
	wp_deregister_script('contact-form-7');
});

add_action('wp_print_styles', function() {
	wp_deregister_style('contact-form-7');
});


 //**************
// THEME SUPPORT

add_theme_support('post-thumbnails');
add_theme_support('menus');


 //****************
// THUMBNAIL SIZES

add_image_size('sidebar-featured', 220, 9999, FALSE);



// excerpt filters

add_filter('excerpt_length', function () { 
	return 40;
});

add_filter('excerpt_more', function () {
	return '...';
});


function _get_posts() {

	return new WP_Query(
		array(
			'posts_per_page' => 3
		)
	);

}