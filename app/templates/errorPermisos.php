<?php ob_start(); ?>

<div class="intro">
    <h2>Permisos insuficientes</h2>

    <!-- 
        Como hay varios tipos de errores debido a los permisos, ejecutamos un switch para coger el valor por el método GET y sacar un mensaje según corresponda
    -->
    
    <?php
        $motivo = $_GET['problema'];
        switch ($motivo) {
            case 'registrado':
                echo "<p>Ya estás registrado.</p>";
                break;
            case 'areaR':
                echo "<p>Área restringida sólo para usuarios registrados.</p>";
                break;
        }

    ?>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
