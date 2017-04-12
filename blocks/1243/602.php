<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-o-3.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascrip.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/602.less', 'css/602.css');
        ?>
         <link href="css/602.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-602">
             <div id="content" class="site-content container">
                <div class="banner col-md-12">
                    <a href="#"><img src="images/banner-1.jpg"></a>
                </div>
            </div>
        </div>
    </body>
         <div style="clear: both;"></div>

</html>