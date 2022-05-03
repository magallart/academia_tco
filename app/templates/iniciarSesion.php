<?php ob_start(); ?>

<!--
    · Contenido de la página donde se ve un formulario para iniciar sesión.
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Una vez que el usuario introduce los valores y le da al botón, se ejecuta la acción "iniciarSesion()" del controlador.
    · Se enviarán los valores para que se validen y se ejecute la query en la BBDD.
    · Si el usuario no existe, se le mostrará un mensaje de error debajo del formulario.
-->

<header>
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Inicia sesión
                </h1>
                <p>
                    Accede a tu cuenta de usuario registrado para poder disfrutar de todo el contenido de la academia.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/login-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>


<div class="container interior my-5">
    <div class="row login">
        <div class="col-7 login-left">
            <h2>Identifícate</h2>
            <h3>Introduce tu usuario y contraseña.</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium nihil esse placeat, dolorem in eum omnis veniam quis ullam porro, molestiae neque beatae. Error sit repellendus distinctio autem molestias!</p>
        </div>
        <div class="col-5 login-right">
            <form name="formLogin" action="index.php?ctl=iniciarSesion" method="POST" enctype="multipart/form-data">

                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="text" name="password" placeholder="Contraseña" />

                <input type="submit" value="Inciar Sesión" name="iniciarSesion" class="boton" />
            </form>

            <a href="index.php?ctl=recuperarPassword" alt="Enlace a la página de recuperación de contraseña" class="lost-password">¿Has olvidado tu contraseña?</a>
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