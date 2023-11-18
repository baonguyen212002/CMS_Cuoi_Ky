<?php
/**
 * Banner Section
 * 
 * @package JobScout
 */

$ed_banner         = get_theme_mod( 'ed_banner_section', true );
$banner_title      = get_theme_mod( 'banner_title', __( 'Aim Higher, Dream Bigger', 'jobscout' ) );
$banner_subtitle   = get_theme_mod( 'banner_subtitle', __( 'Each month, more than 7 million JobScout turn to website in their search for work, making over 160,000 applications every day.', 'jobscout' ) );
$find_a_job_link   = get_option( 'job_manager_jobs_page_id', 0 );
        
if( $ed_banner && has_custom_header() ){ ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@600&display=swap" rel="stylesheet">


    <div id="banner-section" class="site-banner<?php if( has_header_video() ) echo esc_attr( ' video-banner' ); ?>">
        <div class="item">
            <?php the_custom_header_markup(); ?>
            <div class="banner-caption">
                <div class="container module_body">
                    <div class="caption-inner ">
                        <?php 
                            if( $banner_title ) echo 
                            '<div class="module_banner_title"> 
                                <h2 class="title ">' 
                                    . esc_html( $banner_title ) . 
                                '</h2>
                            </div>';
                            if( $banner_subtitle ) echo '<div class="description module_banner_des">' . wpautop( wp_kses_post( $banner_subtitle ) ) . '</div>';
                        ?>
                        <div class="form-wrap module_banner_searchform">
                            <div class="search-filter-wrap">
                            <?php 
                                if ( jobscout_is_wp_job_manager_activated() ) { 
                                    if( $find_a_job_link ){
                                        get_template_part('template-parts/header','form');
                                    }else{
                                         get_search_form();
                                    }
                                }else{
                                    get_search_form();
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}