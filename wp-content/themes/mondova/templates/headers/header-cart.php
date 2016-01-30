<?php if ( kt_is_wc() && kt_option('header_cart', 1) ) { ?>
    <?php echo kt_woocommerce_get_cart(true); ?>
<?php } ?>