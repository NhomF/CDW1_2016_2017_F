 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1266.less', 'css/1266.css');
        ?>
        <link href="css/1266.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-1266">
        <div class="row" style="min-height:300px;">
            <div  class="col-sm-6">
                <h3>Left Tabs</h3>
                <hr/>
                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                        <li><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">Home Tab.</div>
                        <div class="tab-pane" id="profile">Profile Tab.</div>
                        <div class="tab-pane" id="messages">Messages Tab.</div>
                        <div class="tab-pane" id="settings">Settings Tab.</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div  class="col-sm-6">
                <h3>Right Tabs</h3>
                <hr/>
                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-r">Home Tab.</div>
                        <div class="tab-pane" id="profile-r">Profile Tab.</div>
                        <div class="tab-pane" id="messages-r">Messages Tab.</div>
                        <div class="tab-pane" id="settings-r">Settings Tab.</div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-right">
                        <li class="active"><a href="#home-r" data-toggle="tab">Home</a></li>
                        <li><a href="#profile-r" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages-r" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings-r" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div  class="col-sm-6">
                <h3>Left Tabs - Vertical Text</h3>
                <hr/>
                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left vertical-text">
                        <li class="active"><a href="#home-v" data-toggle="tab">Home</a></li>
                        <li><a href="#profile-v" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages-v" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings-v" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-v">Home Tab.</div>
                        <div class="tab-pane" id="profile-v">Profile Tab.</div>
                        <div class="tab-pane" id="messages-v">Messages Tab.</div>
                        <div class="tab-pane" id="settings-v">Settings Tab.</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div  class="col-sm-6">
                <h3>Right Tabs - Vertical Text</h3>
                <hr/>
                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-vr">Home Tab.</div>
                        <div class="tab-pane" id="profile-vr">Profile Tab.</div>
                        <div class="tab-pane" id="messages-vr">Messages Tab.</div>
                        <div class="tab-pane" id="settings-vr">Settings Tab.</div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-right vertical-text">
                        <li class="active"><a href="#home-vr" data-toggle="tab">Home</a></li>
                        <li><a href="#profile-vr" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages-vr" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings-vr" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>



