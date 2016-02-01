(function($){
    "use strict"; // Start of use strict


    $( 'body' )
        .on('click', '.add_to_cart_button', function() {
            var $this = $(this).addClass('wc-loading');
            $('i', $this).attr('class', 'icon_loading fa-spin');
        })
        .on('click', '.yith-wcwl-add-button', function() {
            var $this = $(this).addClass('wc-wishlist-loading');
            $('i', $this).attr('class', 'icon_loading fa-spin');
        })
        .on('added_to_cart', function(e, data) {
            var $button_product = $('.wc-loading'),
                $parent = $button_product.parent();

            $('i', $button_product).attr('class', 'icon_check');

            $parent.tooltip('hide')
                .attr('title', $parent.data('added'))
                .tooltip('fixTitle');

            setTimeout(function() {
                $parent.tooltip('show');
            }, 200);
        })
        .on( 'added_to_wishlist removed_from_wishlist', function() {


            var $button_product = $('.wc-wishlist-loading'),
                $parent = $button_product.closest('.yith-wcwl-add-to-wishlist');

            $parent.tooltip('hide')
                .attr('title', $parent.data('added'))
                .tooltip('fixTitle');

            setTimeout(function() {
                $parent.tooltip('show');
            }, 200);

            var data = {
                action: 'fronted_get_wishlist',
                security : ajax_frontend.security
            };
            $.post(ajax_frontend.ajaxurl, data, function(response) {
                $('.shopping-bag-wishlist').html(response.html);
                $('.shopping-bag-wishlist .cart_list.product_list_widget').mCustomScrollbar();

            }, 'json');
        })
        .on('wc_fragments_loaded wc_fragments_refreshed added_to_cart added_to_wishlist', function (){
            $('.shopping-bag .cart_list.product_list_widget').mCustomScrollbar();
        });







    init_gridlistToggle();
    init_currency();


    /* ---------------------------------------------
     Grid list Toggle
     --------------------------------------------- */
    function init_gridlistToggle(){
        $('ul.gridlist-toggle a').on('click', function(e){
            e.preventDefault();
            var $this = $(this),
                $gridlist = $this.closest('.gridlist-toggle'),
                $products = $this.closest('#main').find('ul.shop-products');

            var data = {
                action: 'frontend_update_posts_layout',
                security : ajax_frontend.security,
                layout: $this.data('layout')
            };

            //$.post(ajax_frontend.ajaxurl, data, function(response) { });

            $gridlist.find('a').removeClass('active');
            $this.addClass('active');
            $products
                .removeClass($this.data('remove'))
                .addClass($this.data('layout'));

        });
    }


    function init_currency(){
        if(typeof woocs_drop_down_view !== "undefined") {
            if(woocs_drop_down_view == 'no'){
                $('.menu-bars-currency a').on('click', function(e){
                    e.preventDefault();
                    woocs_redirect($(this).data('currency'));
                });
            }
        }
    }
    /*

    $( 'body' ).on('click','.shopping-bag a.remove',function( e){

        e.preventDefault();

        var product_id = $(this).data('product_id'),
            remove_item = $(this).data('itemkey');

        $('.shopping_cart .shopping-bag').append('<span class="loading_overlay"><i class="fa fa-spinner fa-pulse"></i></span>');

        var data = {
            action: 'fronted_remove_product',
            security : ajax_frontend.security,
            product_id : product_id,
            remove_item : remove_item
        };

        $.get(ajax_frontend.ajaxurl, data, function(response) {
            console.log(response);
        }, 'json');

    });
    */


})(jQuery); // End of use strict