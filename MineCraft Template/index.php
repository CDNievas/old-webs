<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<head>
		<title>MineCraft Template by CDN</title>
		<link rel="stylesheet" href="./estilos.css" type="text/css">
		<link rel="shortcut icon" href="./Imagenes/favicon.ico">
		<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
		<script type="text/javascript">

			/*** 
				Simple jQuery Slideshow Script
				Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
			***/

			function slideSwitch() {
				var $active = $('#slideshow IMG.active');

				if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

				// use this to pull the images in the order they appear in the markup
				var $next =  $active.next().length ? $active.next()
					: $('#slideshow IMG:first');

				// uncomment the 3 lines below to pull the images in random order
				
				// var $sibs  = $active.siblings();
				// var rndNum = Math.floor(Math.random() * $sibs.length );
				// var $next  = $( $sibs[ rndNum ] );


				$active.addClass('last-active');

				$next.css({opacity: 0.0})
					.addClass('active')
					.animate({opacity: 1.0}, 1000, function() {
						$active.removeClass('active last-active');
					});
			}

			$(function() {
				setInterval( "slideSwitch()", 5000 );
			});

			</script>

			<style type="text/css">
				body.asd {
					font-family: Verdana, Arial, Sans-Serif;
					font-size:12px;
				}
			</style>
		
	</head>

	<body>

	<div id="cabezera">
		<div id="subcabezera">
		<div id="logo">
			<img src="./Imagenes/logo.png" class="logo">
		</div>

		<div id="dynmap">
			<a href="#"><img src="./Imagenes/dynmap.png"></a>
		</div>

		<div id="slide">
		
			<!--Medida de imagenes 133x133-->
			<div id="slideshow">
				<img src="./Imagenes/slider/slider1.png" alt="Slideshow Image 1" class="active"/>
				<img src="./Imagenes/slider/slider2.png" alt="Slideshow Image 2" />
				<img src="./Imagenes/slider/slider3.png" alt="Slideshow Image 3" />
			</div>
		</div>
		
		</div>
		
	</div>

	<div id="cuerpo">

		<div id="menuinicio">

			<ul class="menu">

				<li class="menu"><a href="./index.php" class="menuinicio">Inicio</a></li>
				<li class="menu"><a href="./reglas.php" class="menu">Reglas</a></li>
				<li class="menu"><a href="./contacto.php" class="menu">Contacto</a></li>
				<li class="menu"><a href="#" class="menu">Multimedia</a>
					<ul class="submenu">
						<li class="submenu"><a href="#" class="submenu">Radio</a></li>
						<li class="submenu"><a href="#" class="submenufinal">Wallpapers</a></li>
					</ul>
				</li>
				<li class="menu"><a href="#" class="menu">Tutoriales</a>
					<ul class="submenu">
						<li class="submenu"><a href="./comandos.php" class="submenu">Comandos</a></li>
						<li class="submenu"><a href="./rangos.php" class="submenufinal">Rangos</a></li>
					</ul>
				</li>
				<li class="mercado"><a href="mercado.php"><img src="./Imagenes/mercado.png"></a></li>
			</ul>

		</div>

		<div id="centro">

			<div id="contenidodividido">
					
				<h1 class="titulo">Datos:</h1>

				<h2 class="datos">

					* Las 24 HS de los 7 dias de las semana online (salvo que alla mantenimiento) <a href="#" class="datos">Ver lista de horarios en general</a><br>
					* Sin Hamachi<br>
					* Factions incluidas<br>
					* Modo de juego actual: supervivencia<br>
					* Preparado totalmente para evitar griffeos<br>
					* Host Local con un i7 2600-k y 8 GB de Ram<br>
					* 0 Lag<br>
					* Rangos variados, que habilitan el uso de nuevos y mejores comandos<br>
					* IP Fija: zenonminecraft.sytes.net<br>
					
				</h2>
				
				<center>
					<hr class="division">
				</center>
				
				<h1 class="titulo">Ultimas noticias del servidor</h1>
				
				<div id="noticias">
				
					<div id="noticia">
					
						<span class="titulonoticia">Probando las noticias</span><br>
						<div id="contenidonoticia">
							<span class="contenidonoticia">
								Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.
							</span>
						</div><br>
							<span class="fechanoticia">HH:MM - DD/MM/AA</span><br>
						<center><hr class="separador" style="margin-bottom:10px;"></center>
							
					
					</div>
				
				</div>
				
			</div>

			<div id="afiliados">

				<div id="afiliado">
					<center><img src="./Imagenes/estado.png"></center>
				</div>
				<div id="afiliadofinal">
					<center><a href="#"><img src="./Imagenes/creeper.png" onmouseover="this.src='./Imagenes/creeperon.png';" onmouseout="this.src='./Imagenes/creeper.png';"></a></center>
				</div>

			</div>

		</div>

		<div id="imagenpie">

			<div id="pie">

				<h2 class="pie">Web creada por <a href="http://www.cdnievas.com.ar" target="_blank" class="pie">CDN</a>. Derechos Reservados, MineCraft Template</h2>

			</div>
			
			<img src="./Imagenes/pie.png" class="pie">

		</div>

		<div id="links">

			<h2 class="links">Links:</h2>

			<div id="linksinternos">

				<div id="collink">

					<div id="linkinterno">

						<a href="#" class="collink">Inicio</a><br>
						<a href="#" class="collink">Reglas</a><br>
						<a href="#" class="collink">Contacto</a><br>
						<a href="#" class="collink">Horarios</a><br>

					</div>

				</div>

				<div id="collink">

					<div id="linkinterno">

						<a href="#" class="collink">Mercado</a><br>
						<a href="#" class="collink">Ban</a><br>
						<a href="#" class="collink">Radio</a><br>
						<a href="#" class="collink">Historia</a><br>

					</div>

				</div>

			</div>

			<div id="linksexternos">
				<a href="http://www.cdnievas.com.ar" target="_blank" id="linkexterno"><img height="70px" width="197px" src="./Imagenes/cdn.png"></a><br>
			</div>

		</div>

	</div>

	</body>
	
</html>