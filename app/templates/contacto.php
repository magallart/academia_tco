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
                    ¿Cómo podemos ayudarte?
                </h1>
                <p>
                    La comunicación con nuestros alumnos es directa, rápida y transparente. Queremos solucionar cualquier duda que tengas y para ello ponemos a tu disposición el formulario de contacto. Escríbenos y en menos de 24 horas recibirás una respuesta de nuestra parte.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="../img/contacto-header.png" class="d-block mx-lg-auto img-fluid" alt="Hombre con barba riendo" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<section class="academia academia1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 bg-image order-lg-1 order-md-1 order-sm-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 text-information order-lg-2 order-md-2 order-sm-2 text-lg-start text-md-center text-sm-center">
                <h2 class="ms-lg-0 mx-md-auto mx-sm-auto">Estamos a tu lado en todo momento</h2>
                <p>Sabemos lo duro que es ser un alumno y sentirse desamparado, por eso en ATCO tenemos claro que el contacto entre la academia y nuestros alumnos es fundamental. Ponemos a tu servicio diversos método de contacto para que elijas el que prefieras.</p>
                <p>No te quedes con ninguna duda y pregúntanos lo que necesites, estamos aquí para ayudarte y allanarte el camino para que te centres en lo importante: tu formación.</p>
                <p>Una vez que accedas a los cursos (sólo para usuarios registrados) tendrás acceso a los métodos de contacto del docente del curso para que resuelva todas tus dudas.</p>
                <p>Más abajo te dejamos un formulario de contacto que puedes rellenar y enviarnos de forma gratuita. En menos de 24 horas recibirás una respuesta por nuestra parte.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="container py-5">
                    <div class="row contacto">
                        <div class="col">
                            <h2>Formulario de contacto</h2>
                            <form name="formContacto" action="index.php?ctl=contacto" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-outline">
                                            <label for="nombre">Nombre Completo</label>
                                            <input type="text" name="nombre" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-outline">
                                            <label for="asunto">Asunto</label>
                                            <input type="text" name="asunto" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-outline">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-outline">
                                            <label for="mensaje">Mensaje</label>
                                            <textarea name="mensaje" form="formContacto" rows="6"></textarea>
                                        </div>
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

                                <input type="submit" value="Enviar mensaje" name="enviarMensaje" class="boton" />
                            </form>
                            <p class="formulario-rgpd mt-5">
                                <span class="negrita">Responsable</span>: Miguel Ángel Gallart Aleixandre. <span class="negrita">Fin del tratamiento</span>: Añadir sus datos personales a nuestra base de datos como usuario registrado en ATCO. <span class="negrita">Legitimación</span>: Consentimiento del interesado. <span class="negrita">Destinatarios</span>: Entidades necesarias para la prestación del servicio exclusivamente. <span class="negrita">Derechos</span>: Acceso, rectificación o supresión, limitación del tratamiento, oposición al tratamiento y portabilidad. <span class="negrita">Información adicional</span>: Puede consultar información adicional y detallada sobre Protección de Datos en nuestra Política de privacidad.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 contacto-opciones offset-lg-1">
                <div class="contacto-opciones-div">
                    <ion-icon name="call-outline"></ion-icon>
                    <h2>Contacta</h2>
                    <p>Lunes a viernes:</p>
                    <p>09:00 AM – 14:00 PM</p>
                    <p>16:00 AM – 20:00 PM </p>
                </div>

                <div class="contacto-opciones-div">
                    <ion-icon name="mail-outline"></ion-icon>
                    <h2>Escríbenos a</h2>
                    <p>info@atco.com</p>
                </div>

                <div class="contacto-opciones-div">
                    <ion-icon name="call-outline"></ion-icon>
                    <h2>Llámanos al</h2>
                    <p>961 20 58 75</p>
                </div>

                <div class="contacto-opciones-div">
                    <ion-icon name="home-outline"></ion-icon>
                    <h2>Visítanos en</h2>
                    <p>D'Alberic, 18, 46008 Valencia</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php

if (isset($_SESSION['erroresValidacion'])) {
    echo "<div class='errores'>";
    foreach ($_SESSION['erroresValidacion'] as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
}
unset($_SESSION['erroresValidacion']);
?>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>