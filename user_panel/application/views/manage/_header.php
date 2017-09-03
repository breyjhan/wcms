<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $site->s_name ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php css(); ?>bootstrap.min.css" rel="stylesheet">

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
        #loading{
            position: absolute;
            z-index: 9999;
            width: 100%;
            text-align: center;
            background: rgba(20, 20, 20, 0.50);
            height: 100%;
        }
        #loading > div {top: 35%;position: relative;}
        #taber{background: #f3f3f3;}
        #taber > div{padding: 0 10px 10px;display: none}
        #taber > h3{display: block;border: 1px solid #ccc; padding: 5px;background: #e0e0e0;cursor:pointer;}
    </style>

    <!-- jQuery -->
    <script src="<?php JS(); ?>jquery.min.js"></script>

</head>
<body>

<div id="loading">
    <div><img src="<?php img('loading.gif'); ?> " /></div>
</div>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php url('user/dashboard') ?>">Webpro CMS</a>
        </div>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?php echo $site->s_url;?>" target="_blank"><i class="fa fa-eye fa-fw"></i> <?php echo $site->s_name; ?></a></li>
        </ul>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
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
                        <a href="<?php url('site/manage/'.$site->s_id);?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="<?php url('site/manage/'.$site->s_id.'/page'); ?>"><i class="fa fa-print fa-fw"></i> Pages </a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>