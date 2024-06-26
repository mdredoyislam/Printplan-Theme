<?php
class printplan_Act {

	public function __construct() {
		$this->printplan_register_action();
	}
	private function printplan_register_action() {
		add_action( 'dvprintplan_preloader_ready', array( 'printplan_Int', 'printplan_preloader' ) );
		add_action( 'dvprintplan_back_to_top_ready', array( 'printplan_Int', 'printplan_back_to_top' ) );
		add_action( 'dvprintplan_header_logo_ready', array( 'printplan_Int', 'printplan_header_logo' ) );
		add_action( 'printplan_mobile_menu_ready', array( 'printplan_Int', 'printplan_mobile_menu' ) );
		add_action( 'printplan_authore_box_ready', array( 'printplan_Int', 'printplan_authore_box' ) );
		add_action( 'printplan_blog_social_ready', array( 'printplan_Int', 'printplan_blog_social' ) );
	}
}
$printplan_act = new printplan_Act();
