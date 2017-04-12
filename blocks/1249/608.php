<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/swiper.min.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>

        <script src="js/javascrip-detail.js" type="text/javascript"></script>
        <script src="js/javascrip.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/608.less', 'css/608.css');
        ?>
       <link href="css/608.css" rel="stylesheet" type="text/css" />
    </head>
 
    <body>
        <div class="type-608">
            <div class="direction_bar">
                <div class="container">
                    <ul>
                        <li><a>Home </a></li>
                        <li>/</li>
                        <li><a>Products</a></li>
                        <li>/</li>
                        <li><a>Fashion Dress Sunflower</a> </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <h1 class="title-dress">FASHION DRESS SUNFLOWER</h1>
                <div class="row dress-images">

                    <!--===================== hinh anh san pham ==================-->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-2 dress-small">
                                <i class="fa fa-chevron-up slide-up" aria-hidden="true" onclick="changeUp()"></i>
                                <!-- <div class="dress-box"> -->
                                    <!-- <div class="dress-box-slide" > -->
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <img src="images/dress-1.jpg" alt="" class="small swiper-slide">
                                                <img src="images/dress-2.jpg" alt="" class="small swiper-slide">
                                                <img src="images/dress-3.jpg" alt="" class="small swiper-slide">
                                                <img src="images/dress-4.jpg" alt="" class="small swiper-slide">
                                                <img src="images/dress-5.jpg" alt="" class="small swiper-slide">
                                                <img src="images/dress-6.jpg" alt="" class="small swiper-slide">
                                            
                                            </div>
                                             <div class="swiper-pagination"></div>
                                        </div>
                                       
                                    <!-- </div> -->
                                <!-- </div> -->
                                <i class="fa fa-chevron-down slide-down" aria-hidden="true" onclick="changeDown()"></i>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10 dress-large">
                                <div class="dress-large-image zoom" id="zoom-dress">
                                    <img src="images/dress-large.jpg" alt="" class="large swiper-slide">
                                    <a data-links="images/dress-1.jpg,images/dress-2.jpg,images/dress-3.jpg,images/dress-4.jpg,images/dress-5.jpg,images/dress-6.jpg" class="magnific-gallery">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--===================== chi tiet san pham ==================-->

                    <div class="col-md-6 col-sm-6 col-xs-12 dress-detail">
                        <h2>$36.00</h2>
                        <p>
                            <span>SKU: N/A</span><br>
                            <span>Categories: <a>Boys' Clothes</a>, <a>Girls' Clothes</a>, <a>Toddler Boys</a>, <a>Toddler Girls</a>
                            </span>
                            <span>Tags: <a>Dress</a>, <a>Outerwear</a>, <a>Skirt</a>, <a>Tops</a></span>
                        </p>
                       <p>
                            With yellow and blue in its coloring, this t-shirt is both comfortable and nice-looking. Let your kid sport out this style during the summertime!
                        </p>
                        <ul class="describe">
                            <li>100% cotton jersey</li>
                            <li>Features detailed screenprint</li>
                            <li>Inside neck trim for comfort</li>
                            <li>Machine wash; imported</li>
                            <li>Collection Name: gymgo</li>
                            <li>Zipped pockets</li>
                        </ul>
                        <form action="#" method="get">
                            <div class="count-product">
                                <a id="down-click" onclick="updateSpinner(this);"> < </a>
                                      <input type="text" step="1" min="1" value="1" class="input-text" id="text-content">
                                <a id="up-click" onclick="updateSpinner(this);"> > </a>
                            </div>
                            <button type="submit" class="btn-add-to-cart">Add to cart</button>
                        </form>
                        <p>The product is already in the wishlist! <a>Browse Wishlist</a></p>
                        <div class="reweet_compare">
                            <i class="fa fa-retweet" aria-hidden="true"></i>
                            <a href="#" class="compare">Compare</a>
                        </div>
                        <div class="icon-share">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                            <i class="fa fa-tumblr" aria-hidden="true"></i>
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                    </div>

                    <!--============== bar option view =========================-->
                    
                    <ul class="bar-option-bottom">
                        <li class="description">DESCRIPTION</li>
                        <li class="additional-if">ADDITIONAL INFORMATION</li>
                        <li class="reviews">REVIEWS (0)</li>
                    </ul>
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="js/swiper.min.js" type="text/javascript"></script>
            
            <!-- Initialize Swiper -->
            <script>
            var swiper = new Swiper('.swiper-container', {
                    //pagination: '.swiper-pagination',
                   // paginationClickable: true
                     pagination: '.swiper-pagination',
                     direction: 'vertical',
                     slidesPerView: 4,
                     paginationClickable: true,
                     spaceBetween: 15,
                     mousewheelControl: true,
                     nextButton: '.slide-up',
                     prevButton: '.slide-down'
            });
            </script>
			
        </div>
    </body>
         <div style="clear: both;"></div>

</html>