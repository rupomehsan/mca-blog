<!DOCTYPE html>
<html>

<!-- Mirrored from gico.io/spcica/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 19:53:52 GMT -->

<head>
    <meta charset="utf-8">
    <title>Modern Cooking Academy</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/logo.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend') }}/images/logo.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <!-- Global site tag (gtag.js) - Google Ads: 10793544805 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10793544805"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10793544805');
    </script>

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img class="rounded-circle" style="height: 80px ;width:80px;object-fit:contain"
                                        src="{{ asset('frontend') }}/images/logo.png" alt="" title="">
                                    <h1 class="navbar-brand ">Modern Cooking Academy</h1>
                                </a>
                            </div>
                        </div>


                        <div class="nav-outer clearfix">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about_us') }}">About Us</a></li>
                                        <li><a href="{{ route('blog') }}">Blogs</a></li>
                                        <li><a href="{{ route('course') }}">Our Courses</a></li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>

                            </nav>

                            <!-- Outer Box -->
                            <div class="outer-box">
                                <!-- Search Box -->

                                <ul class="login-info">
                                    <li class="recipe">
                                        <a href="{{ route('login') }}"><span class="icon fa fa-user"></span>Login</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('frontend') }}/images/logo-2.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->
