<?php
global $shadow, $googlemap;
$shadow = ' ';
$googlemap = true;


include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>

    <div class="page-section page-header-bg small-section">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <h1>Icon Box</h1>
                    <div class="page-header-divider"><i class="icon_images"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">

        <div class="page-section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="kt-icon-box">
                            <div class="icon-box-icon">
                                <span class="icon_pin_alt"></span>
                            </div>
                            <h3 class="icon-box-title">address</h3>
                            <div class="icon-box-content">Mondova shop center <br />123 Sky Tower, Los angeles</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="kt-icon-box">
                            <div class="icon-box-icon">
                                <span class="icon_mobile"></span>
                            </div>
                            <h3 class="icon-box-title">Phone</h3>
                            <div class="icon-box-content">Phone: +(800) 123 456 789 <br />Fax: +(400) 456 123 789</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="kt-icon-box">
                            <div class="icon-box-icon">
                                <span class="icon_mail_alt"></span>
                            </div>
                            <h3 class="icon-box-title">Email</h3>
                            <div class="icon-box-content">tonydat@mondova.com <br />thankforlove</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section small-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="flip-box">
                            <div class="flip-box-front">
                                <div class="flip-box-icon">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="flip-box-title">Promotion</div>
                                <div class="flip-box-subtitle">Free deal this week's</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-box active">
                            <div class="flip-box-front">
                                <div class="flip-box-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="flip-box-title">Free shipping</div>
                                <div class="flip-box-subtitle">Free ship 24/7</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-box">
                            <div class="flip-box-front">
                                <div class="flip-box-icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="flip-box-title">money back</div>
                                <div class="flip-box-subtitle">Refund in 30 days</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-box">
                            <div class="flip-box-front">
                                <div class="flip-box-icon">
                                    <i class="fa fa-refresh"></i>
                                </div>
                                <div class="flip-box-title">Free return</div>
                                <div class="flip-box-subtitle">Free delivery change</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div><!-- #main -->
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');


