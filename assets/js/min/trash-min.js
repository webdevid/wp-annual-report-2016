var Menu={settings:{menuBtn:$(".js-menuBtn"),menu:$(".js-menu"),closeBtn:$(".js-menuCloseBtn"),bg:$(".js-menuBg"),container:$(".js-menuContainer"),isOpen:!1,isAnimating:!1},init:function(){this.bindUIActions()},bindUIActions:function(){var s=this.settings;s.menuBtn.click(function(){Menu.toggle()}),s.bg.click(function(){Menu.close()}),s.container.click(function(){Menu.close()}),s.closeBtn.click(function(){Menu.close()}),$(window).keydown(function(s){27===s.which&&Menu.close()})},toggle:function(){var s=this.settings;s.isOpen?Menu.close():Menu.open()},open:function(){function s(){t.menu.addClass("is-active"),t.isAnimating=!1}var t=this.settings;t.isAnimating===!1&&(t.isOpen=!0,t.isAnimating=!0,t.menu.css("display","block"),setTimeout(s,100))},close:function(){function s(){t.menu.css("display","none"),t.isAnimating=!1}var t=this.settings;t.isAnimating===!1&&(t.isOpen=!1,t.isAnimating=!0,t.menu.removeClass("is-active"),setTimeout(s,1200))}},About={settings:{aboutBtn:$(".js-btn_about"),about:$(".js-about"),closeBtn:$(".js-aboutCloseBtn"),aboutBg:$(".js-aboutBg"),container:$(".js-aboutContainer"),isOpen:!1,isAnimating:!1},init:function(){this.bindUIActions()},bindUIActions:function(){var s=this.settings;s.aboutBtn.click(function(){About.toggle()}),s.aboutBg.click(function(){About.close()}),s.container.click(function(){About.close()}),s.closeBtn.click(function(){About.close()}),$(window).keydown(function(s){27===s.which&&About.close()})},toggle:function(){var s=this.settings;s.isOpen?About.close():About.open()},open:function(){function s(){t.about.addClass("is-active"),t.isAnimating=!1}var t=this.settings;t.isAnimating===!1&&(t.isOpen=!0,t.about.css("display","block"),setTimeout(s,100))},close:function(){function s(){t.about.css("display","none"),t.isAnimating=!1}var t=this.settings;t.isAnimating===!1&&(t.isOpen=!1,t.isAnimating=!0,t.about.removeClass("is-active"),setTimeout(s,1200))}};$(document).ready(function(){function s(){$(".js-pageLoader").addClass("is-visible")}function t(){$(".js-lazyload").each(function(){var s=$(this);s.attr("src",s.attr("data-src")),s.removeAttr("data-src"),s.load(function(){$(this).addClass("is-loaded")}),$(this).removeClass("js-lazyload")})}0===$(".js-activeTagHeading").length&&$(".js-photos").length>=1&&$("body").addClass("is-homepage"),$(".js-photos article").length>1&&$("body").addClass("is-multipleArticles"),$(document).mousemove(function(s){var t=150;s.clientY<t?$("body").addClass("is-mouseTop"):$("body").removeClass("is-mouseTop")}),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)&&$("body").addClass("is-mobile"),setTimeout(s,500),$(".js-activeTagHeading").length&&($("body").addClass("is-tagPage"),$(".js-tag").each(function(){$(this).text()===$(".js-activeTagHeading").text()&&($(this).addClass("is-active"),$(".js-tagDefault").removeClass("is-active"))})),$(document).scroll(function(s){var t=$(this).scrollTop();t>355?$("body").addClass("is-scrolledToHeader"):$("body").removeClass("is-scrolledToHeader"),t>450?$("body").addClass("is-scrolledPastPhoto"):$("body").removeClass("is-scrolledPastPhoto")}),$(".js-photos").infinitescroll({navSelector:".js-pagination:last",nextSelector:".js-btn_next:last",itemSelector:".js-photos article",debug:!1,loading:{finishedMsg:"<em class='txt_end'><span class='txt'>End</span></em>",msgText:"<em class='txt_loading'><span class='txt'>Loading</span></em>",img:"data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw=="},animate:!1,extraScrollPx:71,bufferPx:71},function(s){t(),$(s).find(".js-openPhotoInfo").click(function(s){s.preventDefault();var t=$(this).closest(".js-photoContainer");$("article .js-photoContainer").removeClass("is-showingInfo"),$(t).find(".photo_info").css("display","block"),$(t).css("background-color","black"),$(t).addClass("is-showingInfo")}),$(s).find(".js-closePhotoInfo").click(function(s){s.preventDefault(),$(this).closest("article").trigger("mouseover");var t=$(this).closest(".js-photoContainer");$(t).find(".photo_info").css("display","none"),t.removeClass("is-showingInfo")})}),$(".js-openPhotoInfo").click(function(s){s.preventDefault();var t=$(this).closest(".js-photoContainer");$("article .js-photoContainer").removeClass("is-showingInfo"),$(t).find(".photo_info").css("display","block"),$(t).css("background-color","black"),$(t).addClass("is-showingInfo")}),$(".js-closePhotoInfo").click(function(s){s.preventDefault(),$(this).closest("article").trigger("mouseover");var t=$(this).closest(".js-photoContainer");$(t).find(".photo_info").css("display","none"),t.removeClass("is-showingInfo")}),Menu.init(),About.init()}),$(window).load(function(){function s(){$(".js-lazyload").each(function(){var s=$(this);s.attr("src",s.attr("data-src")),s.removeAttr("data-src"),s.load(function(){$(this).addClass("is-loaded")}),$(this).removeClass("js-lazyload")})}$("body").addClass("is-loaded"),s()});