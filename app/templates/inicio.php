<?php ob_start(); ?>

<!--
    · Contenido de la página de inicio. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8">
        <div class="row middle g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-start text-sm-center">
                <h1 class="title-header">
                    Prepárate para el futuro
                </h1>
                <p>
                    Adquiere las habilidades y conocimientos necesarios para ser un desarrollador web, una de las profesiones
                    más demandadas en el mercado laboral hoy en día.
                </p>
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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="titulo-superior center">Aprende cuando y donde quieras</span>
                <h2 class="text-center">Formación online a medida en ATCO</h2>
                <p class="text-center">El proyecto de la Academia Tus Cursos Online (ATCO) empezó hace 10 años y desde entonces más de 450 alumnos han hecho cursos en nuestra plataforma online con un altísimo grado de satisfacción. Gracias a la formación gratuita que puedes encontrar en nuestra web, puedes aprender las tecnologías más demandadas en la actualidad que te servirán para dar un impulso a tu carrera como desarrollador web. La formación ATCO tiene como finalidad enseñar todos los conceptos básicos con un toque característico que sin duda hará más fácil el aprendizaje. ¿Te animas a comprobarlo por ti mismo? </p>
                <div class="center">
                    <a class="boton" href="index.php?ctl=cursos" alt="Enlace a páginas de cursos">Ver todos los cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cards py-5">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center pb-md-5 order-sm-1 mt-sm-3">
                <div class="card-color">
                    <ion-icon name="desktop-outline"></ion-icon>
                    <h3>Temarios actualizados</h3>
                    <p>Desde ATCO te ofrecemos cursos actuales con tecnologías que se usan en el mercado laboral. Nuestros docentes se encargan de actualizar sus cursos periódicamente.</p>
                </div>
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center order-sm-2 mt-sm-3">
                <div class="card-white">
                    <ion-icon name="timer-outline"></ion-icon>
                    <h3>Marcas tu ritmo</h3>
                    <p>Sin exámenes. Sin plazos. Sin presiones. Nosotros te facilitamos el material didáctico y tú eliges cómo y cuando aprender. En ATCO no recibirás presiones de los docentes o plazos.</p>
                </div>
            </div>
        </div>

        <div class="row pt-lg-1 pt-md-5">
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center order-lg-1 order-md-2 order-sm-4 mt-sm-3">
                <div class="card-white">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                    <h3>Método que funciona</h3>
                    <p>Seguro que has leído esto en muchos sitios, aunque en ATCO te lo dicen nuestros alumnos satisfechos con nuestros cursos que han podido impulsar su carrera como desarrolladores.</p>

                </div>
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center pb-md-5 order-lg-2 order-md-1 order-sm-3 mt-sm-3">
                <div class="card-color">

                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <h3>Atención personalizada</h3>
                    <p>Queremos que formes parte de la familia ATCO y no estés sólo en ningún momento, por ello estaremos a tu lado motivándote y resolviendo cualquier tipo de duda que puedas tener.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner py-5">
                        <div class="carousel-item active text-center">
                            <img src="../img/testimonial-1.png" alt="">
                            <h3 class="slider__caption">Marta Solís</h3>
                            <p class="slider__txt">Quería cambiar de profesión y no sabía por donde empezar. Encontré ATCO en internet y me sirvió de mucha ayuda para empezar como desarrolladora.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <img src="../img/testimonial-2.png" alt="">
                            <h3 class="slider__caption">Roberto Guardado</h3>
                            <p class="slider__txt">Llevaba muchos años como programador de backend y tenía curiosidad por el front. Gracias a los cursos de la plataforma pude empezar con el frontend.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <img src="../img/testimonial-3.png" alt="">
                            <h3 class="slider__caption">Carmen Lorenzo</h3>
                            <p class="slider__txt">Los cursos ofrecidos están actualizados con las últimas novedades y esto me ha resultado muy útil ya que en otras plataformas reciclan cursos durante años.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <img src="../img/testimonial-4.png" alt="">
                            <h3 class="slider__caption">Alberto Ruíz</h3>
                            <p class="slider__txt">No sabía nada de programación y después de haber realizado todos los cursos de la academia me veo capacitado para buscar trabajo como desarrollador.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12"><img src="../img/inicio-chica-estudiando-01.jpg" alt="" class="img-fluid"></div>
        </div>
    </div>
</section>


<section class="data py-5">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-6 pb-md-5">
                <div class="circle-card">
                    <span class="numbers">120</span>
                    <span class="words">Alumnos actuales</span>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6 pb-md-5">
                <div class="circle-card">
                    <span class="numbers">23</span>
                    <span class="words">Cursos<br> Online</span>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6">
                <div class="circle-card">
                    <span class="numbers">480</span>
                    <span class="words">Alumnos totales</span>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6">
                <div class="circle-card">
                    <span class="numbers">100%</span>
                    <span class="words">Grado de satisfacción</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="information">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 bg-image"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 text-white text-information">
                <h2>Más de 10 años formando a desarrolladores web</h2>
                <p>Hace más de 10 años, un grupo de docentes cansados emprendieron la mayor locura de sus vidas: crearon ATCO. Tras largas trayectorias profesionales en la enseñanza presencial estaban cansados de las metodologías tradicionales viendo como un alto porcentaje de sus alumnos no conseguían sus objetivos.</p>
                <p>La educación presencial tiene muchas limitaciones, por ejemplo, limita a los alumnos por horarios o distancia. Sin embargo, la enseñanza online es cómoda, personalizable, directa y tiene un índice de satisfacción mucho más elevado.</p>
                <p>¿Quieres saber por qué nuestros alumnos están encantados con nuestros cursos?</p>
                <a class="boton boton-blanco " href="index.php?ctl=academia" alt="Enlace a página de academia">Descubre los motivos<ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
            </div>
        </div>
    </div>
</section>

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
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-js.jpg" alt="Logo JavaScript">
                    <h3>JavaScript</h3>
                    <p>JavaScript se ha convertido en uno de los lenguajes más populares para el desarrollo web hoy en día. Gracias a constantes mejores se ha convertido en un lenguaje robusto y muy solvente tanto para frontend como backend.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoJavascript" alt="Enlace a curso de JavaScript">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5">
                <div class="course text-white">
                    <img src="../img/logo-angular.jpg" alt="Logo Angular">
                    <h3>Angular</h3>
                    <p>Angular es un framework basado en JavaScript con una amplia demanda en el sector y es un framework que ha venido para quedarse gracias al respaldo de Google. Te recomendamos hacer el curso de JavaScript primero.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoAngular" alt="Enlace a curso de Angular">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
                <img src="../img/logo-react.jpg" alt="Logo React">
                <h3>React</h3>
                <p>React es otro framework cuyo origen es JavaScript. Se basa en TypeScript que no es otra cosa que JavaScript vitaminado por lo que te recomendamos hacer el curso de JavaScript. Cuenta con una comunidad muy activa.</p>
                <a class="boton-blanco" href="index.php?ctl=cursoReact">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de React"></ion-icon></a>
            </div>

        </div>
        <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5 mt-5"">
                <div class=" course text-white">
            <img src="../img/logo-git.jpg" alt="Logo JavaScript">
            <h3>Git</h3>
            <p>Git es un control de versiones que ayuda a crear copias de seguridad del código escrito entre otras muchas funcionalidades sin las cuales los programadores de hoy en día no sabrían vivir. Es esencial manejar Git como desarrollador.</p>
            <a class="boton-blanco" href="index.php?ctl=cursoGit" alt="Enlace a curso de Git">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de Git"></ion-icon></a>
        </div>

    </div>
    <div class="row mb-5">
        <div class="col center"><a class="boton" href="index.php?ctl=cursos" alt="Enlace a página de cursos">Ver todos los cursos ahora <ion-icon name="arrow-forward-circle-outline">
                </ion-icon></a></div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="row pb-5">
            <div class="col">
                <span class="titulo-superior center">Síguenos en las redes</span>
                <h2 class="center">¡Novedades, promociones y mucho más!</h2>
                <p class="text-center">¿Quieres ser el primero en enterarte de cuando publicamos un nuevo curso? ¿Te interesa saber qué cursos tenemos planificados para publicar próximamente? Además de todo lo anterior, si te suscribes a nuestra newsletter podrás recibir píldoras informativas que sólo enviamos a nuestros suscriptores. Es totalmente gratuito, como todo en nuestra academia.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <form name="newsletterForm" action="index.php?ctl=newsletter" method="POST" enctype="multipart/form-data">
                        <!-- TODO añadir el controlador newsletter -->
                        <input type="email" placeholder="Escribe tu email">
                        <input type="submit" value="Suscribirme" name="newsletter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>