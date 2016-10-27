<?php
    if ( cruxstore_is_wc()  && !cruxstore_option('catalog_mode', 0)){
        $text = (is_user_logged_in ()) ? esc_html__('My Account', 'cruxstore') : esc_html__('Login', 'cruxstore');
        printf(
            '<li class="%s"><a href="%s" title="%s">%s</a>',
            'header-wc-myaccount',
            get_permalink( get_option('woocommerce_myaccount_page_id') ),
            $text,
            '<i class="fa fa-user" aria-hidden="true"></i>'
        );
    }
?>