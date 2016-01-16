<?php
global $shadow, $googlemap;
$shadow = ' ';
$googlemap = true;


include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>

    <div class="page-section page-header-2 small-section" style="background-image:url(assets/images/contact.jpg);">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <div class="page-header-icon"><span class="icon_lightbulb_alt"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="container">
            <div class="page-content pad-bottom-30">
                <div class="page-title-wrap">
                    <h3 class="page-title">contact form</h3>
                    <div class="page-subtitle">leave a message</div>
                </div>

                <div class="block-style mar-bottom-60">
                    <div class="block-style-inner">
                        <form class="contactform">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="form-name"><input type="text" name="name" placeholder="Name" /></p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <p class="form-email"><input type="email" name="email" placeholder="Email" /></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="form-mobile"><input type="tel" name="mobile" placeholder="Mobile" /></p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <p class="form-website"><input type="text" name="website" placeholder="Website" /></p>
                                </div>
                            </div>
                            <p class="form-comment"><textarea name="message" placeholder="Comment"></textarea></p>
                            <p class="no-margin"><input type="submit" class="btn btn-default" value="Send" /></p>

                        </form>
                    </div>
                </div>

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
        <div class="googlemap" style="height:500px;" data-zoom="17" data-scrollwheel="1" data-style="8" data-location="3211 Grant McConachie Way, Richmond, BC V7B 0A4, Canada" data-type="roadmap" data-iconmap="assets/images/icon-map.png"></div>
    </div><!-- #main -->
<img src="previews/21-contact-us.jpg" class="preview-image" style="top: 0;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


