<?php
// Inicia la sesión
   session_start();
// en caso enviado el form
   $usuario = $_REQUEST['username'];
   $clave = $_REQUEST['pass'];
 
   if (isset($usuario) && isset($clave))
   {
 //$dbh=mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");

   // Comprobar que el usuario está autorizado a entrar
      $conexion= mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");  
//      $conexion = mysql_connect ("localhost","bizgloba_webmast","mikex5761880n")or die "No se puede conectar con el servidor");
//      mysql_select_db ("contadores")or die ("No se puede seleccionar la base de datos");
	  $clave = md5($clave);
	


//$_POST['pass'] = stripslashes($_POST['pass']);
//$info['password'] = stripslashes($info['password']);
//$_POST['pass'] = md5($_POST['pass']);
//      $salt = substr ($usuario, 0, 2);
//      $clave_crypt = crypt ($clave, $salt);
      //$usuario



      $instruccion =  "SELECT * FROM courierp_miembros.administracion WHERE username = '$username'"  ." and password = '$clave'"; 
      $consulta = mysql_query ($instruccion, $conexion)or die ("Fallo en la consulta");
      $nfilas = mysql_num_rows ($consulta);
      mysql_close ($conexion);
 
   // Los datos introducidos son correctos
      if ($nfilas > 0)
      {
         $usuario_valido = $usuario;
        
         $_SESSION["usuario_valido"] = $usuario_valido;
      }
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html lang="es">
    <head>
        <title>Administracion</title>
				<script language="JavaScript" src="calendar_eu.js"></script>
	<link rel="stylesheet" href="calendar.css">
        <style type="text/css">
<!--
.style1 {font-size: 9px}
.style3 {font-size: 10px}
-->
        </style>
</head>
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
.style114 {color: #42679E}
.style2 {color: #CC6600}
.style5 {color: #CC6600; font-size: 10px; }
.style6 {color: #42679E; font-size: 10px; }
.style7 {font-size: small}
.style17 {color: #CC6600; font-weight: bold; }
.style18 {
	color: #42679E;
	font-weight: bold;
	font-size: 12px;
}
.style19 {color: #CC6600; font-weight: bold; font-size: 12px; }
.style20 {
	font-size: 12px;
	font-weight: bold;
}
.style115 {color: #CC6600; font-weight: bold; font-size: 9px; }
-->
</style>
<body>
<table width="902" border="0">
  <tr>
    <td width="98" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="19" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="771">
	<p>&nbsp;</p>
<p>
  <?php //include("cabe.html");?>
</p>
<div align="left">
  <p>
    <?PHP
    // de nuevo inicia la sesion
   if (isset($_SESSION["usuario_valido"]))
   {
 
?>
  </p>
  <H1 align="center" class="style114"><span class="style50 style59 style1"><img src="images/cp_logo.jpg" width="142" height="53"></span></H1>
  <H1 align="center" class="style6">Bienvenido al Sistema de Control de Registros  </H1>
  <H1 align="center" class="style1">[ <A HREF='logout.php'><b>Desconectarse</b></A> ]</H1>
  <div align="left">
  <table width="768" height="555" border="0">
       <tr>
         <td width="128" height="45" bgcolor="#CCCCCC" class="style115"><div align="center">Empleados</div></td>
         <td width="192" bgcolor="#CCCCCC" class="style1 "><p align="center" class="style115">Gesti&oacute;n de Carga</p>           </td>
         <td width="181" bgcolor="#CCCCCC" class="style1 "><p align="center" class="style17"><span class="style115">Gesti&oacute;n de Ingresos</span></p>           </td>
         <td width="249" bgcolor="#CCCCCC" class="style1 "><p align="center" class="style17"><span class="style115">Gesti&oacute;n de Clientes</span></p>           </td>
       </tr>
       <tr>
         <td height="85" bgcolor="#FFFFFF"><p align="center" class="style1"><img src="img/kdvi.png" width="64" height="64"></p>           </td>
         <td valign="top" bgcolor="#FFFFFF" class="style1 "><p align="center"><img src="img/container.gif" width="64" height="64"></p>           </td>
         <td width="181" valign="top" bgcolor="#FFFFFF" class="style1 "><p align="center"><img src="img/dinero.jpg" width="50" height="50"></p>           </td>
         <td width="249" valign="top" bgcolor="#FFFFFF" class="style1 "><p align="center"><img src="img/clientes.jpg" width="64" height="64"></p>           </td>
       </tr>
       <tr>
         <td colspan="4" class="style7"><div align="center">
           <p align="center" class="style17">Facturar</p>
           <p align="center" class="style114 style20">Introduzca la C&eacute;dula del Cliente </p>
           <form action="realizar_factura.php" method="post" class="style3">
             <p align="center" class="style108"><span class="style108 style112">
               <input name="cedula" type="text" size="10" maxlength="10" />
               </span>
                 <input type="submit" name="Submit" value="Buscar" />
             </p>
           </form>
           <p class="style17">  
             Ingresar Guias Cotejadas </p>
           <form name="form2" method="post" action="">
             <span class="style108"><span class="style108 style112">
             <input name="guiacliente" type="text" id="guiacliente" size="10" maxlength="10" />
             </span>
             <input type="submit" name="Submit3" value="Ingresar Numero de Guia" />
             </span>
                      </form>
           <p class="style115">&nbsp;</p>
           <p class="style19">Modificaciones Masivas de Estatus de Guias Cotejadas</p>
           <form action="" method="post" name="form1" class="style3">
             <p align="center" class="style18">Criterios de modificaci&oacute;n masiva </p>
             <p align="center" class="style114">Estatus</p>
             <p align="center">
               <select name="select">
                 <option value="Ingresado al Sistema">1.- Ingresado al Sistema</option>
                 <option value="Enviado a la Línea Aérea">2.- Enviado a la Línea Aérea</option>
                 <option value="Salida a Destino">3.- Salida a Destino</option>
                 <option value="Arribo al aeropuerto">4.- Arribo al aeropuerto</option>
                 <option value="Presentación documentos en la aduana">5 .- Presentación documentos en la aduana</option>
                 <option value="Esperando reconocimiento de la aduana">6.- Esperando reconocimiento de la aduana</option>
                 <option value="En Aduana">7.- En Aduana</option>
                 <option value="Arribo almacén CCS">8.- Arribo almacén CCS-Notificado-VZLA</option>
                 <option value="En ruta de entrega">9.- En ruta de entrega</option>
				 <option value="Entregado">10.- En ruta de entrega-Notificado-VZLA</option>
               </select>
             </p>
             <p align="center" class="style114">Rango de Fechas</p>
             <p align="center" class="style2">Inicio</p>
             <p align="center" class="style2">
               <label>
               <input type="text" name="fechainicio" />
               <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'form1',
		// input name
		'controlname': 'fechainicio'
	});

	     </script>
               </label>
             </p>
             <p align="center"><span class="style2">Fin</span></p>
             <p align="center"> <span class="style2">
               <label>
               <input type="text" name="fechafin" />
               <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'form1',
		// input name
		'controlname': 'fechafin'
	});

	     </script>
               </label>
             </span></p>
             <p align="center">
               <label>Buscar
                 <input type="submit" name="Submit2" value="Buscar">
               </label>
             </p>
             <p align="left">&nbsp;</p>
           </form>
           <p class="style5"></p>
         </div></td>
  </tr>
      </Table>
     <div align="left" class="style7"><br>
       <br>        
        </div>
  </div>
  <P align="left" class="style7">&nbsp;</P
>
<P align="left" class="style7">&nbsp;</P
>
<span class="style7">
<?php
   }
 
    //en caso de que el usuario sea incorrecto 
    //manda el mensaje de acceso no autorizado
   else if (isset ($usuario))
   {
      print ("<BR><BR>\n");
      print ("<H1 class='style114'><span class='style50 style59 style1'><img src='bizama.png' width='200' height='75'></span></H1>") ;
	  print("<img src='imagen/candado.gif' align='center' height='59' width='50'>");
      print ("<P ALIGN='CENTER'><font color='Blue'>Acceso Denegado</font></P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
 
   }
 
// pide los datos para iniciar la sesion
   else
 {
      echo "<div align='center'>";
	  print("<BR><BR>\n");
      //primera tabla
      print("<table width='400' border='0' bgcolor='white'><tr><td>");
      print("<center>");
      print("<P class='style50 style59 style1'><font><b>Esta zona tiene el acceso restringido</b></font>.<BR> " ." <font><b>Identifiquese antes de entrar</b></font></P>\n");
      print("<FORM CLASS='entrada' NAME='login' ACTION='validar.php' METHOD='POST'>\n");
     //segunda tabla
      print("<TABLE BORDER='0' BORDERCOLOR='white' width='350'>");
      print("<TR>");
      print("<TD>");
      print("<img src='imagen/candado.gif' align='left' height='59' width='50'>");
      print("<P><LABEL class='style50 style59 style1'><font><b>Login:</b></font></LABEL>\n");
      print("   <INPUT TYPE='TEXT' NAME='username' SIZE='15' MAXLENGTH='15' tabindex='1'></P>\n");
      print("<P><LABEL CLASS='etiqueta-entrada'><font><b>Password:</b></font></LABEL>\n");
      print("   <INPUT TYPE='PASSWORD' NAME='pass' SIZE='15' MAXLENGTH='15' tabindex='2'></P>\n");
      print("<P><center><INPUT TYPE='SUBMIT' VALUE='Entrar' style='background:#FFFFFF'></center></P>\n");
      print("</TD>");
        print("</TR>");
      //cierra segunda tabla
      print("</TABLE>");
      print("</center>");
      print("</FORM>\n");
      //cierra priemera tabla
      print("</td></tr></table>");
	  echo "</div>";      
   }
?>
</span></div>
<span class="style7"></font>
<br>
<br>
<br>	
</span></td>
  </tr>
</table>
</body>
</html>


