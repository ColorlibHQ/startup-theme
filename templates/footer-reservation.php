<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Startup
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$startup_reservation_title     = !empty( startup_opt( 'startup_reservation_title' ) ) ? startup_opt( 'startup_reservation_title' ) : '';
	$startup_reservation_sub_title = !empty( startup_opt( 'startup_reservation_sub_title' ) ) ? startup_opt( 'startup_reservation_sub_title' ) : '';
	$startup_reservation_btn_text  = !empty( startup_opt( 'startup_reservation_btn_text' ) ) ? startup_opt( 'startup_reservation_btn_text' ) : '';
	$startup_reservation_btn_url	  = !empty( startup_opt( 'startup_reservation_btn_url' ) ) ? startup_opt( 'startup_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $startup_reservation_title )?></h3>
			<p><?php echo esc_html( $startup_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $startup_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $startup_reservation_btn_text )?></a>
		</div>
	</div>