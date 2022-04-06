<?php ob_start() ?>

    <!--
        · Contenido de la página donde se ve muestra un mensaje al usuario diciéndole que ha cerrado la sesión.
        · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
        · Llegamos aquí desde la acción cerrarSesión() del controlador.
    -->

<div class="intro">
    <h2>Has cerrado sesión correctamente</h2>
    <p>Ahora estás navegando como usuario invitado.</p>
</div>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
