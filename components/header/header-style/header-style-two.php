<?php
$header_style = get_query_var( 'header_type' );
if ( ! $header_style ) {
	$header_style = resox_get_options( 'header_top_bar_style' );
}

$theme_base_css = resox_get_options( 'theme_base_css' );
if ( ! $theme_base_css ) {
	$header_style = '2';
} else {
	if ( ! $header_style ) {
		$header_style = '1';
	}
}

$header_top_bar_appointment_text = resox_get_options( 'header_top_bar_appointment_text' );
$header_top_bar_appointment_url  = resox_get_options( 'header_top_bar_appointment_url' );

$header_top_bar_email  = resox_get_options( 'header_top_bar_email' );
$header_top_bar_phone  = resox_get_options( 'header_top_bar_phone' );
$header_top_bar_social = resox_get_options( 'header_top_bar_social' );
$sticky_header_on      = resox_get_options( 'sticky_header_on' );

?>
<header class="main-header style-two">
	<?php if ( $header_style == '2' ) : ?>
		<?php get_template_part( 'components/header/header-top/header-top-two' ); ?>
	<?php else : ?>
		<?php get_template_part( 'components/header/header-top/header-top-one' ); ?>
	<?php endif; ?>
<div class="header-lower">
	<div class="auto-container">
		<div class="outer-box clearfix">
			<?php do_action( 'resox_header_logo_ready' ); ?>
			<div class="menu-area pull-left clearfix">
				<?php do_action( 'resox_search_popup_ready' ); ?>
				<!--Mobile Navigation Toggler-->
				<div class="mobile-nav-toggler">
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
				</div>
				<?php do_action( 'resox_header_menu_ready' ); ?>
			</div>
			<?php if ( $header_top_bar_appointment_text && $header_top_bar_appointment_url ) : ?>
			<div class="btn-box pull-right"><a href="<?php echo esc_url( $header_top_bar_appointment_url ); ?>" class="theme-btn-one"><?php echo esc_html( $header_top_bar_appointment_text ); ?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php if ( $sticky_header_on ) : ?>
<div class="sticky-header">
	<div class="auto-container">
		<div class="outer-box">
			<div class="menu-area clearfix">
				<nav class="main-menu pull-left">
					<!--Keep This Empty / Menu will come through Javascript-->
				</nav>
				<?php if ( $header_top_bar_appointment_text && $header_top_bar_appointment_url ) : ?>
				<div class="btn-box pull-right"><a href="<?php echo esc_url( $header_top_bar_appointment_url ); ?>" class="theme-btn-one"><?php echo esc_html( $header_top_bar_appointment_text ); ?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
</header>
