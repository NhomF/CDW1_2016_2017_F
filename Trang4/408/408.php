<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/408.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/408.less', 'css/408.css');
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
        <div class="type-408">
     <div class="custom-25-chitiet">
            <div class="footer">
            <footer id="Footer" class="clearfix">
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright"> © 2016 BeSurveyor - BeTheme. All Rights Reserved.
                                <a target="_blank" rel="nofollow" href="#">Muffin group</a>
                            </div>
                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>
        </div>
</body>
</html>