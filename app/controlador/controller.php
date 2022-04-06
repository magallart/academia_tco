<?php

    /* 
        · Aquí se encuentras todas las acciones posibles.
        · En todas las acciones antes del require final se elige el tipo de menú a mostrar dependiendo del nivel de usuario conectado.
    */

    class Controller {

        // Muestra el contenido de /templates/inicio.php
        public function inicio() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/inicio.php';
        }

        // Muestra la página de error asociada a la acción ctl=error
        public function error() {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 

            require __DIR__ . '/../templates/error.php';
        }

        /*
           ·  Esta acción genera una tabla con todos los alumnos dentro de la base de datos "dws_mvc_instituto" en la tabla "alumnos".
            · Se crea una clase de tipo Alumnos donde está el método mostrarlumnos().
            · Si no se puede ejecutar, redireccionamos al usuario a la página de error.
            · Utiliza la vista /templates/listarAlumnos.php
        */
        public function listar() {
            try {
                $m = new Alumnos();
                $params = array(
                    'alumnos' => $m->mostrarAlumnos()
                );

                // Recogemos los dos tipos de excepciones que se pueden producir
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

            require __DIR__ . '/../templates/listarAlumnos.php';
        }

        /*
           ·  Esta acción genera una tabla con todos los datos de un alumno.
           · Los datos generales se obtienen de la tabla "alumnos" mientras que las asignaturas están en la tabla "asignaturas", por lo que tenemos que hacer 2 querys diferentes.
            · Se crea una clase de tipo Alumnos donde está el método infoAlumno().
            · Si no se puede ejecutar, redireccionamos al usuario a la página de error.
            · Utiliza la vista /templates/listarAlumnos.php
        */
        public function ver() {
            try {
                if (! isset($_GET['id'])) {
                    throw new Exception('Página no encontrada');
                }
                $id = recoge('id');
                $m = new Alumnos();
                $params['alumnos'] = $m->infoAlumno($id);
                $a = new Alumnos();
                $asignaturas['alumnos'] = $a->asignaturasAlumno($id);
                
                if (! $params['alumnos'])
                    $params['mensaje'] = "No hay detalles que mostar";
                
                if (! $asignaturas['alumnos'])
                    $asignaturas['mensaje'] = "No está matriculado de ninguna asignatura";


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

            require __DIR__ . '/../templates/verAlumno.php';
        }

        /*
            · Esta acción genera inserta un alumno dentro de la base de datos en 2 tablas diferentes: "alumnos" y "asignaturas".
            ·Comprobamos el nivel de usuario.
            · El usuario debe estar registrado y haber iniciado sesión para acceder a esta página, de no cumplir estas condiciones se le manda a la página /templates/errorPermisos.php donde se coge el error con $_GET para un mensaje personalizado.
            · Recogemos los valores del formulario de la vista /templates/insetarAlumno.php
            . Validamos que los datos sean correctos con la función validarDatos() que se encuentra en /libs/utils.php
            · Una vez que ha pasado la validación, se procede a insertar los valores en las tablas correspondientes.
            · Creamos una instancia nueva de la clase Alumnos y usamos el método insertarAlumno() para insetar valores en la tabla "alumnos".
            · Creamos otra instancia nueva de la clase ALumnos y usamos el método insetarAsignaturas() para realizar las inserciones de las asignaturas del alumno en la tabla "asignaturas".
            · Utiliza la vista /templates/insertarAlumno.php
        */
        public function insertarAlumno() {
            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                
                try {
                    $params = array(
                        'nombre' => '',
                        'nia' => '',
                        'email' => '',
                        'direccion' => '',
                        'cPostal' => '',
                        'localidad' => '',
                        'fNacimiento' => ''
                    );
    
                    if (isset($_POST['insertar'])) {
                        $nombre = recoge('nombre');
                        $nia = recoge('nia');
                        $email = recoge('email');
                        $direccion = recoge('direccion');
                        $cPostal = recoge('cPostal');
                        $localidad = recoge('localidad');
                        $fNacimiento = recoge('fNacimiento');
                        $fPerfil = $_FILES['fPerfil']['name'];
                        if(recogeCheck('asignaturas')) {
                            $asiUser = $_REQUEST["asignaturas"];
                        }                            
    
                        if (validarDatos($nombre, $nia, $email, $direccion, $cPostal, $localidad, $fNacimiento, $fPerfil)) {
    
                            $fotoPerfilSaneada = strtolower(str_replace(" ", "_", $fPerfil));
    
                            // Si no ha habido problema creo modelo y hago inserción
                            $m = new Alumnos();
                            if ($m->insertarAlumno($nombre, $nia, $email, $direccion, $cPostal, $localidad, $_SESSION['fechaBD'], $fotoPerfilSaneada)) {
                                
                            } else {
                                $params['mensaje'] = 'No se ha podido insertar el alumno en la base de datos. Revisa el formulario';
                            }
                            
                            //Necesitamos saber la id del último usuario de la tabla "alumnos" para enlazar las asignaturas con su tabla "asignaturas"
                            $lastId = new Alumnos();
                            $ultimaIdAlumno = $lastId->alumnoUltimaId();
    
                            $asig = new Alumnos();
                            if ($asig->insertarAsignaturas($ultimaIdAlumno, $asiUser)) {
                                
                            } else {                            
                                $params['mensaje'] = 'No se han podido insertar las asignaturas en la base de datos.';
                            }
    
                        } else {                        
                            $params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
                        }   
                    }
                } catch (Exception $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
                    //header('Location: index.php?ctl=error');
                } catch (Error $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
                    //header('Location: index.php?ctl=error');
                }
            
            } else {
                header('Location: index.php?ctl=errorPermisos&problema=areaR');
            }        
            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            }  

            require __DIR__ . '/../templates/insertarAlumno.php';
        }

        /*
            · Esta acción realiza la búsqueda de un alumno en la base de datos.
            · El nombre debe ser completo.
            · Cualquiera puede realizar esta búsqueda.
            · Creamos una instancia nueva de la clase Alumnos.
            · Ejecutamos el método buscarFichaAlumno() de la clase Alumnos.
        */
        public function buscarAlumno() {
            try {
                $params = array(
                    'nombre' => '',
                    'resultado' => array()
                );
                $m = new Alumnos();
                if (isset($_POST['buscar'])) {
                    $nombre = recoge("nombre");
                    $params['nombre'] = $nombre;
                    $params['resultado'] = $m->buscarFichaAlumno($nombre);
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

            require __DIR__ . '/../templates/buscarAlumno.php';
        }     
        
        /*
            · Acción para iniciar sesión.
            · El formulario de login se encuentra en /templates/iniciarSesion.php
            · Recogemos los valores del campo user y password.
            · Creamos una nueva instancia de la clase Usuarios y utilizamos el método loginUsuario().
            · Si el método devuelve algo es que ese usuario existe y por tanto capturamos en este momento su nombre, nivel y foto de perfil.
            · Después de iniciar sesión redirigimos al usuario a la página de inicio.
            · En caso de que no exista la combinación de usuario y password, le mostramos al usuario un mensaje de error.
        */
        public function iniciarSesion() {
            try {   
                $params = array(
                    'resultado' => array()
                );            

                $u = new Usuarios();
                if (isset($_POST['iniciarSesion'])) {
                    
                    $nombre = recoge('usuario');
                    $password = recoge('password');
                    $params['resultado'] = $u->loginUsuario($nombre, $password);

                    if($params['resultado']){
                        $_SESSION['nombreUsuario'] = $params['resultado']['user'];
                        $_SESSION['nivel'] = $params['resultado']['nivel'];
                        $_SESSION['fPerfil'] = $params['resultado']['fPerfil'];        
                        header('Location: index.php?ctl=inicio');               
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

            require __DIR__.'/../templates/iniciarSesion.php';
        }  


        /*
            · Para que un usuario pueda registrarse no puede tener sesión iniciada. Si intenta acceder a la acción de registrarse lo mandamos a la página /templates/errorPermisos.php con el mensaje en la url que capturamos allí.
            · Después de la comprobación del estado del nivel, recogemos los datos que nos llegan del formulario de /templates/registrarse.php
            · Se crea una instancia nueva de la clase Usuarios.
            · USamos el método registrarUsuario() de la clase Usuarios.
            · Si todo va correcto, redirigimos al usuario a la página /templates/registroCorrecto.php desde la acción en el index.php.
        */
        public function registrarse() {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 0 || !isset($_SESSION['nivel'])) {
                try {
                    if (isset($_POST['registrar'])) {
                        $user = recoge('user');
                        $pass = recoge('password');
                        $email = recoge('email');
                        $fPerfil = $_FILES['fPerfil']['name'];
    
                        // comprobar campos formulario. Aqui va la validación con las funciones de bGeneral o la clase Validacion
                        if (validarDatosRegistro($user, $pass, $email, $fPerfil)) {
    
                            $fotoPerfilSaneada = strtolower(str_replace(" ", "_", $fPerfil));
    
                            // Si no ha habido problema creo modelo y hago inserción
                            $u = new Usuarios();
                            if ($u->registrarUsuario($user, $pass, $email, $fotoPerfilSaneada)) {
                                header('Location: index.php?ctl=registroCorrecto');
                            } else {
                                $_SESSION['errores']['errorRegistro'] = 'No se has podido registrarte. Revisa el formulario';
                            }
    
                        } else {                        
                            $_SESSION['errores']['datos'] = 'Hay datos que no son correctos. Revisa el formulario';
                        }   
                    }
                } catch (Exception $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
                    header('Location: index.php?ctl=error');
                } catch (Error $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
                    header('Location: index.php?ctl=error');
                }
            } else {
                header('Location: index.php?ctl=errorPermisos&problema=areaR');
            }   

            
            

            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            }  

            require __DIR__.'/../templates/registrarse.php';
        }  

        /*
            · Acción muestra la página de /templates/registroCorrecto.php
            · Se ejecutará cuando un usuario se haya registrado correctamente desde la página /templates/registrarse.php
        */
        public function registroCorrecto() {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/registroCorrecto.php';
        } 

        /*
            · Acción que muestra un listado completo de los usuarios en la página /templates/listarAlumnosLogin.php
            · Esta página sólo es accesible si el usuario ha iniciado sesión. En caso contrario se le mandará a la página /templates/errorPermisos.php con el problema en la url para recogerlo allí y mostrar un mensaje personalizado.
            · Creamos una instancia nueva de Alumnos.
            · Ejecutamos el método mostrarAlumnos().
            · En la página la tabla mostrará más datos que la página sin estar logueado.
        */
        public function listarLogin() {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                
                try {
                    $m = new Alumnos();
                    $params = array(
                        'alumnos' => $m->mostrarAlumnos()
                    );
    
                    // Recogemos los dos tipos de excepciones que se pueden producir
                } catch (Exception $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
                    header('Location: index.php?ctl=error');
                } catch (Error $e) {
                    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
                    header('Location: index.php?ctl=error');
                }                
                
            } else {
                header('Location: index.php?ctl=errorPermisos&problema=areaR');
            } 

            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            }  

            require __DIR__ . '/../templates/listarAlumnosLogin.php';
        }

        /*
            · Acción que muestra la página /templates/errorPermisos.php
        */
        public function errorPermisos() {
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } ;
            require __DIR__.'/../templates/errorPermisos.php';
        }  
        
        /*
            · Cerramos sesión borrando los parámetros de $_SESSION con session_unset().
            · Al borrar todos los valores de la sesion se pierde el nivel y desde entonces se muestra el menú para usuarios invitados.
        */

        public function cerrarSesion() {
            session_unset();
            require __DIR__.'/../templates/cerrarSesion.php';
        }  


    }

?>
