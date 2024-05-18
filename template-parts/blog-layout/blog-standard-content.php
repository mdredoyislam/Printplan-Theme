<div class="news-block-one">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php //$blogShorttext = esc_html__( get_the_content() ); echo wp_trim_words( $blogShorttext, 50, '...' ); ?>
		<div class="inner-box mb-50">
				<figure class="image-box">
					<?php the_post_thumbnail(); ?>
				</figure>
			<div class="lower-content">
				<ul class="post-info nav clearfix">
					<li><a href="<?php the_author_meta('url'); ?>"><i class="fas fa-user-circle"></i><?php the_author(); ?></a></li>
					<li><a href="#"><i class="fas fa-comment"></i><?php echo get_comments_number(); ?> Comments</a></li>
					<li><a href="<?php the_permalink(); ?>"><i class="fas fa-folder"></i><?php the_category('name'); ?></a></li>
					<li><a href="<?php the_permalink(); ?>"><i class="fas fa-calendar-alt"></i><?php echo get_the_date('d M Y'); ?></a></li>
					<?php if ( ! has_post_thumbnail() ) : ?>
						<li><i class="far fa-clock"></i><?php the_date(''); ?></li>
					<?php endif; ?>
				</ul>
				<?php
					the_title( '<h2 class="box-title mb-20 mt-20"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
