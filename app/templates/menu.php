<!--
    · Menú para usuarios de nivel 0, es decir, usuarios que no han iniciado sesión.
-->
<!-- TODO Arreglar menu responsive -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top menu">
    <div class="container">
        <a href="inicio.html"><img src="../img/logo2-atco.png" alt="Logo ATCO"></img></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?ctl=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=academia">Academia ATCO</a>
                </li>

                <li class="nav-item dropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cursos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?ctl=cursoJavascript">JavaScript</a></li>
                            </ul>
                        </li>
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