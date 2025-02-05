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
<meta name="AUTHOR" content="courierpack.com.ve" />
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
.style89 {color: #333333; font-size: 10px; font-weight: bold; }
.style91 {color: #333333; font-weight: bold; }
.style93 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; font-weight: bold; }
.style94 {font-weight: bold}
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

</head>
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
  </li>
      <li class="pagenav style1">      </li>
      <li class="pagenav style1"></li>
      <li class="pagenav style1"><strong>Bienvenidos al Proceso de registro &raquo;</strong></li>
      <li class="pagenav style1"><form action="registrado.php"  method="post" name="formulario" id="formulario">
        <p class="style8"><span class="style62"><strong>Nota: </strong>Los Campos Se&ntilde;alados con (<span class="style76">*</span>) Son  Requeridos </span></p>
        <table width="742" border="0">
          <tr>
            <td width="297" bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong><span class="style62">(<span class="style76">*</span>) </span>  Correo:</strong></span></td>
            <td width="429"><span class="style89">
              <input name="username" type="text" size="40"/>
              (<span class="style76">*</span>) </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Contrase&ntilde;a:</span></td>
            <td><span class="style93"> 
                <input type="password" name="pass" size="40"/>
                (<span class="style76">*</span>) </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Repita Contrase&ntilde;a: </span></td>
            <td><span class="style89">
              <input type="password" name="pass2" size="40"/>
              (<span class="style76">*</span>) </span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Nombre del Cliente: </span></td>
            <td><span class="style93">
              <input type="text" name="nomape" size="40" id="nomb"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> CI/Rif: (solo los n&uacute;meros): </span></td>
            <td><span class="style89">
              <select name="persona" size="1" class="style70">
                <option>V-</option>
                <option>E-</option>
                <option>J-</option>
              </select>
              <input type="text" name="cedula" size="18" id="cedula" onblur="ValidarEntero('cedula')"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Responsable de la Recepci&oacute;n  de la carga: </span></td>
            <td><span class="style89">
              <input type="text" name="empresa" size="35"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Direccion de Entrega:</span></td>
            <td><span class="style93">
              <textarea name="direccion" cols="40" rows="3" size="500"></textarea>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style91"><span class="style62">(<span class="style76">*</span>) </span> Direccion Alternativa: </span></td>
            <td><span class="style89">
              <textarea name="alternativa" cols="40" rows="3" size="500"></textarea>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77 style1  style94"><p class="style77"><span class="style62">(<span class="style76">*</span>) </span> Estado: </p>
              <p class="style77"><span class="style62">(<span class="style76">*</span>) </span>Ciudad: </p></td>
            <td><p class="style89">
              <select class="saveHistory" id="m1" name="Estados" onchange="relate(this.form,0,this.selectedIndex)">
                <?php 	$sql="SELECT * FROM courierp_miembros.estados";
		$consulta=mysql_query($sql,$conexion);
		while (list($cod,$estado)=mysql_fetch_array($consulta)) {
		echo '<option value="'.$cod.'">'.$estado.'</option>';  }
		// --- Ya tengo la lista de Estados --- 
		?>
              </select>
              <span class="style62">(<span class="style76">*</span>) </span></p>
              <p class="style89"><span class="style77">
                <select class="saveHistory" id="m2" name="ciudades">
                  <?php   $sql="SELECT ciudad FROM courierp_miembros.ciudades WHERE cod='1'";
	         $consulta=mysql_query($sql,$conexion);
	        while (list($c_ciudad)=mysql_fetch_array($consulta)) {
                  echo '<option value="'.$c_ciudad.'">'.$c_ciudad.'</option>'; }
	       mysql_close($conexion);?>
                </select>
              </span><span class="style62">(<span class="style76">*</span>) </span></p></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style79 style1"><strong><span class="style62">(<span class="style76">*</span>) </span> Tel&eacute;fono Fijo (Inquique c&oacute;digo de &aacute;rea): </strong></span></td>
            <td><span class="style93">
              <input type="text" name="telfijo" size="40" id="telfijo" onblur="ValidarEntero('telfijo')"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style79 style1"><strong><span class="style62">(<span class="style76">*</span>) </span> Tel&eacute;fono M&oacute;vil 1:</strong></span></td>
            <td><span class="style93">
              <input type="text" name="telcelular" size="40" id="telmovil" onblur="ValidarEntero('telmovil')"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong><span class="style62">(<span class="style76">*</span>) </span> Telefono M&oacute;vil 2 : </strong></span></td>
            <td><span class="style89">
              <input type="text" name="correo" size="40" id="correo" onblur="ValidarEntero('correo')"/>
              <span class="style62">(<span class="style76">*</span>) </span></span></td>
          </tr>
          <tr>
            <td bgcolor="#E1F0FF" class="style77"><span class="style77 style1"><strong>Observaciones: </strong></span></td>
            <td><span class="style89">
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
      </li>
      </ul>
  </div>
<hr />
<div id="footer">
	<p class="style1"><span class="entry"><a href="#" title="View all posts in Uncategorized" class="entry">Inicio </a><a href="#" title="Inicio" class="entry">&#187;</a> |<a href="#">&iquest;Quienes Somos?</a><a href="#" title="&iquest;Quienes Somos?" class="entry"> &#187;</a>|<a href="#">Nuestros Servicios</a><a href="#" title="Nuestros Servicios" class="entry"> &#187;</a>|<a href="#">Preguntas Frecuentes</a><a href="#" title="Preguntas Frecuentes" class="entry"> &#187;</a> |<a href="#">Tarifas</a><a href="#" title="Debe estar registrado para poder visualizarlas " class="entry"> &#187;</a> |<a href="#" title="Comment on Hello world!" class="entry">Contacto &#187;</a></span><br />
Copyright &copy; 2006 - 2009. Todos los derechos reservados, CourierPack &reg; Consulting C.A. </p>
</div>
<div class="design_copyright">
<a href="" title="Web Design" class="web_design">Web design</a> by Sarkis.</div>
</div>
</body>
</html>
