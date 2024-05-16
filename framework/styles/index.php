<?php
class printplan_Style {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_style' ), 20 );
	}
	public function enqueue_style() {
		wp_enqueue_style( 'font-awesome-all', PRINTPLAN_CSS_URL . 'font-awesome-all.css', false, '1' );
		wp_enqueue_style( 'flaticon', PRINTPLAN_CSS_URL . 'flaticon.css', false, '1' );
		wp_enqueue_style( 'bootstrap', PRINTPLAN_CSS_URL . 'bootstrap.min.css', false, time() );
		wp_enqueue_style( 'animate', PRINTPLAN_CSS_URL . 'animate.css', false, '1' );
		wp_enqueue_style( 'owl-carousel', PRINTPLAN_CSS_URL . 'owl.carousel.min.css', false, '1' );
		wp_enqueue_style( 'owl-theme', PRINTPLAN_CSS_URL . 'owl.theme.default.min.css', false, '1' );
		wp_enqueue_style( 'fancybox', PRINTPLAN_CSS_URL . 'jquery.fancybox.min.css', false, time() );
		wp_enqueue_style( 'printplan-theme-global', PRINTPLAN_CSS_URL . 'global.css', false, time() );
		wp_enqueue_style( 'printplan-style', get_stylesheet_uri(), null, time() );
		wp_enqueue_style( 'printplan-theme-style', PRINTPLAN_CSS_URL . 'theme-style.css', false, time() );
		wp_enqueue_style( 'printplan-responsive', PRINTPLAN_CSS_URL . 'responsive.css', false, time() );
		if ( function_exists( 'printplan_daynamic_styles' ) ) {
			wp_add_inline_style( 'printplan-theme-style', printplan_daynamic_styles() );
		}
	}
}
$printplan_style = new printplan_Style();