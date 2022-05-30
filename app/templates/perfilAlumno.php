<?php ob_start(); ?>

<!--
    · Contenido de la página de Perfil de Usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center order-md-1 order-sm-2">
                <h1 class="title-header">
                    Perfil de <?php echo $_SESSION['perfilAlumno']['nombreUsuario'] . " " . $_SESSION['perfilAlumno']['apellidosUsuario'] ?>
                </h1>
                <p><strong>Tienes permisos de administrador.</strong></p>
                <p>
                    Estás viendo la página de perfil del usuario <?php echo $_SESSION['perfilAlumno']['nombreUsuario']  . " " .  $_SESSION['perfilAlumno']['apellidosUsuario'] ?>, aquí puedes cambiar sus datos, ver los cursos activos y los mensajes del usuario.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-sm-center order-md-2 order-sm-1">
                <img src="../img/<?php echo  $_SESSION['perfilAlumno']['fPerfil'] ?>" class="d-block mx-lg-auto mx-sm-auto img-fluid fotoPerfilUsuario" alt="Foto de perfil del alumno" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<div class="container perfil py-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 p-5">
            <h2>Datos de la cuenta</h2>
            <?php 
            if (isset($_GET['id'])) {
                $idPerfilAlumno = recoge('id');
            }
            
            echo "<form name='formPerfil' action='index.php?ctl=perfilAlumno&id=" . $idPerfilAlumno ."' method='POST' enctype='multipart/form-data'>";
            ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombreAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['nombreUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidosAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['apellidosUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-outline">
                            <label for="email">Email</label>
                            <input type="text" name="emailAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['emailUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-outline">
                            <label for="fNacimiento">Fecha nacimiento</label>
                            <input type="text" name="fNacimientoAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['fnacimientoUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-outline">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccionAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['direccionUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="cPostal">Código Postal</label>
                            <input type="text" name="cPostalAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['cpostalUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="localidad">Localidad</label>
                            <input type="text" name="localidadAlumno" placeholder="<?php echo $_SESSION['perfilAlumno']['localidadUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <input type="submit" value="Actualizar Datos" name="actualizarDatos" class="boton" />
                <input type="submit" value="Borrar Usuario" name="borrarUsuario" class="boton" />
            </form>

        </div>
        <div class="col-lg-6 col-md-12 p-5">
            <div class="cursosApuntados mt-2">
                <h2>Cursos del usuario</h2>
                <?php
                $cursos = array(); 
                $infoAlumno['cursos'] = $u->getCursosUsuario($idPerfilAlumno);
                $_SESSION['perfilAlumno']['cursos'] = $infoAlumno['cursos'];

                foreach ($infoAlumno['cursos']  as $cursosUsuario) {
                    switch ($cursosUsuario["id"]) {
                        case 0:
                            echo "<div class='linkCurso'>";
                            echo "<a href='index.php?ctl=cursoJavascript' alt='Enlace a curso de Javascript'><img src='../../img/logo-js.jpg' alt='Logo JavaScript'></a>";
                            echo "</div>";
                            break;
                        case 1:
                            echo "<div class='linkCurso'>";
                            echo "<a href='index.php?ctl=cursoAngular' alt='Enlace a curso de Angular'><img src='../../img/logo-angular.jpg' alt='Logo Angular'></a>";
                            echo "</div>";
                            break;
                        case 2:
                            echo "<div class='linkCurso'>";
                            echo "<a href='index.php?ctl=cursoReact' alt='Enlace a curso de React'><img src='../../img/logo-react.jpg' alt='Logo React'></a>";
                            echo "</div>";
                            break;
                        case 3:
                            echo "<div class='linkCurso'>";
                            echo "<a href='index.php?ctl=cursoGit' alt='Enlace a curso de Git'><img src='../../img/logo-git.jpg' alt='Logo Git'></a>";
                            echo "</div>";
                            break;
                    }
                }
                ?>
            </div>

            <h2>Últimos mensajes del usuario</h2>
            <div class="mensajes">
                <?php
                $u = new Usuarios();
                $_SESSION['mensajes'] = $u->getMensajesUsuario($_SESSION['perfilAlumno']['idUsuario']);
                foreach ($_SESSION['mensajes'] as $mensajes) {
                    echo "<div class='mensajeUsuario'>";
                    switch ($mensajes["id_curso"]) {
                        case 0:
                            echo "<span class='tituloCurso'>";
                            echo "<img src='../../img/logo-js.jpg' alt='Logo JavaScript'>";
                            echo "Curso JavaScript";
                            echo "</span>";
                            break;
                        case 1:
                            echo "<span class='tituloCurso'>";
                            echo "<img src='../../img/logo-angular.jpg' alt='Logo Angular'>";
                            echo "Curso Angular";
                            echo "</span>";
                            break;
                        case 2:
                            echo "<span class='tituloCurso'>";
                            echo "<img src='../../img/logo-react.jpg' alt='Logo React'>";
                            echo "Curso React";
                            echo "</span>";
                            break;
                        case 3:
                            echo "<span class='tituloCurso'>";
                            echo "<img src='../../img/logo-git.jpg' alt='Logo Git'>";
                            echo "Curso Git";
                            echo "</span>";
                            break;
                    }
                    echo $mensajes["mensaje"];
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>