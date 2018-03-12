<?php
/*
*   function.php
*
*/
if ( ! function_exists( 'annual_report_2016_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function annual_report_2016_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CIFOR Annual Report 2016, use a find and replace
		 * to change 'annual-report-2016' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'annual-report-2016', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'annual-report-2016' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'annual_report_2016_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'annual_report_2016_setup' );
if ( ! function_exists( 'sharing_section' ) ) {
	function sharing_section() {
		?>
		<div class="share-box-container">
			<ul class="list-unstyled share-links">
				<li class="m-weight-600 m-uppercase m-font-museo-sans-700">Share</li>
				<li class="twitter-sm">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter_sm.svg">
					</a>
				</li>
				<li class="facebook-sm">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_sm.svg">
					</a>
				</li>
				<li class="linkedin-sm">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin_sm.svg">
					</a>
				</li>
			</ul>
		</div>
		<?php
	}
}
add_action( 'wp', 'wpse47305_check_home' );
function wpse47305_check_home() {
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles_init' );
}

function enqueue_scripts_styles_init() {
	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/assets/js/init.fmenu_ajax.js', array( 'jquery' ), '1.0.5' ); // jQuery will be included automatically
	wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); // setting ajaxurl
}

/* social share menus  */
function _social_share( $title = "", $permalink = "", $standfirst = "" ) {
	$standfirst             = "Putting forests and people on the global agenda - @CIFOR Annual Report 2016.";
	$cifor_tweeter_username = 'cifor';
	?>
	<div class="ar_single">
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"
		   title="Share on Facebook" target="_blank"
		   class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/intent/tweet?text=<?php echo $standfirst . "&url=" . $permalink; ?>"
		   title="Share on Twitter" target="_blank"
		   class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
		<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=<?php echo $standfirst; ?>&source=Forest+News"
		   title="Share on LinkedIn" target="_blank"
		   class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
		<a href="mailto:?subject=<?php echo $title; ?>&amp;body=<?php echo $title; ?>: <?php echo $permalink; ?>"
		   title="Share by Email" target="_blank" class="btn btn-email"><i class="fa fa-envelope"></i></a>
		<a onclick="window.print()" class="btn btn-print"><i class="fa fa-print"></i></a>
	</div>
	<?php
}

function ajax_tagfilteraction_stuff() {
	global $cfs;
	$post_id = $_POST['post_id'];
	$args    = array(
		'post_type'   => 'page',
		'post_status' => array( 'publish' ),
		'post__in'    => array( $post_id )
	);
	$ps      = new WP_Query( $args );
	if ( $ps->have_posts() ) {
		while ( $ps->have_posts() ) : $ps->the_post();
			// start loop single
			?>
			<style>
				/* sidebar */
				.a-sidebar h5,
				.a-sidebar h6 {
					font-family: Museo-Sans-700, sans-serif;
					color: #4c4c4c !important;
					text-transform: uppercase;
					font-size: 14px;
					line-height: 1.3em;
					margin-bottom: 10px;
					font-weight: 600;
				}

				.a-sidebar ul {
					padding-left: 0;
				}

				.a-sidebar li {
					padding-left: 22px;
					position: relative;
					list-style: none;
				}

				.a-sidebar li:after {
					content: "\f105";
					font-size: 13px;
					left: 4px;
					top: -1px;
				}

				.a-sidebar li:after {
					color: #7b7b7b;
					display: block;
					font-family: fontawesome;
					font-size: 12px;
					left: 0;
					position: absolute;
					top: 0;
				}

				/* main content */
				.main-content h3 {
					color: #4c4c4c !important;
					font-family: 'Museo-Sans-700', sans-serif;
					margin-top: 30px !important;
					font-size: 16px;
					line-height: 1.3em;
					margin-bottom: 10px;

				}

				.main-content hr {
					border-color: #3f8372;
					margin: 5px 0;
					margin-bottom: 20px !important;
				}

				/* publications */
				.popup .list_pub article {
					box-shadow: none;
					margin-bottom: 30px;
					overflow: hidden;
				}

				.list_pub header {
					float: left;
					width: 20%;
				}

				.list_pub .h_pub_content {
					float: left;
					width: 80%;
					padding: 0px 10px;
				}

				.list_pub .thumb img {
					-webkit-box-shadow: 0 50px 80px 0 rgba(0, 0, 0, .2);
					-moz-box-shadow: 0 50px 80px 0 rgba(0, 0, 0, .2);
					box-shadow: 0 0px 14px 0 rgba(0, 0, 0, .2);
					margin-bottom: 9px;
					border: 1px solid #eaeaea;
				}

				.no-featured-image {
					height: 60px;
				}

				.ar-circle-img {
					border-radius: 50%;
					width: 155px;
					margin-bottom: 15px;
				}

				/* =WordPress Core
-------------------------------------------------------------- */
				#single_page_popup .alignnone {
					margin: 5px 20px 20px 0;
				}

				#single_page_popup .aligncenter,
				#single_page_popup div.aligncenter {
					display: block;
					margin: 5px auto 5px auto;
				}

				#single_page_popup .alignright {
					float: right;
					margin: 5px 0 20px 20px;
				}

				#single_page_popup .alignleft {
					float: left;
					margin: 5px 20px 20px 0;
				}

				#single_page_popup a img.alignright {
					float: right;
					margin: 5px 0 20px 20px;
				}

				#single_page_popup a img.alignnone {
					margin: 5px 20px 20px 0;
				}

				#single_page_popup a img.alignleft {
					float: left;
					margin: 5px 20px 20px 0;
				}

				#single_page_popup a img.aligncenter {
					display: block;
					margin-left: auto;
					margin-right: auto;
				}

				#single_page_popup .wp-caption {
					background: #fff;
					border: 0px solid #f0f0f0;
					max-width: 96%; /* Image does not overflow the content area */
					/*padding: 5px 3px 10px;*/
					padding: 0px;
					text-align: center;
				}

				#single_page_popup .wp-caption.alignnone {
					margin: 5px 20px 20px 0;
				}

				#single_page_popup .wp-caption.alignleft {
					margin: 5px 20px 20px 0;
				}

				#single_page_popup .wp-caption.alignright {
					margin: 5px 0 20px 20px;
				}

				#single_page_popup .wp-caption img {
					border: 0 none;
					height: auto;
					margin: 0;
					max-width: 98.5%;
					padding: 0;
					width: auto;
				}

				#single_page_popup .wp-caption p.wp-caption-text {
					font-size: 11px;
					line-height: 17px;
					margin: 0;
					padding: 0 4px 5px;
				}

				#single_page_popup .wp-caption-text {
					font-size: 13px;
					margin-top: 10px;
					line-height: 18px;
				}

				#single_page_popup .theme-feature-container h5 {
					font-size: 15px;
				}

				/* share single style */
				.ar_single {
				}

				.ar_single .btn {
					border: 0px;
					font-size: 20px;
					padding: 5px;
				}

				.ar_single .btn-facebook {
				}

				.ar_single .btn-twitter {
				}

				.ar_single .btn-linkedin {
				}

				.ar_single .btn-email:link {
					background: transparent;
					color: #52b99f;
				}

				.ar_single .btn-email:link:hover {
					color: #FFFFFF;
				}

				.ar_single .btn-facebook:hover {
					color: #3b5998;
				}

				.ar_single .btn-twitter:hover {
					color: #00acee;
				}

				.ar_single .btn-linkedin:hover {
					color: #438CD2;
				}

				.ar_single .btn-email:link:hover {
					color: #444;
				}

				.ar_single .btn.btn-print {
					background: transparent;
					color: #52b99f;
				}

				.ar_single .btn.btn-print:hover {
					color: #26a66e;
					background: transparent;
				}

				#single_page_popup .pull-right.linkmore h5 a {
					font-size: 13px;
				}

				#single_page_popup .thumb a {
					border: 0px !important;
				}

				#single_page_popup .single-page-main-image {
					width: 100%;
					height: 270px;
				}

				.popup .container.m-padding-left-30 {
					padding-left: 30px;
				}

				.popup .container.m-padding-right-30 {
					padding-right: 30px;
				}

				.single-breadcrumb-container-mobile {
					padding: 0px 15px;
					overflow: hidden;
					display: none;
				}

				.single-breadcrumb-mobile {

				}

				.single-breadcrumb-mobile li:before {
					content: "\f105";
					font-family: FontAwesome;
					position: absolute;
					top: 0;
					right: -10px;
					color: #172b26;
				}

				.single-breadcrumb-mobile li {
					font-size: 10px;
					color: #494949;
					margin-right: 10px;
					position: relative;
					line-height: 1.2em;
					width: auto;
					float: left;
				}

				.single-breadcrumb-mobile li a {
					font-size: 10px;
					color: #494949;
				}

				.single-breadcrumb-mobile li.bc-active {
					font-size: 10px;
					color: #494949;
					display: none;
				}

				.r-print-only {
					display: none;
				}
				#total-shares-post{
					float:left;
					margin-left: 5px;
				}
				.share_counter_post {
					float: right;
					padding: 0px 10px;
					border-radius: 3px;
					border: 1px solid #ccc;
					margin-top: 4px;
					line-height:1.2em;
				}
				.share_counter_post_title{
					font-size:11px;
					text-align:center;
				}
				.single-page .ar_single{
					float:left;
				}

				@media print {
					.popup {
						position: static
					}

					#wrapper {
						display: none
					}

					.r-print-only {
						display: block;
					}

					.r-no-print {
						display: none;
					}

					#single_page_popup .col-sm-9.pull-right {
						width: 100%;
						float: none
					}
				}
			</style>
			<?php
			$parent_id           = wp_get_post_parent_id( $post_id );
			$parent_parent_id    = wp_get_post_parent_id( $parent_id );
			$featured_image      = get_the_post_thumbnail( get_the_ID(), 'single-header', array( 'class' => 'r-print-only' ) );
			$hide_sidebar        = get_post_meta( $post_id, 'hide_sidebar', 'single' );
			$hide_featured_image = get_post_meta( $post_id, 'hide_featured_image', 'single' );
			$header_custome      = get_post_meta( $post_id, 'custom_header', 'single' );
			$f_image_url         = get_the_post_thumbnail_url( get_the_ID(), 'single-header' );
			?>
			<article class="<?php echo sanitize_title( get_the_title( $post_id ) ); ?>">
				<header class="m-section m-section-white single-hero-img <?php if ( empty( $featured_image ) ) {
					echo " no-featured-image";
				}
				if ( $hide_featured_image == true ) {
					echo " no-featured-image";
				} ?>">
					<div class="top-head-nav">
						<div class="single-breadcrumb-container">
							<ul class="list-unstyled single-breadcrumb m-uppercase">
								<?php
								if ( $parent_parent_id ) {
									echo '<li> <a href="' . get_the_permalink( $parent_parent_id ) . '">' . get_the_title( $parent_parent_id ) . '</a> </li>';
								}
								if ( $parent_id ) {
									echo '<li>  &nbsp;<a href="' . get_the_permalink( $parent_id ) . '">' . get_the_title( $parent_id ) . '</a> </li>';
								}
								?>
								<li class="bc-active"> <?php echo get_the_title(); ?> </li>
							</ul>
						</div>
						<div class="close-btn">
							<div class="esc_close">
								<span>esc</span> to close
							</div>
							<a href="#" class="close"></a>
							<span class="top"></span>
							<span class="bottom"></span>
						</div>
					</div>
					<?php
					if ( $hide_featured_image == true ) {
					} else {
						if ( $header_custome == true ) {
							$f_image_url = CFS()->get( 'header_image' );
						}
						?>
						<div class="single-page-main-image r-no-print"
						     style="background-image: url('<?php echo $f_image_url; ?>');background-position:center center;background-size: cover"></div>
						<?php echo $featured_image;
					}
					?>
				</header>

				<div class="m-section m-section-white content-single">
					<div class="single-breadcrumb-container-mobile">
						<ul class="list-unstyled single-breadcrumb-mobile m-uppercase">
							<?php
							if ( $parent_parent_id ) {
								echo '<li> <a href="' . get_the_permalink( $parent_parent_id ) . '">' . get_the_title( $parent_parent_id ) . '</a> </li>';
							}
							if ( $parent_id ) {
								echo '<li>  &nbsp;<a href="' . get_the_permalink( $parent_id ) . '">' . get_the_title( $parent_id ) . '</a> </li>';
							}
							?>
							<li class="bc-active"> <?php echo get_the_title(); ?> </li>
						</ul>
					</div>
					<div class="clear"></div>
					<div class="container m-padding-top-30 m-padding-bottom-30">

						<div class="row">

							<div class="<?php if ( $hide_sidebar == true ) {
								echo 'col-sm-12 ';
							} else { ?> col-sm-9 <?php } ?> pull-right">
								<div class="main-content">
									<h1 class="m-font-museo-100">
										<?php the_title(); ?>
									</h1>

									<?php
									if ( $parent_id ) {
										$parent_title = get_the_title( $parent_id ) . ' > ';
									} else {
										$parent_title = '';
									}
									$standfirst             = $parent_title . ' ' . get_the_title() . " - @CIFOR Annual Report 2016.";
									$cifor_tweeter_username = 'cifor';
									$title                  = get_the_title();
									$permalink              = get_the_permalink();
									?>
									<div class="share-box-container">
										<?php _social_share( $title, $permalink, $standfirst ); ?>
										<div id="total-shares-post"><div class="share_counter_post"></div><div class="share_counter_post_title">Shares</div></div>
										<div class="clear clearfix"></div>
										<?php /*
										<ul class="list-unstyled share-links">
											<li class="m-weight-600 m-uppercase m-font-museo-sans-700">
												Share
											</li>
											<li class="twitter-sm">
												<a href="https://twitter.com/intent/tweet?text=<?php echo $standfirst . "&url=" . $permalink; ?>"
			   										title="Share on Twitter" target="_blank">
			   										<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter_sm_green.svg">
												</a>
											</li>
											<li class="facebook-sm">
												<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"
													title="Share on Facebook" target="_blank">
													<img src="<?php echo get_template_directory_uri();?>/assets/images/facebook_sm_green.svg"> </a>
											</li>
											<li class="linkedin-sm">
												<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=<?php echo $standfirst; ?>&source=Forest+News"
													title="Share on LinkedIn" target="_blank">
													<img src="<?php echo get_template_directory_uri();?>/assets/images/linkedin_sm_green.svg"> </a>
											</li>
										</ul>
									*/ ?>
									</div>

									<p class="lead-28 m-font-museo-100 m-text-green m-opacity-50">
										<?php //the_excerpt();?>
									</p>
									<!--<span class="dropcap">M</span> -->
									<?php the_content(); ?>
									<?php
									//ar_publication();
									ar_relatedPosts( get_the_ID() );
									?>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 a-sidebar ar_hidden_mobile r-no-print"
							     style="<?php if ( $hide_sidebar == true ) {
								     echo 'display:none;';
							     } ?>">
								<?php
								$side_content = CFS()->get( 'widgets', get_the_ID() );
								foreach ( $side_content as $sc ) {
									echo do_shortcode( $sc['widget_content'] );
								}
								?>

							</div>

							<div class="col-xs-12 r-print-only">
								<?php foreach ( $side_content as $sc ) {
									echo do_shortcode( $sc['widget_content'] );
								} ?>
							</div>

						</div>
					</div>
				</div>
				<?php
				$page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
				$page_template = str_replace( 'template-page/', '', $page_template );
				if ( $page_template != 'template-page-ar.php' AND $page_template != 'template-message-dg.php' AND $page_template != 'template-message-bot.php' ) {
					ar_relatedThemeStory( get_the_ID() );
				}
				?>
				<div class="a-close-btn-container">
					<a href="#" class="a-close-btn m-uppercase"><span>Close</span> to continue reading CIFOR's 2016
						Annual report</a>
				</div>
			</article>

			<?php
			// end loop single
			?>
			<script>

				/* external */
				jQuery("a").filter(function () {
					return this.hostname && this.hostname !== location.hostname && this.hostname !== 'farm9.staticflickr.com' && this.hostname !== 'www.youtube.com' && this.hostname !== 'www.slideshare.net' && this.hostname !== 'annualreport2016.cifor.org' && this.hostname !== 'i0.wp.com' && this.hostname !== 'i1.wp.com' && this.hostname !== 'i2.wp.com';
				}).click(function () {
					window.open(this.href);
					return false;
				});
				/* responsive video embed */
				jQuery(".main-content").fitVids();
				/* social share post count */

				/* ga */
				(function (i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r;
					i[r] = i[r] || function () {
							(i[r].q = i[r].q || []).push(arguments)
						}, i[r].l = 1 * new Date();
					a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m)
				})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-44204366-13', 'auto');
				ga('send', 'pageview');


				/* social share post count */
				$t = jQuery.noConflict();
				$ls_url = "<?php echo get_the_permalink();?>";
				console.log($ls_url);



						// Format Number functions
						function ReplaceNumberWithCommas(yourNumber) {
							//Seperates the components of the number
							var components = yourNumber.toString().split(".");
							//Comma-fies the first part
							components[0] = components[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
							//Combines the two sections
							return components.join(".");
						}

						function kFormatter(num) {
							return num > 999 ? (num/1000).toFixed(1) + 'k' : num
						}

						// SHARE COUNTS FUNCTIONS

						// Facebook Shares Count
						function ls_facebookShares($tURL,$divID) {
							$t.getJSON('http://graph.facebook.com/?id=' + $tURL, function (fbdata) {
								$t($divID).attr('data-facebookShares', fbdata.share.share_count)
							});

								}

						// Twitter Shares Count
						function ls_twitterShares($tURL,$divID) {
							$t.getJSON('http://public.newsharecounts.com/count.json?url=' + $tURL + '&callback=?', function (twitdata) {
								$t($divID).attr('data-twitterShares', twitdata.count)
							});

						}

						// LinkIn Shares Count
						function ls_linkdInShares($tURL,$divID) {

							$t.getJSON('https://www.linkedin.com/countserv/count/share?url=' + $tURL + '&callback=?', function (linkdindata) {
								$t($divID).attr('data-linkdInShares', linkdindata.count)
							});
						}

						function ls_googleplusShares($tURL,$divID){
							var GooglePlusdata = {
								"method":"pos.plusones.get",
								"id":$tURL,
								"params":{
									"nolog":true,
									"id":$tURL,
									"source":"widget",
									"userId":"@viewer",
									"groupId":"@self"
								},
								"jsonrpc":"2.0",
								"key":"p",
								"apiVersion":"v1"
							};
							$t.ajax({
								type: "POST",
								url: "https://clients6.google.com/rpc",
								processData: true,
								contentType: 'application/json',
								cache:true,
								data: JSON.stringify(GooglePlusdata),
								success: function(r){
									//add(r.result.metadata.globalCounts.count);
									console.log(r);
									$t($divID).attr('data-googleplusShares', r.result.metadata.globalCounts.count);
								}
							});
						}

						// Check if all JSON calls are finished or not
						function ls_checkJSON_getSum($divID,$divResult){

							if ($t($divID).attr('data-facebookShares') != undefined || $t('#total-shares').attr('data-twitterShares') != undefined || $t('#total-shares').attr('data-linkdinshares') != undefined){

								setTimeout(function (){

									$fb1 = parseInt($t($divID).attr('data-facebookShares'));
									$fb1 = $fb1 ? $fb1 : 0;
									$tw1 = parseInt($t($divID).attr('data-twittershares'));
									$in1 = parseInt($t($divID).attr('data-linkdinshares'));
									$in1 = $in1 ? $in1 : 0;
									$g1 = parseInt($t($divID).attr('data-googleplusShares'));

									// console.log($fb1+' ini fb 0');
									// console.log($tw1+' ini tw 1');
									// console.log($in1+' ini in 1');
									// console.log($g1+' ini g+ 1');
									var googleplusShares = $g1;

									var fbShares =  $fb1;
									var twitShares =  $tw1;
									var linkdInShares =   $in1;

									var fbShares =  fbShares ? fbShares : 0;
									var twitShares =  twitShares ? twitShares : 0;
									var linkdInShares =   linkdInShares ? linkdInShares : 0;
									var googleplusShares = googleplusShares ? googleplusShares : 0;

									var totalShares =  fbShares + twitShares + linkdInShares + googleplusShares;
									console.log('fb'+fbShares+' twit '+twitShares + ' linkedin ' +linkdInShares +'');
									console.log(totalShares);

									var topicShares = $fb1 + $tw1 + $in1 + $g1;

									if (totalShares < 1){
										totalShares = '0';
									}

									if(topicShares < 1){
										topicShares = '0';
									}

									//$t('.share_counter').html(kFormatter(totalShares));
									$t($divResult).html(kFormatter(totalShares));
									// $t('.share_counter_home').html(kFormatter(totalShares));
									// $t('#total-count').html('<span title="Count Facebook, Twitter, LinkedIn">' + kFormatter(totalShares) + '</span>');
									// $t('.share_count_top').html('' + kFormatter(totalShares) + '<span class="shares">Shares</span>');
									// $t('.share_count_top.topic_count_top').html('' + kFormatter(topicShares) + '<span class="shares">Shares</span>');

								}, 2000);
							}
							// Check for JSON again!
							else {
								setTimeout(function () {
									ls_checkJSON_getSum();
								}, 2000);
							}
						}

						function ls_totalShares($tURL,$divID,$divResult){
							ls_linkdInShares($tURL,$divID);
							ls_twitterShares($tURL,$divID);
							ls_googleplusShares($tURL,$divID);
							ls_facebookShares($tURL,$divID);
							ls_checkJSON_getSum($divID,$divResult);
							//console.log($tURL+'-'+$divID+'-'+$divResult)
						}

						ls_totalShares($ls_url,'#total-shares-post','.share_counter_post');


			</script>
			<?php
		endwhile; // End of the loop.
	}
	//exit();
	die();
}

add_action( 'wp_ajax_ajax_tagfilteraction_stuff', 'ajax_tagfilteraction_stuff' ); // ajax for logged in users
add_action( 'wp_ajax_nopriv_ajax_tagfilteraction_stuff', 'ajax_tagfilteraction_stuff' ); // ajax for not logged in users
function cek_content_type( $key ) {
	if ( $key == 'story' ) {
		$val = "STORY";
	} elseif ( $key == 'video' ) {
		$val = "CIFOR TV";
	} elseif ( $key == 'blog' ) {
		$val = "FOREST NEWS";
	} elseif ( $key == 'photo' ) {
		$val = "PHOTO";
	} elseif ( $key == 'publication' ) {
		$val = "PUBLICATION";
	}

	return $val;
}

/**
 * This image demonstrates how to use 'image' fields
 */
add_filter( 'rwmb_meta_boxes', 'ar2015_image_demo' );
function ar2015_image_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'      => __( 'Image Upload for photo album', 'ar2015' ),
		'post_types' => 'page',
		'fields'     => array(
			array(
				'id'               => 'image_advanced',
				'name'             => __( 'Album Photo', 'ar2015' ),
				'type'             => 'image_advanced',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 20,
			)
		),
	);

	return $meta_boxes;
}

/*
*  will be shortcode
*/
function ar_relatedPosts( $post_id ) {
	$related_title_link = get_post_meta( $post_id, 'related_title_link', 'single' );
	$news               = CFS()->get( 'news', $post_id );
	$archive            = get_post_meta( $post_id, 'archive_link_rl', 'single' );
	if ( $post_id != '' AND count( $news ) > 0 ) {
		?>
		<div class="clearfix">
			<div class="pull-left">
				<h5 class="m-font-museo-sans-700 m-text-dark m-margin-top-30"><?php echo $related_title_link; ?></h5>
			</div>
			<div class="pull-right linkmore">
				<?php
				if ( $archive['url'] ) {
					echo '<h5 class="m-font-museo-sans-300 m-text-dark m-margin-top-30"><a href="' . $archive['url'] . '" target="' . $archive['target'] . '" class="m-link-dark">' . $archive['text'] . '<i class="fa fa-long-arrow-right"></i> </a></h5>';
				}
				?>
			</div>
		</div>

		<hr class="m-divider-solid-5 green m-margin-bottom-20">

		<?php
		if ( count( $news ) < 2 ) {
			echo '<div class="row">';
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['title_link'];
				$title_link_url    = $n['title_link']['url'];
				$title_link_text   = $n['title_link']['text'];
				$title_link_target = $n['title_link']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				?>
				<div class="col-md-3 col-sm-6">
					<article>
						<?php if ( $thumbnail ) { ?>
							<img src="<?php echo $thumbnail; ?>">
						<?php } ?>
						<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5"><?php echo $type; ?></p>
						<h5 class="m-font-museo-sans-500">
							<a target="<?php echo $title_link_target; ?>"
							   href="<?php echo $title_link_url; ?>"><?php echo $title_link_text; ?></a>
						</h5>
						<div class="rp_summary">
							<p><?php echo $summary; ?></p>
						</div>
					</article>
				</div>
				<?php
			}
			echo "</div>";
		} elseif ( count( $news ) < 3 ) {
			echo '<div class="row">';
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['title_link'];
				$title_link_url    = $n['title_link']['url'];
				$title_link_text   = $n['title_link']['text'];
				$title_link_target = $n['title_link']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				?>
				<div class="col-md-6 col-sm-6">
					<article>
						<?php if ( $thumbnail ) { ?>
							<img src="<?php echo $thumbnail; ?>">
						<?php } ?>
						<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5"><?php echo $type; ?></p>
						<h5 class="m-font-museo-sans-500">
							<a target="<?php echo $title_link_target; ?>"
							   href="<?php echo $title_link_url; ?>"><?php echo $title_link_text; ?></a>
						</h5>
						<div class="rp_summary">
							<p><?php echo $summary; ?></p>
						</div>
					</article>
				</div>
				<?php
			}
			echo "</div>";
		} elseif ( count( $news ) < 5 ) {
			echo '<div class="row">';
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['title_link'];
				$title_link_url    = $n['title_link']['url'];
				$title_link_text   = $n['title_link']['text'];
				$title_link_target = $n['title_link']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				?>
				<div class="col-md-3 col-sm-6">
					<article>
						<?php if ( $thumbnail ) { ?>
							<img src="<?php echo $thumbnail; ?>">
						<?php } ?>
						<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5">
							<?php echo $type; ?>
						</p>
						<h5 class="m-font-museo-sans-500">
							<a target="<?php echo $title_link_target; ?>"
							   href="<?php echo $title_link_url; ?>"><?php echo $title_link_text; ?></a>
						</h5>
					</article>
				</div>
				<?php
			}
			echo "</div>";
		} else {
			echo '<div class="row">';
			$n_no = 1;
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['title_link'];
				$title_link_url    = $n['title_link']['url'];
				$title_link_text   = $n['title_link']['text'];
				$title_link_target = $n['title_link']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				?>
				<div class="col-md-3 col-sm-6">
					<article>
						<?php if ( $thumbnail ) { ?>
							<img src="<?php echo $thumbnail; ?>">
						<?php } ?>
						<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5">
							<?php echo $type; ?>
						</p>
						<h5 class="m-font-museo-sans-500">
							<a target="<?php echo $title_link_target; ?>"
							   href="<?php echo $title_link_url; ?>"><?php echo $title_link_text; ?></a>
						</h5>
					</article>
				</div>
				<?php
				if ( $n_no % 4 == '' ) {
					echo '</div><div class="row">';
				}
				$n_no ++;
			}
			echo "</div>";
		}
		?>

		<?php
	}
}

function ar_relatedThemeStory( $post_id ){
	$page_template   = get_post_meta( $post_id, '_wp_page_template', true );
	$page_template   = str_replace( 'template-page/', '', $page_template );
	$parent_id       = wp_get_post_parent_id( $post_id );
	$args_thematic   = array(
		'post_type'      => 'page',
		'posts_per_page' => - 1,
		'post_parent'    => $parent_id,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
	);
	$parent_thematic = new WP_Query( $args_thematic );
	?>

	<div class="m-section m-section-grey">
		<div class="container m-padding-top-30 m-padding-bottom-30 m-padding-right-30 m-padding-left-30">
			<div class="next-read-container">
				<h6 class="m-font-museo-sans-500 m-text-dark">
					Also in <?php echo get_the_title( $parent_id ); ?>
				</h6>
				<?php /*<div class="theme-feature-container threecol <?php if($page_template=='template-thematic-story.php'){ echo "with-highlight";} ?>"> */ ?>
				<div class="theme-feature-container">
					<?php
					$no_tc = 1;
					if ( $parent_thematic->have_posts() ) :
						while ( $parent_thematic->have_posts() ) : $parent_thematic->the_post();
							$tooltip         = get_post_meta( get_the_ID(), 'tooltip_title', 'single' );
							$tooltip_content = get_post_meta( get_the_ID(), 'tooltip_content', 'single' );
							if ( $no_tc == 1 ) {
								if ( $page_template != 'template-thematic-story.php' ) {
									?>
									<div class="featured-stories tf-box m-section-cover"
									     style="background-image: url(<?php if ( has_post_thumbnail() ) {
										     the_post_thumbnail_url( 'thumb-story-home' );
									     } ?>);">

										<div class="fs-overlay-container subtitle">
											<div class="fs-overlay">
												<h5>Story of change</h5>
												<a href="<?php echo get_permalink(); ?>"
												   class="fs-overlay-container linkpopnext"
												   data-postid="<?php echo get_the_ID(); ?>"
												   data-title="<?php echo get_the_title( get_the_ID() ); ?>"
												   data-uri="<?php echo get_the_permalink( get_the_ID() ); ?>">
													<h4 class="fs-title"
													    style="color:#FFFFFF;"><?php echo get_the_title(); ?></h4>
												</a>
											</div>

											<div class="hover-up">
												<div class="hover-up-container">
													<a href="<?php echo get_permalink(); ?>"
													   class="fs-overlay-container linkpopnext"
													   data-postid="<?php echo get_the_ID(); ?>"
													   data-title="<?php echo get_the_title( get_the_ID() ); ?>"
													   data-uri="<?php echo get_the_permalink( get_the_ID() ); ?>">
														<h6 class="lead-16 m-font-museo-sans-500 m-margin-bottom-5"
														    style="color:#FFFFFF;"><?php echo $tooltip; ?></h6>
													</a>
													<p class="lead-14">
														<?php echo $tooltip_content; ?>
													</p>
													<a href="<?php echo get_the_permalink(); ?>"
													   data-title="<?php echo get_the_title(); ?>"
													   data-postid="<?php echo get_the_ID(); ?>"
													   data-uri="<?php echo get_the_permalink(); ?>"
													   class="btn btn-primary linkpopnext btn-outline-inverse m-uppercase m-font-museo-sans-500 lead-13">Read
														more <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>

									</div>
									<?php
								} else {
									?>
									<style>
										#single_page_popup .highlights-box,
										#single_page_popup .publications-box,
										#single_page_popup .tools-box {
											width: 24.4%;
										}
									</style>
									<?php
								}
							} elseif ( $no_tc == 2 ) {
								if ( $page_template != 'template-thematic-highlights.php' ) {
									?>
									<div class="highlights-box tf-box">
										<div class="subtitle">
											<a href="<?php echo get_permalink(); ?>" class="linkpopnext"
											   data-postid="<?php echo get_the_ID(); ?>"
											   data-title="<?php echo get_the_title( get_the_ID() ); ?>"
											   data-uri="<?php echo get_the_permalink( get_the_ID() ); ?>">
												<h5>Highlights</h5>
											</a>
										</div>
										<div class="hover-up">
											<div class="hover-up-container">
												<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
												   data-title="<?php echo get_the_title(); ?>"
												   data-postid="<?php echo get_the_ID(); ?>"
												   data-uri="<?php echo get_the_permalink(); ?>">
													<h6 class="lead-13 m-font-museo-sans-500 m-margin-bottom-5"
													    style="color:#FFFFFF;"><?php echo $tooltip; ?></h6>
												</a>
												<p class="lead-13 m-margin-bottom-0">
													<?php echo $tooltip_content; ?>
												</p>
												<div class="h-u-more">
													<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
													   data-title="<?php echo get_the_title(); ?>"
													   data-postid="<?php echo get_the_ID(); ?>"
													   data-uri="<?php echo get_the_permalink(); ?>">
														READ MORE
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							} elseif ( $no_tc == 3 ) {
								if ( $page_template != 'template-thematic-learning-tools.php' ) {
									?>
									<div class="tools-box tf-box">
										<div class="subtitle">
											<a href="<?php echo get_permalink(); ?>" class="linkpopnext"
											   data-postid="<?php echo get_the_ID(); ?>"
											   data-title="<?php echo get_the_title( get_the_ID() ); ?>"
											   data-uri="<?php echo get_the_permalink( get_the_ID() ); ?>">
												<h5>Tools for learning</h5>
											</a>
										</div>
										<div class="hover-up">
											<div class="hover-up-container">
												<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
												   data-title="<?php echo get_the_title(); ?>"
												   data-postid="<?php echo get_the_ID(); ?>"
												   data-uri="<?php echo get_the_permalink(); ?>">
													<h6 class="lead-13 m-font-museo-sans-500 m-margin-bottom-5"
													    style="color:#FFFFFF;"><?php echo $tooltip; ?></h6>
												</a>
												<p class="lead-13 m-margin-bottom-0">
													<?php echo $tooltip_content; ?>
												</p>
												<div class="h-u-more">
													<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
													   data-title="<?php echo get_the_title(); ?>"
													   data-postid="<?php echo get_the_ID(); ?>"
													   data-uri="<?php echo get_the_permalink(); ?>">
														READ MORE
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							} elseif ( $no_tc == 4 ) {
								if ( $page_template != 'template-thematic-publications.php' ) {
									?>
									<div class="publications-box tf-box">
										<div class="subtitle">
											<a href="<?php echo get_permalink(); ?>" class="linkpopnext"
											   data-postid="<?php echo get_the_ID(); ?>"
											   data-title="<?php echo get_the_title( get_the_ID() ); ?>"
											   data-uri="<?php echo get_the_permalink( get_the_ID() ); ?>">
												<h5>Publications</h5>
											</a>
										</div>
										<div class="hover-up">
											<div class="hover-up-container">
												<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
												   data-title="<?php echo get_the_title(); ?>"
												   data-postid="<?php echo get_the_ID(); ?>"
												   data-uri="<?php echo get_the_permalink(); ?>">
													<h6 class="lead-13 m-font-museo-sans-500 m-margin-bottom-5"
													    style="color:#FFFFFF;"><?php echo $tooltip; ?></h6>
												</a>
												<p class="lead-13 m-margin-bottom-0">
													<?php echo $tooltip_content; ?>
												</p>
												<div class="h-u-more">
													<a href="<?php echo get_the_permalink(); ?>" class="linkpopnext"
													   data-title="<?php echo get_the_title(); ?>"
													   data-postid="<?php echo get_the_ID(); ?>"
													   data-uri="<?php echo get_the_permalink(); ?>">
														READ MORE
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							}
							$no_tc ++;
						endwhile;
					endif;
					?>
					<div class="tools-box tf-box">
						<div class="subtitle">
							<a href="#" class="close-popup">
								<h5>Back</h5>
							</a>
						</div>
					</div>
					<?php
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
		<?php
		}
		if ( ! function_exists( 'short__publication' ) ) {
			function short__publication( $atts, $content = null ) {
				global $cfs;
				global $post;
				$attr = CFS()->get( 'publication_list', $post->ID );
				// Attributes
				$a         = shortcode_atts( array( 'id' => 'id' ), $atts );
				$get_value = array_shift( filter_by_value( $attr, 'pubs_id', $a['id'] ) );
				$archive   = $get_value['archive_link'];
				// $short_content = '
				// <div class="list_pub">
				// 	<h3>'.$get_value['list_pub_title'].'</h3>
				// 	<hr>
				// 	<div class="row">
				// 		';
				$short_content = '
			<div class="clearfix">
				<div class="pull-left">
					<h5 class="m-font-museo-sans-700 m-text-dark m-margin-top-30">' . $get_value['list_pub_title'] . '</h5>
				</div>';
				if ( $archive['url'] ) {
					$short_content .= '
					<div class="pull-right linkmore">
						<h5 class="m-font-museo-sans-300 m-text-dark m-margin-top-30"><a href="' . $archive['url'] . '" target="' . $archive['target'] . '" class="m-link-dark">' . $archive['text'] . '<i class="fa fa-long-arrow-right"></i> </a></h5>
					</div>';
				}
				$short_content .= '
			</div>
			<hr class="m-divider-solid-5 green m-margin-bottom-20"/>
			<div class="list_pub">
			<div class="row">';
				$no_p    = 1;
				$p_count = count( $get_value['pubs_list'] );
				foreach ( $get_value['pubs_list'] as $p ) {
					$short_content .= '
					<div class="col-md-6">
						<article>
							<header>
								<div class="thumb">
									<a href="' . $p['link']['url'] . '" class="m-link-dark" target="' . $p['link']['target'] . '">
										<img src="' . $p['thumbnail'] . '">
									</a>
								</div>
							</header>
							<div class="h_pub_content">
								<h6>
									<a href="' . $p['link']['url'] . '" class="m-link-dark" target="' . $p['link']['target'] . '">
										' . $p['link']['text'] . '
									</a>
								</h6>
							</div>
						</article>
					</div>
					';
					if ( $no_p % 2 == '' OR $p_count == $no_p ) {
						$short_content .= '</div><div class="clear clearfix"></div><div class="row">';
					}
					$no_p ++;
				}
				$short_content .= '
			</div>
		</div>
		';

				// Code
				return $short_content;
			}

			add_shortcode( 'spublist', 'short__publication' );
		}
		if ( ! function_exists( 'short__link' ) ){
		function short__link( $atts, $content = null ) {
		global $cfs;
		global $post;
		$attr = CFS()->get( 'related_link_list', $post->ID );
		// Attributes
		$a         = shortcode_atts( array( 'id' => 'id' ), $atts );
		$get_value = array_shift( filter_by_value( $attr, 'related_link_list_id', $a['id'] ) );
		$news      = $get_value['related_link_list_loop'];
		$archive   = $get_value['archive_link'];
		$short_content = '
			<div class="clearfix">
				<div class="pull-left">
					<h5 class="m-font-museo-sans-700 m-text-dark m-margin-top-30">' . $get_value['related_link_list_title'] . '</h5>
				</div>
				<div class="pull-right linkmore">
					<h5 class="m-font-museo-sans-300 m-text-dark m-margin-top-30"><a href="' . $archive['url'] . '" target="' . $archive['target'] . '" class="m-link-dark">' . $archive['text'] . '<i class="fa fa-long-arrow-right"></i> </a></h5>
				</div>
			</div>

			<hr class="m-divider-solid-5 green m-margin-bottom-20">';
		if ( count( $news ) < 3 ) {
			$short_content .= '<div class="row slink">';
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['link_title'];
				$title_link_url    = $n['link_title']['url'];
				$title_link_text   = $n['link_title']['text'];
				$title_link_target = $n['link_title']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				$short_content .= '
					<div class="col-md-6 col-sm-6">
						<article  class="c-3">';
				if ( $thumbnail ) {
					$short_content .= '		<img src="' . $thumbnail . '">';
				}
				$short_content .= '		<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5">' . $type . '</p>
							<h5 class="m-font-museo-sans-500">
								<a target="' . $title_link_target . '" href="' . $title_link_url . '">' . $title_link_text . '</a>
							</h5>
							<p>' . $summary . '</p>
						</article>
					</div>';
			}
			$short_content .= '</div>';
		} elseif ( count( $news ) < 5 ) {
			$short_content .= '<div class="row  slink">';
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['link_title'];
				$title_link_url    = $n['link_title']['url'];
				$title_link_text   = $n['link_title']['text'];
				$title_link_target = $n['link_title']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				$short_content .= '
					<div class="col-md-3 col-sm-6">
						<article  class="c-5">';
				if ( $thumbnail ) {
					$short_content .= '			<img src="' . $thumbnail . '">';
				}
				$short_content .= '
							<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5"></p>
							<h5 class="m-font-museo-sans-500">
								<a target="' . $title_link_target . '" href="' . $title_link_url . '">' . $title_link_text . '</a>
							</h5>
						</article>
					</div>
					';
			}
			$short_content .= '</div>';
		} else {
			$short_content .= '<div class="row  slink">';
			$n_no = 1;
			foreach ( $news as $n ) {
				$thumbnail         = $n['thumbnail'];
				$title_link        = $n['link_title'];
				$title_link_url    = $n['link_title']['url'];
				$title_link_text   = $n['link_title']['text'];
				$title_link_target = $n['link_title']['target'];
				$summary           = $n['summary'];
				$type              = $n['type'][0];
				$short_content .= '
					<div class="col-md-3 col-sm-6">
						<article class="c-other">';
				if ( $thumbnail ) {
					$short_content .= '			<img src="' . $thumbnail . '">';
				}
				$short_content .= '			<p class="lead-12 m-uppercase m-margin-top-10 m-font-museo-sans-700 m-margin-bottom-5">
								' . $type . '
							</p>
							<h5 class="m-font-museo-sans-500">
								<a target="' . $title_link_target . '" href="' . $title_link_url . '">' . $title_link_text . '</a>
							</h5>
						</article>
					</div>';
				if ( $n_no % 4 == '' ) {
					$short_content .= '</div><div class="row">';
				}
				$n_no ++;
			}
			$short_content .= '</div>';
		}
		?>
	<?php
	// Code
	return $short_content;
}
	add_shortcode( 'slink', 'short__link' );
}
if ( ! function_exists( 'short_quote_shortcode' ) ) {
	function short_quote_shortcode( $atts, $content = null ) {
		global $cfs;
		global $post;
		$attr = CFS()->get( 'quote_box', $post->ID );
		// Attributes
		$a         = shortcode_atts( array( 'id' => 'id' ), $atts );
		$get_value = filter_by_value( $attr, 'quote_id', $a['id'] );
		foreach ( $get_value as $key ) {
			$quote_desc   = $key['quote_desc'];
			$quote_author = $key['quote_author'];
			$quote_from   = $key['quote_from'];
			$quote_source = $key['quote_source'];
		}
		$short_link = "
					<div class='quote-fluid-container'>
						<div class='quote-new'>
							<blockquote class='m-blockquote-1'>
								<p>" . $quote_desc . "</p>
								<p><cite>" . $quote_author . "</cite></p>
							</blockquote>
						</div>
					</div>";

		// Code
		return $short_link;
	}

	add_shortcode( 'squote', 'short_quote_shortcode' );
}
if ( ! function_exists( 'short_html_shortcode' ) ) {
	function short_html_shortcode( $atts, $content = null ) {
		global $cfs;
		global $post;
		$attr = CFS()->get( 'html_shortcode', $post->ID );
		// Attributes
		$a         = shortcode_atts( array( 'id' => 'id' ), $atts );
		$get_value = filter_by_value( $attr, 'html_id', $a['id'] );
		foreach ( $get_value as $key ) {
			$html_code   = $key['html_code'];
			$custome_css = $key['custome_css'];
		}
		$short_link = '<div id="bot-list">' . $html_code . '</div><style>' . $custome_css . '</style>';

		// Code
		return $short_link;
	}

	add_shortcode( 'shtml', 'short_html_shortcode' );
}
/*
 * filtering an array
 */
if ( ! function_exists( 'filter_by_value' ) ) {
	function filter_by_value( $array, $index, $value ) {
		if ( is_array( $array ) && count( $array ) > 0 ) {
			foreach ( array_keys( $array ) as $key ) {
				$temp[ $key ] = $array[ $key ][ $index ];
				if ( $temp[ $key ] == $value ) {
					$newarray[ $key ] = $array[ $key ];
				}
			}
		}

		return $newarray;
	}
}
// shortcode dropcap
function dropcap( $atts, $content = null ) {
	return '<span class="dropcap">' . $content . '</span>';
}

add_shortcode( 'dropcap', 'dropcap' );
// shortcode lead style
function ar_lead( $atts, $content = null ) {
	return '<p class="lead-28 m-font-museo-100 m-text-green m-opacity-50">' . $content . '</p>';
}

add_shortcode( 'lead', 'ar_lead' );
// shortcode list style
function ar_list( $atts, $content = null ) {
	return str_replace( '<ul>', '<ul class="list-unstyled m-list-solid">', $content );
}

add_shortcode( 'slist', 'ar_list' );
function ar_row( $atts, $content = null ) {
	$a = shortcode_atts( array( 'class' => 'class' ), $atts );

	return '<div class="row ' . $a['class'] . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'srow', 'ar_row' );
function ar_col6( $atts, $content = null ) {
	return '<div class="col-md-6 col-sm-6"><article>' . $content . '</article></div>';
}

add_shortcode( 'scol6', 'ar_col6' );
function getLastPathSegment( $url ) {
	$path        = parse_url( $url, PHP_URL_PATH ); // to get the path from a whole URL
	$pathTrimmed = trim( $path, '/' ); // normalise with no leading or trailing slash
	$pathTokens  = explode( '/', $pathTrimmed ); // get segments delimited by a slash
	if ( substr( $path, - 1 ) !== '/' ) {
		array_pop( $pathTokens );
	}

	return end( $pathTokens ); // get the last segment
}

function ajax_historyback() {
	global $cfs;
	global $posts;
	if ( $_POST['post_uri'] != 'http://annualreport2016.cifor.org' ) {
		$post_uri = getLastPathSegment( $_POST['post_uri'] );
		$the_slug = $post_uri;
		$args     = array(
			'name'        => $the_slug,
			'post_type'   => 'page',
			'post_status' => 'publish',
			'numberposts' => 1
		);
		$my_posts = get_posts( $args );
		if ( $my_posts ) :
			$array = array( 'ID'         => $my_posts[0]->ID,
			                'post_title' => $my_posts[0]->post_title,
			                'post_link'  => get_the_permalink( $my_posts[0]->ID ),
			                'status'     => 'open'
			);
			$json  = json_encode( $array );
		endif;
	} else {
		$array = array( 'status' => 'close' );
		$json  = json_encode( $array );
	}
	echo $json;
	die();
}

add_action( 'wp_ajax_ajax_historyback', 'ajax_historyback' ); // ajax for logged in users
add_action( 'wp_ajax_nopriv_ajax_historyback', 'ajax_historyback' ); // ajax for not logged in users
/** Custom functions by reggarantai --------------------**/
require get_template_directory() . '/inc/rex_func.php';
/** ----------------------------------- ----------------**/




