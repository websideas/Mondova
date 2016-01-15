<?php
global $shadow;
$shadow = ' ';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>
    <div class="page-section bg-gray small-section">
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Accordion & Tabs</li>
                        </ol>
                    </div>
                    <div class="col-md-8 text-right">
                        <h1>Accordion & Tabs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">

        <div class="page-section">
            <div class="container">
                <!-- nav-pills, nav-tabs -->
                <!-- Nav tabs -->
                <ul class="nav nav-border" role="tablist">
                    <li class="active"><a href="#denim-shirts" data-toggle="tab">Denim Shirts</a></li>
                    <li><a href="#briefs" data-toggle="tab">Briefs</a></li>
                    <li><a href="#cardigans" data-toggle="tab">Cardigans</a></li>
                    <li><a href="#coats" data-toggle="tab">Coats</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="denim-shirts">
                        <p>In iaculis tellus in dignissim faucibus. Curabitur sagittis egestas orci non sollicitudin. Ut et dictum nunc. Aenean non lorem in leo pellentesque eleifend. Donec commodo, lectus eget sodales ornare, sem risus sollicitudin nibh, a venenatis metus mauris porta nibh. Sed eget molestie ex. Praesent sit amet arcu sit amet sem venenatis rhoncus. Duis in lorem a turpis consequat iaculis. Vivamus vel dolor egestas, sagittis erat in, congue nibh. Aliquam ex nisi, ornare in dolor at, maximus pulvinar sapien. </p>
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                    </div>
                    <div class="tab-pane fade" id="briefs">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>In iaculis tellus in dignissim faucibus. Curabitur sagittis egestas orci non sollicitudin. Ut et dictum nunc. Aenean non lorem in leo pellentesque eleifend. Donec commodo, lectus eget sodales ornare, sem risus sollicitudin nibh, a venenatis metus mauris porta nibh. Sed eget molestie ex. Praesent sit amet arcu sit amet sem venenatis rhoncus. Duis in lorem a turpis consequat iaculis. Vivamus vel dolor egestas, sagittis erat in, congue nibh. Aliquam ex nisi, ornare in dolor at, maximus pulvinar sapien. </p>
                    </div>
                    <div class="tab-pane fade" id="cardigans">
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                    </div>
                    <div class="tab-pane fade" id="coats">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                    </div>
                </div>


            </div>
        </div>

    </div><!-- #main -->
<?php

include_once('templates/footers/footer4.php');
include_once('templates/footers/foot.php');


