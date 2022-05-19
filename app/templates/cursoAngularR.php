<?php ob_start(); ?>

<!--
    · Contenido de la página del curso de Angular para usuarios registrados. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
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

<section class="pt-5" id="cursoTop">
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
                        <p>En este curso el alumno aprenderá a dominar Angular, entendiendo completamente la arquitectura detrás de una aplicación Angular y cómo usarla.</p>
                        <p>Cuando hayas completado todos los temas, serás capaz de crear aplicaciones de una sola página (SPA-Single Page Application) con uno de los frameworks de JavaScript más modernos que existen al día de hoy.</p>
                        <p>Desarrollarás aplicaciones web modernas, complejas, con capacidad de respuesta y escalables con Angular.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                        <p>El docente que está a cargo del curso de Angular en ATCO es Luis Benavent. Titulado en Desarrollo Web por el IES Abastos en el año 2000 y posee una infinidad de cursos particulares realizados de forma autodidacta.</p>
                        <p>Ha trabajado en proyectos muy importantes y domina Angular a la perfección, por lo que el curso programado por Luis está totalmente actualizado con las últimas tecnologías del framework.</p>
                        <p>Estás en el sitio correcto si quieres aprender Angular con un docente experimentado en la materia.</p>
                    </div>

                    <div class="tab-pane fade text-start" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
                        <p>El curso parte desde cero pero son necesarios conocimientos básicos de programación, da igual el lenguaje que sepas.</p>
                        <p>Es necesario dominar los lenguajes de HTML5 y CSS3 para un adecuado aprovechamiento del curso.</p>
                        <p>Se necesita un nivel avanzado de JavaScript y TypeScript.</p>
                        <p>Para realizar el curso te aconsejamos utilizar el programa Visual Studio Code que es totalmente gratuito.</p>
                    </div>
                    <div class="tab-pane fade text-start" id="salidas" role="tabpanel" aria-labelledby="salidas-tab">
                        <p>Realiza esta formación y te prepararemos para trabajar, tanto por cuenta ajena como propia, como profesional en las siguientes áreas:</p>
                        <ul>
                            <li>Desarrollador front-end.</li>
                            <li>Desarrollador Web.</li>
                            <li>Programador de aplicaciones web Angular.</li>
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
                        <p>32 temas</p>
                    </li>
                    <li>
                        <ion-icon name="finger-print-outline"></ion-icon>
                        <p>Inscritos</p>
                        <p>16 alumnos</p>
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
                        <p>28/05/2022</p>
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


$idCursoArrayCursosUsuario = array_search('Angular', array_column($_SESSION['cursos'], 'nombre'));

 
if(!buscarValorEnArrayMultidimensional('Angular', $_SESSION['cursos'], 'nombre')) {
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
    echo "<a class='boton' href='index.php?ctl=cursoAngular#tema" . $temasTerminados . "'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
    echo "</div>";
}

if ($finalCursoUsuario) {
    echo "<div class='estadoCurso'>";
    echo "<p>¡Enhorabuena! Has completado todos los temas del curso de Angular, ¿quieres hacer otro curso?.</p>";
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
    echo "<a class='boton' href='index.php?ctl=cursoAngular#tema1'>Seguir con el curso <ion-icon name='arrow-forward-circle-outline'></ion-icon></a>";
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
                                Tema 1: Introducción a Angular
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="tema1" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>Al fin os traemos el curso de Angular que hemos preparado con mucho cariño. Nos lo habéis pedido mucho por las redes sociales y aquí lo tenéis.</p>
                                <p>En este primer vídeo vemos el temario del curso, los conocimientos previos requeridos y vemos qué es Angular y sus principales características. Espero que el curso sea de vuestro agrado.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/fXpMiweCC_o" title="Curso Angular: Tema 1" class="youtube-iframe"></iframe>
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
                                Tema 2: Instalación software & Primera App
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="tema2" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En esta segunda entrega del curso instalamos el software necesario y probamos el buen funcionamiento del entorno ejecutando una primera aplicación.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/nTaC_0FgqSU" title="Curso Angular: Tema 2" class="youtube-iframe"></iframe>
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
                                Tema 3: Estructura y modificación de la App
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="tema3" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos la estructura de nuestra App de Angular y cómo modificar la misma desde Visual Studio Code.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/FfqLD0Yoxu0" title="Curso Angular: Tema 3" class="youtube-iframe"></iframe>
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
                                Tema 4: Estructura y flujo
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="tema4" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo seguimos profundizando en la estructura de una App Angular y vemos el flujo de ejecución.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/uFA09pl_f4s" title="Curso Angular: Tema 4" class="youtube-iframe"></iframe>
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
                                Tema 5: Componentes I
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="tema5" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos cómo crear componentes en Angular tanto de forma manual como de forma automática.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/CitMo3hip6Y" title="Curso Angular: Tema 5" class="youtube-iframe"></iframe>
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
                                Tema 6: Componentes II
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="tema6" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos la estructura de la App creada hasta el momento, viendo desde el código fuente del navegador la estructura de los componentes. Vemos también cómo crear componentes inline.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/0DfSuph1OyZ0" title="Curso Angular: Tema 6" class="youtube-iframe"></iframe>
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
                                Tema 7: Interpolación I
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="tema7" data-bs-parent="#temasCurso">
                            <div class="accordion-body">
                                <p>En este vídeo vemos qué es y cómo funciona la interpolación de String en Angular.</p>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/KfYyWNqJaVc" title="Curso Angular: Tema 7" class="youtube-iframe"></iframe>
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
                            Tema 8: Interpolación II
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="tema8" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Todas las funciones JavaScript retornan de forma implícita el valor undefined. Por supuesto podemos hacer que JavaScript retorne cualquier valor usando return de forma explícita. Eso es lo que aprenderás en esta lección del Curso de JavaScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/-yXkW7JTwN8" title="Curso Angular: Tema 8" class="youtube-iframe"></iframe>
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
                            Tema 9: Property Binding
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="tema9" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos una característica importante de Angular: Property Binding. Con Property Binding conseguimos modificar el estado de un componente web de forma dinámica creando un vínculo entre el componente y sus propiedades.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/ILO7-5Hnxt8" title="Curso Angular: Tema 9" class="youtube-iframe"></iframe>
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
                            Tema 10: Event Binding
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="tema10" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos qué es el "event binding". Cómo crear un vínculo entre los objetos del template y las funciones/eventos de TypeScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/FPjFXQf1pqM" title="Curso Angular: Tema 10" class="youtube-iframe"></iframe>
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
                            Tema 11: Two way binding
                        </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="tema11" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos qué es el binding bidireccional (two way binding), en qué consiste y vemos la sintaxis con un ejemplo sencillo.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/s1cbV27o6LE" title="Curso Angular: Tema 11" class="youtube-iframe"></iframe>
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
                            Tema 12: Práctica guiada I
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="tema12" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a elaborar una práctica guiada sencilla para poner en práctica todo lo aprendido hasta ahora. Elaboramos una mini-calculadora para lo que utilizaremos interpolación, two way binding y algunos conocimientos JavaScript.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/WLaD-Tg6-bQ" title="Curso Angular: Tema 12" class="youtube-iframe"></iframe>
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
                            Tema 13: Práctica guiada II
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="tema13" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Terminamos la mini-calculadora. Utilizamos event-binding para llamar a las funciones desde los botones del formulario y aplicamos bootstrap.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/tAzKlk3dpI8" title="Curso Angular: Tema 13" class="youtube-iframe"></iframe>
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
                            Tema 14: Directivas I
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="tema14" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos un capítulo importante: las directivas. Qué son, para qué sirven y tipos Vemos la directiva ngIf que nos permite construir condicionales y modificar el DOM.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/1NnPbUYZZ5I" title="Curso Angular: Tema 14" class="youtube-iframe"></iframe>
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
                            Tema 15: Directivas II
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="tema15" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos cómo utilizar un else con la directiva *ngIF y vemos también cómo utilizar la directiva *ngFor.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/nAMX042tfhU" title="Curso Angular: Tema 15" class="youtube-iframe"></iframe>
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
                            Tema 16: Directivas III
                        </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>
                                Comenzamos en este vídeo una pequeña práctica recopilatorio de lo visto hasta ahora. Creamos una app donde utilizaremos directivas, interpolación, POO etc.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/t7C3cbDAdzM" title=" Curso Angular: Tema 16" class="youtube-iframe"></iframe>
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
                            Tema 17: Directivas IV
                        </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Terminamos la pequeña práctica recopilatorio: agregamos el botón al formulario y construimos el método que responde al evento del botón.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/e-RjU6a09Ak" title=" Curso Angular: Tema 17" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(17, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema18">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            Tema 18: Directivas V
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Continuamos viendo directivas en este vídeo. Concretamente vemos las directivas ngStyle y ngClass que nos permitirán modificar propiedades css en nuestra aplicación de forma dinámica.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/B3kWqrSdmgw" title=" Curso Angular: Tema 18" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(18, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema19">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            Tema 19: Comunicación entre componentes I
                        </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a ver la comunicación entre componentes. Vemos cómo pasar información desde un componente padre a un componente hijo.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/cXMmb2jqTJM" title=" Curso Angular: Tema 19" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(19, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema20">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            Tema 20: Comunicación entre componentes II
                        </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos cómo transferir información del componente hijo al componente padre utilizando el decorador @Output.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/L5IeQ2tj9c4" title=" Curso Angular: Tema 20" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(20, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema21">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            Tema 21: Servicios I
                        </button>
                    </h2>
                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a ver los servicios. vemos qué son y para qué sirven. Creamos un servicio sencillo de ejemplo con la aplicación empleados de vídeos anteriores.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/W1nQXZwXKb0" title=" Curso Angular: Tema 21" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(21, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema22">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            Tema 22: Servicios II
                        </button>
                    </h2>
                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos cómo crear un Data Service, esto es, un Servicio de datos.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/TpqPFDzPUdg" title=" Curso Angular: Tema 22" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(22, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema23">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            Tema 23: Servicios III
                        </button>
                    </h2>
                    <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Seguimos avanzando en el curso de Angular. Vemos en este vídeo cómo llamar a un servicio desde otro servicio.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/BUjUTfsZ6lo" title=" Curso Angular: Tema 23" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(23, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema24">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            Tema 24: Routing I
                        </button>
                    </h2>
                    <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Comenzamos a ver en este vídeo el tema del routing. Creamos una barra de navegación y varios componentes para navegar por ellos.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/BhRpBIhRWbY" title=" Curso Angular: Tema 24" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(24, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema25">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                            Tema 25: Routing II
                        </button>
                    </h2>
                    <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo movemos el contenido del componente principal al componente Home y creamos el resto de rutas y enlaces.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/nDsyhYQQssk" title=" Curso Angular: Tema 25" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(25, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema26">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                            Tema 26: Routing III
                        </button>
                    </h2>
                    <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Continuamos con el routing viendo en esta ocasión cómo crear rutas de forma programática a cualquier lugar de nuestro sitio web. También vemos cómo crear redireccionamientos automáticos.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/kME1QydQ9CA" title=" Curso Angular: Tema 26" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(26, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema27">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                            Tema 27: Routing IV
                        </button>
                    </h2>
                    <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo comenzamos a ver cómo pasar valores a las rutas. Utilizamos la URL como medio de transporte para pasar información de un componente a otro.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/23EX5-e2rjs" title=" Curso Angular: Tema 27" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(27, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema28">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                            Tema 28: Routing V
                        </button>
                    </h2>
                    <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Terminamos de crear la actualización de registro utilizando valores en ruta que comenzamos en el vídeo anterior.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/yPsw4gfBtmU" title=" Curso Angular: Tema 28" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(28, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema29">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                            Tema 29: Routing VI
                        </button>
                    </h2>
                    <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Vemos en este vídeo cómo eliminar registros reutilizando todo lo creado para actualizar.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/HP92RvER-8g" title=" Curso Angular: Tema 29" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(29, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema30">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                            Tema 30: Routing VII
                        </button>
                    </h2>
                    <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos cómo pasar valores de un componente a otro a través de la URL con queryParams.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/KOtke8xyuSY" title=" Curso Angular: Tema 30" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(30, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema31">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                            Tema 31: Routing VIII. Páginas de error
                        </button>
                    </h2>
                    <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="tema16" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>En este vídeo vemos cómo crear páginas de error personalizadas para aquellos recursos web que no existen en nuestra aplicación.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/9yTd7qM0IME" title=" Curso Angular: Tema 31" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            botonesAcordeon(31, $temasTerminados, $finalCursoUsuario);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tema32">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse17">
                            Tema 32: Firebase
                        </button>
                    </h2>
                    <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="tema32" data-bs-parent="#temasCurso">
                        <div class="accordion-body">
                            <p>Comenzamos a ver en este vídeo la plataforma en la nube de Google Firebase. Esto nos permitirá almacenar los datos de nuestras aplicaciones Angular de forma permanente.</p>
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/VKWLM70o5Nc" title="Curso Angular: Tema 32" class="youtube-iframe"></iframe>
                            </div>
                            <?php
                            finalizarCurso(32, $temasTerminados, $finalCursoUsuario);
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
        </div>
        <div class="row">
            <div class="col">
                <?php
                mensajeUsuarioCurso($_SESSION['emailUsuario'], $_SESSION['mensajesCursoAngular'], 'email');
                ?>
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