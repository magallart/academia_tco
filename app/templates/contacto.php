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

<div class="container py-5">
    <div class="row registro">
        <div class="col">
            <h2>Formulario de registro</h2>
            <form name="formRegistro" action="index.php?ctl=contacto" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-outline">
                            <label for="fPerfil">Seleccione una foto de perfil</label>
                            <input type="file" name="fPerfil" class="fileInput" id="fPerfilInput" />
                        </div>
                    </div>

                    <input type="submit" value="Registrar Ahora" name="registrarCuenta" class="boton" /> 
            </form>
            <p class="formulario-rgpd mt-5">
                <span class="negrita">Responsable</span>: Miguel Ángel Gallart Aleixandre. <span class="negrita">Fin del tratamiento</span>: Añadir sus datos personales a nuestra base de datos como usuario registrado en ATCO. <span class="negrita">Legitimación</span>: Consentimiento del interesado. <span class="negrita">Destinatarios</span>: Entidades necesarias para la prestación del servicio exclusivamente. <span class="negrita">Derechos</span>: Acceso, rectificación o supresión, limitación del tratamiento, oposición al tratamiento y portabilidad. <span class="negrita">Información adicional</span>: Puede consultar información adicional y detallada sobre Protección de Datos en nuestra Política de privacidad.
            </p>
        </div>
    </div>
</div>

<?php 

if (isset($_SESSION['errores'])) {
    echo "<div class='errores'>";
    foreach ($_SESSION['errores'] as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
}
unset($_SESSION['errores']);
?>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>