<?php

/* 
        · Aquí se encuentras todas las acciones posibles.
        · En todas las acciones antes del require final se elige el tipo de menú a mostrar dependiendo del nivel de usuario conectado.
    */

class Controller
{

    // Muestra el contenido de /templates/inicio.php
    public function cInicio()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/inicio.php';
    }

    // Muestra el contenido de /templates/academia.php
    public function cAcademia()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/academia.php';
    }

    // Muestra el contenido de /templates/cursos.php
    public function cCursos()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/cursos.php';
    }

    // Muestra el contenido de /templates/cursoJavascript.php
    public function cCursoJavascript()
    {
        try {
            $infoCurso = array(
                'mensajesCursoJavascript' => array()
            );

            $c = new Cursos();
            $idCurso = 0;
            $infoCurso['mensajesCursoJavascript'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoJavascript'] = $infoCurso['mensajesCursoJavascript'];

            if (isset($_POST['enviarMensaje'])) {
                $u = new Usuarios();
                $mensajeUsuario = recoge('nuevoMensaje');  //TODO Falta validar el mensaje
                if (isset($_POST['aceptacionPoliticas'])) {
                    //Un usuario sólo puede enviar un mensaje por curso. Si no encuentra el email en el array de mensajes es porque el usuario no ha enviado un mensaje
                    if (array_search($_SESSION['emailUsuario'], array_column($_SESSION['mensajesCursoJavascript'], 'email')) == true) {    
                        $_SESSION['errores'] = "Ya has enviado un mensaje para este curso.";
                    } else {                        
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['errores'] = "Checkbox";
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
                require __DIR__ . '/../templates/cursoJavascriptR.php';
            } else {
                $menu = 'menu.php';
                require __DIR__ . '/../templates/cursoJavascriptU.php';
            }
        }
    }

    // Muestra el contenido de /templates/cursoJavascript.php
    public function cCursoAngular()
    {
        try {
            $infoCurso = array(
                'mensajesCursoAngular' => array()
            );

            $c = new Cursos();
            $idCurso = 1;
            $infoCurso['mensajesCursoAngular'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoAngular'] = $infoCurso['mensajesCursoAngular'];

            if (isset($_POST['enviarMensaje'])) {
                $_SESSION["mensajeUsuario"] = recoge('nuevoMensaje');  // TODO Añadir función en classCursos.php para añadir el mensaje y el usuario a la base de datos
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
                require __DIR__ . '/../templates/cursoAngularR.php';
            } else {
                $menu = 'menu.php';
                require __DIR__ . '/../templates/cursoAngularU.php';
            }
        }
    }

    // Muestra el contenido de /templates/cursoJavascript.php
    public function cCursoGit()
    {
        try {
            $infoCurso = array(
                'mensajesCursoGit' => array()
            );

            $c = new Cursos();
            $idCurso = 2;
            $infoCurso['mensajesCursoGit'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoGit'] = $infoCurso['mensajesCursoGit'];

            if (isset($_POST['enviarMensaje'])) {
                $_SESSION["mensajeUsuario"] = recoge('nuevoMensaje');  // TODO Añadir función en classCursos.php para añadir el mensaje y el usuario a la base de datos
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
                require __DIR__ . '/../templates/cursoGitR.php';
            } else {
                $menu = 'menu.php';
                require __DIR__ . '/../templates/cursoGitU.php';
            }
        }
    }

    // Muestra el contenido de /templates/misCursos.php
    public function cMisCursos()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/misCursos.php';
    }

    // Muestra el contenido de /templates/contacto.php
    public function cContacto()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/contacto.php';
    }

    // Muestra el contenido de /templates/iniciarSesion.php
    public function cIniciarSesion()
    {
        try {
            $infoUsuario = array(
                'resultado' => array(),
                'cursos' => array(),
                'mensajes' => array()
            );

            $u = new Usuarios();
            if (isset($_POST['iniciarSesion'])) {

                $nombre = recoge('usuario');
                $password = recoge('password');
                $infoUsuario['resultado'] = $u->loginUsuario($nombre, $password);

                if ($infoUsuario['resultado']) {
                    $_SESSION['nivel'] = $infoUsuario['resultado']['nivel'];
                    $_SESSION['idUsuario'] = $infoUsuario['resultado']['id'];
                    $_SESSION['nombreUsuario'] = $infoUsuario['resultado']['nombre'];
                    $_SESSION['apellidosUsuario'] = $infoUsuario['resultado']['apellidos'];
                    $_SESSION['emailUsuario'] = $infoUsuario['resultado']['email'];
                    $_SESSION['direccionUsuario'] = $infoUsuario['resultado']['direccion'];
                    $_SESSION['cpostalUsuario'] = $infoUsuario['resultado']['cPostal'];
                    $_SESSION['localidadUsuario'] = $infoUsuario['resultado']['localidad'];
                    $_SESSION['fnacimientoUsuario'] = $infoUsuario['resultado']['fNacimiento'];
                    $_SESSION['fPerfil'] = $infoUsuario['resultado']['fPerfil'];
                    $idUsuario = $_SESSION['idUsuario'];
                    $infoUsuario['cursos'] = $u->getInformacionUsuario($idUsuario);
                    $_SESSION['cursos'] = $infoUsuario['cursos'];
                    $infoUsuario['mensajes'] = $u->getMensajesUsuario($idUsuario);
                    $_SESSION['mensajes'] = $infoUsuario['mensajes'];
                    header('Location: index.php?ctl=perfil');
                } else {
                    $_SESSION['errores']['login'] = "No se ha podido conectar.";
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/iniciarSesion.php';
    }

    // Muestra el contenido de /templates/registro.php
    public function cRegistro()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/registro.php';
    }

    // Muestra el contenido de /templates/recuperarPassword.php
    public function cRecuperarPassword()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/recuperarPassword.php';
    }

    // Muestra el contenido de /templates/cerrarSesion.php
    public function cCerrarSesion()
    {
        session_unset();
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/cerrarSesion.php';
    }

    public function cPerfil()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/perfil.php';
    }

    // Muestra el contenido de /templates/politicaPrivacidad.php
    public function cPoliticaPrivacidad()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/politicaPrivacidad.php';
    }

    // Muestra el contenido de /templates/politicaCookies.php
    public function cPoliticaCookies()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/politicaCookies.php';
    }

    // Muestra el contenido de /templates/avisosLegales.php
    public function cAvisosLegales()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/avisosLegales.php';
    }

    // Muestra el contenido de /templates/404.php
    public function c404()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/404.php';
    }
}
