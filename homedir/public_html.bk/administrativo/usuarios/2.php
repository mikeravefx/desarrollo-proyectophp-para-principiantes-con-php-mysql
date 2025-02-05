<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>BizGlobal - Compra por Internet con tu CUPO CADIVI - dolar paralelo - El mejor courier - Compras por internet - Transporte maritimo - importacion - comprar en usa</title>



<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style4 {color: #42679C}
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
.style28 {font-size: 11px}
.style48 {color: #000000}
.style50 {font-weight: bold; color: #42679C;}
.style53 {font-weight: bold; color: #42679E;}
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color: #325C96;
}
.style58 {color: #000000; font-size: 10px; }
.style59 {color: #42679E}
.style60 {color: #42679E; font-size: 12px; font-weight: bold; }
.style61 {
	font-size: 11px;
	color: #42679E;
}
.style63 {
	font-size: 10px;
	font-weight: bold;
	color: #000000;
}
.style64 {color: #43669E}
.style66 {font-weight: bold; color: #43669E; font-size: 10px; }
.style108 {color: #42679E; font-weight: bold; font-size: 11px; }
.style109 {color: #FF0000}
.style112 {font-size: 10px}
.style98 {font-size: 14px}
.style113 {color: #000000; font-weight: bold; }
.style114 {	color: #FF0000;
	font-size: 18px;
	font-weight: bold;
}
.style115 {color: #FFFFFF; }
-->
</style>
</head>

<body>
<p>
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
</p>
<table width="803" border="0">
  <tr>
    <td width="97" bgcolor="#42679E">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="670">
	  <?php

$total=0;
$totalresultante=0;
$float_var=0;
echo "<p align='center'><span class='Visual'><strong>Datos del cliente</strong></span></p>";
echo    "<p align='center'>Nombre:".$SESSION['nomape']."</p>";
echo    "<p align='center'>Cedula:".$SESSION['cedula']."</p>";
echo     "<p align='center'>Direccion:".$SESSION['direccion']."</p>";
echo     "<p align='center'>Direccion Alternativa:".$SESSION['alternativa']."</p>";
echo     "<p align='center'>Estado:".$SESSION['estado']."</p>";
echo    "<p align='center'>Ciudad:".$SESSION['ciudad']."</p>";
echo    "<p align='center'>Telefono Fijo: ".$SESSION['telfijo']."</p>";
echo    "<p align='center'>Telefono Celular: ".$SESSION['telcelular']."</p>";
echo    "<p align='center'>Correo: ".$SESSION['correo']."</p>";
echo    "<br>";
if (isset($_POST['guia']))
{
   $guia = $_POST['guia'];
   $n        = count($guia);
   $contador = $n;
   $i        = 0;

   echo "Guias de Transporte: " .
        "<ol>";
   while ($i < $n)
   {
      echo "<li>{$guia[$i]}</li> ";
	  $guiaprint= "   ".$guiaprint."  /  ".$guia[$i];// Concatenar Arrays en Variables Strings.
      $i++;
   }
   echo "</ol>"; 
}
if (isset($_POST['documento']))
{
   $documento = $_POST['documento'];
   $n        = count($documento);
   $i        = 0;

   echo "Documento Generado: " .
        "<ol>";
   while ($i < $n)
   {
      echo "<li>{$documento[$i]}</li> ";
	  
      $i++;
   }
   echo "</ol>"; 
}
echo  "Medio: <br>"; 
echo $_POST['modo'];
echo  "Condicion: <br>"; 
echo $_POST['condicion'];
echo  "<br>Alto: <br>"; 
echo $_POST['alto'];
echo  "<br>Ancho: <br>"; 
echo $_POST['ancho'];
echo  "<br>Profundidad: <br>"; 
echo $_POST['profundidad'];
echo  "<br> Valor de la Divisa: <br>"; 
echo $_POST['dolar'];
echo  "<br><br>"; 
$dolar=$_POST['dolar'];
$tarifa=$_POST['tarifa'];
$peso=$_POST['peso'];
$alto = $_POST['alto'];
$ancho = $_POST['ancho'];
$profundidad = $_POST['profundidad'];
$ganancia=0;
$costo = 4;
//if(isset($_POST['cant']){
//$_POST['cant']=1;  
//}
$cantidad = $_POST['cant'];


// Variables convertidas a float
$float_dolar = floatval($dolar);
$float_tarifa = floatval($tarifa);
$float_peso = floatval($peso);
$float_alto = floatval($alto);
$float_ancho = floatval($ancho);
$float_profundidad = floatval($profundidad);
$float_costo = floatval($costo);
$float_totalconsolidado = floatval($contador);
$float_ganacia = floatval($ganancia);

if ($float_totalconsolidado <= 1){ $float_totalconsolidado=0; }
else { $float_totalconsolidado=$float_totalconsolidado*2; }



// Validaciones
if($_POST['modo']=='Maritimo' ){ 
 // Tarifas Maritimos
  $total= ($float_alto*$float_ancho*$float_profundidad)/1728;
  $float_var=$total;
  
              if ($total <= 9){ 
			  
			                  $volumen = 250*$float_dolar;
							  $volformat = number_format($volumen, 0, '', '');
							  echo  "<br>Volumen Final<br>"; 
                              echo $volformat;
                              echo  "<br>Sub total Guias Consolidadas<br>"; 
                              echo $float_totalconsolidado;
                              echo  "<br>TOTAL FINAL<br>"; 
                              $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
                       
   						    echo $totalfinal;      
                         	echo  "<br>IVA<br>";
							$iva=$totalfinal*0.12;             
							echo $iva;
							echo  "<br>TOTAL MAS IVA<br>";
							$totalmasiva=$totalfinal+$iva;
							echo $totalmasiva;
							$preciounitario=$totalfinal/$cantidad;
							  } 
			                else 
							{ 
			                $totalresultante= $total-9;
							echo $totalresultante;             	                          
							$volumen=(250)+($totalresultante*$float_tarifa);
							$volformat = number_format($volumen, 0, '', '');
							echo  "<br>Volumen Final<br>"; 
                            echo $volformat;
                            echo  "<br>Sub total Guias Consolidadas<br>"; 
                            echo $float_totalconsolidado;
                            echo  "<br>TOTAL FINAL<br>"; 
                            $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
                            echo $totalfinal;      
							echo  "<br>IVA<br>";
							$iva=$totalfinal*0.12;             
							echo $iva;
							echo  "<br>TOTAL MAS IVA<br>";
							$totalmasiva=$totalfinal+$iva;
							echo $totalmasiva;
							$preciounitario=$totalfinal/$cantidad;
		
							}
									
			  
  
}
else {
      // Tarifas Aereas
	  $total= ($float_alto*$float_ancho*$float_profundidad)/166;
      //	     $volumen = $formateado*$float_dolar*$float_tarifa;
      $float_var=$total;
	  if($float_peso > $total){ $total=$float_peso;
	  echo "Se tomo como referencia el peso volumetrico de la Guia de Transporte, la cual es igual a: ".$total.""; 
      echo  "<br><br>";
	  }
	  
	  if ($total <= 4.4){ 
	  $formateado = number_format($total, 0, '', '');
      echo  "<br><br>"; 
      echo $formateado;
      $volumen = 19*$float_dolar;
	  $volformat = number_format($volumen, 0, '', '');
	  	//echo  "<br>Volumen sin redondeado<br>"; 
      //echo $volumen;
	  echo  "<br>Volumen Final<br>"; 
      echo $volformat;
      echo  "<br>Sub total Guias Consolidadas<br>"; 
      echo $float_totalconsolidado;
      echo  "<br>TOTAL FINAL<br>"; 	
      $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
      echo $totalfinal; 
	echo  "<br>IVA<br>";
	$iva=$totalfinal*0.12;             
	echo $iva;
	echo  "<br>TOTAL MAS IVA<br>";
	$totalmasiva=$totalfinal+$iva;
	echo $totalmasiva;
$preciounitario=$totalfinal/$cantidad;
	} 
	
	 if ($total >= 4.5 and $total <= 10.4 ){ 
	  $formateado = number_format($total, 0, '', '');
      echo  "<br><br>"; 
      echo $formateado;
      $volumen = 48*$float_dolar;
	  $volformat = number_format($volumen, 0, '', '');
	  	//echo  "<br>Volumen sin redondeado<br>"; 
      //echo $volumen;
	  echo  "<br>Volumen Final<br>"; 
      echo $volformat;
      echo  "<br>Sub total Guias Consolidadas<br>"; 
      echo $float_totalconsolidado;
      echo  "<br>TOTAL FINAL<br>"; 	
      $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
      echo $totalfinal; 
	echo  "<br>IVA<br>";
	$iva=$totalfinal*0.12;             
	echo $iva;
	echo  "<br>TOTAL MAS IVA<br>";
	$totalmasiva=$totalfinal+$iva;
	echo $totalmasiva;
$preciounitario=$totalfinal/$cantidad;
	} 

	 if ($total >= 10.5 and $total <= 14.4 ){ 
	  $formateado = number_format($total, 0, '', '');
      echo  "<br><br>"; 
      echo $formateado;
      $volumen = 69*$float_dolar;
	  $volformat = number_format($volumen, 0, '', '');
	  	//echo  "<br>Volumen sin redondeado<br>"; 
      //echo $volumen;
	  echo  "<br>Volumen Final<br>"; 
      echo $volformat;
      echo  "<br>Sub total Guias Consolidadas<br>"; 
      echo $float_totalconsolidado;
      echo  "<br>TOTAL FINAL<br>"; 	
      $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
      echo $totalfinal; 
	echo  "<br>IVA<br>";
	$iva=$totalfinal*0.12;             
	echo $iva;
	echo  "<br>TOTAL MAS IVA<br>";
	$totalmasiva=$totalfinal+$iva;
	echo $totalmasiva;
	$preciounitario=$totalfinal/$cantidad;
	} 
	  
	  	 if ($total >= 14.5 and $total <= 18.4 ){ 
	  $formateado = number_format($total, 0, '', '');
      echo  "<br><br>"; 
      echo $formateado;
      $volumen = 89*$float_dolar;
	  $volformat = number_format($volumen, 0, '', '');
	  	//echo  "<br>Volumen sin redondeado<br>"; 
      //echo $volumen;
	  echo  "<br>Volumen Final<br>"; 
      echo $volformat;
      echo  "<br>Sub total Guias Consolidadas<br>"; 
      echo $float_totalconsolidado;
      echo  "<br>TOTAL FINAL<br>"; 	
      $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
      echo $totalfinal; 
	echo  "<br>IVA<br>";
	$iva=$totalfinal*0.12;             
	echo $iva;
	echo  "<br>TOTAL MAS IVA<br>";
	$totalmasiva=$totalfinal+$iva;
	echo $totalmasiva;
$preciounitario=$totalfinal/$cantidad;
	} 
	
      if ($total >= 18.5 ){ 
	  
    $formateado = number_format($total, 0, '', '');
    echo  "<br><br>"; 
    echo $formateado;
	$totalresultante= $formateado-18;
    $volumen = (89 + $totalresultante*$float_tarifa)*$float_dolar;
	$volformat = number_format($volumen, 0, '', '');
	echo  "<br>Sub Total redondeado<br>"; 
    echo $volumen;
	echo  "<br>Sub Total sin consolidacion<br>"; 
    echo $volformat;
    echo  "<br>Sub total Guias Consolidadas<br>"; 
    echo $float_totalconsolidado;
    echo  "<br>TOTAL FINAL<br>"; 	
    $totalfinal=($float_totalconsolidado*$float_dolar)+$volformat;
    echo $totalfinal;      
	echo  "<br>IVA<br>";
	$iva=$totalfinal*0.12;             
	echo $iva;
	echo  "<br>TOTAL MAS IVA<br>";
	$totalmasiva=$totalfinal+$iva;
	echo $totalmasiva;
	$preciounitario=$totalfinal/$cantidad;
  	echo  "<br>calculo<br>";
	echo $total;

	  

	  
	  
	
	} 
	  
}


// ********************************************* HACER ETIQUETA ****************************** //
// Lee la plantilla

$plantilla = file_get_contents('documentos/etiquetas/plantilla.rtf');


// Agregamos los escapes necesarios
$plantilla = addslashes($plantilla);
$plantilla = str_replace('\r','\\r',$plantilla);
$plantilla = str_replace('\t','\\t',$plantilla);

// Datos de la plantilla
$nomape = $SESSION['nomape'];
$cedula = $SESSION['cedula'];
$direccion = $SESSION['direccion'];
$estado = $SESSION['estado'];
$ciudad = $SESSION['ciudad'];
$telffijo = $SESSION['telfijo'];
$telcelular = $SESSION['telcelular'];
$condicion = $_POST['condicion'];

$fecha = date("j-m-y"); // de esta manera el codigo no envejece :P

// Procesa la plantilla
eval( '$rtf = <<<EOF_RTF
' . $plantilla . '
EOF_RTF;
' );

file_put_contents("documentos/etiquetas/$nomape-$cedula-$fecha.rtf",$rtf);
echo "<p><a href='documentos/etiquetas/".$nomape."-".$cedula."-".$fecha.".rtf'>Descargar Eqtiqueta Generada</a></p>";
echo "Guias: ";
echo $guiaprint;
// ********************************************* FIN DE HACER ETIQUETA ****************************** //


// ********************************************* HACER FACTURA ****************************** //
// Lee la plantilla

$plantilla = file_get_contents('documentos/factura/factura.rtf');


// Agregamos los escapes necesarios
$plantilla = addslashes($plantilla);
$plantilla = str_replace('\r','\\r',$plantilla);
$plantilla = str_replace('\t','\\t',$plantilla);

// Datos de la plantilla
$nomape = $SESSION['nomape'];
$cedula = $SESSION['cedula'];
$direccion = $SESSION['direccion'];
$estado = $SESSION['estado'];
$ciudad = $SESSION['ciudad'];
$telffijo = $SESSION['telfijo'];
$telcelular = $SESSION['telcelular'];
$condicion = $_POST['condicion'];

$fecha = date("j-m-y"); // de esta manera el codigo no envejece :P

// Procesa la plantilla
eval( '$rtf = <<<EOF_RTF
' . $plantilla . '
EOF_RTF;
' );

file_put_contents("documentos/factura/$nomape-$cedula-$fecha.rtf",$rtf);
echo "<p><a href='documentos/factura/".$nomape."-".$cedula."-".$fecha.".rtf'>Descargar Factura Generada</a></p>";
echo "Guias: ";
echo $guiaprint;
// ********************************************* FIN DE HACER FACTURA ****************************** //

// ********************************************* HACER GUIA ****************************** //
// Lee la plantilla

$plantilla = file_get_contents('documentos/guia_transporte/guia.rtf');
// Agregamos los escapes necesarios
$plantilla = addslashes($plantilla);
$plantilla = str_replace('\r','\\r',$plantilla);
$plantilla = str_replace('\t','\\t',$plantilla);

// Datos de la plantilla
$nomape = $SESSION['nomape'];
$cedula = $SESSION['cedula'];
$direccion = $SESSION['direccion'];
$estado = $SESSION['estado'];
$ciudad = $SESSION['ciudad'];
$telffijo = $SESSION['telfijo'];
$telcelular = $SESSION['telcelular'];
$condicion = $_POST['condicion'];
$pesito = $_POST['peso'];

$fecha = date("j-m-y"); // de esta manera el codigo no envejece :P

// Procesa la plantilla
eval( '$rtf = <<<EOF_RTF
' . $plantilla . '
EOF_RTF;
' );

file_put_contents("documentos/guia_transporte/$nomape-$cedula-$fecha.rtf",$rtf);
echo "<p><a href='documentos/guia_transporte/".$nomape."-".$cedula."-".$fecha.".rtf'>Descargar Guia de Transporte Generada</a></p>";
echo "Guias: ";
echo $guiaprint;
// ********************************************* FIN DE HACER GUIA ****************************** //
// Fin de Validaciones
// Calculo de Ganancia por el libraje final de la guia(s)

$float_ganacia = (($float_tarifa-$float_costo)*$float_dolar)*$total;

$gananciaformat = number_format($float_ganacia, 0, '', '');

// Fin de Calculo de Ganacia

// Calculo del la Ganaci en Bs a dolar del dia.

$totalcosto = ($float_costo*$float_dolar);


$dbh=mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
// ID 	nomape 	cedula 	guias 	unidades 	libras 	volumen 	iva 	total 

$insert = "INSERT INTO  facturas (nomape,cedula,guias,unidades,libras,volumen,iva,total,preciodolar,tarifa,costo,ganacia,alto,ancho,profundidad,fecha) VALUES ('".$nomape."', '".$cedula."','".$guiaprint."','".$cantidad."','".$total."','".$float_var."','".$iva."','".$totalfinal."','".$float_dolar."','".$float_tarifa."','".$totalcosto."','".$gananciaformat."','".$float_alto."','".$float_ancho."','".$float_profundidad."','".$fecha."')";
$add_member = mysql_query($insert);


// ,preciodolar,tarifa,costo,ganacia,alto,ancho,profundidad,fecha
// preciodolar 	tarifa 	costo 	ganacia 	alto 	ancho 	profundidad 	fecha
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>	</td>
  </tr>
  <tr>
    <td bgcolor="#42679E">&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style112">[ <a href='logout.php'><b>Desconectarse</b></a> ]</span></td>
  </tr>
</table>
<p>

</body>
</html>