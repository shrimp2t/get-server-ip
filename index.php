<?php
/**
 * Plugin Name:  My Server IP
 * Version:      1.14.0
 * Text Domain:  shrimp2t
 * Domain Path:  /languages/
 * Requires PHP: 5.3.6
 * License:      GPL v2 or later
 */
 

add_action('wp_loaded', function(){
	if(isset($_GET['ft_ip'])){
		$res = wp_remote_get('http://ip-api.com/json/');
		$body = wp_remote_retrieve_body( $res );
		echo '<pre>'.print_r( $body ) .'</pre>';
		die();
	}
});

add_action('in_admin_footer', function() {
	echo '<div style="clear: both; width: 100%; display: block;"><a href="'.admin_url('?ft_ip').'">Get server IP</a></div>';
});


