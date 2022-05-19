<?php ob_start(); ?>

<!--
    · Contenido de la página del curso React para los usuarios Registrados. 
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
                        <p>React es el framework más utilizado hoy en día. Se basa en el lenguaje JavaScript y goza de una alta popularidad entre los desarrolladores por todo lo que es capaz de hacer este framework. Tiene una curva de aprendizaje muy rápida, por lo que será fácil introducir conceptos de React si tienes una base sólida de JavaScript.</p>
                        <p>Al terminar este curso tendrás los conocimientos necesarios para sacarle partido a este fantástico framework y poder hacer cursos más avanzados donde aprender más funcionalidades.</p>
                        <p>Es de vital importancia tener conocimientos avanzados de JavaScript para realizar este curso de una forma adecuada.</p>
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
                        <p>11 temas</p>
                    </li>
                    <li>
                        <ion-icon name="finger-print-outline"></ion-icon>
                        <p>Inscritos</p>
                        <p>87 alumnos</p>
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


$idCursoArrayCursosUsuario = array_search('React', array_column($_SESSION['cursos'], 'nombre'));

 
if(!buscarValorEnArrayMultidimensional('React', $_SESSION['cursos'], 'nombre')) {
    $cursoAputadoUsuario = false;
} else {
    $cursoAputadoUsuario = true;
}

if($cursoAputadoUsuario) {
    $temasTerminados = $_SESSION['cursos'][$idCursoArrayCursosUsuario]['temasTerminados'];
}

$u = new Usuarios();
$finalCursoUsuario = $u->estadoCursoUsuario($_SESSION['idUsuario'], $_SESSION['cursos'][$idCursoArrayCursosUsuario]['id']);

if($_SESSION['cursos'][$idCursoArrayCursosUsuario]['id'] == 0 || $_SESSION['cursos'][$idCursoArrayCursosUsuario]['id'] > 0){
    $temasTerminados = $_SESSION['cursos'][$idCursoArrayCursosUsuario]['temasTerminados'];
} else {
    $temasTerminados = 0;
}

if (!$finalCursoUsuario && $temasTerminados > 0) {
    echo "<div class='estadoCurso'>";
    echo "<a class='boton' href='index.php?ctl=cursoReact#tema" . $temasTerminados . "'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if ($finalCursoUsuario) {
    echo "<div class='estadoCurso'>";
    echo "<p>¡Enhorabuena! Has completado todos los temas del curso de React, ¿quieres hacer otro curso?.</p>";
    echo "<a class='boton' href='index.php?ctl=cursos'>Ver todos los cursos <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if (!$cursoAputadoUsuario) {
    echo '<form name="formEmpezarcurso" action="" method="POST" enctype="multipart/form-data">';
    echo '<input type="submit" value="Empezar curso" name="empezarCurso" class="boton" />';
    echo '</form>';
}

if (!$finalCursoUsuario && $cursoAputadoUsuario && $temasTerminados === 0) {
    echo "<div class='estadoCurso'>";
    echo "<a class='boton' href='index.php?ctl=cursoReact#tema1'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
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
                                Tema 1: Componentes, State, JSX
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="tema1" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>¿Qué es React? ¿Por qué deberías aprenderlo? ¿Por qué lo necesitamos? ¿Qué es JSX 🤔? Props y State. Eventos. Renderizado condicional y useState.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/T_j60n1zgu0" title="Curso React: Tema 1" class="youtube-iframe"></iframe>
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
                                Tema 2: Crea una app con React
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="tema2" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Ahora que ya sabemos qué es React ⚛️, vamos a crear una pequeña aplicación desde cero para poner en práctica lo que sabemos, hacer un fetching de datos, tener un entorno de desarrollo y añadirle rutas.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/QBLbXgeXMU8" title="Curso React: Tema 2" class="youtube-iframe"></iframe>
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
                                Tema 3: Creando Custom Hooks y usando Context
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="tema3" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En la clase de hoy veremos más hooks, cómo crear nuestros propios hooks (Custom Hooks) y cómo podemos usar el contexto para crear una especie de estado global.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/2qgs7buSnHQ" title="Curso React: Tema 3" class="youtube-iframe"></iframe>
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
                                Tema 4: Lazy Load, Suspense y paginación con React
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="tema4" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Aprende a usar React.Lazy, el componente de Suspense y cómo hacer paginación fácilmente con React.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VcxXipZg1-0" title="Curso React: Tema 4" class="youtube-iframe"></iframe>
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
                                Tema 5: CSS Grid, Infinite Scroll y Tests en nuestra app de React
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="tema5" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Vamos a seguir con nuestra aplicación de Gifs en React para pasar a usar CSS Grid en nuestras búsquedas. Además, vamos a hacer que nuestra app tenga infinite scroll usando React y le añadiremos algunos tests para ver cómo funcionan.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/oCHdFiCgOSE" title="Curso React: Tema 5" class="youtube-iframe"></iframe>
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
                                Tema 6: React.memo, mejorar el rendimiento y hacer deploy
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="tema6" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Vamos a optimizar nuestra aplicación para evitar re-renders innecesarios gracias al uso del profiler de React y a deployar nuestra app con Vercel.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/Wo7_OVtu1ls" title="Curso React: Tema X" class="youtube-iframe"></iframe>
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
                                Tema 7: SEO con React y Deploy integrado con GitHub
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="tema7" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Hoy veremos cómo añadir SEO a una aplicación generada con create-react-app.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/b-pwpHaYOTI" title="Curso React: Tema 7" class="youtube-iframe"></iframe>
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
                            Tema 8: useReducer y tests de hooks
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="tema8" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a ver cómo subir un proyecto a GitHub desde Visual Studio Code.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/Wjy_nlYXTik" title="Curso React: Tema 8" class="youtube-iframe"></iframe>
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
                            Tema 9: Login y Sesión de Usuarios
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Aprendermos a hacer que tu frontend con React pueda autentificar a un usuario con un backend que usa JWT. Además usamos hooks, hablamos de buenas prácticas y hacemos pantallas de carga</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/VT5S9Y49SYs" title="Curso React: Tema 9" class="youtube-iframe"></iframe>
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
                            Tema 10: Registro de usuario, React.createPortal y gestión de favoritos
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="tema10" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En esta clase vamos a ver cómo podemos registrar usuarios utilizando nuestra API de Deno. Para crear el formulario vamos a usar Formik. Además le daremos un estilo visual mejor y, para ello, vamos a aprender a usar el método createPortal, para renderizar componentes en cualquier parte </p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/dtbI6gDnTFU" title="Curso React: Tema 10" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(10, $temasTerminados, $finalCursoUsuario);

                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            Tema 11: CSS en JS y Styled Components
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Aprende a usar Emotion con React. Aprende a cómo usar CSS en JS con React y cómo usar Styled Components.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/DjVGdUM1dHQ" title="Curso React: Tema 9" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            finalizarCurso(11, $temasTerminados, $finalCursoUsuario);
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