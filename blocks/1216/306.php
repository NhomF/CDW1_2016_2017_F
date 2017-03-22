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
        $less->compileFile('less/306.less', 'css/306.css');
        ?>
        <link href="css/306.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-306">
            <div class="layout">
                <div class="title">
                    <h2 >Start with the Base Grid and choose your layout</h2>
                </div>
                <div class="grid">
                    <div class="item">
                        <img src="image/splash_grid_dualsidebars.png" alt=""/>
                        <p>Full width</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_fullwidth.png" alt=""/>
                        <p>Boxed</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_leftsidebar.png" alt=""/>
                        <p>Left sidebar</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_rightsidebar.png" alt=""/>
                        <p>Right sidebar</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_boxed.png" alt=""/>
                        <p>Dual sidebar</p>
                    </div>
                </div>
            </div>

            <div class="layout-logo">
                <div class="container">
                    <h2>20 customizable Header Styles.<br>Upload logos, set colors, fonts, sizes, extras and more...</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <img src="image/1.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/2.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/3.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/4.png" alt=""/>
                        </div>
                    </div>
                    <p>You can use different menus on different pages of your website</p>
                </div>
            </div>
        </div>
    </body>
</html>


