<?php /*
<div class="side-menu bs-docs-sidebar">
    <ul class="nav bs-docs-sidenav">
        <?php _rex_sidemenu('sidemenu');?>
    </ul>
</div>
*/ ?>

<div class="footerFixed-nav navi_footer">
    <ul>
        <li>
            <div class="navi_share">
                <a data-toggle="tooltip" data-placement="left" title="Share this" href="#" data-original-title="Share this">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/share-icon.svg" width="30" height="30">
                </a>
            </div>
        </li>
        <li>
            <div class="navi_top">
                <a data-toggle="tooltip" data-placement="left" title="Scroll to top" href="#" class="gototop" data-original-title="Scroll to top">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/go-top.svg"  width="30" height="30">
                </a>
            </div>
        </li>
    </ul>
</div>

<style>
 .footerFixed-nav{
    position: fixed;
    bottom: 50px;
    right: 20px;
    width: 75px;
    z-index:2;
}
.footerFixed-nav ul li{
     list-style:none;
 }
.footerFixed-nav img{
    max-width:40px;
}
.navi_footer {
    position: fixed;
    z-index: 96;
    bottom: 60px;
    right: 35px;
    text-align: right;
}
.navi_footer ul{

}
.navi_footer ul li{
	list-style: none;
	color:#FFFFFF;
	padding:5px 0px;
}
.navi_footer ul li a{
	color:#FFFFFF;
}


/* single popup style */
.social-share {
    text-align: left;
    padding-left: 0px;
    position: relative;
    margin-top: 0px;
    display: block;
    overflow: hidden;
}

.btn-twitter-single {
    background: #00acee;
    border-radius: 0;
    color: #fff;
}

.btn-twitter-single:link, .btn-twitter-single:visited {
    color: #fff;
}

.btn-twitter-single:active, .btn-twitter-single:hover {
    background: #0087bd;
    color: #fff;
    border-color: #00acee;
}

.btn.btn-linkedin-single {
    background: #438CD2;
    border-radius: 0;
    color: #fff;
}

.btn-linkedin-single:link, .btn-linkedin-single:visited {
    color: #fff;
}

.btn-linkedin-single:active, .btn-linkedin-single:hover {
    background: #235B92;
    color: #fff;
    border-color: #216D8A;
}

.btn.btn-googleplus-single {
    background: #FF0000;
    border-radius: 0;
    color: #fff;
}

.btn-googleplus-single:link, .btn-googleplus-single:visited {
    color: #fff;
}

.btn-googleplus-single:active, .btn-googleplus-single:hover {
    background: #D63434;
    color: #fff;
    border-color: #F44336;
}

.btn-facebook-single {
    background: #3b5998;
    border-radius: 0;
    color: #fff;
}

.btn-facebook-single:link, .btn-facebook-single:visited {
    color: #fff;
}

.btn-facebook-single:active, .btn-facebook-single:hover {
    background: #30477a;
    color: #fff;
    border-color: #3b5998;
}

.btn-email {
    background: rgb(80, 80, 80);
    border-radius: 0;
    color: #fff;
}

.btn-email:link, .btn-email:visited {
    color: #fff;
}

.btn-email:active, .btn-email:hover {
    background: #000;
    color: #fff;
    border-color: #3b5998;
}

.share-top-btn {
    background: #D85757;
    color: #FFFFFF;
    border-radius: 0;
}

.btn.share-top-btn:hover, .btn.share-top-btn:focus {
    background-color: #C53A3A;
    border-color: #C53A3A;
    color: #ffffff;
}

.share-top-btn:link, .share-top-btn:visited {
    border-radius: 0;
    color: #fff;
}

.now-reading__sosmed {
    float: right;
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
    right: 60px;
    background: #864343;
}

.now-reading__sosmed a {
    color: #FFFFFF;
    padding-left: 5px;
    padding-right: 5px;
}

.now-reading__sosmed span {
    cursor: pointer;
}

.now-reading__sosmed-share {
    display: none;
    position: absolute;
    background-color: #C9A252;
    width: 326px;
    left: 0;
    padding: 0 30px;
    border-radius: 0 0 10px 10px;
    line-height: 50px;
}

.now-reading__sosmed_single {
    line-height: 60px;
}

.now-reading__sosmed_single-share {
    display: none;
    /*position: relative;*/
    background-color: transparent;
    /*width: 326px;*/
    /*right: 0;*/
    /*border-radius: 0 0 10px 10px;*/
    line-height: 40px;
    padding-bottom: 10px;
}

.now-reading__sosmed_single-share.active {
    display: block;
}

.header--single .button-search .fa-search {
    border-left: 0px;
}

.share_count_top .shares {
    display: none;
}

.ss_icon {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    background-color: #EAEAEA;
    cursor: pointer;
}

.ss_icon.btn-facebook:hover {
    background-color: #3b5998;
    color: #FFFFFF;
}

.ss_icon.btn-twitter:hover {
    background-color: #00acee;
    color: #FFFFFF;
}

.ss_icon.btn-googleplus:hover {
    background-color: #FF0000;
    color: #FFFFFF;
}

.ss_icon.btn-linkedin:hover {
    background-color: #438CD2;
    color: #FFFFFF;
}

.ss_icon.btn-stumbleupon:hover {
    background-color: #77B177;
    color: #FFFFFF;

}

.ss_icon.btn-reddit:hover {
    background-color: #3b5998;
    color: #FFFFFF;
}

/* update */
.share_button {
    margin-bottom: 35px;
    margin-top: 20px;
}

.social-share .btn {
    border: 0px solid #666666;
    transition: all 0.2s ease-in-out;
    padding: 10px;
    width: 40px;
    text-align: center;
}

.share_label {
    font-weight: bold;
    text-transform: uppercase;
}

.share_counter {
    float: right;
    padding: 0px 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
}


.shareBottom{
	display:none;
}
.shareBottom.active{
	display: block;
    position: fixed;
    z-index: 999999;
    bottom: 0px;
    right: 0px;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.76);
}

.shareBottom .share_home{
	position: absolute;
    top: 40%;
    left: 45%;
    color: #FFFFFF;
    font-size: 22px;
    text-align: center;
}

.share_home {
    position: absolute;
    top: 0;
    left: 30px;
    color: #FFFFFF;
    font-size: 22px;
    text-align: center;
}

.right-menu{
	position:relative;
}
.popup_menus .social-share .btn {
    border: 0px solid #666666;
    transition: all 0.2s ease-in-out;
    padding: 10px;
    width: inherit;
    text-align: center;
}
.popup_menus .now-reading__sosmed_single-share a {
    color: #444;
    font-size: 13px;
    display: inline-block;
    float: left;
    overflow: hidden;
    margin-left: 1px;
}
.download_top,
.download_top:hover{
	color:#FFFFFF;
}
.download_pdf_link_wrapper_desktop{
    visibility: show;
    position: fixed;
    background: rgba(0, 0, 0, 0.44);
    padding: 5px 10px;
    right: 30px;
    top: 20px;
    border-radius: 4px;
	z-index:9999;

}
.download_pdf_link_wrapper_desktop a
.download_pdf_link_wrapper_desktop a:hover{
	color:#FFFFFF;
}

.social-icons{
	position:relative;
	z-index:0;
}
</style>

<div class="shareBottom">
    <div class="share_home">
        <div class="share_label">SHARE THIS</div>
        <div id="total-shares" class="hide"></div>
        <div class="social-share">
            <?php _social_share_bottom( 'Putting forests and people on the global agenda - @CIFOR Annual Report 2016.', 'http://annualreport2016.cifor.org/', 'CIFOR  2016 ANNUAL REPORT'); ?>
            <div class="share_counter"></div>
        </div>
    </div>
</div>

<?php
/* social share menus  */

function _social_share_bottom( $title = "", $permalink = "", $standfirst = "" ) {
	$standfirst = "Putting forests and people on the global agenda - @CIFOR Annual Report 2016.";
	switch ( $_SESSION['lang'] ) {
		case 'id';
			$cifor_tweeter_username = 'cifor_hutan';
			break;
		case 'es';
			$cifor_tweeter_username = 'CIFOR_bosques';
			break;
		case 'fr';
			$cifor_tweeter_username = 'CIFOR_Forets';
			break;
		default;
			$cifor_tweeter_username = 'cifor';
	}
	?>

    <div class="now-reading__sosmed_single">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>" title="Share on Facebook" target="_blank" class="btn btn-facebook-single"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/intent/tweet?text=<?php echo $standfirst . " &url=" . $permalink; ?>" title="Share on Twitter" target="_blank" class="btn btn-twitter-single"><i class="fa fa-twitter"></i></a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=<?php echo $standfirst; ?>&source=Forest+News" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin-single"><i class="fa fa-linkedin"></i></a>
        <a href="https://plus.google.com/share?url=<?php echo $permalink; ?>" title="Share on Google+" target="_blank" class="btn btn-googleplus-single"><i class="fa fa-google-plus"></i></a>
        <a href="mailto:?subject=<?php echo $title; ?>&amp;body=<?php echo $title; ?>: <?php echo $permalink; ?>" title="Share by Email" target="_blank" class="btn btn-email"><i class="fa fa-envelope"></i></a>
        <a onclick="window.print()" class="btn btn-print"><i class="fa fa-print"></i></a>

        <div class="now-reading__sosmed_single-share">
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=<?php echo $permalink; ?>" title="Share on Google+" target="_blank" class="ss_icon btn-googleplus"><i class="fa fa-google-plus"></i></a>
            <!-- StumbleUpon -->
            <a href="http://www.stumbleupon.com/submit?url=<?php echo $permalink; ?>" title="Share on StumbleUpon" target="_blank" data-placement="top" class="ss_icon btn-stumbleupon"><i class="fa fa-stumbleupon"></i></a>
            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=<?php echo $standfirst; ?>&source=Forest+News" title="Share on LinkedIn" target="_blank" class="ss_icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
            <!-- Reddit -->
            <a href="http://reddit.com/submit?url=<?php echo $permalink; ?>" title="Share on Reddit" target="_blank" class="ss_icon btn-reddit"><i class="fa fa-reddit"></i></a>
            <!-- Mail -->
            <a href="mailto:?subject=<?php echo $title; ?>&amp;body=<?php echo $title; ?>: <?php echo $permalink; ?>" title="Share by Email" target="_blank" class="ss_icon btn-email"><i class="fa fa-envelope"></i></a>
            <!-- Print -->
            <a onclick="window.print()" class="ss_icon btn-print"><i class="fa fa-print"></i></a>
        </div>
    </div>
	<?php
}

?>