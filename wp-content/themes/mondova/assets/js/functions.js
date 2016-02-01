(function($){
    "use strict"; // Start of use strict


    /* --------------------------------------------
     Mobile detect
     --------------------------------------------- */
    var ktmobile;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        ktmobile = true;
        $("html").addClass("mobile");
    }
    else {
        ktmobile = false;
        $("html").addClass("no-mobile");
    }

    /* ---------------------------------------------
     Scripts initialization
     --------------------------------------------- */

    $(window).load(function(){

        $(window).trigger("scroll");
        $(window).trigger("resize");

    });

    /* ---------------------------------------------
     Scripts resize
     --------------------------------------------- */
    $(window).resize(function(){
        init_js_height();
        init_productsMasonry();


        /**==============================
         ***  Sticky header
         ===============================**/

        if ($.fn.ktSticky) {
            $('.sticky-header').ktSticky({
                contentSticky : ''
            });
        }

        /**==============================
         ***  Disable mobile menu in desktop
         ===============================**/
        if ($(window).width() >= 1200) {
            $('body').removeClass('opened-nav-animate');
            $('#hamburger-icon').removeClass('active');
        }



        $('.blog-posts-masonry').each(function(){
            var $masonry = $(this);
            $masonry.imagesLoaded(function() {
                $masonry.find('.row').isotope({
                    itemSelector: '.blog-post-wrap',
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.blog-post-sizer'
                    }
                })
            });
        });


    });



    /* ---------------------------------------------
     Scripts ready
     --------------------------------------------- */
    //init_MainMenu();
    init_MobileMenu();
    init_rating();
    init_carousel();
    init_parallax();
    init_shortcodes();
    init_VCGoogleMap();
    init_popup();
    init_backtotop();
    init_productsMasonry();
    init_backtotop();
    init_VCComingSoon();



    $( 'body' )
        .on( 'click', '.testi-navigation li', function() {
            var $this = $(this),
                $parent = $this.closest('.testi-navigation'),
                $collection = $parent.find('li'),
                $sync = $parent.data('sync'),
                $index = $( $collection ).index( $this),
                $owl = $('#'+$sync).data('owlCarousel');

            $owl.goTo($index);
            $collection.removeClass('active');
            $this.addClass('active');

        });



    /* ---------------------------------------------
     Back to top
     --------------------------------------------- */
    function init_backtotop(){

        var $backtotop = $('#back-to-top');

        $backtotop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0},500);
        });
    }

    /* ---------------------------------------------
     Products Masonry
     --------------------------------------------- */

    function init_productsMasonry(){
        $('.products-multi-masonry').each(function(){
            var $masonry = $(this);
            $masonry.imagesLoaded(function() {

                $masonry.find('.product-thumbnail').css('height', 'auto');

                var standardItem = $masonry.find('.product.standard').first(),
                    standardHeight = standardItem.height(),
                    largeHeight = (standardHeight * 2) + parseInt(standardItem.css('margin-bottom'), 10);

                if (standardHeight > 0) {
                    $masonry.find('.product.wide .product-thumbnail').css('height', largeHeight);
                    $masonry.find('.product.portrait .product-thumbnail').css('height', largeHeight);
                    $masonry.find('.product.big .product-thumbnail').css('height', largeHeight);
                    $masonry.find('.product.landscape .product-thumbnail').css('height', standardHeight);
                    $masonry.find('.product.standard .product-thumbnail').css('height', standardHeight);
                }

                $masonry.isotope({
                    resizable: false,
                    itemSelector : '.product',
                    layoutMode: 'packery',
                    packery: {
                        columnWidth: '.grid-sizer'
                    }
                });

            });

        });
    }

    /* ---------------------------------------------
     Owl carousel
     --------------------------------------------- */
    function init_carousel(){
        $('.kt-owl-carousel').each(function(){

            var objCarousel = $(this),
                objParent = objCarousel.closest('.owl-carousel-kt'),
                options = $(objCarousel).data('options') || {},
                func_cb;
            options.theme = 'owl-kttheme';

            if(typeof options.desktop !== "undefined"){
                options.itemsDesktop = [1199,options.desktop];
                options.items = options.desktop;
            }
            if(typeof options.desktopsmall !== "undefined"){
                options.itemsDesktopSmall = [991,options.desktopsmall];
            }
            if(typeof options.tablet !== "undefined"){
                options.itemsTablet = [768,options.tablet];
            }
            if(typeof options.navigationText === "undefined"){
                options.navigationText = ['<i class="arrow_left"></i>', '<i class="arrow_right"></i>'];
            }
            if(typeof options.mobile !== "undefined"){
                options.itemsMobile = [479,options.mobile];
            }

            func_cb =  window[options.callback];

            options.afterInit  = function(elem) {

                if(objParent.hasClass('navigation-top')){
                    var $buttons = elem.find('.owl-buttons');
                    $buttons.prependTo(objCarousel.closest('.owl-carousel-kt'));
                }

                if(typeof options.pagbefore !== "undefined" && options.pagination){
                    var $pagination = elem.find('.owl-pagination');
                    $pagination.prependTo(objCarousel.closest('.owl-carousel-kt'));
                }
                if( typeof func_cb === 'function'){
                    func_cb( 'afterInit',   elem );
                }
            };
            options.afterUpdate = function(elem){
                if( typeof func_cb === 'function'){
                    func_cb( 'afterUpdate',   elem );
                }
            };

            options.afterMove = function(elem){
                if( typeof func_cb === 'function'){
                    func_cb( 'afterMove',   elem );
                }
            };



            objCarousel.imagesLoaded(function() {
                //console.log(options);
                objCarousel.owlCarousel(options);
            });
        });
    }

    function init_rating(){
        // Star ratings for comments
        $( '#rating' ).before( '<p class="stars"><span><a class="star-1" href="#" data-val="1"></a><a class="star-2" href="#" data-val="2"></a><a class="star-3" href="#" data-val="3"></a><a class="star-4" href="#" data-val="4"></a><a class="star-5" href="#" data-val="5"></a></span></p>' );
        $( 'body' )
            .on( 'click', '#respond p.stars a', function() {
                var $star   = $( this ),
                    $rating = $( this ).closest( '#respond' ).find( '#rating'),
                    $stars = $( this ).closest( 'p.stars'),
                    $val = $star.data('val');
                $rating.val( $val );
                $star.siblings( 'a' ).removeClass( 'active' );
                $stars.find('a:lt('+$val+')').addClass( 'active' );
                return false;
            });
    }

    /* ---------------------------------------------
     Height 100%
     --------------------------------------------- */
    function init_js_height(){
        $(".item-height-window").css('height', $(window).height());
        $(".item-height-parent").each(function(){
            $(this).height($(this).parent().first().height());
        });
    }

    /* ---------------------------------------------
     Shortcodes
     --------------------------------------------- */
    function init_shortcodes() {
        // Tooltips (bootstrap plugin activated)
        $('[data-toggle="tooltip"]').each(function(){
            var $this = $(this);
            if($this.closest('.product-effect-3').length){
                $this.tooltip({container:"body", delay: { "show": 100, "hide": 50 }, placement: "bottom"});
            }else{
                $this.tooltip({container:"body", delay: { "show": 100, "hide": 50 }});
            }

        });
        //$('.kt-tab-container').tabs();
        //$('.kt-accordion').accordion({ 'heightStyle': 'content' });
        $(".entry-content").fitVids();

    }


    /* ---------------------------------------------
     Main Menu
     --------------------------------------------- */
    function init_MainMenu(){
        $("ul#main-navigation").superfish({
            hoverClass: 'hovered',
            popUpSelector: 'ul.sub-menu-dropdown,.kt-megamenu-wrapper',
            animation: {},
            animationOut: {}
        });
    }


    /* ---------------------------------------------
     Mobile Menu
     --------------------------------------------- */
    function init_MobileMenu(){

        $('body')
            .on('click','#hamburger-icon',function(e){
                e.preventDefault();
                $(this).toggleClass('active');
                $('body').toggleClass('opened-nav-animate');
                setTimeout(function(){
                    $('body').toggleClass('opened-nav');
                }, 100)

            });

        $('ul.navigation-mobile ul.sub-menu-dropdown, ul.navigation-mobile .kt-megamenu-wrapper').each(function(){
            $(this).parent().children('a').prepend( '<span class="open-submenu"></span>' );
        });

        $('.open-submenu').on('click', function(e){
            e.stopPropagation();
            e.preventDefault();
            $( this ).closest('li').toggleClass('active-menu-item');
            $( this ).closest('li').children( '.sub-menu-dropdown, .kt-megamenu-wrapper' ).slideToggle();
        });

        $(window).resize(function(){
            var $navHeight = $(window).height() - $('.navbar-container').height();
            $('.main-nav-mobile').css({'max-height': $navHeight});
        });

    }


    /* -------------------------------------------
    Parallax Effect
    --------------------------------------------- */

    function init_parallax(){
        // Parallax
        if (($(window).width() >= 1024) && (ktmobile == false)) {
            $(".parallax-1").parallax("50%", 0.1);
            $(".parallax-2").parallax("50%", 0.2);
            $(".parallax-3").parallax("50%", 0.3);
            $(".parallax-4").parallax("50%", 0.4);
            $(".parallax-5").parallax("50%", 0.5);
            $(".parallax-6").parallax("50%", 0.6);
            $(".parallax-7").parallax("50%", 0.7);
        }
    }

    
    /* ---------------------------------------------
     Google Map Short code
     --------------------------------------------- */
    function init_VCGoogleMap() {
        $(".googlemap").each(function () {
            var mapObj = $(this),
                scrollwheel = (mapObj.data('scrollwheel') == '1') ? false : true;
            mapObj.gmap3({
                marker: {values: [{address: mapObj.data('location'), options: {icon: mapObj.data('iconmap')}}]},
                map: {
                    options: {
                        zoom: mapObj.data('zoom'),
                        mapTypeId: mapObj.data('type').toLowerCase(),
                        scrollwheel: scrollwheel,
                    }
                }
            });
        });
    }

    /* ---------------------------------------------
     Popup content
     --------------------------------------------- */
    function init_popup(){
        var cookie_popup = $.cookie('popup_newletter');
        var $popup = $('#popup-wrap');
        if($popup.length > 0 && cookie_popup != 1){
            var time_show = $popup.data('timeshow');
            setTimeout(function(){
                $.magnificPopup.open({
                    items: { src: '#popup-wrap' },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in',
                    callbacks: {
                        afterClose: function(){
                            $.cookie('popup_newletter', 1, { expires: 1 });
                        }
                    },
                    removalDelay: 200
                });
            }, time_show*1000);
        }
    }

    /* ---------------------------------------------
     VC Coming Soon
     --------------------------------------------- */
    function init_VCComingSoon() {
        var coming_html = '<div class="value-time">%D</div> <div class="value-time">%H</div> <div class="value-time">%M</div> <div class="value-time">%S</div>';
        $('.coming-soon').each(function () {
            var date = $(this).data('date');
            $(this).countdown(date, function (event) {
                $(this).html( event.strftime(coming_html) );
            });

        });
    }


})(jQuery); // End of use strict

