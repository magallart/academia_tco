<?php ob_start(); ?>

<!--
    · Contenido de la página del curso Git para los usuarios Registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
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
                        <p>En este curso el alumno aprenderá a dominar JavaScript, convirtiéndose en un experto desarrollador front-end gracias al conocimiento adquirido sobre uno de los lenguajes más demandados del mercado.</p>

                        <p>JavaScript es el lenguaje de programación de la web por excelencia en la parte cliente. Es el único que puede ejecutarse en todos los navegadores sin necesidad de cargar plugins adicionales. Nos permite crear páginas dinámicas, dotando a nuestro sitio web de efectos y funcionalidades que extienden las posibilidades que nos ofrece HTML5.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>Contenido Docente</p>
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
$temasTerminados = 0;
$nombreCurso = $_GET['ctl'];
foreach ($_SESSION['cursos'] as $curso) {
    if ($curso['nombre'] == 'JavaScript' && $nombreCurso == 'cursoJavascript') {
        $idCursoPagina = 0;
    }

    if ($curso['nombre'] == 'Angular' && $nombreCurso == 'cursoAngular') {
        $idCursoPagina = 1;
    }

    if ($curso['nombre'] == 'React' && $nombreCurso == 'cursoReact') {
        $idCursoPagina = 2;
    }

    if ($curso['nombre'] == 'Git' && $nombreCurso == 'cursoGit') {
        $idCursoPagina = 3;
    }
}


$idCursoArrayCursosUsuario = array_search('Git', array_column($_SESSION['cursos'], 'nombre'));
$temasTerminados = $_SESSION['cursos'][$idCursoArrayCursosUsuario]['temasTerminados'];
echo "idCursoArrayCursosUsuario: " . $idCursoArrayCursosUsuario;
echo "<br>";
echo "idCurso: " . $_SESSION['cursos'][$idCursoArrayCursosUsuario]['id'];
echo "<br>";
echo "temas terminados:" . $temasTerminados;


$u = new Usuarios();
$finalCursoUsuario = $u->estadoCursoUsuario($_SESSION['idUsuario'], $_SESSION['cursos'][$idCursoArrayCursosUsuario]['id']);

if ($_SESSION['cursos'][$idCursoArrayCursosUsuario]['id'] = 0 || $_SESSION['cursos'][$idCursoArrayCursosUsuario]['id'] > 0) {
    $temasTerminados = $_SESSION['cursos'][$idCursoArrayCursosUsuario]['temasTerminados'];
} else {
    $temasTerminados = 0;
}

if (!$finalCursoUsuario && $temasTerminados > 0) {
    echo "<div class='estadoCurso'>";
    echo "<a class='boton' href='index.php?ctl=cursoAngular#tema" . $temasTerminados . "'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if ($finalCursoUsuario) {
    echo "<div class='estadoCurso'>";
    echo "<p>¡Enhorabuena! Has completado todos los temas del curso de Angular, ¿quieres hacer otro curso?.</p>";
    echo "<a class='boton' href='index.php?ctl=cursos'>Ver todos los cursos <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if ($temasTerminados === 0) {
    echo '<form name="formEmpezarCurso" action="" method="POST" enctype="multipart/form-data">';
    echo '<input type="submit" value="Empezar curso" name="empezarCurso" class="boton" />';
    echo '</form>';
}

?>

<section>
    <div class="container acordeon">
        <div class="row my-5">
            <div class="col">
                <div class="accordion" id="temasCurso">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Tema 1: Introducción a Git
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="tema1" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Comenzamos un nuevo curso donde aprenderemos el uso de esta imprescindible herramienta para todo programador.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/ANF1X42_ae4" title="Curso Git: Tema 1" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(1, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Tema 2: Creando repositorio
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="tema2" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos cómo agregar un repositorio de un proyecto y cómo agregar archivos al mismo.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/ANF1X42_ae4" title="Curso Git: Tema 2" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(2, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Tema 3: Subiendo a GitHub
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="tema3" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos algunos comandos más de Git y vemos cómo subir el proyecto a GitHub.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/0UlqvTJzOL4" title="Curso Git: Tema 3" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(3, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Tema 4: Clonación y tags
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="tema4" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos cómo crear tags, como subirlas a GitHub y también cómo clonar nuestros repositorios en local.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/axXlYdyDD3I" title="Curso Git: Tema 4" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(4, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Tema 5: Ramas o Branches
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="tema5" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo comenzamos a ver una de las características más potentes de Git: las ramas o branches.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/q9LJIHDgJtE" title="Curso Git: Tema 5" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(5, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Tema 6: Visual Studio Code con Git I
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="tema6" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo utilizamos Visual Studio Code con Git donde vemos todas las ayudas que nos ofrece este magnífico editor gratuito a la hora de trabajar con Git.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/w2o_rH4b5tA" title="Curso Git: Tema X" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(6, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="tema7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Tema 7: Visual Studio Code con Git II
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="tema7" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos algunas de las herramientas de Visual Studio Code para trabajar con ramas.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/EKCRjnvron4" title="Curso Git: Tema 7" class="youtube-iframe"></iframe>
                                </div>
                                <?php
                                botonesAcordeon(7, $temasTerminados, $finalCursoUsuario);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            Tema 8: Visual Studio Code con GitHub I
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="tema8" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a ver cómo subir un proyecto a GitHub desde Visual Studio Code.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/ngow7sPfSDQ" title="Curso Git: Tema 8" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(8, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            Tema 9: Visual Studio Code con GitHub II
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Vemos en este vídeo cómo crear ramas en GitHub, hacer merge y sincronizar con Visual Studio Code.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/8V8xA_TRPXw" title="Curso Git: Tema 9" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(9, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            Tema 10: Fork
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="tema10" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos qué es y como hacer fork con repositorios en GitHub. Es una característica potente para crear proyectos nuevos a partir de otros y también para colaborar en equipo.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/4YlHQAETkPs" title="Curso Git: Tema 10" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            finalizarCurso(10, $temasTerminados, $finalCursoUsuario);
                            ?>
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
                    foreach ($_SESSION['mensajesCursoGit'] as $mensajes) {
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