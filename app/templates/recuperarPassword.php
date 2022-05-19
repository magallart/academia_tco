<?php ob_start(); ?>

<!--
    · Contenido de la página donde se ve un formulario para iniciar sesión.
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Una vez que el usuario introduce los valores y le da al botón, se ejecuta la acción "iniciarSesion()" del controlador.
    · Se enviarán los valores para que se validen y se ejecute la query en la BBDD.
    · Si el usuario no existe, se le mostrará un mensaje de error debajo del formulario.
-->
<header>
    <div class="container col-xxl-8 pt-lg-5">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                Recuperación de contraseña
                </h1>
                <p>
                ¿Has olvidado tu contraseña? ¿No consigues entrar en la academia con tu contraseña habitual? Cámbiala fácilmente, tan sólo sigue los pasos del formulario.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/login-header.png" class="d-block mx-lg-auto img-fluid" alt="Hombre con laptop riendo" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>


<div class="container interior my-5">
    <div class="row login">
        <div class="col-7 login-left">
            <h2>Recupera tu contraseña</h2>
            <hr>
            <p>Introduce tu dirección de email y te haremos llegar un enlace para recuperar tu contraseña.</p>    
        </div>
        <div class="col-5 login-right"> <!-- TODO Realizar funcionalidad -->
            <form name="formRecuperarPassword" action="index.php?ctl=recuperarPassword" method="POST" enctype="multipart/form-data">

                <input type="email" name="email" placeholder="Tu email" />

                <input type="submit" value="Recuperar contraseña" name="recuperarPassword" class="boton" />
            </form>
        </div>

    </div>
</div>

<?php

// Foreach que muestra los errrores al macenados en $_SESSION['errores'] guardados cuando se han validado los campos del formulario

if (isset($_SESSION['errores'])) {
    echo "<div class='errores'>";
    foreach ($_SESSION['errores'] as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
}
unset($_SESSION['errores']);
?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>