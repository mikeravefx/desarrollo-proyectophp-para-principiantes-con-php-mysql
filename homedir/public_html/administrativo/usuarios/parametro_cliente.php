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
.style2 {font-size: 10px}
-->
</style>
</head>

<body>
<SCRIPT LANGUAGE="JavaScript">
<!--
function imprimir() {
if (window.print)
window.print()
else
alert("Disculpe, su navegador no soporta esta opción.");
}
// -->
</SCRIPT>
<div align="left">

      
 <table width="805" border="0">
   <tr>
     <td width="98" bordercolor="#42679E" bgcolor="#FFFFFF">&nbsp;</td>
     <td width="19" bordercolor="#42679E" bgcolor="#FFFFFF">&nbsp;</td>
     <td width="773">&nbsp;
	 
	  <?php
if (!isset($_GET['cedula'])){
echo "<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style1'><img src='bizama.png' width='200' height='75' /></p>
<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style2'> Debe ingresar el número de guía  ! </p>"; // solamente me entra a esta condicion


echo "</html></body> \n";
exit;
}
//$link = mysql_connect("localhost","root","mikex5761880n");
//mysql_select_db("users", $link);
$link = mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F");
mysql_select_db("courierp_miembros", $link);
$result = mysql_query("SELECT * FROM courierp_miembros.users WHERE cedula = '".$_GET['cedula']."'", $link);
$contador=0;
$consolidacion=0;

$check = mysql_query("SELECT * FROM courierp_miembros.users WHERE cedula = '".$_GET['cedula']."'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{
if ($check == 0) {
                   echo "<br><br><br><br><br><br><br><p align='left'><strong>ERROR: Este Usuario no existe en nuestra base de datos. <a href=''>Intente de Nuevo</a></strong></p>";
                   }
				   
else 
{

   $SESSION['ID']=$info['ID'];
   $SESSION['username']=$info['username'];
   $SESSION['pass']=$info['password'];
   $SESSION['nomape']=$info['nomape'];
   $SESSION['cedula']=$info['cedula'];
   $SESSION['empresa']=$info['empresa'];
   $SESSION['direccion']=$info['direccion'];
   $SESSION['alternativa']=$info['alternativa'];
   $SESSION['estado']=$info['estado'];
   $SESSION['ciudad']=$info['ciudad'];
   $SESSION['telfijo']=$info['telfijo'];
   $SESSION['telcelular']=$info['telcelular'];
   $SESSION['correo']=$info['correo'];   
   $SESSION['totalconsolidado']=0;
   session_register("SESSION");			
   
  
   }   
}   
				   
if ($row = mysql_fetch_array($result)){

echo "<p align='left'><img src='cp_logo.gif' width='200' height='75'></p>\n ";
echo " <div align='left'>\n ";
echo " <table width='593' border='0'> \n ";
echo " <tr bgcolor='#40659D'> \n "; 
//Mostramos los nombres de las tablas
echo"<br>"; 
$SESSION['ID']=$info['ID'];
$username=$SESSION['username'];
$nomape=$SESSION['nomape'];
$cedula=$SESSION['cedula'];
$empresa=$SESSION['empresa'];
$direccion=$SESSION['direccion'];
$alternativa=$SESSION['alternativa'];
$estado=$SESSION['estado'];
$ciudad=$SESSION['ciudad'];
$telfijo=$SESSION['telfijo'];
$telcelular=$SESSION['telcelular'];
$correo=$SESSION['correo'];

echo"<p align='justify' class='style1 style59 style50 style3'>
<form method='post' action='actualizado.php'>
<table width='600' border='0'>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Apodo: </td>
    <td colspan='-97'><p align='left' class='style1 style59 style50 style3'><b><input type='text' name='username_a' value= '$username'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Nombre y Apellido: </td>
    <td colspan='-97'><input type='text' name='nomape_a' value= '$nomape'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>C&eacute;dula:</td>
    <td colspan='-97'><input type='text' name='cedula_a' value= '$cedula'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Empresa: </td>
    <td colspan='-97'><input type='text' name='empresa_a' value= '$empresa'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Direcci&oacute;n:</td>
    <td colspan='-97'><input type='text' name='direccion_a' value= '$direccion' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Direcci&oacute;n Alternativa:</td>
    <td colspan='-97'><input name='alternativa_a' type='text' value= '$alternativa' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Estado:</td>
    <td colspan='-97'><input type='text' name='estado_a' value= '$estado' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Ciudad &oacute; Municipio: </td>
    <td><input type='text' name='ciudad_a' value= '$ciudad' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Tel&eacute;fono Fijo: </td>
    <td><input type='text' name='telfijo_a' value= '$telfijo' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Tel&eacute;fono Celular:</td>
    <td><input type='text' name='telcelular_a' value= '$telcelular' size='60'/></td>
  </tr>
  <tr>
    <td><p align='left' class='style1 style59 style50 style3'><b>Telefono Movil 2: </td>
    <td><p align='left' class='style1 style59 style50 style3'><b><input  type='text' name ='correo_a' value= '$correo' size='60'/></td>
  </tr>
  <tr>
    <td colspan='2'><div align='center'>
      <p align='center' class='style1 style59 style50 style3'><input type='submit' name='submit' value='Actualizar' >
      <strong><a href='user.php'>  Regresar </a><span class='style59'>&raquo;<strong></p>
    </div></td>
  </tr>
</table>
	  </form>"; 
while ($field = mysql_fetch_field($result)){
//echo "<td>$field->name</td> \n";
   echo "<td colspan='2'><div align='left' class='style10'>Consulta</div></td>\n";
  }
 
do {
               
				} 
 
while ($row = mysql_fetch_array($result));



}
else {
echo "<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style1'><img src='cp_logo.gif' width='200' height='75' /></p>
<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style2'>&iexcl; No se ha encontrado ning&uacute;n registro ! </p>";
}
?>	 </td>
   </tr>
   <tr>
     <td colspan="3" bordercolor="#42679E" bgcolor="#FFFFFF"><div align="center"><span class="style2">[ <a href='logout.php'><b>Desconectarse</b></a> ]</span></div></td>
    </tr>
 </table>
</div>
</body>
</html>