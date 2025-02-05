<html>
<style type="text/css">
<!--
.style10 {color: #FFFFFF; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style11 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
<body>
<?php
if (!isset($_GET['guiacliente'])){
echo "Debe especificar una cadena a buscar"; // solamente me entra a esta condicion


echo "</html></body> \n";
exit;
}
//$conexion = mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F")or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
//mysql_select_db("courierp_miembros", $conexion);

$link = mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F");
mysql_select_db("courierp_miembros", $link);

$result = mysql_query("SELECT * FROM courierp_miembros.guias_clientes WHERE guia= '".$_GET['guiacliente']."'", $link);
if ($row = mysql_fetch_array($result)){
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
  </li>      <li class='pagenav style1'> ";
echo " <div align='center'>\n ";
echo " <table width='612' border='0'> \n ";
echo " <tr bgcolor='#FFFFFF'> \n "; 
echo "<div align='justify' class='style1'>Status de Su Orden:<br><br><br>
Guia:<a href='http://www.courierpack.com.ve/consulta.php?guiacliente=".$row["guia"]."'>".$row["guia"]." Click aqui para detalles de la guía </a><br>
Peso:".$row["peso"]." Lbs<br>
Numero de  Piezas:".$row["piezas"]."<br>
Remitente: ".$row["piezas"]."<br>
Cargos:   ".$row["cargos"]." $ Aprox.<br><br> NOTA: recuerde que el re-empaque puede afectar las dimensiones del articulo, en aras de viajar en las mejores condiciones, lo que puede hacer que este costo pueda variar <br><br>

</div>
<tr>
    <td width='506' bgcolor='#AAD2FF'><span class='style1'>Lugar:</td>
    <td width='47' bgcolor='#AAD2FF'><span class='style1'>Fecha:</td>
    <td width='506' bgcolor='#FFFFCC'><span class='style1'>Estatus:</td></tr>";

//Mostramos los nombres de las tablas


while ($field = mysql_fetch_field($result)){
//echo "<td>$field->name</td> \n";
echo "<td colspan='2'><div align='center' class='style1'>Consulta</div></td>\n";
}
echo "</tr> \n";
do {
echo "<tr>
    <td width='506' bgcolor='#AAD2FF'><span class='style1'>".$row["Lugar"]."</span></td>
    <td width='47' bgcolor='#AAD2FF'><span class='style1'>".$row["fecha"]."</span></td>
    <td width='506' bgcolor='#FFFFCC'><span class='style1'>".$row["status"]."</span></td></tr>"; 
//echo "<tr> \n";
//echo " <td width='243' bgcolor='#AAD2FF'><span class='style1'>Lugar:</span></td> \n";
//echo "<td width='500'><span class='style1'><strong>".$row["Lugar"]." </strong></span></td> \n";
//echo "</tr> \n";
//echo " <tr> \n";
//echo "<td bgcolor='#AAD2FF'><span class='style1'>Fecha:</span></td>";
//echo " <td><span class='style1'><strong>".$row["fecha"]."</strong></span></td> \n";
//echo "</tr> \n";
//echo "<td bgcolor='#AAD2FF'><span class='style1'>Estatus:</span></td>";
//echo " <td><span class='style1'><strong>".$row["status"]."</strong></span></td> \n";
//echo "</tr> \n";
//echo "</tr> \n";
//echo "<td bgcolor='#FFFFFF'><span class='style1'>Guia de Su Carga:</span></td>";
//echo " <td><span class='style1'><strong>".$row["guiacliente"]."</strong></span></td> \n";
//echo "</tr> \n";
//statusvenezuela
//echo "</tr> \n";
//echo "<td bgcolor='#FFFFFF'><span class='style1'>Status de Carga:</span></td>";
//echo " <td><span class='style1'><strong>".$row["statusvenezuela"]."</strong></span></td> \n";
//echo "</tr> \n";
//fechaestimada
//echo "</tr> \n";
//echo "<td bgcolor='#FFFFFF'><span class='style1'>Fecha Estimada de llegada a Venezuela:</span></td>";
//echo " <td><span class='style1'><strong>".$row["fechaestimada"]."</strong></span></td> \n";
//echo "</tr> \n";
} while ($row = mysql_fetch_array($result));
echo "</table> \n";
echo "<br> \n";
echo "<br> \n";
echo "<p><a href='zona_usuarios.php' class='style1'>Regresar</a></p>";
echo "</div>";
echo "    <li class='pagenav style1'></li>
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
</html>";

}
else {
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
  </li>      <li class='pagenav style1'>   <CENTER >
 ¡ Su guia aún no ha sido ingresada al sistema. !      </CENTER>
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
</html>";
}
?>

