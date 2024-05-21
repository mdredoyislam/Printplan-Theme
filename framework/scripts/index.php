<?php
class Printplan_Scripts{

	public function __construct() {
		 add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}
	public function enqueue_scripts() {
		wp_enqueue_script( 'navigation', PRINTPLAN_JS_URL . 'navigation.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'customizer', PRINTPLAN_JS_URL . 'customizer.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery', PRINTPLAN_JS_URL . 'jquery-3.2.1.slim.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'popper', PRINTPLAN_JS_URL . 'popper.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'bootstrap', PRINTPLAN_JS_URL . 'bootstrap.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'wow', PRINTPLAN_JS_URL . 'wow.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'owl', PRINTPLAN_JS_URL . 'owl.carousel.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'fancybox', PRINTPLAN_JS_URL . 'jquery.fancybox.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'counterup', PRINTPLAN_JS_URL . 'jquery.counterup.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'waypoints', PRINTPLAN_JS_URL . 'waypoints.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'imagesloaded', PRINTPLAN_JS_URL . 'imagesloaded.pkgd.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'font-awesome', PRINTPLAN_JS_URL . 'all.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'printplan-scripts', PRINTPLAN_JS_URL . 'script.js', array( 'jquery' ), time(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
$printplan_scripts = new Printplan_Scripts();
