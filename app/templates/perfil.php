<?php ob_start(); ?>

<!--
    · Contenido de la página de Perfil de Usuario. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<div class="comming-soon">
    <h1>Página de Perfil de Usuario</h1>
    <p>Próximamente</p>
</div>



<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>