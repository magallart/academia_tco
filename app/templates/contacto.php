<?php ob_start(); ?>

<!--
    · Contenido de la página de Contacto. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<header>
    <div class="container col-xxl-8 pt-lg-5">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Prepárate para el futuro
                </h1>
                <p>
                    La comunicación con nuestros alumnos es directa, rápida y transparente. Queremos solucionar cualquier duda que tengas y para ello ponemos a tu disposición el formulario de contacto. Escríbenos y en menos de 24 horas recibirás una respuesta de nuestra parte.
                </p>
                <div class="text-md-start text-sm-center">
                    <a class="boton" href="index.php?ctl=cursos">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/contacto-header.png" class="d-block mx-lg-auto img-fluid" alt="Hombre con barba riendo" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<div class="comming-soon">
    <h1>Página de Contacto</h1>
    <p>Próximamente</p>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>