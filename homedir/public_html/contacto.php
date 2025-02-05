<?php
function check_email_address($email) 
{

  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=contacto.html>Regresar</a></strong></p> ');
	return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
	{
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
		{
                die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=contacto.html>Regresar</a></strong></p> ');
		return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
		 {
              die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=contacto.html>Regresar</a></strong></p> ');
		return false; // No son suficientes partes o secciones para se un dominio
     }
     for ($i = 0; $i < sizeof($domain_array); $i++) 
		 {
        if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
				{
               die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=contacto.html>Regresar</a></strong></p> ');
		   return false;
        }
     }
  }
  return true;
}

check_email_address($_POST['mail']);

if(isset($_POST["nombre"]) && isset($_POST["titulo"]) && isset($_POST["mail"]) && isset($_POST["mensaje"]) ){
$fecha = date("j-m-y");
$mymail = "info@courierpack.com.ve";
$subject = "Requisicion del Email desde el Web Site";
$contenido = $_POST["nombre"]." Escribio :\n";
$contenido .= $_POST["mensaje"]."\n\n";
$contenido .= "Mensaje Enviado el Dia:  ".$fecha;
$header = "From:  ".$_POST["mail"]."\nReply-To:".$_POST["mail"]."\n";
$header .= "X-Mailer:PHP/".phpversion()."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
//mail a felix
mail($mymail, $subject, utf8_decode($contenido) ,$header);
//mail al cliente
$fecha = date("j-m-y");
$destino =$_POST["mail"];
$asunto = 'Gracias por contactarnos ';
$cabeceras = "From: info@courierpack.com.ve\r\nContent-type: text/html\r\n";
$cuerpo ="<html> <head>  <title> $titulo </title>  
<style type='text/css'>
<!--
.style1 {
	font-size: 9px;
	font-weight: bold;
}
.style3 {color: #FFFFFF}
-->
</style>
</head>  
<body style='background:#FFFFFF;font-size:12px;font-family:Verdana, Arial, Helvetica, sans-serif;color:#333333;'> <p>&nbsp;</p>  
<table width='754' border='0'>
  <tr>
    <td width='562' bgcolor='#FFFFFF'><div align='center'><img src='http://www.courierpack.com.ve/images/kubrickheader.jpg' alt='' width='380' height='138'></div></td>
    <td width='182' bgcolor='#FFFFFF'><b>Caracas, ".$fecha."</b></td>
  </tr>
  <tr>
    <td bgcolor='#FFFFFF'><div align='right'><span style='color:#333333;font-size:12pt;'>Estimado(a):</span></div></td>
    <td bgcolor='#FFFFFF'><b>".$_POST['nombre']."</b></td>
  </tr>
  <tr>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#AAD2FF'><p>En estos momentos estamos procesando  su solicitud. Su requerimiento ser&aacute; respondido a la brevedad posible.</p>
      <p>Gracias por su paciencia y espera, para nosotros su tiempo es importante, si posee otra solicitud no dude en <a href='contacto.html'>contactarnos</a><br>
        <a href='contacto.html'><br>
</a></p></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><div align='center'><img src='http://www.courierpack.com.ve/images/mundocourierpack.jpg' alt='courier internacional puerta a puerta' width='174' height='172'></div></td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><div align='center'>
      <p class='style1'><a href='www.courierpack.com.ve'>Sencillamente marcamos la diferencia en transporte internacional de carga </a><br>     
        Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; </span></p>
    </div></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><br>
    <p align='justify' style='color:#333333;font-size:12pt;' >&nbsp;</p></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
</table>
</body>  </html>";

mail($destino,$asunto,$cuerpo,$cabeceras);

echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
<title>Courierpack - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa</title>
<META name='verify-v1' content='String_we_ask_for'>
<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>
<META HTTP-EQUIV='EXPIRES' CONTENT='0'>
<META NAME='RESOURCE-TYPE' CONTENT='DOCUMENT'>
<META NAME='DISTRIBUTION' CONTENT='GLOBAL'>
<META NAME='AUTHOR' CONTENT='courierpack.com.ve'>
<META NAME='COPYRIGHT' CONTENT='Copyright (c) by www.courierpack.com.ve'>
<META NAME='keywords' CONTENT='dolar paralelo, compras, dolar, compra venta, importacion, precio del dolar,compra y venta,dolar en venezuela, comprar en usa,precio dolar,compras por internet, dólar paralelo,dolar paralelo en venezuela, el dolar,importaciones, precio del dolar paralelo, comprar por internet,dolar cantv,courrier, transporte carga, transporte maritimo, precio dolar paralelo, compras online, courier,courrier, valor del dolar, cupo de cadivi,compras en estados unidos, dolar paralelo venezuela, cupo cadivi, compras en usa'>
<META NAME='description' CONTENT='Marcando la Diferencia Transportando Carga, Desde Usa A Venezuela'>
<META NAME='ROBOTS' CONTENT='INDEX, FOLLOW'>
<META NAME='REVISIT-AFTER' CONTENT='1 DAYS'>
<META NAME='RATING' CONTENT='GENERAL'>
<META NAME='TRACKING-DEVELOPER-COPYRIGHT' CONTENT='Ing. Miguel Angel Pita'>
<link rel='stylesheet' href='style.css' type='text/css' />

<style type='text/css'>
<!--
.style1 {color: #333333}
-->
</style>
</head>
<body onload='FP_preloadImgs(/*url*/'images/button4D.jpg', /*url*/'images/button4E.jpg', /*url*/'images/button50.jpg', /*url*/'images/button51.jpg', /*url*/'images/button53.jpg', /*url*/'images/button54.jpg', /*url*/'images/button56.jpg', /*url*/'images/button57.jpg', /*url*/'images/button59.jpg', /*url*/'images/button5A.jpg', /*url*/'images/button5C.jpg', /*url*/'images/button5D.jpg')'>

<div id='page' style='width: 760px; height: auto'>
<div id='header'>
	<div id='headerimg'>
		<h1><a href=''></a></h1>
	</div>
	
</div>
<hr />
<span class='entry'> </span>
<tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div id='next'><ul><li class='pagenav'>
  <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bordercolor='#FFFCDD' bgcolor='#FFFCDD'>
    <tr>
      <td width='27%' height='41' align='center' valign='middle' bgcolor='#FFFFFF'><div align='center'>
        <p class='entry'><a href='index.html'>
		<img border='0' id='img8' src='images/button4C.jpg' height='33' width='100' alt='Inicio' onmouseover='FP_swapImg(1,0,/*id*/'img8',/*url*/'images/button4D.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img8',/*url*/'images/button4C.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img8',/*url*/'images/button4E.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img8',/*url*/'images/button4D.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999' fp-title='Inicio'></a><a href='nosotros.html'><img border='0' id='img14' src='images/button4F.jpg' height='33' width='100' alt='Nosotros' onmouseover='FP_swapImg(1,0,/*id*/'img14',/*url*/'images/button50.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img14',/*url*/'images/button4F.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img14',/*url*/'images/button51.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img14',/*url*/'images/button50.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999' fp-title='Nosotros'></a><a href='servicios.html'><img border='0' id='img15' src='images/button52.jpg' height='33' width='100' alt='Servicios' onmouseover='FP_swapImg(1,0,/*id*/'img15',/*url*/'images/button53.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img15',/*url*/'images/button52.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img15',/*url*/'images/button54.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img15',/*url*/'images/button53.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999' fp-title='Servicios'></a><a href='tarifas.html'><img border='0' id='img16' src='images/button55.jpg' height='33' width='100' alt='Tarifas' onmouseover='FP_swapImg(1,0,/*id*/'img16',/*url*/'images/button56.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img16',/*url*/'images/button55.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img16',/*url*/'images/button57.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img16',/*url*/'images/button56.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999' fp-title='Tarifas'></a><a href='preguntas.html'><img border='0' id='img17' src='images/button58.jpg' height='33' width='130' alt='Preguntas Frecuentes' onmouseover='FP_swapImg(1,0,/*id*/'img17',/*url*/'images/button59.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img17',/*url*/'images/button58.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img17',/*url*/'images/button5A.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img17',/*url*/'images/button59.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999; fp-proportional: 0' fp-title='Preguntas Frecuentes'></a><a href='contacto.html'><img border='0' id='img18' src='images/button5B.jpg' height='33' width='100' alt='Contacto' onmouseover='FP_swapImg(1,0,/*id*/'img18',/*url*/'images/button5C.jpg')' onmouseout='FP_swapImg(0,0,/*id*/'img18',/*url*/'images/button5B.jpg')' onmousedown='FP_swapImg(1,0,/*id*/'img18',/*url*/'images/button5D.jpg')' onmouseup='FP_swapImg(0,0,/*id*/'img18',/*url*/'images/button5C.jpg')' fp-style='fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999' fp-title='Contacto'></a></p>
        </div></td>
    </tr>
    <tr>
      <td height='41' align='center' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
    </tr>
  </table>
  </li>
      <li class='pagenav style1'>      </li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'>

        <div align='center'><strong>Su Mensaje ha Sido enviado Con &Eacute;xito <br />
          Gracias Por Contactarnos, En Breve responderemos  a su requerimiento.      </strong></div>
      </li>
      </ul>
  <p>&nbsp;</p>
  <ul>
    <CENTER >
      </CENTER>
  </ul>
  </div>
<hr />
<div id='footer'>
	<p class='style1'><span class='entry'><a href='#' title='View all posts in Uncategorized' class='entry'>Inicio </a><a href='#' title='Inicio' class='entry'>&#187;</a> |<a href='#'>&iquest;Quienes Somos?</a><a href='#' title='&iquest;Quienes Somos?' class='entry'> &#187;</a>|<a href='#'>Nuestros Servicios</a><a href='#' title='Nuestros Servicios' class='entry'> &#187;</a>|<a href='#'>Preguntas Frecuentes</a><a href='#' title='Preguntas Frecuentes' class='entry'> &#187;</a> |<a href='#'>Tarifas</a><a href='#' title='Debe estar registrado para poder visualizarlas ' class='entry'> &#187;</a> |<a href='#' title='' class='entry'>Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; </p>
</div>
<div class='design_copyright'>
<a href='' title='Web Design' class='web_design'>Web design</a> by Sarkis.</div>
</div>
</body>
</html>
";
}
?>



</body>

</html>