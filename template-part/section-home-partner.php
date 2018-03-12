<?php
$args_page = array(
    'post_type'      => 'page',
    'page_id'    => 1332,
);
$parent_page = new WP_Query( $args_page );
$no_h=1;
if ( $parent_page->have_posts() ) :
    while ( $parent_page->have_posts() ) : $parent_page->the_post();

?>
<!-- Begin Partners & finance section -->
<div class="m-section main-wrapper-boxed">
    <div class="nav-section-title">
        <h2 id="partners-finances" class="m-margin-bottom-0">
        </h2>
    </div>

    <div class="theme-container theme-partners-finances m-padding-bottom-50">
        <div class="home-container-no-gradient">
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
                                                    <h3 class="m-font-museo-100 m-text-white h1"><?php echo get_the_title(); ?></h3>
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
            <div class="m-section m-section-parallax m-padding-top-140 m-padding-bottom-10" data-stellar-vertical-offset="" data-stellar-background-ratio="1"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/load-2.gif'?>);" data-original="<?php echo get_template_directory_uri();?>/assets/images/bot-cover.jpg">
                <div style="background: rgba(160, 99, 103, 0.8)" class="parallax-overlay"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="m-padding-top-30">
                        <p style="font-size: 14px;">CIFOR’s work is possible thanks to the financial support of our Funding Partners and the collaboration
                            of our Strategic Partners. We work closely with a range of local and international organizations
                            and institutions to deliver research projects with the greatest potential impact.
                        </p>

                        <?php /*
                        <h6 class="m-uppercase m-font-museo-sans-700 m-text-green">TOP FUNDING PARTNERS</h6>
                        <div class="top-logo">
                            <img class=" size-full wp-image-953 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/cgiar-fund.jpg"
                                alt="cgiar-fund" width="155" height="100" scale="0">
                            <img class=" size-full wp-image-950 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/aurope.jpg"
                                alt="aurope" width="128" height="100" scale="0">
                            <img class=" size-full wp-image-960 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/usaid.jpg"
                                alt="usaid" width="226" height="100" scale="0">
                            <img class=" size-full wp-image-959 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/ukaid.jpg"
                                alt="ukaid" width="109" height="100" scale="0">
                            <img class=" size-full wp-image-952 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/aus-gov.jpg"
                                alt="aus-gov" width="382" height="100" scale="0">
                            <img class=" size-full wp-image-951 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/aus-aid.jpg"
                                alt="aus-aid" width="189" height="100" scale="0">
                            <img class=" size-full wp-image-958 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/norad.png"
                                alt="norad" width="195" height="100" scale="0">
                            <img class=" size-full wp-image-949 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/adb.jpg"
                                alt="adb" width="192" height="100" scale="0">
                            <img class=" size-full wp-image-957 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/ifad.jpg"
                                alt="ifad" width="163" height="100" scale="0">
                            <img class=" size-full wp-image-955 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/finland.jpg"
                                alt="finland" width="163" height="100" scale="0">
                            <img class=" size-full wp-image-956 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/fmecd.jpg"
                                alt="fmecd" width="258" height="100" scale="0">
                            <img class=" size-full wp-image-954 alignleft" src="http://annualreport2014.cifor.org/wp-content/uploads/2015/04/ffem.jpg"
                                alt="ffem" width="110" height="100" scale="0">
                        </div>
                        */ ?>
                        <div class="theme-feature-container threecol with-highlight" style="margin-top:30px;">
                            <?php
                            $args_parent_page = array(
                                'post_type'      => 'page',
                                'post_parent'    => get_the_ID(),
                            );
                            $parent_id_page = new WP_Query( $args_parent_page );
                            $no_h=1;
                            if ( $parent_id_page->have_posts() ) :
                                while ( $parent_id_page->have_posts() ) : $parent_id_page->the_post();
                                $external_link = get_post_meta( get_the_ID(), 'external_link', 'single' );

                            ?>
                                <div class="highlights-box tf-box" style="background-image: url(<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('overlay-img'); } ?>);background-size: cover">
                                    <a href="<?php echo get_the_permalink();?>" class="fs-overlay-container <?php if($external_link){}else{ echo "linkpop";}?>"  <?php if($external_link){}else{ ?> data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>" <?php } ?>>
                                        <div class="fs-overlay">
                                            <h3> <?php echo get_the_title();?> </h3>
                                        </div>
                                    </a>
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
    </div>
</div>
<!-- End of Partners & finance section -->
<?php
    endwhile;
endif;
wp_reset_query();
?>