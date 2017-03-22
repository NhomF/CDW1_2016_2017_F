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
        $less->compileFile('less/310.less', 'css/310.css');
        ?>
        <link href="css/310.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-310">
         <div class="mod-custom-25">
            <div id="Wrapper">
               <div class="section mcb-section" id="plugins" data-id="#plugins">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Create beautiful things<br>with already included plugins</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line7">
                                </div><div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border"
                                         ><div class="image_wrapper">
                                            <img class="scale-with-grid" src="images/splash_grid_sliders3.png" alt="splash_grid_sliders3">
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


