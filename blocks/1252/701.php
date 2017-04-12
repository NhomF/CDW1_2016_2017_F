<!DOCTYPE html>

<html>

    <head>
        <title>Cosmetorix</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Style -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/701.less', 'css/701.css');
        ?>
        <link href="css/701.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div class="type-701">
            <div class="header_top">
                <div class="container">
                    <!-- USER MENU -->			
                    <ul class="header_user">				
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                    <!-- CURRENCY SWITCHER-->
                    <div class="header_currency">
                        Currency
                        <select name="currencies">
                            <option value="USD" selected="selected">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="header_main">     
                    <!-- HEADER CUSTOM -->

                    <div class="col-sm-4 col-xs-12 header_custom">
                        <span>Call us:</span>
                        <a href="#">+3(800) 2345-6789</a>
                        <p>7 Days a week from 9:00 am to 7:00 pm</p>

                    </div>
                    <!-- LOGO -->
                    <div class="col-sm-4 col-xs-12 logo">
                        <a href="#">
                            <img src="images/logo.png" alt="Cosmetorix">
                        </a>
                    </div>
                    <!-- WISHLIST -->
                    <div class="col-sm-4 col-xs-12 wishlist_header">
                        <a href="#">
                            <span class="glyphicon glyphicon-heart-empty"></span>
                            <span class="text">Wishlist</span>                                
                        </a>

                        <!-- HEADER CART -->
                        <div class="header_cart">
                            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>
                                Cart:<span id="cart_items">0</span>item(s)</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>