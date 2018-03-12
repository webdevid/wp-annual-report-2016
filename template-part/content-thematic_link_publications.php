<?php
    $tooltip = get_post_meta( get_the_ID(), 'tooltip_title', 'single' );
    $tooltip_content = get_post_meta( get_the_ID(), 'tooltip_content', 'single' );
?>
<div class="publications-box tf-box">
    <div class="subtitle">
        <a href="<?php echo get_the_permalink();?>" class="linkpop"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
            <h5>Publications</h5>
        </a>
    </div>
    <div class="hover-up">
        <div class="hover-up-container">
            <a href="<?php echo get_the_permalink();?>" class="linkpop"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
            <h6 class="lead-13 m-font-museo-sans-500 m-margin-bottom-5"><?php echo $tooltip; ?></h6>
            </a>
            <p class="lead-13 m-margin-bottom-0">
                <?php echo $tooltip_content;?>
            </p>
            <div class="h-u-more">
                <a href="<?php echo get_the_permalink();?>" class="linkpop"  data-title="<?php echo get_the_title();?>" data-postid="<?php echo get_the_ID();?>" data-uri="<?php echo get_the_permalink();?>">
                READ MORE
                </a>
            </div>
        </div>
    </div>
</div>