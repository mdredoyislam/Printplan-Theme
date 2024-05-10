<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DVPrintplan
 */

?>

	<footer id="colophon" class="site-footer header-light-bg pt-4 pb-4">
		<div class="footer-top">
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
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<?php
								$primary_menu = wp_nav_menu(array(
										'theme_location' 	=> 'footer-menu',
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
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dvprintplan' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'dvprintplan' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'dvprintplan' ), 'dvprintplan', '<a href="https://www.desvert.com">DesVert</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
