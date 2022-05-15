<?php ob_start(); ?>

<!--
    · Contenido de la página de Actualización de datos del perfil de usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="container datos-actualizados">  <!-- TODO Revisar diseño página -->
    <div class="row">
        <div class="col text-center">
            <h1>Datos actualizados</h1>
            <p>Tus datos han sido correctamente actualizados en nuestra base de datos.</p>
            <p>Se te redirigirá a la página de tu perfil en 3 segundos, en caso de no suceder, pincha en el botón.</p>
            <div class="text-center">
                <a class="boton" href="index.php?ctl=perfil">Ver mi perfil <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            </div>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>