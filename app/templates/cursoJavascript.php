<?php ob_start(); ?>

<!--
    · Contenido de la página de inicio. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6">
                <h1 class="title-header">
                    Curso de JavaScript desde 0
                </h1>
                <p>
                    Este curso completo de JavaScript empieza desde un nivel básico pasando por las principales características y funcionalidades de uno de los lenguajes más demandados hoy en día como es JavaScript. Al finalizar este curso tendrás los conocimientos necesarios para utilizar JavaScript a nivel profesional. ¿Empezamos?
                </p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <!--  TODO Controlar la imagen en responsive -->
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container curso-tabs">
        <div class="row">
            <div class="col-lg-9">
                <div class="valoracion">
                    <h2>Valoración de los alumnos</h2>
                </div>

                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
                <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link link-secondary active" id="descripcion-tab" data-bs-toggle="tab" data-bs-target="#descripcion" href="#">Descripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="docente-tab" data-bs-toggle="tab" data-bs-target="#docente" href="#">Docente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="objetivos-tab" data-bs-toggle="tab" data-bs-target="#objetivos" href="#">Objetivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="requisitos-tab" data-bs-toggle="tab" data-bs-target="#requisitos" href="#">Requisitos</a>
                    </li>
                </ul>

                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                        <p>Contenido Descripción</p>
                    </div>
                    <div class="tab-pane fade" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>Contenido Docente</p>
                    </div>
                    <div class="tab-pane fade" id="objetivos" role="tabpanel" aria-labelledby="objetivos-tab">
                        <p>Contenido Objetivos</p>
                    </div>
                    <div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
                        <p>Contenido Requisitos</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="actualizacion">
                    <h2>Última actualización</h2>
                    <span class="fecha">24/04/2022</span>
                </div>
                <ul class="caracteristicas">
                    <li>
                        <ion-icon name="attach-outline"></ion-icon>
                        <p>Temas</p>
                        <p>17 temas</p>
                    </li>
                    <li>
                        <ion-icon name="finger-print-outline"></ion-icon>
                        <p>Inscritos</p>
                        <p>34 alumnos</p>
                    </li>
                    <li>
                        <ion-icon name="hourglass-outline"></ion-icon>
                        <p>Idioma</p>
                        <p>Español</p>
                    </li>
                    <li>
                        <ion-icon name="hourglass-outline"></ion-icon>
                        <p>Acceso</p>
                        <p>De por vida</p>
                    </li>
                    <li>
                        <ion-icon name="medal-outline"></ion-icon>
                        <p>Certificación</p>
                        <p>Sí</p>
                    </li>
                </ul>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</section>

<section>
    <div class="container acordeon">
        <div class="row my-5">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tema 1: Introducción a JavaScript
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Comenzamos el Curso JavaScript 2022 aprendiendo a utilizar la etiqueta script JavaScript (y a diferir su carga con el atributo defer) en tus proyectos frontend. No te pierdas este vídeo donde aprenderemos como enlazar un archivo JavaScript</p>
                                <iframe width="1120" height="630" src="https://www.youtube.com/embed/VwEChGsBD78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tema 2: ¿Qué es JavaScript?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>El hoisting JavaScript es uno de los conceptos principales que debes entender. También llamado alzado JavaScript, eleva la declaración de variables y las funciones declaradas al inicio del programa.</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/sv4-Lq495Qc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 3: Variables
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>Aprende las principales diferencias entre var vs let a la hora de declarar variables JavaScript. Por ejemplo, las variables declaradas con var tienen ámbito de función mientras que las variables let JavaScript tienen ámbito de bloque. También se comportan diferente a la hora de ser alzadas.</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mensajes-curso">
        <div class="row my-5">
            <div class="col">
                <h2>Mensajes de los alumnos</h2>
                <?php
                foreach ($_SESSION['mensajesCursoJavascript'] as $mensajes) {
                    echo "<div class='mensajeCurso'>";
                    echo "<span class='infoUsuario'>";
                    echo "<img src='../img" . $mensajes["fPerfil"] . "' />";
                    echo "<p class='datosUsuario'>" . $mensajes["nombre"] . " " . $mensajes["apellidos"] . "</p>";
                    echo "<span>";
                    echo "<p class='mensaje'>" . $mensajes["mensaje"] . "</p>";
                    echo "</div>";
                    echo "</hr>";
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>