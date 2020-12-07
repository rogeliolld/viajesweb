<?php
// Check for empty fields
if(empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['telefono']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));

//Email
$to = "rogelio.llerenad@gmail.com";

$subject = "Formulario de contacto del sitio web:  $nombre";
$body = "Ha recibido un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nNombre: $nombre\n\nEmail: $email\n\nTelefono: $telefono";
$header = "From: noreply@viajesweb.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
