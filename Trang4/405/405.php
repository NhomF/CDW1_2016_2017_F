<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/405.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/405.less', 'css/405.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/js-1.js" type="text/javascript"></script>

        <style>
            .container{
                width: 1247px;
                margin: 0 auto;
                padding: 0;
            }
        </style>
    </head>

    <body  style="background-color: #f5f8fa;">
        <div class="type-405">
            <div class="custom-25-chitiet">
                <div class="custom-25-chitiet1">
                    <div class="section equal-height-wrap" id="section1">
                        <div class="section-decoration top"></div>
                        <div class="section_wrapper">
                            <div class="mcb-wrap one-second  valign-middle clearfix" id="wrap1">
                                <div class="mcb-wrap-inner">
                                    <div class="column one column-margin-10px">
                                        <div class="column_attr clearfix">
                                            <h2 style="">Phasellus placerat velit congue sodales dignissim</h2>
                                            <p class="p1">Praesent nec tortor non nunc. Vestibulum iaculis. Nam interdum adipiscing elit. Sed malesuada augue odio non eros. Maecenas fermentum.</p>
                                        </div>
                                    </div>
                                    <div class="column one-second column-margin-20px">
                                        <div class="column_attr clearfix" id="column2">
                                            <p class="p2">Etiam ullamcorper. Suspendisse a pellen tesque dui, non felis. Maecenas male suada elit lectus felis, malesuada. Cura bitur et ligula. Ut molestie urna.</p>
                                        </div>
                                    </div>
                                    <div class="column one-second column-margin-20px">
                                        <div class="column_attr clearfix"  id="column2" style="">
                                            <p class="p2">Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum.</p>
                                        </div>
                                    </div>
                                    <div class="column one column_button">
                                        <a class="button" id="button1" href="#">
                                            <span class="button_label">See our references</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mcb-wrap one-second  column-margin-0px valign-bottom clearfix" id="wrap2">
                                <div class="mcb-wrap-inner">
                                    <div class="column one column_image ">
                                        <div class="image_frame scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="images/home_surveyor_pic1.png" alt="home_surveyor_pic1">
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