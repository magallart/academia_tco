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
        try {
            if (isset($_POST['newsletter'])) {
                $nombre = recoge('nombre');
                $email = recoge('email');

                if (cValidarNewsletter($nombre, $email)) {
                    $n = new Newsletter();
                    $n->newNewsletter($nombre, $email);
                    header('Location: index.php?ctl=newsletter');
                } else {
                    header('Location: index.php?ctl=error');
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
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
    public function cNewsletter()
    {
        header('refresh:3;url=index.php?ctl=inicio');
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/newsletter.php';
    }

    // Muestra el contenido de /templates/cursos.php
    public function cCursos()
    {
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
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
            if (isset($_SESSION['nivel']) > 0) {
                $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            }

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
                        $_SESSION['erroresValidacion'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['erroresValidacion'] = "Checkbox";
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
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel'])) {
                $menu = menuWeb($_SESSION['nivel']);
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
            if (isset($_SESSION['nivel']) > 0) {
                $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            }
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
                        $_SESSION['erroresValidacion'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['erroresValidacion'] = "Checkbox";
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
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel'])) {
                $menu = menuWeb($_SESSION['nivel']);
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
            if (isset($_SESSION['nivel']) > 0) {
                $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            }
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
                        $_SESSION['erroresValidacion'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['erroresValidacion'] = "Checkbox";
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
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel'])) {
                $menu = menuWeb($_SESSION['nivel']);
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
            if (isset($_SESSION['nivel']) > 0) {
                $_SESSION['cursos'] = $u->getCursosUsuario($_SESSION['idUsuario']);
            }
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
                        $_SESSION['erroresValidacion'] = "Ya has enviado un mensaje para este curso.";
                    } else {
                        $u->insertarMensajeUsuario($_SESSION['idUsuario'], 0, $mensajeUsuario);
                        header("Refresh:0");
                    }
                } else {
                    $_SESSION['erroresValidacion'] = "Checkbox";
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
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        } {
            if (isset($_SESSION['nivel'])) {
                $menu = menuWeb($_SESSION['nivel']);
                require __DIR__ . '/../templates/cursoGitR.php';
            } else {
                $menu = 'menu.php';
                require __DIR__ . '/../templates/cursoGitU.php';
            }
        }
    }

    // Muestra el contenido de /templates/contacto.php
    public function cContacto()
    {
        try {
            if (isset($_POST['registrarCuenta'])) {
                $nombre = recoge('nombre');
                $asunto = recoge('asunto');
                $email = recoge('email');
                $mensaje = recoge('mensaje');

                if (cValidarContacto($nombre, $asunto, $email, $mensaje)) {  //TODO realizar funcionalidad de enviar el email con PHPmailer
                    header('Location: index.php?ctl=iniciarSesion');
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
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

                $email = recoge('email');
                $password = recoge('password');
                $infoUsuario['resultado'] = $u->loginUsuario($email, $password);

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
                    $_SESSION['erroresValidacion']['login'] = "No se ha podido conectar.";
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/iniciarSesion.php';
    }

    // Muestra el contenido de /templates/registro.php
    public function cRegistro()
    {
        try {
            if (isset($_POST['registrarCuenta'])) {
                $nombre = recoge('nombre');
                $apellidos = recoge('apellidos');
                $password = recoge('password');
                $password2 = recoge('password2');
                $email = recoge('email');
                $fNacimiento = recoge('fNacimiento');
                $direccion = recoge('direccion');
                $cPostal = recoge('cPostal');
                $localidad = recoge('localidad');
                $fPerfil = $_FILES['fPerfil']['name'];
                $fPerfilCampo = "fPerfil";

                if (cValidarDatos($nombre, $apellidos, $email, $fNacimiento, $direccion, $cPostal, $localidad)) {
                    if (cValidarPassword($password, $password2)) {
                        if (cValidarImagenPerfil($nombre, $apellidos, $fPerfilCampo)) {
                            $nombreUsuario = strtolower(str_replace(" ", "_", sinTildes($nombre)));
                            $apellidosUsuario = strtolower(str_replace(" ", "_", sinTildes($apellidos)));
                            $nombreFoto = $nombreUsuario . "_" . $apellidosUsuario;
                            $nombrePartes = explode(".", $_FILES['fPerfil']['name']);
                            $extensionImagen = $nombrePartes[1];
                            $fPerfilRuta = $nombreFoto . "." . $extensionImagen;
                            $fNacimiento = $_SESSION['fechaBD'];
                            $u = new Usuarios();
                            $u->registrarUsuario($nombre, $apellidos, $password, $email, $fNacimiento, $direccion, $cPostal, $localidad, $fPerfilRuta);
                            header('Location: index.php?ctl=iniciarSesion');
                        } else {
                            if (isset($_SESSION['erroresValidacion'])) {
                                foreach ($_SESSION['erroresValidacion'] as $error) {
                                    echo "<p>$error</p>";
                                }
                            }
                        }
                    } else {
                        if (isset($_SESSION['erroresValidacion'])) {
                            foreach ($_SESSION['erroresValidacion'] as $error) {
                                echo "<p>$error</p>";
                            }
                        }
                    }
                } else {
                    if (isset($_SESSION['erroresValidacion'])) {
                        foreach ($_SESSION['erroresValidacion'] as $error) {
                            echo "<p>$error</p>";
                        }
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/registro.php';
    }

    // Muestra el contenido de /templates/recuperarPassword.php
    public function cRecuperarPassword()
    {
        try {

            if (isset($_POST['iniciarSesion'])) {

                $email = recoge('email');  //TODO Realizar funcionalidad de recuperar contraseña
                header('Location: index.php?ctl=iniciarSesion');
            } else {
                $_SESSION['erroresValidacion']['login'] = "No se ha podido enviar un email a esa dirección.";
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/recuperarPassword.php';
    }

    // Muestra el contenido de /templates/cerrarSesion.php
    public function cCerrarSesion()
    {
        session_unset();
        header('refresh:3;url=index.php?ctl=iniciarSesion');
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
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
                $email = $_SESSION['emailUsuario'];
                $password = $u->getPassword($_SESSION['idUsuario']);
                $infoUsuario['resultado'] = $u->loginUsuario($email, $password);

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
                    $email =  $_REQUEST['email'] ? recoge('email') : $_SESSION['emailUsuario'];
                    $fNacimiento =  $_REQUEST['fNacimiento'] ? recoge('fNacimiento') : $_SESSION['fnacimientoUsuario'];
                    $direccion =  $_REQUEST['direccion'] ? recoge('direccion') : $_SESSION['direccionUsuario'];
                    $cPostal =  $_REQUEST['cPostal'] ? recoge('cPostal') : $_SESSION['cpostalUsuario'];
                    $localidad =  $_REQUEST['localidad'] ? recoge('localidad') : $_SESSION['localidadUsuario'];
                    if ($u->actualizarDatos($_SESSION['idUsuario'], $nombre, $apellidos, $email, $fNacimiento, $direccion, $cPostal, $localidad)) {
                        header('Location: index.php?ctl=datosActualizados');
                    } else {
                        $_SESSION['erroresValidacion'] = "No se ha podido actualizar los datos.";
                    }
                }

                if (isset($_POST['borrarUsuario'])) {
                    $u->borrarMensajesUsuario($_SESSION['idUsuario']);
                    $u->borrarCursosUsuario($_SESSION['idUsuario']);
                    $u->borrarUsuario($_SESSION['idUsuario']);
                    session_unset();
                    header('Location: index.php?ctl=inicio');
                } else {
                    $_SESSION['erroresValidacion'] = "No se ha podido actualizar los datos.";
                }
            } catch (Exception $e) {
                error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
                header('Location: index.php?ctl=error');
            } catch (Error $e) {
                error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
                header('Location: index.php?ctl=error');
            }

            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
                require __DIR__ . '/../templates/perfil.php';
            }
        }

        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2) {
            if (isset($_SESSION['nivel'])) {
                $menu = menuWeb($_SESSION['nivel']);
            } else {
                $menu = 'menu.php';
            }
            require __DIR__ . '/../templates/perfilAdmin.php';
        }

        if (!isset($_SESSION['nivel'])) {
            $menu = 'menu.php';
            require __DIR__ . '/../templates/perfilUsuarioNoregistrado.php';
        }
    }

    public function cPerfilAlumno()
    {
        if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2) {
            try {
                $infoAlumno = array(
                    'resultado' => array(),
                    'cursos' => array(),
                    'mensajes' => array()
                );

                if (isset($_GET['id'])) {
                    $idPerfilAlumno = recoge('id');
                }

                $u = new Usuarios();
                $emailAlumno = $u->getEmail($idPerfilAlumno);
                $passwordAlumno = $u->getPassword($idPerfilAlumno);
                $infoAlumno['resultado'] = $u->loginUsuario($emailAlumno, $passwordAlumno);

                $_SESSION['perfilAlumno']['nivel'] = $infoAlumno['resultado']['nivel'];
                $_SESSION['perfilAlumno']['idUsuario'] = $infoAlumno['resultado']['id'];
                $_SESSION['perfilAlumno']['nombreUsuario'] = $infoAlumno['resultado']['nombre'];
                $_SESSION['perfilAlumno']['apellidosUsuario'] = $infoAlumno['resultado']['apellidos'];
                $_SESSION['perfilAlumno']['emailUsuario'] = $infoAlumno['resultado']['email'];
                $_SESSION['perfilAlumno']['direccionUsuario'] = $infoAlumno['resultado']['direccion'];
                $_SESSION['perfilAlumno']['cpostalUsuario'] = $infoAlumno['resultado']['cPostal'];
                $_SESSION['perfilAlumno']['localidadUsuario'] = $infoAlumno['resultado']['localidad'];
                $_SESSION['perfilAlumno']['fnacimientoUsuario'] = $infoAlumno['resultado']['fNacimiento'];
                $_SESSION['perfilAlumno']['fPerfil'] = $infoAlumno['resultado']['fPerfil'];
                //$idUsuario = $_SESSION['idUsuario'];
                $infoAlumno['cursos'] = $u->getCursosUsuario($idPerfilAlumno);
                $_SESSION['perfilAlumno']['cursos'] = $infoAlumno['cursos'];
                $infoAlumno['mensajes'] = $u->getMensajesUsuario($idPerfilAlumno);
                $_SESSION['perfilAlumno']['mensajes'] = $infoAlumno['mensajes'];

                if (isset($_POST['actualizarDatos'])) {
                    //TODO Falta validar los datos
                    $nombre = $_REQUEST['nombreAlumno'] ? recoge('nombreAlumno') : $_SESSION['perfilAlumno']['nombreUsuario'];
                    $apellidos =  $_REQUEST['apellidosAlumno'] ? recoge('apellidosAlumno') : $infoAlumno['resultado']['apellidos'];
                    $email =  $_REQUEST['emailAlumno'] ? recoge('emailAlumno') : $_SESSION['perfilAlumno']['emailUsuario'];
                    $fNacimiento =  $_REQUEST['fNacimientoAlumno'] ? recoge('fNacimientoAlumno') : $_SESSION['perfilAlumno']['fnacimientoUsuario'];
                    $direccion =  $_REQUEST['direccionAlumno'] ? recoge('direccionAlumno') : $_SESSION['perfilAlumno']['direccionUsuario'];
                    $cPostal =  $_REQUEST['cPostalAlumno'] ? recoge('cPostalAlumno') : $_SESSION['perfilAlumno']['cpostalUsuario'];
                    $localidad =  $_REQUEST['localidadAlumno'] ? recoge('localidadAlumno') : $_SESSION['perfilAlumno']['localidadUsuario'];
                    if ($u->actualizarDatos($_SESSION['perfilAlumno']['idUsuario'], $nombre, $apellidos, $email, $fNacimiento, $direccion, $cPostal, $localidad)) {
                        header('Location: index.php?ctl=datosActualizados');
                    } else {
                        $_SESSION['erroresValidacion'] = "No se ha podido actualizar los datos.";
                    }
                }

                if (isset($_POST['borrarUsuario'])) {
                    $u->borrarMensajesUsuario($_SESSION['perfilAlumno']['idUsuario']);
                    $u->borrarCursosUsuario($_SESSION['perfilAlumno']['idUsuario']);
                    $u->borrarUsuario($_SESSION['perfilAlumno']['idUsuario']);
                    session_unset();
                    header('Location: index.php?ctl=panelAdministracion');
                } else {
                    $_SESSION['erroresValidacion'] = "No se ha podido actualizar los datos.";
                }
            } catch (Exception $e) {
                error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
                header('Location: index.php?ctl=error');
            } catch (Error $e) {
                error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
                header('Location: index.php?ctl=error');
            }

            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2) {
                $menu = 'menuAdmin.php';
                require __DIR__ . '/../templates/perfilAlumno.php';
            }
        }

        if (!isset($_SESSION['nivel'])) {
            $menu = 'menu.php';
            require __DIR__ . '/../templates/perfilUsuarioNoregistrado.php';
        }
    }


    // Muestra el contenido de /templates/datosActualizados.php
    public function cDatosActualizados()
    {
        header('refresh:3;url=index.php?ctl=perfil');

        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/datosActualizados.php';
    }

    // Muestra el contenido de /templates/politicaPrivacidad.php
    public function cPoliticaPrivacidad()
    {
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/politicaPrivacidad.php';
    }

    // Muestra el contenido de /templates/politicaCookies.php
    public function cPoliticaCookies()
    {
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/politicaCookies.php';
    }

    // Muestra el contenido de /templates/avisosLegales.php
    public function cAvisosLegales()
    {
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/avisosLegales.php';
    }

    // Muestra el contenido de /templates/404.php
    public function c404()
    {
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/404.php';
    }

    // Muestra el contenido de /templates/404.php
    public function cPanelAdministracion()
    {
        try {
            $a = new Admin();
            $_SESSION['alumnos'] = $a->mostrarAlumnos();
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logException.txt");
            header('Location: index.php?ctl=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?ctl=error');
        }
        if (isset($_SESSION['nivel'])) {
            $menu = menuWeb($_SESSION['nivel']);
        } else {
            $menu = 'menu.php';
        }
        require __DIR__ . '/../templates/panelAdministracion.php'; //TODO cambiar acceso y solo permitir nivel 2
    }
}
