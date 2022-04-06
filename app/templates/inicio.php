<?php ob_start(); ?>

<!--
    · Contenido de la página de inicio. 
    · Lo guardamos en el buffer y se carga en la variable $contenido para mostrarla en /templates/layout
-->

<div class="inicio">
    <h2>Ejercicio de Modelo-Vista-Controlador</h2>

    <p>Trata sobre un posible instituto donde los usuarios sin iniciar sesión podrán realizar unas acciones limitadas mientras que los usuarios registrados podrán hacer más acciones que los invitados.</p>

    <p>Acciones usuarios invitados: (nivel 0)</p>

    <ul>
        <li>Visitar página de inicio.</li>
        <li>Ver tabla limitada de alumnos.</li>
        <li>Buscar un alumno.</li>
        <li>Registrarse.</li>
        <li>Iniciar sesión.</li>
    </ul>

    <p class="registrados">Acciones usuarios registrados: (nivel 1)</p>

    <ul class="registrados">
        <li>Visitar página de inicio.</li>
        <li>Ver tabla completa de alumnos.</li>
        <li>Buscar un alumno.</li>
        <li>Añadir un alumno a la base de datos.</li>
        <li>Cerrar sesión.</li>
    </ul>
    
    <p>Para cargar cualquier página, tenemos que pasar por la página index.php donde se encuentra el array de mapeo con las acciones.</p>

    <p>Dentro de controller.php están todas las acciones. Cada acción es independiente y se ejecutan las instrucciones que hay dentro de la función.</p>

    <p>Dentro de la carpeta /libs/ están las librerías de configuración y las funciones que se usan para validar campos de formulario y crear las carpetas de las imágenes en las carpetas de alumnos o usuarios.</p>

    <p>El flujo de la página es el siguiente:</p>

    <ul>
        <li>1.- El usuario pincha en un enlace del menú.</li>
        <li>2.- Cada enlace lleva a la página index.php con una acción ctl.</li>
        <li>3.- En la página index.php se recoge mediante $_GET el valor de ctl y se busca dnetro del array de mapeo qué acción del controlador ejecutar.</li>
        <li>4.- Se ejecuta la acción deseada.</li>
        <li>5.- Al final de la acción se revisa qué tipo de nivel hay en la variable de sesión y se guarda el tipo de menú en la variable $menu.</li>
        <li>6.- Se solicita una vista dentro de la carpeta /templates.</li>
        <li>7.- Dentro de esa vista se carga en el buffer el contenido y se almacena en la variable $contenido.</li>
        <li>8.- Se incluye la vista layout.php genérica que monta realmente la página que ve el usuario.</li>
        <li>9.- En esta vista se carga el menú dependiendo del tipo de usuario y el $contenido de la acción que se muestra por pantalla.</li>
    </ul>

</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
