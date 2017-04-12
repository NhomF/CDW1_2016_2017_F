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
        $less->compileFile('less/707.less', 'css/707.css');
        ?>
        <link href="css/707.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-707">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <h5>Information</h5>
                        <div class="line"></div>
                        <ul class="footer_links">
                            <li><a href="#" title="">Home</a></li>
                            <li><a href="#" title="">About us</a></li>
                            <li><a href="#" title="">Blog</a></li>
                            <li><a href="#" title="">Search</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h5>Collections</h5>
                        <div class="line"></div>
                        <ul class="footer_links">
                            <li><a href="#" title="">Body</a></li>
                            <li><a href="#" title="">Eyes</a></li>
                            <li><a href="#" title="">Face</a></li>
                            <li><a href="#" title="">Hair</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h5>My account</h5>
                        <div class="line"></div>
                        <ul class="footer_links">
                            <li><a href="#" title="">My account</a></li>
                            <li><a href="#" title="">My addresses</a></li>
                            <li><a href="#" title="">My cart</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <h5>SOCIAL NEWS</h5>
                        <div class="line"></div>
                        <p>The latest news delivered across all social networks!</p>
                        <ul class="footer_social">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <br>
                        <h4>GET THE LATEST NEWS DELIVERED DAILY!</h4>
                        <div class="line"></div>
                        <p>Give us your email and you will be daily updated with the latest events, in detail!</p>
                        <div class="footer_newsletter">
                            <form method="post" action="/contact#contact_form" id="contact_form" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="customer" name="form_type"><input type="hidden" name="utf8" value="✓">
                                <input type="hidden" name="contact[tags]" value="prospect,newsletter" id="newsletter-tags">
                                <input type="hidden" name="contact[first_name]" value="Newsletter" id="newsletter-first-name">
                                <input type="hidden" name="contact[last_name]" value="Subscriber" id="newsletter-last-name">
                                <input type="email" name="contact[email]" id="contact_email_footer" placeholder="Enter your email" required="" class="hint">
                            </form>
                        </div>
                    </div>
                </div>

                &COPY; 2016 Cosmetorix. All rights reserved. 
                <a href="#">Powered by Shopify</a>
            </div>
        </div>
    </body>
</html>