 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 
        <title>Automotive Car Dealership &amp; Business HTML Template</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/font.css" media="screen" />
        <!-- Custom styles for this template -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/mobile.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/ts.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
     
        <script type="text/javascript" src="js/wow.min.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/105.less', 'css/105.css');
        ?>
        <link href="css/105.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <section class="content">
            <div class="container">
                <div class="inner-page homepage margin-bottom-none">

                    <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                                <h4 class="margin-bottom-25 margin-top-none"><strong>WELCOME</strong> TO YOUR NEW WEBSITE</h4>
                                <p>Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                                    ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                                    philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                                    ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                                    egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                                    mel vivendo scriptorem.</p>
                                <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                                    referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                                    mel graece mel vivendo scriptorem dolorum.</p>
                            </div>
                            <!--welcome ends-->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp" data-wow-delay='.2s' style="z-index:100">
                                <h4 class="margin-bottom-25 margin-top-none"><strong>SEARCH</strong> OUR INVENTORY</h4>
                                <div class="search-form margin-top-20 padding-vertical-20">
                                    <form method="post" action="#">
                                        <div class="select-wrapper clearfix">
                                            <div class="col-md-6">
                                                <div class="min-price select-dropdown">
                                                    <div class="my-dropdown min-price-dropdown min-dropdown">
                                                        <select name="min-year" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Min Year</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                        </select>
                                                    </div>
                                                    <span class="my-dropdown">to</span>
                                                    <div class="my-dropdown max-price-dropdown min-dropdown">
                                                        <select name="max-year" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Max Year</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                            <option>2006</option>
                                                            <option>2005</option>
                                                            <option>2004</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="min-price select-dropdown">
                                                    <div class="my-dropdown min-price-dropdown min-dropdown">
                                                        <select name="min-price" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Min Price</option>
                                                            <option>0</option>
                                                            <option>&lt; 10,000</option>
                                                            <option>&lt; 20,000</option>
                                                            <option>&lt; 30,000</option>
                                                            <option>&lt; 40,000</option>
                                                            <option>&lt; 50,000</option>
                                                            <option>&lt; 60,000</option>
                                                            <option>&lt; 70,000</option>
                                                            <option>&lt; 80,000</option>
                                                            <option>&lt; 90,000</option>
                                                            <option>&lt; 100,000</option>
                                                            <option>&lt; 120,000</option>
                                                            <option>&lt; 150,000</option>
                                                        </select>
                                                    </div>
                                                    <span class="my-dropdown">to</span>
                                                    <div class="my-dropdown max-price-dropdown min-dropdown">
                                                        <select name="max-price" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Max Price</option>
                                                            <option>0</option>
                                                            <option>&lt; 10,000</option>
                                                            <option>&lt; 20,000</option>
                                                            <option>&lt; 30,000</option>
                                                            <option>&lt; 40,000</option>
                                                            <option>&lt; 50,000</option>
                                                            <option>&lt; 60,000</option>
                                                            <option>&lt; 70,000</option>
                                                            <option>&lt; 80,000</option>
                                                            <option>&lt; 90,000</option>
                                                            <option>&lt; 100,000</option>
                                                            <option>&lt; 120,000</option>
                                                            <option>&lt; 150,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select-wrapper clearfix">
                                            <div class="col-md-6">
                                                <div class="my-dropdown make-dropdown">
                                                    <select name="body_style" class="css-dropdowns" tabindex="1" >
                                                        <option value="">Body Style</option>
                                                        <option>Cargo</option>
                                                        <option>Compact</option>
                                                        <option>Convertible</option>
                                                        <option>Coupe</option>
                                                        <option>Hatchback</option>
                                                        <option>Minivan</option>
                                                        <option>Sedan</option>
                                                        <option>SUV</option>
                                                        <option>Truck</option>
                                                        <option>Van</option>
                                                        <option>Wagon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="min-price select-dropdown">
                                                    <div class="my-dropdown min-price-dropdown min-dropdown">
                                                        <select name="min-mileage" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Min Mileage</option>
                                                            <option>0</option>
                                                            <option>&lt; 10,000</option>
                                                            <option>&lt; 20,000</option>
                                                            <option>&lt; 30,000</option>
                                                            <option>&lt; 40,000</option>
                                                            <option>&lt; 50,000</option>
                                                            <option>&lt; 60,000</option>
                                                            <option>&lt; 70,000</option>
                                                            <option>&lt; 80,000</option>
                                                            <option>&lt; 90,000</option>
                                                            <option>&lt; 100,000</option>
                                                            <option>&lt; 120,000</option>
                                                            <option>&lt; 150,000</option>
                                                        </select>
                                                    </div>
                                                    <span class="my-dropdown">to</span>
                                                    <div class="my-dropdown max-price-dropdown min-dropdown">
                                                        <select name="max-mileage" class="css-dropdowns" tabindex="1" >
                                                            <option value="">Max Mileage</option>
                                                            <option>0</option>
                                                            <option>&lt; 10,000</option>
                                                            <option>&lt; 20,000</option>
                                                            <option>&lt; 30,000</option>
                                                            <option>&lt; 40,000</option>
                                                            <option>&lt; 50,000</option>
                                                            <option>&lt; 60,000</option>
                                                            <option>&lt; 70,000</option>
                                                            <option>&lt; 80,000</option>
                                                            <option>&lt; 90,000</option>
                                                            <option>&lt; 100,000</option>
                                                            <option>&lt; 120,000</option>
                                                            <option>&lt; 150,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select-wrapper clearfix">
                                            <div class="col-md-6">
                                                <div class="my-dropdown make-dropdown">
                                                    <select name="model" class="css-dropdowns" tabindex="1" >
                                                        <option value="">Model</option>
                                                        <option>Lorem</option>
                                                        <option>ipsum</option>
                                                        <option>dolor</option>
                                                        <option>sit</option>
                                                        <option>amet</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="my-dropdown make-dropdown">
                                                    <select name="transmission" class="css-dropdowns" tabindex="1" >
                                                        <option value="">Transmission</option>
                                                        <option>Automatic</option>
                                                        <option>Manual</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select-wrapper clearfix">
                                            <div class="col-md-6">
                                                <div class="my-dropdown make-dropdown">
                                                    <select name="make" class="css-dropdowns" tabindex="1" >
                                                        <option value="">Make</option>
                                                        <option>Lorem</option>
                                                        <option>ipsum</option>
                                                        <option>dolor</option>
                                                        <option>sit</option>
                                                        <option>amet</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="my-dropdown">
                                                    <input class="full-width" type="search" value="" placeholder="Refine with keywords">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="select-wrapper clearfix">
                                            <div class="form-element clearfix">
                                                <input type="checkbox" id="check">
                                                <label for="check">Certified</label>
                                            </div>
                                            <div class="form-element">
                                                <input type="checkbox" id="check2">
                                                <label for="check2">CARFAX&reg; Verified</label>
                                            </div>
                                            <div class="form-element">
                                                <input type="checkbox" id="check3">
                                                <label for="check3">Brand New</label>
                                            </div>
                                            <div class="form-element">
                                                <input type="submit" value="Find My New Vehicle" class="find_new_vehicle pull-right md-button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--invetory ends--> 
                        </div>                    
                    </section>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JavaScript --> 

        <script src="js/main.js"></script> 

    </body>
</html>



