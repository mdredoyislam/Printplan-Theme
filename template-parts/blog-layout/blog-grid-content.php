<?php
$post_thumb_class = 'no-post-thumb';
if ( has_post_thumbnail() ) :
	$post_thumb_class = '';
	endif;
	$is_sticky_class = '';
if ( is_sticky() ) :
	$is_sticky_class = 'sticky_post_class';
	endif;
	$blog_grid_date = resox_get_options( 'blog_grid_date' );
?>
<div class="col-lg-4 col-md-6 col-sm-12 news-block">
	<div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
		<div class="inner-box">
			<figure class="image-box">
				<?php the_post_thumbnail( 'resox-blog-grid' ); ?>
				<span class="post-date"><?php resox_posted_on(); ?></span>
			</figure>
			<div class="lower-content">
				<ul class="post-info clearfix">
					<li><i class="far fa-user-circle"></i><?php resox_posted_by(); ?></li>
					<li><i class="far fa-comments"></i><?php resox_comments_count(); ?></li>
				</ul>
				<?php
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				?>
				<p>
				<?php
				$content = substr( get_the_excerpt(), 0, 60 );
				echo esc_html( $content . '.' );
				?>
				</p>
				<div class="link"><a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fas fa-chevron-circle-right"></i><?php esc_html_e( 'Read More', 'resox' ); ?></a></div>
			</div>
		</div>
	</div>
</div>
