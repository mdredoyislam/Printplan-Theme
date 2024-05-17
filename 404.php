<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DVPrintplan
 */

get_header();
?>


<section class="error-404 not-found">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="error-wrap text-center">
					<h1 class="error-title text-center mb-30"><?php esc_html_e( '4', 'dvprintplan' ); ?><span><?php esc_html_e( '0', 'dvprintplan' ); ?></span><?php esc_html_e( '4', 'dvprintplan' ); ?></h1>
					<h3 class="error-sub-title mb-10"><?php esc_html_e( 'Ooops, Page Not Found', 'dvprintplan' ); ?></h3>
					<p><?php esc_html_e( "We Can't Seem to find the page you're looking for.", "dvprintplan" ); ?></p>
					<a href="<?php echo esc_url(site_url('/')); ?>" class="btn common-btn common-btn-color mr-25"><i class="fas fa-home-alt"></i> <?php esc_html_e( "Back To Home", "dvprintplan" ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- .error-404 -->

<?php
get_footer();
