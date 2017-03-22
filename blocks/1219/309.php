<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js-1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/309.less', 'css/309.css');
        ?>
        <link href="css/309.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-309">
            <div class="mod-custom-25">
                <div id="Wrapper">

                    <div class="section mcb-section" id="woocommerce" data-id="#woocommerce">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="placeholder">&nbsp;</div>
                                    </div>
                                    <div class="column mcb-column one-second column_column  column-margin">
                                        <div class="column_attr clearfix align_center">
                                            <h2>Build pretty e-Commerce websites</h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line">
                                    </div>
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="placeholder">&nbsp;</div>
                                    </div>
                                    <div class="column mcb-column one-fourth column_icon_box ">
                                        <div class="icon_box icon_position_top no_border">
                                            <div class="image_wrapper">
                                                <img src="images/splash_woocommerce_icon_1.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4 class="title">Install Woocommerce in 1 minute</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-fourth column_icon_box ">
                                        <div class="icon_box icon_position_top no_border">
                                            <div class="image_wrapper">
                                                <img src="images/splash_woocommerce_icon_2.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4 class="title">Easily & quickly upload products</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line">
                                    </div>
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="placeholder">&nbsp;</div>
                                    </div>
                                    <div class="column mcb-column one-fourth column_icon_box ">
                                        <div class="icon_box icon_position_top no_border">
                                            <div class="image_wrapper">
                                                <img src="images/splash_woocommerce_icon_3.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4 class="title">Control payments and earn more money</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-fourth column_icon_box ">
                                        <div class="icon_box icon_position_top no_border">
                                            <div class="image_wrapper">
                                                <img src="images/splash_woocommerce_icon_4.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4 class="title">Get more clients</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>


