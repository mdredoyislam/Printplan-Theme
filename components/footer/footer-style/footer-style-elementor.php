<?php
$footer_widget_elementor = printplan_get_options( 'footer_widget_elementor' );
if ( class_exists( '\\Elementor\\Plugin' ) ) {
	if ( is_array( $footer_widget_elementor ) && ! empty( $footer_widget_elementor ) ) :
		$pluginElementor = \Elementor\Plugin::instance();
		foreach ( $footer_widget_elementor as $single_value ) {
			$dvprintplan_all_save_element = $pluginElementor->frontend->get_builder_content( $single_value );
			echo do_shortcode( $dvprintplan_all_save_element );
		}
	endif;
}