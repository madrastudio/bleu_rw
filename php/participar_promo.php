<?php
// Variables
$nombre = $_POST['nombre'];
$correo = $_POST['mail'];
$telefono = $_POST['telefono'];
$from = $correo;
// Mail donde se reive el formulario
$para  = 'bleujoyeros@hotmail.com' . ', '; // atención a la coma
$para .= 'rbanfi@grupochronex.com' . ', '; // atención a la coma
$para .= 'veronicabacci@grupochronex.com' . ', '; // atención a la coma
$para .= 'hola@codigital.com.ar';

// Asunto
$subject = "Participar en la promo Raymond Weil - Joyeria Bleu";
// Cuerpo del mensaje
$emailbody = "";
$emailbody .= "Nombre: " . $nombre . "\n";
$emailbody .= "Correo electrónico: " . $correo . "\n";
$emailbody .= "telefono: " . $telefono . "\n";
// UTF-8 
$header = "";
$header .= "From:" . $from . " \n";
$header .= "Content-Type:text/plain;charset=utf-8";
// Envio del correo
$success = mail($para, $subject, $emailbody, $header);
// Redireccionamiento despues de enviar el mensaje
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://bleu.turaymondweil.com.ar/gracias.html\">";
}
else{
  echo "<script language='javascript'>alert('Error, no se pudo enviar el mensaje');</script>";
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://bleu.turaymondweil.com.ar/index.html\">";
}
?>