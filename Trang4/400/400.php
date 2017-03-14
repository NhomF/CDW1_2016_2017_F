<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/400.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/400.less', 'css/400.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/js-1.js" type="text/javascript"></script>

        <style>
            .container{
                width: 1247px;
                margin: 0 auto;
                padding: 0;
            }
        </style>
    </head>

    <body  style="background-color: #f5f8fa;">
        <!--
        Mod-menu-main============================================================-->

        <div class="mod-menu-main" style="padding: 34px 0;">  
            <!--------------------------MENU MAIN------------------------------>
            <div class="container">
                <div class="navbar-wrapper">
                    <!-----mega menu------->
                    <div class="container">
                        <nav class="navbar menu" style="z-index: 999; line-height: 4.5;">
                            <div id="logo">
                                <a href="#"><img src="images/surveyor.png" alt=""/></a>

                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="menu">

                                <ul>
                                    <li style="background-color: #363A70;"><a href="#"><span style="color: white;">Home</span></a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Certificates</a></li>
                                    <li><a href="#">Contact</a></li>

                                    <li class="btn-buy"><a href="#"><span style="color:#ff5a00;">Buy now</span></a></li>


                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="clear"></div>
                </div>    
            </div>
            <!--------------------------COMMENT------------------------------>

        </div>
        <!--
        Mod-banner============================================================-->
        <div class="mod-banner">
            <div class="container">
                <div class="banner">
                    <div class="number">
                        <img src="images/home_surveyor_slider_num.png" alt=""/>
                    </div>
                    <div class="line">                       
                        <img src="images/home_surveyor_slider_line.png" alt=""/>
                    </div>
                    <div class="banner-content">
                        <div class="title">
                            <h1>Measure precisely<br>and efficiently</h1>                      
                        </div>
                        <br>
                        <div class="text">
                            <p>Proin consectetuer adipiscing elit. Nam ullamcorper libero vel purus. Praesent<br>
                                gravida gravida mattis, magna in faucibus volutpat, libero et purus est, at orci<br>
                                consequat lorem libero fermentum eros ut mattis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
       Mod-product============================================================-->
        <div class="mod-product">
            <div class="container">
                <div class="product">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="product-1" style="border-right: 1px solid blue; border-left: 1px solid blue;">
                                    <h1>Quisque porta sapien aliquet eget<br>
                                        pellentesque . Aliquam dolor<br>
                                        scelerisque porttitor massa placerat<br>
                                        velit rutrum magna dolor
                                    </h1>
                                    <br>
                                    <img src="images/home_surveyor_arrow_right.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="row">
                                    <div class="product-2">
                                        <div class="col-lg-6 col-xs-12">
                                            <div class="item-1">
                                                <img src="images/home_surveyor_box1.jpg" alt=""/>
                                                <div class="product-title">
                                                    <h4 style="color: blue;">Our company</h4>
                                                    <hr style="    width: 28px;
                                                        margin-top: 20px;
                                                        margin-bottom: 20px;
                                                        margin-left: 1px;
                                                        border: 29;
                                                        border-top: 4px solid blue;">
                                                </div>
                                                <div class="product-content">
                                                    <p>Etiam ullamcorper. Suspendisse pellen
                                                        <br>tesque dui, non felis. Maecenas malesuada
                                                        <br>elit lectus felis, malesuada
                                                        ultricies.
                                                        <br>Curabitur et ligula. Ut molestie.</p>
                                                    <a href="#"><p style="color: #ff5a00;">Learn more ...</p></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="item-2">
                                                <img src="images/home_surveyor_box1.jpg" alt=""/>
                                                <div class="product-title">
                                                    <h4 style="color: blue;">Our company</h4>
                                                    <hr style="    width: 28px;
                                                        margin-top: 20px;
                                                        margin-bottom: 20px;
                                                        margin-left: 1px;
                                                        border: 29;
                                                        border-top: 4px solid blue;">
                                                </div>
                                                <div class="product-content">
                                                    <p>Etiam ullamcorper. Suspendisse pellen
                                                        <br>tesque dui, non felis. Maecenas malesuada
                                                        <br>elit lectus felis, malesuada
                                                        ultricies.
                                                        <br>Curabitur et ligula. Ut molestie.</p>
                                                    <a href="#"><p style="color: #ff5a00;">Learn more ...</p></a>
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
        <div class="clear"></div>
        <!---------------------------------------------->
        <div class="mod-line">
            <hr>
        </div>
        <!--
       Mod-turpis============================================================-->
        <div class="mod-turpis">
            <div class="container">
                <div class="turpis">
                    <div class="turpis-title">
                        <h1 style="color: #ff5a00; font-size: 33px;margin-bottom: 20px;font-weight: 700;">Fusce commodo turpis</h1>
                        <p>Proin dapibus, accumsan sit amet, elementum dui. Aliquam at tellus. Cras suscipit, velit tristique ullamcorper. Mauris viverra sem nunc, at lorem id
                            <br>  dolor ut turpis eget lacus sagittis luctus augue. Nulla dignissim volutpat non, leo. Nullam sapien. Nam quis ultricies vitae, vestibulum varius. Morbi
                            <br>a mi. Suspendisse pede. Etiam tempor venenatis nulla.</p>
                    </div>
                    <div class="turpis-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-xs-12">
                                    <div class="turpis-product-1">
                                        <div class="thumb"><img src="images/home_surveyor_list1.png" alt=""/></div>
                                        <div class="content">
                                            <h4>Bibendum sapien</h4>
                                            <p>Donec porta, erat id tortor nibh, eu euismod nulla ut leo. Sed nec augue sed
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="btn-more">
                        	<p><a href="#">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <div class="custom-25-chitiet">
            <div class="custom-25-chitiet1">
            <div class="section equal-height-wrap" id="section1">
                <div class="section-decoration top"></div>
                <div class="section_wrapper">
                    <div class="mcb-wrap one-second  valign-middle clearfix" id="wrap1">
                        <div class="mcb-wrap-inner">
                            <div class="column one column-margin-10px">
                                <div class="column_attr clearfix">
                                    <h2 style="">Phasellus placerat velit congue sodales dignissim</h2>
                                    <p class="p1">Praesent nec tortor non nunc. Vestibulum iaculis. Nam interdum adipiscing elit. Sed malesuada augue odio non eros. Maecenas fermentum.</p>
                                </div>
                            </div>
                            <div class="column one-second column-margin-20px">
                                <div class="column_attr clearfix" id="column2">
                                    <p class="p2">Etiam ullamcorper. Suspendisse a pellen tesque dui, non felis. Maecenas male suada elit lectus felis, malesuada. Cura bitur et ligula. Ut molestie urna.</p>
                                </div>
                            </div>
                            <div class="column one-second column-margin-20px">
                                <div class="column_attr clearfix"  id="column2" style="">
                                    <p class="p2">Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum.</p>
                                </div>
                            </div>
                            <div class="column one column_button">
                                <a class="button" id="button1" href="#">
                                    <span class="button_label">See our references</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mcb-wrap one-second  column-margin-0px valign-bottom clearfix" id="wrap2">
                        <div class="mcb-wrap-inner">
                            <div class="column one column_image ">
                                <div class="image_frame scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="images/home_surveyor_pic1.png" alt="home_surveyor_pic1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             <div class="custom-25-chitiet2">
            <div class="section full-width no-margin-h no-margin-v" id="section2">
                <div class="section_wrapper">
                    <div class="mcb-wrap one clearfix">
                      
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client1.png" alt="home_surveyor_client1">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client2.png" alt="home_surveyor_client2">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images//home_surveyor_client3.png" alt="home_surveyor_client3">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client4.png" alt="home_surveyor_client4">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-fifth">
                                <div class="hover_color">
                                    <div class="hover_color_bg">
                                        <a href="#">
                                            <div class="hover_color_wrapper">
                                                <div class="image_frame scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="images/home_surveyor_client5.png" alt="home_surveyor_client5">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
            <div class="footer">
            <footer id="Footer" class="clearfix">
                <div class="widgets_wrapper">
                    <div class="container">
                        <div class="column one-fourth">
                            <aside class="widget">
                                    <div class="image_frame scale-with-grid no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="images/home_surveyor_footer_logo.png" alt="home_surveyor_footer_logo">
                                        </div>
                                    </div>
                                    <hr class="no_line" id="line1">
                                    <p class="p1">Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis</p>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Shortcut links</h4>
                               
                                    <ul class="u1">
                                        <li>
                                            <i class="icon-right-dir"></i>
                                            <a href="#">Aenean sollicitudin orem qui</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Duis sed odio sit amet nibh</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Morbi accumsan ipsum velit</a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i>
                                            <a href="#">Nam nec tellus </a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Class aptent taciti sociosqu </a>
                                        </li>
                                        <li>
                                            <i class="icon-right-dir"></i> 
                                            <a href="#">Mauris in erat justo</a>
                                        </li>
                                    </ul>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Info about us</h4>
                               
                                    <div style="padding-right: 5%;">
                                        <h6>Phasellus metus ac turpis egestas. Vesti bulum massa nec odio leo, pretium nec ultrices posuere commodo.</h6>
                                        <p>Curabitur ultrices eget, bibendum iaculis augue. Aenean sit amet dolor. Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie. Nulla sem at porttitor vel, congue odio.</p>
                                    </div>
                                
                            </aside>
                        </div>
                        <div class="column one-fourth">
                            <aside class="widget">
                                <h4>Contact centre</h4>
                                
                                    <h6>Maecenas viverra nonummy, mi. Cras rhoncus ut, semper auctor. Nam molestie.</h6>
                                    <p>Level 13, 2 Elizabeth St,<br> Melbourne, Victoria 3000<br> Australia</p>
                                    <p>Contact us: 
                                        <span class="span1">+61 (0) 3 8376 6284</span>
                                        <br> Write us: 
                                        <a href="#">noreply@envato.com</a>
                                    </p>
                                
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright"> © 2016 BeSurveyor - BeTheme. All Rights Reserved.
                                <a target="_blank" rel="nofollow" href="#">Muffin group</a>
                            </div>
                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>

</body>
</html>