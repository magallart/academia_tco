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
            <div class="col">
                <div class="estadisticas">
                    <h2>Cursos totales</h2>
                    <div class="datos-administracion">
                        4
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="estadisticas">
                    <h2>Alumnos totales</h2>
                    <div class="datos-administracion">
                        23
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="estadisticas">
                    <h2>Cursos finalizados</h2>
                    <div class="datos-administracion">
                        55
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="estadisticas">
                    <h2>Temas terminados</h2>
                    <div class="datos-administracion">
                        120
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="estadisticas">
                    <h2>Usuarios newsletter</h2>
                    <div class="datos-administracion">
                        13
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="estadisticas">
                    <h2>Mensajes usuarios</h2>
                    <div class="datos-administracion">
                        991
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="estadisticas">
                    <h2>Usuarios</h2>
                </div>
            </div>
            <div class="col">
            <div class="estadisticas">
                    <h2>Mensajes</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>