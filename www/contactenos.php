<!doctype html>
<html lang="en-US">
<?php include 'head.php'?>

<body style="margin: 0;">
<?php
require 'PHPMailerAutoload.php';
require("class.phpmailer.php");

if (isset($_REQUEST['rp_email'])&&isset($_REQUEST['rp_message']))

  {
  		
	
  $to =$_REQUEST['department'];	
  $name = $_REQUEST['rp_name'] ;	
  $email = $_REQUEST['rp_email'] ;
  $subject = $_REQUEST['rp_subject'] ;
  $message = $_REQUEST['rp_message'] ;

  if( $to=="1"){
  	$to="info@la-mar.co";
  }else{
  	$to="ventas@la-mar.co";
  }
  	$mail = new PHPMailer;

$mail->isSendmail();
$mail->setFrom($email,"From");
$mail->msgHTML($message);
$mail->addAddress("sfandinob@gmail.com");

 if(!$mail->Send()) 
 {
  echo "Mailer Error: " . $mail->ErrorInfo;
 }
 else 
 {
  echo "Message sent!";
 }

  }
  ?>
<?php
include 'header.php';
?>
	<div id="map" style="width:100%;
height:200px; overflow: inherit !important;z-index:-1"></div>
<div id="content" >

	<div class="item-page">
<h2 class="title">
<a href="/home/contacto">
Contacto</a>
</h2>
<table class="contact_table" style="width: 100%;" border="0">
<tbody>
<tr>
<td width="50%" id="contact_left">
<p>Por favor complete el siguiente formulario (todos los campos son obligatorios):</p>
<p>	</p><div class="moduletable">
<div id="contact_form" class="rapid_contact ">
<form action="#" method="post">
<div><label for="rp_name">Nombre:</label><input class=" inputbox " type="text" id="rp_name" name="rp_name" value=""></div>
<div><label for="rp_email">Email:</label><input class=" inputbox " type="text" name="rp_email" id="rp_email" value=""></div>
<div><label for="rp_subject">Asunto:</label><input class=" inputbox " type="text" name="rp_subject" id="rp_subject" value=""></div>
<div>
<label for="department" class="department">Departamento</label>
<select name="department" id="department">
<option value="1">Información - La Mar</option><option value="2">Ventas - La Mar</option>
</select>
</div>
<div><label for="rp_message">Mensaje:</label><textarea class=" textarea " name="rp_message" id="rp_message"></textarea></div>
<div><label class="simple-label" for="rp_anti_spam_answer">Cuanto es 5 + 5 = ?</label><input class=" captcha inputbox " type="text" name="rp_anti_spam_answer" id="rp_anti_spam_answer" value=""></div><div><input class=" button " id="submit-form" type="submit" name="submit" value="Enviar Mensaje"></div></form></div>
</div>
<p></p>
</td>
<td width="50%">
<h2>La Mar - Sala de Negocios</h2>
<p>Carrera 42H No. 84B-41 - Barranquilla&nbsp; - Colombia</p>
<p>Cel: 321-3115929 / 317-4287841 / 321-3123772</p>
<p>
<a href="mailto:ventas@la-mar.co">ventas@la-mar.co</a>,
<a href="mailto:info@la-mar.co">info@la-mar.co</a>
<h2>Promoción, Venta y Construcción</h2>
<p><span style="font-size: 12pt;">Constructora Conaco S.A.</span></p>
<p>&nbsp;Tel: (57-1) 7436723 / 24 / 25 - Bogotá&nbsp;&nbsp; -&nbsp; <a href="http://www.conaco-sa.com" target="_blank">www.conaco-sa.com</a></p>
<p>&nbsp;</p>
<h2>Aliado Comercial</h2>
<p><span style="font-size: 12pt;">Inmobiliaria Mchaileh</span></p>
<p>Tel: (57-5) 356 5177 – Barranquilla - Colombia</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php
include 'footer.php';
?>
<script>
	$(document).ready(function(){mapPointer();});
</script>
</body>

</html>