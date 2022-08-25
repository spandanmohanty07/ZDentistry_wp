<?php
/**
 * Custom header
 */

function dental_insight_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'dental_insight_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 100,
		'wp-head-callback'       => 'dental_insight_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'dental_insight_custom_header_setup' );

if ( ! function_exists( 'dental_insight_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see dental_insight_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'dental_insight_header_style' );
function dental_insight_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'dental-insight-style', $custom_css );
	endif;
}
endif;