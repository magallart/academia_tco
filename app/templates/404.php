<?php ob_start(); ?>

<!--
    · Contenido de la página de 404. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="container my-5 error404">
    <div class="row d-flex align-items-center ">
        <div class="col order-lg-1 order-md-2">
            <img src="../../img/error-404.jpg" alt="Imagen de error">
        </div>

        <div class="col order-lg-2 order-md-1">
            <h1>Página no encontrada</h1>
            <p>Parece que estás intentando acceder a una página que no existe en nuestra academia. Por favor, revisa bien la ruta a la que intentas acceder y vuelve a intentarlo.</p>
            <p>Asegúrate de haber escrito bien la dirección y contacta con nosotros si el problema persiste, somos humanos y podemos equivocarnos. Disculpa las molestias.</p>
        </div>
    </div>
</div>



<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>