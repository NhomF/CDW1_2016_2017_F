 
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
        $less->compileFile('less/713.less', 'css/713.css');
        ?>
        <link href="css/713.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="container">
            <div class="col-md-3">
                <div class="type-713">
                    <h3>Vendors </h3>
                    <div class="line"></div>

                    <ul class="list_links">
                        <li><a href="#">Australian</a></li>           
                        <li><a href="#">Borghese</a></li>            
                        <li><a href="#">CeraVe</a></li>           
                        <li><a href="#">Julep</a></li>                           
                        <li><a href="#">London lippy</a> </li>            
                        <li><a href="#">Loreal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>



