<?php
/*
Plugin Name: Udinra YouTube Subscribe button
Plugin URI: https://udinra.com/downloads/youtube-subscribe-to-download-pro
Description: Cool stylish YouTube Subscribe button to increase your YouTube Subscription
Author: Udinra
Version: 1.0
Author URI: https://udinra.com
*/

function Udinra_YouTube() {
	$udinra_youtube_subscribe = '';

?>	
	<div class="wrap">
	<u><h1>Udinra YouTube Subscribe (Configuration)</h1></u><br /><br />
	<ul>
		<li>A new button is added in Visual Editor.</li>
		<li>You can create unlimited buttons using Visual Editor button.</li>
		<li>Also you can paste generated shortcode in Text Widget to have the buttons in sidebar.</li>
		<li>In case of any issues mail me at esha@udinra.com.</li>
	</ul>
	<a href="https://udinra.com/downloads/youtube-subscribe-to-download-pro"><u><b>Buy YouTube Subscribe to download Pro</b></u></a><br /><br />
	Visitors will be able to download file instantly if they subscribe to your YouTube Channel.<br />
	You can configure each and every button as per your requirement.<br />
	
	<iframe width="560" height="315" src="https://www.youtube.com/embed/8VNfnKN6u70" frameborder="0" allowfullscreen></iframe>
</div>

<?php
}

function udinra_youtube_subscribe_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra YouTube Subscribe', 'Udinra YouTube Subscribe', 'manage_options', basename(__FILE__), 'Udinra_YouTube');
	}
	udinra_youtube_button();
}

function udinra_youtube_admin_notice() {
		global $current_user ;
		$user_id = $current_user->ID;
		if ( ! get_user_meta($user_id, 'udinra_youtube_admin_notice') ) {
			echo '<div class="notice notice-info"><p>'; 
			printf(__('Buy Udinra YouTube Subscribe to download Pro for $6.99 only.PayPal - udinra@gmail.com | <a href="%1$s">Hide Notice</a>'), '?udinra_youtube_admin_ignore=0');
			echo "</p></div>";
		}
}

function udinra_youtube_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['udinra_youtube_admin_ignore']) && '0' == $_GET['udinra_youtube_admin_ignore'] ) {
		add_user_meta($user_id, 'udinra_youtube_admin_notice', 'true', true);
	}
}

include 'init/udinra-init-youtube.php';
include 'lib/udinra-youtube-visual-editor.php';
	
add_action('admin_menu','udinra_youtube_subscribe_admin');	
add_action('admin_notices', 'udinra_youtube_admin_notice');
add_action('admin_init', 'udinra_youtube_admin_ignore');

?>
