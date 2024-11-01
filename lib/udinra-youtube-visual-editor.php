<?php
function udinra_youtube_button() {
	$udinra_youtube_cap = apply_filters( 'udinra_youtube_button_cap', 'edit_posts' );
	if ( current_user_can( $udinra_youtube_cap ) ) {
		add_filter( 'mce_external_plugins', 'udinra_youtube_subscribe_plugin' );
		add_filter( 'mce_buttons', 'udinra_youtube_register_button' );
	}
}
function udinra_youtube_subscribe_plugin( $plugin_array ) {
	$plugin_array['udinra_youtube_subscribe'] = plugins_url( 'js/udinra_youtube_button.js',dirname( __FILE__ ));
	return $plugin_array;
}
function udinra_youtube_register_button( $buttons ) {
	array_push( $buttons, "udinra_youtube_subscribe" );
	return $buttons;
}
?>