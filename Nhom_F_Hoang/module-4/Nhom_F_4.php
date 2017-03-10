
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
    $less->compileFile('less/301.less', 'css/301.css');
    ?>

    <link href="css/301.css" rel="stylesheet" type="text/css"/>
   

</head>
<body>
	<main>
		<div class="main-content">
			<div class="app-info">

				<h1>Hoạt động bên lĩnh vực</h1>
				<ul class="text-info medium-minus-hide">
					<li>View rare conditions, innovative treatments, and teaching cases from around the world</li>
					<li>Page more than 1 million healthcare professionals for instant feedback</li>
					<li>Communicate with colleagues using HIPAA-compliant direct messaging</li>
				</ul> 
                <div class="web-app-links">
					<a class="register-link" href="#">Sign Up</a>
					<a class="login-link" href="#" >Log In</a>
				</div>
		

			
		</div>

		</main>
				
</body>
</html>
