<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package startup
 */

get_header();
$count = 0;
if( have_posts() ) {
    while( have_posts() ) : the_post();
    $project_url = ! empty( startup_meta( 'project_url') ) ? startup_meta( 'project_url') : '';
    $project_img = get_the_post_thumbnail( get_the_ID(), 'startup_startup_single_img_950x575', '', array( 'alt' => get_the_title() ) );
    ?>

    <div class="projects_details_area">
        <div class="container pos_up">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_img">
                        <?php
                            if ( $project_img ) {
                                echo $project_img;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="details_info">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-8 ">
                        <div class="single_details">
                            <?php the_content()?>
                        </div>
                        <div class="button_link">
                            <a href="<?php echo esc_url( $project_url )?>" class="boxed-btn3-line">Project Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <?php 
    endwhile;
}

// Footer============
get_footer();