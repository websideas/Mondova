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
                    <h1>Checkout</h1>
                    <div class="page-header-divider"><span class="icon_box-checked"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="page-section pad-top-40">
            <div class="container">
                <div class="woocommerce">
                    <div class="woocommerce-info">Returning customer? <a class="showlogin" href="#">Click here to login</a></div>
                    <form class="login" style="display:none;" method="post">

                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>

                        <p class="form-row form-row-first">
                            <label for="username">Username or email <span class="required">*</span></label>
                            <input type="text" id="username" name="username" class="input-text">
                        </p>
                        <p class="form-row form-row-last">
                            <label for="password">Password <span class="required">*</span></label>
                            <input type="password" id="password" name="password" class="input-text">
                        </p>
                        <p class="form-row">   
                            <input type="submit" value="Login" name="login" class="btn btn-accent">
                            <label class="inline" for="rememberme">
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me
                            </label>
                        </p>
                        <p class="lost_password">
                            <a href="http://localhost/wingman/my-account/lost-password/">Lost your password?</a>
                        </p>

                        <div class="clear"></div>
                        
                    </form>
                    <form class="checkout">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="woocommerce-billing-fields box">
                                    <h5 class="title-checkout">Billing Address</h5>
                                    <div class="checkout-wrap">
                                        <div class="form-group">
                                            <label>Country <abbr title="required" class="required">*</abbr></label>
                                            <select class="selector">
                                                <option value="">Select a Country</option>
                                                <option value="US">United States</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Frist Name <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input class="input-bg full-width" type="text" />
                                        </div>
                                        <div class="form-group form-street">
                                            <label>Address <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" placeholder="Street Address" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <input class="input-bg" placeholder="Appartment, unit, etc. (optional)" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Town / City <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" placeholder="Town / City" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>State / County</label>
                                            <input class="input-bg" placeholder="State / County" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Postcode <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" placeholder="Postcode / Zip" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" type="text" />
                                        </div>
                                        <div class="form-checkbox">
                                            <input id="create_account" type="checkbox" /><label for="create_account">Create an account?</label>
                                        </div>
                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <div class="form-group">
                                            <label>Account password <abbr title="required" class="required">*</abbr></label>
                                            <input class="input-bg" type="password" />
                                        </div>
                                        <div class="woocommerce-shipping-fields box">
                                            <div class="form-checkbox">
                                                <input id="different_address" type="checkbox" checked><label for="different_address">Ship to a different address?</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Order Notes</label>
                                                <textarea placeholder="Notes about your orders, e.g.special notes for delivery"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="woocommerce-order-wrap">
                                    <h5 class="title-checkout">Your order</h5>
                                    <div class="checkout-wrap">
                                        <div id="order_review">
                                            <table class="shop_table box">
                                                <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <td class="product-total text-right">TOTAL</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="cart_item">
                                                    <th class="product-name">
                                                        Black Beanie Skate Girl <span class="product-quantity">× 1</span>
                                                    </th>
                                                    <td class="product-total text-right">
                                                        <span class="amount">$120.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <th class="product-name">
                                                        Classic Black Telephone <span class="product-quantity">× 2</span>
                                                    </th>
                                                    <td class="product-total text-right">
                                                        <span class="amount">$440.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <th class="product-name">
                                                        Black and White Varsity Jacket <span class="product-quantity">× 3</span>
                                                    </th>
                                                    <td class="product-total text-right">
                                                        <span class="amount">$960.00</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">$1520.00</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping and Handling</th>
                                                    <td>
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input type="radio" class="shipping_method" value="flat_rate" id="shipping_method_0_flat_rate" data-index="0" name="shipping_method[0]">
                                                                <label for="shipping_method_0_flat_rate">Flat Rate: <span class="amount">100.00$</span></label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="shipping_method" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
                                                                <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="shipping_method" value="international_delivery" id="shipping_method_0_international_delivery" data-index="0" name="shipping_method[0]">
                                                                <label for="shipping_method_0_international_delivery">Flat Rate: <span class="amount">175.00$</span></label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
                                                                <label for="shipping_method_0_local_delivery">Local Delivery: <span class="amount">60.00$</span></label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="shipping_method" checked="checked" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
                                                                <label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td class="text-right"><span class="amount">$1620.00</span></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div id="payment">
                                                <ul class="payment_methods">
                                                    <li class="payment_method_bacs">
                                                        <div class="payment_method_title">
                                                            <input id="payment_method_bacs" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="" type="radio">
                                                            <label for="payment_method_bacs">
                                                                Direct Bank Transfer
                                                            </label>
                                                        </div>
                                                        <div class="payment_box payment_method_bacs" style="display: block"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </li>
                                                    <li class="payment_method_cheque">
                                                        <div class="payment_method_title">
                                                            <input id="payment_method_cheque" class="input-radio" name="payment_method" value="cheque" data-order_button_text="" type="radio">
                                                            <label for="payment_method_cheque">
                                                                Cheque Payment
                                                            </label>
                                                        </div>
                                                        <div class="payment_box payment_method_cheque"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </li>
                                                    <li class="payment_method_paypal">
                                                        <div class="payment_method_title">
                                                            <input id="payment_method_paypal" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal" type="radio">
                                                            <label for="payment_method_paypal">
                                                                PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" alt="PayPal">
                                                            </label>
                                                        </div>
                                                        <div class="payment_box payment_method_paypal"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <div class="accept-term">
                                                        <input id="accept" type="checkbox" />
                                                        <label for="accept">I have read and accept the Terms & Conditions</label>
                                                    </div>
                                                    <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
                                                        <button type="submit" class="btn btn-medium style1">Update Totals</button>
                                                    </noscript>
                                                    <button id="place_order" class="btn btn-accent btn-block btn-lg btn-animation"><span>Place Order<i class="fa fa-long-arrow-right"></i></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- #main -->
    <img src="previews/24-checkout.jpg" class="preview-image" style="top: -2px;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');


