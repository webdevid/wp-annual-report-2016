<?php
$args_page = array(
    'post_type' => 'page',
    'page_id' => 1330,
);
$parent_page = new WP_Query($args_page);
$no_h = 1;
if ($parent_page->have_posts()) :
    while ($parent_page->have_posts()) : $parent_page->the_post();

        ?>
        <style>
            .new-head-block {
                position: relative
            }

            .new-head-block .m-section-parallax {
                position: absolute;
                height: 100%
            }

            .new-head-block .container {
                position: relative;
                z-index: 1;
                color: #fff;
                padding-top: 30px
            }

            .new-head-block .share-links a {
                border-bottom: 0px;
            }

            .width-50 {
                width: 50%
            }

            .table-cell {
                display: table-cell
            }

            .new-head-block-bottom {
                position: relative;
                z-index: 1
            }

            .new-head-block-bottom.new-head-block-bottom-green .row > div:last-child {
                border-left: 2px dotted #fff;
                padding-left: 30px;
            }

            .new-head-block-bottom.new-head-block-bottom-green {
                background: rgba(5, 61, 67, 0.76);
            }

            .new-head-block-bottom.new-head-block-bottom-green a {
                color: #fff;
            }

            .new-head-block-bottom.new-head-block-bottom-green p {
                color: #fff;
            }

            .new-head-block-bottom.new-head-block-bottom-green .more-on h3 {
                color: #7daca2
            }

            .new-head-block-bottom.new-head-block-bottom-green .more-on h3 span {
                color: #12ca72
            }

            .new-head-block-bottom.new-head-block-bottom-green .more-on {
                display: block;
                width: 100%;
            }

            .new-head-block-bottom.new-head-block-bottom-white {
                background: rgba(255, 255, 255, 0.85);
            }

            .new-head-block-bottom.new-head-block-bottom-white a {
                border-bottom: 1px solid #777;
                color: #777;
            }

            .new-head-block-bottom.new-head-block-bottom-white p {
                color: #777;
                line-height: 1.5;
            }

            .new-head-block-bottom.new-head-block-bottom-white .more-on h3 {
                color: #064e4f
            }

            .fta-text-wrapper-2 img {
                width: 90%;
            }

            @media all and (max-width: 1058px) {
                .new-head-block-bottom.new-head-block-bottom-green p {
                    font-size: 14px;
                    line-height: 1.9
                }
            }

            @media all and (max-width: 767px) {
                .new-head-block-bottom.new-head-block-bottom-green p {
                    font-size: 1.3em;
                }

                .new-head-block-bottom.new-head-block-bottom-green .row > div:last-child {
                    border-left: 0px;
                    padding-left: 15px;
                }
            }

            @media all and (max-width: 581px) {
                .new-head-block-bottom.new-head-block-bottom-green p {
                    font-size: 1em;
                }
            }

            @media all and (max-width: 496px) {
                .new-head-block-bottom.new-head-block-bottom-green p {
                    font-size: 0.8em;
                }
            }

        </style>
        <!-- Begin About section -->
        <div class="m-section main-wrapper-boxed">
            <div class="nav-section-title">
                <h2 id="about" class="m-margin-bottom-0">
                </h2>
            </div>

            <div class="new-head-block">
                <div class="m-section m-section-parallax m-padding-top-80 m-padding-bottom-80"
                     data-stellar-vertical-offset="" data-stellar-background-ratio="0.7"
                    <?php /*style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover7.jpg);">*/ ?>
                     style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/load-2.gif'?>);background-position: center center;" data-original="<?php echo get_template_directory_uri().'/assets/images/cifor-top.jpg';?>">
                    <div style="background: rgba(14, 50, 42, 0.5)" class="parallax-overlay"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <hr class="m-divider-solid-15">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h3 class="m-font-museo-100 m-text-white h1">About CIFOR</h3>
                                </div>
                                <div class="pull-right">

                                </div>
                            </div>

                            <div class="new-gender-desc m-padding-top-30">
                                <div class="footer-info-container m-margin-bottom-40">
                                    <div class="logo-footer logo-body">
                                        <img style="margin-top:2px"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/images/cifor-white.svg"
                                             alt="CIFOR">
                                    </div>

                                    <div class="text-footer body-copy">
                                        <p class="m-padding-top-10 m-margin-bottom-0">
                                            CIFOR advances human well-being, equity and environmental integrity by conducting innovative research, developing partners’ capacity, and actively engaging in dialogue with all stakeholders to inform policies and practices that affect forests and people. CIFOR is a CGIAR Research Center, and leads the CGIAR Research Program on Forests, Trees and Agroforestry (FTA). Our headquarters are in Bogor, Indonesia, with offices in Nairobi, Kenya, Yaounde, Cameroon, and Lima, Peru.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new-head-block-bottom new-head-block-bottom-green m-padding-top-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="fta-text-wrapper-2">
                                    <div class="table-cell width-50 vertical-top">
                                        <a href="http://foreststreesagroforestry.org/" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cifor-fta-01.svg" alt="CGIAR FTA">
                                        </a>
                                    </div>
                                    <div class="table-cell width-50 vertical-top">
                                        <p>
                                            CIFOR leads the CGIAR Research Program on Forests, Trees and Agroforestry
                                            (FTA)
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-margin-bottom-10 lead-14" style="margin-bottom: 5px !important;">
                                    CIFOR is currently a member of these CGIAR Research Programs:
                                </p>
                                <a href="https://ccafs.cgiar.org/" target="_blank">
                                    <img style="height: 47px;margin-right: 20px;"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/ccafs.svg" alt="CCAFS">
                                </a>
                                <a href="http://pim.cgiar.org/" target="_blank">
                                    <img style="height: 43px;margin-right: 5px;"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/PIM.svg" alt="PIM">
                                </a>
                                <a href="https://wle.cgiar.org/" target="_blank">
                                    <img style="height: 43px;"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/WLE.svg" alt="WLE">
                                </a>
                            </div>
                        </div>
                        <div class="more-on m-padding-top-20">
                            <?php $args_parent_page = array(
                                'post_type' => 'page',
                                'post_parent' => get_the_ID(),
                            );
                            $parent_id_page = new WP_Query($args_parent_page);
                            $no_h = 1;
                            if ($parent_id_page->have_posts()) :
                                while ($parent_id_page->have_posts()) : $parent_id_page->the_post(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="linkpop"
                                       data-title="<?php echo get_the_title(); ?>"
                                       data-postid="<?php echo get_the_ID(); ?>"
                                       data-uri="<?php echo get_the_permalink(); ?>">

                                        <h3> More on CIFOR and THE CGIAR | <span>READ NOW &nbsp;<i
                                                    class="fa fa-angle-right"></i></span></h3>
                                    </a>
                                    <?php $no_h++;
                                endwhile;
                            endif;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>

            </div>

            <?php /*
    <div class="theme-container theme-about m-padding-bottom-50">
        <div class="home-container-no-grad">
            <div class="home-slide-text miombo-header theme-title">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-wrapper">
                                <div class="sub-section">
                                    <div class="nav-sub-section-title">
                                        <div class="m-padding-top-30">
                                            <hr class="m-divider-solid-15">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <h3 class="m-font-museo-100 m-text-white h1"><?php echo get_the_title();?></h3>
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
            <div class="m-section m-section-parallax m-padding-top-140 m-padding-bottom-10" style="background-image: url(<?php  if(has_post_thumbnail()){ the_post_thumbnail_url('full'); } ?>);">
                <div style="background: rgba(64, 162, 147, 0.88)" class="parallax-overlay"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <div class="m-width-90">
                            <div class="footer-info-container m-margin-bottom-40">
                                <div class="logo-footer logo-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/cifor-logo.svg" alt="CIFOR">
                                </div>

                                <div class="text-footer body-copy">
                                    <p class="m-padding-top-10 m-margin-bottom-0">
                                        The Center for International Forestry Research (CIFOR) advances human
                                        well-being, equity and environmental integrity by conducting innovative
                                        research, developing partners’ capacity, and actively engaging in dialogue with
                                        all stakeholders to inform policies and practices that affect forests and
                                        people. CIFOR is a CGIAR Research Center, and leads the CGIAR Research Program
                                        on Forests, Trees and Agroforestry (FTA). Our headquarters are in Bogor,
                                        Indonesia, with offices in Nairobi, Kenya, Yaounde, Cameroon, and Lima, Peru.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="fta-text-wrapper">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/cgiar_fta.svg" width="140" alt="CGIAR FTA">

                                    <p>
                                        CIFOR leads the <a href="http://foreststreesagroforestry.org/" target="_blank">CGIAR Research Program on Forests, Trees and Agroforestry (FTA)</a>.
                                    </p>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-margin-bottom-5 lead-14">
                                    CIFOR is currently a member of these <a href="http://www.cgiar.org/about-us/our-programs/" target="_blank">CGIAR Research Programs</a>:
                                </p>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/ccafs-pim-wle.svg" width="450" alt="CCAFS, WLE, PIM">

                            </div>
                        </div>
                        <?php
                        $args_parent_page = array(
                            'post_type'      => 'page',
                            'post_parent'    => get_the_ID(),
                        );
                        $parent_id_page = new WP_Query( $args_parent_page );
                        $no_h=1;
                        if ( $parent_id_page->have_posts() ) :
                            while ( $parent_id_page->have_posts() ) : $parent_id_page->the_post();

                        ?>
                        <div class="theme-feature onecol-highlight m-margin-top-40">
                            <div class="highlight-box tf-box" style="background-image: url(<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('thumb-story-home'); } ?>);">
                                <a href="<?php echo get_the_permalink();?>" class="fs-overlay-container linkpop"   data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
                                    <div class="fs-overlay">
                                        <h3> More on CIFOR and the CGIAR </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                            $no_h++;
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    */ ?>
        </div>


        <?php /*

<div class="m-section main-wrapper-boxed">
    <div class="nav-section-title">
        <h2 id="about" class="m-margin-bottom-0">
        </h2>
    </div>
    <div class="theme-container theme-about m-padding-bottom-50">
        <div class="home-container">
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
                                                    <h3 class="m-font-museo-100 m-text-white h1">
                                                        <?php the_title();?></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <?php
                                                            // function.php => sharing_action()
                                                            sharing_section();
                                                            ?>>
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
            <div class="m-section m-section-parallax blur m-padding-top-140 m-padding-bottom-80" data-stellar-vertical-offset="" data-stellar-background-ratio="0.9"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover7.jpg);">
                <div style="background: rgba(0, 0, 0, 0.3)" class="parallax-overlay"></div>
                <svg height="0">
                    <defs>
                        <filter id="wherearemyglasses" x="0" y="0">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <?php
                        the_content();
                        ?>

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