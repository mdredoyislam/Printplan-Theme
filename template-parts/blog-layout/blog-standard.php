<?php
if ( is_active_sidebar( 'sidebar-1' ) ) :
	$blog_post_list_class = 'col-lg-8';
	else :
		$blog_post_list_class = 'col-lg-12';
	endif;
	?>
<section class="blog-standard sidebar-page-container sec-pad-2">
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
