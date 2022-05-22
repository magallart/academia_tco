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




<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>