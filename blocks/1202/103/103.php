﻿<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/preview.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/103.less', 'css/103.css');
    ?>

    <link href="css/103.css" rel="stylesheet" type="text/css"/>
    
   
</head>

<body>

    <div class="type-103">
        <div class="tit1">Liên hệ</div>
    		<ul>
			<li class="address">11 Fifth Ave, Loftus - NEW JERSEY, US</li>
			<li class="telephone"><span>Telephone:</span> + 61 (2) 8093 3400</li>
			<li class="fax"><span>Fax:</span> +61 (2) 9542 3599</li>
			<li class="email"><span>Email:</span> <i>submissions@domain.com</i></li>
  		  </ul>

    </div>
</body>