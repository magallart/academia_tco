<?php
    ob_start();
?>

<!--
    · Contenido de la página donde se ve toda la información de un alumno. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Obtenemos la información de 2 métodos de la clase Alumno: infoAlumno() y asignaturasAlumno().
    · Dentro de la clase Alumnos hemos ejecutado el método infoAlumno() que nos ha guardado la información del alumno con la id seleccionada.
    · También llegamos a esta página desde la acción buscar() y el método buscarFichaAlumno().
    · Para obtener las asignaturas hemos usado el método asignaturasAlumno().
    · Mostramos la información con 2 foreach dentro de una tabla.
-->

<div class="perfilAlumno">
    <h2><?php echo $params['alumnos']['nombre'] ?></h2>

    <?php
        echo "<img src='/img/alumnos/" . $params['alumnos']['fPerfil'] . "' class='fotoAlumno'>";
    ?> 
</div>



<table border="1" class="datosAlumno">

    <tr>
        <td>Nombre</td>
        <td><?php echo $params['alumnos']['nombre'] ?></td>
    </tr>

    <tr>
        <td>NIA</td>
        <td><?php echo $params['alumnos']['nia']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $params['alumnos']['email']?></td>
    </tr>

    <tr>
        <td>Dirección</td>
        <td><?php echo $params['alumnos']['direccion'] . ' (' . $params['alumnos']['cPostal'] . ')'?></td>
    </tr>

    <tr>
        <td>Localidad</td>
        <td><?php echo $params['alumnos']['localidad']?></td>
    </tr>

    <tr>
        <td>Fecha nacimiento</td>
        <td><?php echo $params['alumnos']['fNacimiento']?></td>
    </tr>

    <tr>
        <td>Asignaturas</td>
        <td><?php 
            foreach ($asignaturas['alumnos'] as $asignaturas) {
                echo $asignaturas['nombre'] . ", ";
            } 
        ?></td>
    </tr>          
</table>

<div class="volverAtras">
    <?php
        echo "<a href='index.php?ctl=listar' class='bVolver'>Volver atrás</a>";
    ?>
</div>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
