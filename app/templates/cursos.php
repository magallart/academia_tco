<?php ob_start(); ?>

<!--
    · Contenido de la página de Cursos. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                Cursos ATCO
                </h1>
                <p>
                Disfruta de forma gratuita de todos los cursos de desarrollo web que ofrecemos en la academia. Actualmente disponemos de 4 cursos, pero visítanos regularmente porque tenemos preparados muchos más.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="titulo-superior center">Fórmate para el futuro</span>
                <h2 class="center">Los mejores cursos de Desarrollo Web</h2>
                <p class="text-center">En Academia Tus Cursos Online te ofrecemos un amplio repertorio de cursos enfocados al desarrollo web más actual. Nos esforzamos en actualizar constantemente todos nuestros cursos para ofrecerte la mejor calidad. Con nosotros aprenderás lo necesario para trabajar en poco tiempo como desarrollador, ¿empezamos?</p>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-js.jpg" alt="Logo JavaScript">
                    <h3>JavaScript</h3>
                    <p>JavaScript se ha convertido en uno de los lenguajes más populares para el desarrollo web hoy en día. Gracias a constantes mejores se ha convertido en un lenguaje robusto y muy solvente tanto para frontend como backend.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoJavascript" alt="Enlace a curso de JavaScript">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-angular.jpg" alt="Logo Angular">
                    <h3>Angular</h3>
                    <p>Angular es un framework basado en JavaScript con una amplia demanda en el sector y es un framework que ha venido para quedarse gracias al respaldo de Google. Te recomendamos hacer el curso de JavaScript primero.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoAngular" alt="Enlace a curso de Angular">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
                <img src="../img/logo-react.jpg" alt="Logo React">
                <h3>React</h3>
                <p>React es otro framework cuyo origen es JavaScript. Se basa en TypeScript que no es otra cosa que JavaScript vitaminado por lo que te recomendamos hacer el curso de JavaScript. Cuenta con una comunidad creciente muy activa.</p>
                <a class="boton-blanco" href="index.php?ctl=cursoReact">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de React"></ion-icon></a>
            </div>

        </div>
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
            <img src="../img/logo-git.jpg" alt="Logo JavaScript">
            <h3>Git</h3>
            <p>Git es un control de versiones que ayuda a crear copias de seguridad del código escrito entre otras muchas funcionalidades sin las cuales los programadores de hoy en día no sabrían vivir. Es esencial manejar Git como desarrollador.</p>
            <a class="boton-blanco" href="index.php?ctl=cursoGit" alt="Enlace a curso de Git">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de Git"></ion-icon></a>
        </div>

    </div>   
    
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-vue.jpg" alt="Logo Vue">
                    <h3>Vue</h3>
                    <p>Vue.js es un framework de JavaScript de código abierto para la construcción de interfaces de usuario y aplicaciones de una sola página. Está dentro de los 3 frameworks de JavaScript más usados en la actualidad por muchas empresas.</p>
                    <a class="boton-blanco" href="#" alt="Enlace a curso de JavaScript">Proximamente</a>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-node.jpg" alt="Logo NodeJs">
                    <h3>NodeJs</h3>
                    <p>Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor basado en el lenguaje de programación JavaScript. Gracias a Node, JavaScript también es un lenguaje de backend.</p>
                    <a class="boton-blanco" href="#" alt="Enlace a curso de JavaScript">Proximamente</a>
                </div>

            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
                <img src="../img/logo-bootstrap5.jpg" alt="Logo Bootstrap 5">
                <h3>Bootstrap 5</h3>
                <p>Bootstrap 5 es una herramienta que proporciona plantillas para CSS y HTML que facilitan la colocación y el diseño de la página, las fuentes, los botones y los elementos de navegación. Fundamental saber utilizar Bootstrap 5 si quieres hacer webs responsive.</p>
                <a class="boton-blanco" href="#" alt="Enlace a curso de JavaScript">Proximamente</a>
            </div>

        </div>
        <div class="col-12 col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
            <img src="../img/logo-html5css3.jpg" alt="Logo HTML5 y CSS3">
            <h3>HTML5 y CSS3</h3>
            <p>HTML5 y CSS3 están directamente relacionados a la estructúra y aspecto visual de las paginas web de internet, con los cuales interactuamos a travéz de los navegadores. Son los pilares básicos del desarrollo web que todo el mundo debe conocer.</p>
            <a class="boton-blanco" href="#" alt="Enlace a curso de JavaScript">Proximamente</a>
        </div>

    </div> 
</section>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>