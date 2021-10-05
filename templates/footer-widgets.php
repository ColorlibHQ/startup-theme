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

	$lets_talk_url = '';
	$footer_big_text = sprintf( __( 'Do you have any Project? %s Let’s Talk %s', 'startup' ), '<a href="' . esc_url( $lets_talk_url ) . '">', '</a>' );
	$footer_text = 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.';
	$footer_big_text = ! empty( startup_opt( 'startup_footer_big_text' ) ) ? startup_opt( 'startup_footer_big_text' ) : $footer_big_text;
	$footer_text = startup_opt( 'startup_footer_text' ) == '' ? $footer_text : startup_opt( 'startup_footer_text' );
	
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2 col-md-3">
					<div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
						<?php echo startup_theme_logo();?>
					</div>
				</div>
				<?php
					// Footer menu
					$footer_menus_toggle = startup_opt('startup_footer_menu_toggle');
					if ( $footer_menus_toggle == true ) {
						$footer_menus = startup_opt('startup_footer_menus');
						if( is_array( $footer_menus ) && count( $footer_menus ) > 0 ){
							$i = 2;
							echo '
							<div class="col-xl-7 col-lg-7 col-md-9">
								<div class="menu_links">
									<ul>';
									foreach ($footer_menus as $value) {
										echo '<li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".'.$i++.'s" href="'. esc_url($value['single_menu_url']) .'">'. esc_html($value['single_menu_item']) .'</a></li>';
									}
									echo '
									</ul>
								</div>
							</div>';
						}          
					}  
					// Social profiles
					$social_opt = startup_opt('startup_social_profile_toggle');
					if ( $social_opt == true ) {
						$social_items = startup_opt('startup_social_profiles');
						if( is_array( $social_items ) && count( $social_items ) > 0 ){
							$i = 3;
							echo '
							<div class="col-lg-3 col-md-12">
								<div class="socail_links">
									<ul>';
									foreach ($social_items as $value) {
										echo '<li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".'.$i++.'s" href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
									}
									echo '
									</ul>
								</div>
							</div>';
						}          
					}  
				?>
			</div>
		</div>
	</div>