<?php ob_start() ?>

<!--
        · Contenido de la página donde se ve un formulario para que un usuario se registre.
        · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
        · Una vez que el usuario introduce los valores y le da al botón, se ejecuta la acción "registro()" del controlador.
        · Se enviarán los valores para que se validen y se ejecute la query en la BBDD.
        · Si el usuario no existe, se le mostrará un mensaje de error debajo del formulario.
    -->

<div class="intro">
    <h2>Registro de nuevo usuario</h2>
    <p>Todos los campos son obligatorios.</p>
</div>

<form name="formInsertar" action="index.php?ctl=registro" method="POST" enctype="multipart/form-data">

    <input type="text" name="user" placeholder="Nickname" />
    <input type="text" name="password" placeholder="Contraseña" />
    <input type="text" name="email" placeholder="Email"/>
    <input type="file" name="fPerfil"/>

    <input type="submit" value="Añadir usuario" name="registrar" />
</form>

<!--
    Foreach que muestra los errrores al macenados en $_SESSION['errores'] guardados cuando se han validado los campos del formulario
-->
<?php
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
