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
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
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
.style65 {
	color: #3D679D;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<?php

// Connects to your Database
$dbh=mysql_connect ("localhost","courierp_courier","hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
//$dbh=mysql_connect ("localhost", "root", "mikex5761880n") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("users");

// nomape,cedula,correo,fecha,guiacliente,statusvenezuela,fechaestimada,fecharecep,articulos,tracking,empresa

//This code runs if the form has been submitted
if (isset($_POST['submit'])) {

//This makes sure they did not leave any fields blank
if (!$_POST['id_a']|!$_POST['nomape_a']| !$_POST['cedula_a'] | !$_POST['correo_a'] |!$_POST['articulos_a'] |!$_POST['fecha_a'] |!$_POST['guiacliente_a'] |!$_POST['statusvenezuela_a'] |!$_POST['fechaestimada_a'] |!$_POST['fecharecep_a'] |!$_POST['tracking_a'] ) {
die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR:NO PUEDE HABER UN CAMPO VACIO</strong></p>');
}



function check_email_address($email) 
{

  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$email.'  <===== <a href=alta.php>Regresar</a></strong></p> ');
	return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
	{
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~.-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
		{
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida =====>  '.$local_array.'  <===== <a href=alta.php>Regresar</a></strong></p> ');
		return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
		 {
             die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: No son suficientes partes o secciones para se un dominio =====>  '.$email_array.'  <===== <a href=alta.php>Regresar</a></strong></p> ');
		return false; // No son suficientes partes o secciones para se un dominio
     }
 // for ($i = 0; $i < sizeof($domain_array); $i++) 
	   	 //{
           //if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
	//			{
           //     die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Direccion De Correo Invalida $domain_array =====>  '.$domain_array.'  <===== <a href=alta.php>Regresar</a></strong></p> ');
		         //return false;
      //  }
//     }
  }
  return true;
}
check_email_address($_POST['correo_a']);

///////////////////////////////////////////////////////// DETERMINAR SI UPDATE O NO //////////////////////////////////////////////////

$check1 = mysql_query("SELECT * FROM courierp_miembros.tracking WHERE guiacliente = '".$_POST['guiacliente_a']."' AND id='".$_POST['id_a']."'")
or die(mysql_error());
$check3 = mysql_num_rows($check1);

if ($check3 != 0 && $row["id"] != $_POST["id_a"] && $row["guiacliente"] == $_POST['guiacliente_a']) {    			              
                								  							  
									  die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Este guia pertenece a otra cliente y no esta disponible, </strong><a href=guias.php>Intente de Nuevo</a></strong></p>');
									    }		
					else 
					
					{  								 
	 
         				
// nomape,cedula,correo,fecha,guiacliente,statusvenezuela,fechaestimada,fecharecep,articulos,tracking,empresa					
$update = "UPDATE courierp_miembros.tracking SET nomape='".$_POST['nomape_a']."',cedula ='".$_POST['cedula_a']."',correo='".$_POST['correo_a']."',
fecha='".$_POST['fecha_a']."',guiacliente='".$_POST['guiacliente_a']."',statusvenezuela='".$_POST['statusvenezuela_a']."',fechaestimada='".$_POST['fechaestimada_a']."',fecharecep='".$_POST['fecharecep_a']."',articulos='".$_POST['articulos_a']."',tracking='".$_POST['tracking_a']."' WHERE ID='".$_POST['id_a']."'";
$add_member = mysql_query($update); 

$lugar = "Miami,Fl";
$fecha = date("j-m-y");
$remitente = "Courierpack Consulting C.A.";


$insert = "INSERT INTO  courierp_miembros.guias_clientes (guia,lugar,fecha,remitente,status) VALUES ('".$_POST['guiacliente_a']."', '".$lugar."','".$fecha."','".$remitente."','".$_POST['statusvenezuela_a']."')";
$add_guia = mysql_query($insert);
               			 


                     }


}
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


<table width="55%" border="0">
  <tr>
    <td colspan="4"><div align="center"></div>
      <div align="center"><img src="../administrativo/bizama.png" width="200" height="75" /></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top"><p class="style77">&nbsp;</p>
      <p class="style1 style65">El proceso de Actualización de sus datos personales ha sido Exitoso</p>
 <p align="center" class="style1"><a href="guias.php">Regresar</a></p>    </td>
    <td width="2%" height="166" valign="top"><p class="style77">&nbsp;</p>
        <p>&nbsp;</p></td>
  </tr>
  
  <tr>
    <td colspan="4"><p align='center'></p>
         <p align='center' class='style54  style66'>&copy; 2008 Soluciones Creativas</p>
</td>
  </tr>
</table>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>

</body>
</html>