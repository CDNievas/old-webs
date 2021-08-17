<html>

	<head>

		<title>Zenon MineCraft</title>

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

	</head>

	

	<body>

	

	<div id="cabezera">
		<div id="subcabezera">
		<div id="logo">
			<img src="./Imagenes/logo.png" class="logo">
		</div>

		<div id="dynmap">
			<a href="http://zenonminecraft.sytes.net:8123" target="_blank"><img src="./Imagenes/dynmap.png"></a>
		</div>
		
		<div id="slide">
			<!--Medida de imagenes 133x133-->
			<div id="slideshow">
				<img src="./Imagenes/slider/slider1.png" alt="Slideshow Image 1" class="active"/>
				<img src="./Imagenes/slider/slider2.png" alt="Slideshow Image 2" />
				<img src="./Imagenes/slider/slider1.png" alt="Slideshow Image 3" />
			</div>
		</div>
		
		</div>
		
	</div>

	

	<div id="cuerpo">

	

		<div id="menu">
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

	

			<div id="contenido">

			

				<h1 class="titulo">Comandos:</h1>

				<h2 class="reglas">Todos los comandos en un rango menor son heredados a un rango mayor</h2>

				<h2 class="claseusuario">- Iniciado (Default)</h2>
				
				<h2 class="reglas">

					* /lockette - Para editar un cartel al que allas clickeado previamente (click derecho) sobre un cofre privado para agregar mas personas que lo puedan usar<br>
					* /help - Ayuda sobre los plugins<br>
					* /helpop - Manda un mensaje de ayuda que reciben todos los Admins y Mods del sv<br>
					* /points - Para ver los puntos acumulados<br>
					* /rewards - Para ver los items intercambiables por puntos<br>
					* /rewards buy <nombre de item> para comprar el item por puntos<br>
					* /dynamp register - Da un codigo de registro que se usar para registrarse en el Mapa Online de MineCraft<br>
					* /tpaccept - Acepta una solicitud de tp<br>
					* /tpdeny - Deniega una solucitud de tp<br>
					* /f help - Muestra toda la ayuda y comandos sobre las facciones
					
				</h2>

				<h2 class="claseusuario">- Usuario</h2>

				<h2 class="reglas">

					* Iguales que el iniciado<br>

				</h2>
				
				<h2 class="claseusuario">- Iron VIP</h2>

				<h2 class="reglas">

					* /fs - FireStarter<br>
					* /spawn - Para volver al Spawn<br>
					
				</h2>
				
				<h2 class="claseusuario">- Gold VIP</h2>

				<h2 class="reglas">

					* /tpa <nombre> - Para ir a la posicion de ese jugador <br>
					* /tphere <nombre> - Para traer a tu posicion a ese jugador <br>
					
				</h2>
				
				<h2 class="claseusuario">- Diamond VIP</h2>

				<h2 class="reglas">

					* /back - Vuelve al lugar anterior
					
				</h2>
				
				<h2 class="reglas">

					Para saber mas visita la seccion de rangos
					
				</h2>

			</div>
			
		</div>

		

		<div id="imagenpie">

			

			<div id="pie">

			

				<h2 class="pie">Web creada por <a href="http://www.hurieta4.com.ar" target="_blank" class="pie">Hurieta4</a>. Derechos Reservados, Zenon MineCraft</h2>

				

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