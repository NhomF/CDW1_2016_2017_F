
<!DOCTYPE html>

<html">
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
    $less->compileFile('less/105.less', 'css/105.css');
    ?>

    <link href="css/105.css" rel="stylesheet" type="text/css"/>
   
</head>
<body>
<div class="type-105">
	<main>
			<div class="app-display">
				<img src="images/phones-en.png">
		</div>
		
	</main>
</div>

	
</body>
</html>
