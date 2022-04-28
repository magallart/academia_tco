<!--
    · Menú para usuarios de nivel 0, es decir, usuarios que no han iniciado sesión.
-->
<!-- TODO Arreglar menu responsive -->


<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a href="index.php?ctl=inicio"><img src="../img/logo2-atco.png" alt="Logo ATCO"></img></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="MenuNavegacion" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?ctl=inicio">Inicio</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=academia">Academia ATCO</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?ctl=cursoJavascript">JavaScript</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=contacto">Contacto</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=iniciarSesion">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=registro">Registro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>