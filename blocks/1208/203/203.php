
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/203.less', 'css/203.css');
        ?>

        <link href="css/203.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="type-203">
            <div class="home-2-waraper">

                <div class="header-area">
                    <div class="header-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="logo-area">

                                        <a href="/">
                                            <img src="images/logo.png" alt="orion"/>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-9 col-xs-12">
                                    <div class="block-header">

                                        <div class="phone"><i class="fa fa-phone"></i>(+880) 177 021 7714</div>


                                        <div class="email"><a href="#"><i class="fa fa-envelope-o"></i>admin@bootexperts.com</a></div>

                                    </div>
                                    <!-- categorys-product-search start -->
                                    <div class="search-categori">
                                        <div class="search-box">
                                            <form action="#" method="get" class="search-form-cat" role="search">

                                                <input type="search" name="q" value="" class="form-control input-sm" maxlength="64" placeholder="Enter your search key ... ">
                                                <button type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- categorys-product-search end -->

                                </div>
                                <div class="col-lg-2 col-md-3 hidden-sm col-xs-12">

                                    <div class="shopping-cart expand">
                                        <a href="#" title="My Cart">
                                            <span>Shopping Cart <span class="badge--cart bigcounter"> 0</span></span>
                                        </a>
                                        <div class="restrain small-cart-content cart-group-1">
                                            <ul class="cart-list">

                                            </ul>
                                            <p class="total">Total: <span class="amount shopping-cart__total"> <span class=money>$0.00</span></span></p>
                                            <p class="buttons">
                                                <a href="#" class="button">Check Out</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
