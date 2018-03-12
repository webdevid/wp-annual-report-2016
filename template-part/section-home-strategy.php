<?php
$args_page = array(
    'post_type'      => 'page',
    'page_id'    => 1323,
);
$parent_page = new WP_Query( $args_page );
$no_h=1;
if ( $parent_page->have_posts() ) :
    while ( $parent_page->have_posts() ) : $parent_page->the_post();

?>
<div class="m-section main-wrapper-boxed">
    <div class="nav-section-title">
        <h2 id="cifor-strategy" class="m-margin-bottom-0">
        </h2>
    </div>
    <div class="theme-container theme-cifor-strategy m-padding-bottom-10">
        <div class="home-container-no-grad">
            <div class="home-slide-text miombo-header theme-title">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-wrapper">
                                <div class="sub-section">
                                    <div class="nav-sub-section-title">
                                        <div class="m-padding-top-30 m-padding-bottom-60">
                                            <hr class="m-divider-solid-15">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <h3 class="m-font-museo-100 m-text-white h1"><?php the_title();?></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <?php
                                                            // function.php => sharing_action()
                                                            //sharing_section();
                                                            ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-section m-section-parallax m-padding-top-80 m-padding-bottom-80" data-stellar-vertical-offset="" data-stellar-background-ratio="0.9"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/load-2.gif'?>);" data-original="<?php echo get_template_directory_uri();?>/assets/images/bg_cover10.jpg">
                <div style="background: rgba(105, 189, 87, 0.72)" class="parallax-overlay"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <?php include( get_template_directory() . '/template-part/infographics/infographic-pillars.php'); ?>
                        <?php /*the_content();*/?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    endwhile;
endif;
wp_reset_query();
?>

<?php include( get_template_directory() . '/template-part/infographics/infographic-www.php'); ?>