
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css"/>
        <link href="css/preview.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/206.less', 'css/206.css');
        ?>
        <link href="css/206.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-206">
            <div class="home-2-waraper">
                <div class="creative-banner common-2">
						<div class="container">
							<div class="row">
								
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="banner-box-1 banner-inner">
										<div class="banner-title">free shipping</div>
										<div class="banner-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										</div>
									</div>
								</div>																
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="banner-box-2 banner-inner bannneer">
										<div class="banner-title">30 days money back</div>
										<div class="banner-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										</div>
									</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="banner-box-3 banner-inner">
										<div class="banner-title">payment secured</div>
										<div class="banner-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
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
