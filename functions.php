<?php // functions.php


 //**************
// THEME SUPPORT

add_theme_support('post-thumbnails');
add_theme_support('menus');


 //****************
// THUMBNAIL SIZES

add_image_size('sidebar-featured', 220, 9999, FALSE);


 //******
// HACKS

// disable admin bar
add_filter('show_admin_bar', '__return_false'); 



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