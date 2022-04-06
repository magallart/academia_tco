<?php ob_start() ?>

    <!--
        · Contenido de la página donde se ve un formulario de búsqueda.
        · Pueden realizar la búsqueda cualquier tipo de usuario. 
        · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout.
        · Cuando el usuario le da al botón se ejecuta la acción de buscarAlumno() del controlador.
        · Para ello se utiliza el método buscarFichaAlumno() de la clase Alumno.
        · Se necesita poner el nombre completo del alumno a buscar.
        · Si encuentra al alumno, guarda los datos en el array $params y muestra una versión corta con un foreach.
        · Se puede pinchar en el nombre del alumno para acceder a su ficha completa.
    -->

    <div class="intro">
        <h2>Buscar un alumno en la base de datos</h2>
        <p>Introduce el nombre completo del alumno.</p>
    </div>

    <form name="formBusqueda" action="index.php?ctl=buscarAlumno" method="POST">
        <input type="text" name="nombre" value="<?php echo $params['nombre']?>" placeholder="Introduce el nombre">
        <input type="submit" value="Buscar" name="buscar">
    </form>

<?php if (count($params['resultado'])>0): ?>
<table>
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>NIA</th>
        <th>E-mail)</th>
    </tr>
    <?php foreach ($params['resultado'] as $alumno) : ?>
    <tr>
        <td><img src="<?php echo "\\img\\alumnos". $alumno['fPerfil'] ?>" class="imagenLista"></td>
        <td><a href="index.php?ctl=ver&id=<?php echo $alumno['id'] ?>">
        <?php echo $alumno['nombre'] ?></a></td>
        <td><?php echo $alumno['nia'] ?></td>
        <td><?php echo $alumno['email'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>
<?php endif; ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
