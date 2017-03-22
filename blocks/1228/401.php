<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/401.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/401.less', 'css/401.css');
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
        <div class="type-401">
            <!--
            Mod-menu-main============================================================-->

            <div class="mod-menu-main" style="padding: 34px 0;">  
                <!--------------------------MENU MAIN------------------------------>
                <div class="container">
                    <div class="navbar-wrapper">
                        <!-----mega menu------->
                        <div class="container">
                            <nav class="navbar menu" style="z-index: 999; line-height: 4.5;">
                                <div id="logo">
                                    <a href="#"><img src="images/surveyor.png" alt=""/></a>

                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="menu">

                                    <ul>
                                        <li style="background-color: #363A70;"><a href="#"><span style="color: white;">Home</span></a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Certificates</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li class="btn-buy"><a href="#"><span style="color:#ff5a00;">Buy now</span></a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <div class="clear"></div>
                    </div>    
                </div>
                <!--------------------------COMMENT------------------------------>
            </div>
        </div>
    </body>
</html>