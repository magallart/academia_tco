<?php ob_start(); ?>

<!--
    · Contenido de la página de Recuperación de contraseña. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<div class="comming-soon">
    <h1>Página Recuperación de contraseña</h1>
    <p>Próximamente</p>
</div>



<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>