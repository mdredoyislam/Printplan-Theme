<?php
/**
 * Template part for displaying posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dvprintplan
 */

//$blog_single_social      = dvprintplan_get_options( 'blog_single_social' );
$blog_single_social      = 1;
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
				<?php //the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
				<img class="img-fulid" src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="" srcset="">
			</figure>
		<?php endif; ?>
		<div class="lower-content">
			<ul class="nav post-info mb-10 clearfix">
				<li><i class="far fa-user-circle"></i><?php the_author(); ?></li>
				<li><i class="far fa-comments"></i><?php comments_popup_link(__('No Comment', 'dvprintplan'),__('1 Comment', 'dvprintplan'),__('% Comments','dvprintplan'),'',__('omments are off for this post','dvprintplan')); ?></li>
				<p>
				<?php if ( ! has_post_thumbnail() ) : ?>
					
					<li><i class="far fa-clock"></i><?php time(); ?></li>
				<?php endif; ?>
			</ul>
				<?php
				the_title( '<h2 class="mb-20">', '</h2>' );
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
		<li><h4><?php esc_html_e( 'Tags:', 'dvprintplan' ); ?></h4></li>
		<li><?php //dvprintplan_tag_list(); ?></li>
	</ul>
		<?php
	endif;
	if ( $blog_single_social == '1' ) :
		do_action( 'dvprintplan_blog_social_ready' );
	endif;
	?>
</div>
	<?php
endif;
	do_action( 'dvprintplan_authore_box_ready' );

	// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
