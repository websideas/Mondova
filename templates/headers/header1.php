<header id="header" class="header1">
    <div id="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                    <ul class="top-navigation">
                        <li>
                            <a href="#"><i class="icon_lock_alt"></i>My Account</a>
                        </li>
                        <li class="language-switcher">
                            <a href="#"><i class="icon_ribbon_alt"></i>language</a>
                            <ul class="list-lang">
                                <li><span class="current"><img alt="en" src="assets/images/lang/en.jpg"><span>English</span></span></li>
                                <li><a href="#" title="Russian"><img alt="ru" src="assets/images/lang/ru.jpg"><span>Russian</span></a></li>
                                <li><a href="#" title="Brazil"><img alt="bra" src="assets/images/lang/bra.jpg"><span>Brazil</span></a></li>
                                <li><a href="#" title="France"><img alt="fr" src="assets/images/lang/fr.jpg"><span>France</span></a></li>
                            </ul>
                        </li>
                        <li class="currency-switcher">
                            <a href="#"><i class="icon_currency"></i>Currency</a>
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="index.php"><img src="assets/images/logo.png" title="Mondova" alt="Mondova"/></a>
                        </h1>
                    </div><!-- .branding -->
                </div>

                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-right">
                        <div class="shopping-bag">
                            <a href="woocommerce-cart.php" class="header-cart">
                                <i class="icon_bag_alt"></i>
                                <span>03</span>
                            </a>
                            <div class="shopping-bag-content">
                                <p class="cart_block_desc">You have <span>3 item(s)</span> in your shopping bag.</p>
                                <div class="bag-products">
                                    <div class="bag-product">
                                        <figure>
                                            <a class="bag-product-img" href="#">
                                                <img class="img-responsive" alt="" src="assets/images/product/cart/1.jpg"/>
                                            </a>
                                        </figure>
                                        <div class="bag-product-details">
                                            <a class="bag-product-title" href="#">Wisi enim ad minim</a>
                                            <div class="bag-product-price">$120,00</div>
                                            <div class="bag-product-qty">Qty: <span>01</span></div>
                                        </div>
                                        <a href="#" class="remove" title="Remove this item"></a>
                                    </div><!-- .bag-product -->

                                    <div class="bag-product">
                                        <figure>
                                            <a class="bag-product-img" href="#">
                                                <img class="img-responsive" alt="" src="assets/images/product/cart/2.jpg"/>
                                            </a>
                                        </figure>
                                        <div class="bag-product-details">
                                            <a class="bag-product-title" href="#">Le grand cartable</a>
                                            <div class="bag-product-price">$440,00</div>
                                            <div class="bag-product-qty">Qty: <span>02</span></div>
                                        </div>
                                        <a href="#" class="remove" title="Remove this item"></a>
                                    </div><!-- .bag-product -->

                                    <div class="bag-product">
                                        <figure>
                                            <a class="bag-product-img" href="#">
                                                <img class="img-responsive" alt="" src="assets/images/product/cart/3.jpg"/>
                                            </a>
                                        </figure>
                                        <div class="bag-product-details">
                                            <a class="bag-product-title" href="#">Congue nihil imperdiet</a>
                                            <div class="bag-product-price">$990,00</div>
                                            <div class="bag-product-qty">Qty: <span>03</span></div>
                                        </div>
                                        <a href="#" class="remove" title="Remove this item"></a>
                                    </div><!-- .bag-product -->

                                </div><!-- .bag-products -->
                                <p class="bag-total">Total: <span class="amount"> $1520,00</span></p>
                                <p class="bag-buttons">
                                    <span><a href="woocommerce-cart.php" class="btn btn-default btn-block">View Cart</a></span>
                                    <span><a href="woocommerce-checkout.php" class="btn btn-dark btn-block">Checkout</a></span>
                                </p><!-- .bag-buttons -->
                            </div>
                        </div>
                        <form action="#" class="searchform" method="get">
                            <input type="text" name="s" value="" placeholder="Search">
                            <button class="submit"><i class="icon_search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- #header-content -->

    <div class="navbar-container sticky-header">
        <div class="apply-sticky">
            <div class="header-sticky-background bg-white"></div>
            <div class="container">
                <nav class="main-nav" id="nav">
                    <?php include_once('templates/menu.php'); ?>
                </nav><!-- #nav -->
            </div>
        </div>
    </div>
</header><!-- #header -->