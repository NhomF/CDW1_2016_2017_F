<!DOCTYPE html>

<html>

    <head>
        <title>Cosmetorix</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/703.less', 'css/703.css');
        ?>
        <link href="css/703.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-703">
            <div class="container">
                <div class="row flexbox">
                    <!-- <div class="col-sm-8 custom_showcase custom_showcase__1"> -->
                    <div class="col-sm-8 custom_showcase showcase_1">
                        <a class="inside" href="#">
                            <div>
                                <h6 class="type_1">Lips make-up</h6>
                                <h2 class="type_2">Improve your look with new MaxFactor Colour Elixir Lipstick</h2>

                                <p>Add some charm to your image with new series of MaxFactor Lipstick available to order at our store.</p>
                                <p class="type_3">$25.99</p>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-sm-4 custom_showcase custom_showcase__2"> -->
                    <div class="col-sm-4 custom_shawcase_col_wr">
                        <div class=" custom_showcase">
                            <div class="showcase_2">
                            <a class="inside" href="#">
                                <div>
                                    <h6 class="type_1">Face Powders</h6>
                                    <h2>Get your favorite powder at a half price</h2>
                                </div>
                            </a>
                            </div>
                        </div>
                        <div class=" custom_showcase">
                            <div class="showcase_3">
                            <a class="inside" href="#">
                                <div>
                                    <h6 class="type_1">Perfumes</h6>
                                    <h2>New Calvin Klein Eau de Parfum for her</h2>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>