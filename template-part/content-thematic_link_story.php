<?php
    $tooltip = get_post_meta( get_the_ID(), 'tooltip_title', 'single' );
    $tooltip_content = get_post_meta( get_the_ID(), 'tooltip_content', 'single' );
    /*data-toggle="popover" data-trigger="hover" data-placement="top" title="<?php echo $tooltip; ?>" data-content="<?php echo $tooltip_content;?>" */
?>
<style type="text/css">
	.popover{
		z-index: 8000 !important;
	}
</style>
<div class="featured-stories tf-box m-section-cover" style="background-image: url(<?php  if ( has_post_thumbnail() ){ the_post_thumbnail_url('thumb-story-home'); } ?>); background-size:cover;">

        <div class="fs-overlay-container subtitle">
            <div class="fs-overlay">
                <h5>Story of change</h5>
                <a href="<?php echo get_the_permalink();?>" class="linkpop fs-overlay-container"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>" >
                <h4 class="fs-title" style="color:#FFFFFF;"><?php echo get_the_title();?></h4>
                </a>
            </div>
            <div class="hover-up">
                <div class="hover-up-container">
                    <a href="<?php echo get_the_permalink();?>" class="linkpop fs-overlay-container"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>" >
                    <h6 class="lead-16 m-font-museo-sans-500 m-margin-bottom-5" style="color:#FFFFFF;"><?php echo $tooltip; ?></h6>
                    </a>
                    <p class="lead-14">
                        <?php echo $tooltip_content;?>
                    </p>
                    <a href="<?php echo get_the_permalink();?>" data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>" class="btn btn-primary linkpop btn-outline-inverse m-uppercase m-font-museo-sans-500 lead-13">Read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>

</div>