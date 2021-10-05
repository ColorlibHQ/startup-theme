/**
 * Notice for Elementor
 *
 * @package Startup
 */

/* global startupElementorNotice */

jQuery(document).ready(
	function () {

		var style = '<style>.startup-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.startup-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.startup-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.startup-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.startup-elementor-notice-buttons{border-top:1px solid #e6e9ec}.startup-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.startup-elementor-notice-buttons>a.startup-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.startup-elementor-notice-buttons>a.startup-disable-default-styles{color:#9b0a46}</style>';

		var dialog = style + '<div class="startup-disable-elementor-styling">' +
			'<div class="startup-elementor-notice-wrapper">' +
			'<div class="startup-elementor-notice-header">Startup supports default styling for Elementor widgets</div>' +
			'<div class="startup-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
			'<div class="startup-elementor-notice-buttons">' +
			'<a href="#" class="startup-do-nothing" data-reply="no">No</a>' +
			'<a href="#" class="startup-disable-default-styles" data-reply="yes">Yes</a>' +
			'</div>' +
			'</div>' +
			'</div>';

		jQuery('body').prepend(dialog);
		jQuery('.startup-elementor-notice-buttons > a').on(
			'click', function () {

				var reply = jQuery(this).data('reply');

				jQuery.ajax(
					{
						url: startupElementorNotice.ajaxurl,
						data: {
							reply: reply,
							nonce: startupElementorNotice.nonce,
							action: 'elementor_desiable_default_style'
						},
						type: 'post',
						success: function () {

							if (reply === 'yes') {
								parent.location.reload();
							} else {
								jQuery('.startup-disable-elementor-styling').fadeOut(500, function () { jQuery(this).remove(); });
							}
						}
					}
				);
			}
		);
	}
);
