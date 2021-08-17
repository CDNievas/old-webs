<?php

$destinatario = "pepito@hotmail.com" /*Email al cual se van a enviar los mensajes*/
$titulo = "Titulo del email" /*Titulo del email*/
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];

if ($email == "" or $nombre == "" or $telefono == "" or $direccion == "" or $apellido == "") {

	header("location:contact.php"); /*Pagina a la cual se va a volver si existiera algun error*/

} else {

	$mensaje = "Nombre: $nombre
				Apellido: $apellido
				Telefono: $telefono
				Direccion: $direccion";
	$cabecera = "From: $email";
	mail($destino, $titulo, $mensaje, $cabecera);
	header("location:index.php") /*Pagina a la cual se va a redireccionar el email haya sido enviado con exito*/
	
}


?>