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
        $less->compileFile('less/317.less', 'css/317.css');
        ?>
        <link href="css/317.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-317">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p style="margin: 0;float: left;margin-top: 18px;color: #cdcdce;"> © 2016 BeTheme. All Rights Reserved. <a href="#">Muffin group</a></p>

                        <a href="#"><i class="fa fa-angle-up" aria-hidden="true" style="font-size: 50px;float: right;"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </body>
</html>


