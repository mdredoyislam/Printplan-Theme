<?php
class resox_Act {

	public function __construct() {
		$this->resox_register_action();
	}
	private function resox_register_action() {
		add_action( 'resox_search_popup_ready', array( 'resox_Int', 'resox_search_popup' ) );
		add_action( 'resox_preloader_ready', array( 'resox_Int', 'resox_preloader' ) );
		add_action( 'resox_back_to_top_ready', array( 'resox_Int', 'resox_back_to_top' ) );
		add_action( 'resox_header_logo_ready', array( 'resox_Int', 'resox_header_logo' ) );
		add_action( 'resox_header_menu_ready', array( 'resox_Int', 'resox_header_menu' ) );
		add_action( 'resox_mobile_menu_ready', array( 'resox_Int', 'resox_mobile_menu' ) );
		add_action( 'resox_authore_box_ready', array( 'resox_Int', 'resox_authore_box' ) );

		add_action( 'resox_breadcrumb_ready', array( 'resox_Int', 'resox_breadcrumb' ) );
		add_action( 'resox_blog_social_ready', array( 'resox_Int', 'resox_blog_social' ) );
	}
}
$resox_act = new resox_Act();
