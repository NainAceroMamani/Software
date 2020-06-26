<?php require_once INCLUDES.'inc_header.php'; ?>
<div style="height:80px">

</div>
<!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('<?php echo IMAGES."breadcrumb-bg.jpg" ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Historia</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Historia<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

    <!-- Courses -->
    <section class="events section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>Reseña<span> Histórica</span></h2>
                    <p>Historia de la Escuela Profesional de Ingeniería en Informática y Sistemas:</p>
                    <div class="icon"><i class="fa fa-book"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="event-img">
                    <img src="<?php echo IMAGES.'logoEsis.png' ?>" alt="#">
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="coming-event">
                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="event-date">
                            <p>1991<span>Febrero</span></p>
                        </div>
                        <div class="event-content">
                            <p>
                            Según resolución Rectoral No 2498-91 UNJBG, de fecha 20 de febrero de 1991 se crea la Escuela de Computación Matemática en la Facultad de Ciencias (Rector: Mag. Alberto Cohaila Vilca).
                            </p>
                        </div>
                    </div>
                    <!-- End Single Event -->

                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="event-date">
                            <p>1995<span>Julio</span></p>
                        </div>
                        <div class="event-content">
                        <p>Según resolución Rectoral No 6033-95-UN/JBG de fecha 19 de julio de 1995, se aprueba en vías de regularización: Otargar el grado académico de Bachiller en Ciencias con mención en Informática y Sistemas, Título Profesional de Ingenieros de Informática y Sistemas.</p>
                        </div>
                    </div>
                    <!-- End Single Event -->

                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="event-date">
                            <p>2001<span>Julio</span></p>
                        </div>
                        <div class="event-content">
                        <p>Según Resolución de Facultad No 1428-FACI-UNJBG de fecha 24 de Julio del 2001, se oficializa el cambio de denominación de la Escuela Académica profesional de Computación - Matemática por el de: Escuela Académica Profesional de Informática y Sistemas.</p>
                        </div>
                    </div>
                    <!-- End Single Event -->
                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="event-date">
                            <p>2011<span>Julio</span></p>
                        </div>
                        <div class="event-content">
                        <p>
                        Según Resolución de Consejo Universitario No 8430-2011-COG-UN/JBG, de fecha 22 de Julio del 2011 se Resuelve: Aprobar en vía de regularización la actualización de sumillas de la Escuela Profesional de Ingeniería en Informática y Sistemas del plan antiguo de la Facultad de Ingeniería, aprobado mediante Resolución de Facultad No 217-2011-FAIN/UNJBG.
según Resolución RAU 128-2010. AU COG, se realiza la fusión de las Facultades conformándose siete facultades, y la ESIS pasa a formar la Facultad de Ingeniería conjuntamente con las escuelas de Ingenieria de Minas, Ingeniería Metalúrgica, Ingeniería Mecánica e Ingenieía Química.
                        </p>
                        </div>
                    </div>
                    <!-- End Single Event -->
                    
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Calendario Académico 2020</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">

                                <!-- event-calendar-evo -->
                                <div id="calendar"></div>
                                <!-- End event-calendar-evo -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <!-- Button -->
                <div class="button text-center mt-5">
                    <button type="button" class="btn white primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                        Calendario
                    </button>
                    <a href="<?php echo URL.'noticia' ?>" class="btn white">Mostrar más</a>
                </div>
                <!--/ End Button -->
            </div>
        </div>
    </div>
</section>
    <!--/ End Courses -->

<?php require_once INCLUDES.'inc_footer.php'; ?>

    </body>

</html>