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
<header class="main-header style-one">
	<?php if ( $header_style == '2' ) : ?>
		<?php get_template_part( 'components/header/header-top/header-top-two' ); ?>
	<?php else : ?>
		<?php get_template_part( 'components/header/header-top/header-top-one' ); ?>
	<?php endif; ?>
	<div class="header-upper">
		<div class="auto-container">
			<div class="upper-inner clearfix">
				<?php do_action( 'resox_header_logo_ready' ); ?>
				<ul class="upper-info pull-right clearfix">
					<?php if ( $header_top_bar_phone ) : ?>
					<li>
						<i class="flaticon-telephone"></i>
						<p><?php esc_html_e( 'Call us anytime', 'resox' ); ?></p>
						<h5><a href="tel:<?php echo esc_attr( $header_top_bar_phone ); ?>"><?php echo esc_html( $header_top_bar_phone ); ?></a></h5>
					</li>
					<?php endif; ?>
					<?php if ( $header_top_bar_email ) : ?>
					<li>
						<i class="flaticon-email"></i>
						<p><?php esc_html_e( 'Write a mail', 'resox' ); ?></p>
						<h5><a href="mailto:<?php echo esc_attr( $header_top_bar_email ); ?>"><?php echo esc_html( $header_top_bar_email ); ?></a></h5>
					</li>
					<?php endif; ?>
					<?php if ( $header_top_bar_appointment_text && $header_top_bar_appointment_url ) : ?>
					<li class="btn-box">
						<a href="<?php echo esc_url( $header_top_bar_appointment_url ); ?>" class="theme-btn-one"><?php echo esc_html( $header_top_bar_appointment_text ); ?></a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="header-lower">
		<div class="auto-container">
			<div class="outer-box">
				<div class="menu-area clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler">
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
					</div>
					<?php do_action( 'resox_header_menu_ready' ); ?>
					<?php if ( $header_top_bar_social ) : ?>
					<ul class="social-links pull-right clearfix">
						<?php echo wp_kses( $header_top_bar_social, 'resox_kses' ); ?>
					</ul>
					<?php endif; ?>
				</div>
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
					<?php if ( $header_top_bar_social ) : ?>
					<ul class="social-links pull-right clearfix">
						<?php echo wp_kses( $header_top_bar_social, 'resox_kses' ); ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</header>
