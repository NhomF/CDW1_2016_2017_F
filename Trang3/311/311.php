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
        $less->compileFile('less/311.less', 'css/311.css');
        ?>
        <link href="css/311.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-311">
         <div class="mod-custom-25">
            <div id="Wrapper">

                <div class="section mcb-section" id="plugins_list">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center">
                                        <h2>BeTheme is also compatible with:</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_1.png" class="scale-with-grid" alt="splash_plugins_1">
                                        </div>
                                        <div class="list_right">
                                            <h4>WooCommerce</h4>
                                            <div class="desc">for building advanced shops</div>    
                                        </div>      
                                    </div>    
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <a href="#" target="_blank">
                                            <div class="list_left list_image">
                                                <img src="images/splash_plugins_2.png" class="scale-with-grid" alt="splash_plugins_2">
                                            </div>
                                            <div class="list_right">
                                                <h4>WPML</h4>
                                                <div class="desc">for language translations</div>        
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_3.png" class="scale-with-grid" alt="splash_plugins_3">
                                        </div>
                                        <div class="list_right">
                                            <h4>bbPress</h4>
                                            <div class="desc">for social sharing</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_4.png" class="scale-with-grid" alt="splash_plugins_4">
                                        </div>
                                        <div class="list_right">
                                            <h4>Contact form 7</h4>
                                            <div class="desc">for building great forms</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_5.png" class="scale-with-grid" alt="splash_plugins_5">
                                        </div>
                                        <div class="list_right">
                                            <h4>MailChimp</h4>
                                            <div class="desc">for mailing campaigns</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_6.png" class="scale-with-grid" alt="splash_plugins_6">
                                        </div>
                                        <div class="list_right">
                                            <h4>The Event Calendar</h4>
                                            <div class="desc">for better organization</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix"><div class="list_left list_image">
                                            <img src="images/splash_plugins_7.png" class="scale-with-grid" alt="splash_plugins_7">
                                        </div>
                                        <div class="list_right">
                                            <h4>YOAST</h4>
                                            <div class="desc">for SEO improvements</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_8.png" class="scale-with-grid" alt="splash_plugins_8">
                                        </div>
                                        <div class="list_right">
                                            <h4>W3 Total Cache</h4>
                                            <div class="desc">for performance optimization</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_9.png" class="scale-with-grid" alt="splash_plugins_9">
                                        </div>
                                        <div class="list_right">
                                            <h4>BuddyPress</h4>
                                            <div class="desc">for advanced forums</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line">
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_10.png" class="scale-with-grid" alt="splash_plugins_10">
                                        </div>
                                        <div class="list_right">
                                            <h4>Visual Composer</h4>
                                            <div class="desc">for content building</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_image">
                                            <img src="images/splash_plugins_12.png" class="scale-with-grid" alt="splash_plugins_12">
                                        </div>
                                        <div class="list_right">
                                            <h4> Cookie Law Info</h4>
                                            <div class="desc">for EU Cookie Law</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_list ">
                                    <div class="list_item lists_2 clearfix">
                                        <a href="#" target="_blank">
                                            <div class="list_left list_image">
                                                <img src="images/splash_plugins_13.png" class="scale-with-grid" alt="splash_plugins_13">
                                            </div>
                                            <div class="list_right">
                                                <h4>ADS PRO</h4>
                                                <div class="desc">for ads</div>
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
    </body>
</html>


