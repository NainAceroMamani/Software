<?php require_once INCLUDES.'inc_header.php'; ?>

<!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('<?php echo IMAGES."breadcrumb-bg.jpg" ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Plan de Estudios</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Plan de Estudios<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

    <!-- Courses -->
    <section class="courses archive section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Body -->
                        <div class="course-body">
                            <h4 class="c-title">Plan de Estudio de Ingeniería</h4>
                            <!-- Button -->
                            <div class="button text-center">
                                <p>Un plan es un modelo sistemático que se desarrolla antes de concretar una cierta acción con la intención de dirigirla. En este sentido, podemos decir que un plan de estudio es el diseño curricular que se aplica a determinadas enseñanzas impartidas por un centro de estudios.</p>
                                <a href="<?php echo UPLOADS.'plan_estudios/FAIN-ESIS.pdf' ?>" target="black" class="btn white primary">Ver Plan de Estudio</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Body -->
                        <div class="course-body">
                            <h4 class="c-title">Plan de Estudio de la Escuela de Informática y Sistemas</h4>
                            <!-- Button -->
                            <div class="button text-center">
                                <p>Un plan es un modelo sistemático que se desarrolla antes de concretar una cierta acción con la intención de dirigirla. En este sentido, podemos decir que un plan de estudio es el diseño curricular que se aplica a determinadas enseñanzas impartidas por un centro de estudios.</p>    
                                <a href="<?php echo UPLOADS.'plan_estudios/pe_esis.pdf' ?>" target="black" class="btn white primary">Ver Plan de Estudio</a>
                            </div>
                            <!--/ End Button -->
                         </div>
                    </div>
                    <!--/ End Single Course -->
                </div>

            </div>
        </div>
    </section>
    <!--/ End Courses -->

<?php require_once INCLUDES.'inc_footer.php'; ?>

    </body>

</html>