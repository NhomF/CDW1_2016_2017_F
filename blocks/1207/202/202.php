
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
    $less->compileFile('less/202.less', 'css/202.css');
    ?>

    <link href="css/202.css" rel="stylesheet" type="text/css"/>
   
</head>
<body>
	
    <div class="type-202">
	<div class="home-2-waraper">
      
      <div class="header-area">
        <div class="header-top">
          <div class="container">
            <div class="row">
               <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="single-menu">
					<nav class="header-links">
					<ul>
					  
					  <li class="">
						<a href="#">My Account</a>
					  </li>
					  
					  <li class="">
						<a href="#">My Cart</a>
					  </li>
					  
					  
					  <li><a href="/account/login">My wishlist</a></li>
							  
					  
					  <li><a class="lastbdr" href="#">Login</a></li>
					  
					</ul>
					</nav>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
	</div>
</body>
</html>
