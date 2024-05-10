<?php
/**
 * Template part for displaying posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resox
 */

$blog_single_social      = resox_get_options( 'blog_single_social' );
$single_post_thumb_class = 'no-single-post-thumb';
if ( has_post_thumbnail() ) :
	$single_post_thumb_class = '';
endif;
	$the_title_content    = get_the_title();
	$the_title_class_have = 'have-title-post';
if ( $the_title_content != '' ) :
	$the_title_class_have = '';
endif;
?>
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
	<div class="inner-box">
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
				the_title( '<h2>', '</h2>' );
				the_content();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">',
						'after'  => '</div>',
					)
				);
				?>
		</div>
	</div>
</div>
<?php if ( has_tag() != '' || $blog_single_social == '1' ) : ?>
<div class="post-share-option clearfix">
	<?php if ( has_tag() != '' ) : ?>
	<ul class="tags pull-left">
		<li><h4><?php esc_html_e( 'Tags:', 'resox' ); ?></h4></li>
		<li><?php resox_tag_list(); ?></li>
	</ul>
		<?php
	endif;
	if ( $blog_single_social == '1' ) :
		do_action( 'resox_blog_social_ready' );
	endif;
	?>
</div>
	<?php
endif;
	do_action( 'resox_authore_box_ready' );

	// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
