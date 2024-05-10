<?php
function printplan_daynamic_styles() {
	ob_start();
	$printplan_daynamic_styles_array = array();

	if ( is_page() ) {
		$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		if ( $featured_img_url ) {
			$page_breadcrumb_bg            = '
                .page-breadcrumb {
                    background-image: url(' . esc_url( $featured_img_url ) . ');
                }
                ';
			$printplan_daynamic_styles_array[] = $page_breadcrumb_bg;
		}
	}
	$printplan_daynamic_styles_array_expolord = implode( ' ', $printplan_daynamic_styles_array );
	//$printplan_custom_css                     = ob_get_clean();
	return $printplan_daynamic_styles_array_expolord;
}
