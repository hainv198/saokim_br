<!doctype html>
<html class="no-js" lang="<?php get_language_attributes()?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="hainv dev">

    <title>Dev Sao Kim</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- style css -->
  
    <?php 
        wp_head( );
    ?>

</head>

<body <?php body_class( ) ?>>
    
    <div id="loading-wrap">
        <div class="loading-effect"></div>
    </div>
    <!-- Loading Bar End -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="main-header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="d-flex justify-end">
                                <div class="left mr-auto">
                                    <ul class="clearfix">
                                        <li>Phone: <a href="tel:+98698547258">+98 698 547 258</a></li>
                                        <li>Open hours: 9.00 -6.00 SAT-MON</li>
                                    </ul>
                                </div>
                                <div class="right l-height">
                                    <ul class="clearfix d-inblock">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="registration.html">Regester</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <div id="active-sticky" class="navgation-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="d-flex justify-end">
                                <div class="logo mr-auto">
                                    <a href="index.html"><img src="assets/img/logo.png" alt="Cultura" /></a>
                                </div>
                                <!-- Static navbar -->
                                <nav class="mainmenu">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse no-padding">
                                        <ul class="navbar-nav dropdown">
                                            <li>
                                                <a href="javascript:viod(0)" class="dropdown-toggle" data-toggle="dropdown" title="Click Here">
													Home <i class="zmdi zmdi-chevron-down"></i>
												</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index.html">Home V1</a></li>
                                                    <li><a href="index-2.html">Home V2</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:viod(0)" class="dropdown-toggle" data-toggle="dropdown" title="Click Here">
													Courses <i class="zmdi zmdi-chevron-down"></i>
												</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="courses.html">Courses Grid</a></li>
                                                    <li><a href="courses-list-view.html">Courses List</a></li>
                                                    <li><a href="course-details.html">Course Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="teachers.html">Teachers</a></li>
                                            <li>
                                                <a href="javascript:viod(0)" class="dropdown-toggle" data-toggle="dropdown" title="Click Here">
													Pages <i class="zmdi zmdi-chevron-down"></i>
												</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li class="dropdown-submenu"><a class="hit" href="#">Gallery <i class="zmdi zmdi-chevron-right"></i></a>
														<ul class="dropdown-menu">
															<li><a href="gallery.html">Gallery V1</a></li>
															<li><a href="gallery-2.html">Gallery V2</a></li>
															<li><a href="gallery-3.html">Gallery V3</a></li>
														</ul>
													</li>
                                                    <li class="dropdown-submenu"><a class="hit" href="#">Events <i class="zmdi zmdi-chevron-right"></i></a>
														<ul class="dropdown-menu">
															<li><a href="events.html">Events V1</a></li>
															<li><a href="events-2.html">Events V2</a></li>
															<li><a href="event-details.html">Event Details</a></li>
														</ul>
													</li>
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="registration.html">Registration</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:viod(0)" class="dropdown-toggle" data-toggle="dropdown" title="Click Here">
													Blog <i class="zmdi zmdi-chevron-down"></i>
												</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog.html">Blog Style 1</a></li>
                                                    <li><a href="blog-2.html">Blog Style 2</a></li>
                                                    <li><a href="blog-3.html">Blog Style 3</a></li>
                                                    <li><a href="blog-4.html">Blog Style 4</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <!--/.nav-collapse -->
                                </nav>
                                <div class="search-toggle pull-right">
                                    <i class="zmdi zmdi-search"></i>
                                </div>
                                <div class="courses-searching">
                                    <div class="close-search"></div>
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Courses Search..." />
                                        <button id="close" type="submit"><i class="zmdi zmdi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </header>
        <!-- Header Section End -->