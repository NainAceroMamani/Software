<?php require_once INCLUDES.'inc_header.php'; ?>

<!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('<?php echo IMAGES."breadcrumb-bg.jpg" ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Convenios</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Convenios<i class="fa fa-angle-right"></i></a></li>
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
                    <h2>Intercambio <span>2019</span></h2>
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
                        <video autoplay muted loop id="myVideo" style="width: 100%;height: 100%;">
                            <source src="<?php echo IMAGES.'nain.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="parent-container">
                        <a href="<?php echo IMAGES.'nain.mp4' ?>" target="black" class="btn white primary">Ver video</a>
                        </div>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'logoEsis.png' ?>" alt="#">
                                <h4 class="title">ESTUDIANTES DE INTERCAMBIO</h4>
                            </div>
                            <span class="price">NAIN ACERO MAMANI</span>
                        </div>
                        <h4 class="c-title"><a href="<?php echo UPLOADS.'silabos/Algoritmo_programacion_paralela.pdf' ?>" target="black" >Intercambio a la Universidad Tecnologica de los Andes</a></h4>
                        <p>Fundamentos de Programación es una asignatura básica que permite crear programas que exhiban un comportamiento deseado. El proceso de escribir código requiere frecuentemente conocimientos en varias áreas distintas, además del dominio del lenguaje a utilizar, algoritmos especializados y lógica formal.</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>54 Alumnos</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
        </div>
        
        <!-- Button -->
        <div class="button text-center mt-5">
            <a href="javascript:void(0)" class="btn white primary">Mostrar más</a>
        </div>
        <!--/ End Button -->
    </div>
</section>
<!--/ End Courses -->

<?php require_once INCLUDES.'inc_footer.php'; ?>

    </body>

</html>