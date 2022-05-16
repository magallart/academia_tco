<?php ob_start(); ?>

<!--
    · Contenido de la página de Registro. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->
<header>
    <div class="container col-xxl-8 pt-lg-3">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                ¡Regístrate gratis!
                </h1>
                <p>
                ¿Todavía no tienes una cuenta en ATCO? Regístrate ahora totalmente gratis y disfruta de todos los cursos de la plataforma que tenemos para ti. Tan sólo tienes que rellenar el formulario y confirmar el email que te mandaremos. En menos de 3 minutos podrás empezar los cursos, ¿a qué esperas?
                </p>
                <div class="text-md-start text-sm-center">
                    <a class="boton" href="index.php?ctl=cursos">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/registro-header.png" class="d-block mx-lg-auto img-fluid" alt="Hombre con laptop riendo" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<div class="container py-5">
    <div class="row registro">
        <div class="col">
            <h2>Formulario de registro</h2>
            <form name="formRegistro" action="index.php?ctl=registro" method="POST" enctype="multipart/form-data">
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
                    <div class="col-lg-7">
                        <div class="form-outline">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="" />
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-outline">
                            <label for="fNacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fNacimiento" placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-outline">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-outline">
                            <label for="cPostal">Código Postal</label>
                            <input type="text" name="cPostal" placeholder="" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-outline">
                            <label for="localidad">Localidad</label>
                            <input type="text" name="localidad" placeholder="" />
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

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                He leído y acepto las <a href="index.php?ctl=politicaPrivacidad" alt="Enlace a página de Políticas de Privacidad" target="blank" class="link">Políticas de privacidad</a>.
                            </label>
                        </div>
                    </div>

                    <input type="submit" value="Registrar Ahora" name="registrarCuenta" class="boton" /> <!-- TODO realizar funcionalidad de registrar cuenta  -->
            </form>
            <p class="formulario-rgpd mt-5">
                <span class="negrita">Responsable</span>: Miguel Ángel Gallart Aleixandre. <span class="negrita">Fin del tratamiento</span>: Añadir sus datos personales a nuestra base de datos como usuario registrado en ATCO. <span class="negrita">Legitimación</span>: Consentimiento del interesado. <span class="negrita">Destinatarios</span>: Entidades necesarias para la prestación del servicio exclusivamente. <span class="negrita">Derechos</span>: Acceso, rectificación o supresión, limitación del tratamiento, oposición al tratamiento y portabilidad. <span class="negrita">Información adicional</span>: Puede consultar información adicional y detallada sobre Protección de Datos en nuestra Política de privacidad.
            </p>
        </div>
    </div>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>