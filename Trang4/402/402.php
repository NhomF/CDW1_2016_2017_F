<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/402.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/402.less', 'css/402.css');
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
        <div class="type-402">
            <!--
            Mod-banner============================================================-->
            <div class="mod-banner">
                <div class="container">
                    <div class="banner">
                        <div class="number">
                            <img src="images/home_surveyor_slider_num.png" alt=""/>
                        </div>
                        <div class="line">                       
                            <img src="images/home_surveyor_slider_line.png" alt=""/>
                        </div>
                        <div class="banner-content">
                            <div class="title">
                                <h1>Measure precisely<br>and efficiently</h1>                      
                            </div>
                            <br>
                            <div class="text">
                                <p>Proin consectetuer adipiscing elit. Nam ullamcorper libero vel purus. Praesent<br>
                                    gravida gravida mattis, magna in faucibus volutpat, libero et purus est, at orci<br>
                                    consequat lorem libero fermentum eros ut mattis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>