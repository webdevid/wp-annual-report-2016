<?php
$args_page = array(
    'post_type'      => 'page',
    'page_id'    => 1325,
);
$parent_page = new WP_Query( $args_page );
$no_h=1;
if ( $parent_page->have_posts() ) :
    while ( $parent_page->have_posts() ) : $parent_page->the_post();

?>
<style>
    .new-gender{position: relative}
    .new-gender .m-section-parallax{
        position: absolute;
        height: 100%
    }
    .new-gender .container{
        position: relative;
        z-index: 1;
        color: #fff;
    }
    .new-gender .quote-container{
        background: rgba(21, 103, 108, 0.61);
        position: relative;
        z-index: 2;
    }
    .testimonial-entry {
        font-style: italic;
        font-size: 16px;
        font-family: "MuseoSans-500", sans-serif;
        line-height: normal;
        padding: 1px 0 20px 0px;
        position: relative;
        line-height: 23px;
        margin-bottom: 0;
    }

    .new-gender-desc{
        font-size: 18px;
        font-family: "MuseoSans-100", sans-serif;
    }
    .new-gender .quote-by {
        padding-bottom: 0;
        padding-left: 45px;
        font-family:"MuseoSans-300",sans-serif;
    }
    .more-on h3{
        text-transform: uppercase;
        text-align: center;
        color: #abdd8b;
        font-size: 20px;
        margin-bottom: 15px
    }
    .more-on h3 span{
        font-family: "MuseoSans-700", sans-serif;
    }
    .new-gender .share-links a{
        border-bottom: 0px;
    }

    .testimonials-has-border .testimonial-item {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        overflow: hidden;
        margin: 0;
        padding: 0 18px 0 0;
        border: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        position: relative;
    }

    .testimonials-has-border .testimonial-item:after {
        content: "";
        border-right: 2px dotted #ffffff;
        position: absolute;
        right: 0;
        height: 100%;
        z-index: 2;
        top: 0;
    }


    .testimonials-has-border .testimonial-entry:before {
        content: '“';
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 66px;
        position: absolute;
        top: 19px;
        left: -40px;
        font-style: normal;
        color: #2ce78a;
    }

    .gender-quote-container {
        display: table;
        height: 100%;
        width: 100%;
    }

    .testimonials {
        display: table-cell;
        width: 65%;
        height: 50%;
        position: relative;
    }

    .more-on {
        display: table-cell;
        height: 100%;
        width: 35%;
        vertical-align: middle;
        text-align: center;
    }

    .btn.btn-outline.btn-green:hover {
        color: #ffffff;
        background: #2ce78a;
    }

    .btn.btn-outline.btn-green {
        background: rgba(0, 0, 0, 0);
        color: #2ce78a;
    }

    .btn.btn-green:hover {
        background: #2ce78a;
        border-color: #2ce78a;
    }

    .btn.btn-green {
        background: #2ce78a;
        border-color: #2ce78a;
    }

    .new-gender .quote-container:before {
        content: "";
        width: 100%;
        left: 0;
        height: 150%;
        position: absolute;
        top: 0;
        z-index: 0;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top, rgba(32, 150, 129, 0.01) 0, #1bb79d 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(32, 150, 129, 0.01)), color-stop(100%, #1bb79d));
        background: -webkit-linear-gradient(top, rgba(32, 150, 129, 0.01) 0, #1bb79d 100%);
        background: -o-linear-gradient(top, rgba(32, 150, 129, 0.01) 0, #1bb79d 100%);
        background: -ms-linear-gradient(top, rgba(32, 150, 129, 0.01) 0, #1bb79d 100%);
        background: linear-gradient(to bottom, rgba(32, 150, 129, 0.01) 0, #1bb79d 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1bb79d', endColorstr='#1bb79d', GradientType=0);
    }

</style>
<div class="m-section main-wrapper-boxed">
    <div class="nav-section-title">
        <h2 id="gender" class="m-margin-bottom-0">
        </h2>
    </div>

    <div class="new-gender">
        <div class="m-section m-section-parallax m-padding-top-80 m-padding-bottom-80" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.7"
            style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/load-2.gif'?>);background-position: center center;" data-original="<?php echo get_template_directory_uri().'/assets/images/gender.jpg';?>">
            <div style="background: rgba(14, 50, 42, 0.5)" class="parallax-overlay"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <hr class="m-divider-solid-15 m-margin-top-40">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h3 class="m-font-museo-100 m-text-white h1"><?php the_title(); ?></h3>
                        </div>
                        <div class="pull-right">

                        </div>
                    </div>
                    <div class="new-gender-desc m-padding-top-30 m-padding-bottom-20">
                        <?php the_content();?>
                    </div>

                </div>
            </div>
        </div>

        <div class="quote-container">
            <div class="container m-padding-top-30 m-padding-bottom-30">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="gender-quote-container">
                            <div class="testimonials testimonials-has-border">
                                <div class="testimonial-item">
                                    <div class="lead-20">
                                        <h3 class="testimonial-entry">
                                            Things are still framed in terms of women as victims of climate change. This whole stereotyping needs to shift, and we should really focus on gender quality and women's' empowerment as a goal in their own right, not because victims need to be saved
                                        </h3>
                                        <p class="m-margin-bottom-0 m-opacity-70 lead-14 quote-by">Bimbika Sijapati Basnett, CIFOR Scientist</p>
                                    </div>

                                </div>
                            </div>

                            <div class="more-on">
                                <h4 class="m-uppercase" style="color: #87c3bf;">More on gender</h4>

                                <?php $args_parent_page = array(
                                    'post_type'      => 'page',
                                    'post_parent'    => get_the_ID(),
                                );
                                $parent_id_page = new WP_Query( $args_parent_page );
                                $no_h=1;
                                if ( $parent_id_page->have_posts() ) :
                                    while ( $parent_id_page->have_posts() ) : $parent_id_page->the_post();?>
                                        <a href="<?php echo get_the_permalink();?>" class="linkpop btn btn-outline btn-green m-font-museo-sans-500"   data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">

                                            READ NOW &nbsp;<i class="fa fa-angle-right"></i>
                                        </a>
                                        <?php $no_h++;
                                    endwhile;
                                endif;
                                wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>
                </div><div id="research" style="max-height:1px"></div>
            </div>

        </div>

    </div>

    <?php /*
    <div class="theme-container theme-gender m-padding-bottom-50">
        <div class="home-container-no-grad">

            <div class="m-section m-section-parallax m-padding-top-80 m-padding-bottom-80" data-stellar-vertical-offset="" data-stellar-background-ratio="0.9"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover7.jpg);">
                <div style="background: rgba(31, 148, 156, 0.73)" class="parallax-overlay"></div>
            </div>


        </div>
    </div>

    <div class="theme-container theme-gender m-padding-bottom-50">
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
                                                           // sharing_section();
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
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover7.jpg);">
                <div style="background: rgba(31, 148, 156, 0.73)" class="parallax-overlay"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <?php the_content();?>
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
                                <div class="theme-feature onecol-highlight m-margin-top-30">
                                    <div class="highlight-box tf-box" style="background-image: url(<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('thumb-story-home'); } ?>);">
                                        <a href="<?php echo get_the_permalink();?>" class="fs-overlay-container linkpop"   data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
                                            <div class="fs-overlay">
                                                <h3> More on <?php echo get_the_title();?> </h3>
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
    */?>
</div>
<?php
    endwhile;
endif;
wp_reset_query();
?>