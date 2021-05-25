<?php
	include('./config/lang.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="<?=domain?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
          
    <link rel="shortcut icon" type="image/x-icon" href="<?=$assets?>/images/lgo.png">
    <title>GreenField</title>

    <!-- CSS -->
    <link href="<?=$assets?>/css/reset.css" rel="stylesheet">
    <link href="<?=$assets?>/css/fonts.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=$assets?>/css/animate.css" rel="stylesheet">
    <link href="<?=$assets?>/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

<div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
    <header>
        <!-- Start Header top Bar -->
         <!-- Start Header Middle -->
         <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="./"><img src="<?=$assets?>/images/green.png" class="img-responsive" alt="" style="height: 70px; width: 200px;"></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a href="mailto:info@greenfield.org">info@greenfield.org</a> </li>
                            <li> <span>Contact</span> 09024444626</li>
                        </ul>
                        <a href="./admin/login" class="login">Admin Login<span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav width-fluid">
                        <li > <a href="./">Home</i></a>
                           
                        </li>
                        <li> <a href="./site/about">About</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="./site/pages/course">Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu dropright">
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/21st-century-leadership-inspiring-excellence-and-engagement ">21st Century Leadership Inspiring Excellence And Engagement </i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Business-administration-faculty">Business Administration Faculty </i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Business-continuity-management ">Business Continuity Management </i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Business-development-masterclass">Business Development Masterclass</i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Business-model-innovation">Business Model Innovation</i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Developing-strategic-marketing-plan ">Developing Strategic Marketing Plan </i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Global-leadership-masterclass-for-ceos">Global Leadership Masterclass For Ceos</i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Leadership-and-management-faculty ">Leadership And Management Faculty </i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/Leadership-and-management-Faculty ">Leadership And Management In Digital Era</i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/mastering-high-performance-management">Mastering High Performance Management</i></a>
                                <li class="dropdown" dropright><a data-toggle="dropdown dropright" href="./site/pages/course/The-board-room-for-women-of-excellence">The Board Room For Women Of Excellence</i></a>
                            </li>
                               
                            </ul>
                        </li>
                       
                        </li>
                        <li><a href="./site/event">Events</a></li>
                        <li><a href="./site/training">Training</a></li>
                        <li><a href="./site/conference">Conference</a></li>
                        <li> <a href="./site/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
