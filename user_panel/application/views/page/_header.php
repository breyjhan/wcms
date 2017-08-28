<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $sites->s_name ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php css(); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php css(); ?>bootstrap-theme.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php css(); ?>metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php CSS(); ?>timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php CSS(); ?>startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php CSS(); ?>morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php CSS(); ?>font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .padding-md{
            padding:10px;
            border:1px solid #ccc;
        }
        .inline{
            list-style: none;
        }
        .inline li{
            display: inline-block;
        }
        tr{border-bottom: 1px solid #ccc;}
        td,th{padding: 10px}
        tr:first-child{
           background: #ccc; 
        }
        .square .form-control{
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .aligncenter{text-align: center}
        .alignright{text-align: right}
    </style>

        <!-- page -->
        <link rel="stylesheet" href="/assets/page/libs/highlight.js/8.8.0/styles/default.min.css">
        <link rel="stylesheet" href="/assets/css/page/theme.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/page/bootstrap-colorselector.css" />

        <style>
            .lyrow {
                margin-bottom: 10px;
            }
            .preview img{
                vertical-align: top;                
                margin-left: 25px;
            }
        </style>
        <!-- page -->

        <script src="<?php js(); ?>jquery.1.11.3.min.js"></script>   
        <script src="<?php JS(); ?>bootstrap.min.js"></script>     
        <script src="/assets/js/page/ace/1.2.0/min/ace.js"></script>
        <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
        <!--script src="//cloud.tinymce.com/stable/tinymce.min.js"></script-->
        <script src="<?php js(); ?>jquery-ui.1.10.2.min.js"></script>
        <script src="/assets/page/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script src="/assets/js/page/bootstrap-colorselector.js"></script>
        <script type="text/javascript">
            var path = '';
        </script>
        <script src="/assets/js/page/app.js"></script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php url('user/dashboard') ?>">Webpro CMS</a>
        </div>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?php echo $sites->s_url;?>" target="_blank"><i class="fa fa-eye fa-fw"></i> <?php echo $sites->s_name; ?></a></li>
        </ul>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links" id="menu-htmleditor">
            <li>
                <div class="btn-group"">
                    <button type="button" class="btn btn-primary" id="sourcepreview"><i class="glyphicon-eye-open glyphicon"></i> Preview</button>
                    <button type="button" id="save" class="btn btn-warning float-right"><i class="fa fa-save"></i>&nbsp;save</button>
                </div> &nbsp;
                <div class="btn-group" data-toggle="buttons-radio" id='add' style='display: none;'>
                    <button type="button" class="active btn btn-default" id="pc"><i class="fa fa-laptop"></i> Desktop</button>
                    <button type="button" class="btn btn-default" id="tablet"><i class="fa fa-tablet"></i> Tablet</button>
                    <button type="button" class="btn btn-default" id="mobile"><i class="fa fa-mobile"></i> Mobile</button>
                </div>
            </li>
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $this->userinfo->ui_fname.' '.$this->userinfo->ui_lname; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php url('user/profile'); ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php url('login/out'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">

                    <li>
                        <a href="<?php url('site/manage/'.$sites->s_id.'/page'); ?>"><i class="fa fa-arrow-left fa-fw"></i> Back to Pages </a>

                    </li>
                </ul>

                <ul class="nav nav-list ">
                    <li class="nav-header"> <i class="fa fa fa-columns"> </i>&nbsp; column </li>
                    <li class="rows" id="estRows">
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-1.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-12 column"></div>
                                </div>
                            </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-2.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-6 column"></div>
                                    <div class="col-md-6 column"></div>
                                </div>
                            </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-8-4.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-8 column"></div>
                                    <div class="col-md-4 column"></div>
                                </div>
                                <br> </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-4-8.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-4 column"></div>
                                    <div class="col-md-8 column"></div>
                                </div>
                                <br> </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-3-9.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-3 column"></div>
                                    <div class="col-md-9 column"></div>
                                </div>
                                <br> </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-9-3.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-9 column"></div>
                                    <div class="col-md-3 column"></div>
                                </div>
                                <br> </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-4.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-4 column"></div>
                                    <div class="col-md-4 column"></div>
                                    <div class="col-md-4 column"></div>
                                </div>
                                <br> </div>
                        </div>
                        <div class="lyrow"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a>
                            <div class="preview">
                                <img src="/assets/img/col-3.png">
                            </div>
                            <div class="view">
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-6  col-xs-12 column"></div>
                                    <div class="col-md-3 col-sm-6  col-xs-12 column"></div>
                                    <div class="col-md-3 col-sm-6 col-xs-12 column"></div>
                                    <div class="col-md-3 col-sm-6 col-xs-12 column"></div>
                                </div>
                                <br> </div>
                        </div>
                    </li>
                </ul>
                <br>
                <ul class="nav nav-list">
                    <li class="nav-header"><i class="fa fa-html5"></i>&nbsp; Elements </li>
                    <li class="boxes" id="elmBase">
                        <!-- <div class="box box-element" data-type="header"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> <div class="preview"> <i class="fa fa-header fa-2x"></i> <div class="element-desc">header</div> </div> <div class="view"> <h2>HEADER TITLE</h2> </div> </div> -->
                        <div class="box box-element" data-type="paragraph"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa fa-font fa-2x"></i>
                                <div class="element-desc">Paragraph</div>
                            </div>
                            <div class="view">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="box box-element" data-type="image"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa fa-picture-o fa-2x"></i>
                                <div class="element-desc">Image</div>
                            </div>
                            <div class="view"> <img src="http://placehold.it/350x150" class="img-responsive" title="default title" /> </div>
                        </div>
                        <div class="box box-element" data-type="button"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa  fa-hand-pointer-o fa-2x"></i>
                                <div class="element-desc">Button</div>
                            </div>
                            <div class="view"> <a class="btn btn-default" href="#">Click Me !</a> </div>
                        </div>
                        <div class="box box-element" data-type="youtube"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa  fa fa-youtube-play  fa-2x"></i>
                                <div class="element-desc">Youtube</div>
                            </div>
                            <div class="view">
                                <iframe class="img-responsive" src="https://www.youtube.com/embed/WIJaD623dy0" frameborder="0" allowfullscreen data-url=""></iframe>
                            </div>
                        </div>
                        <!-- Vimeo -->
                        <div class="box box-element" data-type="youtube"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa  fa-vimeo-square fa-2x"></i>
                                <div class="element-desc">Vimeo</div>
                            </div>
                            <div class="view">
                                <iframe class="img-responsive" src="https://player.vimeo.com/video/137463767?byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="box box-element" data-type="map"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa  fa-map-o fa-2x"></i>
                                <div class="element-desc">Map</div>
                            </div>
                            <div class="view">
                                <iframe class="img-responsive" src="http://maps.google.com/maps?q=12.927923,77.627108&amp;z=15&amp;output=embed" frameborder="0" allowfullscreen data-url=""></iframe>
                            </div>
                        </div>
                        <div class="box box-element" data-type="code"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a> </span>
                            <div class="preview"> <i class="fa">< ></i>
                                <div class="element-desc">Code</div>
                            </div>
                            <div class="view"> i'm html code, change me </div>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </nav>