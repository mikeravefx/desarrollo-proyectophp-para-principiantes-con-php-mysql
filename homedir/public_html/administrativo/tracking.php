<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>BizGlobal - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa</title>
<META name="verify-v1" content="String_we_ask_for">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="bizglobal.com.ve">
<META NAME="COPYRIGHT" CONTENT="Copyright (c) by www.bizglobal.com.ve">
<META NAME="KEYWORDS" CONTENT="dolar paralelo, compras, dolar, compra venta, importacion, precio del dolar,compra y venta,dolar en venezuela, comprar en usa,precio dolar,compras por internet, dólar paralelo,dolar paralelo en venezuela, el dolar,importaciones, precio del dolar paralelo, comprar por internet,dolar cantv,courrier, transporte carga, transporte maritimo, precio dolar paralelo, compras online, courier,courrier, valor del dolar, cupo de cadivi,compras en estados unidos, dolar paralelo venezuela, cupo cadivi, compras en usa">
<META NAME="DESCRIPTION" CONTENT="Los Mejores Transportando Carga, BIZ">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="1 DAYS">
<META NAME="RATING" CONTENT="GENERAL">
<META NAME="TRACKING-DEVELOPER-COPYRIGHT" CONTENT="Ing. Miguel Angel Pita">
<script language="JavaScript">
<!--
function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
}
a:link {
	color: #42679E;
}
a:visited {
	color: #0099CC;
}
a:hover {
	color: #0099CC;
}
a:active {
	color: #0099FF;
}
body {
	background-color: #FFFFFF;
	margin-left: 0cm;
	margin-top: 0cm;
	margin-right: 0cm;
	margin-bottom: 0cm;
}
.style67 {color: #FFFFFF; font-weight: bold; }
.style75 {
	font-size: 11px;
	color: #42679E;
	font-weight: bold;
}
.style77 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style78 {font-size: 12px}
.style79 {
	color: #42679E;
	font-weight: bold;
}
-->
</style>
</head>

<body>


<?php
// Connects to your Database

$dbh=mysql_connect ("localhost", "bizgloba_webmast", "mikex5761880n") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("bizgloba_miembros");
//$dbh=mysql_connect ("localhost", "root", "mikex5761880n") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("users");


//fecha,fechaest,nomape,cedula,correo,articulos,tracking,statususa,numerorden,empresa,guiacliente,statusvenezuela
  
//This code runs if the form has been submitted
if (isset($_POST['submit'])) {

//This makes sure they did not leave any fields blank
//fecha,fechaest,nomape,cedula,correo,articulos,tracking,statususa,numerorden,empresa,guiacliente,statusvenezuela

if (!$_POST['nomape'] | !$_POST['cedula']| !$_POST['correo'] | !$_POST['articulos'] |!$_POST['tracking'] |!$_POST['statususa'] |!$_POST['numerorden'] |!$_POST['empresa'] ) {
die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Estimado.Sr(a)  "'.$_POST['nomape'].'" Debe ingresar todos los datos <a href=tracking.php>Intente de Nuevo</a></strong></p>');
}

// Tratamiento de Fechas



function suma_fechas($fecha,$ndias)
            

{
            

      if (preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/([0-9][0-9]){1,2}/",$fecha))
            

              list($dia,$mes,$año)=split("/", $fecha);
            

      if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
            

              list($dia,$mes,$año)=split("-",$fecha);
        $nueva = mktime(0,0,0, $mes,$dia,$año) + $ndias * 24 * 60 * 60;
        $nuevafecha=date("j-m-y",$nueva);
            

      return ($nuevafecha);  
            

}

// Suma 21 Dias a la Fecha en que el articulo entre a la pagina 

//echo suma_fechas($fechahoy,21);  

$fechahoy = date("j-m-y");
$fechaestimada=suma_fechas($fechahoy, 21);




function check_email_address($email) 
{

  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=tracking.php>Regresar</a></strong></p> ');
	return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
	{
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
		{
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=tracking.php> Regresar</a></strong></p> ');
		return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
		 {
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=tracking.php> Regresar</a></strong></p> ');
		return false; // No son suficientes partes o secciones para se un dominio
     }
     for ($i = 0; $i < sizeof($domain_array); $i++) 
		 {
        if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
				{
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=tracking.php> Regresar</a></strong></p> ');
		   return false;
        }
     }
  }
  return true;
}

check_email_address($_POST['correo']);

 
// here we encrypt the password and add slashes if needed
$guiacliente= md5($_POST['tracking']);
$statusvenezuela="Pendiente de Actualizar";


if (!get_magic_quotes_gpc()) {

$_POST['nomape'] = addslashes($_POST['nomape']);
$_POST['cedula'] = addslashes($_POST['cedula']);
$_POST['correo'] = addslashes($_POST['correo']);
$_POST['articulos'] = addslashes($_POST['articulos']);
$_POST['tracking'] = addslashes($_POST['tracking']);
$_POST['statususa'] = addslashes($_POST['statususa']);
$_POST['numerorden'] = addslashes($_POST['numerorden']);
$_POST['empresa'] = addslashes($_POST['empresa']);

}

$insert = "INSERT INTO  bizgloba_miembros.tracking (nomape,cedula,correo,articulos,tracking,statususa,numerorden,empresa,fecha,guiacliente,statusvenezuela,fechaestimada) VALUES ('".$_POST['nomape']."','".$_POST['cedula']."','".$_POST['correo']."','".$_POST['articulos']."','".$_POST['tracking']."','".$_POST['statususa']."','".$_POST['numerorden']."','".$_POST['empresa']."','$fechahoy','$guiacliente','$statusvenezuela','$fechaestimada')";
$add_record = mysql_query($insert);

	  mail($_POST["correo"],"Gracias por realizar el Registro de su Orden ó Compra: ","Estimado(a): " .$_POST["nomape"]. "\n\n\nBienvenido(a)!!!\n\n\nA Continuacion se les ha enviado los datos de su orden, mantenga esta infromacion en un sitio seguro.\n\n\nNombre y Apellido:  ".$_POST['nomape']."\nCedula  ".$_POST['cedula']."\nCorreo:  ".$_POST['correo']."\nArticulos: ".$_POST['articulos']."\nTracking de su orden USA: ".$_POST['tracking'] ."\nStatus de Su Orden en USA: ".$_POST['statususa']."\nNumero de Orden:".$_POST['numerorden']."\nEmpresa de Envio:".$_POST['empresa']."\nRealizo el registro el dia:".$fechahoy."\nSu Guia de Carga es: ".$guiacliente."\nLa Fecha de entrega será: ".$fechaestimada."\nPara conocer el Estatus de Su orden recomendamos verificar periodicamente su orden en la direccion http://www.bizglobal.com.ve/members.php \n\nBizGlobal - Transporte Internacional de Carga\n");

//'$fechahoy','$guiacliente','$statusvenezuela','$fechaestimada'
?>

<style type="text/css">
<!--
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style54 {	font-weight: bold;
	color: #325C96;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.style77 {color: #42679E; font-weight: bold; font-size: 12px; }
.style88 {
	font-size: 20px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style89 {
	color: #42679E;
	font-weight: bold;
	font-size: 20px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>


<table width="58%" border="0">
  <tr>
    <td colspan="3"><div align="center"><img src="Bizglobal.jpg" alt="BizGlobal - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa" width="497" height="188" /></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="46%" border="0" align="center" id="table1">
      <tr>
        <td width="180"><a href="tiendas.html"> <img border="0" id="img1" src="buttonC.jpg" height="36" width="180" alt="Tiendas Recomendadas" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Tiendas Recomendadas" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttonD.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttonC.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttonE.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttonD.jpg')" /></a></td>
        <td width="185"><a href="servicios.html"> <img border="0" id="img2" src="button10.jpg" height="39" width="194" alt="Como Funciona el Servicio" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'button11.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'button10.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'button12.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'button11.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Como Funciona el Servicio" /></a></td>
        <td width="150"><a href="preguntas.html"> <img border="0" id="img4" src="button22.jpg" height="30" width="150" alt="Preguntas Frecuentes" onmouseover="FP_swapImg(1,0,/*id*/'img4',/*url*/'button23.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img4',/*url*/'button22.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img4',/*url*/'button24.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img4',/*url*/'button23.jpg')" fp-style="fp-btn: Simple Text 1; fp-font-style: Bold" fp-title="Preguntas Frecuentes" /></a></td>
        <td width="80"><font face="Verdana"><b><a href="construccion.html"> <img border="0" id="img5" src="button25.jpg" height="16" width="80" alt="Registro" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Registro" onmouseover="FP_swapImg(1,0,/*id*/'img5',/*url*/'button26.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img5',/*url*/'button25.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img5',/*url*/'button27.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img5',/*url*/'button26.jpg')" /></a></b></font></td>
        <td><a href="contacto.html"> <img src="button2C.jpg" alt="Contacto" name="img6" width="80" height="16" border="0" id="img6" onmousedown="FP_swapImg(1,0,/*id*/'img6',/*url*/'button2E.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img6',/*url*/'button2D.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img6',/*url*/'button2D.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img6',/*url*/'button2C.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold; fp-orig: 0" fp-title="Contacto" /></a></td>
        <td><a href="home.html"> <img border="0" id="img7" src="button1C.jpg" height="12" width="60" alt="Inicio" onmouseover="FP_swapImg(1,0,/*id*/'img7',/*url*/'button1D.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img7',/*url*/'button1C.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img7',/*url*/'button1E1.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img7',/*url*/'button1D.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Inicio" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="5%" rowspan="2" align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top"><p>&nbsp;</p>
      <p><span class="style79">Ingreso de compra exitoso si desea ingresar otra compra hagalo <a href="tracking.php">aqui</a></span>              <?php
}
else
{ 
?>
        </span>
      </p>
    <p align="center">&nbsp;</p></td>
    <td width="6%" height="166" rowspan="2" valign="top"><p class="style77">&nbsp;</p>
        <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td align="center" valign="top"><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  <table width="75%" border="0" align="center">
        <table width="200" border="0" align="center">
          <tr>
            <td><div align="center"><img src="Bizglobal.jpg" alt="BizGlobal - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa" width="497" height="188" /></div></td>
          </tr>
        </table>
        <p align="center">&nbsp;</p>
        <table width="46%" border="0" align="center" id="table1">
          <tr>
            <td width="180"><a href="tiendas.html"> <img border="0" id="img1" src="buttonC.jpg" height="36" width="180" alt="Tiendas Recomendadas" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Tiendas Recomendadas" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttonD.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttonC.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttonE.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttonD.jpg')" /></a></td>
            <td width="185"><a href="servicios.html"> <img border="0" id="img2" src="button10.jpg" height="39" width="194" alt="Como Funciona el Servicio" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'button11.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'button10.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'button12.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'button11.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Como Funciona el Servicio" /></a></td>
            <td width="150"><a href="preguntas.html"> <img border="0" id="img4" src="button22.jpg" height="30" width="150" alt="Preguntas Frecuentes" onmouseover="FP_swapImg(1,0,/*id*/'img4',/*url*/'button23.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img4',/*url*/'button22.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img4',/*url*/'button24.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img4',/*url*/'button23.jpg')" fp-style="fp-btn: Simple Text 1; fp-font-style: Bold" fp-title="Preguntas Frecuentes" /></a></td>
            <td width="80"><font face="Verdana"><b><a href="construccion.html"> <img border="0" id="img5" src="button25.jpg" height="16" width="80" alt="Registro" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Registro" onmouseover="FP_swapImg(1,0,/*id*/'img5',/*url*/'button26.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img5',/*url*/'button25.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img5',/*url*/'button27.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img5',/*url*/'button26.jpg')" /></a></b></font></td>
            <td><a href="contacto.html"> <img src="button2C.jpg" alt="Contacto" name="img6" width="80" height="16" border="0" id="img6" onmousedown="FP_swapImg(1,0,/*id*/'img6',/*url*/'button2E.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img6',/*url*/'button2D.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img6',/*url*/'button2D.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img6',/*url*/'button2C.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold; fp-orig: 0" fp-title="Contacto" /></a></td>
            <td><a href="home.html"> <img border="0" id="img7" src="button1C.jpg" height="12" width="60" alt="Inicio" onmouseover="FP_swapImg(1,0,/*id*/'img7',/*url*/'button1D.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img7',/*url*/'button1C.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img7',/*url*/'button1E1.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img7',/*url*/'button1D.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Verdana; fp-font-style: Bold" fp-title="Inicio" /></a></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="624" border="0" align="center">
          <tr>
            <td width="283" bgcolor="#42679E"><span class="style77">Nombre y Apellido:</span></td>
            <td width="325"><input type="text" name="nomape" /></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><p class="style67 style78">
              <label> </label>
                        </p>
            <p class="style77">Cedula:</p></td>
            <td><input type="text" name="cedula" /></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><span class="style77">Correo:</span></td>
            <td><input type="text" name="correo" /></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><span class="style77">Articulo(S):</span></td>
            <td><textarea name="articulos" cols="50" rows="2"></textarea></td>
          </tr>
          <tr>
            <td height="30" bgcolor="#42679E"><span class="style77">Numero de Tracking USA:</span></td>
            <td><input type="text" name="tracking" /></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><span class="style77">Status USA:</span></td>
            <td><select name="statususa">
              <option value="In Trasit">In Transit</option>
              <option value="Delivered">Delivered</option>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><span class="style77">Numero de Orden:</span></td>
            <td><input type="text" name="numerorden" /></td>
          </tr>
          <tr>
            <td bgcolor="#42679E"><span class="style77">Empresa de Envio Interno del Paquete:
                <label> </label>
            </span></td>
            <td><select name="empresa">
              <option value="USPS">USPS</option>
              <option value="UPS">UPS</option>
              <option value="FEDEX">FEDEX</option>
              <option value="DHL">DHL</option>
              <option value="CEVA LOGISTIC">CEVA LOGISTIC</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="submit" value="Guardar" />
            </div></td>
          </tr>
        </table>
      </form>
      <?php

}
?>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="3">
        <div align="center">
          <p>
            <script type="text/javascript"><!--
amazon_ad_tag = "bizglobal-20"; amazon_ad_width = "728"; amazon_ad_height = "90";//--></script>
            <script type="text/javascript" src="http://www.assoc-amazon.com/s/ads.js"></script>
            </p>
</p>
          <p>&nbsp;</p>
          <p>&nbsp;          </p>
        </div>      <p align="center"><span class="style28"><span class="style54 style75">&copy; 2008 Soluciones Creativas</span></span></p>
        </span></p>
    </td></tr>
</table>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>

</body>
</html>