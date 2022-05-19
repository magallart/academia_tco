<?php ob_start(); ?>

<!--
    · Contenido de la página del curso Git para los usuarios que no están registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8 pt-lg-5">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Curso Git
                </h1>
                <p>
                    El control de versiones Git es una herramienta indispensable para todo desarrollador en la actualidad. Una vez aprendas los conceptos básicos de Git podrás manejar Github, Bitbucket o Gitlab perfectamente.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/curso-git.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container curso-tabs">
        <div class="row">
            <div class="col-lg-8 text-md-center text-sm-center">
                <h2>Información del curso</h2>

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link link-secondary active" id="descripcion-tab" data-bs-toggle="tab" data-bs-target="#descripcion" href="#">Descripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="docente-tab" data-bs-toggle="tab" data-bs-target="#docente" href="#">Docente</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="requisitos-tab" data-bs-toggle="tab" data-bs-target="#requisitos" href="#">Requisitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="salidas-tab" data-bs-toggle="tab" data-bs-target="#salidas" href="#">Salidas</a>
                    </li>
                </ul>

                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active text-start" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                        <p>En este curso el alumno aprenderás a trabajar con repositorios de versiones Git, con GitHub y GitLab. Desde la consola y con aplicaciones gráficas. Existen muchas aplicaciones que quizás conozcas como GitHub, GitLab o Bitbucket. Todas ellas se basan en Git, así que si sabes Git, sabes manejar cualquier aplicación gráfica moderna.</p>

                        <p>Git, junto a todas las aplicaciones gráficas,se ha convertido en una herramienta indispensable para todo desarrollador y empresa profesinal. Al terminar este curso serás capaz de manejar repositorios de forma totalmente profesional y tendrás los conocimientos necesarios para realizar cualquier acción en Git desde consola o aplicación gráfica.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>La docente a cargo del curso de Git es nuestro más reciente fichaje: Marta Buenafuente. Es toda una experta en Git, herramienta que lleva usando desde hace muchos años en el sector privado.</p>

                        <p>Marta te contará todos los secretos de Git y te acompañará en el camino durante todos los temas para hacerte el camino más fácil. Estamos convencidos de que sabrás sacarle todo el juego a Git después de realizar el curso con Marta.</p>
                    </div>

                    <div class="tab-pane fade text-start" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
                        <p>Git se utiliza como control de versiones para código, por lo que se entiende que el usuario que se apunta a este curso tiene cocimientos en programación.</p>

                        <p>Es aconsejable tener unos conocimientos básicos de la consola de Windows o Linux.</p>

                        <p>Para realizar el curso te aconsejamos utilizar el programa Visual Studio Code que es totalmente gratuito. A lo largo del curso utilizaremos diversos programas como GitHub o Bitbucket.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="salidas" role="tabpanel" aria-labelledby="salidas-tab">
                        <p>Este curso no tiene salida profesional específica, en cambio, es necesario para cualquier trabajo como desarrollador ya que en todas las empresas se utilizan aplicaciones de control de versiones basadas en Git.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 offset-xl-1 mt-md-5 mt-sm-5">
                <ul class="caracteristicas">
                    <li>
                        <ion-icon name="attach-outline"></ion-icon>
                        <p>Temas</p>
                        <p>10 temas</p>
                    </li>
                    <li>
                        <ion-icon name="finger-print-outline"></ion-icon>
                        <p>Inscritos</p>
                        <p>98 alumnos</p>
                    </li>
                    <li>
                        <ion-icon name="chatbubble-outline"></ion-icon>
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

                    <li>
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                        <p>Actualización</p>
                        <p>12/03/2022</p>
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