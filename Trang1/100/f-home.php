
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
        $less->compileFile('less/f-home.less', 'css/f-home.css');
        ?>

        <link href="css/f-home.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-101">
            <header>
                <a href="/" class="logo"><img src="images/logo.png"></a>
            </header>
        </div>
        <div class="type-102">
            <header>

                <nav class="header-links">
                    <button class="link-menu" type="button" id="open-menu">
                        <img src="images/hamburger.svg">
                    </button>
                    <ul id="links" class="">
                        <li class="tablet-hidden">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Ca lâm sàn</a>
                        </li>

                    </ul>

                </nav>
            </header>
        </div>
        <div class="main-content">
            <div class="type-103">
                <div class="tit1">Liên hệ</div>
                <ul>
                    <li class="address">11 Fifth Ave, Loftus - NEW JERSEY, US</li>
                    <li class="telephone"><span>Telephone:</span> + 61 (2) 8093 3400</li>
                    <li class="fax"><span>Fax:</span> +61 (2) 9542 3599</li>
                    <li class="email"><span>Email:</span> <i>submissions@domain.com</i></li>
                </ul>

            </div>
            <div class="type-104">

                <div class="app-info">

                    <h1>Hoạt động bên lĩnh vực</h1>
                    <ul class="text-info medium-minus-hide">
                        <li>View rare conditions, innovative treatments, and teaching cases from around the world</li>
                        <li>Page more than 1 million healthcare professionals for instant feedback</li>
                        <li>Communicate with colleagues using HIPAA-compliant direct messaging</li>
                    </ul> 
                    <div class="web-app-links">
                        <a class="register-link" href="#">Sign Up</a>
                        <a class="login-link" href="#" >Log In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="type-105">

            <div class="app-display">
                <img src="images/phones-en.png">
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="type-106">
            <div class="app">
                <a class="store-badge top" href="#" id="apple-store">
                    <img src="images/apple-app-store-en.svg" data-ga-action="AppStoreClick" id="apple1">
                </a>
                <a class="store-badge top" href="#" id="android-store">
                    <img src="images/google-app-store-en.svg" data-ga-action="PlayStoreClick" id="android1">
                </a>
            </div>
            <footer>
                <nav class="footer-links">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li><li>
                        <a href="#">Điều khoản dịch vụ</a>
                    </li><li>
                        <a href="#">Riêng tư</a>
                    </li><li>
                        <a href="#">Bản quyền</a>
                    </li>
                </nav>
            </footer>

        </div>
    </body>
</html>
