<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DVPrintplan
 */
get_header();

$page_single_col = '12';

$dvprintplan_theme_metabox_page_col = get_post_meta( get_the_ID(), 'dvprintplan_core_page_col', true );
if ( $dvprintplan_theme_metabox_page_col == 'on' ) :
	$page_single_col  = '8';
	$page_extra_class = 'service-details';
else :
	$page_extra_class = '8';
endif;
?>
<section class="blog-details sidebar-page-container sec-pad-2 <?php echo esc_attr( $page_extra_class ); ?>">
	<div class="auto-container">
		<div class="row clearfix">

			<?php
			if ( $dvprintplan_theme_metabox_page_col == 'on' ) :
				do_action( 'page_advance_content_left' );
				endif;
			?>
			<div class="col-lg-<?php echo esc_attr( $page_single_col ); ?> col-md-12 col-sm-12 content-side">
				<div class="blog-standard-content blog-details-content">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
					?>
				</div>
			</div>

			<?php
			if ( $dvprintplan_theme_metabox_page_col == 'on' ) :
				do_action( 'page_advance_content_right' );
			endif;
			?>

		</div>
	</div>
</section>
<?php
get_footer();

