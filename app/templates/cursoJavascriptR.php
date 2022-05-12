<?php ob_start(); ?>

<!--
    · Contenido de la página del curso JavaScript para usuarios registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Curso JavaScript
                </h1>
                <p>
                    Este curso completo de JavaScript empieza desde un nivel básico pasando por las principales características y funcionalidades de uno de los lenguajes más demandados hoy en día como es JavaScript. Al finalizar este curso tendrás los conocimientos necesarios para utilizar JavaScript a nivel profesional. ¿Empezamos?
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/curso-javascript.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
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
                        <p>En este curso el alumno aprenderá a dominar JavaScript, convirtiéndose en un experto desarrollador front-end gracias al conocimiento adquirido sobre uno de los lenguajes más demandados del mercado.</p>

                        <p>JavaScript es el lenguaje de programación de la web por excelencia en la parte cliente. Es el único que puede ejecutarse en todos los navegadores sin necesidad de cargar plugins adicionales. Nos permite crear páginas dinámicas, dotando a nuestro sitio web de efectos y funcionalidades que extienden las posibilidades que nos ofrece HTML5.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>El docente que está a cargo del curso de JavaScript en ATCO es Marcos Alfonso. Licenciado en Ingeniería informática por la UCO cuenta con más de 15 años de experiencia como desarrollador web y docente. Su experiencia profesional en el sector privado es muy amplia y ha desarrollado proyectos muy importantes.</p>
                        <p>Debido a su extensa experiencia como docente y desarrollador, conoce a la perfección el lenguaje y sabe comunicar los conocimientos necesarios para que los alumnos de la academia consigan realizar el curso.</p>
                    </div>

                    <div class="tab-pane fade text-start" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
                        <p>El curso parte desde cero pero son necesarios conocimientos básicos de programación, da igual el lenguaje que sepas.</p>

                        <p>Es necesario dominar los lenguajes de HTML5 y CSS3 para un adecuado aprovechamiento del curso.</p>

                        <p>Para realizar el curso te aconsejamos utilizar el programa Visual Studio Code que es totalmente gratuito.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="salidas" role="tabpanel" aria-labelledby="salidas-tab">
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

            <div class="col-xl-3 col-lg-4 offset-xl-1 mt-md-5 mt-sm-5">
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
                        <p>24/04/2022</p>
                    </li>
                </ul>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</section>

<?php
    $u = new Usuarios();
    $finalCursoUsuario = $u -> estadoCursoUsuario($_SESSION['idUsuario'], 0);
    $temasTerminados = $_SESSION['cursos'][0]['temasTerminados'];
    if (!$finalCursoUsuario && $temasTerminados>0) {
        echo "<a class='boton' href='index.php?ctl=cursoJavascript#tema3'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    }

?>

<section>
    <div class="container acordeon">
        <div class="row my-5">
            <div class="col">
                <div class="accordion" id="temasCurso">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tema 1: Introducción a JavaScript
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="tema1" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Comenzamos el Curso JavaScript 2022 aprendiendo a utilizar la etiqueta script JavaScript (y a diferir su carga con el atributo defer) en tus proyectos frontend. No te pierdas este vídeo donde aprenderemos como enlazar un archivo JavaScript</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VwEChGsBD78" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tema 2: ¿Qué es JavaScript?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="tema2" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>El hoisting JavaScript es uno de los conceptos principales que debes entender. También llamado alzado JavaScript, eleva la declaración de variables y las funciones declaradas al inicio del programa.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/sv4-Lq495Qc" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 3: Variables
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema3" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Aprende las principales diferencias entre var vs let a la hora de declarar variables JavaScript. Por ejemplo, las variables declaradas con var tienen ámbito de función mientras que las variables let JavaScript tienen ámbito de bloque. También se comportan diferente a la hora de ser alzadas.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 4: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema4" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 5: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema5" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 6: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema6" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 7: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema7" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                        <h2 class="accordion-header" id="tema8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 8: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema8" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 9: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 10: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema10" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 11: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema11" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 12: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema12" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 13: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema13" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 14: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema14" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 15: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema15" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema16">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 16: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tema 17: XXXXXXXXXXXXXXXXX
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="tema17" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>XXXXXXXXXXXXXXXX</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="YouTube video player" class="youtube-iframe"></iframe>
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
        <div class="row">
            <div class="col">
                <form name="formEnviarMensaje" action="" method="POST" enctype="multipart/form-data">
                    <textarea rows="5" placeholder="Escribe tu mensaje (máximo 255 caracteres)..." name="nuevoMensaje"></textarea>
                    <input type="checkbox" name="aceptacionPoliticas" id="checkPoliticas">
                    <label>He leído y acepto las <a href="index.php?ctl=politicaPrivacidad" target="_blank">Políticas de Privacidad</a>.</label>
                    <input type="submit" value="Enviar mensaje" name="enviarMensaje" class="boton" />
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_SESSION['errores'])) {  //TODO Borrar después de tests
    print_r($_SESSION['errores']);
}
?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>