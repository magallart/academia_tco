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
                Inicia sesión
                </h1>
                <p>
                Accede a tu cuenta de usuario registrado para poder disfrutar de todo el contenido de la academia. Te esperan más de 25 cursos de desarrollo web preparados por profesionales cualificados.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/login-header.png" class="d-block mx-lg-auto img-fluid" alt="Hombre con laptop riendo" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>


<div class="container interior my-5">
    <div class="row login img-shadow">
        <div class="col-7 login-left">
            <h2>Identifícate</h2>
            <hr>
            <p>Accede ahora a nuestra academia online para desarrolladores. Podrás aprender todo lo que necesitas para ser un desarrollador web gracias a nuestros cursos gratuitos.</p>
            <p>¿No tienes cuenta? <a href="index.php?ctl=registro" alt="Enlace a página de registro" class="text-white fw-bold">Regístrate gratis aquí</a></p>            
        </div>
        <div class="col-5 login-right">
            <form name="formLogin" action="index.php?ctl=iniciarSesion" method="POST" enctype="multipart/form-data">

                <input type="email" name="email" placeholder="Email" />
                <input type="text" name="password" placeholder="Contraseña" />
                <div class="checkboxPoliticas">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Acepto las <a href="index.php?ctl=politicaPrivacidad" alt="Enlace a página de Políticas de Privacidad" target="blank" class="link">Políticas de privacidad</a>.
                    </label>
                </div>
                <input type="submit" value="Inciar Sesión" disabled name="iniciarSesion" id="submit" class="boton" />
            </form>

            <a href="index.php?ctl=recuperarPassword" alt="Enlace a la página de recuperación de contraseña" class="lost-password">¿Has olvidado tu contraseña?</a>
        </div>

    </div>
</div>


<?php
// Foreach que muestra los errrores al macenados en $_SESSION['erroresValidacion'] guardados cuando se han validado los campos del formulario

if (isset($_SESSION['erroresValidacion'])) {
    echo "<div class='errores'>";
    foreach ($_SESSION['erroresValidacion'] as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
}
unset($_SESSION['erroresValidacion']);
?>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>