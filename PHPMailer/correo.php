<?php
require("class.phpmailer.php");
require("class.smtp.php");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];

$mail = new PHPMailer();

$body = "Hola es una prueba";
$body .="ojalá funcione";

$mail->IsSMTP(); 

/* Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP*/
$mail->Host = "localhost";

/* Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  */

$mail->From = "info@pixelencode.com";

$mail->FromName = "moises";

$mail->Subject = "prueba de envio";

$mail->AltBody = "prueba"; 

$mail->MsgHTML($body);

/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */
$mail->AddAddress("moisesibarra09@gmail.com", "moisesibarra");

$mail->SMTPAuth = true;

/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta */

$mail->Username = "info@pixelencode.com";
$mail->Password = "moisespandro"; 

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}

/////////////

?>