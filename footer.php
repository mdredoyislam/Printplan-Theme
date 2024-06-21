<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DVPrintplan
 */
?>
<?php
	get_template_part( 'components/footer/footer' );
    do_action( 'dvprintplan_back_to_top_ready' ); 
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
