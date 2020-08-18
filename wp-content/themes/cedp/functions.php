<?php
require_once(get_stylesheet_directory().'/inc/setting.php');
require_once(get_stylesheet_directory().'/inc/headline.php');

if(get_option('cedp_vanta_background')){
	add_action( 'wp_enqueue_scripts', 'add_vanta_script');
	function add_vanta_script(){
		$uri = get_stylesheet_directory_uri();
		wp_enqueue_script('vanta_three', $uri.'/assets/js/vanta/three.r95.min.js');
		wp_enqueue_script('vanta_net', $uri.'/assets/js/vanta/vanta.net.min.js',['vanta_three']);
	}
}


add_action( 'wp_enqueue_scripts', 'add_aos');
function add_aos(){
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_style('aos_css', $uri.'/assets/css/aos/aos.css');
	wp_enqueue_script('aos_js', $uri.'/assets/js/aos/aos.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'add_normalize');
function add_normalize(){
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_style('normalize_css', $uri.'/assets/css/normalize/normalize.css');
}

add_action( 'wp_enqueue_scripts', 'add_cedp_script');
function add_cedp_script(){
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_script('cedp_sticky_header', $uri.'/assets/js/cedp/sticky-header.js', [], false, true);
	wp_enqueue_script('cedp_menu', $uri.'/assets/js/cedp/menu.js', [], false, true);
}

add_action( 'admin_enqueue_scripts', 'add_cedp_admin_script');
function add_cedp_admin_script(){
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_script('cedp_file_uploader', $uri.'/assets/js/cedp/file-uploader.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'add_cedp_css');
function add_cedp_css(){
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_style('cedp_flex_css', $uri.'/assets/css/cedp/flex.css');
	wp_enqueue_style('cedp_form_css', $uri.'/assets/css/cedp/form.css');/*
	*/wp_enqueue_style('cedp_header_css', $uri.'/assets/css/cedp/header.css');/*
	*/wp_enqueue_style('cedp_menu_css', $uri.'/assets/css/cedp/menu.css');/*
	wp_enqueue_style('cedp_banner_css', $uri.'/assets/css/cedp/banner.css');
	wp_enqueue_style('cedp_headline_css', $uri.'/assets/css/cedp/headline.css');
	wp_enqueue_style('cedp_service_css', $uri.'/assets/css/cedp/service.css');
	*/wp_enqueue_style('cedp_team_css', $uri.'/assets/css/cedp/team.css');/*
	wp_enqueue_style('cedp_contact_css', $uri.'/assets/css/cedp/contact.css');
	*/wp_enqueue_style('cedp_footer_css', $uri.'/assets/css/cedp/footer.css');
}

add_action( 'wp_enqueue_scripts', 'remove_inline_css', 20);
function remove_inline_css() {
	$styles = wp_styles();
	$styles->add_data( 'twentytwenty-style', 'after', array() );
}
