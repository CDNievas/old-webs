<html>
	<head>
		<title>Retrieve by CDN</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/easySlider1.7.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){	
			$("#circle").easySlider({
				auto: true, 
				continuous: true,
				controlsShow: false,
				pause:3000
			});
		});	
		</script>
	</head>
	
	<body>
	
		<div id="menu">
			<ul>
				<li><a href="./index.php" style="padding-left:20px;">Home</a></li>
				<li><a href="#">Webs</a></li>
				<li><a href="#">CDN</a></li>
			</ul>
		</div>
	
		<div id="center">
			<center><a href="#" class="circle"><img id="twitter" src="./images/twitter.png" class="twitter" width="70px" height="70px"></a></center>
			<a href="#" class="circle"><img src="./images/facebook.png" class="facebook" width="70px" height="70px"></a>
			<div id="circle">
				<div id="subcircle">
					<ul>
						<li><p style="margin-top:100px">RETRIEVE<br>BY CDN</p></li>
						<li><img src="./images/photo_avatar.png" height="280px" width="280px" style="margin-right:10px;">
					</ul>
				</div>
			</div>
			<a href="#" class="circle"><img src="./images/youtube.png" class="youtube" width="70px" height="70px"></a>
			<center><a href="contact.php" class="circle"><img src="./images/email.png" class="email" width="70px" height="70px"></a></center>
		</div>
		
		<div id="foot">
			Web by <a href="http://www.cdnievas.com.ar" target="_blank">CDN</a>
		</div>
	
	</body>
</html>