<!DOCTYPE html>
<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/610.less', 'css/610.css');
        ?>
        <link href="css/610.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-610">
            <footer class="foo">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <ul class="title">
                                <h3>Categories</h3>
                                <a href="#">BABY FOOD</a> <br>                               
                                <a href="#">BOY'S CLOTHES</a><br>
                                <a href="#">GIRL'S CLOTHES</a> <br>
                                <a href="#">SALE</a><br>
                                <a href="#">SHOES</a><br>
                                <a href="#">TODDLER BOYS</a><br>
                                <a href="#">TODDLER GIRLS</a><br>
                                <a href="#">TOYS</a>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <ul class="title">
                                <h3>Help</h3>
                                <a href="#">Guarantee</a><br>
                                <a href="#">Terms and Conditions of Use</a><br>
                                <a href="#">Shipping and Delivery</a><br>
                                <a href="#">Change and Return</a><br>
                                <a href="#">FAQ</a>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                            <ul class="title">
                                <h3>Contact Us</h3>
                                <a class="tittle-footer" href="#">+1 897 959 79 26</a><br>
                                <a class="end" href="#">kidsstore@demolink.org</a>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                            <ul class="title">
                                <h3>Opening hours</h3>
                                <a href="#">9 am to 12 am ist (Mon-Sat)</a><br>
                                <a href="#">9 am to 9 pm ist(Sun)</a>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="#">
                                <img src="images/logo.png">
                            </a>
                        </div>
                        <div class="col-sm-10">
                            Teddy is proudly powered by WorkPress <br>Entries (RSS) and Comments (RSS)<br>
                            <a href="#">PRIVACY POLICY</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>