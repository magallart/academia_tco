<?php ob_start(); ?>

<!--
    · Contenido de la página de Mis Cursos del Usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header class="interior">
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6">
                <h1 class="title-header">
                    Mis cursos
                </h1>
                <p>
                    Desde aquí puedes acceder a los cursos que estás realizando en estos momentos. Recuerda que puedes empezar tantos cursos como desees.
                </p>
            </div>
            <div class="col-lg-6 col-sm-8 text-center">
                <!--  TODO Controlar la imagen en responsive / Cambiar imagen -->
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $cursos = array();
            foreach ($_SESSION['cursos'] as $cursosUsuario) {
                foreach ($cursosUsuario as $nombre => $nombreCursoUsuario) {
                    if ($nombre === array_key_first($cursosUsuario)) {
                        array_push($cursos, $nombreCursoUsuario);
                    }
                }
            }
            echo "<pre>";
            print_r($cursos);
            echo "</pre>";
            ?>
        </div>
    </div>
</div>

<form name="formPerfil2" action="index.php?ctl=perfil" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="input-group col-lg-6">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="<?php echo $_SESSION['nombreUsuario'] ?>" />
        </div>

        <div class="input-group mb-3 col-lg-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" placeholder="<?php echo $_SESSION['apellidosUsuario'] ?>" />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="<?php echo $_SESSION['nombreUsuario'] ?>" />
        </div>
        <div class="col">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" placeholder="<?php echo $_SESSION['apellidosUsuario'] ?>" />
        </div>
    </div>


</form>

<hr>
<hr>
<hr>

<form>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col-lg-4">
            <div class="form-outline">
                <input type="text" id="form3Example1" class="form-control" />
                <label class="form-label" for="form3Example1">First name</label>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-outline">
                <input type="text" id="form3Example2" class="form-control" />
                <label class="form-label" for="form3Example2">Last name</label>
            </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" />
        <label class="form-label" for="form3Example3">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form3Example4" class="form-control" />
        <label class="form-label" for="form3Example4">Password</label>
    </div>

    
</form>








<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>