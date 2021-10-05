<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'startup_preloader', 'startup_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'startup_header', 'startup_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'startup_footer', 'startup_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'startup_wrp_start', 'startup_wrp_start_cb', 10 );
	add_action( 'startup_wrp_end', 'startup_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'startup_blog_col_start', 'startup_blog_col_start_cb', 10 );
	add_action( 'startup_blog_col_end', 'startup_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'startup_blog_posts_thumb', 'startup_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'startup_blog_details_wrap_start', 'startup_blog_details_wrap_start_cb', 10 );
	add_action( 'startup_blog_details_wrap_end', 'startup_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'startup_blog_posts_title', 'startup_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'startup_blog_posts_meta', 'startup_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'startup_blog_posts_excerpt', 'startup_blog_posts_excerpt_cb', 10 );
	// add_action( 'startup_blog_posts_excerpt', 'startup_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'startup_blog_posts_info_link', 'startup_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'startup_blog_posts_content', 'startup_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'startup_blog_posts_share', 'startup_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'startup_blog_sidebar', 'startup_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'startup_blog_single_meta', 'startup_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'startup_page_content', 'startup_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'startup_fof', 'startup_fof_cb', 10 );

	

?>