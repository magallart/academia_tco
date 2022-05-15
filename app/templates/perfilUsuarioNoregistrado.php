<?php ob_start(); ?>

<!--
    · Contenido de la página de Actualización de datos del perfil de usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="container datos-actualizados">  <!-- TODO Revisar diseño página -->
    <div class="row">
        <div class="col text-center">
            <h1>Página visible sólo para usuarios registrados</h1>
            <p>Sólo pueden acceder a esta página los usuarios registrados en nuestra academia. Puedes registrarte en menos de 2 minutos y es totalmente gratis. Pincha en el botón de abajo y rellena el formulario para formar parte de nuestra familia.</p>
            <div class="text-center">
                <a class="boton" href="index.php?ctl=registro">Registrarme ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            </div>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>