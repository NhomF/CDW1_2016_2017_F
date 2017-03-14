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
        $less->compileFile('less/305.less', 'css/305.css');
        ?>
        <link href="css/305.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-305">
            <div class="build">
                <h2 style="margin: 0 10%;">Building a website from scratch is easy.<br>No coding skills required!</h2>
                <hr class="no_line" style="margin: 0 auto 60px;">
                <h3><span class="mfn-builder-icon">
                    </span> Muffin Builder 3 <span class="or">or</span> <span class="mfn-composer-icon">
                    </span> Visual Composer
                </h3>

                <div class="ganeral">
                    <div class="image">
                        <img src="image/splash_theme_options_v3.png" alt=""/>
                    </div>
                </div>
            </div>

            <div class="building">
                <div class="buiding-blue">
                    <div class="title">
                        <h2 style="color: #fff;">Now you have more <br>freedom to create new <br>things
                        </h2>
                        <hr class="no_line" >

                        <div class="muffy">
                            <div class="image_wrapper"><img src="image/splash_builder3.png" alt="splash_builder3" width="626" height="109"></div>
                        </div>
                    </div>
                </div>
                <div class="building-black">
                    <div class="new">
                        <h1>
                            What's new?
                        </h1>
                        <hr class="no_line" style="margin: 0 auto 50px;">
                        <div class="one-second">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="image/splash_builder_ico.png">
                                    <hr class="no_line" >
                                    <h3 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">WRAPS</h3>
                                    <p style="color: #afafb0;">The new containers inside the <i>Section</i> called <i>Wraps</i> gives you a freedom to create more advanced and astonishing content. See them in action.</p>


                                </div>
                                <div class="col-md-6">
                                    <img src="image/splash_builder_ico2.png">
                                    <hr class="no_line" >
                                    <h3 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">WRAPS</h3>
                                    <p style="color: #afafb0;">The new containers inside the <i>Section</i> called <i>Wraps</i> gives you a freedom to create more advanced and astonishing content. See them in action.</p>
                                </div>

                            </div>
                            <hr >
                            <div class="row">
                                <div class="col-md-6">

                                    <h4 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">FASR & LIGHT</h4>
                                    <p style="color: #afafb0;">Improved performance and speed. Reduced transfered and saved data.</p>
                                </div>

                                <div class="col-md-6">

                                    <h4 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">CLEAN lOOK</h4>
                                    <p style="color: #afafb0;">Better readability thanks to the new, clear layout, graphics and light colors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


