<?php function _rex_sidemenu($menu_name)
{
    $menu = wp_get_nav_menu_object($menu_name);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($menu_items) {
        $this_parent_menu = array();
        $this_child_menu = array();
        $check_has_child = array();
        foreach ($menu_items as $m) {
            if (!$m->menu_item_parent) {
                array_push($this_parent_menu, array('m_ID' => $m->ID, 'm_title' => $m->title, 'm_link' => $m->url));
            } else {
                array_push($this_child_menu, array('m_ID' => $m->ID, 'm_parent' => $m->menu_item_parent, 'm_title' => $m->title, 'm_link' => $m->url));
                array_push($check_has_child, $m->menu_item_parent);
            }
        }
        foreach ($this_parent_menu as $tpm) {
            ?>
            <?php if (in_array($tpm['m_ID'], $check_has_child)) {
                $child = TRUE;
            } else {
                $child = FALSE;
            } ?>
            <li class="<?php if ($child) {
                echo 'has-subnav ';
            };if($url == $tpm['m_link']){echo 'active';} ?>">
                <a href="<?php echo $tpm['m_link']; ?>"><span class="sidenav-item"><?php echo $tpm['m_title']; ?></span></a>

                <?php if ($child) { ?>
                    <ul class="nav">
                        <?php foreach ($this_child_menu as $tcm) {
                            if (in_array($tcm['m_ID'], $check_has_child)) {
                                $child = TRUE;
                            } else {
                                $child = FALSE;
                            }
                            if ($tcm['m_parent'] == $tpm['m_ID']) {?>
                                <li class="<?php if($url == $tcm['m_link']){echo 'active';} ?>">
                                     <a href="<?php echo $tcm['m_link']; ?>"><span class="sidenav-sub-item"><?php echo $tcm['m_title']; ?></span></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php }
    }
}

function _rex_menu_mobile($menu_name)
{
    $menu = wp_get_nav_menu_object($menu_name);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($menu_items) {
        $this_parent_menu = array();
        $this_child_menu = array();
        $check_has_child = array();
        foreach ($menu_items as $m) {
            if (!$m->menu_item_parent) {
                array_push($this_parent_menu, array('m_ID' => $m->ID, 'm_title' => $m->title, 'm_link' => $m->url));
            } else {
                array_push($this_child_menu, array('m_ID' => $m->ID, 'm_parent' => $m->menu_item_parent, 'm_title' => $m->title, 'm_link' => $m->url));
                array_push($check_has_child, $m->menu_item_parent);
            }
        }
        foreach ($this_parent_menu as $tpm) {
            ?>
            <?php if (in_array($tpm['m_ID'], $check_has_child)) {
                $child = TRUE;
            } else {
                $child = FALSE;
            } ?>
            <li class="research-menu-mobile "<?php if($url == $tpm['m_link']){echo 'active';} ?>">
                <a href="<?php echo $tpm['m_link']; ?>" class="m-link-white"><?php echo $tpm['m_title']; ?></a>

                <?php if ($child) { ?>
                    <ul class="list-unstyled sub-research">
                        <?php foreach ($this_child_menu as $tcm) {
                            if ($tcm['m_parent'] == $tpm['m_ID']) {?>
                                <li class="<?php if($url == $tcm['m_link']){echo 'active';} ?>">
                                    <a href="<?php echo $tcm['m_link']; ?>" class="m-link-white"><?php echo $tcm['m_title']; ?></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php }
    }
}

function _rex_right_menu($menu_name)
{
    $menu = wp_get_nav_menu_object($menu_name);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($menu_items) {
        $this_parent_menu = array();
        $this_child_menu = array();
        $check_has_child = array();
        foreach ($menu_items as $m) {
            if (!$m->menu_item_parent) {
                array_push($this_parent_menu, array('m_ID' => $m->ID, 'm_title' => $m->title, 'm_link' => $m->url));
            } else {
                array_push($this_child_menu, array('m_ID' => $m->ID, 'm_parent' => $m->menu_item_parent, 'm_title' => $m->title, 'm_link' => $m->url));
                array_push($check_has_child, $m->menu_item_parent);
            }
        }
        foreach ($this_parent_menu as $tpm) {
            ?>
            <?php if (in_array($tpm['m_ID'], $check_has_child)) {
                $child = TRUE;
            } else {
                $child = FALSE;
            } ?>
            <li class=" "<?php if($url == $tpm['m_link']){echo 'active';} ?>">
                <a href="<?php echo $tpm['m_link']; ?>" class="m-link-white"><?php echo $tpm['m_title']; ?></a>

                <?php if ($child) { ?>
                    <ul class="list-unstyled sub-research research-menu-mobile <?php /*sub-right-menu*/?>">
                        <?php foreach ($this_child_menu as $tcm) {
                            if ($tcm['m_parent'] == $tpm['m_ID']) {?>
                                <li class="<?php if($url == $tcm['m_link']){echo 'active';} ?>">
                                    <a href="<?php echo $tcm['m_link']; ?>" class="m-link-white"><?php echo $tcm['m_title']; ?></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php }
    }
}
add_action('admin_menu', '_rex_ar2016_admin_overlay_menu');
function _rex_ar2016_admin_overlay_menu() {
    $page_title = 'Overlay menu';
    $menu_title = 'Overlay menu';
    $capability = 'edit_posts';
    $menu_slug = '_rex_ar2016_overlay_menu_option';
    $function = '_rex_ar2016_overlay_menu_func';
    //$icon_url = '';
    //$position = 29;
    add_menu_page ( $page_title, $menu_title, $capability, $menu_slug, $function);
}function _rex_ar2016_overlay_menu_func(){
    $nonce_key = '.33kAR@)!^M6V4;_reggarantai.com-CIFOR-AR2016_drqQK9Z3*8+6m5';
    if (isset($_POST['_rex_ar2016_overlay_menu_submit'])) {
        
        update_option('_rex_ar2016_overlay_menu_r_1_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_1_image'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_2_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_2_image'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_3_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_3_image'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_4_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_4_image'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_5_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_5_image'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_6_image', filter_var($_POST['_rex_ar2016_overlay_menu_r_6_image'],FILTER_SANITIZE_URL));
        
        update_option('_rex_ar2016_overlay_menu_r_1_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_1_label'],FILTER_SANITIZE_STRING));
        update_option('_rex_ar2016_overlay_menu_r_2_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_2_label'],FILTER_SANITIZE_STRING));
        update_option('_rex_ar2016_overlay_menu_r_3_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_3_label'],FILTER_SANITIZE_STRING));
        update_option('_rex_ar2016_overlay_menu_r_4_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_4_label'],FILTER_SANITIZE_STRING));
        update_option('_rex_ar2016_overlay_menu_r_5_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_5_label'],FILTER_SANITIZE_STRING));
        update_option('_rex_ar2016_overlay_menu_r_6_label', filter_var($_POST['_rex_ar2016_overlay_menu_r_6_label'],FILTER_SANITIZE_STRING));
        
        update_option('_rex_ar2016_overlay_menu_r_1_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_1_link'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_2_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_2_link'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_3_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_3_link'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_4_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_4_link'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_5_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_5_link'],FILTER_SANITIZE_URL));
        update_option('_rex_ar2016_overlay_menu_r_6_link', filter_var($_POST['_rex_ar2016_overlay_menu_r_6_link'],FILTER_SANITIZE_URL));
        
        update_option('_rex_ar2016_overlay_menu_r_1_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_1_class'],FILTER_SANITIZE_STRING)));
        update_option('_rex_ar2016_overlay_menu_r_2_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_2_class'],FILTER_SANITIZE_STRING)));
        update_option('_rex_ar2016_overlay_menu_r_3_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_3_class'],FILTER_SANITIZE_STRING)));
        update_option('_rex_ar2016_overlay_menu_r_4_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_4_class'],FILTER_SANITIZE_STRING)));
        update_option('_rex_ar2016_overlay_menu_r_5_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_5_class'],FILTER_SANITIZE_STRING)));
        update_option('_rex_ar2016_overlay_menu_r_6_class', trim(filter_var($_POST['_rex_ar2016_overlay_menu_r_6_class'],FILTER_SANITIZE_STRING)));
    }
    
    $_rex_ar2016_overlay_menu_r_1_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_1_image', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_2_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_2_image', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_3_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_3_image', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_4_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_4_image', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_5_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_5_image', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_6_image = filter_var(get_option('_rex_ar2016_overlay_menu_r_6_image', ''),FILTER_SANITIZE_URL);
    
    $_rex_ar2016_overlay_menu_r_1_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_1_label', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_2_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_2_label', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_3_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_3_label', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_4_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_4_label', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_5_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_5_label', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_6_label = filter_var(get_option('_rex_ar2016_overlay_menu_r_6_label', ''),FILTER_SANITIZE_STRING);
    
    $_rex_ar2016_overlay_menu_r_1_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_1_link', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_2_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_2_link', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_3_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_3_link', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_4_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_4_link', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_5_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_5_link', ''),FILTER_SANITIZE_URL);
    $_rex_ar2016_overlay_menu_r_6_link = filter_var(get_option('_rex_ar2016_overlay_menu_r_6_link', ''),FILTER_SANITIZE_URL);
    
    $_rex_ar2016_overlay_menu_r_1_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_1_class', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_2_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_2_class', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_3_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_3_class', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_4_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_4_class', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_5_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_5_class', ''),FILTER_SANITIZE_STRING);
    $_rex_ar2016_overlay_menu_r_6_class = filter_var(get_option('_rex_ar2016_overlay_menu_r_6_class', ''),FILTER_SANITIZE_STRING);
    ?>
    <style>
    .regular-text,.input {display: block;margin: 12px 0 0;width: 100%;margin-top: 2px;}
    .postbox{display: inline-block;width:31%;vertical-align: top;max-width: 332px}
    .image-preview {max-width: 308px;margin-top:12px}
    .overlay_menu_container label{color: #888;letter-spacing: 1px}
    input.upload-button.button-secondary {
        width: 100%;
        background: #07b5a9 !important;
        color: #0a6b65 !important;
        text-shadow: 1px 1px 0px #01cec0;
        border: 0px;
        border-radius: 2px;
        margin-top: 8px;
        margin-bottom: 10px;
    }
    </style>
    <div class="wrap overlay_menu_container">
        <h1>Overlay menu (Research)</h1>
        <hr>
        <form method="POST">
            <?php wp_nonce_field( basename(__FILE__), $nonce_key );?>
        
            <div id="poststuff">
                <div id="post-body" class="metabox-holder">
                    
                    <div id="post-body-content" style="position: relative;">
                        
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 1</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 1</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_1_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_1_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_1_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_1_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_1_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_1_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_1_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_1_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_1_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_1_class;?>"/>
                            </div>
                        </div>
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 2</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 2</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_2_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_2_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_2_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_2_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_2_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_2_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_2_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_2_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_2_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_2_class;?>"/>
                            </div>
                        </div>
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 3</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 3</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_3_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_3_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_3_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_3_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_3_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_3_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_3_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_3_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_3_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_3_class;?>"/>
                            </div>
                        </div>
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 4</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 4</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_4_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_4_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_4_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_4_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_4_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_4_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_4_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_4_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_4_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_4_class;?>"/>
                            </div>
                        </div>
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 5</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 5</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_5_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_5_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_5_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_5_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_5_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_5_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_5_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_5_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_5_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_5_class;?>"/>
                            </div>
                        </div>
                        
                        <div class="postbox">
                            <h3 class="hndle ui-sortable-handle"><span>Research 6</span></h3>
                            <div class="inside">
                                <label class="screen-reader-text">Research 6</label>
                                <div class="image-preview">
                                    <?php if($_rex_ar2016_overlay_menu_r_6_image){?>
                                        <img style="width:100%;height:auto" src="<?php echo _rex_get_image($_rex_ar2016_overlay_menu_r_6_image,'308x209');?>"/>
                                    <?php }?>
                                </div>
                                <input type="button" id="" class="upload-button button-secondary" value="Upload Image">
                                <input type="hidden" name="_rex_ar2016_overlay_menu_r_6_image" id="" class="regular-text" value="<?php echo $_rex_ar2016_overlay_menu_r_6_image;?>">
                                <br>
                                <label><b>Label</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_6_label" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_6_label;?>"/>
                                <br>
                                <label><b>Link</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_6_link" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_6_link;?>"/>
                                <br>
                                <label><b>CSS class</b></label>
                                <input name="_rex_ar2016_overlay_menu_r_6_class" id="" class="input" value="<?php echo $_rex_ar2016_overlay_menu_r_6_class;?>"/>
                            </div>
                        </div>
                        
                        <hr>
                        <input type="submit" value="Save" name="_rex_ar2016_overlay_menu_submit" class="button button-primary button-large">
                        
                    </div>
                    
                    <div id="postbox-container-1" class="postbox-container">
                        
                    </div>
                    
                </div>
            </div>
            
        </form>
    </div>
    
    <?php wp_enqueue_media ();?>
    <script>
        jQuery(document).ready(function($){
            $('.upload-button').click(function(e) {
                var thisBlock = $(this);
                var thisID = thisBlock.attr('id');
                e.preventDefault();
                var image = wp.media({ 
                    title: 'Upload Image',
                    multiple: false
                }).open()
                .on('select', function(e){
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    thisBlock.next().val(image_url);
                    thisBlock.prev().html('<img style="width:100%;height:auto" src="'+image_url+'"/>');
                });
            });
        });
        </script>
    
<?php }
function _rex_get_image($image_url,$size = false){
    if($size){
        $ext = explode('.',$image_url);
        $name = '';
        for($i=0;$i<(count($ext) - 1);$i++){
            if($i>0){$name .= '.';}
            $name .= $ext[$i];
        }
        $the_image = esc_url( $name.'-'.$size.'.'.$ext[count($ext) - 1] );
        $p = parse_url($the_image);
        if (file_exists(ABSPATH.substr($p['path'],1))) {
            return $the_image;
        }else{
            return esc_url( $image_url );    
        }
    }else{
        return esc_url( $image_url );
    }
}
?>