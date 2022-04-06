<?php ob_start() ?>

<!--
    · Contenido de la página de ver alumnos. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
    · Venimos de la acción del controlador listar() del controlador.
    · Esta vista sólo es accesible si el usuario ha iniciado sesión.
    · Se muestran más datos que en la página de /templates/listarAlumnos.php
    · Mostramos la información con un foreach dentro de una tabla.
-->

<table>
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>NIA</th>
        <th>Email</th>
    </tr>
        <?php foreach ($params['alumnos'] as $alumno) :?>
    <tr>
        <td><img src="<?php echo "\\img\\alumnos". $alumno['fPerfil'] ?>" class="imagenLista" loading="lazy"></td>
        <td><a href="index.php?ctl=ver&id=<?php echo $alumno['id']?>">
        <?php echo $alumno['nombre'] ?></a></td>
        <td><?php echo $alumno['nia']?></td>
        <td><?php echo $alumno['email']?></td>
    </tr>
    <?php endforeach; ?>

</table>


<?php 
$contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
