<?php
global $shadow;
$shadow = ' ';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>
    <div class="page-section page-header-bg small-section">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <h1>Wishlist</h1>
                    <div class="page-header-divider"><span class="icon_heart_alt"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="page-section">
            <div class="container">
                <div class="woocommerce">
                    <form>
                        <div class="table-responsive">
                            <table class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Product</th>
                                    <th class="product-name">Description</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-subtotal">Subtotal</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-thumbnail">
                                        <a href="#" class="attachment-shop_thumbnail wp-post-image"><img width="100" src="assets/images/product/1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Wisi enim ad minim veniam exerci</a>
                                    </td>
                                    <td class="product-quantity">
                                        <input type="text" size="4" class="input-text qty text" title="Qty" value="1" name="qty" />
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$1000.00</span>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$1000.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a class="remove" href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-thumbnail">
                                        <a href="#" class="attachment-shop_thumbnail wp-post-image"><img width="100" src="assets/images/product/6.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Option congue nihil imperdiet doming</a>
                                    </td>
                                    <td class="product-quantity">
                                        <input type="text" size="4" class="input-text qty text" title="Qty" value="1" name="qty" />
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$1000.00</span>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$1000.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a class="remove" href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- #main -->
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


