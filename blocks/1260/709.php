 
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
        $less->compileFile('less/709.less', 'css/709.css');
        ?>
        <link href="css/709.css" rel="stylesheet" type="text/css" />


    </head>
    <body>


        <div class="container">
            <div class="col-md-3">
                <div class="type-709">
                    <h3>Collections </h3>
                    <div class="line"></div>

                    <ul class="list_links">
                        <li><a href="#">Beauty Tools</a></li>           
                        <li><a href="#">Blushers</a></li>            
                        <li><a href="#">Body</a></li>           
                        <li><a href="#">Concealers</a></li>                           
                        <li><a href="#">Eye Liner</a> </li>            
                        <li><a href="#">Eyes</a></li>
                        <li><a href="#">Face</a></li>
                        <li><a href="#">Hair</a></li>
                        <li><a href="#">Nails</a></li>
                        <li><a href="#">Tools &amp; Accessories</a></li>
                    </ul>
                </div>
            </div>
        </div>




    </body>

</html>

