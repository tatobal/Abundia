<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$nombreSitio="Abundia";
//urlsitioweb
$urlSitio="http://www.abundia.cl";

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su Correo es: " . $correo . " \r\n";
$mensaje .= "Su Asunto es : " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'pzimend@abundia.cl';
$asunto = 'Mensaje desde Formulario Sitio Web';

$mensaje1 .= "Mensaje: " . $_POST['mensaje'] . " \r\n";

$para2=$correo;
$mensaje2	= "
Se han puesto en contacto mediante el formulario de 'CONTACTO' de nuestro sitio web www.abundia.cl, los datos del usuario son:\n


Nombre: $nombre \n
Correo: $correo \n
$mensaje1 \n


Saludos
$nombreSitio
$urlSitio";

mail($para, $asunto, utf8_decode($mensaje), $header);
mail($para2, $asunto, utf8_decode($mensaje2), $header);
?>
<script language="javascript">
alert("Atencion: Su mensaje ha sido enviado satisfactoriamente !");
window.location.href="index.html";
</script>

