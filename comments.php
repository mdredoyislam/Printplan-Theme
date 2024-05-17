<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DVPrintplan
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		$comment_close = '';
		if ( ! comments_open() ) :
			$comment_close = 'comment-close';
		endif;
		?>
		<div id="comments-area" class="comments-area <?php echo esc_attr( $comment_close ); ?>">
		<div class="group-title mb-30">
			<h2>
				<?php
					$dvprintplan_comment_count = get_comments_number();
					if ( '1' === $dvprintplan_comment_count ) {
						printf(
						/* translators: 1: title. */
							esc_html__( 'One Comment', 'dvprintplan' )
						);
					} else {
						printf(
							esc_html( _nx( '%1$s Comment', '%1$s Comments ', $dvprintplan_comment_count, 'comments title', 'dvprintplan' ), 'dvprintplan' ),
							number_format_i18n( $dvprintplan_comment_count )
						);
					}
				?>
			</h2>
			<div class="dotted-box">
				<span class="dotted"></span>
				<span class="dotted"></span>
				<span class="dotted"></span>
			</div>
		</div>
		<?php
			the_comments_navigation();
		?>
			<div class="comment-box">
		<?php
			wp_list_comments(
				array(
					'style'      => 'div',
					'short_ping' => true,
				)
			);
		?>
			</div>
		<?php
			the_comments_navigation();
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'dvprintplan' ); ?></p>
				<?php
			endif;
			?>
			</div>
		<?php
	endif; // Check for have_comments().
?>
<?php
	if ( comments_open() ) :
?>

<div class="comments-form-area">

	<?php
		$user                = wp_get_current_user();
		$dvprintplan_user_identity = $user->display_name;
		$req                 = ''; //get_option( 'require_name_email' );
		$aria_req            = $req ? " aria-required='true'" : '';

		if ( is_user_logged_in() ) {
			$formargs = array(
				'class_form'           => 'comment-form default-form form-wrap',
				'id_submit'            => 'submit',
				'title_reply_before'   => '<div class="group-title mt-45"><h2>',
				'title_reply_after'    => '</h2></div>',
				'title_reply'          => esc_html__( 'Leave a Comment', 'dvprintplan' ),
				'title_reply_to'       => esc_html__( 'Leave a Comment to %s', 'dvprintplan' ),
				'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'dvprintplan' ),
				'label_submit'         => esc_html__( 'Submit now', 'dvprintplan' ),
				'comment_notes_before' => '<p class="email-not-publish">' .
				esc_html__( 'Your email address will not be published.', 'dvprintplan' ) . ( $req ? '<span class="required">*</span>' : '' ) .
				'</p>',
				'submit_button'        => '<button  class="btn common-btn common-btn-color" type="submit" name="%1$s" id="%2$s" class="%3$s theme-btn-one">%4$s</button>',
				'submit_field'         => '<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">%1$s %2$s</div></div>',
				'comment_field'        => '<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 form-group"><div class="form-group"><textarea class="form-control mb-20 mt-30" id="comment" rows="6" name="comment" placeholder="' . esc_attr__( 'Write your comment *', 'dvprintplan' ) . '"  >' .
				'</textarea></div></div>',
				'must_log_in'          => '<div>' .
				sprintf(
					wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'dvprintplan' ), array( 'a' => array( 'href' => array() ) ) ),
					wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
				) . '</div>',
				'logged_in_as'         => '<div class="logged-in-as">' .
				sprintf(
					wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">Log out?</a>', 'dvprintplan' ), array( 'a' => array( 'href' => array() ) ) ),
					esc_url( admin_url( 'profile.php' ) ),
					$dvprintplan_user_identity,
					wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ),
					esc_attr__( 'Log out of this account', 'dvprintplan' )
				) . '</div>',

				'comment_notes_after'  => '',
				'fields'               => apply_filters(
					'comment_form_default_fields',
					array(
						'author' =>
						'<div class="row clearfix"><div class="col-lg-6 col-md-6 col-sm-12 form-group">'
						. '<input id="author"  name="author" placeholder="' . esc_attr__( 'Your Name *', 'dvprintplan' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						'" size="30"' . $aria_req . ' /></div>',
						'email'  =>
						'<div class="col-lg-6 col-md-6 col-sm-12 form-group">'
						. '<input id="email" name="email" type="text"  placeholder="' . esc_attr__( 'Email address *', 'dvprintplan' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . ' /></div></div>',
					)
				),
			);
		}else {
			$formargs = array(
				'class_form'           => 'comment-form default-form form-wrap',
				'id_submit'            => 'submit',
				'title_reply_before'   => '<div class="group-title mt-45"><h2>',
				'title_reply_after'    => '</h2></div>',
				'title_reply'          => esc_html__( 'Leave a Comment', 'dvprintplan' ),
				'title_reply_to'       => esc_html__( 'Leave a Comment to %s', 'dvprintplan' ),
				'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'dvprintplan' ),
				'label_submit'         => esc_html__( 'Submit now', 'dvprintplan' ),
				'comment_notes_before' => '<p class="email-not-publish">' .
				esc_html__( 'Your email address will not be published.', 'dvprintplan' ) . ( $req ? '<span class="required">*</span>' : '' ) .
				'</p>',
				'submit_button'        => '<button  class="btn common-btn common-btn-color" type="submit" name="%1$s" id="%2$s" class="%3$s theme-btn-one">%4$s</button>',
				'submit_field'         => '<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">%1$s %2$s</div></div>',
				'comment_field'        => '<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 form-group"><div class="form-group"><textarea class="form-control mb-20" id="comment" rows="6" name="comment" placeholder="' . esc_attr__( 'Write your comment *', 'dvprintplan' ) . '"  >' .
				'</textarea></div></div>',
				'must_log_in'          => '<div>' .
				sprintf(
					wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'dvprintplan' ), array( 'a' => array( 'href' => array() ) ) ),
					wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
				) . '</div>',
				'logged_in_as'         => '<div class="logged-in-as">' .
				sprintf(
					wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">Log out?</a>', 'dvprintplan' ), array( 'a' => array( 'href' => array() ) ) ),
					esc_url( admin_url( 'profile.php' ) ),
					$dvprintplan_user_identity,
					wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ),
					esc_attr__( 'Log out of this account', 'dvprintplan' )
				) . '</div>',

				'comment_notes_after'  => '',
				'fields'               => apply_filters(
					'comment_form_default_fields',
					array(
						'author' =>
						'<div class="col-lg-6 col-md-6 col-sm-12 form-group">'
						. '<input id="author" class="form-control"  name="author" placeholder="' . esc_attr__( 'Your Name *', 'dvprintplan' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						'" size="30"' . $aria_req . ' /></div>',
						'email'  =>
						'<div class="col-lg-6 col-md-6 col-sm-12 form-group">'
						. '<input id="email" class="form-control" name="email" type="text"  placeholder="' . esc_attr__( 'Email address *', 'dvprintplan' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . ' /></div>',
					)
				),
			);
		}
		?>
		<?php
		comment_form( $formargs );
		?>
</div>
	<?php endif;?>


</div><!-- #comments -->
