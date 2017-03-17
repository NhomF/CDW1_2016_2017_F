
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css"/>
        <link href="css/preview.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/205.less', 'css/205.css');
        ?>

        <link href="css/205.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="type-205">
            <div class="home-2-waraper">
                <div class="slider-area mb30">
                    <div class="container">
                        <div class="row">
                            <!-- slider -->
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="left-slide">
                                    <!-- slider -->
                                    <div id="slider" class="slider-area">       
                                        <div class="bend niceties preview-2">
                                            <div id="ensign-nivoslider-2" class="slides nivoSlider">
                                            
                                                <img src="images/slide1_image.jpg" alt="orion" title="#slider-direction-1" style="width: 770px; visibility: hidden;">
                                                <img src="images/slide2_image.jpg" alt="orion" title="#slider-direction-2" style="width: 770px; visibility: hidden;">
                                                <img src="images/slide1_image.jpg" alt="orion" title="#slider-direction-1" style="width: 770px; visibility: hidden;">
                                                <img src="images/slide2_image.jpg" alt="orion" title="#slider-direction-2" style="width: 770px; visibility: hidden;">
                                               
                                                <div class="nivo-caption" style="display: none;">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">

                                                            <h1 class="title1">Book of “Smile”</h1>


                                                            <h3 class="title3">Make your life so beautiful !</h3>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nivo-directionNav">
                                                    <a class="nivo-prevNav">Prev</a>
                                                    <a class="nivo-nextNav">Next</a>
                                                </div>
                                               </div>
                                            <!-- direction 1 -->


                                            <div class="slider-caption">



                                                <div id="slider-direction-1" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">

                                                            <h1 class="title1">Book of “Smile”</h1>


                                                            <h3 class="title3">Make your life so beautiful !</h3>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="slider-direction-2" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">

                                                            <h1 class="title1">Book of “Smile”</h1>


                                                            <h3 class="title3">Make your life so beautiful !</h3>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="slider-direction-3" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">

                                                            <h1 class="title1">Birthday's Gift's</h1>


                                                            <h3 class="title3">Save Up to</h3>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="slider-direction-4" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">


                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="slider-direction-5" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl slider-2">
                                                        <div class="title-container">


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- slider end-->      

                            <!--advertise area start-->

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="cot">
                                <div class="left-slide-add">
                                    <div class="single-add vina-banner">

                                        <a href="#"><img src="images/add-half1.jpg" alt="orion"> </a>

                                    </div>

                                    <div class="single-add vina-banner mt20">

                                        <a href="#"><img src="images/add-half2.jpg" alt="orion"> </a>

                                    </div>  
                                </div>
                            </div>
                            </div>

                            <!--advertise area end-->
                        </div> 
                    </div>    
                </div>
                <script>
                    $(window).load(function () {
                        $('#ensign-nivoslider-2').nivoSlider();
                    });</script>

            </div>		
        </div>
    </body>
</html>
