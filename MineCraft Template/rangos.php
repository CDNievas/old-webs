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

			

				<h1 class="titulo">Rangos:</h1>

				<h2 class="reglas">Todos los permisos en un rango menor son heredados a un rango mayor</h2>

				<h2 class="claseusuario">- Iniciado (Default)</h2>
				
				<h2 class="reglas">

					* Puede construir<br>
					* Puede crear cofres privados<br>
					* Puede pedir ayuda para los plugins<br>
					* Puede pedir ayuda a un OP<br>
					* Puede leer los mensajes de los minerales que encuentran las otras personas<br>
					* Puede intercambiar items por puntos<br>
					* Puede registrarse en la web del mapa del minecraft<br>
					* Puede chatear desde la web del mapa del minecraft<br>
					* Puede sentarse en las escaleras en el juego<br>
					* Puede aceptar o denegar una peticion de teleport<br>
					* Recibe anuncios y notificaciones del servidor en el juego<br>
					* Puede crear o entrar en facciones<br>
					
				</h2>

				<h2 class="claseusuario">- Usuario</h2>

				<h2 class="reglas">

					* Puede poner agua y lava<br>

				</h2>
				
				<h2 class="claseusuario">- Iron VIP</h2>

				<h2 class="reglas">

					* Puede acomodar sus items de los cofres automaticamente pegandoles 1 vez<br>
					* Puede encender netherracks con el uso de RedStone<br>
					* Puede volver al spawn<br>
					
				</h2>
				
				<h2 class="claseusuario">- Gold VIP</h2>

				<h2 class="reglas">

					* Puede mandar invitaciones a tpa, tanto para traer como para ir a alguien<br>
					* Puede hacer redes de RedStone con carteles, como si fuera Wi-Fi<br>
					
				</h2>
				
				<h2 class="claseusuario">- Diamond VIP</h2>

				<h2 class="reglas">

					* Puede volver al punto anterior a donde fue, como por ejemplo al lugar en donde murio
					
				</h2>
				
				<h2 class="reglas">

					Para saber mas visita la seccion de comandos
					
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