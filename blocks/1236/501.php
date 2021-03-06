﻿<!DOCTYPE html>


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
        $less->compileFile('less/501.less', 'css/501.css');
        ?>
        <link href="css/501.css" rel="stylesheet" type="text/css"/>
		<link href="css/preview.css" rel="stylesheet" type="text/css"/>
    </head>
    <body
        <div class="type-501">
        <!--
        Mod-menu-main============================================================-->
        <div class="mod-menu-main" style="padding: 46px 0; border-bottom: 2px solid #262c30;">  
            <!--------------------------MENU MAIN------------------------------>
            <div class="navbar-wrapper">

                <!-----mega menu------->
                <nav class="navbar megamenu" style="z-index: 999; line-height: 6.5;">
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
                                <li class="iconmenu" ><a href="#" style="color:#008EE0;font-size: 25px;">=</a></li>
                            <li class="btn-buy" style="border-left: 1px solid #1b6d85;"><a href="#"><span style="color: white;">Buy now</span></a></li>


                        </ul>
                       
                    </div><!-- /.navbar-collapse -->
                  </div> 
                <div class="menurespon">
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
                           
                </div>    
            <!--------------------------COMMENT------------------------------>

        </div>
        <script>
            
        $(document).ready(function(){
    $('.iconmenu').click(function(){
       $('.menurespon').slideToggle();
    });
});
</script>

        </div>
    </body>
</html>


