<?php
$header_style = get_query_var( 'header_type' );
if ( ! $header_style ) {
	$header_style = resox_get_options( 'header_menu_style' );

}

$theme_base_css = resox_get_options( 'theme_base_css' );
if ( ! $theme_base_css ) {
	$header_style = '2';
} else {
	$header_style = $header_style;

}
?>


<?php if ( $header_style == '3' ) : ?>
	<?php get_template_part( 'components/header/header-style/header-style-elementor' ); ?>
<?php elseif ( $header_style == '2' ) : ?>
	<?php get_template_part( 'components/header/header-style/header-style-two' ); ?>
<?php else : ?>
	<?php get_template_part( 'components/header/header-style/header-style-one' ); ?>
	<?php
endif;
