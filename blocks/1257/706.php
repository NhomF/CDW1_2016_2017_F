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
        $less->compileFile('less/706.less', 'css/706.css');
        ?>
        <link href="css/706.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-706">
            <div class="container">
                <div class="row">
                    <h2 class="page_heading">Blog
                        <span class="page_heading blog_title_text">News and useful tips</span>
                    </h2>
                    <div class="col-sm-6 blog_posts_wrapper">
                        <div class="blog_post">
                            <div class="article_img"><img src="images/blog4_1024x1024.jpg?v=1468860293" alt="Best Makeup Secrets &amp; Looks For A Date Night. Look romnantic."></div>
                            <div class="blog_post__info">
                                <h3 class="blog_title"><a href="#">Best Makeup Secrets &amp; Looks For A Date Night. Look romnantic.</a></h3>
                                <div class="blog_content">We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested cosmetology brands in the world. The point is that science and nature are easily combined...</div>
                            </div>
                        </div>
                        <div class="blog_post">
                            <div class="article_img"><img src="images/blog1_00643b2b-1226-4ebf-9508-967dd3f30ebd_1024x1024.jpg?v=1468861247" alt="Our goal is to help you stay healthy as well as gorgeous at the same time"></div>
                            <div class="blog_post__info">
                                <h3 class="blog_title"><a href="#">Our goal is to help you stay healthy as well as gorgeous at the same time</a></h3>
                                <div class="blog_content">Soon you’ll discover how it is possible to use organic cosmetics for your body. We’ve collected all our knowledge to deliver you only the best organic, biodynamic, natural, wild-harvested cosmetology...</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 video_wr">
                        <figure>		
                            <iframe src="https://www.youtube.com/embed/2F5Z50q4FNk" allowfullscreen=""></iframe>
                            <figcaption>
                                <h2>How to find the ideal fragrance for you or your loved one</h2>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>