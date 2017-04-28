 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Automotive Car </title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/font.css" media="screen" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/101.less', 'css/101.css');
        ?>
        <link href="css/101.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-101">
            <!--Header Start-->
            <header  data-spy="affix" data-offset-top="1" class="clearfix">
                <section class="toolbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 left_bar">
                                <ul class="left-none">
                                    <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                                    <li><a href="#"><i class="fa fa-globe"></i> Languages</a></li>
                                    <li><i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search" class="search_box">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 ">
                                <ul class="right-none pull-right company_info">
                                    <li><a href="#"><i class="fa fa-phone"></i> 1-800-567-0123</a></li>
                                    <li class="address"><a href="#"><i class="fa fa-map-marker"></i> 107 Sunset Blvd., Beverly Hills, CA  90210</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar_shadow"></div>
                </section>
                <div class="bottom-header" >
                    <div class="container">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid"> 
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    <a class="navbar-brand" href="#"><span class="logo"><span class="primary_text">Automotive</span> <span class="secondary_text">Template</span></span></a> </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav pull-right">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Alternate Footers <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li class="active"><a href="#">Footer 1</a></li>
                                                        <li><a href="#">Footer 2</a></li>
                                                        <li><a href="#">Footer 3</a></li>
                                                        <li><a href="#">No Footer</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">404</a></li>
                                                <li><a href="#">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Select View Demo</a></li>
                                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed Layout <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Boxed Fullwidth</a></li>
                                                        <li><a href="#">Boxed Sidebar Left</a></li>
                                                        <li><a href="#">Boxed Sidebar Right</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Wide Layout <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Wide Fullwidth</a></li>
                                                        <li><a href="#">Wide Sidebar Left</a></li>
                                                        <li><a href="#">Wide Sidebar Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Individual Listing</a></li>
                                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicle Comparison <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">2 Listing Comparison</a></li>
                                                        <li><a href="#">3 Listing Comparison</a></li>
                                                        <li><a href="#">4 Listing Comparison</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">2 Column Portfolio</a></li>
                                                <li><a href="#">Portfolio Single Project Wide</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Blog List</a></li>
                                                <li><a href="#">Blog Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse --> 
                            </div>
                            <!-- /.container-fluid --> 
                        </nav>
                    </div>
                    <div class="header_shadow"></div>
                </div>
            </header>
            <!--Header End-->
        </div>

    </body>
</html>



