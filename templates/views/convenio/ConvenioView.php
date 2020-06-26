<?php require_once INCLUDES.'inc_header.php'; ?>
<div style="height:80px">

</div>
<!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('<?php echo IMAGES."breadcrumb-bg.jpg" ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Pasantias</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Pasantias<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

<!-- Courses -->
<section class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>INTERCAMBIOS</h2>
                    <div class="icon"><i class="fa fa-clone"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'intercambio2.jpg' ?>" alt="">
                        <div class="parent-container">
                        <a href="<?php echo IMAGES.'intercambio2.jpg' ?>" target="black" class="btn white primary">Ver Foto</a>
                        </div>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <div class="parent-container">
                                    <a href="">
                                        <img src="<?php echo IMAGES.'logoEsis.png' ?>" alt="#">
                                    </a>
                                    <h4 class="title">ESTUDIANTES DE INTERCAMBIO</h4>
                                </div>
                            </div>
                            <span class="price">2018</span>
                        </div>
                        <h4 class="c-title"><a href="https://www.facebook.com/UNJBG.ocim/photos/a.518557541548890/2133604706710824/?type=3&theater" target="black" >Intercambios Académicos en universidades de Argentina, Colombia, México, Bolivia y Chile</a></h4>
                        <p>Diecisiete estudiantes basadrinos cursarán el segundo semestre del año en diferentes universidades de Perú y el extranjero.
Los estudiantes entre damas y varones, participarán de intercambios académicos en universidades de Argentina, Colombia, México, Bolivia y Chile, así como universidades de Puno, Apurimac, Abancay y Huancavelica.</p>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'intercambio3.jpg' ?>" alt="">
                        <div class="parent-container">
                        <a href="<?php echo IMAGES.'intercambio3.jpg' ?>" target="black" class="btn white primary">Ver Foto</a>
                        </div>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <div class="parent-container">
                                    <a href="">
                                        <img src="<?php echo IMAGES.'logoEsis.png' ?>" alt="#">
                                    </a>
                                    <h4 class="title">DOCENTE DE INTERCAMBIO</h4>
                                </div>
                            </div>
                            <span class="price">2019</span>
                        </div>
                        <h4 class="c-title"><a href="http://www.unjbg.edu.pe/noticia/noticia.php?n=3984" target="black" >Mgr. Gianfranco Málaga Tejada</a></h4>
                        <p>Docente de la Escuela Profesional de Ingeniería en Informática y Sistemas de la UNJBG, viene realizando una pasantía de diez días en la Universidad Andina del Cusco como parte del programa de movilidad docente de la Red Interuniversitaria del Sur del Perú.
En su llegada fue recibido por el Decano de la Facultad de Ingeniería y Arquitectura, además de los directores de la Escuela Profesional de Ingeniería de Sistemas y Departamento Académico de Ingeniería de Sistemas.</p>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'intercambio1.jpg' ?>" alt="">
                        <div class="parent-container">
                        <a href="<?php echo IMAGES.'intercambio1.jpg' ?>" target="black" class="btn white primary">Ver Foto</a>
                        </div>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <div class="parent-container">
                                    <a href="">
                                        <img src="<?php echo IMAGES.'logoEsis.png' ?>" alt="#">
                                    </a>
                                    <h4 class="title">DOCENTE DE INTERCAMBIO</h4>
                                </div>
                            </div>
                            <span class="price">2018</span>
                        </div>
                        <h4 class="c-title"><a href="http://www.unjbg.edu.pe/noticia/noticia.php?n=3510&fbclid=IwAR3edafPUZSeeTcnn82cx8DFTykXTskLgn8Zp-QwpmFlym17RXuFwUcmUWg" target="black" >Mgr. Ebert Osco Mamani</a></h4>
                        <p>Como parte de un intercambio de experiencias que financia la Universidad Metropolitana de Manchester (MMU), una delegación procedente de la ciudad de Durán (Ecuador) participa desde hoy en el Taller Resilencia: Cambio Climático Perú-Ecuador, que se realiza en nuestra casa superior de estudios.</p>
                    </div>
                </div>
                <!--/ End Single Course -->
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->


<?php require_once INCLUDES.'inc_footer.php'; ?>
<script src="<?php echo PLUGINS.'magnific-popup/js/jquery.magnific-popup.js' ?>"></script>
<script>
    $(document).ready(function() {
        $('.image-link').magnificPopup({type:'image'});
    });
    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
        // other options
    });
</script>
<script>
var bandera = true;
$(function() {
    $btn_mostrar = $('#btnMostrar');
    $section_mostrar = $('#mostrar');
    $section_mostrar.hide();
    $btn_mostrar.click(function() {
        if (bandera) {
            bandera = false;
            $section_mostrar.show();
            $btn_mostrar[0].innerHTML = 'Mostrar menos';
        } else {
            bandera = true;
            $section_mostrar.hide();
            $btn_mostrar[0].innerHTML = 'Mostrar más';
        }
    });
});
</script>
    </body>

</html>