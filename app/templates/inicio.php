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
            <div class="col-10 col-sm-8 col-lg-6">   <!--  TODO Controlar la imagen en responsive -->
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
                <h2 class="center">Formación online a medida en ATCO</h2>  <!-- TODO cambiar texto -->
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nulla sed vulputate
                    dignissim, mauris quam congue leo, nec pretium velit risus eget est. Nullam id volutpat lorem, et facilisis
                    urna. Cras pharetra, velit vitae rhoncus lacinia, velit tortor gravida justo, ut gravida leo lacus a enim.
                    Duis dictum metus ut posuere porttitor. Sed dolor sem, lobortis non lacinia id, placerat vitae lectus.
                    Phasellus consectetur gravida sapien id tempus. </p>
                <div class="center">
                    <a class="boton" href="#">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-12 text-center pb-md-5">
                <div class="card-color">
                    <ion-icon name="desktop-outline"></ion-icon>
                    <h3>Temarios actualizados</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ad, ratione nulla aut molestias aliquam
                        laudantium nihil accusantium ipsa, hic officia fugiat illo in optio, labore dolorem odit excepturi
                        explicabo!</p>

                </div>
            </div>
            <div class="col col-lg-6 col-md-12 text-center">
                <div class="card-white">
                    <ion-icon name="timer-outline"></ion-icon>
                    <h3>Marcas tu ritmo</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ad, ratione nulla aut molestias aliquam
                        laudantium nihil accusantium ipsa, hic officia fugiat illo in optio, labore dolorem odit excepturi
                        explicabo!</p>
                </div>
            </div>
        </div>

        <div class="row pt-lg-1 pt-md-5">
            <div class="col col-lg-6 col-md-12 text-center order-lg-1 order-md-2">
                <div class="card-white">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                    <h3>Método que funciona</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ad, ratione nulla aut molestias aliquam
                        laudantium nihil accusantium ipsa, hic officia fugiat illo in optio, labore dolorem odit excepturi
                        explicabo!</p>

                </div>
            </div>
            <div class="col col-lg-6 col-md-12 text-center pb-md-5 order-lg-2 order-md-1">
                <div class="card-color">

                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <h3>Atención personalizada</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ad, ratione nulla aut molestias aliquam
                        laudantium nihil accusantium ipsa, hic officia fugiat illo in optio, labore dolorem odit excepturi
                        explicabo!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="slider">
                    <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />
                    <input type="radio" name="slider" title="slide2" class="slider__nav" />
                    <input type="radio" name="slider" title="slide3" class="slider__nav" />
                    <input type="radio" name="slider" title="slide4" class="slider__nav" />
                    <div class="slider__inner">
                        <div class="slider__contents "><img src="../img/testimonial-1.png" alt="">
                            <h3 class="slider__caption">Marta Solís</h3>
                            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis
                                possimus illo quos, corporis minima!</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-2.png" alt="">
                            <h3 class="slider__caption">Roberto Guardado</h3>
                            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis
                                possimus illo quos, corporis minima!</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-3.png" alt="">
                            <h3 class="slider__caption">Carmen Lorenzo</h3>
                            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis
                                possimus illo quos, corporis minima!</p>
                        </div>
                        <div class="slider__contents"><img src="../img/testimonial-4.png" alt="">
                            <h3 class="slider__caption">Alberto Ruíz</h3>
                            <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis
                                possimus illo quos, corporis minima!</p>
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
                <h3>Más de 10 años de experiencia en formación online</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda esse perspiciatis cum sapiente debitis
                    ratione iste aspernatur ducimus mollitia quo. Repellat labore voluptatem beatae cum totam eos nihil veniam
                    tempora?</p>
                <a class="boton-blanco" href="#">Ver cursos ahora <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</section>

<section class=" courses py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="titulo-superior center">Fórmate para el futuro</span>
                <h2 class="center">Los mejores cursos de Desarrollo Web</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nulla sed vulputate
                    dignissim, mauris quam congue leo, nec pretium velit risus eget est. Nullam id volutpat lorem, et facilisis
                    urna. Cras pharetra, velit vitae rhoncus lacinia, velit tortor gravida justo, ut gravida leo lacus a enim.
                    Duis dictum metus ut posuere porttitor. Sed dolor sem, lobortis non lacinia id, placerat vitae lectus.
                    Phasellus consectetur gravida sapien id tempus. </p>
            </div>
        </div>
        <div class="row py-3">
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5">
                <div class="course text-white">
                    <img src="../img/logo-js.jpg" alt="Logo JavaScript">
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum asperiores necessitatibus fugit ut adipisci,
                        molestiae officiis minus doloribus pariatur natus voluptatem vitae eaque tempore quia qui itaque at
                        repudiandae id.</p>
                    <a class="boton-blanco" href="#">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12 pb-md-5">
                <div class="course text-white">
                    <img src="../img/logo-angular.jpg" alt="Logo JavaScript">
                    <h3>Angular</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum asperiores necessitatibus fugit ut adipisci,
                        molestiae officiis minus doloribus pariatur natus voluptatem vitae eaque tempore quia qui itaque at
                        repudiandae id.</p>
                    <a class="boton-blanco" href="#">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12">
                <div class="course text-white">
                    <img src="../img/logo-react.jpg" alt="Logo JavaScript">
                    <h3>React</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum asperiores necessitatibus fugit ut adipisci,
                        molestiae officiis minus doloribus pariatur natus voluptatem vitae eaque tempore quia qui itaque at
                        repudiandae id.</p>
                    <a class="boton-blanco" href="#">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
            <div class="col col-lg-3 col-md-6 col-sm-12">
                <div class="course text-white">
                    <img src="../img/logo-git.jpg" alt="Logo JavaScript">
                    <h3>Git</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum asperiores necessitatibus fugit ut adipisci,
                        molestiae officiis minus doloribus pariatur natus voluptatem vitae eaque tempore quia qui itaque at
                        repudiandae id.</p>
                    <a class="boton-blanco" href="#">Ir al curso <ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>

            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col center"><a class="boton" href="#">Ver todos los cursos ahora <ion-icon name="arrow-forward-circle-outline">
                </ion-icon></a></div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="row pb-5">
            <div class="col">
                <span class="titulo-superior center">Síguenos en las redes</span>
                <h2 class="center">¡Novedades, promociones y mucho más!</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor, nulla sed vulputate
                    dignissim, mauris quam congue leo, nec pretium velit risus eget est. Nullam id volutpat lorem, et facilisis
                    urna. Cras pharetra, velit vitae rhoncus lacinia, velit tortor gravida justo, ut gravida leo lacus a enim.
                    Duis dictum metus ut posuere porttitor. Sed dolor sem, lobortis non lacinia id, placerat vitae lectus.
                    Phasellus consectetur gravida sapien id tempus. </p>
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