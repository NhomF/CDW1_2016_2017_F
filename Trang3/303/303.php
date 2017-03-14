<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js-1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/303.less', 'css/303.css');
        ?>
        <link href="css/303.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="type-303">
            <!--............-->
            <div class="product-theme">
                <span class="themecolor">230+</span>

                <h2 style="margin: 0 10%;">pre-built websites with super easy 1 click installation</h2>
            </div>

            <div class="product-menu">
                <!--menu-->
                <div class="Filters" data-parent="olumn-filters">
                    <ul class=" nav nav-tabs">
                        <li class="active"><a class="all" data-toggle="tab" href="#i">ALL</a></li>
                        <li ><a data-toggle="tab" href="#a">Business</a></li>
                        <li ><a data-toggle="tab" href="#b">Entertainment</a></li>
                        <li ><a data-toggle="tab" href="#c">Creative</a></li>
                        <li ><a data-toggle="tab" href="#d">Blog</a></li>
                        <li ><a data-toggle="tab" href="#e">Portfolio</a></li>
                        <li ><a data-toggle="tab" href="#f">One page</a></li>
                        <li ><a data-toggle="tab" href="#g">Shop</a></li>
                        <li ><a data-toggle="tab" href="#h">Other</a></li>
                    </ul>
                </div>
                <!--..-->
                <div class="portfolio_wrapper">
                    <div class="tab-content">
                        <div id="i" class="tab-pane fade in active">
                            <div class="all">

                                
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_minimal.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_movie.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_snapshot.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_writer.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_hifi.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                

                            </div>
                        </div>
                        <div id="a" class="tab-pane">
                            <div class="all">
                                <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_minimal.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_minimal.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_minimal.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>
                            </div>
                        </div>
                        <div id="b" class="tab-pane">
                            <div class="all">

                                <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_betheme.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>

                            </div>
                        </div>
                        <div id="c" class="tab-pane">
                            <div class="all">

                                <div class="item">
                                        <div class="image">
                                            <img src="image/splash_home_movie.jpg" alt=""/>
                                        </div>
                                        <h4>DEFAULT</h4>
                                        <div class="review">Preview</div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>


