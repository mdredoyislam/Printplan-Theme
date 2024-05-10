<?php
$header_top_bar_email   = resox_get_options( 'header_top_bar_email' );
$header_top_bar_address = resox_get_options( 'header_top_bar_address' );
$header_top_bar_phone   = resox_get_options( 'header_top_bar_phone' );
$header_top_bar_social  = resox_get_options( 'header_top_bar_social' );
?>
<div class="header-top">
	<div class="auto-container">
		<div class="top-inner clearfix">
			<ul class="info pull-left">
				<?php if ( $header_top_bar_email ) : ?>
				<li><i class="flaticon-email"></i><a href="mailto:<?php echo esc_attr( $header_top_bar_email ); ?>"><?php echo esc_html( $header_top_bar_email ); ?></a></li>
				<?php endif; ?>
				<?php if ( $header_top_bar_phone ) : ?>
				<li><i class="flaticon-telephone"></i><a href="tel:<?php echo esc_attr( $header_top_bar_phone ); ?>"><?php echo esc_html( $header_top_bar_phone ); ?></a></li>
				<?php endif; ?>
				<?php if ( $header_top_bar_address ) : ?>
				<li><i class="flaticon-pin"></i><?php echo esc_html( $header_top_bar_address ); ?></li>
				<?php endif; ?>
			</ul>
			<?php if ( $header_top_bar_social ) : ?>
			<ul class="social-links pull-right clearfix">
				<?php echo wp_kses( $header_top_bar_social, 'resox_kses' ); ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</div>
