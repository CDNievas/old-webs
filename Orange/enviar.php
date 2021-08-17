<?php

$destino = "emaildemuestra@hotmail.com"; /*Email al que se recibiran los mensajes*/
$titulo = "Titulo del email";
$email = $_POST["email"];
$nombre = $_POST["nombre"];
$mensaje = $_POST["mensaje"];

if ($email == "" or $nombre == "" or $mensaje == "") {

	header("location:contacto.php"); /*Pagina a la cual se va a volver si existiera algun error*/

} else {

	$mensaje = "Nombre: $nombre
				Mensaje: $mensaje";
	$cabecera = "From: $email";
	mail($destino, $titulo, $mensaje, $cabecera);
	header("location:index.php") /*Pagina a la cual se va a redireccionar el email haya sido enviado con exito*/
	
}


?>