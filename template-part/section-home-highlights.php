<?php
$args_page = array(
    'post_type' => 'page',
    'page_id' => 1321,
);
$parent_page = new WP_Query($args_page);
$no_h = 1;
if ($parent_page->have_posts()) :
    while ($parent_page->have_posts()) : $parent_page->the_post();

        ?>
        <div class="m-section main-wrapper-boxed">

            <div class="nav-section-title">
                <h2 id="highlights" class="m-margin-bottom-0">
                </h2>
            </div>

            <div class="theme-container theme-highlights">
                <div class="m-section m-section-parallax"
                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg_cover_highlight.jpg);  background-position-y: 76%;">
                    <div class="mountain-highlight"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_highlight.svg">
                    </div>
                    <div style="background: rgba(0, 0, 0, 0.1)" class="parallax-overlay"></div>


                    <div class="container m-padding-top-90 m-padding-bottom-40">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-wrapper">
                                    <div class="sub-section">
                                        <div class="nav-sub-section-title">
                                            <div class="m-padding-bottom-20">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <h3 class="m-font-museo-100 m-text-white h1">Best of 2016</h3>
                                                    </div>
                                                    <div class="pull-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row-same-height">
                                <div class="col-md-8 col-xs-height col-middle">
                                    <p class="lead-16 m-margin-bottom-0 about-left-container">
                                        The world is gearing up for action on climate change and sustainable
                                        development. In
                                        2016, CIFOR research showed how putting landscapes and forests at the fore can
                                        promote integrated action with better outcomes for human well-being, equity and
                                        the
                                        environment.
                                    </p>
                                </div>
                                <div class="col-md-4 col-xs-height col-middle">
                                   <div class="text-center">
                                       <a href="http://www.cifor.org/best-of-2016/" target="_blank"
                                          class="btn btn-primary btn-outline-inverse m-uppercase m-font-museo-sans-500">
                                           Read more <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                   </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php /*
<div class="m-section main-wrapper-boxed">
    <div class="nav-section-title">
        <h2 id="highlights" class="m-margin-bottom-0">
        </h2>
    </div>
    <div class="theme-container theme-highlights m-padding-bottom-50">
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
                                                    <h3 class="m-font-museo-100 m-text-white h1" id="highlights"><?php echo get_the_title();?></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <?php
                                                    // function.php => sharing_action()
                                                    sharing_section();
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
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover9.jpg);">
                <div style="background: rgba(55, 122, 122, 0.7)" class="parallax-overlay"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <?php the_content();?>
                        <div class="theme-feature">
                            <div class="featured-stories tf-box m-section-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover_highlight.jpg);">
                                <a href="#" class="fs-overlay-container">
                                    <div class="fs-overlay">
                                        <h5>Best of 2016</h5>
                                        <h4 class="fs-title">Putting Landscapes and Forests First</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*/ ?>
        <?php
    endwhile;
endif;
wp_reset_query();
?>