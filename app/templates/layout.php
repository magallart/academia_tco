	<!--
        · Esta página es la que monta realmente la página que muestra al usuario final.
		· Dependiendo del nivel del usuario se mostrará un menú u otro.
		· En las diferentes vistas hemos cargado en la variable $contenido todo lo que queríamos mostrar. Aquí se devuelve y muestra al usuario.
    -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>Instituto Abastos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />
	</head>
	<body>
		<div id="cabecera">
			<div class="izquierda">
				<img src="../img/logo_conselleria_180px.png" alt="">
			</div>

			<div class="derecha">
				<h1>Bienvenido al IES Abastos</h1>
				<p>Institut d'Educació Secundaria i FP Abastos</p>
			</div>
			
		</div>
		<?php 
			
			if (!isset($menu))
				$menu='menu.php' ;
			include $menu;		
		?>
		

		<div id="contenido">
			<?php echo $contenido; ?>			
		</div>

		<div id="pie">
			<p>Ejercicio MVC - Desarrollo en Entorno de Servidor - 2º DAW Semipresencial</p>
			<p>Miguel Ángel Gallart Aleixandre</p>
		</div>
	</body>
</html>
