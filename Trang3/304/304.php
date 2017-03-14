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
        $less->compileFile('less/304.less', 'css/304.css');
        ?>
        <link href="css/304.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-304">
            <div class="yes">
                <div class="clearfixx">
                    <hr class="no_line" style="margin: 0 auto 60px;">
                    <h3 style="margin: 0 10%;" class="info">
                        <span class="info-icon">i</span>Yes... All these great looking layouts are included in just one single theme
                    </h3>
                    <hr class="no_line" style="margin: 0 auto 50px;">
                    <div style="margin: 0 10%;">
                        <button>INSTALL NOW WITH 1 CLICK</button>
                    </div>
                </div>
            </div>

            <a href="#">
                <div class="play">
                    <h2 style="margin: 20px 10%;">Watch this short video <span class="play-icon"><i> <img src="image/Untitled.png" alt=""/></i></span></span> and see how it works</h2>

                </div>
            </a>
        </div>

    </body>
</html>


