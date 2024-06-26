<?php
    $footer_copyright = printplan_get_options( 'footer_copyright' );
    $footer_link      = printplan_get_options( 'footer_link' );
?>
<footer id="colophon" class="main-footer">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="site-branding">
                    <?php do_action( 'dvprintplan_header_logo_ready' ); ?>
                    </div><!-- .site-branding -->
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <?php
                        $footer_menu = wp_nav_menu([
                            'theme_location' => 'footer-menu',
                            'container' => 'div',
                            'container_class' => 'justify-content-end',
                            'container_id' => 'footerNav',
                            'menu_id' => 'footer-menu',
                            'menu_class' => 'nav justify-content-end',
                            'echo' => false,
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ]);
                        $footer_menu = str_replace('<a', '<a class="nav-link" ', $footer_menu);
                        echo $footer_menu;
                    ?>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="site-info">
                        <?php
					        if ( $footer_copyright != '' ) :
						        echo wp_kses( $footer_copyright, 'dvprintplan_kses' );
						    else :
							    $year = date('Y');
                                printf(esc_html__('Copyright %2$s %1$s Theme : %3$s Develop by %4$s.', 'dvprintplan'), $year, '&copy;' ,'dvprintplan', '<a href="https://www.desvert.com">DesVert</a>');
						    endif;
						?>
                    </div><!-- .site-info -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="social-links">
                        <?php if ( $footer_link ) : ?>
                            <ul class="nav justify-content-end">
                                <?php echo $footer_link; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->