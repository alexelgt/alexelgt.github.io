<?php
$aviso = "";
// check form  
if ($_POST['email'] != "") {
	// email de destino
	$email = "nope@nope.com";
	
	// asunto del email
	$subject = "Contact";
	
	// Cuerpo del mensaje
	$mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";
	$mensaje.= "EMAIL:    ".$_POST['email']."\n";
	$mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
	$mensaje.= "---------------------------------- \n\n";
	$mensaje.= $_POST['mensaje']."\n\n";
	
	// headers del email
	$headers = "From: ".$_POST['email']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers)) {
		$aviso = "Message sent successfully.";
	} else {
		$aviso = "Error.";
	}
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
