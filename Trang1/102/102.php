<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/102.less', 'css/102.css');
    ?>

    <link href="css/102.css" rel="stylesheet" type="text/css"/>
    

</head>

<body>

   <div class="type-102">
        <header>
           
            <nav class="header-links">
                <button class="link-menu" type="button" id="open-menu">
                    <img src="images/hamburger.svg">
                </button>
                <ul id="links" class="">
                    <li class="tablet-hidden">
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li>

                        <a href="#">Ca lâm sàn</a>
                    </li>
                   
                </ul>

            </nav>
        </header>
        <div class="container">

    </div>

</body>
</html>