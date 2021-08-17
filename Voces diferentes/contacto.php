<html>
	<head>
		<title>Voces Diferentes</title>
		<link rel="stylesheet" href="./estilos.css" type="text/css">
		<link rel="shortcut icon" href="./Imagenes/icono.ico">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="./jquery.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function() { 
			$('a.tTip').tinyTips('title'); 
			$('a.imgTip').tinyTips('<img src="./Imagenes/offline.png" /><br />Tooltip Imagen.'); 
			$('img.tTip').tinyTips('title');
			$('h1.tagline').tinyTips('tinyTips are totally awesome!');
		});
		</script>

	</head>
	
	<body>
	
		<center><img class="logo" src="./Imagenes/logo.png"></center>
	
		<div id="divisor">
			<img src="./Imagenes/divisor.png">
		</div>
	
		<div id="cabezera">
			<h1>Un nuevo programa para debatir sobre temas que nos afectan</h1>
		</div>
		
		<div id="divisor">
			<img src="./Imagenes/divisor.png">
		</div>
		
		<div id="cuerpo">
		
			<p class="intro">Mandanos un email! Te contestaremos a la brevedad.</p>
			
			<input type="text" name="nombre" class="simple" placeholder="Tu Nombre">
			<input type="text" name="email" class="simple" placeholder="Tu Email">
			<input type="text" name="asunto" class="simple" placeholder="Asunto">
			<textarea name="asunto" class="textarea" placeholder="Tu Mensaje...">
			<input type="submit" value="Enviar">
			
		</div>
		
		<div id="divisor" class="clearfix">
			<img src="./Imagenes/divisor.png">
		</div>
		
		<div id="pie" class="clearfix">
			<div id="descargar">
				<img src="./Imagenes/offline.png" class="tTip" title="Estado: Offline">
				<a href="./Voces Diferentes Beta v1.0.rar"><img class="descargar tTip" src="./Imagenes/descargar.png" title="Version Beta 1.0"></a><br>
				<a href="./Voces Diferentes Fix.Instalador v1.0.rar" class="fix">Descargar Fix v1.0</a>
			</div>
			<div id="compartir">
				<div id="email"><a href="#"><img src="./Imagenes/email.png" class="tTip" title="Mandanos un mensaje"></a></div>
				<div id="twitter"><a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=Un%20nuevo%20programa%20de%20debates%20online%20con%20otras%20personas%20sobre%20temas%20que%20nos%20afectan.%20Yo%20ya%20entre,%20vas%20a%20venir?%20http://www.hurieta4.com.ar/chat/','ventanacompartir', 'toolbar=0, status=0, width=650, height=450')"><img src="./Imagenes/twitter.png" class="twitter tTip" title="Compartir en Twitter"></a></div>
				<div id="facebook"><a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.hurieta4.com.ar/chat/&t=Voces%20diferentes%20un%20sitio%20para%20hablar%20sobre%20temas%20que%20nos%20afectan','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="./Imagenes/facebook.png" class="facebook tTip" title="Compartir en Facebook"></a></div>
			</div>
		</div>

	</body>
	
</html>