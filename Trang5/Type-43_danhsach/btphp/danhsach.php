<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style1.less', 'css/stylee.css');
        ?>
        <link href="css/stylee.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type_43">
            <!--menu-->
            <div class="mod-menu-main" style="padding: 46px 0; ">  
                <!--------------------------MENU MAIN------------------------------>
                <div class="navbar-wrapper">

                    <!-----mega menu------->
                    <nav class="navbar megamenu" style="z-index: 999; line-height: 6;">
                        <div id="logo">
                            <a href="#"><img src="image/theme.png" alt=""/></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="megamenu" style="width: auto">
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
                                <li class="iconmenu" ><a href="#" style="color:#008EE0;font-size: 25px;">=</a></li>
                                <li class="btn-buy" style="border-left: 1px solid #1b6d85;"><a href="#"><span style="color: white;">Buy now</span></a></li>


                            </ul>



                        </div><!-- /.navbar-collapse -->



                </div> 
                <div class="menurespon">
                    <p>Websites</p><br>
                    <p>Builder</p><br>
                    <p>Grid</p><br>
                    <p>Headers</p><br>
                    <p>Features</p><br>
                    <p>Shortcodes</p><br>
                    <p>Blog</p><br>
                    <p>Portfolio</p><br>
                    <p><i class="fa fa-question"></i></p><br>
                    <p><i class="fa fa-comment-o"></i></p><br>
                </div>
                <!--------------------------COMMENT------------------------------>

            </div>
            <!--endmenu-->

            <!--body-->

            <div class="ds">
                <div class="tite">
                    <h1>Exposure</h1>
                </div>

                <div class="product">
                    <div class="image">
                        <img src="image/img1.jpg" alt=""/>

                    </div>
                    <div class="opa"></div>
                    <div class="name">
                        <div class="blue"></div>

                        <h2>Aliquam sapien in diam amet</h2>
                        <span class="big">Maecenas dolor nisi feugiat quis metus</span>
                    </div>
                    <div class="info">
                        <div class="date">
                            <hr>
                            <h5 class="label">Date</h5>
                            <h5>December 7,2015</h5>
                        </div>
                        <div class="client">
                            <hr>
                            <h5 class="label">Client</h5>
                            <h5>Muffin Group</h5>
                        </div>

                        <div class="website">
                            <hr>
                            <h5 class="label">Website</h5>
                            <h5><i class="fa fa-share"style="margin-right:5px"></i>View Website</h5>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="image">
                        <img src="image/img2.jpg" alt=""/>

                    </div>
                    <div class="opa"></div>
                    <div class="name">
                        <div class="blue"></div>

                        <h2>Euismod quí metus posuere</h2>
                        <span class="big">Fusce id sapien porttitor viverra fusce</span>
                    </div>
                    <div class="info">
                        <div class="date">
                            <hr>
                            <h5 class="label">Date</h5>
                            <h5>December 7,2015</h5>
                        </div>
                        <div class="client">
                            <hr>
                            <h5 class="label">Client</h5>
                            <h5>Muffin Group</h5>
                        </div>

                        <div class="website">
                            <hr>
                            <h5 class="label">Website</h5>
                            <h5><i class="fa fa-share"style="margin-right:5px"></i>View Website</h5>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="image">
                        <img src="image/img3.jpg" alt=""/>

                    </div>
                    <div class="opa"></div>
                    <div class="name">
                        <div class="blue"></div>

                        <h2>Vivamus finibus magna nec sed</h2>
                        <span class="big">In tempor sollicitudin sagittis! nullam</span>
                    </div>
                    <div class="info">
                        <div class="date">
                            <hr>
                            <h5 class="label">Date</h5>
                            <h5>December 7,2015</h5>
                        </div>
                        <div class="client">
                            <hr>
                            <h5 class="label">Client</h5>
                            <h5>Muffin Group</h5>
                        </div>

                        <div class="website">
                            <hr>
                            <h5 class="label">Website</h5>
                            <h5><i class="fa fa-share"style="margin-right:5px"></i>View Website</h5>
                        </div>
                    </div>
                </div>

                <div class="sea">
                    <div class="see">
                        <h1>See it in action <span class="fa fa-angle-right" style="margin-left: 12px;"></span></h1>
                    </div>
                </div>


                <div class="mod-buy">
                    <div class="buy-now">
                        <h2 >Creating with BeTheme is super fast and easy
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
            </div>


        </div>
        <!--endbody-->



    </div>
</body>
</html>
