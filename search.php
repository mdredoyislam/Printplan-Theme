<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package DVPrintplan
 */

get_header();

if ( is_active_sidebar( 'sidebar-1' ) ) :
	$blog_post_list_class = 'col-lg-8';
	else :
		$blog_post_list_class = 'col-lg-12';
	endif;
	//$blog_list_base_css   = dvprintplan_get_options( 'blog_list_base_css' );
	$blog_list_base_css   = 1;
	$blog_list_base_class = 'base-blog-list';
	if ( $blog_list_base_css == 1 ) :
		$blog_list_base_class = '';
	endif;
	$blog_breadcrumb_class  = 'blog-breadcrumb-active';
	//$blog_breadcrumb_switch = dvprintplan_get_options( 'blog_breadcrumb_switch' );
	$blog_breadcrumb_switch = 1;
	if ( $blog_breadcrumb_switch == 1 ) :
		$blog_breadcrumb_class = '';
	endif;
	?>
<section class="blog-standard sidebar-page-container sec-pad-2 search-page-area-main <?php echo esc_attr( $blog_breadcrumb_class ); ?>">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="<?php echo esc_attr( $blog_post_list_class ); ?> col-md-12 col-sm-12 content-side">
				<div class="blog-standard-content">
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
