<html>
	<head>
		<title>Orange by CDN</title>
		<link rel="stylesheet" href="./estilos.css" type="text/css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/easySlider1.7.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#subslider").easySlider({
				auto: true, 
				continuous: true,
				controlsShow: true,
				pause: 7000
			});
		});	
		</script>
	</head>
	
	<body>
	
		<div id="cabezera">
			
			<div id="logo">
				<img class="logo" src="./Imagenes/logo.png">
			</div>
			
			<div id="menu">
				
				<ul class="menu">
				
					<li class="menu"><a href="#" class="menu">Templates</a></li>
					<li class="menu"><a href="#" class="menu">CDN</a></li>
					<li class="menu"><a href="#" class="menu">Compralo!</a></li>
					<li class="menu"><a href="contacto.php" class="menu">Contacto</a></li>
					<li class="menu"><a href="index.php" class="menu">Inicio</a></li>
									
				</ul>
				
			</div>
			
		</div>
		
		<div id="slider">
			<div name="fix" style="height:5px;"></div> <!--FIX-->
			<div id="subslider">
				<ul>
					<li>
						<div id="slidertext">
							<p class="title">What is Lorem Ipsum?</p>
							<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
						<div id="sliderimage">
							<img class="sliderimage" src="./Imagenes/slider.png">
						</div>
					</li>
					<li>
						<div id="slidertext">
							<p class="title">Why do we use it?</p>
							<p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a...</p>
						</div>
						<div id="sliderimage">
							<img class="sliderimage" src="./Imagenes/slider.png">
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div id="cuerpo">
			<div id="subcuerpo">
				<a href="#">
					<div id="col">
						<div id="title">
							What is Lorem Ipsum?
						</div>
						<div id="content">	 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...
						</div>
						
					</div>
				
				</a>
				<a href="#">
				
					<div id="col">
						
						<div id="title">
							Why do we use it?
						</div>
							
						<div id="content">
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a...
						</div>
						
					</div>
					
				</a>
				<a href="#">
				
					<div id="col">
						
						<div id="title">
							Where I can get some?
						</div>
						
						<div id="content">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which...
						</div>
						
					</div>
					
				</a>
				
			</div>
				
		</div>
		
		<div id="pie">
			
			<div id="subpie">
			
				<center><p class="pie">Web designed by <a href="http://www.cdnievas.com.ar" target="_blank" class="pielink">CDN</a>. Orange Desing 2012</p></center>
			
			</div>
			
		</div>
		
	</body>
	
</html>