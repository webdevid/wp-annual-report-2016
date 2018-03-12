<header class="m-section-base menu-inline-2">
    <div id="sticknav" class="sticky-navigation navbar-collapse nav-main-collapse collapse">
        <div class="menu-container">
            <div class="fmenu-btn toggle" id="fmenu">
                <div class="button-container">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
                <span class="menu-title">MENU</span>
                <span class="menu-close">CLOSE</span>
                <div class="nav-title bs-docs-sidebar">
                    <ul class="panels-section nav bs-docs-sidenav">
                        <li>
                            <a href="#highlights" class="main-scroll-nav">
                                    Best of 2016
                                </a>
                        </li>
                        <li>
                            <a href="#cifor-strategy" class="main-scroll-nav">
                                    CIFOR Strategy 2016-2025
                                </a>
                        </li>
                        <li>
                            <a href="#where-we-work" class="main-scroll-nav">
                                    Where we work
                                </a>
                        </li>
                        <li>
                            <a href="#gender" class="main-scroll-nav">
                                    Gender
                                </a>
                        </li>
                        <li class="panels-has-sub">
                            <a href="#research">
                                    Thematic work areas
                                </a>

                            <ul class="nav nav-level-2">
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
                                        $section_id = get_post_meta( get_the_ID(), 'section_id', 'single' );
                                ?>
                                            <li><a href="#<?php echo $section_id;?>"><?php echo get_the_title();?></a></li>
                                <?php
                                        endwhile;
                                    endif;
                                ?>
                            </ul>

                        </li>
                        <li>
                            <a href="#about" class="main-scroll-nav">
                                    About CIFOR
                                </a>
                        </li>

                        <li>
                            <a href="#partners-finances" class="main-scroll-nav">
                                    Partners & finances
                                </a>
                        </li>
                    </ul>

                </div>
                <div class="download-pdf-link-wrapper">
                    <a href="#" class="m-link-white m-uppercase"><i class="fa fa-download"></i> Download </a>
                </div>
            </div>
        </div>
    </div>
</header>