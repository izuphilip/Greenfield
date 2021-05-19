<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?=$assets?>/images/favicon.ico">
    <title>Edumart - Educational Template</title>

    <!-- CSS -->
    <link href="<?=$assets?>/css/reset.css" rel="stylesheet">
    <link href="<?=$assets?>/css/fonts.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/bootstrap/<?=$assets?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/select2/<?=$assets?>/css/select2.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/font-awesome/<?=$assets?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/magnific-popup/<?=$assets?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/iconmoon/<?=$assets?>/css/iconmoon.css" rel="stylesheet">
    <link href="<?=$assets?>/assets/owl-carousel/<?=$assets?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=$assets?>/css/animate.css" rel="stylesheet">
    <link href="<?=$assets?>/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
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

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                        <li><a href="register.html">Register</a></li>
                        <li><a href="apply-online.html">Apply Online</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="faq1.html">FAQs</a></li>
                    </ul>
                    <div class="lang-wrapper">
                        <div class="select-lang">
                            <select id="currency_select">
                                <option value="usd">USD</option>
                                <option value="aud">AUD</option>
                                <option value="gbp">GBP</option>
                            </select>
                        </div>
                        <div class="select-lang2">
                            <select class="custom_select">
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="index.html"><img src="<?=$assets?>/images/logo.png" class="img-responsive" alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a href="mailto:info@edumart.org">info@edumart.org</a> </li>
                            <li> <span>Toll Free</span> 1800 000 0000 </li>
                        </ul>
                        <a href="login.html" class="login">Student Login <span class="icon-more-icon"></span></a>
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
                    <form class="navbar-form navbar-right">
                        <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Index 1</a></li>
                                <li><a href="index2.html">Index 2</a></li>
                            </ul>
                        </li>
                        <li> <a href="about.html">About</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Our Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="course-listing.html">course Listing</a></li>
                                <li><a href="mba-marketing.html">MBA Marketing</a></li>
                                <li><a href="mba-general.html">MBA General</a></li>
                                <li><a href="mba-operations.html">MBA Operations</a></li>
                            </ul>
                        </li>
                        <li> <a href="gallery.html">Gallery</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li class="visible-xs"><a href="register.html">Register</a></li>
                                <li class="visible-xs"><a href="apply-online.html">Apply online</a></li>
                                <li class="visible-xs"><a href="blog.html">Blog</a></li>
                                <li class="visible-xs"><a href="faq.html">FAQs</a></li>
                                <li><a href="news.html">Latest News</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="faq1.html">FAQ 1</a></li>
                                <li><a href="faq2.html">FAQ 2</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li class="hidden-xs"><a href="privacy.html">Privacy Policy</a></li>
                                <li class="hidden-xs"><a href="terms.html">Terms of Use</a></li>
                                <li class="hidden-xs"><a href="generic-ui.html">Generic UI</a></li>
                            </ul>
                        </li>
                        <li> <a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
