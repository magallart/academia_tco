
<!--
    · Menú para usuarios de nivel 1, es decir, usuarios que están registrados y han iniciado sesión.
-->
<div id="nav-menu">
    <ul class="menu navegacion">
        <li><a href="index.php?ctl=inicio">Inicio</a></li>
        <li><a href="index.php?ctl=listarLogin">Ver alumnos</a></li>
        <li><a href="index.php?ctl=insertarAlumno">Añadir alumno</a></li>        
        <li><a href="index.php?ctl=buscarAlumno">Buscar</a></li>
    </ul>

    <ul class="menu user">
        <li><a href="index.php?ctl=cerrarSesion">Cerrar sesión</a></li>
        <li><?php  echo $_SESSION['nombreUsuario']  ?></li>
        <li><img src="../img/usuarios/<?php  echo $_SESSION['fPerfil']  ?>" alt=""></li>
    </ul>
</div>
