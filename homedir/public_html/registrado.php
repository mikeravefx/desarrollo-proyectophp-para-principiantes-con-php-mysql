<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Courierpack - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa</title>
<meta name="verify-v1" content="String_we_ask_for" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="expires" content="0" />

<meta name="RESOURCE-TYPE" content="DOCUMENT" />
<meta name="DISTRIBUTION" content="GLOBAL" />
<meta name="AUTHOR" content="www.courierpack.com.ve" />
<meta name="COPYRIGHT" content="copyright (c) by www.courierpack.com.ve" />
<meta name="KEYWORDS" content="dolar paralelo, compras, dolar, compra venta, importacion, precio del dolar,compra y venta,dolar en venezuela, comprar en usa,precio dolar,compras por internet, dolar paralelo,dolar paralelo en venezuela, el dolar,importaciones, precio del dolar paralelo, comprar por internet,dolar cantv,courrier, transporte carga, transporte maritimo, precio dolar paralelo, compras online, courier,courrier, valor del dolar, cupo de cadivi,compras en estados unidos, dolar paralelo venezuela, cupo cadivi, compras en usa" />
<meta name="DESCRIPTION" content="Marcando la Diferencia Transportando Carga" />
<meta name="ROBOTS" content="INDEX, FOLLOW" />
<meta name="REVISIT-AFTER" content="1 DAYS" />
<meta name="RATING" content="GENERAL" />
<meta name="TRACKING-DEVELOPER-COPYRIGHT" content="Ing. Miguel Angel Pita" />
<link rel="stylesheet" href="style.css" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #333333}
.style62 {font-size: 11px}
.style70 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style76 {color: #FF0000}
.style77 {color: #333333; font-size: 10px; }
.style79 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; }
.style81 {color: #333333; font-size: 10px; font-weight: bold; }
-->
</style>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
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
<SCRIPT language=JavaScript>
<!--
v=false;
//-->
</SCRIPT>

<SCRIPT language=JavaScript1.1>
<!--
if (typeof(Option)+"" != "undefined") v=true;
//-->
</SCRIPT>

<SCRIPT language=JavaScript>
<!--
if(v){a=new Array(22);}

function getFormNum (formName) {
	var formNum =-1;
	for (i=0;i<document.forms.length;i++){
		tempForm = document.forms[i];
		if (formName == tempForm) {
			formNum = i;
			break;
		}
	}
	return formNum;
}

function jmp(form, elt)
// The first parameter is a reference to the form.
{
	if (form != null) {
		with (form.elements[elt]) {
			if (0 <= selectedIndex)
				location = options[selectedIndex].value;
		}
	}
}

var catsIndex = -1;
var itemsIndex;

if (v) { // ns 2 fix
function newCat(){
	catsIndex++;
	a[catsIndex] = new Array();
	itemsIndex = 0;
}

function O(txt,url) {
	a[catsIndex][itemsIndex]=new myOptions(txt,url);
	itemsIndex++;
}

function myOptions(text,value){
	this.text = text;
	this.value = value;
}

<?php

// Conexion a bd

$conexion = mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F")or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
mysql_select_db("courierp_miembros", $conexion);

 $sql="SELECT * FROM courierp_miembros.estados";
 $consulta1=mysql_query($sql,$conexion);
 while (list($id_estado,$tmp_estado)=mysql_fetch_array($consulta1)) {
   $sql2="SELECT ciudad FROM courierp_miembros.ciudades WHERE cod='$id_estado'";
   $consulta2=mysql_query($sql2,$conexion);
   echo 'newCat(); //'.$tmp_estado."\n";
   while (list($tmp_ciudad)= mysql_fetch_array($consulta2)) 
     { echo 'O("'.$tmp_ciudad.'","'.$tmp_ciudad.'");';  }
 }

?>

} // if (v)

function relate(formName,elementNum,j) {
    if(v){
        var formNum = getFormNum(formName);
         if (formNum>=0) {
        	//formNum++; // reference next form, assume it follows in HTML
        	with (document.formulario.ciudades) {
        		for(i=options.length-1;i>0;i--) options[i] = null; // null out in reverse order (bug workarnd)
        		for(i=0;i<a[j].length;i++){
        			options[i] = new Option(a[j][i].text,a[j][i].value);
        		}
        		options[0].selected = true;
        	}
        }
    }
    else { jmp(formName,elementNum);
    }
}

function IEsetup(){
	if(!document.all) return;
	IE5 = navigator.appVersion.indexOf("5.")!=-1;
	if(!IE5) {
		for (i=0;i<document.forms.length;i++) {
			document.forms[i].reset();
		}
	}
}

window.onload = IEsetup;
//-->
</SCRIPT>
<script>
function verificar(){


	if (document.formu.cedula.value.length<7){
		alert("Debes escribir un número de cédula válido")
		return false
	}
	if (document.formu.nombres.value.length<1){
		alert("Debes escribir tu nombre ")
		return false
	}
	if (document.formu.apellidos.value.length<1){
		alert("Debes escribir tu apellido")
		return false
	}

	if (document.formu.email.value.length<1){
		alert("Debes escribir un email de contacto")
		return false
	}
	if (document.formu.cnu.value.length<1){
		alert("Ingresa el número de Registro del C.N.U.")
		return false
	}
	if (document.formu.ia.value==""){
		alert("Escribe tu índice académico")
		return false
	}
	//validando el @
	var i;
	var totaldearrobasx=0;
	var largox;
	var letrax;
	largox=document.formu.email.value.length
	 
	for(i=0; i<largox; i++)
	{
		letrax=document.formu.email.value.charAt(i)
		if(letrax=="@")
		{
		totaldearrobasx ++;
		}
	}
		if(totaldearrobasx!=1)
		{
		alert("Revisa tu dirección electrónica")
		return;
	}
	formu.submit()
	
}
function ValidarEntero(name){
	var objeto=document.getElementById(name);
	var lon=objeto.value.length;	
	var digits="0123456789"
	for (var i=0;i<lon;i++){
		var temp=objeto.value.substring(i,i+1)
		if (digits.indexOf(temp)==-1){
			alert("Introduzca sólo numeros.\nNo coloque comas,guiones o puntos.");
			objeto.value="";
			objeto.focus();
			return false
	    }
	}
}
function ValidarDecimal(name){
	var objeto=document.getElementById(name);
	var lon=objeto.value.length;	
	var digits="0123456789."
	for (var i=0;i<lon;i++){
		var temp=objeto.value.substring(i,i+1)
		if (digits.indexOf(temp)==-1){
			alert("Introduzca sólo numeros.\nNo coloque comas,guiones o puntos.");
			objeto.value="";
			objeto.focus();
			return false
	    }
	}
}
	</script>
<?php
// Connects to your Database

$dbh=mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");



//This code runs if the form has been submitted
if (isset($_POST['submit'])) {

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] | !$_POST['nomape'] | !$_POST['persona']| !$_POST['cedula'] | !$_POST['empresa'] |!$_POST['direccion'] |!$_POST['alternativa'] |!$_POST['Estados'] |!$_POST['ciudades'] |!$_POST['telfijo'] |!$_POST['telcelular'] |!$_POST['correo']) {
die("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
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
<div id='next'><ul>
  <li class='pagenav'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bordercolor='#FFFCDD' bgcolor='#FFFCDD'>
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
  </li>      <li class='pagenav style1'>      </li><br><br><br><br><br><br><br><p align='center' class='style64 style77 style88'><strong> ERROR: Estimado.Sr(a)  ".$_POST['nomape']." Debe ingresar todos los datos <a href=registro_clientes.php>registrese de  nuevo</a></strong></p> <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      </ul>
  <p>&nbsp;</p>
  <ul>
    <CENTER >
      </CENTER>
  </ul>
  </div>
<hr />
<div id='footer'>
	<p class='style1'><span class='entry'><a href='#' title='View all posts in Uncategorized' class='entry'>Inicio </a><a href='#' title='Inicio' class='entry'>&#187;</a> |<a href='#'>&iquest;Quienes Somos?</a><a href='#' title='&iquest;Quienes Somos?' class='entry'> &#187;</a>|<a href='#'>Nuestros Servicios</a><a href='#' title='Nuestros Servicios' class='entry'> &#187;</a>|<a href='#'>Preguntas Frecuentes</a><a href='#' title='Preguntas Frecuentes' class='entry'> &#187;</a> |<a href='#'>Tarifas</a><a href='#' title='Debe estar registrado para poder visualizarlas ' class='entry'> &#187;</a> |<a href='#' title='Comment on Hello world!' class='entry'>Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class='design_copyright'>
<a href='' title='Web Design' class='web_design'>Web design</a> by Sarkis.</div>
</div>
</body>
</html>");
}

function check_email_address($email) 
{

  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
             die("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
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
<div id='next'><ul>
  <li class='pagenav'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bordercolor='#FFFCDD' bgcolor='#FFFCDD'>
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
  </li>      <li class='pagenav style1'>      </li><br><br><br><br><br><br><br><p align='center' class='style64 style77 style88'><strong> ERROR: Direccion De Correo Invalida $email =====>  ".$_POST['username']."  <===== <a href=registro_clientes.php>Regresar</a></strong></p>  <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      </ul>
  <p>&nbsp;</p>
  <ul>
    <CENTER >
      </CENTER>
  </ul>
  </div>
<hr />
<div id='footer'>
	<p class='style1'><span class='entry'><a href='#' title='View all posts in Uncategorized' class='entry'>Inicio </a><a href='#' title='Inicio' class='entry'>&#187;</a> |<a href='#'>&iquest;Quienes Somos?</a><a href='#' title='&iquest;Quienes Somos?' class='entry'> &#187;</a>|<a href='#'>Nuestros Servicios</a><a href='#' title='Nuestros Servicios' class='entry'> &#187;</a>|<a href='#'>Preguntas Frecuentes</a><a href='#' title='Preguntas Frecuentes' class='entry'> &#187;</a> |<a href='#'>Tarifas</a><a href='#' title='Debe estar registrado para poder visualizarlas ' class='entry'> &#187;</a> |<a href='#' title='Comment on Hello world!' class='entry'>Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class='design_copyright'>
<a href='' title='Web Design' class='web_design'>Web design</a> by Sarkis.</div>
</div>
</body>
</html>" );
	return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
	{
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~.-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
		{
             die("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
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
<div id='next'><ul>
  <li class='pagenav'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bordercolor='#FFFCDD' bgcolor='#FFFCDD'>
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
  </li>      <li class='pagenav style1'>      </li><br><br><br><br><br><br><br><p align='center' class='style64 style77 style88'><strong> ERROR: Direccion De Correo Invalida =====>  ".$_POST['username']."  <===== <a href=registro_clientes.php>Regresar</a></strong></p>  <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      </ul>
  <p>&nbsp;</p>
  <ul>
    <CENTER >
      </CENTER>
  </ul>
  </div>
<hr />
<div id='footer'>
	<p class='style1'><span class='entry'><a href='#' title='View all posts in Uncategorized' class='entry'>Inicio </a><a href='#' title='Inicio' class='entry'>&#187;</a> |<a href='#'>&iquest;Quienes Somos?</a><a href='#' title='&iquest;Quienes Somos?' class='entry'> &#187;</a>|<a href='#'>Nuestros Servicios</a><a href='#' title='Nuestros Servicios' class='entry'> &#187;</a>|<a href='#'>Preguntas Frecuentes</a><a href='#' title='Preguntas Frecuentes' class='entry'> &#187;</a> |<a href='#'>Tarifas</a><a href='#' title='Debe estar registrado para poder visualizarlas ' class='entry'> &#187;</a> |<a href='#' title='Comment on Hello world!' class='entry'>Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class='design_copyright'>
<a href='' title='Web Design' class='web_design'>Web design</a> by Sarkis.</div>
</div>
</body>
</html>");
		return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
		 {
             die("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
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
<div id='next'><ul>
  <li class='pagenav'><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bordercolor='#FFFCDD' bgcolor='#FFFCDD'>
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
  </li>      <li class='pagenav style1'>      </li>
  <br><br><br><br><br><br><br><p align='center' class='style64 style77 style88'><strong> ERROR: No son suficientes partes o secciones para de un dominio ".$_POST['username']."=====>  ".$_POST['username']."  <===== <a href=registro_clientes.php>Regresar</a></strong></p> 
  
       <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      <li class='pagenav style1'></li>
      </ul>
  <p>&nbsp;</p>
  <ul>
    <CENTER >
      </CENTER>
  </ul>
  </div>
<hr />
<div id='footer'>
	<p class='style1'><span class='entry'><a href='#' title='View all posts in Uncategorized' class='entry'>Inicio </a><a href='#' title='Inicio' class='entry'>&#187;</a> |<a href='#'>&iquest;Quienes Somos?</a><a href='#' title='&iquest;Quienes Somos?' class='entry'> &#187;</a>|<a href='#'>Nuestros Servicios</a><a href='#' title='Nuestros Servicios' class='entry'> &#187;</a>|<a href='#'>Preguntas Frecuentes</a><a href='#' title='Preguntas Frecuentes' class='entry'> &#187;</a> |<a href='#'>Tarifas</a><a href='#' title='Debe estar registrado para poder visualizarlas ' class='entry'> &#187;</a> |<a href='#' title='Comment on Hello world!' class='entry'>Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class='design_copyright'>
<a href='' title='Web Design' class='web_design'>Web design</a> by Sarkis.</div>
</div>
</body>
</html>");
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

check_email_address($_POST['username']);



// checks if the username is in use
if (!get_magic_quotes_gpc()) {
$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM courierp_miembros.users WHERE username = '$usercheck'")
//$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
die('<br><br><br><br><br><br><br><p align="center"><strong> ERROR: Los Sentimos, Este nickname.  "'.$_POST['username'].'" Se Encuentra en Uso, por favor <a href=alta.php>registrese de  nuevo</a></strong></p>');
}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
die('<br><br><br><br><br><br><br><p align="center"><strong>ERROR: Los Passwords Introducidos son diferentes, Solo repita su password dos veces. <a href=alta.php>Regresar</a></strong></p>');
}

// here we encrypt the password and add slashes if needed
//$password =$_POST['pass'];
//$_POST['pass'] = md5($_POST['pass']);


$link = mysql_connect("localhost","courierp_courier","hVAC53fjGa7F");
mysql_select_db("courierp_miembros", $link);
$result = mysql_query("SELECT * FROM courierp_miembros.estados WHERE id = '".$_POST['Estados']."'", $link);
if ($row = mysql_fetch_array($result)){
while ($field = mysql_fetch_field($result)){

}

do {  $_POST['Estados']=$row["nombre"];

} while ($row = mysql_fetch_array($result));


}
else {
echo "";
}

if (!get_magic_quotes_gpc()) {
$_POST['pass'] = addslashes($_POST['pass']);
$_POST['username'] = addslashes($_POST['username']);
$_POST['nomape'] = addslashes($_POST['nomape']);
$_POST['persona'] = addslashes($_POST['persona']);
$_POST['cedula'] = addslashes($_POST['cedula']);
$_POST['empresa'] = addslashes($_POST['empresa']);
$_POST['direccion'] = addslashes($_POST['direccion']);
$_POST['alternativa'] = addslashes($_POST['alternativa']);
$_POST['Estados'] = addslashes($_POST['Estados']);
$_POST['ciudades'] = addslashes($_POST['ciudades']);
$_POST['telfijo'] = addslashes($_POST['telfijo']);
$_POST['telcelular'] = addslashes($_POST['telcelular']);
$_POST['correo'] = addslashes($_POST['correo']);
$_POST['como'] = addslashes($_POST['como']);

}



$insert = "INSERT INTO  courierp_miembros.users (username,password,nomape,persona,cedula,empresa,direccion,alternativa,estado,ciudad,telfijo,telcelular,correo,como) VALUES ('".$_POST['username']."', '".$_POST['pass']."','".$_POST['nomape']."','".$_POST['persona']."','".$_POST['cedula']."','".$_POST['empresa']."','".$_POST['direccion']."','".$_POST['alternativa']."','".$_POST['Estados']."','".$_POST['ciudades']."','".$_POST['telfijo']."','".$_POST['telcelular']."','".$_POST['correo']."','".$_POST['como']."')";

//$insert = "INSERT INTO  users (username,password,nomape,cedula,empresa,direccion,alternativa,estado,ciudad,telfijo,telcelular,correo,como) VALUES ('".$_POST['username']."', '".$_POST['pass']."','".$_POST['nomape']."','".$_POST['cedula']."','".$_POST['empresa']."','".$_POST['direccion']."','".$_POST['alternativa']."','".$_POST['estado']."','".$_POST['ciudad']."','".$_POST['telfijo']."','".$_POST['telcelular']."','".$_POST['correo']."','".$_POST['como']."')";


$add_member = mysql_query($insert);

?>

<body onload="FP_preloadImgs(/*url*/'images/button4D.jpg', /*url*/'images/button4E.jpg', /*url*/'images/button50.jpg', /*url*/'images/button51.jpg', /*url*/'images/button53.jpg', /*url*/'images/button54.jpg', /*url*/'images/button56.jpg', /*url*/'images/button57.jpg', /*url*/'images/button59.jpg', /*url*/'images/button5A.jpg', /*url*/'images/button5C.jpg', /*url*/'images/button5D.jpg')">

<div id="page" style="width: 760px; height: auto">
<div id="header">
	<div id="headerimg">
		<h1><a href=""></a></h1>
	</div>
</div>
<hr />
<span class="entry"> </span>
<tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div id="next"><ul><li class="pagenav">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFCDD" bgcolor="#FFFCDD">
    <tr>
      <td width="27%" height="41" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p class="entry"><a href="index.html">
		<img border="0" id="img8" src="images/button4C.jpg" height="33" width="100" alt="Inicio" onmouseover="FP_swapImg(1,0,/*id*/'img8',/*url*/'images/button4D.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img8',/*url*/'images/button4C.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img8',/*url*/'images/button4E.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img8',/*url*/'images/button4D.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999" fp-title="Inicio"></a><a href="nosotros.html"><img border="0" id="img14" src="images/button4F.jpg" height="33" width="100" alt="Nosotros" onmouseover="FP_swapImg(1,0,/*id*/'img14',/*url*/'images/button50.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img14',/*url*/'images/button4F.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img14',/*url*/'images/button51.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img14',/*url*/'images/button50.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999" fp-title="Nosotros"></a><a href="servicios.html"><img border="0" id="img15" src="images/button52.jpg" height="33" width="100" alt="Servicios" onmouseover="FP_swapImg(1,0,/*id*/'img15',/*url*/'images/button53.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img15',/*url*/'images/button52.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img15',/*url*/'images/button54.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img15',/*url*/'images/button53.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999" fp-title="Servicios"></a><a href="tarifas.html"><img border="0" id="img16" src="images/button55.jpg" height="33" width="100" alt="Tarifas" onmouseover="FP_swapImg(1,0,/*id*/'img16',/*url*/'images/button56.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img16',/*url*/'images/button55.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img16',/*url*/'images/button57.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img16',/*url*/'images/button56.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999" fp-title="Tarifas"></a><a href="preguntas.html"><img border="0" id="img17" src="images/button58.jpg" height="33" width="130" alt="Preguntas Frecuentes" onmouseover="FP_swapImg(1,0,/*id*/'img17',/*url*/'images/button59.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img17',/*url*/'images/button58.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img17',/*url*/'images/button5A.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img17',/*url*/'images/button59.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999; fp-proportional: 0" fp-title="Preguntas Frecuentes"></a><a href="contacto.html"><img border="0" id="img18" src="images/button5B.jpg" height="33" width="100" alt="Contacto" onmouseover="FP_swapImg(1,0,/*id*/'img18',/*url*/'images/button5C.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img18',/*url*/'images/button5B.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img18',/*url*/'images/button5D.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img18',/*url*/'images/button5C.jpg')" fp-style="fp-btn: Glass Tab 4; fp-font: Verdana; fp-font-size: 8; fp-font-color-hover: #003978; fp-font-color-press: #999999" fp-title="Contacto"></a></p>
        </div></td>
    </tr>
    <tr>
      <td height="41" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top"><p class="style77">&nbsp;</p>
      <p align="center" class="style64 style77 style88"><strong>Su proceso de Registro ha sido exitoso</strong></p>
      <p align="center" class="style64 style77 style88"><strong>Gracias por Preferirnos !</a>.</strong></p>
      <p align="center" class="style88 style77 style64">&nbsp;</p>
      <span class="style64">
      <?php
	  //mail al cliente
$fecha = date("j-m-y");
$destino =$_POST["username"];
$asunto = ' Bienvenido a Nuestra Familia de Clientes Satisfechos  ';
$cabeceras = "From: info@courierpack.com.ve.com.ve\r\nContent-type: text/html\r\n";
$cuerpo ="<html> <head>  <title> $titulo </title>  
<style type='text/css'>
<!--
.style1 {
	font-size: 9px;
	font-weight: bold;
}
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
    <td bgcolor='#FFFFFF'><b>".$_POST['nomape']."</b></td>
  </tr>
  <tr>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#AAD2FF'><p align='justify'><span style='color:#333333;font-size:12pt;'>Bienvenido(a)!!!<br>
          <br>
          <br>
          Recuerde que los datos mostrados a continuaci&oacute;n, son estrictamente confidenciales.</span></p>
      <p>Usuario: <b><i> ".$_POST['username']."</b></i><br>
Password: <b><i>".$_POST['pass']."</b></i><br>
Nombre: <b><i>".$_POST['nomape']."</b></i><br>
Cedula o Rif:<b><i> ".$_POST['cedula']."</b></i><br>
Responsable de la Carga: <b><i>".$_POST['empresa'] ."<br>
</b></i>Direccion: <b><i>".$_POST['direccion']."</b></i><br>
Estado:<b><i>".$_POST['Estados']."</b></i><br>
Ciudad:".$_POST['ciudades']."<br>
</b></i>Telefono Fijo:<b><i>".$_POST['telfijo']."</b></i><br>
Telefono Movil 1: <b><i>".$_POST['telcelular']."</b></i><br>
Telefono Movil 2: <b><i>".$_POST['correo']."</b></i></p>
      <p>Gracias por su paciencia y espera, para nosotros su tiempo es importante, si posee otra solicitud no dude en <a href='http://www.courierpack.com.ve/contacto.html'>contactarnos</a><br>
        <a href='contacto.html'><br>
</a></p></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><div align='center'><img src='http://www.courierpack.com.ve/images/mundocourierpack.jpg' alt='courier internacional puerta a puerta' width='174' height='172'></div></td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><div align='center'>
      <p class='style1'><a href='www.courierpack.com.ve'>Sencillamente marcamos la diferencia en transporte internacional de carga </a><br>     
        Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. Rif J30592360-4.</span></p>
    </div></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'><br>
    <p align='justify' style='color:#333333;font-size:12pt;' >&nbsp;</p></td>
    <td bordercolor='#AAD2FF' bgcolor='#FFFFFF'>&nbsp;</td>
  </tr>
</table>
</body> 
</html>";

mail($destino,$asunto,$cuerpo,$cabeceras);

}
else
{
?>
  </li>
      <li class="pagenav style1">      </li>
      <li class="pagenav style1"></li>
      <li class="pagenav style1"><strong>Bienvenidos al Proceso de registro &raquo;</strong></li>
      <li class="pagenav style1"><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formulario" id="formulario">
          <p>&nbsp; </p>
        <p class="style8"><span class="style62"><strong>Nota: </strong>Los Campos Se&ntilde;alados con (<span class="style76">*</span>) Son  Requeridos </span></p>
        <table width="742" border="0">
          <tr>
            <td width="297" bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong>(*)  Correo:</strong></span></td>
            <td width="429"><span class="style77">
              <input name="username" type="text" size="40"/>
              <strong>(<span class="style76">*</span>) </strong></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>(*) Contrase&ntilde;a:</strong></span></td>
            <td><span class="style79"><strong> </strong>
                <input type="password" name="pass" size="40"/>
                <strong>(<span class="style76">*</span>) </strong></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>(*)  Repita Contrase&ntilde;a: </strong></span></td>
            <td><span class="style77">
              <input type="password" name="pass2" size="40"/>
              <strong> (<span class="style76">*</span>) </strong></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>Nombre del Cliente: </strong></span></td>
            <td><span class="style79">
              <input type="text" name="nomape" size="40" id="nomb"/>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>CI/Rif: (solo los n&uacute;meros): </strong></span></td>
            <td><span class="style77"><strong>
              <select name="persona" size="1" class="style70">
                <option>V-</option>
                <option>E-</option>
                <option>J-</option>
                    </select>
              <input type="text" name="cedula" size="18" id="cedula" onblur="ValidarEntero('cedula')"/>
            </strong></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>Responsable de la Recepci&oacute;n  de la carga: </strong></span></td>
            <td><span class="style77">
              <input type="text" name="empresa" size="35"/>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>Direccion de Entrega:</strong></span></td>
            <td><span class="style79">
              <textarea name="direccion" cols="40" rows="3" size="500"></textarea>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style1"><strong>Direccion Alternativa: </strong></span></td>
            <td><span class="style77">
              <textarea name="alternativa" cols="40" rows="3" size="500"></textarea>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77 style1"><p class="style77"><strong>Estado: </strong></p>
              <p class="style81">Ciudad: </p></td>
            <td><p class="style77"><strong>
              <select class="saveHistory" id="m1" name="Estados" onchange="relate(this.form,0,this.selectedIndex)">
                <?php 	$sql="SELECT * FROM courierp_miembros.estados";
		$consulta=mysql_query($sql,$conexion);
		while (list($cod,$estado)=mysql_fetch_array($consulta)) {
		echo '<option value="'.$cod.'">'.$estado.'</option>';  }
		// --- Ya tengo la lista de Estados --- 
		?>
              </select>
              </strong></p>
              <p class="style77"><strong><span class="style81">
                <select class="saveHistory" id="m2" name="ciudades">
                  <?php   $sql="SELECT ciudad FROM courierp_miembros.ciudades WHERE cod='1'";
	         $consulta=mysql_query($sql,$conexion);
	        while (list($c_ciudad)=mysql_fetch_array($consulta)) {
                  echo '<option value="'.$c_ciudad.'">'.$c_ciudad.'</option>'; }
	       mysql_close($conexion);?>
                </select>
              </span></strong></p></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style79 style1"><strong>Tel&eacute;fono Fijo (Inquique c&oacute;digo de &aacute;rea)</strong>: </span></td>
            <td><span class="style79">
              <input type="text" name="telfijo" size="40" id="telfijo" onblur="ValidarEntero('telfijo')"/>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style79 style1"><strong>Tel&eacute;fono M&oacute;vil 1:</strong></span></td>
            <td><span class="style79">
              <input type="text" name="telcelular" size="40" id="telmovil" onblur="ValidarEntero('telmovil')"/>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong>Telefono M&oacute;vil 2 : </strong></span></td>
            <td><span class="style77">
              <input type="text" name="correo" size="40" id="correo" onblur="ValidarEntero('correo')"/>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong>Observaciones: </strong></span></td>
            <td><span class="style77">
              <textarea name="como" cols="40" rows="3" size="500"></textarea>
            </span></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="submit" id="searchsubmit" value="Registrarse" onclick="verificar()" /></td>
            </tr>
        </table>
        <p class="style77">&nbsp;</p>
        <tr>
            <td colspan="4"></p>            </td>
          </tr>
        </form>
    </tr><tr>
            <td colspan="4"></p>            </td>
          </tr>
        <tr><td colspan="3" align="center" valign="top"><?php
}
?>
   </li>
      </ul>
  </div>
<hr />
<div id="footer">
	<p class="style1"><span class="entry"><a href="#" title="View all posts in Uncategorized" class="entry">Inicio </a><a href="#" title="Inicio" class="entry">&#187;</a> |<a href="#">&iquest;Quienes Somos?</a><a href="#" title="&iquest;Quienes Somos?" class="entry"> &#187;</a>|<a href="#">Nuestros Servicios</a><a href="#" title="Nuestros Servicios" class="entry"> &#187;</a>|<a href="#">Preguntas Frecuentes</a><a href="#" title="Preguntas Frecuentes" class="entry"> &#187;</a> |<a href="#">Tarifas</a><a href="#" title="Debe estar registrado para poder visualizarlas " class="entry"> &#187;</a> |<a href="#" title="Comment on Hello world!" class="entry">Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class="design_copyright"></div>
</div>
</body>
</html>
