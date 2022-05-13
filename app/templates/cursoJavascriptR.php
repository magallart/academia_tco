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

<section class="pt-5">
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
$finalCursoUsuario = $u->estadoCursoUsuario($_SESSION['idUsuario'], 0);
$temasTerminados = $_SESSION['cursos'][0]['temasTerminados'];
if (!$finalCursoUsuario && $temasTerminados > 0) {
    echo "<div class='estadoCurso'>";
    echo "<a class='boton' href='index.php?ctl=cursoJavascript#tema" . $temasTerminados . "'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if ($finalCursoUsuario) {
    echo "<div class='estadoCurso'>";
    echo "<p>¡Enhorabuena! Has completado todos los temas del curso de JavaScript, ¿quieres hacer otro curso?.</p>";
    echo "<a class='boton' href='index.php?ctl=cursos'>Ver todos los cursos <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
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
                                Tema 1: Introducción a JavaScript
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="tema1" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Comenzamos el Curso JavaScript 2022 aprendiendo a utilizar la etiqueta script JavaScript (y a diferir su carga con el atributo defer) en tus proyectos frontend. No te pierdas este vídeo donde aprenderemos como enlazar un archivo JavaScript</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/VwEChGsBD78" title="Curso JavaScript: Tema 1" class="youtube-iframe"></iframe>
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
                                Tema 2: ¿Qué es JavaScript?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="tema2" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>El hoisting JavaScript es uno de los conceptos principales que debes entender. También llamado alzado JavaScript, eleva la declaración de variables y las funciones declaradas al inicio del programa.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/sv4-Lq495Qc" title="Curso JavaScript: Tema 2" class="youtube-iframe"></iframe>
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
                                Tema 3: Variables
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="tema3" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Aprende las principales diferencias entre var vs let a la hora de declarar variables JavaScript. Por ejemplo, las variables declaradas con var tienen ámbito de función mientras que las variables let JavaScript tienen ámbito de bloque. También se comportan diferente a la hora de ser alzadas.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/iIkeGM1I-cM" title="Curso JavaScript: Tema 3" class="youtube-iframe"></iframe>
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
                                Tema 4: Constantes
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="tema4" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Aprende la diferencia entre var, let y const JavaScript. Con const puedes declarar variables JavaScript que mantienen una asociación constante. Usar const no crea variables inmutables, como comprobarás durante la lección.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/ESOAa3SX2yg" title="Curso JavaScript: Tema X" class="youtube-iframe"></iframe>
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
                                Tema 5: Aprende a usar los 3 tipos de funciones
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="tema5" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Existen diferentes tipos de funciones JavaScript y en esta lección del Curso de JavaScript te enseñaré las tres formas principales de crear funciones en JavaScript: funciones declaradas, expresiones funcionales y funciones flecha.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/-O6HUo-P4Mk" title="Curso JavaScript: Tema 5" class="youtube-iframe"></iframe>
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
                                Tema 6: Diferencia entre parámetros y argumentos
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="tema6" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Para que las funciones JavaScript sean más reutilizables declarar parámetros en ellas a los que luego enviamos valores a través de argumentos JavaScript. En esta lección aprenderás como funcionan y qué diferencia hay entre parámetros y argumentos JavaScript, incluso cómo declarar valores por defecto para tus parámetros JavaScript.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/0IF1o38RV_I" title="Curso JavaScript: Tema X" class="youtube-iframe"></iframe>
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
                                Tema 7: Argumentos y Parámetros Rest JavaScript
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="tema7" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Con los parámetros rest JavaScript podemos aceptar cualquier número de argumentos y recorrerlos como Array, con todas las ventajas que eso ofrece. En esta lección aprenderás cómo funcionan los parámetros y argumentos rest JavaScript, incluso cómo utilizar el "viejo" objeto arguments de las funciones.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/7xARdwFIdEs" title="Curso JavaScript: Tema 7" class="youtube-iframe"></iframe>
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
                            Tema 8: Return valor
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="tema8" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Todas las funciones JavaScript retornan de forma implícita el valor undefined. Por supuesto podemos hacer que JavaScript retorne cualquier valor usando return de forma explícita. Eso es lo que aprenderás en esta lección del Curso de JavaScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/uEI0ceOb5nc" title="Curso JavaScript: Tema 8" class="youtube-iframe"></iframe>
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
                            Tema 9: Closures
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Los closures JavaScript forman parte de la mitología del lenguaje, sin embargo son una pieza troncal de la naturaleza de JavaScript. Si quieres entender JavaScript un poco más es imprescindible que aprendas a ver y a utilizar a tu favor los closures JavaScript. </p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/8Bn99zamN_w" title="Curso JavaScript: Tema 9" class="youtube-iframe"></iframe>
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
                            Tema 10: IFFE
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="tema10" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En esta lección hablaremos sobre los IFFES. Te enseñaré qué es un IFFE y en qué situaciones utilizarlo.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/xOljrHcYWGM" title="Curso JavaScript: Tema 10" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(10, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            Tema 11: Callbacks
                        </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="tema11" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Nueva lección del Curso de JavaScript a fondo donde te enseñaré que es un Callback JavaScript, cómo funcionan y en qué situaciones utilizarlos (ya los has usado en este curso antes).</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/IJNaoJokDco" title="Curso JavaScript: Tema 11" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(11, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            Tema 12: Objeto THIS
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="tema12" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>El objeto this de JavaScript puede parecer confuso pero no lo es tanto. En esta lección te explicaré para qué sirve this en JavaScript paso a paso y con ejemplos. Entender cómo funciona this en JavaScript es vital para entender el lenguaje en su totalidad.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/npnXwBNIbO4" title="Curso JavaScript: Tema 12" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(12, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema13">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            Tema 13: Arrays I
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="tema13" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Los arrays son una herramienta fundamental en cualquier lenguaje de programación debido a su gran utilidad. En esta lección veremos los Arrays o Arreglos a fondo.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/xzzctD0Y4Rw" title="Curso JavaScript: Tema 13" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(13, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema14">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            Tema 14: Arrays II
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="tema14" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Saber manipular Arrays JavaScript es una de las principales habilidades que debes desarrollar como programador Web. En esta lección te enseñaré a dominar las Arrays JavaScript de forma práctica y sencilla, para que puedas comenzar a aplicar lo aprendido en tus proyectos JavaScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/ywTq6VUpgnE" title="Curso JavaScript: Tema 14" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(14, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema15">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            Tema 15: Arrays: ordenación
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="tema15" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Aprende a utilizar las funciones de orden mayor JavaScript (higher order functions), ya que son MUY poderosas e imprescindibles para trabajar con Arrays.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/4hrQtbaHVCQ" title="Curso JavaScript: Tema 15" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(15, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema16">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            Tema 16: Arrays: bucle for of
                        </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>
                                Hemos visto casi todas las formas de recorrer Arrays, pero nos queda una muy importante. Si aprendes a manejar el bucle for...of y entiendes que son los iterables tienes, en esencia, el poder de atravesar cualquier valor JavaScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/nzS6oOWa_8U" title=" Curso JavaScript: Tema 16" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(16, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema17">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            Tema 17: Arrays: fusiones
                        </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="tema17" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Aprende a juntar elementos de varios Arrays JavaScript en esta lección de la Carrera Frontend. Ten enseñaré 2 métodos para concatenar Arrays JavaScript, el primero es más moderno y el segundo es "el de toda la vida".</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/y8LH49Y_9g0" title="Curso JavaScript: Tema 17" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(17, $temasTerminados, $finalCursoUsuario);
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