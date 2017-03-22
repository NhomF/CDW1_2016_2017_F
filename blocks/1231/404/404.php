<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/404.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/404.less', 'css/404.css');
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
        <div class="clear"></div>
        <div class="type-404">
            <!--
           Mod-turpis============================================================-->
            <div class="mod-turpis">
                <div class="container">
                    <div class="turpis">
                        <div class="turpis-title">
                            <h1 style="color: #ff5a00; font-size: 33px;margin-bottom: 20px;font-weight: 700;">Fusce commodo turpis</h1>
                            <p>Proin dapibus, accumsan sit amet, elementum dui. Aliquam at tellus. Cras suscipit, velit tristique ullamcorper. Mauris viverra sem nunc, at lorem id
                                <br>  dolor ut turpis eget lacus sagittis luctus augue. Nulla dignissim volutpat non, leo. Nullam sapien. Nam quis ultricies vitae, vestibulum varius. Morbi
                                <br>a mi. Suspendisse pede. Etiam tempor venenatis nulla.</p>
                        </div>
                        <div class="turpis-product">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-xs-12">
                                        <div class="turpis-product-1">
                                            <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                            <div class="content">
                                                <h4>Bibendum sapien</h4>
                                                <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="btn-more">
                            <p><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>