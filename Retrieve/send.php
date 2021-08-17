<?php

$destino = "emaildemuestra@hotmail.com"; /*Email al que se recibiran los mensajes*/
$email = $_POST["email"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$comment = $_POST["comment"];
$title = "Email from CDN";

if ($email == "" or $name == "" or $surname == "" or $comment == "") {

	header("location:contact.php"); /*Pagina a la cual se va a volver si existiera algun error*/

} else {

	$message = "Nombre: $name $surname
				Mensaje: $comment";
	$header = "From: $email";
	mail($destino, $title, $message, $header);
	header("location:index.php") /*Pagina a la cual se va a redireccionar el email haya sido enviado con exito*/
	
}


?>