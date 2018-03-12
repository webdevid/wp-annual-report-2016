<?php
    get_header();
?>
    <!-- Begin Wrapper -->
    <div id="wrapper">
        <!-- Begin Hero section -->
        <a class="anchorjs-link" href="#home"><span class="anchorjs-icon"></span></a>
        <div id="main-slider" class="m-section full-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover.jpg);">
            <div style="background: rgba(0, 0, 0, 0.23);" class="parallax-overlay"></div>
            <div class="home-container">
                <div class="home-slide-text miombo-header">
                    <div class="text-wrapper">
                        <div class="container m-padding-top-20 m-padding-bottom-20">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="logo-cover">
                                        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/cifor-logo.svg"></a>
                                    </div>
                                    <div class="inline-block">
                                        <h1 class="head-title effect2">CIFOR</h1>
                                    </div>
                                    <div class="inline-block">
                                        <span class="head-title-year">2016</span>
                                    </div>
                                    <?php /*
                                    <h1 class="head-title effect2">CIFOR <span class="head-title-year">2016</span></h1>
                                    */?>

                                    <h5 class="m-uppercase web-cat">Annual Report</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper tw-bottom">
                        <div class="container m-padding-bottom-20 m-padding-top-20">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3 class="m-font-museo-100 h1 m-text-white"><?php echo ucfirst(strtolower(get_option( 'blogname' ))); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-to-board text-center">
                        <div class="container m-padding-top-30">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="welcome-message-container">
                                        <?php
                                        $args_hero = array(
                                            'post_type'      => 'page',
                                            'posts_per_page' => -1,
                                            'post_parent'    => 1315,
                                            'order'          => 'ASC',
                                            'orderby'        => 'menu_order'
                                        );
                                        $parent_hero = new WP_Query( $args_hero );
                                        $no_h=1;
                                        if ( $parent_hero->have_posts() ) :
                                            while ( $parent_hero->have_posts() ) : $parent_hero->the_post();
                                                if($no_h==1){ ?>
                                                    <a class="btn btn-default btn-sm btn-outline-inverse m-uppercase btn-dg linkpop" href="<?php echo get_the_permalink();?>" data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">Message from the DG <i class="fa fa-angle-right"></i></a>
                                            <?php  }elseif($no_h==2){ ?>
                                                    <a class="btn btn-default btn-sm btn-outline-inverse m-uppercase btn-board linkpop" href="<?php echo get_the_permalink();?>"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">Message from the Board <i class="fa fa-angle-right"></i></a>
                                            <?php  }
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
                    <div class="home-bottom">
                        <div class="container text-center">
                            <div class="move">
                                <a href="#highlights">
                                    <div class="mouse"><span></span></div>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero section -->

        <!-- Begin sticky menu section -->
        <?php echo get_template_part( 'template-part/menu', 'sticky');?>
        <!-- End of sticky menu section -->

        <!-- Begin Highlight section -->
        <?php echo get_template_part( 'template-part/section', 'home-highlights');?>
        <!-- End of Highlight section -->

        <!-- Begin CIFOR strategy section -->
        <?php echo get_template_part( 'template-part/section', 'home-strategy');?>
        <!-- End of CIFOR strategy section -->

        <!-- Begin Gender section -->
        <?php echo get_template_part( 'template-part/section', 'home-gender');?>
        <!-- End of Gender section -->

        <!-- Begin research section -->
        <div class="m-section m-section-dark m-section main-wrapper-boxed">
            <div class="nav-section-title">
                <h2 id="research" class="m-margin-bottom-0">
                </h2>
            </div>
            <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => 1328,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $parent = new WP_Query( $args );
            $lv1_no=1;
            if ( $parent->have_posts() ):
                while ( $parent->have_posts() ) : $parent->the_post();
                set_query_var('lv1_no',$lv1_no);
                echo get_template_part( 'template-part/content', 'thematic');
                $lv1_no++;
                endwhile;
            endif;
            wp_reset_query();
            ?>


        </div>
        <!-- End of research section -->

        <!-- Begin About section -->
        <?php echo get_template_part( 'template-part/section', 'home-about');?>
        <!-- End of About section -->

        <!-- Begin Partners & finance section -->
        <?php echo get_template_part( 'template-part/section', 'home-partner');?>
        <!-- End of Partners & finance section -->
<?php
    get_footer();
?>

<style>
#single_page_popup blockquote{
    quotes: "“" "”" "‘" "’";
    font-family: 'Museo-700-italic', serif;
    font-weight: 300;
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 40px 60px;
    text-align: left;
    font-size: 18px;
    line-height: 1.4em;
}
#single_page_popup blockquote:after{
    content: "";
}
#single_page_popup blockquote:before {
    color: #b8d790;
    content: "";
    vertical-align: -0.4em;
    background: url(http://annualreport2016.cifor.org/wp-content/themes/wp-annual-report-2016/assets/images/quotes.svg);
    position: absolute;
    left: -25px;
    top: 10%;
    width: 60px;
    height: 60px;
    background-size: 60px;
}

.padding-top-30{
    padding-top:30px;
}
.twa-title {
    line-height: normal;
    width: 810px;
}
.freeze{
    overflow: hidden;
}
.main-wrapper-boxed .theme-partners-finances .theme-feature-container{
    padding-left:0px;
    padding-right:0px;
}
</style>