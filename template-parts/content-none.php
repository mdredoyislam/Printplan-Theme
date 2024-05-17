<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dvprintplan
 */

?>

<section class="no-results not-found ri-fat-not-found">

	<div class="page-content sidebar news-block-one ">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dvprintplan' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="no-found-text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dvprintplan' ); ?></p>
			<div class="nothing-found-search">
			<?php
				get_search_form();
			?>
			</div>
			<?php
		else :
			?>

			<p class="no-found-text"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dvprintplan' ); ?></p>
			<div class="nothing-found-search">
			<?php
				get_search_form();
			?>
			</div>
			<?php
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

