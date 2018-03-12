jQuery(function ($) {

    //jQuery = jQuery.noConflict();
    $url = document.URL;
    //console.log($url);
    jQuery('#getJSON').ready(function () {
        URL = $url; //'<?php  echo the_permalink(get_the_ID()); ?>';
        ajax_totalShares(URL);
    });

    // Format Number functions
    function ajax_ReplaceNumberWithCommas(yourNumber) {
        //Seperates the components of the number
        var components = yourNumber.toString().split(".");
        //Comma-fies the first part
        components[0] = components[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        //Combines the two sections
        return components.join(".");
    }


    // SHARE COUNTS FUNCTIONS

    // Facebook Shares Count
    function ajax_facebookShares(URL) {
        jQuery.getJSON('http://graph.facebook.com/?id=' + URL, function (fbdata) {
            jQuery('#total-shares').attr('data-facebookShares', fbdata.share.share_count)
        });


    }

    // Twitter Shares Count
    function ajax_twitterShares(URL) {


        jQuery.getJSON('http://public.newsharecounts.com/count.json?url=' + URL + '&callback=?', function (twitdata) {
            //  $('#twitter-count').text('The URL has ' + ReplaceNumberWithCommas(twitdata.count) + ' shares count on Twitter')
            jQuery('#total-shares').attr('data-twitterShares', twitdata.count)
        });



    }

    // LinkIn Shares Count
    function ajax_linkdInShares(URL) {

        jQuery.getJSON('https://www.linkedin.com/countserv/count/share?url=' + URL + '&callback=?', function (linkdindata) {
            jQuery('#total-shares').attr('data-linkdInShares', linkdindata.count)
        });


    }

    function ajax_googleplusShares(URL) {
        var GooglePlusdata = {
            "method": "pos.plusones.get",
            "id": URL,
            "params": {
                "nolog": true,
                "id": URL,
                "source": "widget",
                "userId": "@viewer",
                "groupId": "@self"
            },
            "jsonrpc": "2.0",
            "key": "p",
            "apiVersion": "v1"
        };
        $.ajax({
            type: "POST",
            url: "https://clients6.google.com/rpc",
            processData: true,
            contentType: 'application/json',
            cache: true,
            data: JSON.stringify(GooglePlusdata),
            success: function (r) {
                //add(r.result.metadata.globalCounts.count);
                //console.log(r);
                jQuery('#total-shares').attr('data-googleplusShares', r.result.metadata.globalCounts.count);
            }
        });
    }

    function ajax_kFormatter(num) {
        return num > 999 ? (num / 1000).toFixed(1) + 'k' : num
    }


    // Check if all JSON calls are finished or not

    function ajax_checkJSON_getSum() {

        if (jQuery('#total-shares').attr('data-facebookShares') != undefined || jQuery('#total-shares').attr('data-twitterShares') != undefined || jQuery('#total-shares').attr('data-linkdinshares') != undefined) {
            setTimeout(function () {

                $fb1 = parseInt(jQuery('#total-shares').attr('data-facebookShares'));
                //console.log($fb1 + ' ini fb 2');
                $fb1 = $fb1 ? $fb1 : 0;
                jQueryw1 = parseInt(jQuery('#total-shares').attr('data-twittershares'));
                //console.log(jQueryw1 + ' ini tw 1');
                $in1 = parseInt(jQuery('#total-shares').attr('data-linkdinshares'));
                //console.log($in1 + ' ini in 1');
                $in1 = $in1 ? $in1 : 0;

                $g1 = parseInt(jQuery('#total-shares').attr('data-googleplusShares'));
                //console.log($g1 + ' ini g+ 1');
                var googleplusShares = $g1;


                var fbShares = $fb1;
                var twitShares = jQueryw1;
                var linkdInShares = $in1;
                var fbShares = fbShares ? fbShares : 0;
                var twitShares = twitShares ? twitShares : 0;
                var linkdInShares = linkdInShares ? linkdInShares : 0;
                var googleplusShares = googleplusShares ? googleplusShares : 0;

                var totalShares = fbShares + twitShares + linkdInShares + googleplusShares;
                //console.log('fb' + fbShares + ' twit ' + twitShares + ' linkedin ' + linkdInShares + '');
                //console.log(totalShares);

                var topicShares = $fb1 + jQueryw1 + $in1 + $g1;
                if (totalShares < 1) {
                    totalShares = '0';
                }
                if (topicShares < 1) {
                    topicShares = '0';
                }

                jQuery('.share_counter').html(ajax_kFormatter(totalShares));
                jQuery('#total-count').html('<span title="Count Facebook, Twitter, LinkedIn">' + ajax_kFormatter(totalShares) + '</span>');
                jQuery('.share_count_top').html('' + ajax_kFormatter(totalShares) + '<span class="shares">Shares</span>');
                jQuery('.share_count_top.topic_count_top').html('' + ajax_kFormatter(topicShares) + '<span class="shares">Shares</span>');

            }, 2000);
        }
        // Check for JSON again!
        else {
            setTimeout(function () {
                ajax_checkJSON_getSum();
            }, 2000);
        }
    }

    function ajax_totalShares(URL) {
        // ajax_linkdInShares(URL);
        // ajax_twitterShares(URL);
        // ajax_googleplusShares(URL);
        // ajax_facebookShares(URL);
        // ajax_checkJSON_getSum();
    }

    jQuery('.linkpop').click(function (e) {
        e.preventDefault();
        var postid = jQuery(this).attr('data-postid');
        var posttitle = jQuery(this).attr('data-title');
        var posturi = jQuery(this).attr('data-uri');

        //console.log(postid);
        //console.log('ajax start');
        jQuery('.loading-bar').show();
        jQuery.ajax({
            url: ajax_object.ajaxurl,
            type: 'post',
            dataType: 'html',
            data: {
                action: 'ajax_tagfilteraction_stuff',
                post_id: postid
            },
            success: function (result) {
                //alert(result); // alerts 'ajax submitted''
                //console.log(result);

                jQuery('.single-page.popup').toggleClass('active');
                jQuery('.single-page').html(result);
                jQuery('.sticky-wrapper').toggleClass('hide');
                jQuery('html').toggleClass('freeze');
                jQuery('body').toggleClass('with-popup');
                jQuery('.download_pdf_link_wrapper_desktop').hide();
                closepopup();
                //outsideClickClose();
                loadnextpost();
                singlegridmenus();
                ajax_totalShares(posturi);
                jQuery('.loading-bar').hide();
                history.pushState({
                    url: posturi
                }, 'Putting forests and people on the global agenda', posturi);
                document.title = posttitle + ' | Putting forests and people on the global agenda';
                return false;


            },
            complete: function () {
                jQuery('.loading-bar').hide();
                //console.log('ajax stop linkpop');
            },
            error: function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            }
        })
    });


    function loadnextpost() {

        jQuery('#single_page_popup .share-top-btn').on('click', function () {
            jQuery('.now-reading__sosmed_single-share').slideToggle();
        });

        jQuery('.linkpopnext').on('click', function (e) {
            e.preventDefault();

            jQuery('.single-page.popup').toggleClass('active');
            jQuery('.sticky-wrapper').toggleClass('hide');
            jQuery('html').toggleClass('freeze');

            var postid = jQuery(this).attr('data-postid');
            var posttitle = jQuery(this).attr('data-title');
            var posturi = jQuery(this).attr('data-uri');

            //console.log('run ajax next page');
            //console.log('ajax start');
            jQuery('.loading-bar').show();
            jQuery.ajax({
                url: ajax_object.ajaxurl,
                type: 'post',
                dataType: 'html',
                data: {
                    action: 'ajax_tagfilteraction_stuff',
                    post_id: postid
                },
                success: function (result) {


                    jQuery('.single-page.popup').toggleClass('active');
                    jQuery('.single-page').html(result);
                    jQuery('.sticky-wrapper').toggleClass('hide');
                    jQuery('html').toggleClass('freeze');
                    jQuery('.download_pdf_link_wrapper_desktop').hide();

                    closepopup();
                    loadnextpost();
                    singlegridmenus();
                    jQuery('.loading-bar').hide();
                    ajax_totalShares(posturi);

                    history.pushState({
                        url: posturi
                    }, 'Putting forests and people on the global agenda', posturi);
                    document.title = posttitle + ' | Putting forests and people on the global agenda';
                    // var lenDiv =  jQuery('#single_page_popup').offset();
                    jQuery('#single_page_popup').scrollTop('#single_article');
                    jQuery('#single_page_popup').animate({
                        scrollTop: 0
                    }, 'slow');

                    return false;


                },
                complete: function () {
                    jQuery('.loading-bar').hide();
                    //console.log('ajax stop');
                },
                error: function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                }
            })
        });
    }



    function backhistory(xurl){
            //alert(xurl);
            jQuery('.loading-bar').show();
            //console.log(xurl);
            jQuery.ajax({
                url: ajax_object.ajaxurl,
                type: 'post',
                dataType : 'json',
                data: {
                    action: 'ajax_historyback',
                    post_uri: xurl
                },
                success: function (result) {

                    //console.log(result);
                    closepopup();
                    jQuery('.loading-bar').hide();
                    // ========
                    if(result.status=='open'){
                    // ============================================================================================ //
                            jQuery('.loading-bar').show();
                            jQuery('.single-page.popup').toggleClass('active');
                            jQuery('.sticky-wrapper').toggleClass('hide');
                            jQuery('html').toggleClass('freeze');

                            var postid = result.ID;
                            var posttitle = result.post_title;
                            var posturi = result.guid;

                            //console.log('run ajax next page');
                            //console.log('ajax start');

                            jQuery.ajax({
                                url: ajax_object.ajaxurl,
                                type: 'post',
                                dataType: 'html',
                                data: {
                                    action: 'ajax_tagfilteraction_stuff',
                                    post_id: postid
                                },
                                success: function (result) {

                                    jQuery('.single-page.popup').toggleClass('active');
                                    jQuery('.single-page').html(result);
                                    jQuery('.sticky-wrapper').toggleClass('hide');
                                    jQuery('html').toggleClass('freeze');
                                    jQuery('.download_pdf_link_wrapper_desktop').hide();

                                    closepopup();
                                    loadnextpost();
                                    singlegridmenus();
                                    jQuery('.loading-bar').hide();
                                    ajax_totalShares(posturi);

                                    // history.pushState({
                                    //     url: posturi
                                    // }, 'Putting forests and people on the global agenda', posturi);
                                    document.title = posttitle + ' | Putting forests and people on the global agenda';
                                    // var lenDiv =  jQuery('#single_page_popup').offset();
                                    jQuery('#single_page_popup').scrollTop('#single_article');
                                    jQuery('#single_page_popup').animate({
                                        scrollTop: 0
                                    }, 'slow');
                                    return false;
                                },
                                complete: function () {
                                    jQuery('.loading-bar').hide();
                                    //console.log('ajax stop');
                                },
                                error: function (jqXHR, textStatus) {
                                    alert("Request failed: " + textStatus);
                                }
                            })

                    // ========================================================================================= //
                    }else{
                        jQuery('#sticknav .toggle').removeClass('active');
                        jQuery('.single-page.popup').toggleClass('active');
                        jQuery('.sticky-wrapper').toggleClass('hide')
                        jQuery('html').toggleClass('freeze');
                        jQuery('body').toggleClass('with-popup');
                        jQuery('.loading-bar').hide();
                        jQuery('.download_pdf_link_wrapper_desktop').show();
                        history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
                        document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';
                        jQuery('#single_page_popup').html('');
                    }
                    return false;

                }, complete: function () {
                    jQuery('.loading-bar').hide();
                    //console.log('ajax stop linkpop');
                },
                error: function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                }

            });
        }



    window.onload = function () {
        if (typeof history.pushState === "function") {
            //console.log('cek 1');
            //history.pushState("jibberish", null, null);
            window.onpopstate = function (event) {

                var state  = JSON.stringify(event.state);
                console.log(state);
                // console.log(event.target.$url);
                // console.log(event);
                //var hisuri = event.target.history.state.url;
                if(state!='null'){
                    //console.log(event.target.history.state.url);
                    backhistory(event.target.history.state.url);
                    //console.log('cek 2 a');

                }else{
                    console.log('cek 2 b');
                    jQuery('#sticknav .toggle').removeClass('active');
                    jQuery('.single-page.popup').removeClass('active');
                    //jQuery('.sticky-wrapper').toggleClass('hide')
                    jQuery('html').removeClass('freeze');
                    jQuery('body').removeClass('with-popup');
                    jQuery('.loading-bar').hide();
                    jQuery('.download_pdf_link_wrapper_desktop').show();
                    history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
                    document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';
                    jQuery('#single_page_popup').html('');
                }

                //history.pushState('newjibberish', null, null);
                // Handle the back (or forward) buttons here
                // Will NOT handle refresh, use onbeforeunload for this.
            };
        }
        else {
            var ignoreHashChange = true;
            window.onhashchange = function () {
                if (!ignoreHashChange) {
                    ignoreHashChange = true;
                    window.location.hash = Math.random();
                    console.log('cek 3');
                    // Detect and redirect change here
                    // Works in older FF and IE9
                    // * it does mess with your hash symbol (anchor?) pound sign
                    // delimiter on the end of the URL
                }else{
                    console.log('cek 4');
                    ignoreHashChange = false;
                }
            };
        }
    }

});

 /* external */
jQuery("a").filter(function(){
    //console.log('run 1');
    return this.hostname && this.hostname !== location.hostname && this.hostname !== 'farm9.staticflickr.com' && this.hostname !== 'www.youtube.com' && this.hostname !== 'www.slideshare.net' && this.hostname !== 'annualreport2016.cifor.org' && this.hostname !== 'i0.wp.com' && this.hostname !== 'i1.wp.com' && this.hostname !== 'i2.wp.com';
}).click(function() {
    //console.log('run 2');
    window.open(this.href);
    return false;
});
