
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
     <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/preview.css" rel="stylesheet" type="text/css"/>
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
		<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                          <div class="list-group">
                            <a href="#" class="list-group-item active text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>General Information
                            </a>
                            <a href="#" class="list-group-item text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>Physical Properties
                            </a>
                            <a href="#" class="list-group-item text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>Fate and Transport
                            </a>
                            <a href="#" class="list-group-item text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>Detection and Treatability
                            </a>
                            <a href="#" class="list-group-item text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>Safety and Health Effects/Treatment
                            </a>
                            <a href="#" class="list-group-item text-center">
                              <h4 class="glyphicon glyphicon-home"></h4><br/>Toxicity
                            </a>                
                          </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">
                                <div>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thing 1</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thing 2</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Thing 3</a></li>
                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Thing 4</a></li>
                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">Something</div>
                                    <div role="tabpanel" class="tab-pane" id="profile">Else</div>
                                    <div role="tabpanel" class="tab-pane" id="messages">Goes</div>
                                    <div role="tabpanel" class="tab-pane" id="settings">Here</div>
                                  </div>

                                </div>

                            </div>
                            <!-- train section -->
                            <div class="bhoechie-tab-content">
                                <center>
                                  <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                                  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                  <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                                </center>
                            </div>

                            <!-- hotel search -->
                            <div class="bhoechie-tab-content">
                                <center>
                                  <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                                  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                  <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                  <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                                  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                  <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                  <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                  <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                  <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                  <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                                </center>
                            </div>                
                        </div>
                    </div>
              </div>
            </div>
	</div>
    <script>
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
</body>
</html>
