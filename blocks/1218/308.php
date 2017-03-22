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
        $less->compileFile('less/308.less', 'css/308.css');
        ?>
        <link href="css/308.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-308">
         <div class="mod-custom-25">
            <div id="Wrapper">
                <div class="section mcb-section full-width hide-mobile" id="shortcodes" data-id="#shortcodes">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Build amazing sites using Shortcodes</h2>
                                        <h2>Switch between <span>Classic</span> and <span>Modern</span> style</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider ">
                            <hr class="no_line" id="line2">
                        </div>
                        <div class="column mcb-column one column_image">
                            <div class="image_frame image_item scale-with-grid aligncenter no_border hover-disable">
                                <div class="image_wrapper">
                                    <a href="#">
                                        <div class="mask"></div>
                                        <img class="scale-with-grid" src="images/theme_shortcodes.jpg" alt="theme_shortcodes">
<!--                                        <img class="scale-with-grid" src="images/theme_shortcodes_mobile.jpg" alt="theme_shortcodes_mobile">-->
                                    </a>
                                    <div class="image_links">
                                        <a href="#" class="link"></a>
                                        <i class="icon-link"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider ">
                            <hr class="no_line" id="line3">
                        </div>
                        <div class="column mcb-column one column_column  column-margin">
                            <div class="column_attr clearfix align_center">
                                <a href="#" class="button button_large button_theme button_js">
                                    <span class="button_label">Browse all shortcodes</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" id="create">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2 class="h2">Create easily anything you want with BeTheme</h2>
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


