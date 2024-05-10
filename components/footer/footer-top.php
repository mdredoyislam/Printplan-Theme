<?php
$footer_left_widget_elementor = resox_get_options( 'footer_left_widget_elementor' );
if ( class_exists( '\\Elementor\\Plugin' ) ) {
	if ( is_array( $footer_left_widget_elementor ) && ! empty( $footer_left_widget_elementor ) ) :
		$pluginElementor = \Elementor\Plugin::instance();
		foreach ( $footer_left_widget_elementor as $single_value ) {
			$resox_all_save_element = $pluginElementor->frontend->get_builder_content( $single_value );
			echo do_shortcode( $resox_all_save_element );
		}
	endif;
}
