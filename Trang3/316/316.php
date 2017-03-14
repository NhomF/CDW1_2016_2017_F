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
        $less->compileFile('less/316.less', 'css/316.css');
        ?>
        <link href="css/316.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-316">
            <!--
            Mod-buy============================================================-->
            <div class="mod-buy">
                <div class="buy-now">
                    <h2 style="font-size: 40px; line-height: 40px; letter-spacing: 1px;">Creating with BeTheme is super fast and easy
                        <br>
                        Start your website today!</h2>
                    <div class="btn-buynow">
                        <a href="#">BUY NOW FOR $59</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


