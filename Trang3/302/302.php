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
        $less->compileFile('less/302.less', 'css/302.css');
        ?>
        <link href="css/302.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-302">
        <!--
        Mod-Banner============================================================-->
        <div class="mod-banner">
            <div class="banner">
                <h2 style="color: white;letter-spacing: 2px;">The biggest <img src="images/splash_slider_wp.png" alt=""/>         theme ever</h2>
                <img src="images/splash_slider_mouse.png"  style="margin-top: 50px;"alt=""/>
            </div>
        </div>

        </div>
    </body>
</html>


