<!--
    · Menú para usuarios de nivel 1, es decir, usuarios que están registrados y han iniciado sesión.
-->

<!-- TODO Arreglar menu responsive -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a href="index.php?ctl=inicio"><img src="../img/logo2-atco.png" alt="Logo ATCO"></img></a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion" aria-controls="MenuNavegacion" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>

        <div id="MenuNavegacion" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav menu-principal-login">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?ctl=inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=academia">Academia</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?ctl=cursoJavascript">JavaScript</a></li>
                        <li><a class="dropdown-item" href="index.php?ctl=cursoAngular">Angular</a></li>
                        <li><a class="dropdown-item" href="index.php?ctl=cursoReact">React</a></li>
                        <li><a class="dropdown-item" href="index.php?ctl=cursoGit">Git</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=contacto">Contacto</a>
                </li>
            </ul>

            <ul class="navbar-nav menu-perfil">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/<?php echo $_SESSION['fPerfil']  ?>" alt="Foto de Perfil del usuario" class="fPerfil">
                    </a>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li class="nav-item">
                            <a href="index.php?ctl=perfil" class="nav-link">Ver Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ctl=panelAdministracion" class="nav-link">Administración</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?ctl=cerrarSesion" class="nav-link">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>