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
			
			<h1 class="titulo">Mejoras de VIP:</h1>
			
			<center>
			
			
				<table class="ban" cellpadding="0" cellspacing="0">

					<tr>

						<td class="bangeneral"><center>Permiso/Comando</center></td>

						<td class="bangeneral"><center>Iron VIP</center></td>

						<td class="bangeneral"><center>Gold VIP</center></td>
						
						<td class="bangeneral"><center>Diamond VIP</center></td>

					</tr>

					<tr>

						<td class="ban"><center>/tpa - /tphere</center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>

					<tr>

						<td class="ban"><center>Warps/Spawn</center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Set Completo</center></td>

						<td class="ban"><center>Hierro</center></td>

						<td class="ban"><center>Oro</center></td>
						
						<td class="ban"><center>Diamante</center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>RedStone Wi-Fi</center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Slot Privado</center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Prefijo con rango</center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Organizador de Cofres</center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Fuego con Redstone</center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					
					<tr>

						<td class="ban"><center>/back</center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Cofres con absorcion</center></td>

						<td class="ban"><center><img src="./Imagenes/error.png"></center></td>

						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>
						
						<td class="ban"><center><img src="./Imagenes/enviado.png"></center></td>


					</tr>

					<tr>

						<td class="ban"><center>Duracion</center></td>

						<td class="ban"><center>15 Dias</center></td>

						<td class="ban"><center>15 Dias</center></td>
						
						<td class="ban"><center>15 Dias</center></td>


					</tr>
					
					<tr>

						<td class="ban"><center>Comprar</center></td>

						<td class="ban"><center><a href="#"><img src="./Imagenes/comprar.png"></a></center></td>

						<td class="ban"><center><a href="#"><img src="./Imagenes/comprar.png"></a></center></td>
						
						<td class="ban"><center><a href="#"><img src="./Imagenes/comprar.png"></a></center></td>


					</tr>

				</table>
			
			</center>
				
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