<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Mobile meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Basic page needs -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta charset="utf-8">
    <meta name="keywords" content="Putting forests and people on the global agenda - @CIFOR Annual Report 2016." />
    <meta name="description" content="Putting forests and people on the global agenda - @CIFOR Annual Report 2016.  ">
    <meta name="author" content="CIFOR Web Team">

<!--    <meta property="og:url"                content="http://annualreport2016.cifor.org/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@CIFOR Annual Report 2016" />
    <meta property="og:description"        content="Putting forests and people on the global agenda" />
    <meta property="og:image"              content="<?php /*echo get_template_directory_uri().'/assets/images/annual-report-2016.jpg';*/?>" />
-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@CIFOR" />
    <meta name="twitter:creator" content="@CIFOR" />
<!--    <meta property="og:url" content="http://annualreport2016.cifor.org/" />
    <meta property="og:title" content="@CIFOR Annual Report 2016" />
    <meta property="og:description" content="Putting forests and people on the global agenda" />
    <meta property="og:image" content="<?php /*echo get_template_directory_uri().'/assets/images/annual-report-2016.jpg';*/?>" />
-->

    <?php wp_head(); ?>
    <!-- Libs CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/animate.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/normalize.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap-3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/vendor/owl-carousel/owl.carousel.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/vendor/venobox/venobox.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/vendor/pe-icon-7-stroke/css/pe-icon-7-stroke.css'>
    <!-- Theme CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/fonts.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/style.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/custom.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/fmenu.css'>
    <!-- Default theme -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/color.css'>
    <!-- Default fontawesome -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/vendor/font-awesome/css/font-awesome.min.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/modify.css'>
    <!-- Responsive stylesheet -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/assets/css/responsive.css'>

    <!-- Web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,900,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <!-- Head Libs -->
    <script src='<?php echo get_template_directory_uri();?>/assets/vendor/modernizr-2.8.1.min.js'></script>
    <!--[if IE]>
    <style>
       /* ie style */
        .mountain-highlight{
            top:-20px;
        }
        .panels-section .nav-level-2 li{
            top:-42px;
            left:265px;
        }
        .new-gender .m-section-parallax{
            background-position-y:0px;
        }
    </style>
    <![endif]-->
</head>

<!-- Add your site or application content here -->
<body <?php body_class(); ?>>
    <div class="nav-header-single" style="display:none;">
        <div class="menu-container-wrapper">
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
    </div>
    <style>
        .ar-download {
            position: fixed;
            right: 0px;
            top: 0px;
            background: rgb(18, 76, 79);
            z-index: 99999;
            color: #FFFFFF;
            padding: 2px 20px;
            height: 56px;
            line-height: 50px;
        }
        .ar-download a{
            color:#FFFFFF;
        }
        @media screen and (max-width: 480px){
            .ar-download{
                right:0px;
            }
            .ar-download.mobile{
                top:67px;
                height: 40px;
                line-height: 38px;
            }
        }
    </style>
    <div class="ar-download">
        <a href="http://www.cifor.org/library/6477/annual-report-2016-putting-forests-and-people-on-the-global-agenda/" target="_blank">PDF versions</a>
    </div>
    <div class="loading-bar">
        <div class="loadergif"><img src="<?php echo get_template_directory_uri();?>/assets/images/spin.gif"></div>
    </div>
    <div id="single_page_popup" class="<?php if(is_page()){ echo "is_page_active"; } ?> single-page popup" style="">
        <?php
        if(is_page()){
            echo get_template_part( 'template-part/content', 'page');
        } // end is_page()
        ?>
    </div>
