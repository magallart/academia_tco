<?php
    /* 
        Cargamos todas las librerías, las diferentes clases y el controlador done están las acciones 
    */
    require_once __DIR__ . '/../app/libs/config.php';
    require_once __DIR__ . '/../app/libs/utils.php';
    require_once __DIR__ . '/../app/modelo/classModelo.php';
    require_once __DIR__ . '/../app/modelo/classUsuarios.php';
    require_once __DIR__ . '/../app/modelo/classNewsletter.php';
    require_once __DIR__ . '/../app/modelo/classCursos.php';
    require_once __DIR__ . '/../app/controlador/Controller.php';

    /*
        Iniciamos sesion en el index.php y de esta forma nos aseguramos de que todas las páginas tengan sesiones ya que todas pasan por el index.php que inicia sesión.
    */
    session_start();
    

    // Array de mapeo donde se contemplan todas las posibles acciones
    $map = array(
        'inicio' => array('controller' =>'Controller', 'action' =>'cInicio'),
        'newsletter' => array('controller' =>'Controller', 'action' =>'cNewsletter'),
        'academia' => array('controller' =>'Controller', 'action' =>'cAcademia'),
        'cursos' => array('controller' =>'Controller', 'action' =>'cCursos'),
        'cursoJavascript' => array('controller' =>'Controller', 'action' =>'cCursoJavascript'),
        'cursoAngular' => array('controller' =>'Controller', 'action' =>'cCursoAngular'),
        'cursoReact' => array('controller' =>'Controller', 'action' =>'cCursoReact'),
        'cursoGit' => array('controller' =>'Controller', 'action' =>'cCursoGit'),
        'contacto' => array('controller' =>'Controller', 'action' =>'cContacto'),
        'iniciarSesion' => array('controller' =>'Controller', 'action' =>'cIniciarSesion'),
        'registro' => array('controller' =>'Controller', 'action' =>'cRegistro'),
        'recuperarPassword' => array('controller' =>'Controller', 'action' =>'cRecuperarPassword'),
        'cerrarSesion' => array('controller' =>'Controller', 'action' =>'cCerrarSesion'),
        'perfil' => array('controller' =>'Controller', 'action' =>'cPerfil'),
        'datosActualizados' => array('controller' =>'Controller', 'action' =>'cDatosActualizados'),
        'politicaPrivacidad' => array('controller' =>'Controller', 'action' =>'cPoliticaPrivacidad'),
        'politicaCookies' => array('controller' =>'Controller', 'action' =>'cPoliticaCookies'),
        'avisosLegales' => array('controller' =>'Controller', 'action' =>'cAvisosLegales'),
        '404' => array('controller' =>'Controller', 'action' =>'c404'),
        'panelAdministracion' => array('controller' =>'Controller', 'action' =>'cPanelAdministracion'),
    );

    /*
        Capturamos la acción con el método $_GET y si no existe mostramos una página de error simple indicando que la acción no existe.
    */
    if (isset($_GET['ctl'])) {
        if (isset($map[$_GET['ctl']])) {
            $ruta = $_GET['ctl'];
        } else {
            $ruta = '404';
        }
    } else {
        $ruta = 'inicio';
    }
    $controlador = $map[$ruta];
    
    /* 
        Comprobamos si el metodo correspondiente a la acción relacionada con el valor de ctl existe, si es así ejecutamos el método correspondiente.        
        En aso de no existir cabecera de error.    
        En caso de estar utilizando sesiones y permisos en las diferentes acciones comprobariaos tambien si el usuario tiene permiso suficiente para ejecutar esa acción
    */

    if (method_exists($controlador['controller'],$controlador['action'])) {
        call_user_func(array(new $controlador['controller'],
            $controlador['action']));
    } else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: El controlador <i>' .
            $controlador['controller'] .
            '->' .
            $controlador['action'] .
            '</i> no existe</h1></body></html>';
    }

?>