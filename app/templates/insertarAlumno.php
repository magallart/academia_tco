<?php ob_start() ?>

<!--
    · Contenido de la página /templates/insetarAlumno.php
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Formulario completo para insetar un alumno nuevo.
    · La información del alumno va en 2 tablas: alumnos y asignaturas.
    · Al final del formulario comprobamos si la variable de sesión $_SESSION['errores'] existe y de existir es porque han habido errores que mostramos por pantalla.
    · Después de mostrar los errores eliminamos los datos la variable.
-->

<div class="intro">
    <h2>Formulario para insertar nuevo alumno</h2>
    <p>Todos los campos son obligatorios.</p>
</div>


<form name="formInsertar" action="index.php?ctl=insertarAlumno" method="POST" enctype="multipart/form-data">

    <input type="text" name="nombre" value="<?php echo $params['nombre'] ?>" placeholder="Nombre completo" />
    <input type="text" name="nia" value="<?php echo $params['nia'] ?>" placeholder="NIA" />
    <input type="text" name="email" value="<?php echo $params['email'] ?>" placeholder="Email"/>
    <input type="text" name="direccion" value="<?php echo $params['direccion'] ?>" placeholder="Dirección"/>
    <input type="text" name="cPostal" value="<?php echo $params['cPostal'] ?>" placeholder="Código Postal"/>
    <input type="text" name="localidad" value="<?php echo $params['localidad'] ?>" placeholder="Localidad"/>
    <input type="text" name="fNacimiento" value="<?php echo $params['fNacimiento'] ?>" placeholder="Fecha nacimiento (dd/mm/aaa)"/>

    <div class="opcionesCheck">
        <input type="checkbox" name="asignaturas[]" value="diw"><span>DIW</span>
        <input type="checkbox" name="asignaturas[]" value="dwc"><span>DWC</span>
        <input type="checkbox" name="asignaturas[]" value="dws"><span>DWS</span>
        <input type="checkbox" name="asignaturas[]" value="dam"><span>DAM</span>
        <input type="checkbox" name="asignaturas[]" value="eie"><span>EIE</span>
    </div>

    <input type="file" name="fPerfil"/>

    <input type="submit" value="Añadir usuario" name="insertar" />
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
