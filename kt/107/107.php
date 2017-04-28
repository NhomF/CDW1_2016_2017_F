 
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
        <script src="js/bootstrap.min.js"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/107.less', 'css/107.css');
        ?>
        <link href="css/107.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!--Footer Start-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                        <h4>About us</h4>
                        <img src="images/ceo.jpg" alt="">
                        <p>Sed ut perspiciatis unde om
                            nis iste natus error sit volup
                            atem accusantium dolor
                            que laudantium. Totam reillo inventore veritatis et quasi architecto 
                            beatae vitae dicta sunt explicabo. Nemo en
                            im ipsam voluptatem quia voluptas sit asper
                            natur aut odit aut fugit. </p>
                        <a href="#"><em>Harold Ford, President / CEO</em></a> </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <h4>Contact us</h4>
                        <div class="footer-contact">
                            <ul>
                                <li><strong><i class="fa fa-phone"></i>Phone:</strong><span>1-800-123-4567</span></li>
                                <li><strong><i class="fa fa-map-marker"></i>Address:</strong><span>Company Name<br>
                                        1234 Street Name<br>
                                        City Name, AB  12345<br>
                                        United States</span></li>
                                <li><strong><i class="fa fa-envelope-o"></i>Email:</strong><span><a href="#">sales@company.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <h4>Latest tweets</h4>
                        <div class="latest-tweet">
                            <div><i class="fa fa-twitter"></i>
                                <p>Put your tweet message here.  Make it 
                                    compelling to attract other <a href="#">@people</a> to 
                                    read and click on your <a href="#">https://links</a> to 
                                    your site. <a href="#">#hashtag</a></p>
                            </div>
                            <div><i class="fa fa-twitter"></i>
                                <p>Put your tweet message here.  Make it 
                                    compelling to attract other <a href="#">@people</a> to 
                                    read and click on your <a href="#">https://links</a> to 
                                    your site. <a href="#">#hashtag</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                        <h4>newsletter</h4>
                        <p>By subscribing to our company newsletter
                            you will always be up-to-date on our latest
                            promotions, deals and vehicle inventory!</p>
                        <form method="post" action="#" class="form_contact">
                            <input type="text" value="" name="MERGE0" placeholder="Email Address">
                            <input type="submit" value="Subscribe" class="md-button">
                            <input type="hidden" name="u" value="">
                            <input type="hidden" name="id" value="">
                        </form>
                    </div>
                </div>
            </div>
        </footer>

        <div class="clearfix"></div>
        <section class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="logo-footer margin-bottom-40 md-margin-bottom-40 sm-margin-bottom-10 xs-margin-bottom-20"><a href="#">
                                <h1>Automotive</h1>
                                <span>template</span></a></div>
                        <p>Copyright &copy; 2017 Theme Suite.  All rights reserved.</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
                            <li><a class="sc-1" href="#"></a></li>
                            <li><a class="sc-2" href="#"></a></li>
                            <li><a class="sc-3" href="#"></a></li>
                            <li><a class="sc-4" href="#"></a></li>
                            <li><a class="sc-5" href="#"></a></li>
                            <li><a class="sc-6" href="#"></a></li>
                            <li><a class="sc-7" href="#"></a></li>
                            <li><a class="sc-8" href="#"></a></li>
                            <li><a class="sc-9" href="#"></a></li>
                            <li><a class="sc-10" href="#"></a></li>
                        </ul>
                        <ul class="f-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Inventory</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>



