
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
    $less->compileFile('less/201.less', 'css/201.css');
    ?>

    <link href="css/201.css" rel="stylesheet" type="text/css"/>
	<link href="css/preview.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	
    <div class="type-201">
    <div class="home-2-waraper">
      
      <div class="header-area">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="welcome-msg">
                  <label><i class="currency-icon fa fa-globe"></i></label>
                    <select class="submenu-mainmenu currency-picker" name="currencies" style="display: inline; width: auto; vertical-align: inherit;">
  
  
						<option value="USD" selected="selected">USD</option>
						<option value="EUR">EUR</option>
						<option value="GBP">GBP</option>
						<option value="AUD">AUD</option>
						<option value="BND">BND</option>
    
  
					</select>
					
                  
                  Welcome <span class="wlc_name">orion</span>
                  
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
