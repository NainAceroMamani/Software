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
    <script>
    window.onload = function () {

        var options = {
            animationEnabled: true,  
            title: {
                text: "Nuestros Egresados"
            },
            axisX: {
                valueFormatString: "YYYY"
            },
            axisY: {
                title: "",
                includeZero: false
            },
            data: [{
                yValueFormatString: "#,###",
                xValueFormatString: "YYYY",
                type: "spline",
                dataPoints: [
                    { x: new Date(2015, 0), y: 24 },
                    { x: new Date(2016, 0), y: 19 },
                    { x: new Date(2017, 0), y: 21 },
                    { x: new Date(2018, 0), y: 16 },
                    { x: new Date(2019, 0), y: 17 },
                ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);

        }
    </script>
    <style>
        .calendar-year p {
            color: #fff;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="header" style="position: fixed; top: 0; width: 100%;z-index: 999;">
        <!-- Header Inner -->
        <div class="header-inner overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Logo -->
                        <div class="logo imglogo">
                            <a href="<?php echo URL ?>"><img src="<?php echo IMAGES.'logo.png' ?>" alt="#"></a>
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
                                        <li><a href="#"><i class="fa fa-university"></i>ACADÉMICO</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo URL.'docente' ?>">Docentes</a></li>
                                                <li><a href="<?php echo URL.'egresado' ?>">Egresados</a></li>
                                                <li><a href="<?php echo URL.'plan_est' ?>">Plan de estudio</a></li>
                                                <li><a href="<?php echo URL.'horario' ?>">Horarios</a></li>
                                                <li><a href="<?php echo URL.'curso' ?>">Cursos</a></li>
                                                <li><a href="<?php echo URL.'convenio' ?>">Convenios</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-graduation-cap"></i>INVESTIGACIÓN</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo URL.'lin_inv' ?>">Líneas de Investigación</a></li>
                                                <li><a href="<?php echo URL.'rep_proy' ?>">Proyectos de Investigación</a></li>
                                                <li><a href="<?php echo URL.'tesis' ?>">Repositorio de Tesis</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-clone"></i>INFRAESTRUCTURA</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo URL.'laboratorio' ?>">Laboratorios</a></li>
                                                <li><a href="<?php echo URL.'aula' ?>">Aulas</a></li>
                                                <li><a href="<?php echo URL.'biblioteca' ?>">Biblioteca</a></li>
                                                <li><a href="<?php echo URL.'informativa' ?>">Aula Informática</a></li>
                                                <li><a href="<?php echo URL.'oficina' ?>">Oficinas Administrativas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo URL.'noticia' ?>"><i class="fa fa-bullhorn"></i>Noticias</a> </li>
                                        <li><a href="<?php echo URL.'congreso' ?>" target="black"><i class="fa fa-suitcase"></i>Congreso</a> </li>
                                    </ul>
                                    <!-- End Main Menu -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->