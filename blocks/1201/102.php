<!DOCTYPE html>

<html>
<head>
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
			<ul id="links">
				<!-- hien trong menu so xuong nhung k hien trong menu chinh  <li class="tablet-hidden">
					<a href="/">Trang chủ</a>
				</li> -->
				<li>
					<a href="#">Trang chủ</a>
				</li>
				<li>
					<a href="#">Ca lâm sàn</a>
				</li>
				
			</ul>
			
		</nav>

<script>

window.onload = function(){
	document.getElementById('open-menu').addEventListener('click', function(){
		var links = document.getElementById('links');
		if ( links.className ){
			links.className = '';
		} else {
			links.className = 'show-menu';
		}
	});
};
</script>
    </div>

</body>
</html>