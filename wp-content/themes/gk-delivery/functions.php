<?php 
add_filter('wpcf7_autop_or_not', '__return_false');
define('ALLOW_UNFILTERED_UPLOADS', true);
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'menus' );
if ( ! function_exists( 'gk_delivery_register_nav_menu' ) ) {

	function gk_delivery_register_nav_menu(){
		register_nav_menus( array(
	    	'main' => __( 'Main'),
	    	'languages'  => __( 'Languages'),
		) );
	}
	add_action( 'after_setup_theme', 'gk_delivery_register_nav_menu' );
}
function my_scripts() {
    wp_enqueue_script( 'main_js', get_template_directory_uri()."/dist/js/main.js", array(), '', true);
    wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js");
    wp_enqueue_style ( 'main_css', get_template_directory_uri()."/dist/css/main.css");
}
add_action('wp_enqueue_scripts', 'my_scripts');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
add_action('wp_enqueue_scripts', 'my_scripts');
add_image_size( 'primary', 282, 126 );
add_image_size( 'sm-img', 77, 80 );
add_image_size( 'form-img', 588, 328 );
add_image_size( 'logo-size', 122, 34 );
function getImage($image) {
    if($image['mime_type'] !== 'image/svg+xml'):
    return wp_get_attachment_image($image['ID'], 'full');
    else:
        return file_get_contents($image['url']);
    endif;
}