<?php ob_start(); ?>

<!--
    · Contenido de la página de Actualización de datos del perfil de usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Panel de administración
                </h1>
                <p>
                    Desde esta página puedes controlar algunos aspectos de la academia, ver estadísticas en tiempo real de la aplicación y mucho más. Recuerda que eres administrador y todo lo que hagas se queda guardado, así que... ¡cuidado con lo que tocas!
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/panel-administracion.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="panel-administracion">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Cursos totales</h2>
                    <div class="datos-administracion">
                        <?php
                        $cursosTotales = $a->cursosTotales();
                        echo $cursosTotales;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Alumnos totales</h2>
                    <div class="datos-administracion">
                        <?php
                        $alumnosTotales = $a->alumnosTotales();
                        echo $alumnosTotales;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Cursos finalizados</h2>
                    <div class="datos-administracion">
                        <?php
                        $cursosFinalizados = $a->cursosFinalizados();
                        echo $cursosFinalizados;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Temas terminados</h2>
                    <div class="datos-administracion">
                        <?php
                        $temasFinalizados = $a->temasFinalizados();
                        echo $temasFinalizados;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Usuarios newsletter</h2>
                    <div class="datos-administracion">
                        <?php
                        $usuariosNewsletter = $a->usuariosNewsletter();
                        echo $usuariosNewsletter;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="estadisticas">
                    <h2>Mensajes usuarios</h2>
                    <div class="datos-administracion">
                        <?php
                        $mensajesTotales = $a->mensajesTotales();
                        echo $mensajesTotales;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h2>Usuarios</h2>
                    <?php
                    $_SESSION['alumnos'] = $a->mostrarAlumnos();

                    echo "<table border='1' class='alumnosATCO'>";

                    foreach ($_SESSION['alumnos'] as $alumno) {
                        echo "<tr>";
                        echo "<td class='idAlumno'>";
                        echo $alumno['id'];
                        echo "</td>";
                        echo "<td class='fotoAlumno'>";
                        echo "<img src='/img" . $alumno['fPerfil'] . "' loading='lazy'>";
                        echo "</td>";
                        echo "<td class='nombreAlumno'>";
                        echo $alumno['nombre'] . " " . $alumno['apellidos'];
                        echo "</td>";
                        echo "<td  class='emailAlumno'>";
                        echo $alumno['email'];
                        echo "</td>";
                        echo "<td  class='direccionAlumno'>";
                        echo $alumno['direccion'];
                        echo "</td>";
                        echo "<td  class='localidadAlumno'>";
                        echo $alumno['localidad'];
                        echo "</td>";
                        echo "<td  class='cPostalAlumno'>";
                        echo $alumno['cPostal'];
                        echo "</td>";
                        echo "<td  class='verAlumno'>";
                        echo "<a href='index.php?ctl=perfilAlumno&id=" . $alumno['id'] . "'><ion-icon name='chevron-forward-circle'></ion-icon></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h2>Mensajes</h2>
                    <?php
                    $_SESION['mensajesAlumnos'] = $a->mostrarMensajes();

                    echo "<table border='1' class='mensajesATCO'>";

                    foreach ($_SESION['mensajesAlumnos'] as $mensaje) {
                        echo "<tr>";
                        echo "<td class='idMensaje'>";
                        echo $mensaje['id'];
                        echo "</td>";
                        echo "<td class='alumnoMensaje'>";
                        echo "<img src='/img" . $mensaje['fPerfil'] . "' loading='lazy'>";
                        echo "</td>";
                        echo "<td class='cursoMensaje'>";
                        switch ($mensaje["id_curso"]) {
                            case 0:
                                echo "<span class='tituloCurso'>";
                                echo "<img src='../../img/logo-js-png.png' alt='Logo JavaScript'>";
                                echo "</span>";
                                break;
                            case 1:
                                echo "<span class='tituloCurso'>";
                                echo "<img src='../../img/logo-angular-png.png' alt='Logo Angular'>";
                                echo "</span>";
                                break;
                            case 2:
                                echo "<span class='tituloCurso'>";
                                echo "<img src='../../img/logo-react-png.png' alt='Logo React'>";
                                echo "</span>";
                                break;
                            case 3:
                                echo "<span class='tituloCurso'>";
                                echo "<img src='../../img/logo-git-png.png' alt='Logo Git'>";
                                echo "</span>";
                                break;
                        }
                        echo "</td>";
                        echo "<td class='nombreMensaje'>";
                        echo $mensaje['nombre'] . " " . $mensaje['apellidos'];
                        echo "</td>";
                        echo "<td class='mensajeMensaje'>";
                        echo $mensaje['mensaje'];
                        echo "</td>";
                        echo "<td class='borrarMensajeAlumno'>";
                         echo "<form name='formContacto' action='index.php?ctl=panelAdministracion' method='POST' enctype='multipart/form-data'>";
                        echo "<input type='hidden' name='idMensaje' value='" . $mensaje['id'] . "' />"; //TODO Siempre borra el último mensaje
                        echo "<button type='submit' value='Borrar' name='borrarMensaje' >";
                        echo "<ion-icon name='trash-outline'></ion-icon>";
                        echo "</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>