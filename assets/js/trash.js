/*! Lazy Load 1.9.4 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function (a, b, c, d) {
    var e = a(b);
    a.fn.lazyload = function (f) {
        function g() {
            var b = 0;
            i.each(function () {
                var c = a(this);
                if (!j.skip_invisible || c.is(":visible"))if (a.abovethetop(this, j) || a.leftofbegin(this, j)); else if (a.belowthefold(this, j) || a.rightoffold(this, j)) {
                    if (++b > j.failure_limit)return !1
                } else c.trigger("appear"), b = 0
            })
        }

        var h, i = this, j = {
            threshold: 0,
            failure_limit: 0,
            event: "scroll",
            effect: "show",
            container: b,
            data_attribute: "original",
            skip_invisible: !0,
            appear: null,
            load: null,
            placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
        };
        return f && (d !== f.failurelimit && (f.failure_limit = f.failurelimit, delete f.failurelimit), d !== f.effectspeed && (f.effect_speed = f.effectspeed, delete f.effectspeed), a.extend(j, f)), h = j.container === d || j.container === b ? e : a(j.container), 0 === j.event.indexOf("scroll") && h.bind(j.event, function () {
            return g()
        }), this.each(function () {
            var b = this, c = a(b);
            b.loaded = !1, (c.attr("src") === d || c.attr("src") === !1) && c.is("img") && c.attr("src", j.placeholder), c.one("appear", function () {
                if (!this.loaded) {
                    if (j.appear) {
                        var d = i.length;
                        j.appear.call(b, d, j)
                    }
                    a("<img />").bind("load", function () {
                        var d = c.attr("data-" + j.data_attribute);
                        c.hide(), c.is("img") ? c.attr("src", d) : c.css("background-image", "url('" + d + "')"), c[j.effect](j.effect_speed), b.loaded = !0;
                        var e = a.grep(i, function (a) {
                            return !a.loaded
                        });
                        if (i = a(e), j.load) {
                            var f = i.length;
                            j.load.call(b, f, j)
                        }
                    }).attr("src", c.attr("data-" + j.data_attribute))
                }
            }), 0 !== j.event.indexOf("scroll") && c.bind(j.event, function () {
                b.loaded || c.trigger("appear")
            })
        }), e.bind("resize", function () {
            g()
        }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && e.bind("pageshow", function (b) {
            b.originalEvent && b.originalEvent.persisted && i.each(function () {
                a(this).trigger("appear")
            })
        }), a(c).ready(function () {
            g()
        }), this
    }, a.belowthefold = function (c, f) {
        var g;
        return g = f.container === d || f.container === b ? (b.innerHeight ? b.innerHeight : e.height()) + e.scrollTop() : a(f.container).offset().top + a(f.container).height(), g <= a(c).offset().top - f.threshold
    }, a.rightoffold = function (c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.width() + e.scrollLeft() : a(f.container).offset().left + a(f.container).width(), g <= a(c).offset().left - f.threshold
    }, a.abovethetop = function (c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.scrollTop() : a(f.container).offset().top, g >= a(c).offset().top + f.threshold + a(c).height()
    }, a.leftofbegin = function (c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.scrollLeft() : a(f.container).offset().left, g >= a(c).offset().left + f.threshold + a(c).width()
    }, a.inviewport = function (b, c) {
        return !(a.rightoffold(b, c) || a.leftofbegin(b, c) || a.belowthefold(b, c) || a.abovethetop(b, c))
    }, a.extend(a.expr[":"], {
        "below-the-fold": function (b) {
            return a.belowthefold(b, {threshold: 0})
        }, "above-the-top": function (b) {
            return !a.belowthefold(b, {threshold: 0})
        }, "right-of-screen": function (b) {
            return a.rightoffold(b, {threshold: 0})
        }, "left-of-screen": function (b) {
            return !a.rightoffold(b, {threshold: 0})
        }, "in-viewport": function (b) {
            return a.inviewport(b, {threshold: 0})
        }, "above-the-fold": function (b) {
            return !a.belowthefold(b, {threshold: 0})
        }, "right-of-fold": function (b) {
            return a.rightoffold(b, {threshold: 0})
        }, "left-of-fold": function (b) {
            return !a.rightoffold(b, {threshold: 0})
        }
    })
}(jQuery, window, document);
;
function Ar2014() {

    Ar2014.scrolled = false;
    Ar2014.hasPopup = false;
    Ar2014.animDuration = 500;
    Ar2014.sideScrolling = false;
    Ar2014.ar2014stories = [];
    Ar2014.currentSection = '';
    Ar2014.supportsHistory = history.pushState ? true : false;
    $ = jQuery;

    // transfer image to article background
    Ar2014.fullStoryBackground = function ($storyElement) {

        var $img = $('header img', $storyElement).eq(0);

        var $imgSrc = $img.attr('src');

        $('header', $storyElement).attr('style', 'background-image: url("' + $imgSrc + '")');

        $img.hide();

    }

    // close story popup
    Ar2014.closePopup = function () {

        $('body').removeClass('with-popup');

        $('.popup').fadeOut(function () {

            $('.story-popup').html('');

        })

        Ar2014.hasPopup = false;

    }

    Ar2014.getNodeUrlPart = function (url) {

        var nodeUrlPartRe = /\/([^\/]*)$/;
        return url.match(nodeUrlPartRe)[0];

    }

    Ar2014.activatePopup = function () {

        if (!Ar2014.hasPopup) {
            $('.popup').fadeIn();
        } else {
            $('.story-popup').fadeOut();
        }

    }

    Ar2014.pushStateAdapter = function (state, title, url) {

        if (Ar2014.supportsHistory) {
            history.pushState(state, title, url);
        } else {
            location.href = url
        }

        if (typeof ga != 'undefined') {
            ga('send', 'event', 'AR2014');
        }

    }

    Ar2014.addthis = function () {

        var addthis_config = addthis_config || {};
        addthis_config.pubid = 'ccafs';
        addthis.toolbox('.addthis_toolbox');
    }

    Ar2014.navigateToIndex = function ()
    Â
    {

        Ar2014.pushStateAdapter({page: 'index'}, null, Drupal.settings.annual_report_2014.base_path);
        Ar2014.closePopup();

    }

    Ar2014.populatePopupWithStory = function (data, storyPath, doPush) {

        if (typeof data == "string") {
            $('.story-popup').html(data);
        } else {
            $('.story-popup').append($(data));
        }

        $('.story-popup .report-story-container').append('<i class="close" />');
        $('.story-popup').prepend('<div class="close-anchor"></div>');
        $('.close-anchor').click(function () {

            Ar2014.navigateToIndex();
            return false;

        });

        $('i.close').click(function () {

            Ar2014.navigateToIndex();
            return false;

        });

        //addthis
        Ar2014.addthis();

        var $story = $('.popup .story-full');
        Ar2014.fullStoryBackground($story);

        var $nextPrev = $('.popup .next-prev article');

        $nextPrev.click(function () {
            Ar2014.displayStory($(this), true);
            return false;
        });


        Ar2014.hasPopup = true;

        $('.popup').scrollTo(0, Ar2014.animDuration);
        $('.story-popup').fadeIn();

        if (storyPath && doPush) {

            Ar2014.pushStateAdapter({page: 'story', storyPath: storyPath}, null, storyPath);

        }

    }

    // display story in a popup
    Ar2014.displayStory = function (story, doPush) {

        var $anchor = $('h4 a', story);

        var storyPath = $anchor.attr('href');
        var dataPath = $anchor.attr('data-url');
        var storyTitle = $anchor.html();
        var chapterName = $anchor.closest('section').find('h3').html();

        Ar2014.trackEvent('read story', storyTitle);
        Ar2014.trackEvent('read story in chapter', chapterName);


        if (!Ar2014.supportsHistory) {
            Ar2014.pushStateAdapter(null, null, storyPath);
            return false;
        }

        $('body').addClass('with-popup');

        Ar2014.activatePopup();

        $('.popup').append('<div class="loading">loading story</div><div class="sp"><div class="b1"></div><div class="b2"></div><div class="b3"></div></div>');


        // cache stories
        if (Ar2014.ar2014stories[dataPath]) {

            Ar2014.populatePopupWithStory(Ar2014.ar2014stories[dataPath], storyPath, doPush);

        } else {

            $.get(dataPath + '?aj', function (data)
            Â
            {

                Ar2014.populatePopupWithStory(data, storyPath, doPush);
                $('.popup .loading').remove();
                Ar2014.ar2014stories[dataPath] = data;

            }
        )
        }

        //addthis
        Ar2014.addthis();

        return false;

    }

    Ar2014.displayCurrentStory = function () {

        $('body').addClass('with-popup');
        Ar2014.trackEvent('landed on story', $('main h2').html());
        Ar2014.activatePopup();
        Ar2014.populatePopupWithStory($('main'));

    }


    /*
     * scroll
     */

    Ar2014.setCurrentSection = function (section)
    
    {

        var sectionMainClass = section.attr('data-menu-class');

        if (sectionMainClass != Ar2014.currentSection) {

            //Ar2014.trackEvent('scrolled to section',$('h3',section).html());

            // top menu
            $('.top-menu').attr('class', 'top-menu ' + sectionMainClass);

            // show top menu only if past first chapter
            if (sectionMainClass != 'chapter-1') {
                $('.top-menu').addClass('visible');
                $('.top-menu .section-name').html($('h3', section).html());
            } else {
                $('.top-menu .section-name').html('');
            }

            // side menu
            $('.chapters-menu li').removeClass('current');
            $('.chapters-menu li[class~="' + sectionMainClass + '"]').addClass('current');

            var hash = '#' + section.attr('id');

            //pushStateAdapter({page: 'index'}, '', hash);

            $('section.chapter-row').removeClass('current');
            section.addClass('current');
            Ar2014.currentSection = sectionMainClass;

        }


    }


    Ar2014.handleScroll = function () {

        if (!Ar2014.sideScrolling && Ar2014.scrolled) {

            $('.chapter-row').each(function ()
            Â
            {

                if (isElementInViewport(this)) {

                    Ar2014.setCurrentSection($(this));
                    return false;

                }

            }
        )
            ;

            Ar2014.scrolled = false;

        }

    }

    Ar2014.loadRegionData = function () {

        var $this = $(this);
        var regionTid = $this.attr('data-region');

        Ar2014.trackEvent('clicked on region', $('span', $this).html());

        $this.closest('ul').addClass('clicked');

        $('.regions a').removeClass('active');
        $this.addClass('active');

        $('.regions li').removeClass('active');
        $this.parent().addClass('active');


        $('.regions .region-stories').remove();

        $('.regions section').append('<div class="region-stories chapter-stories" />');

        $('.region-stories').append('<div class="intro-wrapper" />');

        $this.next().clone().appendTo('.intro-wrapper').show();
        $('.region-stories').append('<ul />');

        $('.story[data-regions~="' + regionTid + '"]').parent().clone(true).appendTo('.region-stories ul');

    }

    Ar2014.trackEvent = function (category, action) {


        if (typeof ga != 'undefined') {
            ga('send', 'event', 'AR2014', category, action);
        }


    }


}

(function ($) {
    "use strict";

    var ar2014 = new Ar2014();

    $(document).ready(function () {

        $('.popup').addClass('active').hide();
        $('.story-popup').hide();


        // sets a global variable to determine if we can handle html5 history


        $('.chapter-stories').each(function () {

            // expand
            var $this = $(this);

            $('li', $this).each(function () {

                var $this = $(this);

                var $img = $('img', $this);
                var $figure = $('figure', $this);

                $figure.attr('style', 'background-image: url(' + $img.attr('src') + ')');

                $img.hide();

                $this.click(function () {
                    Ar2014.displayStory($(this), true);
                    return false;
                });

            });

        });

        // intro story is triggered by the button in intro text
        $('#chapter-1-message-directors .chapter-intro a').click(function () {

            Ar2014.displayStory($('#chapter-1-message-directors article').eq(0), true);
            return false;

        });


        /*
         *  enable scroll handling in home page
         */

        if ($('body').hasClass('page-research-annual-report-2014')) {

            $(window).scroll(function ()
            Â
            {

                Ar2014.scrolled = true;

            }
        )

            window.setInterval(Ar2014.handleScroll, 500);

            // set first section as current before scrolling

            //setCurrentSection( $('.chapter-row').first() );


            Ar2014.scrolled = true;
            Ar2014.handleScroll();
        }


        // full story
        $('.story-full').each(function () {

            Ar2014.fullStoryBackground($(this));

        })

        // left menu scrolling
        $('.chapters-menu a').click(function () {

            var chapter = $('section' + $(this).attr('href'));
            Ar2014.sideScrolling = true;
            $('body').scrollTo(chapter,
                {
                    duration: Ar2014.animDuration,
                    offset: 10,
                    onAfter: function () {
                        Ar2014.sideScrolling = false;
                    }
                });
            Ar2014.scrolled = true;
            Ar2014.handleScroll();

            var chapterTitle = $('span', $(this)).html();

            Ar2014.trackEvent('clicked on left menu', chapterTitle);

            if ($('.chapters-menu').hasClass('mobile-trigger')) {

                $('.chapters-menu').removeClass('mobile-trigger');

            }

            return false;

        });


        if (Ar2014.supportsHistory) {

            $(window).bind('popstate', function (event)
            Â
            {

                if (!event.originalEvent.state) {
                    //Ar2014.navigateToIndex();
                } else {

                    if ((event.originalEvent.state.page == 'index')) {

                        Ar2014.navigateToIndex();

                    } else if (event.originalEvent.state.page == 'story') {

                        var storyUrl = event.originalEvent.state.storyPath;

                        var $story = $(".chapters a[href='" + storyUrl + "']").closest('article');

                        Ar2014.displayStory($story, false);

                    }

                }


            }
        )
            ;
        }


        // if we're on a story page, display it in a popup

        var $mainStory = $('main.story-wrapper article');

        if ($mainStory.length > 0) {

            Ar2014.displayCurrentStory();

        } else {

            Ar2014.trackEvent('landed on homepage', '');

        }

        // regions handling

        $('.regions a.region-anchor').click(Ar2014.loadRegionData);
        $('.regions .intro').hide();

        // mobile menu

        $('.mobile-menu-button').click(function () {

            $('nav.chapters-menu').addClass('mobile-trigger');
            return false;

        })

        $('.close-mobile-menu').click(function () {

            $('nav.chapters-menu').removeClass('mobile-trigger');
            return false;

        })

        $('.scroll-teaser').click(function () {
            $('a[href="#chapter-2-policy-engagement"]').click();
        })

        // track pdf download

        $('.chapter-10 a').click(function () {

            Ar2014.trackEvent('downloaded pdf', '');

        })


        // lazy load images
        /*
         *
         $(".chapter-header").lazyload({
         threshold : 400
         });

         */


    }); // document ready

})(jQuery);

function isElementInViewport(el) {

    // calculate fixed header

    var rect = el.getBoundingClientRect();

    return (
        rect.bottom > 40
    );
}
;
/**
 * Copyright (c) 2007-2014 Ariel Flesler - aflesler<a>gmail<d>com | http://flesler.blogspot.com
 * Licensed under MIT
 * @author Ariel Flesler
 * @version 1.4.14
 */
;(function (k) {
    'use strict';
    k(['jquery'], function ($) {
        var j = $.scrollTo = function (a, b, c) {
            return $(window).scrollTo(a, b, c)
        };
        j.defaults = {axis: 'xy', duration: 0, limit: !0};
        j.window = function (a) {
            return $(window)._scrollable()
        };
        $.fn._scrollable = function () {
            return this.map(function () {
                var a = this, isWin = !a.nodeName || $.inArray(a.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) != -1;
                if (!isWin)return a;
                var b = (a.contentWindow || a).document || a.ownerDocument || a;
                return /webkit/i.test(navigator.userAgent) || b.compatMode == 'BackCompat' ? b.body : b.documentElement
            })
        };
        $.fn.scrollTo = function (f, g, h) {
            if (typeof g == 'object') {
                h = g;
                g = 0
            }
            if (typeof h == 'function')h = {onAfter: h};
            if (f == 'max')f = 9e9;
            h = $.extend({}, j.defaults, h);
            g = g || h.duration;
            h.queue = h.queue && h.axis.length > 1;
            if (h.queue)g /= 2;
            h.offset = both(h.offset);
            h.over = both(h.over);
            return this._scrollable().each(function () {
                if (f == null)return;
                var d = this, $elem = $(d), targ = f, toff, attr = {}, win = $elem.is('html,body');
                switch (typeof targ) {
                    case'number':
                    case'string':
                        if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(targ)) {
                            targ = both(targ);
                            break
                        }
                        targ = win ? $(targ) : $(targ, this);
                        if (!targ.length)return;
                    case'object':
                        if (targ.is || targ.style)toff = (targ = $(targ)).offset()
                }
                var e = $.isFunction(h.offset) && h.offset(d, targ) || h.offset;
                $.each(h.axis.split(''), function (i, a) {
                    var b = a == 'x' ? 'Left' : 'Top', pos = b.toLowerCase(), key = 'scroll' + b, old = d[key], max = j.max(d, a);
                    if (toff) {
                        attr[key] = toff[pos] + (win ? 0 : old - $elem.offset()[pos]);
                        if (h.margin) {
                            attr[key] -= parseInt(targ.css('margin' + b)) || 0;
                            attr[key] -= parseInt(targ.css('border' + b + 'Width')) || 0
                        }
                        attr[key] += e[pos] || 0;
                        if (h.over[pos])attr[key] += targ[a == 'x' ? 'width' : 'height']() * h.over[pos]
                    } else {
                        var c = targ[pos];
                        attr[key] = c.slice && c.slice(-1) == '%' ? parseFloat(c) / 100 * max : c
                    }
                    if (h.limit && /^\d+$/.test(attr[key]))attr[key] = attr[key] <= 0 ? 0 : Math.min(attr[key], max);
                    if (!i && h.queue) {
                        if (old != attr[key])animate(h.onAfterFirst);
                        delete attr[key]
                    }
                });
                animate(h.onAfter);
                function animate(a) {
                    $elem.animate(attr, g, h.easing, a && function () {
                            a.call(this, targ, h)
                        })
                }
            }).end()
        };
        j.max = function (a, b) {
            var c = b == 'x' ? 'Width' : 'Height', scroll = 'scroll' + c;
            if (!$(a).is('html,body'))return a[scroll] - $(a)[c.toLowerCase()]();
            var d = 'client' + c, html = a.ownerDocument.documentElement, body = a.ownerDocument.body;
            return Math.max(html[scroll], body[scroll]) - Math.min(html[d], body[d])
        };
        function both(a) {
            return $.isFunction(a) || $.isPlainObject(a) ? a : {top: a, left: a}
        }

        return j
    })
}(typeof define === 'function' && define.amd ? define : function (a, b) {
    if (typeof module !== 'undefined' && module.exports) {
        module.exports = b(require('jquery'))
    } else {
        b(jQuery)
    }
}));
;