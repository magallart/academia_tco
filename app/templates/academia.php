<?php ob_start(); ?>

<!--
    · Contenido de la página de Academia ATCO. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Academia Tus Cursos Online
                </h1>
                <p>
                    Más de 450 alumnos han realizado alguno de nuestros cursos y muchos de ellos han podido encontrar trabajo como desarrolladores web, ¿quieres saber cómo lo han hecho? Sigue leyendo y descubre qué nos hace especiales.
                </p>
                <p>Todos nuestros cursos son gratuitos, ¿te animas a realizar un curso con nosotros y aprender las últimas tecnologías del sector?</p>
                <div class="text-md-start text-sm-center">
                    <a class="boton" href="#">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="academia academia1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 bg-image order-lg-1 order-md-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 text-information order-lg-2 order-md-2">
                <h2>Especialistas en formación online sobre desarrollo web</h2>
                <p>El proyecto de la Academia Tus Cursos Online (ATCO) empezó hace 10 años y desde entonces más de 450 alumnos han hecho cursos en nuestra plataforma online con un grado de satisfacción. Un grupo de docentes pensaban que había la enseñanza necesitaba una vuelta de tuerca y decidimos dar ese paso y a comenzar la aventura de nuestras vidas. Con nuestra formación gratuita podrás aprender las tecnologías más demandadas en la actualidad que te servirán para dar un impulso a tu carrera como desarrollador web.</p>
            </div>
        </div>
    </div>
</section>

<section class="academia academia2">
    <div class="container">
        <div class="row">            
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 text-information order-lg-1 order-md-2">
                <h2>Nuestro método</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur pariatur delectus accusamus necessitatibus similique? Debitis quaerat doloremque molestiae distinctio at odit vel accusamus minus earum, excepturi tenetur ratione quis dolores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur pariatur delectus accusamus necessitatibus similique? Debitis quaerat doloremque molestiae distinctio at odit vel accusamus minus earum, excepturi tenetur ratione quis dolores.</p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 bg-image order-lg-2 order-md-1"></div>
        </div>
    </div>
</section>

<section class="academia academia3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 bg-image order-lg-1 order-md-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 text-information order-lg-2 order-md-2">
                <h2>Formarás parte de nuestra gran familia</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur pariatur delectus accusamus necessitatibus similique? Debitis quaerat doloremque molestiae distinctio at odit vel accusamus minus earum, excepturi tenetur ratione quis dolores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur pariatur delectus accusamus necessitatibus similique? Debitis quaerat doloremque molestiae distinctio at odit vel accusamus minus earum, excepturi tenetur ratione quis dolores.</p>
            </div>
        </div>
    </div>
</section>



<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>