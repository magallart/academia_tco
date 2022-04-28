	<!--
        · Esta página es la que monta realmente la página que muestra al usuario final.
		· Dependiendo del nivel del usuario se mostrará un menú u otro.
		· En las diferentes vistas hemos cargado en la variable $contenido todo lo que queríamos mostrar. Aquí se devuelve y muestra al usuario.
    -->

	<!DOCTYPE html>
	<html>

	<head>
		<title>Academia ACTO</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="icon" type="image/jpg" href="../../img/favicon.ico" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>
		<script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	</head>

	<body>
		
		<?php
			if (!isset($menu))
				$menu = 'menu.php';
			include $menu;
		?>


		<?php // TODO Eliminar el print_r $_SESSION
			echo "<div class='pruebaSesion'>";
			echo "<pre>";
			print_r($_SESSION);
			echo "</pre>";
			echo "</div>";
		?>
	

		<div id="contenido">
			<?php echo $contenido; ?>
		</div>

		<footer>
			<div class="container text-white">
				<div class="row">
					<div class="col col-lg-5 col-md-12 me-2">
						<img src="../img/logo2-atco-blanco.png" alt="Logo blanco ATCO">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, recusandae cupiditate itaque veniam, vero
							accusantium dolores vitae eum incidunt consequatur exercitationem sequi, nisi quibusdam beatae aliquid?
							Aliquam aperiam illo voluptates?</p>
					</div>
					<div class="col col-lg-3 col-md-6 px-5 ">
						<h4>Explora</h4>
						<ul>
							<li><a href="index.php?ctl=inicio">Inicio</a></li>
							<li><a href="index.php?ctl=academia">Academia ATCO</a></li>
							<li><a href="index.php?ctl=cursos">Cursos</a></li>
							<li><a href="index.php?ctl=contacto">Contacto</a></li>
						</ul>
					</div>
					<div class="col col-lg-3 col-md-6">
						<h4>Contacto</h4>
						<ul>
							<li>
								<ion-icon name="home"></ion-icon> D'Alberic, 18, 46008 Valencia.
							</li>
							<li>
								<ion-icon name="call"></ion-icon> 96 120 58 75
							</li>
							<li>
								<ion-icon name="mail"></ion-icon> atco@gmail.com
							</li>
						</ul>
					</div>
				</div>
				<div class="row pt-5">
					<div class="col col-lg-6 col-md-12 text-lg-start text-md-center pt-md-3">2022 - Derechos reservados. Academia
						ATCO.</div>
					<div class="col col-lg-6 col-md-12 text-lg-end text-md-center pt-md-3">
						<ul class="legal">
							<li><a href="index.php?ctl=politicaPrivacidad">Política de privacidad</a></li>
							<li><a href="index.php?ctl=politicaCookies">Política de Cookies</a></li>
							<li><a href="index.php?ctl=avisosLegales">Avisos legales</a></li>
						</ul>
					</div>
				</div>
		</footer>
	</body>

	</html>