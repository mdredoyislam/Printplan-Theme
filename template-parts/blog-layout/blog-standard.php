<?php
	if ( is_active_sidebar( 'sidebar-1' ) ) :
	$blog_post_list_class = 'col-lg-8';
	else :
		$blog_post_list_class = 'col-lg-12';
	endif;
?>
<section class="blog-standard sidebar-page-container pt-100 pb-100">
	<div class="container">
		<div class="row clearfix">
			<div class="<?php echo esc_attr( $blog_post_list_class ); ?> col-md-12 col-sm-12 content-side">
				<div class="blog-standard-content pr-35">
					<?php
						$blog_posts = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' =>2,
							'order' => 'DESC',
							'offset' => 0,
							'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
							//'category_name' => $category_name,
						));
						if ( $blog_posts->have_posts() ) :
							while ( $blog_posts->have_posts() ) : $blog_posts->the_post();
								get_template_part( 'template-parts/blog-layout/blog-standard-content' );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						$big = 999999999; // need an unlikely integer
						echo paginate_links( 
							array(
								'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $blog_posts->max_num_pages,
								'mid_size'  => 2,
								'prev_text' => '<i class="fas fa-angle-left"></i>',
								'next_text' => '<i class="fas fa-angle-right"></i>',
							)
						);
						wp_reset_postdata();
					?>
					<?php if ( get_the_posts_pagination() ) : ?>
						<div class="pagination-wrapper">
							<?php
								the_posts_pagination(
									array(
										'mid_size'  => 2,
										'prev_text' => '<i class="far fa-angle-left"></i>',
										'next_text' => '<i class="far fa-angle-right"></i>',
									)
								);
							?>
						</div>
					<?php endif; ?>

				</div>
			</div>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
