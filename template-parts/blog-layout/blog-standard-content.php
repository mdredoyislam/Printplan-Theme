<?php
	$post_thumb_class = 'no-post-thumb';
if ( has_post_thumbnail() ) :
	$post_thumb_class = '';
endif;
	$is_sticky_class = '';
if ( is_sticky() ) :
	$is_sticky_class = 'sticky-post-class';
endif;
	$the_title_content    = get_the_title();
	$the_title_class_have = 'have-title-post';
if ( $the_title_content != '' ) :
	$the_title_class_have = '';
endif;
?>
<div class="news-block-one  <?php echo esc_attr( $the_title_class_have . ' ' . $post_thumb_class . ' ' . $is_sticky_class ); ?> ">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inner-box">
		<?php
		if ( is_sticky() ) {
			echo '<div class="sticky_post_icon " title="' . esc_attr__( 'Sticky Post', 'resox' ) . '"><i class="fas fa-map-pin"></i></div>';
		}
		?>
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="image-box">
			<?php resox_post_thumbnail(); ?>
				<span class="post-date"><?php resox_posted_on(); ?></span>
			</figure>
		<?php endif; ?>
		<div class="lower-content">
			<ul class="post-info clearfix">
				<li><i class="far fa-user-circle"></i><?php resox_posted_by(); ?></li>
				<li><i class="far fa-comments"></i><?php resox_comments_count(); ?></li>
				<?php if ( ! has_post_thumbnail() ) : ?>
					<li><i class="far fa-clock"></i><?php resox_posted_on(); ?></li>
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
					<?php esc_html_e( 'Read More', 'resox' ); ?>
				</a>
			</div>
		</div>
	</div>
	</div>
</div>
