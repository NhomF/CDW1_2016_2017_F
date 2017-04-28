
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title></title>             
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">        
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/601.less', 'css/601.css');
        ?>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/601.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="type-601">
            <!-- Page-->
            <div class="page text-center text-md-left">
                <!-- Page Header-->
                <header class="page-head">
                    <div class="shell text-sm-left">
                        <div class="range range-sm-justify">
                            <div class="cell-md-5 cell-lg-4 cell-sm-6">
                                <div class="header-inner-left">
                                    <div class="header-brand"><a href="#" class="header-brand-name">
                                            <img src="images/header-brand.png" alt=""></a></div>
                                </div>
                            </div>
                            <div class="cell-sm-5 cell-md-5 cell-lg-4 offset-top-0">
                                <div class="header-inner-right">
                                    <div class="unit unit-horizontal unit-spacing-xs unit-middle unit-align-center unit-sm-align-left">
                                        <div class="unit-left"><span style="position: relative;  top: 1px;" class="icon icon-sm icon-primary fa-instagram"></span></div>
                                        <div class="unit-body"><small>Call Us Toll Free:</small>
                                            <div><a href="callto:#">+1 (504) 123 2323</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Page Content-->
                <main class="page-content">
                    <!-- Beat the Heat During the Extremely Hot Summer!-->
                    <section style="background-image: url(images/home-01-2050x1260.jpg);" class="bg-image bg-fixed section-sm-top-190 section-lg-top-205">
                        <div class="shell">
                            <div class="range section-50 range-sm-right range-md-reverse range-lg-top section-md-90 section-lg-135 section-xl-bottom-45">
                                <div class="cell-md-6 cell-lg-5 cell-lg-preffix-1">
                                    <h1 class="text-white postfix-lg-right--30 postfix-md-right--30">Beat the Heat During the Extremely	<br class="veil reveal-md-block">Hot Summer!
                                    </h1>
                                </div>
                                <div class="cell-md-6 cell-lg-6 image-offset">
                                    <div class="image-wrap">
                                        <div class="image image-left"><img src="images/home-02-850x669.jpg" alt="" width="850" height="669" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Heating Repair-->
                    <section class="section-50 section-sm-75 section-lg-135 section-xl-270 section-xl-bottom-135">
                        <div class="shell">
                            <div class="range list-index-custom range-sm-center">
                                <div class="cell-sm-6 cell-md-4">
                                    <div class="h2 text-primary">01.</div>
                                    <h1>Heating Repair</h1>
                                    <p class="inset-lg-right-10">Are there areas of your house that remain cold when the heat is turned up? We will be glad to help you solve any heating problem.</p><a href="#" class="btn btn-primary offset-top-20 offset-sm-top-30">
                                        <div class="btn-inner"><span class="icon">+</span><span>More Info</span></div></a>
                                </div>
                                <div class="cell-sm-6 cell-md-4">
                                    <div class="h2 text-primary">01.</div>
                                    <h1>Heating Repair</h1>
                                    <p class="inset-lg-right-10">Are there areas of your house that remain cold when the heat is turned up? We will be glad to help you solve any heating problem.</p><a href="#" class="btn btn-primary offset-top-20 offset-sm-top-30">
                                        <div class="btn-inner"><span class="icon">+</span><span>More Info</span></div></a>
                                </div>
                                <div class="cell-sm-6 cell-md-4">
                                    <div class="h2 text-primary">01.</div>
                                    <h1>Heating Repair</h1>
                                    <p class="inset-lg-right-10">Are there areas of your house that remain cold when the heat is turned up? We will be glad to help you solve any heating problem.</p><a href="#" class="btn btn-primary offset-top-20 offset-sm-top-30">
                                        <div class="btn-inner"><span class="icon">+</span><span>More Info</span></div></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Enjoy the Benefits of Keeping Cool at Your Home-->
                    <section style="background-image: url(images/home-04-2050x1079.jpg);" class="bg-image bg-fixed">
                        <div class="shell">
                            <div class="range section-50 range-sm-right range-lg-top section-md-90 section-lg-135 section-xl-bottom-45">
                                <div class="cell-md-6 cell-lg-5">
                                    <h1 class="text-white postfix-lg-right--20 postfix-md-right--30">Enjoy the Benefits of Keeping Cool at Your Home</h1>
                                </div>
                                <div class="cell-md-6 cell-lg-6 cell-lg-preffix-1 image-offset">
                                    <div class="image-wrap">
                                        <div class="image image-right"><img src="images/home-03-850x669.jpg" alt="" width="850" height="669" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Common Questions-->
                    <section class="section-50 section-sm-75 section-md-90 section-lg-135 section-xl-top-135">
                        <div class="shell">
                            <h1>Common	<br class="veil reveal-sm-block">Questions
                            </h1>
                            <!-- Owl Carousel-->
                            <div data-items="1" data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-nav="true" data-mouse-drag="false" class="owl-carousel offset-top-30 text-sm-left offset-sm-top-40 offset-md-top-55">
                                <div class="item">
                                    <div class="box-info">
                                        <div class="box-info-inner"><span class="h2 text-primary">Q.</span>
                                            <p class="h6">How can I reduce my heating	<br>costs in winter?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-info">
                                        <div class="box-info-inner"><span class="h2 text-pickled-bluewood">A.</span>
                                            <p class="innset-md-right-30 h6 text-content inset-lg-right-70">Make sure to schedule your preventative maintenance. A maintained system dramatically lengthens the life of your equipment, saving you thousands of dollars by not having to prematurely replace your system. Heatox customers enjoy pre-season preventive maintenance check-ups twice a year.</p>
                                        </div>
                                    </div><a href="#" class="btn btn-primary offset-top-20 offset-sm-top-30 offset-lg-top-55 offset-xl-top-75">
                                        <div class="btn-inner"><span class="icon">+</span><span>More Info</span></div></a>
                                </div>
                                <div class="item">
                                    <div class="box-info">
                                        <div class="box-info-inner"><span class="h2 text-primary">Q.</span>
                                            <p class="h6">Why is my upstairs so much warmer	<br>and drier than my downstairs?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-info">
                                        <div class="box-info-inner"><span class="h2 text-pickled-bluewood">A.</span>
                                            <p class="innset-md-right-30 h6 text-content inset-lg-right-120">The simple answer is that heat rises – so that even the warm air your downstairs system generates moves upstairs gradually. And, all that warm air tends to dry things out – from your leather furniture to your nose! There are some options that might help the flow of warm air in the house.</p>
                                        </div>
                                    </div><a href="#" class="btn btn-primary offset-top-20 offset-sm-top-30 offset-lg-top-55 offset-xl-top-75">
                                        <div class="btn-inner"><span class="icon">+</span><span>More Info</span></div></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Have a Question?-->
                    <section class="section-50 section-sm-65 section-md-75 section-lg-90 section-xl-top-135 bg-primary section-xl-bottom-123">
                        <div class="shell">
                            <div class="range range-sm-middle">
                                <div class="cell-sm-7 text-sm-left cell-md-8 cell-lg-7">
                                    <h1 class="text-white">Have a Question?</h1>
                                    <h2 class="text-pickled-bluewood offset-top-5">Contact us today!</h2>
                                </div>
                                <div class="cell-sm-5 text-sm-right cell-sm-middle cell-md-4 cell-lg-5"><a href="#" class="btn btn-pickled-bluewood">
                                        <div class="btn-inner"><span class="icon icon-sm icon-primary fa-instagram"></span><span>Send a message</span></div></a></div>
                            </div>
                        </div>
                    </section>
                    <!-- Beat the Heat During the Extremely Hot Summer!-->
                    <section style="background-image: url(images/home-06-2050x1353.jpg);" class="bg-image bg-fixed">
                        <div class="shell">
                            <div class="range section-50 range-sm-right range-md-reverse range-lg-top section-md-90 section-lg-135 section-xl-bottom-45">
                                <div class="cell-md-6 cell-lg-5 cell-lg-preffix-1">
                                    <h1 class="text-white postfix-lg-right--30 postfix-md-right--30">Quality Heating & Air Conditioning Solutions</h1>
                                </div>
                                <div class="cell-md-6 cell-lg-6 image-offset">
                                    <div class="image-wrap">
                                        <div class="image image-left"><img src="images/home-05-850x669.jpg" alt="" width="850" height="669" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Beands-->
                    <section class="section-50 section-sm-75 section-xl-top-270 section-xl-bottom-135">
                        <div class="shell">
                            <div class="range text-center">
                                <div class="cell-sm-3 text-sm-left"><a href="#" class="banner"><img src="images/home-07-195x29.png" alt="" width="195" height="29" class="img-responsive"/></a></div>
                                <div class="cell-sm-3"><a href="#" class="banner"><img src="images/home-08-191x30.png" alt="" width="191" height="30" class="img-responsive"/></a></div>
                                <div class="cell-sm-3"><a href="#" class="banner"><img src="images/home-09-201x31.png" alt="" width="201" height="31" class="img-responsive"/></a></div>
                                <div class="cell-sm-3 text-sm-right"><a href="#" class="banner"><img src="images/home-10-229x35.png" alt="" width="229" height="35" class="img-responsive"/></a></div>
                            </div>
                        </div>
                    </section>
                    <!-- Newsletter-->
                    <section class="section-50 section-md-75 section-md-90 section-lg-123 bg-dark">
                        <div class="shell">
                            <div class="range range-md-middle">
                                <div class="cell-md-6">
                                    <h2 class="text-white">Newsletter</h2>
                                    <h6 class="text-white-4 offset-top-5 offset-sm-top-10 inset-lg-right-30">Subscribe to our newsletter to receive news, updates, and special offers by email.</h6>
                                </div>
                                <div class="cell-md-6">
                                    <div class="form-wrapper">
                                        <!-- RD Mailform-->
                                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
                                            <div class="form-group">
                                                <label for="contact-email" class="form-label">Your Email Address</label>
                                                <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-default">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- Page Footer-->
                <footer class="page-footer">
                    <section class="footer-section">
                        <div class="shell">
                            <div class="range">
                                <div class="cell-sm-6 cell-md-4 cell-lg-preffix-1 cell-lg-3 footer-inner-left offset-top-0 section-md-top-40 section-md-bottom-40 section-top-20 section-bottom-10 section-sm-bottom-20">
                                    <div class="unit unit-horizontal unit-middle unit-align-center unit-sm-align-left unit-spacing-sm text-left">
                                        <div class="unit-left"><span style="position: relative;  top: 1px;" class="icon icon-sm icon-primary fa-instagram"></span></div>
                                        <div class="unit-body">
                                            <div class="h6 text-white no-wrap"><a href="#">6675 Falls of Neuse Rd.<br>#111 Raleigh, NC 27615</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-sm-6 cell-md-3 footer-inner-left offset-top-0 section-md-top-40 section-md-bottom-40 section-top-10 section-bottom-20 section-sm-top-20">
                                    <div class="unit unit-horizontal unit-middle unit-align-center unit-sm-align-left unit-spacing-sm text-left">
                                        <div class="unit-left"><span style="position: relative;  top: 1px;" class="icon icon-sm icon-primary fa-instagram"></span></div>
                                        <div class="unit-body"><small class="text-dark">Call Us Toll Free:</small>
                                            <div><a href="callto:#">+1 (504) 123 2323</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-sm-12 cell-md-4 cell-lg-3 cell-md-preffix-1 footer-inner-right section-40 offset-top-0 cell-lg-3 cell-lg-preffix-2 section-lg-bottom-50">
                                    <p class="copyright"><a href="index.html" class="brand-name">Heatox</a>	&#169;	<span id="copyright-year"></span>	|	All rights reserved
                                    </p>
                                    <div class="offset-top-25">
                                        <ul class="list-inline">
                                            <li><a href="#" class="icon icon-sm icon-primary fa-instagram"></a></li>
                                            <li><a href="#" class="icon icon-sm icon-primary fa-twitter"></a></li>
                                            <li><a href="#" class="icon icon-sm icon-primary fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- RD Google Map-->
                    <div data-zoom="15" data-y="40.643180" data-x="-73.9874068" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#0066ff&quot;},{&quot;saturation&quot;:74},{&quot;lightness&quot;:100}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;},{&quot;weight&quot;:0.6},{&quot;saturation&quot;:-85},{&quot;lightness&quot;:61}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;color&quot;:&quot;#5f94ff&quot;},{&quot;lightness&quot;:26},{&quot;gamma&quot;:5.86}]}]" class="rd-google-map rd-google-map__model">
                        <ul class="map_locations">
                            <li data-y="40.643180" data-x="-73.9874068">
                                <p>
                                    6675 Falls of Neuse Rd.
                                    #111 Raleigh, NC 27615
                                </p>
                            </li>
                        </ul>
                    </div>
                </footer>
                <!-- {%FOOTER_LINK}-->
            </div>
            <!-- Global Mailform Output-->
            <div id="form-output-global" class="snackbars"></div>
            <!-- PhotoSwipe Gallery-->
            <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                            <button title="Share" class="pswp__button pswp__button--share"></button>
                            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                        <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__cent"></div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </body>

</html>