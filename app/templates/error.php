<?php ob_start()?>

<!--
    Contenido de la página de error genérica. 
    Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="intro">
    <h2>Error</h2>
    <p>Parece que ha habido un error. Por favor inténtalo de nuevo.</p>
</div>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
