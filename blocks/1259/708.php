 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/708.less', 'css/708.css');
        ?>
        <link href="css/708.css" rel="stylesheet" type="text/css" />
       

    </head>
    <body>


        <div class="container">
            <div class="col-md-3">
                <div class="type-708">
                    <h3>Best Sellers</h3>
                    <div class="line"></div>

                    <div class="widget_content">
                        <ul class="list_products">
                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="images/pro1.png" width="100px;" alt="butter LONDON LIPPY Moisture Matte Lipstick">
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">butter LONDON LIPPY Moisture Matte Lipstick</a>
                                    </div>

                                    <div class="product_price">
                                        <span class="money" data-currency-usd="$19.00">$19.00</span>

                                        <span class="money compare-at-price" data-currency-usd="$26.00">$26.00</span>

                                    </div>

                                    <div class="product_links">
                                        <a class="btn" href="#">View</a>
                                    </div>
                                </div>
                            </li>

                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="images/pro2.png" width="100px; alt=" cerave="" renewing="" system="" eye="" repair"="">
                                    </a>
                                </div>

                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">CeraVe Renewing System Eye Repair</a>
                                    </div>

                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From $12.00">From $12.00</span>

                                        <span class="money compare-at-price" data-currency-usd="$20.00">$20.00</span>

                                    </div>

                                    <div class="product_links">
                                        <a class="btn" href="#">View</a>
                                    </div>
                                </div>
                            </li>

                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="images/pro3.png" width="100px; alt=" loreal="" paris="" advanced="" revitalift="" face="" and="" neck="" day="" cream"="">
                                    </a>
                                </div>

                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">Loreal Paris Advanced RevitaLift Face and Neck Day Cream</a>
                                    </div>

                                    <div class="product_price">
                                        <span class="money" data-currency-usd="From $19.00">From $19.00</span>

                                        <span class="money compare-at-price" data-currency-usd="$23.00">$23.00</span>

                                    </div>

                                    <div class="product_links">
                                        <a class="btn" href="#">View</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>




    </body>

</html>





