jQuery(function ($) {
    if (!Modernizr.touch) {
        /*
        $.stellar.positionProperty.rex = {
            setTop: function($element, newTop, originalTop) {
              $element.css('top', newTop - 500);
            },
            setLeft: function($element, newLeft, originalLeft) {
              $element.css('left', newLeft);
            }
        }
        */

        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 40,
            horizontalOffset: 0,
            /*positionProperty: 'rex'*/
        });


        (function(){
            var ua = navigator.userAgent,
                isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

            if (isMobileWebkit) {
                jQuery('html').addClass('mobile');
            }

            jQuery(function(){
                var iScrollInstance;

                if (isMobileWebkit) {
                iScrollInstance = new iScroll('wrapper');

                jQuery('.m-section-parallax').stellar({
                    scrollProperty: 'transform',
                    positionProperty: 'transform',
                    horizontalScrolling: false,
                    verticalOffset: 40,
                    horizontalOffset: 0,
                });
                } else {
                jQuery.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 40,
                    horizontalOffset: 0,
                });
                }
            });
        })(); // end function

    }
});

