<?php
/*
 * print css with cheking value is empty or not
 *
 */

function dvprintplan_get_custom_styles() {
	global $dvprintplan_options;
	$redix_opt_prefix = 'dvprintplan_';

	if ( ( isset( $dvprintplan_options[ $redix_opt_prefix . 'main_color' ] ) ) && ( ! empty( $dvprintplan_options[ $redix_opt_prefix . 'main_color' ] ) ) ) {

		$dvprintplan_main_color = $dvprintplan_options[ $redix_opt_prefix . 'main_color' ];

	} else {
		$dvprintplan_main_color = '';
	}

	if ( ( isset( $dvprintplan_options[ $redix_opt_prefix . 'secondary_color' ] ) ) && ( ! empty( $dvprintplan_options[ $redix_opt_prefix . 'secondary_color' ] ) ) ) {
		$dvprintplan_secondary_color = $dvprintplan_options[ $redix_opt_prefix . 'secondary_color' ];
	} else {
		$dvprintplan_secondary_color = '';
	}
	ob_start();
	if ( ( isset( $dvprintplan_options[ $redix_opt_prefix . 'main_color' ] ) ) && ( ! empty( $dvprintplan_options[ $redix_opt_prefix . 'main_color' ] ) ) ) {
?>

:root{
  --light: #ffffff;
  --primary-color:  <?php echo esc_attr( $dvprintplan_main_color ); ?>;
  --dark-color: #202020;
  --dark-light: #000000d9;
  --body-color: #525258;
  --light-color: <?php echo esc_attr( $dvprintplan_secondary_color ); ?>;
  --body-color: #525258;
  --global-bg: #E9E9E9;
  --primary-font: "Syne", sans-serif;
  --common-border: 1px solid #D9D9D9;
  --padding-btn: 16px 30px;
  --btn-border: 1px solid #202020;
  --transparent-bg: transparent;
  --common-transition : all linear .5s;
}

<?php
	}

	$dvprintplan_custom_css = ob_get_clean();

	return $dvprintplan_custom_css;
}

