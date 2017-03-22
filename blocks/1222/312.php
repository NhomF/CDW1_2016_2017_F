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
        $less->compileFile('less/312.less', 'css/312.css');
        ?>
        <link href="css/312.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-312">
         <div class="mod-custom-25">
            <div id="Wrapper">

                <div class="section mcb-section highlight-right full-width" id="blog" data-id="#blog">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  column-margin-0px valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column  column-margin" id="ab">
                                    <div class="column_attr clearfix">
                                        <div class="blog">
                                            <h2 id="h2">Blog</h2> 
                                            <hr class="no_line" id="line4">
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_masonry.png" class="scale-with-grid" alt="splash_blog_masonry">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_classic.png" class="scale-with-grid" alt="splash_blog_classic">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Classic</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_photo.png" class="scale-with-grid" alt="splash_blog_photo">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Photo (Horizontal Images)</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="no_line">
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_tiles.png" class="scale-with-grid" alt="splash_blog_tiles">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry Tiles</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_timeline.png" class="scale-with-grid" alt="splash_blog_timeline">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Timeline</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_blog_grid.png" class="scale-with-grid" alt="splash_blog_grid">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Grid</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin" id="bc">
                                    <div class="column_attr clearfix">
                                        <div class="dark">
                                            <h2 id="h2">Portfolio</h2> 
                                            <hr class="no_line" id="line4">
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_flat.png" class="scale-with-grid" alt="splash_portfolio_flat">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Flat</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_grid.png" class="scale-with-grid" alt="splash_portfolio_grid">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Grid</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_masonry.png" class="scale-with-grid" alt="splash_portfolio_masonry">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="no_line">
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_masonryflat.png" class="scale-with-grid" alt="splash_portfolio_masonryflat">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry Flat</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_list.png" class="scale-with-grid" alt="splash_portfolio_masonry_hover_details">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">List</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_masonry_hover_details.png" class="scale-with-grid" alt="splash_blog_masonry">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry Hover Details</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="no_line">
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_exposure2.png" class="scale-with-grid" alt="splash_portfolio_exposure2">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Exposure</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="column one-third">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a href="#">
                                                        <div class="image_wrapper">
                                                            <img src="images/splash_portfolio_masonryminimal.png" class="scale-with-grid" alt="splash_portfolio_masonryminimal">
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4 class="title">Masonry Minimal</h4>
                                                        </div>
                                                    </a>
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
        </div>
        </div>
    </body>
</html>


