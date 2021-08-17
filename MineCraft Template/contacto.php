<html>

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

		<style>

		h3.enviado{
			color:#FF8000;
			font-size:14px;
			font-family:Trebuchet MS;
			font-weight:bold;
			border:0;
		}

		h3.error{
			color:#FF8000;
			font-size:14px;
			font-family:Trebuchet MS;
			font-weight:bold;
			border:0;
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

			<div id="contenidodividido">
				<h1 class="titulo">Mandanos un Email</h1>

				<div id="formulario">
					<form action="?" method="post"> 	
						<input class="contacto" type="text" name="nombre" placeholder="Su nombre" maxlength="60"><br><br>
						<input class="contacto" type="text" name="email" placeholder="Su Email" maxlength="60"><br><br>
						<input class="contacto" type="text" name="asunto"  placeholder="Asunto" maxlength="60"><br><br>
						<textarea class="contacto" height="140px" width="300px" placeholder="Aqui pone tu duda, sugerencia o problema. Pronto recibiras una respuesta en tu email de nosotros. Max. 120 Caracteres" maxlength="120"></textarea><br><br>
						<center>
							<input class="enviar" type="image" name="enviar" src="./Imagenes/enviar.png" value="Enviar consulta">
						</center>
					</form>

					<?php
					///////Configuración/////
					$mail_destinatario = 'hurieta4@hotmail.com';
					///////Fin configuración// 

					if (isset ($_POST['enviar'])) {

						$headers .= "From: ".$_POST['email']. "rn";

						if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellido : ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '

							<center>
							<br>
							<br>
								<table border="0">
									<tr>
										<td valign="middle"><img src="./Imagenes/enviado.png"></td><td valign="middle"><h3 class="enviado">Su mensaje a sido enviado correctamente.</h3></td>	
									</tr>
								</table>
							</center>
						'; 
						
						} else { echo '

						<center>
							<table border="0">
								<tr>
									<td valign="middle"><img src="./Imagenes/error.png"></td><td valign="middle"><h3 class="error">Error al enviar el formulario.</h3></td>
								</tr>
							</table>
						</center>

						'; } 
						
					?>

				</div>
			</div>

			<div id="afiliados">
				<div id="afiliado">
					<img src="./Imagenes/estado.png">
				</div>
				<div id="afiliadofinal">
					<a href="#"><img src="./Imagenes/creeper.png" onmouseover="this.src='./Imagenes/creeperon.png';" onmouseout="this.src='./Imagenes/creeper.png';"></a>
				</div>
			</div>
			
		</div>

		<div id="imagenpie">
			<div id="pie">
				<h2 class="pie">Web creada por <a href="http://www.cdnievas.com.ar" target="_blank" class="pie">CDN</a>. Derechos Reservados, Zenon MineCraft</h2>
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