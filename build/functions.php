<?php


register_nav_menus( array(
	'header_menu' => 'Menu displayed at the top of the page',
	'mobile_,menu' => 'Menu displayed ONLY on mobile'	
) );

add_filter('show_admin_bar', '__return_false');

// add_filter('body_class','my_class_names');
// function my_class_names($classes) {
//     return array();
// }

//remove_filter ('the_content', 'wpautop');


?>