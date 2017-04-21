
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
                <div class="page-header">
                    <h1>Panels with nav tabs.<span class="pull-right label label-default"></span></h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1default" data-toggle="tab"><i class="glyphicon glyphicon-edit"></i>Tab1</a></li>
                                    <li><a href="#tab2default" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>Tab2</a></li>
                                    <li><a href="#tab3default" data-toggle="tab"><i class="glyphicon glyphicon-print"></i>Tab3</a></li>
                                    <li><a href="#tab4default" data-toggle="tab"><i class="glyphicon glyphicon-leaf"></i>Tab4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab"><i class="glyphicon glyphicon-phone"></i>Tab5</a></li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Tab6 <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#tab6default" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i>Nested tab 1</a></li>
                                            <li><a href="#tabnested1default" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i>Nested tab 2</a></li>
                                            <li><a href="#tabnested2default" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i>Nested tab3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default"><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tab2default"><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tab3default"><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tab4default"><div class="row form-group">


                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tab5default"><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tab6default"><p>Nested item 1</p><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tabnested1default"><p>Nested item 2</p><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                    <div class="tab-pane fade" id="tabnested2default"><p>Nested item 3</p><div class="row form-group">

                                            <div class="col-sm-2">Headache</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Fever</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary btn-sm  active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Nausea</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">Giddiness</div>  
                                            <div class=" col-sm-3 btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm  btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-2">WeightLoss</div>  
                                            <div class=" col-sm-3  btn-group" data-toggle="buttons">
                                                <label class="btn btn-sm btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked>Yes
                                                </label>
                                                <label class="btn btn-sm  btn-primary">
                                                    <input type="checkbox" autocomplete="off">No
                                                </label>
                                            </div>
                                        </div></div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<br/>
</div>
</body>
</html>
