<?php
class Printplan_Scripts{

	public function __construct() {
		 add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}
	public function enqueue_scripts() {
		 wp_enqueue_script( 'popper', PRINTPLAN_JS_URL . 'popper.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'bootstrap', PRINTPLAN_JS_URL . 'bootstrap.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'owl', PRINTPLAN_JS_URL . 'owl.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'wow', PRINTPLAN_JS_URL . 'wow.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-fancybox', PRINTPLAN_JS_URL . 'jquery.fancybox.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'appear', PRINTPLAN_JS_URL . 'appear.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'scrollbar', PRINTPLAN_JS_URL . 'scrollbar.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'nav-tool.js', PRINTPLAN_JS_URL . 'nav-tool.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'resox-scripts', PRINTPLAN_JS_URL . 'script.js', array( 'jquery' ), time(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
$printplan_scripts = new Printplan_Scripts();
