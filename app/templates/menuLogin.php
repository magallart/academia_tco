<!--
    · Menú para usuarios de nivel 1, es decir, usuarios que están registrados y han iniciado sesión.
-->

<!-- TODO Arreglar menu responsive -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top menuLogin">
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

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=cursos">Cursos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctl=contacto">Contacto</a>
                </li>                
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/<?php echo $_SESSION['fPerfil']  ?>" alt="Foto de Perfil del usuario" class="fPerfil">
                    </a>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li class="nav-item">
                            <a href="index.php?ctl=perfil" class="nav-link">Ver Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ctl=misCursos" class="nav-link">Mis cursos</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
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
</div>