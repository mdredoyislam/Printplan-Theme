<?php
$header_top_bar_welcome = resox_get_options( 'header_top_bar_welcome' );
$header_top_bar_address = resox_get_options( 'header_top_bar_address' );
$header_top_bar_hours   = resox_get_options( 'header_top_bar_hours' );
?>
<div class="header-top">
	<div class="auto-container">
		<div class="top-inner clearfix">
		<?php if ( $header_top_bar_welcome ) : ?>
			<div class="text pull-left">
				<p><?php echo esc_html( $header_top_bar_welcome ); ?></p>
			</div>
		<?php endif; ?>
			<ul class="info pull-right">
				<?php if ( $header_top_bar_address ) : ?>
				<li><i class="flaticon-pin"></i><?php echo esc_html( $header_top_bar_address ); ?></li>
				<?php endif; ?>
				<?php if ( $header_top_bar_hours ) : ?>
				<li><i class="flaticon-alarm-clock"></i><?php echo esc_html( $header_top_bar_hours ); ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
