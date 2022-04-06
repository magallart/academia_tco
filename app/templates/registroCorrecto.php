<?php ob_start(); ?>

    <!--
        · Vista donde se muestra el mensaje al usuario de que se ha registrado correctamente.
        · Llegamos aquí desde la acción registroCorrecto del controlador.
        · Se muestra un botón donde se redirige al usuario a la página de /templates/iniciarSesión.php gracias a la acción iniciarSesión().
    -->

<div class="intro">
    <h2>Te has registrado correctamente en IES Abastos</h2>
    <p>Ya puedes iniciar sesión con tus datos y disfrutar de las ventajas de ser usuario registrado.</p>
</div>

<div class="volverAtras">
    <?php
        echo "<a href='index.php?ctl=iniciarSesion' class='bVolver'>Iniciar sesión</a>";
    ?>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
