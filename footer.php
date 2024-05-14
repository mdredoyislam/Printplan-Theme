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
<footer id="colophon" class="main-footer">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="site-branding">
                        <?php
                                if(!get_custom_logo()){
                                    if ( is_front_page() && is_home() ) :
                                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                                        else :
                                        ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                                    endif;
                                }else{
                                    the_custom_logo();
                                }
                            ?>
                    </div><!-- .site-branding -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="site-info">
                        <?php
                            $year = date('Y');
                            printf(esc_html__('Copyright %2$s %1$s Theme : %3$s Develop by %4$s.', 'dvprintplan'), $year, '&copy;' ,'dvprintplan', '<a href="https://www.desvert.com">DesVert</a>');
                        ?>
                    </div><!-- .site-info -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="social-links">
                        <ul class="nav justify-content-end">
                            <li><a href="#" class="btn common-btn"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="btn common-btn"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="btn common-btn"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="btn common-btn"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<button class="scroll-top scroll-to-target open" data-target="html">
<span class="fa fa-arrow-up"></span>
</button>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
