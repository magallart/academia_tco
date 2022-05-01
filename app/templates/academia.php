<?php ob_start(); ?>

<!--
    · Contenido de la página de Academia ATCO. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<div class="comming-soon">
    <h1>Página de Academia ATCO</h1>
    <p>Próximamente</p>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center">El proyecto de la Academia Tus Cursos Online (ATCO) empezó hace 10 años y desde entonces más de 450 alumnos han hecho cursos en nuestra plataforma online con un grado de satisfacción. Un grupo de docentes pensaban que había la enseñanza necesitaba una vuelta de tuerca y decidimos dar ese paso y a comenzar la aventura de nuestras vidas. Con nuestra formación gratuita podrás aprender las tecnologías más demandadas en la actualidad que te servirán para dar un impulso a tu carrera como desarrollador web. </p>
            </div>
        </div>
    </div>
</section>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>