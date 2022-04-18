<?php

    /* 
        · Aquí se encuentras todas las acciones posibles.
        · En todas las acciones antes del require final se elige el tipo de menú a mostrar dependiendo del nivel de usuario conectado.
    */

    class Controller {

        // Muestra el contenido de /templates/inicio.php
        public function cInicio() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/inicio.php';
        }

        // Muestra el contenido de /templates/academia.php
        public function cAcademia() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/academia.php';
        }

        // Muestra el contenido de /templates/cursos.php
        public function cCursos() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/cursos.php';
        }

        // Muestra el contenido de /templates/contacto.php
        public function cContacto() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/contacto.php';
        }

        // Muestra el contenido de /templates/iniciarSesion.php
        public function cIniciarSesion() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/iniciarSesion.php';
        }

        // Muestra el contenido de /templates/registro.php
        public function cRegistro() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/registro.php';
        }

         // Muestra el contenido de /templates/politicaPrivacidad.php
         public function cPoliticaPrivacidad() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/politicaPrivacidad.php';
        }

         // Muestra el contenido de /templates/politicaCookies.php
         public function cPoliticaCookies() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/politicaCookies.php';
        }

         // Muestra el contenido de /templates/avisosLegales.php
         public function cAvisosLegales() {            
            if (isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1) {
                $menu = 'menuLogin.php';
            } else {
                $menu = 'menu.php';
            } 
            require __DIR__.'/../templates/avisosLegales.php';
        }

        
    }

?>
