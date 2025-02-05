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
     <td width="98" bordercolor="#42679E" bgcolor="#FFFFFF"><div align="center"></div></td>
     <td width="19" bordercolor="#42679E" bgcolor="#FFFFFF"><div align="center"></div></td>
     <td width="773"><div align="center"><img src="images/cp_logo.jpg" width="142" height="53" />&nbsp;
       
     </div>
       <p>
	     <?php
if (!isset($_POST['cedula'])){
echo "<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style1'><img src='' width='200' height='75' /></p>
<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style2'> Debe ingresar el número de guía  ! </p>"; // solamente me entra a esta condicion


echo "</html></body> \n";
exit;
}
//$dbh=mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
//$link = mysql_connect("localhost","root","mikex5761880n");
//mysql_select_db("users", $link);
$link = mysql_connect("localhost","courierp_courier","hVAC53fjGa7F");
mysql_select_db("courierp_miembros", $link);
$result = mysql_query("SELECT * FROM courierp_miembros.tracking WHERE cedula = '".$_POST['cedula']."'"." and statusvenezuela LIKE '%Almacen%CCS%'", $link);
$contador=0;
$consolidacion=0;

$check = mysql_query("SELECT * FROM courierp_miembros.users WHERE cedula = '".$_POST['cedula']."'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{
if ($check == 0) {
                   die('<br><br><br><br><br><br><br><p align="left"><strong>ERROR: Este Usuario no existe en nuestra base de datos. <a href=index.php>Intente de Nuevo</a></strong></p>');
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

echo "<p align='left'><img src='' width='200' height='75'></p>\n ";
echo " <div align='left'>\n ";
echo " <table width='593' border='0'> \n ";
echo " <tr bgcolor='#40659D'> \n "; 
//Mostramos los nombres de las tablas
echo"<p align='left'><span class='Visual'><strong>Modulo de Facturacion </strong></span></p>";
echo "<p align='left'><span class='Visual'><strong>Datos del cliente</strong></span></p>";
echo    "<p align='left'>Nombre:".$SESSION['nomape']."</p>";
echo    "<p align='left'>Cedula:".$SESSION['cedula']."</p>";
echo     "<p align='left'>Direccion:".$SESSION['direccion']."</p>";
echo     "<p align='left'>Direccion Alternativa:".$SESSION['alternativa']."</p>";
echo     "<p align='left'>Estado:".$SESSION['estado']."</p>";
echo    "<p align='left'>Ciudad:".$SESSION['ciudad']."</p>";
echo    "<p align='left'>Telefono Fijo: ".$SESSION['telfijo']."</p>";
echo    "<p align='left'>Telefono Celular: ".$SESSION['telcelular']."</p>";
echo    "<p align='left'>Correo: ".$SESSION['correo']."</p>";
while ($field = mysql_fetch_field($result)){
//echo "<td>$field->name</td> \n";
   echo "<td colspan='2'><div align='left' class='style10'>Consulta</div></td>\n";
  }
  echo "</tr> \n";
  echo "<form method='post' action='2.php'>";
  echo    "<p><strong>Peso: </strong></p>";
  echo    "<br>";
  echo    "<label>Peso: <input name='peso' type='text' size='9' maxlength='8' /></label>";
  echo    "<br>";
  echo    "<br>";
  echo    "<p><strong>Cantidad de Piezas: </strong></p>";
  echo    "<br>";
  echo    "<label>Piezas: <input name='cant' type='text' size='9' maxlength='8' /></label>";
  echo    "<br>";
  echo    "<br>";
  echo    "<p><strong>Calculo de Volumen: </strong></p>";
  echo    "<br>";
echo "<label>Alto: 
  <input name='alto' type='text' id='alto' size='9' maxlength='8' />
  </label>
  <label>Ancho: 
  <input name='ancho' type='text' id='ancho' size='9' maxlength='8' />
  </label>
Profundidad: 
  <input name='profundidad' type='text' id='profundidad' size='9' maxlength='8' />";
  echo    "<br>";
  echo    "<br>";
  echo    "<p><strong>Tipo de Cambio en Bs: </strong></p>";
  echo    "<br>";
  echo    "<label>Precio del Dolar: <input name='dolar' type='text' size='9' maxlength='8' /></label>";
  echo    "<br>";
  echo    "<br>";
    echo  "<br>";
  echo    "<br>";
  echo    "<p><strong>Tarifa en Dolares: </strong></p>";
  echo    "<br>";
  echo    "<label>Tarifa: <input name='tarifa' type='text' size='9' maxlength='8' /></label>";
  echo    "<br>";
  echo    "<br>";
  echo    "<p><strong>Medio de Transporte: </strong></p>";
  echo    "<br>";
  echo "  <select name='modo'> <option value='Aereo'>Aereo</option>
    <option value='Maritimo'>Maritimo</option>
  </select>";
  echo    "<br>";
  echo    "<br>";
  echo    "<p><strong>Condicion de Pago: </strong></p>";
  echo    "<br>";
  echo "  <select name='condicion'> <option value='CREDITO'>Credito</option>
  <option value='CONTADO'>Contado</option>
  </select>";
  echo    "<p><strong>Guias a Facturar: </strong></p>";
  echo    "<br>";
do {
echo "  
                <input name='guia[]' type='checkbox' value='".$row['guiacliente']."'>Guia: ".$row['guiacliente']."";
 			    //$contador=$contador+1;
echo"		  <label><textarea name=".$row['articulos'].">   ".$row['articulos']."   </textarea></label><br>";
				} 
 
while ($row = mysql_fetch_array($result));
echo "<td colspan='3'><div align='left'>
           <p>&nbsp;</p>
           <p><strong>Documento a Generar: 
             </strong></p>	
			 <p>		 
<input name='documento[]' type='checkbox' value='Factura'>  Factura  <br>
<input name='documento[]' type='checkbox' value='Etiqueta'> Etiqueta  <br>
<input name='documento[]' type='checkbox' value='Ticket'>   Ticket <br>
           &nbsp;</p>
         </div></td>
       </tr>
       <tr>
	   
	   
         <td colspan='3'><div align='left'>
           <span class='Visual'><strong>
           <input type='submit' name='Submit' value='Enviar!'>

             </strong></span></div></td>
        </tr>
     </table>
     <p>&nbsp;</p>
      </form>";
//$consolidacion=$contador*2;
//$SESSION['totalconsolidado']=$consolidacion;
//echo "<p>Dolares por concepto de consolidacion: ".$consolidacion."</p>";
echo "<p><a href='index.php' class='style11'>Regresar</a></p>";
echo "<A HREF='javascript:imprimir()'><span class='style11'>Imprimir Soporte </span></A>";
echo "</div>";
echo "</table> \n";


}
else {
echo "<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style1'><img src='' width='200' height='75' /></p>
<p class='style1'>&nbsp;</p>
<p class='style1'>&nbsp;</p>
<p align='left' class='style2'>&iexcl; No se ha encontrado ning&uacute;n registro ! </p>";
}
?>	 
      </p></td>
   </tr>
   <tr>
     <td colspan="3" bordercolor="#42679E" bgcolor="#FFFFFF"><div align="center"><span class="style2">[ <a href='logout.php'><b>Desconectarse</b></a> ]</span></div></td>
    </tr>
 </table>
</div>
</body>
</html>