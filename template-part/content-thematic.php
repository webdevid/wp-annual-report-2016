<?php

    $class_section = get_post_meta( get_the_ID(), 'class_section', 'single' );
    $wave = get_post_meta( get_the_ID(), 'svg_wave', 'single' );
    $title_icon = get_post_meta( get_the_ID(), 'title_icon', 'single' );
    $section_id = get_post_meta( get_the_ID(), 'section_id', 'single' );
?>

<div class="theme-container <?php echo $class_section; ?> m-margin-bottom-30" id="<?php echo $section_id; ?>">
    <div class="theme-hero-container m-section m-section-parallax m-padding-top-100" data-stellar-vertical-offset="" data-stellar-background-ratio="0.7" style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/load-2.gif'?>);" data-original="<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('full'); } ?>">
        <div class="m-section m-section-parallax m-padding-top-140">
            <div class="mountain-layer-wrapper">
                <?php

                if($wave=='st1'){
                ?>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1171.8 88.5" style="enable-background:new 0 0 1171.8 88.5;" xml:space="preserve" preserveAspectRatio="none">
                    <style type="text/css">
                        .st1 {
                            fill: #84C396;
                        }
                    </style>
                    <path class="st1" d="M1171.8,76.5c0,0-74.4-10.1-106-16.5c-32.6-6.6-52.3-6.8-83.7-6.8S830.6,49.8,810,54.4S670.2,86,670.2,86
	L530.6,58.4c-6.2-1.2-12.5-1.2-18.7,0.2L398.8,75.1c0,0-108.6-19.3-125.3-19.3c-16.9,0-67.8,17.7-67.8,17.7L109.9,58
	c-3.1-0.7-6.2-1.1-9.3-1c-8,0.2-15.5,2.4-23.1,4.4C75.5,62,20.3,78.5,0,79v9.4h1171.8V76.5z" />
                </svg>
                <?php
                }elseif($wave=='st2'){
                ?>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 1172 86" style="enable-background:new 0 0 1172 86;" xml:space="preserve" preserveAspectRatio="none">
                        <style type="text/css">
                            .st2 {
                                fill: #64B08A;
                            }
                        </style>
                        <path class="st2" d="M0,75.6c26.7,0,105.6-18.7,105.6-18.7c11.5-2.9,23.7-1.7,34.4,3.4c0,0,34,18.9,61.7,15.7
	c27.8-3.2,59.7-4.8,81.2-8.2c21.4-3.2,87.1-15.7,87.1-15.7c12.5-3.4,31.6-3.6,41.8-0.2c9.5,3.2,72.2,27.2,98.1,27.2
	s97.9-33.6,97.9-33.6c16.8-3.8,34.3-3.3,50.9,1.4c0,0,62.5,24.9,90.1,24.9c27.5,0,216.2-21.5,216.2-21.5s56.1,13.3,69.6,13.3
	s137.5-2,137.5-2V86H0V75.6z" />
                </svg>

                <?php
                }elseif($wave=='st3'){
                ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 1171.8 82.1" style="enable-background:new 0 0 1171.8 82.1;" xml:space="preserve" preserveAspectRatio="none">
                                    <style type="text/css">
                                        .st3 {
                                            fill: #589989;
                                        }
                                    </style>
                                    <path class="st3" d="M1171.6,57.9c0,0-126.2,6-157.3,6C982.9,63.8,908.6,35,882.5,35S700.6,53.1,700.6,53.1l-68.2,19.7
	c-18.9,5.4-39,4.9-57.7-1.4c0,0-44.5-10.3-62.4-13.5s-146.7-3.4-146.7-3.4c-12.9-0.3-25.7,0.9-38.4,3.4L221.7,72.4
	c-15.1,2.8-30.6,2.7-45.7-0.2L88.3,61.4c-10.1-2-20.5-2-30.6-0.2L0,71.2v10.9h1171.8V57.9H1171.6z" />
                                </svg>
                <?php
                }elseif($wave=='st4'){
                ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 1171.6 56.9" style="enable-background:new 0 0 1171.6 56.9;" xml:space="preserve" preserveAspectRatio="none">
                                    <style type="text/css">
                                        .st4 {
                                            fill: #3C8573;
                                        }
                                    </style>
                        <path class="st4" d="M0,50.9c3-0.2,55.7-5.6,64.6-5.6c8.9,0.2,72,8.2,96.8,8.2s152.5-12.7,152.5-12.7l128.6-0.2
	c30.6,0.7,60.2,9.8,90.7,12.7c17.5,1.6,70-4.6,70-4.6l142.7-11.1c0,0,61.4-4.6,123.1-4.6s85.7,17.9,121.3,17.9
	c35.6,0,47.1-12.5,78.5-12.5s102.8,10.5,102.8,10.5v8H0V50.9z"/>
</svg>
                                </svg>
                <?php
                }elseif($wave=='st5'){
                ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 1171.8 55.6" style="enable-background:new 0 0 1171.8 55.6;" xml:space="preserve" preserveAspectRatio="none">
                                    <style type="text/css">
                                        .st5 {
                                            fill: #519484;
                                        }
                                    </style>
                        <path class="st5" d="M1171.8,50.7c0,0-27-6.1-40.8-8.9c-13.8-2.8-51.9-5.8-78.1,0.6s-147.5,4.8-175.2,4.8s-246.5-26-246.5-26
	c-11.2-1.8-22.6-1.4-33.6,1c0,0-137.6,22.1-150.7,24.9c-7.4,1.6-61.2-1.2-106.6-3.8c-35-2-54.1-4.2-64.8-4.2
	c-10.9,0-48.3,7.2-100.4,7.2c-26.4,0-49.5-3.6-76.3-3.4c-46.9,0.6-87.7,2-98.8,2.4v10.4h1171.8V50.7z"/>
                                </svg>
                <?php
                }elseif($wave=='st6'){
                ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 1171.8 41.2" style="enable-background:new 0 0 1171.8 41.2;" xml:space="preserve" preserveAspectRatio="none">
                                    <style type="text/css">
                                        .st6 {
                                            fill: #65A594;
                                        }
                                    </style>
                                    <path class="st6" d="M0,17.5c12.7-1.2,46.1-3.6,58.8-2.8l142.8,9.7c16.9,1,33.8,0.2,50.5-2.4L371.6,3.2c31.9-5,64.4-4.1,96,2.6
	l26.8,5.8c57.3,12.3,117.3,21.3,176,12.7L811,4c56.5-8.2,112.1-0.6,168.8,6.4l192,21.7l0,0v9.1H0V17.5z" />
                                </svg>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="home-container">
            <div class="home-slide-text miombo-header theme-title">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-wrapper">
                                <div class="sub-section">
                                    <div class="nav-sub-section-title">
                                        <div class="m-padding-top-30 m-padding-bottom-60">
                                            <h6 class="m-text-white m-uppercase m-font-museo-sans-700">Thematic work area
                                            </h6>
                                            <hr class="m-divider-solid-15">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <div class="theme-icon">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/theme-icon/<?php echo $title_icon;?>">
                                                    </div>
                                                    <div class="twa-title">
                                                        <h3 class="m-font-museo-100 m-text-white h1"><?php echo get_the_title();?></h3>
                                                    </div>
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
            <div class="m-section blur m-padding-top-140 m-padding-bottom-80">
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="m-padding-top-30">
                    <ul class="list-unstyled focus-sdgs-container">
                        <?php
                         $term_list = wp_get_object_terms($post->ID, 'sdg', array("orderby" => "slug", "order" => "ASC","fields" => "all"));
                         if(count($term_list) > 0){
                        ?>
                        <li>SDGs in <br>focus</li>
                        <?php
                            foreach($term_list as $tl){
                                $sdg = $tl->name;
                                ?>
                                <li class="sdg-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/sdg/<?php echo $sdg; ?>.svg">
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <?php echo get_the_content();?>
                </div>
            </div>
        </div>
    </div>
    <div class="theme-feature-container padding-top-30">
        <?php
            $args_thematic = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => get_the_ID(),
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $parent_thematic = new WP_Query( $args_thematic );
            $no_tc=1;
            if ( $parent_thematic->have_posts() ) :
                while ( $parent_thematic->have_posts() ) : $parent_thematic->the_post();
                    if($no_tc==1){
                        echo get_template_part( 'template-part/content', 'thematic_link_story');
                    }elseif($no_tc==2){
                        echo get_template_part( 'template-part/content', 'thematic_link_highlights');
                    }elseif($no_tc==3){
                        echo get_template_part( 'template-part/content', 'thematic_link_tools');
                    }elseif($no_tc==4){
                        echo get_template_part( 'template-part/content', 'thematic_link_publications');
                    }
                $no_tc++;
                endwhile;
            endif;
            wp_reset_query();
            ?>

    </div>
</div>

