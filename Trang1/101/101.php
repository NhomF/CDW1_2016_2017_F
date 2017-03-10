
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
    $less->compileFile('less/101.less', 'css/101.css');
    ?>

    <link href="css/101.css" rel="stylesheet" type="text/css"/>
   
</head>
<body>
	<div class="type-101">
		<header>
			<a href="/" class="logo"><img src="images/logo.png"></a>
		</header>
	</div>
</body>
</html>
