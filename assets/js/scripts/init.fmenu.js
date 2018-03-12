// $('.toggle').click(function () {
//     $(this).toggleClass('active');
//     $('#overlay-menu').toggleClass('open');
//     $('#sticknav').toggleClass('active');
// });


// $(document).on('keyup',function(evt) {
//     if (evt.keyCode == 27) {
//         $('#fmenu').removeClass('active');
//         $('#overlay-menu').removeClass('open');
//     }
// });

closepagepopup();

jQuery(function(jQuery){
    jQuery(".owl-carousel").owlCarousel();
    jQuery(".finance_owl").owlCarousel({
        loop: false,
        items: 1
    });

    /* init.fmenu.js */
    jQuery('.toggle').on('click',function () {
        jQuery(this).toggleClass('active');
        jQuery('#overlay-menu').toggleClass('open');
        jQuery('#sticknav').toggleClass('active');
        console.log('run sticknav toogle');
        if(jQuery('#fmenu').hasClass('popopen')){
            console.log('run sticknav toogle popopen');
            jQuery('.sticky-wrapper').toggleClass('hide');
            jQuery('#sticknav .toggle').toggleClass('active');
            jQuery('#sticknav .fmenu-btn').removeClass('popopen');
        }
    });


    jQuery('.tile-link,.right-menu ul li a').on('click',function(){
        console.log('run overlay .tile-link goto div u-1');
        jQuery('#overlay-menu').toggleClass('open');
        jQuery('#sticknav').toggleClass('active');
        jQuery('#sticknav .toggle').removeClass('active');
        jQuery('.single_menus .toggle').removeClass('active');
        jQuery('.overlay_close .fmenu-btn').removeClass('active');
        jQuery('.single-page.popup').removeClass('active');
        jQuery('.sticky-wrapper').removeClass('hide');
        jQuery('.loading-bar').hide();
        if(jQuery('.overlay-menu').hasClass('overlay_level2')){
            jQuery('html').toggleClass('freeze');
            jQuery('body').toggleClass('with-popup');
            jQuery('.overlay-menu').removeClass('overlay_level2');
        }


        history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
        document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';

    });



    jQuery(document).on('keyup',function(evt){
        if (evt.keyCode == 27) {
            jQuery('.loading-bar').hide();
            console.log('update u-6');
            if(jQuery('.overlay-menu').hasClass('open')==true){

                    console.log('run esc .overlay-menu open');
                    jQuery('.toggle').removeClass('active');
                    jQuery('#overlay-menu').removeClass('open');
                    jQuery('#sticknav').removeClass('active');

            }else if(jQuery('#single_page_popup').hasClass('active')){

                console.log('run esc #single_page_popup .active');

                    jQuery('.single-page.popup').removeClass('active');
                    jQuery('.sticky-wrapper').removeClass('hide');

                    jQuery('html').removeClass('freeze');
                    jQuery('body').removeClass('with-popup');

                    history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
                    document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';
                    return false;

            }
        }
    });

});


function closepagepopup(){
    jQuery('.close-btn, .a-close-btn, .close-popup').on('click',function(e){
        e.preventDefault();
        console.log('run close page popup u-3');
        jQuery('.single-page.popup').toggleClass('active');
        jQuery('.sticky-wrapper').toggleClass('hide');
        jQuery('#sticknav .toggle').removeClass('active');

        jQuery('html').toggleClass('freeze');
        jQuery('body').toggleClass('with-popup');
        jQuery('.loading-bar').hide();
        history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
        document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';
        return false;
    });
}

function singlegridmenus(){

    jQuery('.single_menus .fmenu-btn').on('click',function () {
        jQuery(this).toggleClass('active');
        jQuery('#sticknav .toggle').removeClass('active');
        jQuery('.single_menus .toggle').addClass('popopen');
        jQuery('#overlay-menu').toggleClass('open');
        jQuery('#sticknav').toggleClass('active');
        jQuery('.sticky-wrapper').toggleClass('hide');

        jQuery('.overlay_close .fmenu-btn').addClass('active');
        jQuery('.loading-bar').hide();
        jQuery('#overlay-menu').addClass('overlay_level2');

        console.log('run singlegridmenus -> single_menus u-4');
    });
}

jQuery('.overlay_close .fmenu-btn').on('click',function(){
    jQuery(this).removeClass('active');
    jQuery('.single_menus .fmenu-btn').removeClass('active');
    jQuery('#overlay-menu').toggleClass('open');
    jQuery('#sticknav').removeClass('active');
    jQuery('#sticknav .toggle').toggleClass('active');
    jQuery('.sticky-wrapper').toggleClass('hide');
    jQuery('.overlay-menu').removeClass('overlay_level2');
    jQuery('.loading-bar').hide();
    console.log('run singlegridmenus -> overlay_close u-4');
});

jQuery('.share_home .share-top-btn').on('click',function(){
    jQuery('.now-reading__sosmed_single-share').slideToggle();
});

// jQuery('.share-top-btn').on('click',function(){
//     jQuery('.now-reading__sosmed_single-share').slideToggle();
// });

function closepopup(){

    jQuery('.close-btn, .a-close-btn, .close-popup').on('click',function(e){
        e.preventDefault();
        console.log('run closepopup()');
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
        return false;
    });
}

function outsideClickClose(e){
    document.getElementById('single_page_popup').onclick = function(e) {
        e.preventDefault();
        if(e.target != document.getElementById('single_article')) {
            jQuery('.single-page.popup').toggleClass('active');
            jQuery('.sticky-wrapper').toggleClass('hide');
            jQuery('html').toggleClass('freeze');
            jQuery('body').toggleClass('with-popup');

            //document.getElementById('single_article').innerHTML = 'You clicked outside.';
        } else {
            //document.getElementById('single_article').innerHTML = 'Display Contents';
        }

        history.pushState({url:'http://annualreport2016.cifor.org'}, 'Putting Forests and People on the Global Agenda', 'http://annualreport2016.cifor.org');
        document.title = 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report';
        return false;
    }
}


shareFloating();
function shareFloating(){
    jQuery('.navi_share').click(function(e){
        e.preventDefault();
		//totalShares('http://annualreport2015.cifor.org/');
        jQuery('.shareBottom').toggleClass('active');
    });
    jQuery('.shareBottom').click(function(){
        jQuery(this).toggleClass('active');
    });

    jQuery('.share_home a,.share_home a').click(function(e){
        e.preventDefault();
        var url = jQuery(this).attr('href');
        window.open(url, 'Putting Forests and People on the Global Agenda - CIFOR\'s 2016 Annual Report', '');
        return false;

    });

    jQuery('a.gototop').on('click',function(){
        jQuery('html,body').animate({scrollTop:0},500);
        return false;
    });
}



 /* external */
jQuery("a").filter(function(){
    //console.log('run 1');
    return this.hostname && this.hostname !== location.hostname && this.hostname !== 'farm9.staticflickr.com' && this.hostname !== 'www.youtube.com' && this.hostname !== 'www.slideshare.net' && this.hostname !== 'annualreport2016.cifor.org' && this.hostname !== 'i0.wp.com' && this.hostname !== 'i1.wp.com' && this.hostname !== 'i2.wp.com';
}).click(function() {
    //console.log('run 2');
    window.open(this.href);
    return false;
});

