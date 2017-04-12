<!DOCTYPE html>
<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascrip.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/601.less', 'css/601.css');
        ?>
		<link href="css/601.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-601">
            <header class="site-header">
                <div class="top-panel">
                    <div class = "top-panel__wrap container">
                    <!--================================== topanel left ==================================-->

                        <div class="top-panel__inner--left">
                            <div class="top-panel__search">
                                <form role="search" method="get" class="search-form" action="#">
                                <input type="search" class="search-form__field" placeholder="Search" title="Search for:">
                                <button type="submit" class="search-form__submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                </form>
                            </div>

                            <div class="top-panel__menu-wrap">
                                <i class="fa fa-bars" aria-hidden="true" onclick="menuOpen()"></i>
                                <div id="my-top-panel__menu" class="top-panel__menu" >
                                    <ul class="top-panel__menu-list">
                                        <li ><a href="#">My account</a></li>
                                        <li ><a href="#">Compare</a></li>
                                        <li ><a href="#">Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="currency-switch">
                                <div >
                                    <form action="#" method="get">
                                        <div class="chosen-container-active dropdown">
                                            <a class="chosen-single dropdown-toggle" data-toggle="dropdown">
                                                <span class="usd">USD</span>
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </a>
                                            <div  id="my-chosen-drop" class="chosen-drop dropdown-menu">
                                                 <ul>
                                                      <li data-option-array-index="0">USD</li>
                                                      <li data-option-array-index="1">EUR</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                        </div>

                        <!--================================== toppane right =======================================-->

                        <div class="top-panel__inner--right">
                            <div class="top-panel__message">
                                <a href="tel:#">+1 897 959 79 26</a>
                            </div>
                            <ul class="site-header-cart dropdown">
                                <li class="btncart dropdown-toggle" data-toggle="dropdown">
                                <div class="cart-contents">
                                    <span class="count">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="no_cart">
                                            Cart (0)
                                        </span>
                                    </span>
                                </div>
                                </li>
                                 <li class="header-cart-dropdown dropdown-menu">
                                    <div class="shopping_cart-dropdown-wrap">
                                        <h4>Shopping Cart</h4>
                                        <div >
                                            <div>
                                                <ul class="product_cart">
                                                    <li>No products in the cart.</li>
                                                </ul><!-- end product list -->
                                            </div>
                                        </div>     
                                    </div>
                                </li>
                            </ul>
                            
                         </div>
                    </div>
                </div>


                <!--================================== logo ====================================================-->


                <div class="logo container">
                    <a href="#"><img src="images/logo.png" alt="Teddy" ></a>
                </div>


                <!--================================== thanh menu ====================================================-->

                <nav class="navbar site-navigation">
                    <div class="navbar-header container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="main-menu__wrap container">
                        <div class="nav_toggle  collapse" id="myNavbar" style="height: auto">
                            <ul class="main-menu">
                                <i class= "drop_icon"></i>
                                <li class="li-child li_child_click active button_active"><a href="#" class="a-main a_main_click">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="">TYPOGRAPHY</a></li>
                                        <li><a href="">404</a></li>
                                        <li class="li-subchild"><a href="" class="a_sub_click">HEADER STYLES</a>
                                            <ul class="sub-menu">
                                                <li><a href="">HEADER STYLES 1</a></li>
                                                <li><a href="">HEADER STYLES 2</a></li>
                                                <li><a href="">HEADER STYLES 3</a></li>
                                                <li><a href="">HEADER STYLES 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="li-subchild"><a href="" class="a_sub_click">FOOTER STYLES</a>
                                            <ul class="sub-menu">
                                                <li><a href="">FOOTER STYLES 1</a></li>
                                                <li><a href="">FOOTER STYLES 2</a></li>
                                                <li><a href="">FOOTER STYLES 3</a></li>
                                                <li><a href="">FOOTER STYLES 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-child li_child_click"><a href="#" class="a-main a_main_click">CATAGORIES</a>
                                    <ul class="sub-menu">
                                        <li><a href="">TODDLER BOYS</a></li>
                                        <li><a href="">TODDLER GIRLS</a></li>
                                        <li><a href="">BOY' CLOTHES</a></li>
                                        <li><a href="">GIRL' CLOTHES</a></li>
                                        <li><a href="">SHOES</a></li>
                                        <li><a href="">BABY FOODS</a></li>
                                        <li><a href="">TOYS</a></li>
                                        <li><a href="">SALE</a></li>
                                    </ul>
                                </li>
                                <li class="li-child li_child_click"><a href="#" class="a-main a_main_click">BLOG</a>
                                    <ul class="sub-menu">
                                        <li class="li-subchild"><a href="" class="a_sub_click">POST FORMATS</a>
                                             <ul class="sub-menu">
                                                <li><a href="" >TYPOGRAPHY</a></li>
                                                <li><a href="">AUDIO STAND</a></li>
                                                <li><a href="">VIDEO STAND</a></li>
                                                <li><a href="">FOOTER STYLES</a></li>
                                                <li><a href="">LINK STAND</a></li>
                                                <li><a href="">QUATER STAND</a></li>
                                                <li><a href="">IMAGE STAND</a></li>
                                                <li><a href="">GELLARY STAND</a></li>
                                            </ul>
                                        </li>
                                        <li class="li-subchild"><a href="" class="a_sub_click">BLOG LAYOUTS</a>
                                           <ul class="sub-menu">
                                                <li><a href="">BLOG LAYOUTS 1</a></li>
                                                <li><a href="">BLOG LAYOUTS 2</a></li>
                                                <li><a href="">BLOG LAYOUTS 3</a></li>
                                                <li><a href="">BLOG LAYOUTS 4</a></li>
                                                <li><a href="">BLOG LAYOUTS 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="li-subchild"><a href="" class="a_sub_click">SIDEBAR STYLES</a>
                                            <ul class="sub-menu">
                                                <li><a href="">SIDEBAR STYLES 1</a></li>
                                                <li><a href="">SIDEBAR STYLES 2</a></li>
                                                <li><a href="">HEADER STYLES 3</a></li>
                                                <li><a href="">SIDEBAR STYLES 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-child"><a href="#" class="a-main">ABOUT US</a></li>
                                <li class="li-child"><a href="#" class="a-main">CONTACT US</a></li>
                                <li class="li-child li_contact"><a href="#" class="a-main">+1 897 959 79 26</a></li>
                                <div style="clear: both;"></div>
                            </ul>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                </nav>
                <a href="#"><span class="click-top fa fa-chevron-up"></span></a>
            </header>
        </div>
    </body>
         

</html>