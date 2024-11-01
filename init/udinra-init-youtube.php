<?php


function udinra_youtube_function( $udinra_youtube_atts ) {

    $udinra_youtube_parameters = shortcode_atts( array(
									'channel' => 'EshaUpadhyay',
									'channelid' => '',
									'layout' => 'default',
									'count' => 'default',
									'theme' => 'default',
									'style' => 'UdinraYouTubeAqua',
									'header' => '',
									'body' => ''									
									), $udinra_youtube_atts );
		$create_youtube_html = '<div class="' . $udinra_youtube_parameters["style"] . '">';
		if($udinra_youtube_parameters["header"] != '' || !ctype_space($udinra_youtube_parameters["header"])) {
			$create_youtube_html .= '<h3>' . $udinra_youtube_parameters["header"] . '</h3><hr />';
		}	
		if($udinra_youtube_parameters["body"] != '' || !ctype_space($udinra_youtube_parameters["body"])) {
			$create_youtube_html .= '<p>' . $udinra_youtube_parameters["body"] . '</p>';
		}														
		if($udinra_youtube_parameters["channelid"] == '' || ctype_space($udinra_youtube_parameters["channelid"])) {
			$create_youtube_button = $create_youtube_html . '<div class="g-ytsubscribe" data-channel="' . $udinra_youtube_parameters["channel"] . 
									'" layout="' . $udinra_youtube_parameters["layout"] .
									'" count="' . $udinra_youtube_parameters["count"] .
									'" ></div></div>';
		}
		else {
			$create_youtube_button = $create_youtube_html . '<div class="g-ytsubscribe" data-channelid="' . $udinra_youtube_parameters["channelid"] . 
									'" layout="' . $udinra_youtube_parameters["layout"] .
									'" count="' . $udinra_youtube_parameters["count"] .
									'" ></div></div>';
		}
							 
		$return_shortcode_value = $create_youtube_button;
		udinra_youtube_script();
		udinra_youtube_css();
		return $return_shortcode_value;
}

function udinra_youtube_script() {
	wp_enqueue_script( 'udinra-youtube-src', 'https://apis.google.com/js/platform.js',NULL,NULL, true );
}

function udinra_youtube_css() {
	wp_enqueue_style( 'udinra-youtube-css', plugins_url( 'css/color.css',dirname( __FILE__ )) );
}
	
add_shortcode( 'udinra_youtube', 'udinra_youtube_function' );

?>