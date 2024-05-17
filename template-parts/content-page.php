<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dvprintplan
 */

?>

<div class="page-content">
<?php the_content(); ?>
<?php
	wp_link_pages(
		array(
			'before' => '<div class="page-links">',
			'after'  => '</div>',
		)
	);
	?>
</div>
<?php
	// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;


