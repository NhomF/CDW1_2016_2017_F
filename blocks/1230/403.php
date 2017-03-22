<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/403.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/403.less', 'css/403.css');
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
        <div class="type-403">
            <!--
           Mod-product============================================================-->
            <div class="mod-product">
                <div class="container">
                    <div class="product">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                    <div class="product-1" style="border-right: 1px solid blue; border-left: 1px solid blue;">
                                        <h1>Quisque porta sapien aliquet eget<br>
                                            pellentesque . Aliquam dolor<br>
                                            scelerisque porttitor massa placerat<br>
                                            velit rutrum magna dolor
                                        </h1>
                                        <br>
                                        <img src="images/home_surveyor_arrow_right.png" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <div class="row">
                                        <div class="product-2">
                                            <div class="col-lg-6 col-xs-12">
                                                <div class="item-1">
                                                    <img src="images/home_surveyor_box1.jpg" alt=""/>
                                                    <div class="product-title">
                                                        <h4 style="color: blue;">Our company</h4>
                                                        <hr style="    width: 28px;
                                                            margin-top: 20px;
                                                            margin-bottom: 20px;
                                                            margin-left: 1px;
                                                            border: 29;
                                                            border-top: 4px solid blue;">
                                                    </div>
                                                    <div class="product-content">
                                                        <p>Etiam ullamcorper. Suspendisse pellen
                                                            <br>tesque dui, non felis. Maecenas malesuada
                                                            <br>elit lectus felis, malesuada
                                                            ultricies.
                                                            <br>Curabitur et ligula. Ut molestie.</p>
                                                        <a href="#"><p style="color: #ff5a00;">Learn more ...</p></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="item-2">
                                                    <img src="images/home_surveyor_box1.jpg" alt=""/>
                                                    <div class="product-title">
                                                        <h4 style="color: blue;">Our company</h4>
                                                        <hr style="    width: 28px;
                                                            margin-top: 20px;
                                                            margin-bottom: 20px;
                                                            margin-left: 1px;
                                                            border: 29;
                                                            border-top: 4px solid blue;">
                                                    </div>
                                                    <div class="product-content">
                                                        <p>Etiam ullamcorper. Suspendisse pellen
                                                            <br>tesque dui, non felis. Maecenas malesuada
                                                            <br>elit lectus felis, malesuada
                                                            ultricies.
                                                            <br>Curabitur et ligula. Ut molestie.</p>
                                                        <a href="#"><p style="color: #ff5a00;">Learn more ...</p></a>
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
            </div>
        </div>
        <div class="clear"></div>
        <!---------------------------------------------->

    </body>
</html>