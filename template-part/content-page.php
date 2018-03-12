<?php
// start loop single
    while ( have_posts() ) : the_post();
        $post_id = get_the_ID();    //
			?>
			<style>
				/* sidebar */
				.a-sidebar h5,
				.a-sidebar h6{
					font-family: Museo-Sans-700, sans-serif;
					color: #4c4c4c !important;
					text-transform:uppercase;
					font-size: 14px;
					line-height: 1.3em;
					margin-bottom: 10px;
					font-weight: 600;
				}
				.a-sidebar ul{
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
				.main-content h3{
					color: #4c4c4c !important;
					font-family: 'Museo-Sans-700', sans-serif;
					margin-top: 30px !important;
					font-size: 16px;
					line-height: 1.3em;
					margin-bottom: 10px;

				}
				.main-content hr{
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
				.no-featured-image{
					height:60px;
				}
                @media print { 
                    /*.popup {position: static}*/
                    #wrapper {display: none}
                }
			</style>
			<?php
				$parent_id = wp_get_post_parent_id( $post_id );
				$parent_parent_id = wp_get_post_parent_id( $parent_id );
				$featured_image = get_the_post_thumbnail( get_the_ID(), 'single-header' );
			?>
			<article class="<?php echo sanitize_title( get_the_title( $post_id ) ); ?>">
				<header class="m-section m-section-white single-hero-img <?php if(empty($featured_image)){ echo " no-featured-image";}?>">
					<div class="top-head-nav">
						<div class="single-breadcrumb-container">
							<ul class="list-unstyled single-breadcrumb m-uppercase">
								<?php
								if($parent_parent_id){ echo '<li> <a href="#">'.get_the_title($parent_parent_id).'</a> </li>';}
								if($parent_id){ echo '<li>  &nbsp;<a href="#">'.get_the_title($parent_id).'</a> </li>';}
								?>
								<li class="bc-active"> <?php echo get_the_title();?> </li>
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
					<?php echo $featured_image; ?>
				</header>

				<div class="m-section m-section-white content-single">
					<div class="container m-padding-top-30 m-padding-bottom-30">
						<div class="row">
							<div class="col-md-3 col-sm-12 a-sidebar ar_hidden_mobile">
								<?php
								$side_content = CFS()->get('widgets',get_the_ID());
								foreach($side_content as $sc){
									echo do_shortcode($sc['widget_content']);
								}
								?>

							</div>
							<div class="col-sm-9 pull-right">
								<div class="main-content">
									<h1 class="m-font-museo-100">
										<?php the_title(); ?>
									</h1>
									<div class="share-box-container">
										<ul class="list-unstyled share-links">
											<li class="m-weight-600 m-uppercase m-font-museo-sans-700">
												Share
											</li>
											<li class="twitter-sm">
												<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter_sm_green.svg"> </a>
											</li>
											<li class="facebook-sm">
												<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/facebook_sm_green.svg"> </a>
											</li>
											<li class="linkedin-sm">
												<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/linkedin_sm_green.svg"> </a>
											</li>
										</ul>
									</div>

									<p class="lead-28 m-font-museo-100 m-text-green m-opacity-50">
										<?php //the_excerpt();?>
									</p>
									<!--<span class="dropcap">M</span> -->
									<?php the_content();?>
									<?php
									//ar_publication();
									ar_relatedPosts(get_the_ID());
									 ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				$page_template  = get_post_meta( get_the_ID(), '_wp_page_template', true );
				$page_template = str_replace('template-page/','',$page_template);
				if($page_template!='template-page-ar.php' AND $page_template!='template-message-dg.php' AND $page_template!='template-message-bot.php'){
					//ar_relatedThemeStory(get_the_ID());
				}
				?>
				<div class="a-close-btn-container">
					<a href="#" class="a-close-btn m-uppercase"><span>Close</span> to continue reading CIFOR's 2016 Annual report 1</a>
				</div>
			</article>


			<?php
			// end loop single

			/*<script>
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
			</script>
	    */

			  ?>

    <?php
    endwhile; // End of the loop.
?>