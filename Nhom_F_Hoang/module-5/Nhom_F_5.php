
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
    $less->compileFile('less/301.less', 'css/301.css');
    ?>

    <link href="css/301.css" rel="stylesheet" type="text/css"/>
   
</head>
<body class="txlive">
<main>
			<div class="app-display">
				<img src="images/phones-en.png">
		</div>
		
	</main>
	

	
</body>
</html>
