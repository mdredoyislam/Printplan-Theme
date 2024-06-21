<?php
$footer_style = get_query_var( 'footer_type' );
if ( ! $footer_style ) {
	$footer_style = printplan_get_options( 'footer_style' );

}

$theme_base_css = printplan_get_options( 'theme_base_css' );
if ( ! $theme_base_css ) {
	$footer_style = '1';
} else {
	$footer_style = $footer_style;

}
?>

<?php if ( $footer_style == '2' ) : ?>
	<?php get_template_part( 'components/footer/footer-style/footer-style-elementor' ); ?>
<?php else : ?>
	<?php get_template_part( 'components/footer/footer-style/theme-footer' ); ?>
<?php
endif;
