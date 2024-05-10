<?php
global $post;
?>
<section class="blog-grid sec-pad-2">
	<div class="auto-container">
		<div class="row clearfix">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog-layout/blog-grid-content' );
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
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
</section>
