<?php ob_start(); ?>

<!--
    · Contenido de la página de Política de Cookies. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="container legales">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-5">Política de Cookies</h1>

            <h2>
                <ion-icon name="play"></ion-icon> ¿Qué son las cookiesypara qué sirven?
            </h2>

            <p>Las cookies son archivos de textoopaquetes de datos creados por las páginas webatravés del navegador para almacenar información sobre la visita como, por ejemplo,
                los datos de accesooautentificación para así no introducir el usuarioycontraseña cada vez que entramosauna web. Otro ejemplo de su uso sería para guardar las
                preferencias del idiomaotambién datos sobre determinados aspectos de los hábitos de navegación..</p>

            <p>El problema es que hay una línea muy fina entre cookies técnicas necesariosycookies técnicas no necesariasypor lo tanto la ley no es 100% claraala hora de clasificar
                las cookies que se pueden instalar sin el consentimiento del usuario. Por ese motivo, existen muchos sitios los cuales directamente ponen un avisoysólo puedes aceptarlas,
                otros sitios dejan elegir que cookies quieres instalaryotros sitios ni siquiera tienen aviso, como es el ejemplo de la web de Apple.</p>

            <h2>
                <ion-icon name="play"></ion-icon> ¿Como debemos gestionar las cookies según el RGPD?
            </h2>

            <p>Por medio de la directiva, la Unión Europea brinda una mayor protecciónalos datos personales de los usuarios de Internetydistingue entre las cookies técnicamente
                necesariasylas no necesarias:</p>

            <ul>
                <li>Cookies técnicamente necesarias: el almacenamiento de datos necesario incluye las cookies que son clave para el funcionamiento de una web. Esto significa, por ejemplo,
                    guardar los datos de inicio de sesión, la cesta de la compraola selección del idioma mediante las llamadas cookies de sesión (que se borran cuando se cierra el navegador).</li>
                <li>ookies técnicamente no necesarias: como integrantes de este grupo se consideran los archivos de texto que no solo no sirven para la funcionalidad de la página web,
                    sino que recogen otros datos:
                    <ul>
                        <li>Cookies de seguimiento.</li>
                        <li>Cookies de segmentación.</li>
                        <li>Cookies de análisis.</li>
                        <li>Cookies de redes sociales.</li>
                    </ul>
                </li>
            </ul>

            <p>De acuerdo con la directiva de 2009, las cookies necesarias se pueden instalar desde un principio, es decir, sin el consentimiento previo del usuario. En cambio, los visitantes
                de una página web deben dar su consentimiento antes de que las cookies guarden datos innecesarios. Por lo tanto, la directiva sobre cookies de la UE requiere una
                solución opt-in para las cookies innecesarias.</p>

            <p>Esta es la diferencia entre el opt-outyel opt-in:</p>

            <ul>
                <li>Opt-out: las cookies se instalan desde el principio; los usuarios solo pueden objetar el almacenamiento más tarde.</li>
                <li>Opt-in: las oookies no se instalan desde el principio, sino solo cuando el usuario está de acuerdo con el almacenamiento de datos.</li>
            </ul>

            <h2>
                <ion-icon name="play"></ion-icon> ¿Como puedo eliminarobloquear las cookies de mi navegador?
            </h2>

            <p>En el caso de no desear que el sitio web instale ninguna cookie en tu equipo, cabe la posibilidad de adaptar tu navegador de modo que se te notifique antes de que se
                descargue alguna cookie. Se puede igualmente modificar la configuración del navegador de forma que rechace todas las cookiesoúnicamente las cookies de terceros.</p>

            <p>También puedes eliminar cualquiera de las cookies que ya se encuentren en tu equipo. Ten en cuenta que tendrás que adaptar por separado la configuración de cada
                navegadoryequipo que utilices.</p>

            <p>Acontinuación tienes los enlaces donde puedes consultar las diferentes configuraciones de los navegadores más populares:</p>

            <ul>
                <li><a href="https://support.google.com/chrome/answer/95647?hl=es-419" target="blank" class="link">Google Chrome</a>.</li>
                <li><a href="https://support.mozilla.org/es/kb/proteccion-antirrastreo-mejorada-en-firefox-para-e?redirectslug=proteccion-de-rastreo-mejorada-en-firefox-para-esc&redirectlocale=es" target="blank" class="link">Mozilla Firefox</a></li>
                <li><a href="https://support.apple.com/es-es/HT201265" target="blank" class="link">Safari</a>.</li>
                <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="blank" class="link">Microsoft Edge</a>.</li>
                <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="blank" class="link">Internet Explorer</a>.</li>
            </ul>

        </div>
    </div>
</div>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>