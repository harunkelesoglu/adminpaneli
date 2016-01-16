<?php

($site_controller->is_loggedin()!="") ? true : $site_controller->redirect("pages/login-multi.php");
$site_controller->logout($_GET['logout']);
$comments=$site_controller->model->View('yorum');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Portakal Yazılım</title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="app/css/bootstrap.css">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/animo/animate+animo.css">
    <link rel="stylesheet" href="vendor/csspinner/csspinner.min.css">
    <!-- START Page Custom CSS-->
    <link rel="stylesheet" href="vendor/slider/css/slider.css">
    <link rel="stylesheet" href="vendor/chosen/chosen.min.css">
    <link rel="stylesheet" href="vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <!-- Codemirror -->
    <link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css">
    <!-- Bootstrap tags-->
    <link rel="stylesheet" href="vendor/tagsinput/bootstrap-tagsinput.css">
    <!-- END Page Custom CSS-->
    <!-- App CSS-->
    <link rel="stylesheet" href="app/css/app.css">
    <!-- Modernizr JS Script-->
    <script src="vendor/modernizr/modernizr.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="vendor/fastclick/fastclick.js" type="application/javascript"></script>


</head>
<title></title>
<body>
<!-- START Main wrapper-->
<section class="wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a href="" class="navbar-brand">
                <div class="brand-logo">Portakal Yazılım</div>
                <div class="brand-logo-collapsed">PY</div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" data-toggle="aside">
                        <em class="fa fa-align-left"></em>
                    </a>
                </li>

            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- START Messages menu (dropdown-list)-->
                <!-- <li class="dropdown dropdown-list">
                     <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                         <em class="fa fa-comments"></em>
                         <div class="label label-danger">300</div>
                     </a>
                     <ul class="dropdown-menu">
                         <li class="dropdown-menu-header">You have 5 new messages</li>
                         <li>
                             <div class="scroll-viewport">

                                 <div class="list-group scroll-content">

                                     <a href="#" class="list-group-item">
                                         <div class="media">
                                             <div class="pull-left">
                                                 <img style="width: 48px; height: 48px;" src="app/img/user/01.jpg" alt="Image" class="media-object img-rounded">
                                             </div>
                                             <div class="media-body clearfix">
                                                 <small class="pull-right">2h</small>
                                                 <strong class="media-heading text-primary">
                                                     <div class="point point-success point-lg"></div>Sheila Carter</strong>
                                                 <p class="mb-sm">
                                                     <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="#" class="list-group-item">
                                         <div class="media">
                                             <div class="pull-left">
                                                 <img style="width: 48px; height: 48px;" src="app/img/user/05.jpg" alt="Image" class="media-object img-rounded">
                                             </div>
                                             <div class="media-body clearfix">
                                                 <small class="pull-right">4h</small>
                                                 <strong class="media-heading text-primary">
                                                     <div class="point point-danger point-lg"></div>Perry Cole</strong>
                                                 <p class="mb-sm">
                                                     <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li class="p">
                             <a href="#" class="text-center">
                                 <small class="text-primary">Tamamı</small>
                             </a>
                         </li>
                     </ul>

                </li>-->
                <!-- END Messages menu (dropdown-list)-->
                <!-- START Alert menu-->
                <li class="dropdown dropdown-list">
                    <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                        <em class="fa fa-bell"></em>
                        <div class="label label-info"><?php echo count($comments);?></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <a href="comments" class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <em class="fa fa-comment-o fa-2x text-success"></em>
                                        </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Okunmamış yorumlar</div>
                                            <p class="m0">
                                                <small><?php echo count($comments);?> adet okunmamış yorumunuz var</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>




                                <!-- last list item -->
                                <a href="comments" class="list-group-item">
                                    <small>Tüm bildirimleri oku</small>
                                    <span class="badge"><?php echo count($comments);?></span>
                                </a>
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
                <!-- START User menu-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                        <em class="fa fa-user"></em>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu">
                        <li><a href="profile">Profil</a>
                        </li>
                        <li><a href="profile">Ayarlar<div class="label label-info pull-right"><em class="fa fa-cog text-white"></em></div></a>
                        </li>
                        <!--<li><a href="#">Notifications<div class="label label-info pull-right">5</div></a>
                        </li>
                        <li><a href="#">Messages<div class="label label-danger pull-right">10</div></a>
                        </li>-->
                        <li><a href="?logout=true">Çıkış<div class="label label-danger pull-right"><em class="fa fa-sign-out"></em></div></a>
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END User menu-->
            </ul>
            <!-- END Right Navbar-->
        </div>
    </nav>
