<?php ob_start() ?>

<!--
    · Contenido de la página de ver alumnos. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Venimos de la acción del controlador listar()
    · Dentro de la clase Alumnos hemos ejecutado el método mostrarAlumnos() que nos ha guardado la información de todos los alumnos.
    · Mostramos la información con un foreach dentro de una tabla.
-->

<table>
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>Localidad</th>
    </tr>
        <?php foreach ($params['alumnos'] as $alumno) :?>
    <tr>
        <td><img src="<?php echo "\\img\\alumnos". $alumno['fPerfil'] ?>" class="imagenLista" loading="lazy"></td>
        <td><?php echo $alumno['nombre'] ?></td>
        <td><?php echo $alumno['localidad']?></td>
    </tr>
    <?php endforeach; ?>

</table>


<?php 
$contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
