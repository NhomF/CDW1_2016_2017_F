<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/604.less', 'css/604.css');
        ?>
        <link href="css/604.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-604">
            <div class="pd-list">
                <div class="container">
                    <div class="row images_container"> 
                        <div class="col-sm-6 col-clothes">
                            <div class="pd-list-item">
                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA" href="#">
                                            <img class="image"  src="images/banner-2.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-clothes">
                            <div class="pd-list-item">

                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA" href="#">
                                            <img class="image" src="images/banner-3.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                    </div> 
                    <div class="row images_container"> 
                        <div class="col-sm-6 col-clothes">
                            <div class="pd-list-item">
                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA" href="#">
                                            <img class="image"  src="images/banner-4.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-clothes">
                            <div class="pd-list-item">

                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA" href="#">
                                            <img class="image" src="images/banner-5.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>           
    </body>
</html>