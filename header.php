<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DVPrintplan
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="loader-wrap">
	<div class="preloader">
		<div class="preloader-close">Preloader Close</div>
		<div id="handle-preloader" class="handle-preloader">
			<div class="animation-preloader text-center">
				<button class="btn common-btn" type="button" disabled>
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
				Loading...
				</button>
			</div>  
		</div>
	</div>
</div>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dvprintplan' ); ?></a>

<header id="masthead" class="main-header header-light-bg pt-3 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg justify-content-between">
					<div class="site-branding">
						<?php
							if(!get_custom_logo()){
								if ( is_front_page() && is_home() ) :
									?>
									<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
									<?php
									else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
								endif;
							}else{
								the_custom_logo();
							}
						?>
					</div><!-- .site-branding -->
					<div class="navigation-wrap">
						<div class="btn-toggle"></div>
						<?php
							$primary_menu = wp_nav_menu(array(
									'theme_location' 	=> 'primary-menu',
									'container'     	=> 'div',
									'container_class' 	=> 'collapse navbar-collapse justify-content-end',
									'container_id' 		=> 'navbarNavDropdown',
									'menu_id' 			=> 'primary-menu',
									'menu_class' 		=> 'navbar-nav',
									'echo' 				=> false,
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    								'walker'          => new WP_Bootstrap_Navwalker(),
								)
							);
							$primary_menu = str_replace('<a', '<a class="nav-link" ', $primary_menu);
							echo $primary_menu;
						?>
					</div><!-- .navigation-wrap -->
					<div class="topbutton-wrap">
						<a href="#" class="btn common-btn d-inline-block">MESSAGE</a>
						<a href="tel:123456789" class="btn common-btn common-btn-color d-inline-block">CALL ME</a>
					</div><!-- .topbutton-wrap -->
				</nav>
			</div>
		</div>
	</div>
</header><!-- #masthead -->