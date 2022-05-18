<?php ob_start(); ?>

<!--
    · Contenido de la página del curso React para los usuarios que no están registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Curso React
                </h1>
                <p>
                    React es uno de los frameworks de JavaScript más utilizados por los desarrolladores de todo el mundo. Con este curso empezamos desde un nivel muy básico y llegaremos a un nivel avanzado. Se necesitan conocimientos de TypeScript.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/curso-react.png" class="d-block mx-lg-auto img-fluid" alt="Laptop con imagen de react" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container curso-tabs">
        <div class="row">
            <div class="col-lg-9">
                <!-- TODO Cambiar por Git -->
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
                        <p>React es el framework más utilizado hoy en día. Se basa en el lenguaje JavaScript y goza de una alta popularidad entre los desarrolladores por todo lo que es capaz de hacer este framework. Tiene una curva de aprendizaje muy rápida, por lo que será fácil introducir conceptos de React si tienes una base sólida de JavaScript.</p>
                        <p>Al terminar este curso tendrás los conocimientos necesarios para sacarle partido a este fantástico framework y poder hacer cursos más avanzados donde aprender más funcionalidades.</p>
                        <p>Es de vital importancia tener conocimientos avanzados de JavaScript para realizar este curso de una forma adecuada.</p>
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
                <!-- TODO Cambiar por Git -->
                <div class="actualizacion">
                    <h2>Última actualización</h2>
                    <span class="fecha">24/04/2022</span>
                </div>
                <ul class="caracteristicas">
                    <li>
                        <ion-icon name="attach-outline"></ion-icon>
                        <p>Temas</p>
                        <p>11 temas</p>
                    </li>
                    <li>
                        <ion-icon name="finger-print-outline"></ion-icon>
                        <p>Inscritos</p>
                        <p>87 alumnos</p>
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


<section class="sin-acceso">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../../img/curso_sin_acceso.png" alt="Imagen de ordenador con candado">
            </div>
            <div class="col texto-sin-acceso">
                <h2>Sección visible para usuarios registrados</h2>
                <p>Esta sección está restringida y sólo los usuarios registrados pueden ver el contenido del curso. </p>

                <p>Regístrate en menos de 2 minutos y disfruta de este y todos los cursos de nuestra academia. ¿A qué esperas para aprender con nosotros? Cientos de alumnos avalan nuestro método.</p>
                <a class="boton-blanco" href="index.php?ctl=registro" alt="Enlace a página de registro">Registrarme gratis ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            </div>
        </div>
    </div>
</section>


<section class="enviar-mensaje">
    <div class="container mensajes-curso">
        <div class="row my-5">
            <div class="col">
                <h2>Mensajes de los alumnos</h2>
                <div class="mensajes-usuarios">
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
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>