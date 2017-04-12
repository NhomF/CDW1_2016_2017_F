<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/705.less', 'css/705.css');
        ?>
        <link href="css/705.css" rel="stylesheet" type="text/css" />
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>
    </head>

    <body>
         <div class="container">
            <div class="row">
                <h2 style="margin-top: 93px; text-transform: capitalize; text-align: center">Featured Products</h2>
            </div>
        </div>
        <!-- Swiper -->
        <div class="type-705">
        <div class="swiper-container container slide_product">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front">
                        <div class="product_wrapper">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pro4.png">
                                    <img class="img_2" src="images/pro5.png">
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>
                                </a>
                            </div>

                            <div class="product_info">
                                <div class="product_name">
                                    <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                                </div>

                                <div class="product_type">
                                    Face
                                </div>
                                <div class="product_price">
                                    <span class="money">$16.00</span>
                                </div>

                                <div class="product_links">
                                    <div class="product_links_inside">
                                        <form method="post" action="/cart/add">
                                            <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                        </form>
                                        <div class="product_links_bottom">
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="link_icon_wrapper">
                                                <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
        </div>
        <!-- Swiper JS -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 4,
                spaceBetween: 0,
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 3
                    }
                }
            });
        </script>

        <div class="slide-mobile">
            <div class="container">
                <div class="row">
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_wrapper">
                        <div class="product_img">
                            <a href="#">
                                <img src="images/pro4.png">
                                <img class="img_2" src="images/pro5.png">
                                <div class="product_badge">
                                    <span>New</span>
                                </div>
                            </a>
                        </div>

                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Youngman 15 Colors Professional Concealer Camou...</a>
                            </div>

                            <div class="product_type">
                                Face
                            </div>
                            <div class="product_price">
                                <span class="money">$16.00</span>
                            </div>

                            <div class="product_links">
                                <div class="product_links_inside">
                                    <form method="post" action="/cart/add">
                                        <button class="btn btn_big"><i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART</button>
                                    </form>
                                    <div class="product_links_bottom">
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon quick_view_btn" href="#" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="link_icon_wrapper">
                                            <a class="link_icon wishlist_add_login" href="#" title="Add to the wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
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