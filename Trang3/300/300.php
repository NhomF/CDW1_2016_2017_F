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
        $less->compileFile('less/styletc.less', 'css/styletc.css');
        ?>
        <link href="css/styletc.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!--
        Mod-menu-main============================================================-->
        <div class="mod-menu-main" style="padding: 46px 0; border-bottom: 2px solid #262c30;">  
            <!--------------------------MENU MAIN------------------------------>
            <div class="navbar-wrapper">

                <!-----mega menu------->
                <nav class="navbar megamenu" style="z-index: 999; line-height: 5.5;">
                    <div id="logo">
                        <a href="#"><img src="images/logo_bethemes.png" alt=""/></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="megamenu">

                        <ul>
                            <li style="background-color: #262c30;"><a href="#"><span style="color: white;">Websites</span></a></li>
                            <li><a href="#">Builder</a></li>
                            <li><a href="#">Grid</a></li>
                            <li><a href="#">Header</a></li>
                            <li><a href="#">Features</a></li>
                            <!-----------------menu shortcodes---------------------->
                            <li class="dropdown megamenu-fw">
                                <a href="#">Shortcodes</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>
                                                        <li><a href="#"><span>Divider</span></a></li>
                                                        <li><a href="#"><span>Dropcap</span></a></li>
                                                        <li><a href="#"><span>Fancy Link</span></a></li>
                                                        <li><a href="#"><span>Google Font</span></a></li>
                                                        <li><a href="#"><span>Highlight</span></a></li>
                                                        <li><a href="#"><span>Hr</span></a></li>
                                                        <li><a href="#"><span>Icons</span></a></li>
                                                        <li><a href="#"><span>Icon Bar</span></a></li>
                                                        <li><a href="#"><span>Icon Block</span></a></li>

                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->
                                            <div class="col-sm-2">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>
                                                        <li><a href="#"><span>Divider</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->
                                            <div class="col-sm-2">
                                                <div class="custom-title coll" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>
                                                        <li><a href="#"><span>Divider</span></a></li>
                                                        <li><a href="#"><span>Dropcap</span></a></li>
                                                        <li><a href="#"><span>Fancy Link</span></a></li>
                                                        <li><a href="#"><span>Google Font</span></a></li>
                                                        <li><a href="#"><span>Highlight</span></a></li>
                                                        <li><a href="#"><span>Hr</span></a></li>
                                                        <li><a href="#"><span>Icons</span></a></li>
                                                        <li><a href="#"><span>Icon Bar</span></a></li>
                                                        <li><a href="#"><span>Icon Block</span></a></li>

                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->
                                            <div class="col-sm-2">
                                                <div class="custom-title coll" style="margin-top: 15px;padding-bottom: 260px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->
                                            <div class="col-sm-2">
                                                <div class="custom-title coll" style="margin-top: 15px; padding-bottom: 30px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>
                                                        <li><a href="#"><span>Divider</span></a></li>
                                                        <li><a href="#"><span>Dropcap</span></a></li>
                                                        <li><a href="#"><span>Fancy Link</span></a></li>
                                                        <li><a href="#"><span>Google Font</span></a></li>
                                                        <li><a href="#"><span>Highlight</span></a></li>
                                                        <li><a href="#"><span>Hr</span></a></li>
                                                        <li><a href="#"><span>Icons</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->
                                            <div class="col-sm-2">
                                                <div class="custom-title coll" style="margin-top: 15px;padding-bottom: 30px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Content Link</span></a></li>
                                                        <li><a href="#"><span>Divider</span></a></li>
                                                        <li><a href="#"><span>Dropcap</span></a></li>
                                                        <li><a href="#"><span>Fancy Link</span></a></li>
                                                        <li><a href="#"><span>Google Font</span></a></li>
                                                        <li><a href="#"><span>Highlight</span></a></li>
                                                        <li><a href="#"><span>Hr</span></a></li>
                                                        <li><a href="#"><span>Icons</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-2 -->

                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <!-----------------------menu Blog---------------------->
                            <li class="dropdown megamenu-fw">
                                <a href="#">Blog</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title coll" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title coll" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->


                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <!-----------------------menu Portfolio---------------------->
                            <li class="dropdown megamenu-fw">
                                <a href="#">Portfolio</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>

                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title coll" style="margin-top: 15px; padding-bottom: 70px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>


                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title coll" style="margin-top: 15px;">
                                                    <ul>
                                                        <li style="background: none;"><a href="#"><span style="font-weight: 700;">TYPOGRAPHY</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>
                                                        <li><a href="#"><span>Buttons</span></a></li>
                                                        <li><a href="#"><span>Code</span></a></li>
                                                        <li><a href="#"><span>Columns</span></a></li>
                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>

                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-sm-3">
                                                <div class="custom-title" style="margin-top: 15px;">
                                                    <ul>

                                                        <li><a href="#"><span>Alert</span></a></li>
                                                        <li><a href="#"><span>Basic</span></a></li>
                                                        <li><a href="#"><span>Blockquote</span></a></li>



                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->


                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a></li>
                            <li class="btn-buy" style="border-left: 1px solid #1b6d85;"><a href="#"><span style="color: white;">Buy now</span></a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->
                    


            </div>         
            <!--------------------------COMMENT------------------------------>

        </div>
        <!--
        Mod-Banner============================================================-->
        <div class="mod-banner">
            <div class="banner">
                <h2 style="color: white;letter-spacing: 2px;">The biggest <img src="images/splash_slider_wp.png" alt=""/>         theme ever</h2>
                <img src="images/splash_slider_mouse.png"  style="margin-top: 50px;"alt=""/>
            </div>
        </div>

         <div class="type_43">
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

            <div class="yes">
                <div class="clearfixx">
                    <hr class="no_line" style="margin: 0 auto 60px;">
                    <h3 style="margin: 0 10%;" class="info">
                        <span class="info-icon">i</span>Yes... All these great looking layouts are included in just one single theme
                    </h3>
                    <hr class="no_line" style="margin: 0 auto 50px;">
                    <div style="margin: 0 10%;">
                        <button>INSTALL NOW WITH 1 CLICK</button>
                    </div>
                </div>
            </div>

            <a href="#">
                <div class="play">
                    <h2 style="margin: 20px 10%;">Watch this short video <span class="play-icon"><i> <img src="image/Untitled.png" alt=""/></i></span></span> and see how it works</h2>

                </div>
            </a>

            <div class="build">
                <h2 style="margin: 0 10%;">Building a website from scratch is easy.<br>No coding skills required!</h2>
                <hr class="no_line" style="margin: 0 auto 60px;">
                <h3><span class="mfn-builder-icon">
                    </span> Muffin Builder 3 <span class="or">or</span> <span class="mfn-composer-icon">
                    </span> Visual Composer
                </h3>

                <div class="ganeral">
                    <div class="image">
                        <img src="image/splash_theme_options_v3.png" alt=""/>
                    </div>
                </div>
            </div>

            <div class="building">
                <div class="buiding-blue">
                    <div class="title">
                        <h2 style="color: #fff;">Now you have more <br>freedom to create new <br>things
                        </h2>
                        <hr class="no_line" >

                        <div class="muffy">
                            <div class="image_wrapper"><img src="image/splash_builder3.png" alt="splash_builder3" width="626" height="109"></div>
                        </div>
                    </div>
                </div>
                <div class="building-black">
                    <div class="new">
                        <h1>
                            What's new?
                        </h1>
                        <hr class="no_line" style="margin: 0 auto 50px;">
                        <div class="one-second">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="image/splash_builder_ico.png">
                                    <hr class="no_line" >
                                    <h3 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">WRAPS</h3>
                                    <p style="color: #afafb0;">The new containers inside the <i>Section</i> called <i>Wraps</i> gives you a freedom to create more advanced and astonishing content. See them in action.</p>


                                </div>
                                <div class="col-md-6">
                                    <img src="image/splash_builder_ico2.png">
                                    <hr class="no_line" >
                                    <h3 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">WRAPS</h3>
                                    <p style="color: #afafb0;">The new containers inside the <i>Section</i> called <i>Wraps</i> gives you a freedom to create more advanced and astonishing content. See them in action.</p>
                                </div>

                            </div>
                            <hr >
                            <div class="row">
                                <div class="col-md-6">

                                    <h4 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">FASR & LIGHT</h4>
                                    <p style="color: #afafb0;">Improved performance and speed. Reduced transfered and saved data.</p>
                                </div>

                                <div class="col-md-6">

                                    <h4 style="color: #fff; font-style: normal; font-family: Lato; font-weight: 400;">CLEAN lOOK</h4>
                                    <p style="color: #afafb0;">Better readability thanks to the new, clear layout, graphics and light colors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layout">
                <div class="title">
                    <h2 >Start with the Base Grid and choose your layout</h2>
                </div>
                <div class="grid">
                    <div class="item">
                        <img src="image/splash_grid_dualsidebars.png" alt=""/>
                        <p>Full width</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_fullwidth.png" alt=""/>
                        <p>Boxed</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_leftsidebar.png" alt=""/>
                        <p>Left sidebar</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_rightsidebar.png" alt=""/>
                        <p>Right sidebar</p>
                    </div>
                    <div class="item">
                        <img src="image/splash_grid_boxed.png" alt=""/>
                        <p>Dual sidebar</p>
                    </div>
                </div>
            </div>

            <div class="layout-logo">
                <div class="container">
                    <h2>20 customizable Header Styles.<br>Upload logos, set colors, fonts, sizes, extras and more...</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <img src="image/1.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/2.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/3.png" alt=""/>
                        </div>
                        <div class="col-md-3 col-sm-6 abc">
                            <img src="image/4.png" alt=""/>
                        </div>
                    </div>
                    <p>You can use different menus on different pages of your website</p>
                </div>
            </div>
        </div>

         <div class="mod-custom-25">
            <div id="Wrapper">
                <div class="section mcb-section  section-border-bottom" id="features" data-id="#features">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Core features</h2>
                                    </div> 
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line1">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_1.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>1 CLICK DEMO IMPORT</h5>
                                                        <p>
                                                            Choose between 200+ pre-built websites and import any with just one click. Build websites within seconds as easily as never before.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_2.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>POWERFUL ADMIN PANEL</h5>
                                                        <p>
                                                            Muffin options panel allows users to customize the theme in an easy and simple way. There’s no need to code anything thanks to all the amazing options that are included in the theme.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_3.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>FULLY CUSTOMIZABLE</h5>
                                                        <p>
                                                            Each website built with BeTheme will look in a different manner. What you need to create amazing websites with no coding knowledge is the Muffin builder paired with the options panel.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_4.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>RESPONSIVE & RETINA READY</h5>
                                                        <p>
                                                            Be is fully responsive and ready for retina displays. Your customers will love how your website looks on tablets and mobile devices.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_5.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>SHORTCODE GENERATOR</h5>
                                                        <p>
                                                            The shortcode generator is what you need. The shortcodes allow you to build pages easily and quickly. Any element you see in the demo can be inserted anywhere on the page.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_6.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>BUILT-IN MEGA MENU</h5>
                                                        <p>
                                                            Our built-in mega menu is the perfect choice for large menus. You can set up columns and rows, use icons and upload background images easily.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_7.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>ONE PAGE</h5>
                                                        <p>
                                                            BeTheme allows you to create beautiful one page sites. This is a great opportunity for those who need simple websites with a nice scroll effect.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_8.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>PARALLAX EFFECT & VIDEO BACKGROUND</h5>
                                                        <p>
                                                            Create awesome pages with the smooth parallax effect that everyone loves. You can upload videos, put text, images, buttons or other graphical elements and enjoy the great looking sections.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_19.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>UNLIMITED COLORS</h5>
                                                        <p>
                                                            With the built-in color pickers, you can quickly change the color of nearly every element from the demo. Choose your own colors or use one of the pre-defined color skins.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_30.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>ADVANCED TYPOGRAPHY</h5>
                                                        <p>
                                                            Use Google or upload custom fonts, set sizes, style, weight and much more. Be gives you full control over the fonts.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_28.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>CUSTOM BACKGROUNDS</h5>
                                                        <p>
                                                            Backgrounds can be uploaded into any section you want with ease and are unlimited. Set image, position and much more.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_29.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>6 COLUMN SUPPORT</h5>
                                                        <p>
                                                            Use columns from 1 to 6 and do different combinations. With this feature, building sites is even better and more user friendly.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_9.jpg" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>LAYOUTS CONFIGURATOR</h5>
                                                        <p>
                                                            Build custom layouts and assign them easily for different pages. The unlimited number of layouts gives you the possibility to create an unlimited amount of different looking pages on the same website.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_32.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>WIDE/BOXED LAYOUT</h5>
                                                        <p>
                                                            Choose between boxed and wide and wide layout. This can be set globally for all pages or per single pages and posts.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_23.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>WIDGETS</h5>
                                                        <p>
                                                            Building websites is very easy with these great widgets that we created. Place them inside the sidebar, in the footer columns or even in the content.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_22.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>SIDEBARS</h5>
                                                        <p>
                                                            Use single, dual or no sidebars on any post or page. Control the sidebar widths, positions and much more.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_20.png" alt="class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>BUILT-IN TRANSLATOR & MULTILINGUAL READY</h5>
                                                        <p>
                                                            The built-in translator allows you to translate easily the website into another language. If you prefer a multilingual website, you can use the WPML plugin which is supported by Be.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_14.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>RTL SUPPORT</h5>
                                                        <p class="rtl">
                                                            RTL (Right-to-left) is fully supported by this theme. You don't need to worry about it anymore because this works automatically.
                                                        </p>
                                                        <a target="_blank" href="">Try it</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_11.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>BROWSERS COMPATIBLE</h5>
                                                        <p>
                                                            Every part of the theme has been thoroughly investigated and BeTheme works perfectly with all available browsers, whether they are Internet Explorer, Safari, Chrome, Firefox or even Opera.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_15.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>OPTIMIZED FOR SPEED</h5>
                                                        <p>
                                                            The theme is fully optimized. Attention to details, well written code and optimized images helped us create such a fast theme. Your visitors will love how fast your website is.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line6">
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_16.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>SEO READY</h5>
                                                        <p>
                                                            This theme was built following the best SEO practices to help rank your website higher. Compatibility with plugins like Yoast or All in One SEO is fully ensured.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix">
                                        <div class="splash_feature">
                                            <div class="photo">
                                                <img src="images/splash_corefeature_25.png" alt="" class="scale-with-grid">
                                            </div>
                                            <div class="desc">
                                                <div class="t">
                                                    <div class="c">
                                                        <h5>LIFETIME UPDATES</h5>
                                                        <p>
                                                            Be is always up to date. We constantly listen to our customers and we add new features every week. We take good care of your business the same way you do.
                                                        </p>
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
                <div class="section mcb-section full-width hide-mobile" id="shortcodes" data-id="#shortcodes">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Build amazing sites using Shortcodes</h2>
                                        <h2>Switch between <span>Classic</span> and <span>Modern</span> style</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider ">
                            <hr class="no_line" id="line2">
                        </div>
                        <div class="column mcb-column one column_image">
                            <div class="image_frame image_item scale-with-grid aligncenter no_border hover-disable">
                                <div class="image_wrapper">
                                    <a href="#">
                                        <div class="mask"></div>
                                        <img class="scale-with-grid" src="images/theme_shortcodes.jpg" alt="theme_shortcodes">
<!--                                        <img class="scale-with-grid" src="images/theme_shortcodes_mobile.jpg" alt="theme_shortcodes_mobile">-->
                                    </a>
                                    <div class="image_links">
                                        <a href="#" class="link"></a>
                                        <i class="icon-link"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider ">
                            <hr class="no_line" id="line3">
                        </div>
                        <div class="column mcb-column one column_column  column-margin">
                            <div class="column_attr clearfix align_center">
                                <a href="#" class="button button_large button_theme button_js">
                                    <span class="button_label">Browse all shortcodes</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" id="create">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2 class="h2">Create easily anything you want with BeTheme</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" id="woocommerce" data-id="#woocommerce">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_placeholder">
                                    <div class="placeholder">&nbsp;</div>
                                </div>
                                <div class="column mcb-column one-second column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Build pretty e-Commerce websites</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line">
                                </div>
                                <div class="column mcb-column one-second column_placeholder">
                                    <div class="placeholder">&nbsp;</div>
                                </div>
                                <div class="column mcb-column one-fourth column_icon_box ">
                                    <div class="icon_box icon_position_top no_border">
                                        <div class="image_wrapper">
                                            <img src="images/splash_woocommerce_icon_1.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">Install Woocommerce in 1 minute</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-fourth column_icon_box ">
                                    <div class="icon_box icon_position_top no_border">
                                        <div class="image_wrapper">
                                            <img src="images/splash_woocommerce_icon_2.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">Easily & quickly upload products</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line">
                                </div>
                                <div class="column mcb-column one-second column_placeholder">
                                    <div class="placeholder">&nbsp;</div>
                                </div>
                                <div class="column mcb-column one-fourth column_icon_box ">
                                    <div class="icon_box icon_position_top no_border">
                                        <div class="image_wrapper">
                                            <img src="images/splash_woocommerce_icon_3.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">Control payments and earn more money</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-fourth column_icon_box ">
                                    <div class="icon_box icon_position_top no_border">
                                        <div class="image_wrapper">
                                            <img src="images/splash_woocommerce_icon_4.png" class="scale-with-grid" alt="splash_woocommerce_icon_1" width="102" height="77">
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">Get more clients</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" id="plugins" data-id="#plugins">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Create beautiful things<br>with already included plugins</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" id="line7">
                                </div><div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border"
                                         ><div class="image_wrapper">
                                            <img class="scale-with-grid" src="images/splash_grid_sliders3.png" alt="splash_grid_sliders3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="section mcb-section  section-border-bottom" id="customization">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  column-margin-0px valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin">
                                    <div class="column_attr clearfix align_center">
                                        <h2>A small glance at customization possibilites</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" id="line5">
                                </div>
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="images/theme_shortcodes_options1.jpg" alt="theme_shortcodes_options">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!--
        Mod-Comment============================================================-->
        <div class="mod-comment">
            <!--------------------------COMMENT------------------------------>
            <div class="comment-content">
                <div class="comment-title">
                    <h2 style="font-weight: 100;">Join over 30 000 users who love us</h2>
                    <br>
                    <div class="rate">
                        <span><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></span>
                    </div>
                    <p style="color: #929292;">BeTheme has 5/5 stars rating on themeforest</p>
                </div>
                <div class="custommer-comment">
                    <div class="container">
                        <!--------------------------Custommer------------------------------>       
                        <div class="customemr-1">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                            </div>
                        </div>

                        <div class="customemr-2" style="margin-top: 70px;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                                <div class="col-sm-3">
                                    <div class="blockquote" style="position: relative;">
                                        <div id="blok"></div>
                                        <span>I Must say I am impressed, that what I was thinking and dreaming about, have bought domain too but you guys turn idea into reality, this is the best ...</span>
                                        <h4>- naumank</h4>
                                        <p>Design Quality</p>
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!--
        Mod-buy============================================================-->
        <div class="mod-buy">
            <div class="buy-now">
                <h2 style="font-size: 40px; line-height: 40px; letter-spacing: 1px;">Creating with BeTheme is super fast and easy
                    <br>
                    Start your website today!</h2>
                <div class="btn-buynow">
                    <a href="#">BUY NOW FOR $59</a>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p style="margin: 0;float: left;margin-top: 18px;color: #cdcdce;"> © 2016 BeTheme. All Rights Reserved. <a href="#">Muffin group</a></p>

                        <a href="#"><i class="fa fa-angle-up" aria-hidden="true" style="font-size: 50px;float: right;"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>


