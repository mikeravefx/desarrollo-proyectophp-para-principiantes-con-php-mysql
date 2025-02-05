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
-->
</style>
</head>

<?php

$link =  mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F"); 

mysql_select_db("courierp_miembros", $link);

$result = mysql_query("SELECT * FROM courierp_miembros.tracking WHERE ID = '".$_GET['id_a']."'", $link);

if ($row = mysql_fetch_array($result)){

echo "<table border = '0' align='center'> \n";

echo "<tr> \n";

echo "<td><b>Detalles de Datos de la Guia de Carga</b></td> \n";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "</tr> \n";

do {
// id 	nomape 	cedula 	correo 	fecha 	guiacliente 	statusvenezuela fechaestimada 	fecharecep
echo "<tr> \n";
echo "<td><strong>ID:</strong> ".$row["id"]."</td>";
echo "</tr> \n";
echo "<td><strong>Nombre y Apellido:</strong> ".$row["nomape"]."</td> ";
echo "</tr> \n";
echo "<td><strong>Cedula o Rif:</strong> ".$row["cedula"]."</td>";
echo "</tr> \n";
echo "</tr> \n";
echo "<td><strong>Correo:</strong> ".$row["correo"]."</td>";
echo "</tr> \n";
echo "<td><strong>Fecha de Ingreso del Registro:</strong> ".$row["fecha"]."</td>";
echo "</tr> \n";
echo "<td><strong># de Guia:</strong> ".$row["guiacliente"]."</td>";
echo "</tr> \n";
echo "<td><strong>Estatus de Guia:</strong> ".$row["statusvenezuela"]."</td>";
echo "</tr> \n";
echo "<td><strong>Entrega estimada:</strong> ".$row["fechaestimada"]."</td>";
echo "</tr> \n";
echo "<td><strong>Fecha de Recepcion del Almacen:</strong> ".$row["fecharecep"]."</td>";
echo "</tr> \n";
echo "<td><strong>Numero de Tracking del Envío:</strong> ".$row["tracking"]."</td>";
echo "</tr> \n";
echo "<td><strong>Estatus de la Orden en USA:</strong> ".$row["statususa"]."</td>";
echo "</tr> \n";
echo "<td><strong>Numero de Orden:</strong> ".$row["numerorden"]."</td>";
echo "</tr> \n";
echo "<td><strong>Articulos</strong>: ".$row["articulos"]."</td>";
echo "</tr> \n";
echo "</tr> \n";

} while ($row = mysql_fetch_array($result));


echo "</table>";
echo "</table> \n";

} else {

echo "¡ La base de datos está vacia !";

}

?>
<div align='center'><font face='verdana' size='-2'><a href='guias.php'>::Inicio::</a></font> </div>
</body>

</html>