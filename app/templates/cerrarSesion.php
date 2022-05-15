<?php ob_start(); ?>

<!--
    · Contenido de la página de Cerrar Sesión. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<div class="container datos-actualizados">  <!-- TODO Revisar diseño página -->
    <div class="row">
        <div class="col text-center">
            <h1>Sesión cerrada correctamente</h1>
            <p>Tu sesión de usuario se ha cerrado y ahora estás viendo esta página como visitante.</p>
            <p>Se te redirigirá a la página de inicio en 3 segundos, en caso de no suceder, pincha en el botón.</p>
            <div class="text-center">
                <a class="boton" href="index.php?ctl=inicio">Ir a inicio <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            </div>
        </div>
    </div>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>