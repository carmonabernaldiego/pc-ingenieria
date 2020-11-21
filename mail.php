<?
  /*
    Mail | Design by Diego Carmona Bernal
    Updated: April 22, 2016. Version: 1.2
  */
  session_start();
  
  require "PHPMailer/PHPMailerAutoload.php";

  $mail = new phpmailer();

  $mail->CharSet = 'UTF-8';

  $mail->PluginDir = "PHPMailer/";

  $mail->Host = "pcingen1@xsda14013.xpress.com.mx";

  $mail->SMTPAuth = true;

  $mail->Username = "ventas@pcingenieria.com.mx"; 

  $mail->Password = "velasco";

  $mail->From = $_REQUEST['correo'];
  
  $mail->FromName = $_REQUEST['nombre']." ".$_REQUEST['apellido'];

  $mail->Timeout = 10;

  $mail->AddAddress("ventas@pcingenieria.com.mx");

  $mail->Subject = $_REQUEST['selectmotivo'];

  $mail->Body = $_REQUEST['mensaje']."<br><br><b>Correo Electrónico: ".$_REQUEST['correo']."<br>Telefono: +".$_REQUEST['codigo']." ".$_REQUEST['telefono']."<b>";

  $mail->AltBody = $_REQUEST['mensaje']." Correo Electrónico: ".$_REQUEST['correo']." Telefono: +".$_REQUEST['codigo']." ".$_REQUEST['telefono']."<b>";

  $exito = $mail->Send();

  $intentos = 1; 
  while ((!$exito) && ($intentos < 5))
  {
    sleep(5);
      $exito = $mail->Send();
      $intentos=$intentos+1;
  }

  $mail = new phpmailer();

  $mail->CharSet = 'UTF-8';

  $mail->PluginDir = "PHPMailer/";

  $mail->Host = "mx1.hostinger.mx";

  $mail->SMTPAuth = true;

  $mail->Username = "pc_ingenieria@conalepchiapacorzo.esy.es"; 

  $mail->Password = "1289james7823";

  $mail->From = "ventas@pcingenieria.com.mx";
  
  $mail->FromName = "PC Ingeniería";

  $mail->Timeout = 10;

  $mail->AddAddress($_REQUEST['correo']);

  $mail->Subject = "Pc Ingeniería";

  $mail->Body = "Hola ".$_REQUEST['nombre']." ".$_REQUEST['apellido']." Gracias por tus Comentarios, hemos recibido tu mensaje, en unos instantes nos comunicaremos contigo.<br><br>Trabajamos duro para ofrecerle el mejor servicio.";

  $mail->AltBody =  "Hola ".$_REQUEST['nombre']." ".$_REQUEST['apellido']." Gracias por tus Comentarios, hemos recibido tu mensaje, en unos instantes nos comunicaremos contigo. Trabajamos duro para ofrecerle el mejor servicio.";

  $exito = $mail->Send();

  $intentos = 1; 
  while ((!$exito) && ($intentos < 5))
  {
    sleep(5);
      $exito = $mail->Send();
      $intentos=$intentos+1;
  }

  $_SESSION['message'] = 'si';

  header('Location: contacto');
?>