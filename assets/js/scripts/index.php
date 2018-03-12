<?php
    get_header();
?>
    <!-- Begin Wrapper -->
    <div id="wrapper">
        <div class="fixed_ham">
            <div class="menu-container">
                <div class="fmenu-btn toggle" id="fmenu">
                    <div class="button-container">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <span class="menu-title">MENU</span>
                    <span class="menu-close">CLOSE</span>
                </div>
            </div>
        </div>
        <!-- Begin Hero section -->
        <a class="anchorjs-link" href="#home"><span class="anchorjs-icon"></span></a>
        <div id="main-slider" class="m-section full-cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_cover-02.jpg);">
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
                                    	<h5 class="m-uppercase web-cat ar-title">Annual Report</h5>
                                        <h1 class="head-title effect2">CIFOR <span class="head-title-year">2016</span></h1>
                                    </div>
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
                                                    <a class="btn btn-default btn-sm btn-outline-inverse m-uppercase btn-dg linkpop" href="<?php echo get_the_permalink();?>" data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>"><?php the_title();?> <i class="fa fa-angle-right"></i></a>
                                            <?php  }elseif($no_h==2){ ?>
                                                    <a class="btn btn-default btn-sm btn-outline-inverse m-uppercase btn-board linkpop" href="<?php echo get_the_permalink();?>"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>"><?php the_title();?> <i class="fa fa-angle-right"></i></a>
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
        <div class="m-section m-section-dark m-section main-wrapper-boxed theme-boxed">
            <div class="nav-section-title">
                <h2
                    class="m-margin-bottom-0">
                </h2>
            </div>

            <div class="twa-head-title m-margin-bottom-20">
                <h3 class="m-font-museo-100 h1">Thematic work areas</h3>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 1120 120" style="enable-background:new 0 0 1120 120;" xml:space="preserve" preserveAspectRatio="none">
                    <style type="text/css">
                        .ml0{fill:#84C396;}
                        .ml1{fill:#64B08A;}
                        .ml2{fill:#589989;}
                        .ml3{fill:#3C8573;}
                        .ml4{fill:#519484;}
                        .ml5{fill:#65A594;}
                    </style>
  <path class="ml0" d="m1145.9,28.3c0,0 -74.4,-7.7 -106,-12.6c-32.6,-5.1 -52.3,-5.2 -83.7,-5.2s-151.5,-1.8 -172.1,1.7s-104,11.3 -139.8,11.9c-35.4,0.7 -139.6,-7.4 -139.6,-7.4c-6.2,-0.9 -12.5,-0.9 -18.7,0.2c0,0 -84.5,7 -113.1,7.3c-31.5,0.3 -108.6,-7.1 -125.3,-7.1c-16.9,0 -50.6,8.3 -67.8,9c-24.1,0.9 -95.8,-8.9 -95.8,-8.9c-3.1,-0.5 -6.2,-0.1 -9.3,0c-8,0.2 -15.5,1.1 -23.1,2.6c-2,0.5 -57.2,10 -77.5,10.4l0,47l1171.8,0l0,-48.9l0,0z" id="svg_1"/>
  <path class="ml1" d="m-26,49c26.7,0 105.6,-12.8 105.6,-12.8c11.5,-2 23.7,-1.1 34.4,2.3c0,0 34,12.9 61.7,10.7c27.8,-2.1 59.7,-3.3 81.2,-5.6c21.4,-2.1 87.1,-10.7 87.1,-10.7c12.5,-2.3 31.6,-2.5 41.8,-0.2c9.5,2.1 72.2,11.7 98.1,11.7s97.9,-7.2 97.9,-7.2c16.8,-2.6 34.3,-2.2 50.9,0.9c0,0 62.5,2 90.1,2c27.5,0 162.2,-9.6 216.2,-6.5c17.7,1 56.1,5.7 69.6,5.7s137.5,0 137.5,0l0,46l-1172.1,0l0,-36.3z" id="svg_2"/>
  <path class="ml2" d="m1145.7,53.4c0,0 -126.2,3.6 -157.3,3.6c-31.4,-0.1 -105.7,-11.3 -131.8,-11.3s-137.1,2.5 -181.9,7.8c-17.4,2.1 -68.2,8.7 -68.2,8.7c-18.9,3.2 -39,2.9 -57.7,-0.8c0,0 -44.5,-6.1 -62.4,-8s-146.7,-2 -146.7,-2c-12.9,-0.2 -25.7,0.5 -38.4,2l-105.5,8.6c-15.1,1.7 -30.6,1.6 -45.7,-0.2l-87.7,-6.4c-10.1,-1.2 -20.5,-1.2 -30.6,-0.2l-57.7,6l0,27.3l1171.8,0l0,-35.1l-0.2,0z" id="svg_3"/>
  <path class="ml3" d="m-25.8,80.4c3,-0.2 55.7,-4.3 64.6,-4.3c8.9,0.2 72,6.3 96.8,6.3s152.5,-9.7 152.5,-9.7l128.6,-0.2c30.6,0.5 60.2,1.4 90.7,3.6c17.5,1.2 70,2.6 70,2.6l142.7,-8.5c0,0 61.4,-3.5 123.1,-3.5s85.7,13.7 121.3,13.7s47.1,-9.6 78.5,-9.6s102.8,8 102.8,8l0,31.4l-1171.6,0l0,-29.8z" id="svg_4"/>
  <path class="ml4" d="m1145.9,96.6c0,0 -27,1.4 -40.8,-0.6s-51.2,-6.1 -78.1,-5.3c-28.4,0.9 -147.5,-4.4 -175.2,-4.4s-139.7,-3.8 -186,-0.4c-11.5,0.8 -85.4,7.6 -98.5,5.7c0,0 -133.3,-10.2 -146.3,-8.2c-7.4,1.1 -61.2,6.3 -106.6,4.4c-35,-1.5 -53.1,6.3 -63.8,6.3c-10.9,0 -49.3,5.1 -101.4,5.1c-26.4,0 -49.5,-2.5 -76.3,-2.5c-46.9,0.5 -87.7,1.5 -98.8,1.7l0,21.6l1171.8,0l0,-23.4z" id="svg_5"/>
  <path class="ml5" d="m-25.54227,106.03849c12.7,-0.7 46.1,-2.1 58.8,-1.7l142.8,5.7c16.9,0.6 33.8,0.2 50.5,-1.5l119.5,-11.2c31.9,-3 64.4,-2.5 96,1.5l26.8,3.4c57.3,7.3 117.3,12.6 176,7.5l140.6,-11.9c56.5,-4.8 112.1,-0.4 168.8,3.8l192,12.9l0,0l0,5.4l-1171.8,0l0,-13.9z" id="svg_6"/>
                </svg>
            </div>
            <!-- 14-04-17 -->
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

        <!-- Begin Partners & finance section -->
        <?php echo get_template_part( 'template-part/section', 'home-partner');?>
        <!-- End of Partners & finance section -->

        <!-- Begin About section -->
        <?php echo get_template_part( 'template-part/section', 'home-about');?>
        <!-- End of About section -->


<?php
    get_footer();
?>

<style>
#single_page_popup blockquote{
    font-family: 'MuseoSans-700', serif;
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
    content: '“';
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 170px;
    position: absolute;
    top: 90px;
    left: -30px;
    font-style: normal;
    color: #39c49b;
}

.padding-top-30{
    padding-top:30px;
}
.twa-title {
    line-height: normal;
    width: 800px;
}
.freeze{
    overflow: hidden;
}
.main-wrapper-boxed .theme-partners-finances .theme-feature-container{
    padding-left:0px;
    padding-right:0px;
}
.popover-title,
.popover-content{
    color:#777 !important;
}
.ar-title{
	margin-left: 12px;
	 }
.head-title-year{
	margin-left: -20px
}
</style>