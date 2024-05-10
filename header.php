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
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dvprintplan' ); ?></a>
<header id="masthead" class="site-header header-light-bg pt-3 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg justify-content-between">
					<div class="site-branding">
						<?php
							if(!get_custom_logo()){
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
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
