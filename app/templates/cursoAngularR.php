<?php ob_start(); ?>

<!--
    · Contenido de la página del curso de Angular para usuarios registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Curso Angular
                </h1>
                <p>
                    Gracias al curso de Angular aprenderás los conceptos básicos de este framework así como todo lo necesario para crear tu primer proyecto totalmente funcional. Te recomendamos hacer el curso de JavaScript primero.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/curso-angular.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container curso-tabs">
        <div class="row">
            <div class="col-lg-9">
                <h2>Información del curso</h2>

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
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="salidas-tab" data-bs-toggle="tab" data-bs-target="#salidas" href="#">Salidas profesionales</a>
                    </li>
                </ul>

                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                        <p>En este curso el alumno aprenderá a dominar JavaScript, convirtiéndose en un experto desarrollador front-end gracias al conocimiento adquirido sobre uno de los lenguajes más demandados del mercado.</p>

                        <p>JavaScript es el lenguaje de programación de la web por excelencia en la parte cliente. Es el único que puede ejecutarse en todos los navegadores sin necesidad de cargar plugins adicionales. Nos permite crear páginas dinámicas, dotando a nuestro sitio web de efectos y funcionalidades que extienden las posibilidades que nos ofrece HTML5.</p>

                        <p>Cualquier diseñador web, tenga o no experiencia previa en programación, puede aprender a utilizarlo sin dificultad. Las posibilidades que ofrece con los nuevos estándares HTML5/CSS3 o las aplicaciones web interactivas basadas en AJAX son enormes.</p>
                    </div>
                    <div class="tab-pane fade" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>Contenido Docente</p>
                    </div>
                    <div class="tab-pane fade" id="objetivos" role="tabpanel" aria-labelledby="objetivos-tab">
                        <p>Contenido Objetivos</p>
                    </div>
                    <div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
                        <p>El curso parte desde cero pero son necesarios conocimientos básicos de programación, da igual el lenguaje que sepas.</p>

                        <p>Es necesario dominar los lenguajes de HTML5 y CSS3 para un adecuado aprovechamiento del curso.</p>

                        <p>Para realizar el curso te aconsejamos utilizar el programa Visual Studio Code que es totalmente gratuito.</p>
                    </div>
                    <div class="tab-pane fade" id="salidas" role="tabpanel" aria-labelledby="salidas-tab">
                        <p>Realiza esta formación y te prepararemos para trabajar, tanto por cuenta ajena como propia, como profesional en las siguientes áreas:</p>
                        <ul>
                            <li>Desarrollador front-end.</li>
                            <li>Desarrollador Web.</li>
                            <li>Programador de aplicaciones web Javascript.</li>
                            <li>Visual designer.</li>
                        </ul>
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
        <!-- TODO Cambiar por Angular -->
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

<section class="enviar-mensaje">
    <div class="container mensajes-curso">
        <div class="row my-5">
            <div class="col">
                <h2>Mensajes de los alumnos</h2>
                <?php
                foreach ($_SESSION['mensajesCursoAngular'] as $mensajes) {
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
        <div class="row">
            <div class="col">
                <form name="formEnviarMensaje" action="" method="POST" enctype="multipart/form-data">
                    <!-- TODO añadir funcionalidad enviar mensaje -->
                    <textarea rows="5" placeholder="Escribe tu mensaje (máximo 255 caracteres)..." name="nuevoMensaje"></textarea>
                    <input type="submit" value="Enviar mensaje" name="enviarMensaje" class="boton" />
                </form>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>