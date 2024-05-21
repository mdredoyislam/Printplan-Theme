<?php
	$header_btn1_text = printplan_get_options( 'header_btn1_text' );
	$header_btn1_url  = printplan_get_options( 'header_btn1_url' );
	$header_btn2_text = printplan_get_options( 'header_btn2_text' );
	$header_btn2_url  = printplan_get_options( 'header_btn2_url' );
?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dvprintplan' ); ?></a>

<header id="masthead" class="main-header header-light-bg pt-3 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg justify-content-between">
					<div class="site-branding">
					<?php do_action( 'dvprintplan_header_logo_ready' ); ?>
					</div><!-- .site-branding -->
					<div class="navigation-wrap">
						<div class="mobile-nav-toggler">
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
						</div>
						<?php
							$primary_menu = wp_nav_menu(array(
									'theme_location' 	=> 'primary-menu',
									'container'     	=> 'div',
									'container_class' 	=> 'main-menu collapse navbar-collapse justify-content-end',
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
						<?php if ( $header_btn1_text && $header_btn1_url ) : ?>
							<a href="<?php echo esc_url( $header_btn1_url ); ?>" class="btn common-btn d-inline-block"><?php echo esc_html( $header_btn1_text ); ?></a>
						<?php endif; ?>
						<?php if ( $header_btn2_text && $header_btn2_url ) : ?>
							<a href="<?php echo esc_url( $header_btn2_url ); ?>" class="btn common-btn common-btn-color d-inline-block"><?php echo esc_html( $header_btn2_text ); ?></a>
						<?php endif; ?>
					</div><!-- .topbutton-wrap -->
				</nav>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
