<div class="news-block-one">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inner-box">
				<figure class="image-box">
					<?php the_post_thumbnail(); ?>
				</figure>
			<div class="lower-content">
				<ul class="post-info clearfix">
					<li><i class="far fa-user-circle"></i><?php the_author(); ?></li>
					<li><i class="far fa-comments"></i>Comments</li>
					<?php if ( ! has_post_thumbnail() ) : ?>
						<li><i class="far fa-clock"></i><?php the_date(''); ?></li>
					<?php endif; ?>
				</ul>
				<?php
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				<?php if ( ! empty( get_the_excerpt() ) ) : ?>
					<?php
					if ( get_option( 'rss_use_excerpt' ) ) {
						the_excerpt();
					} else {
						the_excerpt();
					}
					?>
				<?php endif; ?>
				<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">',
							'after'  => '</div>',
						)
					);
					?>
				<div class="link">
					<a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fas fa-chevron-circle-right"></i>
						<?php esc_html_e( 'Read More', 'dvprintplan' ); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
