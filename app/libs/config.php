<?php

    class Config {

        static public $mvc_bd_hostname = "localhost";
        static public $mvc_bd_nombre = "academia_tco";
        static public $mvc_bd_usuario = "root";
        static public $mvc_bd_clave = "";
        static public $mvc_vis_css = "estilo.css";

        static public $vista = __DIR__ . '/../templates/inicio.php';

        static public $menu = __DIR__ . '/../templates/menu.php';

        static public $directorioFotosAlumnos = '/img/alumnos/';
        static public $directorioFotosUsuarios = '/img/usuarios/';

    }
?>