<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resox
 */

get_header();
	if ( is_active_sidebar( 'sidebar-1' ) ) :
	$blog_post_list_class = 'col-lg-8';
	else :
		$blog_post_list_class = 'col-lg-12';
	endif;
	get_template_part( 'template-parts/tpl-breadcrumbs' );
?>
<section class="blog-standard sidebar-page-container pt-100 pb-100">
	<div class="container">
		<div class="row clearfix">
			<div class="<?php echo esc_attr( $blog_post_list_class ); ?> col-md-12 col-sm-12 content-side">
				<div class="blog-standard-content pr-35">
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/blog-layout/blog-standard-content' );

						endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					<?php if ( get_the_posts_pagination() ) : ?>
						<div class="pagination-wrapper">
							<?php
								the_posts_pagination(
									array(
										'mid_size'  => 2,
										'prev_text' => '<span class="far fa-long-arrow-left"></span>',
										'next_text' => '<span class="far fa-long-arrow-right"></span>',
									)
								);
							?>
						</div>
					<?php endif; ?>

				</div>
			</div>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
					<div class="sidebar default-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php
get_footer();
