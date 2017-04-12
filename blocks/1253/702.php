<!DOCTYPE html>

<html>

    <head>
        <title>Cosmetorix</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/702.less', 'css/702.css');
        ?>
        <link href="css/702.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="type-702">
                <div class="megamenu">

                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <h2 class="mb-title">Cosmetorix</h2>
                            <span class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </span>
                        </div>

                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="mega-dropdown">
                                    <a id="nav-menu">HOME</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Body</a></li>
                                        <li><a href="#">Eyes</a></li>
                                        <li><a href="#">Face</a></li>
                                        <li><a href="#">Hair</a></li>
                                        <li><a href="#">Nails</a></li>
                                        <li><a href="#">Tools & Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <span class="hot">HOT DEALS</span>
                                    <a id="nav-menu">PRODUCTS</a>

                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <div class="col-20">
                                            <ul>
                                                <li class="dropdown-header">BEAUTY TOOLS</li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Concealers</a></li>
                                                <li><a href="#">Eye Liner</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Hair</a></li>
                                                <li><a href="#">Nails</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-20">
                                            <ul>
                                                <li class="dropdown-header">BLUSHERS</li>
                                                <li><a href="#">Eye Liner</a></li>
                                                <li><a href="#">Concealers</a></li>
                                                <li><a href="#">Body</a></li>                            
                                                <li><a href="#">Blushers</a></li>	
                                                <li><a href="#">Beauty Tools</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                                <li><a href="#">Nails</a></li>                            
                                                <li><a href="#">Hair</a></li>
                                                <li><a href="#">Face</a></li>                            
                                                <li><a href="#">Eyes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-20">
                                            <ul>
                                                <li class="dropdown-header">EYE SHADOWS</li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Concealers</a></li>
                                                <li><a href="#">Eye Liner</a></li>                      
                                            </ul>
                                        </div>
                                        <div class="col-20">
                                            <ul>
                                                <li class="dropdown-header">LIPSTICKS</li>
                                                <li><a href="#">Hair</a></li>
                                                <li><a href="#">Nails</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                                <li><a href="#">Beauty Tools</a></li>
                                                <li><a href="#">Blushers</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Concealers</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                                <li><a href="#">Eye Liner</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Face</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-20">
                                            <ul>
                                                <li class="dropdown-header">MAKE UP REMOVERS</li>
                                                <li><a href="#">Beauty Tools</a></li>
                                                <li><a href="#">Blushers</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Concealers</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Face</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </ul>				
                                </li>
                                <li class="mega-dropdown">
                                    <a id="nav-menu">BLOG</a>				
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <div class="col-sm-3">
                                            <ul>
                                                <img src="images/blog4_1024x1024.jpg">
                                                <div class="blog-title"><a href="#">Best Makeup Secrets & Looks For A Date Night. Look romnantic.</a></div>
                                                <p>We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested cosmetology brands in the world....</p>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <ul>
                                                <img src="images/blog3_1024x1024.jpg">
                                                <div class="blog-title"><a href="#">Our goal is to help you stay healthy as well as gorgeous at the same time</a></div>
                                                <p>Soon you’ll discover how it is possible to use organic cosmetics for your body. We’ve collected all our knowledge to...</p>						
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <ul>
                                                <img src="images/blog2_acd99a2d-64fd-4b59-96f8-30a9bdf42653_1024x1024.jpg">
                                                <div class="blog-title"><a href="#">Also you can always contact our consultants!</a></div>
                                                <p>Organic cosmetics contact our consultants We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested...</p>                         
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <ul>
                                                <img src="images/blog1_00643b2b-1226-4ebf-9508-967dd3f30ebd_1024x1024.jpg">
                                                <div class="blog-title"><a href="#">Our company advocates the postulate that the health is the biggest value in o...</a></div>
                                                <p>Also you can always contact our consultants! Our goal is to satisfy all our clients despite of their age, gender...</p>
                                            </ul>
                                        </div>
                                    </ul>				
                                </li>

                                <li class="mega-dropdown">
                                    <a id="nav-menu">SELL</a>

                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-20 sell-product">
                                            <ul>
                                                <img src="images/borghese_b_moisture_advanced_care_lipcolour_1_large.png">
                                                <div class="product-name"><a href="#">BORGHESE B MOISTURE ADVANCED CARE LIPCOLOUR</a></div>
                                                <span>Nails</span><br>
                                                <span class="price">$30.00</span><br>
                                                <button type="button" class="add-to-cart">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                    ADD TO CART
                                                </button>
                                            </ul>
                                        </li>
                                        <li class="col-20 sell-product">
                                            <ul>
                                                <img src="images/loreal_paris_advanced_revitalift_face_and_neck_day_cream_1_large.png">
                                                <div class="product-name"><a href="#">LOREAL PARIS ADVANCED REVITALIFT FACE AND NECK ...</a></div>
                                                <span>Face</span><br>
                                                <span class="price">From $19.00</span>
                                                <strike>$23.00</strike><br>
                                                <button type="button" class="add-to-cart">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                    ADD TO CART
                                                </button>
                                            </ul>
                                        </li>
                                        <li class="col-20 sell-product">
                                            <ul>
                                                <img src="images/nivea_body_creme_13_5_ounce_1_large.png">
                                                <div class="product-name"><a href="#">NIVEA BODY CREME 13 5 OUNCE MOISTURE CREAM 15cc</a></div>     
                                                <span>Eyes</span><br>
                                                <span class="price">$26.00</span>
                                                <strike>$39.00</strike><br>
                                                <button type="button" class="add-to-cart">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                    ADD TO CART
                                                </button>
                                            </ul>
                                        </li>
                                        <li class="col-20 sell-product">
                                            <ul>
                                                <img src="images/olay_complete_all_day_uv_moisture_cream_spf_15_1_large.png">
                                                <div class="product-name"><a href="#">OLAY COMPLETE ALL DAY UV MOISTURE CREAM SPF 15</a></div>
                                                <span>Tools & Accessories</span><br>
                                                <span class="price">From $12.00</span>
                                                <strike>$20.00</strike><br>
                                                <button type="button" class="add-to-cart">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                    ADD TO CART
                                                </button>
                                            </ul>
                                        </li>
                                        <li class="col-20 sell-product" style="border: none">
                                            <ul>
                                                <img src="images/olay_complete_daily_defense_all_day_moisturizer_with_sunscreen_spf30_sensitive_skin_1_large.png">
                                                <div class="product-name"><a href="#">OLAY COMPLETE DAILY DEFENSE ALL DAY MOISTURIZER...</a></div>
                                                <span>Face</span><br>
                                                <strike>$30.00</strike><br>
                                                <button type="button" class="add-to-cart">
                                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                                    ADD TO CART
                                                </button>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="mega-dropdown">
                                    <a href="#">SITE MAP</a>
                                </li>
                                <li class="mega-dropdown">
                                    <a href="#">CONTACT US</a>
                                </li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </nav>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>