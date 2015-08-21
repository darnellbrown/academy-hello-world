<?php 

/**
* Plugin Name: Hello World
* Description: Inserts Hello World into your Admin header.
* Version 1.0
* Author: Darnell Brown
* Author URI: http://google.com
* License: GPLv2+
*/
class Hello_World {
	function __construct(){
		add_action('admin_notices', array($this, 'output_notice_html'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
	}
	function output_notice_html() {
		echo wp_kses_post(sprintf('<p class="academy-hello-world">%s</p>', __('Hello World', 'academy_hello_world')));
	}
	function enqueue_admin_styles()
	{
		wp_enqueue_style('academy_hello_world', plugin_dir_url(__FILE__) . 'academy-hello-world.css')
	}
	
}

$GLOBALS['academy_hello_world'] = new Hello_World();

	
?>