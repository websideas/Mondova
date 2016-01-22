<?php

global $revolution;
$revolution = 'slideshow2';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow2.php');

?>

    <div id="main">
        
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="block-style pad-small">
                            <div class="block-style-inner">
                                <img src="assets/images/banner/11.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 pull-right">
                        <div class="kt-heading-2 style3 mar-bottom-45">
                            <h3 class="kt-heading-title"><span>new men</span></h3>
                            <div class="divider"><div class="divider-inner"></div></div>
                        </div>
                        <!-- nav-pills, nav-tabs -->                                                            
                        <!-- Nav tabs -->
                        <ul class="nav nav-style4" role="tablist">
                            <li class="active"><a href="#men" data-toggle="tab">Men's</a></li>
                            <li><a href="#women" data-toggle="tab">Women</a></li>
                            <li><a href="#collection" data-toggle="tab">collection</a></li>
                            <li><a href="#accessories" data-toggle="tab">accessories</a></li>
                            <li><a href="#store" data-toggle="tab">store</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="men">
                                <?php include_once('templates/product-tab1.php'); ?>
                            </div>
                            <div class="tab-pane fade" id="women">
                                <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                                <p>In iaculis tellus in dignissim faucibus. Curabitur sagittis egestas orci non sollicitudin. Ut et dictum nunc. Aenean non lorem in leo pellentesque eleifend. Donec commodo, lectus eget sodales ornare, sem risus sollicitudin nibh, a venenatis metus mauris porta nibh. Sed eget molestie ex. Praesent sit amet arcu sit amet sem venenatis rhoncus. Duis in lorem a turpis consequat iaculis. Vivamus vel dolor egestas, sagittis erat in, congue nibh. Aliquam ex nisi, ornare in dolor at, maximus pulvinar sapien. </p>
                            </div>
                            <div class="tab-pane fade" id="collection">
                                <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                                <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                            </div>
                            <div class="tab-pane fade" id="accessories">
                                <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                                <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                            </div>
                            <div class="tab-pane fade" id="store">
                                <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                                <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/05-homepage-V5.jpg" class="preview-image" style="top: -2559px;display: none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');