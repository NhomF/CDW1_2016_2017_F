 
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
        $less->compileFile('less/710.less', 'css/710.css');
        ?>
        <link href="css/710.css" rel="stylesheet" type="text/css" />


    </head>
    <body>


        <div class="container">
            <div class="col-md-3">
                <div class="type-710">
                    <h3>Product Type </h3>
                    <div class="line"></div>

                    <ul class="list_links">           
                        <li><a href="#">Eyes</a></li>
                        <li><a href="#">Face</a></li>
                        <li><a href="#">Nails</a></li>
                        <li><a href="#">Tools &amp; Accessories</a></li>
                    </ul>
                </div>

            </div>
        </div>




    </body>

</html>


