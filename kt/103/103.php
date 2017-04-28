 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Automotive Car Dealership &amp; Business HTML Template</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/font.css" media="screen" />
        <!-- Custom styles for this template -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/ts.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/103.less', 'css/103.css');
        ?>
        <link href="css/103.css" rel="stylesheet" type="text/css" />

    </head>
    <body>

        <section class="message-wrap">
            <div class="container">
                <div class="row">
                    <h2 class="col-lg-9 col-md-8 col-sm-12 col-xs-12 xs-padding-left-15">Discover a website for car dealers that converts visitors to <span class="alternate-font">customers</span></h2>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 xs-padding-right-15"> <a href="#" class="default-btn pull-right action_button lg-button">Schedule a Test Drive</a> </div>
                </div>
            </div>
            <div class="message-shadow"></div>
        </section>
        <!--message-wrap ends-->
        <section class="content">
            <div class="container">
                <div class="inner-page homepage margin-bottom-none">
                    <section class="car-block-wrap padding-bottom-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                    <div class="flip margin-bottom-30">
                                        <div class="card">
                                            <div class="face front"><img class="img-responsive" src="images/car1.jpg" alt=""></div>
                                            <div class="face back">
                                                <div class='hover_title'>Race Ready</div>
                                                <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="images/car1-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                        </div>
                                    </div>
                                    <h4><a href="#">FACTORY READY FOR TRACK DAY</a></h4>
                                    <p class="margin-bottom-none">Sea veniam lucilius neglegentur ad, an per sumo volum
                                        voluptatibus. Qui cu everti repudiare. Eam ut cibo nobis 
                                        aperiam, elit qualisque at cum. Possit antiopam id est. 
                                        Illud delicata ea mel, sed novum mucius id. Nullam qua.</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                    <div class="flip horizontal margin-bottom-30">
                                        <div class="card">
                                            <div class="face front"><img class="img-responsive" src="images/car1.jpg" alt=""></div>
                                            <div class="face back">
                                                <div class='hover_title'>Family Oriented</div>
                                                <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="images/car2-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                        </div>
                                    </div>
                                    <h4><a href="#">A SPORT UTILITY FOR THE FAMILY</a></h4>
                                    <p class="margin-bottom-none">Cum ut tractatos imperdiet, no tamquam facilisi qui. 
                                        Eum tibique consectetuer in, an legimus referrentur vis, 
                                        vocent deseruisse ex mel. Sed te idque graecis. Vel ne 
                                        libris dolores, in mel graece dolorum.</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                    <div class="flip margin-bottom-30">
                                        <div class="card">
                                            <div class="face front"><img class="img-responsive" src="images/car1.jpg" alt=""></div>
                                            <div class="face back">
                                                <div class='hover_title'>World Class</div>
                                                <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="images/car3-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                        </div>
                                    </div>
                                    <h4><a href="#">MAKE AN EXECUTIVE STATEMENT</a></h4>
                                    <p class="margin-bottom-none">Te inermis cotidieque cum, sed ea utroque atomorum 
                                        sadipscing. Qui id oratio everti scaevola, vim ea augue 
                                        ponderum vituperatoribus, quo adhuc abhorreant 
                                        omittantur ad. No his fierent perpetua consequat, et nis.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </body>
</html>



