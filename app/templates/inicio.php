<?php ob_start(); ?>

<!--
    · Contenido de la página de inicio. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<header>
    <div class="container col-xxl-8 py-5">
        <div class="row middle g-5 py-5">
            <div class="col-lg-6">
                <h1 class="title-header">
                    Prepárate para el futuro
                </h1>
                <p>
                    Adquiere las habilidades y conocimientos necesarios para ser un desarrollador web, una de las profesiones
                    más demandadas en el mercado laboral hoy en día.
                </p>
                <div class="left">
                    <a class="boton" href="#">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <!--  TODO Controlar la imagen en responsive -->
                <img src="../img/inicio-header.png" class="d-block mx-lg-auto img-fluid" alt="Chica sonriendo con un laptop en la mano" width="700" height="500" loading="lazy" />
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="titulo-superior center">Aprende cuando y donde quieras</span>
                <h2 class="center">Formación online a medida en ATCO</h2> <!-- TODO cambiar texto -->
                <p class="text-center">El proyecto de la Academia Tus Cursos Online (ATCO) empezó hace 10 años y desde entonces más de 450 alumnos han hecho cursos en nuestra plataforma online con un altísimo grado de satisfacción. Gracias a la formación gratuita que puedes encontrar en nuestra web, puedes aprender las tecnologías más demandadas en la actualidad que te servirán para dar un impulso a tu carrera como desarrollador web. La formación ATCO tiene como finalidad enseñar todos los conceptos básicos con un toque característico que sin duda hará más fácil el aprendizaje. ¿Te animas a comprobarlo por ti mismo?  </p>
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
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center pb-md-5">
                <div class="card-color">
                    <ion-icon name="desktop-outline"></ion-icon>
                    <h3>Temarios actualizados</h3>
                    <p>Desde ATCO te ofrecemos cursos actuales con tecnologías que se usan en el mercado laboral. Nuestros docentes se encargan de actualizar sus cursos periódicamente aportando contenido de calidad actualizado.</p>
                </div>
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center">
                <div class="card-white">
                    <ion-icon name="timer-outline"></ion-icon>
                    <h3>Marcas tu ritmo</h3>
                    <p>Sin exámenes. Sin plazos. Sin presiones. Nosotros te facilitamos el material didáctico y tú eliges cómo y cuando aprender. En ATCO no recibirás presiones de los docentes o plazos para completar el curso.</p>
                </div>
            </div>
        </div>

        <div class="row pt-lg-1 pt-md-5">
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center order-lg-1 order-md-2">
                <div class="card-white">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                    <h3>Método que funciona</h3>
                    <p>Seguro que has leído esto en muchos sitios, aunque en ATCO te lo dicen nuestros alumnos satisfechos con nuestros cursos que han podido impulsar o iniciar su carrera en una de las profesiones más demandadas en el mercado laboral.</p>

                </div>
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12 text-center pb-md-5 order-lg-2 order-md-1">
                <div class="card-color">

                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <h3>Atención personalizada</h3>
                    <p>Una de las ventajas que tienen los alumnos registrados en ATCO más importantes y de la que nos sentimos más orgullosos es poder tener contacto directo con los docentes del curso y otros alumnos. No estarás solo en el camino, ¡estaremos contigo!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="slider pb-3">
                    <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />
                    <input type="radio" name="slider" title="slide2" class="slider__nav" />
                    <input type="radio" name="slider" title="slide3" class="slider__nav" />
                    <input type="radio" name="slider" title="slide4" class="slider__nav" />
                    <div class="slider__inner">
                        <div class="slider__contents "><img src="../img/testimonial-1.png" alt="">
                            <h3 class="slider__caption">Marta Solís</h3>
                            <p class="slider__txt">Quería cambiar de profesión y no sabía por donde empezar. Encontré ATCO en internet y me sirvió de mucha ayuda para empezar como desarrolladora.</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-2.png" alt="">
                            <h3 class="slider__caption">Roberto Guardado</h3>
                            <p class="slider__txt">Llevaba muchos años como programador de backend y tenía curiosidad por el front. Gracias a los cursos de la plataforma pude empezar con el frontend de una manera sencilla.</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-3.png" alt="">
                            <h3 class="slider__caption">Carmen Lorenzo</h3>
                            <p class="slider__txt">Los cursos ofrecidos están actualizados con las últimas novedades y esto me ha resultado muy útil ya que en otras plataformas reciclan cursos durante años.</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-4.png" alt="">
                            <h3 class="slider__caption">Alberto Ruíz</h3>
                            <p class="slider__txt">No sabía nada de programación y después de haber realizado todos los cursos de la academia me veo capacitado para buscar mi primer trabajo como desarrollador.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12"><img src="../img/inicio-chica-estudiando-01.jpg" alt="" class="img-fluid"></div>
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
            <div class="col col-lg-6 col-md-12 bg-image"></div>
            <div class="col col-lg-6 col-md-12 p-5 text-white text-information">
                <h2>Más de 10 años formando a desarrolladores web</h2>
                <p>Hace más de 10 años, un grupo de docentes cansados emprendieron la mayor locura de sus vidas: crearon ATCO. Tras largas trayectorias profesionales en la enseñanza presencial estaban cansados de las metodologías tradicionales viendo como un alto porcentaje de sus alumnos no conseguían sus objetivos.</p>
                <p>La educación presencial tiene muchas limitaciones, por ejemplo, limita a los alumnos por horarios o distancia. Sin embargo, la enseñanza online es cómoda, personalizable, directa y tiene un índice de satisfacción mucho más elevado.</p>
                <p>¿Quieres saber por qué nuestros alumnos están encantados con nuestros cursos?</p>
                <a class="boton boton-blanco" href="index.php?ctl=academia" alt="Enlace a página de academia">Descubre los motivos<ion-icon name="arrow-forward-circle-outline"></ion-icon>
                </a>
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
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5">
                <div class="course text-white">
                    <img src="../img/logo-js.jpg" alt="Logo JavaScript">
                    <h3>JavaScript</h3>
                    <p>JavaScript se ha convertido en uno de los lenguajes más populares para el desarrollo web hoy en día. Gracias a constantes mejores se ha convertido en un lenguaje robusto y muy solvente tanto para frontend como backend.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoJavascript" alt="Enlace a curso de JavaScript">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5">
                <div class="course text-white">
                    <img src="../img/logo-angular.jpg" alt="Logo Angular">
                    <h3>Angular</h3>
                    <p>Angular es un framework basado en JavaScript con una amplia demanda en el sector y es un framework que ha venido para quedarse gracias al respaldo de Google. Te recomendamos hacer el curso de JavaScript primero.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoAngular" alt="Enlace a curso de Angular">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12">
                <div class="course text-white">
                    <img src="../img/logo-react.jpg" alt="Logo React">
                    <h3>React</h3>
                    <p>React es otro framework cuyo origen es JavaScript. Se basa en TypeScript que no es otra cosa que JavaScript vitaminado por lo que te recomendamos hacer el curso de JavaScript. Cuenta con una inmensa y muy activa comunidad en la red.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoReact">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de React"></ion-icon></a>
                </div>

            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12">
                <div class="course text-white">
                    <img src="../img/logo-git.jpg" alt="Logo JavaScript">
                    <h3>Git</h3>
                    <p>Git es un control de versiones que ayuda a crear copias de seguridad del código escrito entre otras muchas funcionalidades sin las cuales los programadores de hoy en día no sabrían vivir. Es esencial manejar Git como desarrollador.</p>
                    <a class="boton-blanco" href="index.php?ctl=cursoGit" alt="Enlace a curso de Git">Ir al curso <ion-icon name="arrow-forward-circle-outline" alt="Enlace a curso de Git"></ion-icon></a>
                </div>

            </div>
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
                <div class="col-sm-12">
                    <div class="single">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Escribe tu email"> <!--  TODO Implementar newsletter-->
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit">Suscríbete ahora</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>