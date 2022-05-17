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
            $u = new Usuarios();
            $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
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

            if (isset($_POST['sumarTema'])) {
                $temasTerminadosUsuario = $_SESSION['cursos'][0]['temasTerminados'];
                $u->sumarTema($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoJavascript#tema' . $temasTerminadosUsuario + 1);
            }

            if (isset($_POST['finalizarCurso'])) {
                $u->sumarTema($_SESSION['idUsuario'], 0);
                $u->terminarCurso($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoJavascript#cursoTop');
            }

            if (isset($_POST['empezarCurso'])) {
                $u->empezarCurso($_SESSION['idUsuario'], 0, 0, 0, 0);
                header('Location: index.php?ctl=perfil');
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
            $u = new Usuarios();
            $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            $c = new Cursos();
            $idCurso = 0;
            $infoCurso['mensajesCursoAngular'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoAngular'] = $infoCurso['mensajesCursoAngular'];

            if (isset($_POST['enviarMensaje'])) {
                $u = new Usuarios();
                $mensajeUsuario = recoge('nuevoMensaje');  //TODO Falta validar el mensaje
                if (isset($_POST['aceptacionPoliticas'])) {
                    //Un usuario sólo puede enviar un mensaje por curso. Si no encuentra el email en el array de mensajes es porque el usuario no ha enviado un mensaje
                    if (array_search($_SESSION['emailUsuario'], array_column($_SESSION['mensajesCursoAngular'], 'email')) == true) {
                        $_SESSION['errores'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['errores'] = "Checkbox";
                }
            }

            if (isset($_POST['sumarTema'])) {
                $temasTerminadosUsuario = $_SESSION['cursos'][0]['temasTerminados'];
                $u->sumarTema($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoAngular#tema' . $temasTerminadosUsuario + 1);
            }

            if (isset($_POST['finalizarCurso'])) {
                $u->sumarTema($_SESSION['idUsuario'], 0);
                $u->terminarCurso($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoAngular#cursoTop');
            }

            if (isset($_POST['empezarCurso'])) {
                $u->empezarCurso($_SESSION['idUsuario'], 1, 0, 0, 0);
                header('Location: index.php?ctl=perfil');
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

    // Muestra el contenido de /templates/cursoReact.php
    public function cCursoReact()
    {
        try {
            $infoCurso = array(
                'mensajesCursoReact' => array()
            );
            $u = new Usuarios();
            $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            $c = new Cursos();
            $idCurso = 0;
            $infoCurso['mensajesCursoReact'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoReact'] = $infoCurso['mensajesCursoReact'];

            if (isset($_POST['enviarMensaje'])) {
                $u = new Usuarios();
                $mensajeUsuario = recoge('nuevoMensaje');  //TODO Falta validar el mensaje
                if (isset($_POST['aceptacionPoliticas'])) {
                    //Un usuario sólo puede enviar un mensaje por curso. Si no encuentra el email en el array de mensajes es porque el usuario no ha enviado un mensaje
                    if (array_search($_SESSION['emailUsuario'], array_column($_SESSION['mensajesCursoReact'], 'email')) == true) {
                        $_SESSION['errores'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['errores'] = "Checkbox";
                }
            }

            if (isset($_POST['sumarTema'])) {
                $temasTerminadosUsuario = $_SESSION['cursos'][0]['temasTerminados'];
                $u->sumarTema($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoReact#tema' . $temasTerminadosUsuario + 1);
            }

            if (isset($_POST['finalizarCurso'])) {
                $u->sumarTema($_SESSION['idUsuario'], 0);
                $u->terminarCurso($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoReact#cursoTop');
            }

            if (isset($_POST['empezarCurso'])) {
                $u->empezarCurso($_SESSION['idUsuario'], 2, 0, 0, 0);
                header('Location: index.php?ctl=perfil');
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
                require __DIR__ . '/../templates/cursoReactR.php';
            } else {
                $menu = 'menu.php';
                require __DIR__ . '/../templates/cursoReactU.php';
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
            $u = new Usuarios();
            $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            $c = new Cursos();
            $idCurso = 0;
            $infoCurso['mensajesCursoGit'] = $c->getMensajesCurso($idCurso);
            $_SESSION['mensajesCursoGit'] = $infoCurso['mensajesCursoGit'];

            if (isset($_POST['enviarMensaje'])) {
                $u = new Usuarios();
                $mensajeUsuario = recoge('nuevoMensaje');  //TODO Falta validar el mensaje
                if (isset($_POST['aceptacionPoliticas'])) {
                    //Un usuario sólo puede enviar un mensaje por curso. Si no encuentra el email en el array de mensajes es porque el usuario no ha enviado un mensaje
                    if (array_search($_SESSION['emailUsuario'], array_column($_SESSION['mensajesCursoGit'], 'email')) == true) {
                        $_SESSION['errores'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['errores'] = "Checkbox";
                }
            }

            if (isset($_POST['sumarTema'])) {
                $temasTerminadosUsuario = $_SESSION['cursos'][0]['temasTerminados'];
                $u->sumarTema($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoGit#tema' . $temasTerminadosUsuario + 1);
            }

            if (isset($_POST['finalizarCurso'])) {
                $u->sumarTema($_SESSION['idUsuario'], 0);
                $u->terminarCurso($_SESSION['idUsuario'], 0);
                header('Location: index.php?ctl=cursoGit#cursoTop');
            }

            if (isset($_POST['empezarCurso'])) {
                $u->empezarCurso($_SESSION['idUsuario'], 3, 0, 0, 0);
                header('Location: index.php?ctl=perfil');
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
                    $infoUsuario['cursos'] = $u->getCursosUsuario($idUsuario);
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
        header('refresh:3;url=index.php?ctl=inicio');
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
            try {
                $infoUsuario = array(
                    'resultado' => array(),
                    'cursos' => array(),
                    'mensajes' => array()
                );

                $u = new Usuarios();
                $nombre = $_SESSION['nombreUsuario'];
                $password =  strtolower($_SESSION['nombreUsuario']); //TODO Cambiar cuando el password sea el email
                $infoUsuario['resultado'] = $u->loginUsuario($nombre, $password);

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
                $infoUsuario['cursos'] = $u->getCursosUsuario($idUsuario);
                $_SESSION['cursos'] = $infoUsuario['cursos'];
                $infoUsuario['mensajes'] = $u->getMensajesUsuario($idUsuario);
                $_SESSION['mensajes'] = $infoUsuario['mensajes'];


                if (isset($_POST['actualizarDatos'])) {
                    //TODO Falta validar los datos
                    $nombre = $_REQUEST['nombre'] ? recoge('nombre') : $_SESSION['nombreUsuario'];
                    $apellidos =  $_REQUEST['apellidos'] ? recoge('apellidos') : $_SESSION['apellidosUsuario'];
                    $email =  $_REQUEST['email'] ? recoge('nombre') : $_SESSION['emailUsuario'];
                    $fNacimiento =  $_REQUEST['fNacimiento'] ? recoge('fNacimiento') : $_SESSION['fnacimientoUsuario'];
                    $direccion =  $_REQUEST['direccion'] ? recoge('nombre') : $_SESSION['direccionUsuario'];
                    $cPostal =  $_REQUEST['cPostal'] ? recoge('nombre') : $_SESSION['cpostalUsuario'];
                    $localidad =  $_REQUEST['localidad'] ? recoge('nombre') : $_SESSION['localidadUsuario'];
                    if ($u->actualizarDatos($_SESSION['idUsuario'], $nombre, $apellidos, $email, $fNacimiento, $direccion, $cPostal, $localidad)) {
                        header('Location: index.php?ctl=datosActualizados');
                    } else {
                        $_SESSION['errores'] = "No se ha podido actualizar los datos.";
                    }
                }

                if (isset($_POST['borrarUsuario'])) {
                    $u->borrarMensajesUsuario($_SESSION['idUsuario']);
                    $u->borrarCursosUsuario($_SESSION['idUsuario']);
                    $u->borrarUsuario($_SESSION['idUsuario']);
                    session_unset();
                    header('Location: index.php?ctl=inicio');
                } else {
                    $_SESSION['errores'] = "No se ha podido actualizar los datos.";
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
                require __DIR__ . '/../templates/perfil.php';
            }
        } else {
            $menu = 'menu.php';
            require __DIR__ . '/../templates/perfilUsuarioNoregistrado.php';
        }
    }


    // Muestra el contenido de /templates/datosActualizados.php
    public function cDatosActualizados()
    {
        header('refresh:3;url=index.php?ctl=perfil');

        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
            $menu = 'menuLogin.php';
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/datosActualizados.php';
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
