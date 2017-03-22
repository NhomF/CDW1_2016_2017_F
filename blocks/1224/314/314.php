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
        $less->compileFile('less/314.less', 'css/314.css');
        ?>
        <link href="css/314.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-314">
         <div class="mod-custom-25">
            <div id="Wrapper">
                <div class="section mcb-section  section-border-bottom" id="help" data-id="#help">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column three-fourth column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Got a problem?<br>Find answers to all your questions</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line">
                                </div>
                                <div class="column mcb-column one-fourth column_list">
                                    <div class="list_item lists_3 clearfix">
                                        <a href="#" target="_blank">
                                            <div class="list_left list_image">
                                                <img src="images/splash_helpicon_1.png" class="scale-with-grid" alt="splash_helpicon_1">
                                            </div>
                                            <div class="list_right">
                                                <h4>Learn how to use BeTheme from our Users Guide</h4>
                                                <div class="desc"></div>                                                   
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column mcb-column one-fourth column_list">
                                    <div class="list_item lists_3 clearfix">
                                        <a href="#" target="_blank">
                                            <div class="list_left list_image">
                                                <img src="images/splash_helpicon_3.png" class="scale-with-grid" alt="splash_helpicon_1">
                                            </div>
                                            <div class="list_right">
                                                <h4>Learn how to use BeTheme with video tutorials</h4>
                                                <div class="desc"></div>                                                   
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column mcb-column one-fourth column_list">
                                    <div class="list_item lists_3 clearfix">
                                        <a href="#" target="_blank">
                                            <div class="list_left list_image">
                                                <img src="images/splash_helpicon_2.png" class="scale-with-grid" alt="splash_helpicon_1">
                                            </div>
                                            <div class="list_right">
                                                <h4>Contact our experts and solve your problems immediately</h4>
                                                <div class="desc"></div>                                                   
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


