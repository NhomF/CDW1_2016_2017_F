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
        $less->compileFile('less/605.less', 'css/605.css');
        ?>
        <link href="css/605.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-605">
            <div class="container">
                <h4 class="title1">From The Blog</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <a href="#"><img src="images/1_1.png" class="img-responsive"></a>
                                        <div class="entry-content">
                                            <h5>
                                                <a class="tit" href="#">THE COMPLETE GUIDE TO BUYING BOY'S CLOTHES</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <span class="post__date">
                                                    <time class="post-date" datetime="2016-08-06T17:33:53+00:00">Aug 06, 2016</time>
                                                </span>
                                                <span >
                                                    by 
                                                    <a class="post__author" href="#" rel="author">admin</a>
                                                </span>
                                                <span class="post__comments">
                                                    <span >
                                                        <a class="post-comments-link" href="#">1</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <a class="btn" href="#">Read more</a>                          
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <a href="#"><img src="images/3_1.png" class="img-responsive"></a>
                                        <div class="entry-content">
                                            <h5>
                                                <a class="tit" href="#">WHY TEEN BOYS ARE MORE OBNOXIOUS WITH NEW CLOTHES THAN GIRLS?</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <span class="post__date">
                                                    <time class="post-date" datetime="2016-07-26T17:54:02+00:00">Jul 26, 2016</time>
                                                </span>
                                                <span >
                                                    by 
                                                    <a class="post__author" href="#" rel="author">admin</a>
                                                </span>
                                                <span class="post__comments">
                                                    <span >
                                                        <a class="post-comments-link" href="#">2</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <a class="btn" href="#">Read more</a>                          
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <a href="#"><img src="images/1_1.png" class="img-responsive"></a>
                                        <div class="entry-content">
                                            <h5>
                                                <a class="tit" href="#">WHICH COLORS ARE IN TREND IN THE KID CLOTHING WORLD THIS SUMMER?</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <span class="post__date">
                                                    <time class="post-date" datetime="2016-07-26T17:54:02+00:00">Jul 26, 2016</time>
                                                </span>
                                                <span >
                                                    by 
                                                    <a class="post__author" href="#" rel="author">admin</a>
                                                </span>
                                                <span class="post__comments">
                                                    <span >
                                                        <a class="post-comments-link" href="#">3</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <a class="btn" href="#">Read more</a>                          
                                        </div>
                                    </div>
                                </div>          
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <a href="#"><img src="images/8.png" class="img-responsive"></a>
                                        <div class="entry-content">
                                            <h5>
                                                <a class="tit" href="#">ASIDE FORMAT</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <span class="post__date">
                                                    <time class="post-date" datetime="2016-07-26T17:54:02+00:00">Jul 26, 2016</time>
                                                </span>
                                                <span >
                                                    by 
                                                    <a class="post__author" href="#" rel="author">admin</a>
                                                </span>
                                                <span class="post__comments">
                                                    <span >
                                                        <a class="post-comments-link" href="#">0</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <a class="btn" href="#">Read more</a>                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
 <div style="clear: both;"></div>
</html>