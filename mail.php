<?php
ini_set('display_errors',1);
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");

//https://www.google.com/settings/security/lesssecureapps
//http://phpmailer.worxware.com/

function sendgmail($email,$Nome,$message)
{
	$mail = new PHPMailer() ;
	$mail->Body = ' Obrigado por nos contatar, abaixo poderá confirmar os dados enviados.<br><br><br>'.
	                $Nome.
					'<br><br>'
	                .$email.
					'<br><br>'
                    .$message; 	
		$mail->IsSMTP(); 
		//Sustituye (ServidorDeemailSMTP)  por el host de tu servidor de email SMTP
 		$mail->Host = "smtp.gmail.com";		
		$mail->Port       = 465;  
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; 
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		
		//Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
		$mail->From     = "ktracaemail@gmail.com";
		$mail->FromName = "Equipe Ktraca";
		$mail->Subject  = "A Ktraca agradece o contato.";
		$mail->AltBody  = "Corpo do Texto."; 
		$mail->CharSet  = "UTF-8";
		$mail->IsHTML(true);
		// Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
		$mail->AddAddress($email, $Nome);
		$mail->AddCC('ktracaemail@gmail.com', 'Cópia de Segurança', $message);
		$mail->SMTPAuth = true;
		
		// Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 
		$mail->Username = "ktracaemail@gmail.com";
		$mail->Password = "ktraca123"; 
		if($mail->Send())
		{			
			return $message; 
		}else
		{
			return false;
			die();
		}
	}



$html = sendgmail($_POST['email'],$_POST['Nome'],$_POST['message']);