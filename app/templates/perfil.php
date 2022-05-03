<?php ob_start(); ?>

<!--
    · Contenido de la página de Perfil de Usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Bievenvenid@, <?php printf($_SESSION['nombreUsuario']) ?>
                </h1>
                <p>
                    Esta es tu página de perfil donde podrás con sultar tus datos personales así como ver los cursos que estás cursando en estos momentos.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<div class="container perfil py-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 p-5">
            <h2>Datos de la cuenta</h2>
            <form name="formPerfil" action="index.php?ctl=perfil" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="<?php echo $_SESSION['nombreUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" placeholder="<?php echo $_SESSION['apellidosUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-outline">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="<?php echo $_SESSION['emailUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-outline">
                            <label for="fNacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fNacimiento" placeholder="<?php echo $_SESSION['fnacimientoUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-outline">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" placeholder="<?php echo $_SESSION['direccionUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="cPostal">Código Postal</label>
                            <input type="text" name="cPostal" placeholder="<?php echo $_SESSION['cpostalUsuario'] ?>" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="localidad">Localidad</label>
                            <input type="text" name="localidad" placeholder="<?php echo $_SESSION['localidadUsuario'] ?>" />
                        </div>
                    </div>
                </div>

                <input type="submit" value="Actualizar Perfil" name="actualizar" class="boton" /> <!-- TODO realizar funcionalidad de actualizar perfil  -->
                <input type="submit" value="Borrar Perfil" name="borrar" class="boton" /> <!-- TODO realizar funcionalidad de borrar perfil  -->
            </form>

        </div>
        <div class="col-lg-6 col-md-12 p-5">
            <div class="mensajes">
                <h2>Últimos mensajes</h2>
                <?php
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
                    }
                    echo $mensajes["mensaje"];
                    echo "</div>";
                }
                ?>
            </div>

            <div class="cursosApuntados">
                <h2>Cursos empezados...</h2>
            </div>
        </div>
    </div>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>