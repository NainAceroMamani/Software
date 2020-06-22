<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo isset($d->title) ? $d->title .' - '.get_sitename() : 'Bienvenido - '.get_sitename()  ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo CSS.'font-awesome.min.css' ?>">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'niceselect/css/niceselect.css' ?>">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'jquery/css/jquery.fancybox.min.css' ?>">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'cube_portfolio/css/cube-portfolio.min.css' ?>">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'owl/css/owl.carousel.min.css' ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo CSS.'animate.min.css' ?>">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="<?php echo PLUGINS.'slicknav/css/slicknav.min.css' ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo CSS.'magnific-popup.css' ?>">

    <!-- Eduland Stylesheet -->
    <link rel="stylesheet" href="<?php echo CSS.'normalize.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'style.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'responsive.css' ?>">

    <!-- Evo Calendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGINS.'evo_calendar/css/evo-calendar.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGINS.'evo_calendar/css/evo-calendar.royal-navy.css' ?>" />

    <!-- Magnific-Popup -->
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGINS.'magnific-popup/css/magnific-popup.css' ?>" />

    <!-- Eduland Colors -->
    <link rel="stylesheet" href="<?php echo CSS.'colors/color1.css' ?>">
    <style>
        .calendar-year p {
            color: #fff;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="header">
        <!-- Header Inner -->
        <div class="header-inner overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Logo -->
                        <div class="logo imglogo">
                            <a href="index.html"><img src="<?php echo IMAGES.'logo.png' ?>" alt="#"></a>
                        </div>
                        <!--/ End Logo -->
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="menu-bar">
                            <nav class="navbar navbar-default">
                                <div class="navbar-collapse">
                                    <!-- Main Menu -->
                                    <ul id="nav" class="nav menu navbar-nav">
                                        <li class="active"><a href="<?php echo URL ?>"><i class="fa fa-home"></i>INICIO</a></li>
                                        <li><a href="#"><i class="fa fa-clone"></i>ACADÉMICO</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo URL.'docente' ?>">Docentes</a></li>
                                                <li><a href="teachers.html">Plan de estudio</a></li>
                                                <li><a href="<?php echo URL.'horario' ?>">Horarios</a></li>
                                                <li><a href="teachers.html">Sílabus</a></li>
                                                <li><a href="teachers.html">Convenios</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-clone"></i>INVESTIGACIÓN</a>
                                            <ul class="dropdown">
                                                <li><a href="teachers.html">Líneas de Investigación</a></li>
                                                <li><a href="teachers.html">Proyectos de Investigación</a></li>
                                                <li><a href="teachers.html">Repositorio de Tesis</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-clone"></i>INFRAESTRUCTURA</a>
                                            <ul class="dropdown">
                                                <li><a href="teachers.html">Laboratorios</a></li>
                                                <li><a href="teachers.html">Aulas</a></li>
                                                <li><a href="teachers.html">Biblioteca</a></li>
                                                <li><a href="teachers.html">Aula Informática</a></li>
                                                <li><a href="teachers.html">Oficinas Administrativas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo URL.'noticia' ?>"><i class="fa fa-address-book"></i>Noticias</a> </li>
                                    </ul>
                                    <!-- End Main Menu -->
                                </div>
                            </nav>
                            <!-- Search Area -->
                            <div class="search-area">
                                <a href="#header" class="icon"><i class="fa fa-search"></i></a>
                                <form class="search-form">
                                    <input type="text" placeholder="ex: premium course" name="search">
                                    <button value="search " type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- End Search Area-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->