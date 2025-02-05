<?php
// Inicia la sesión
   session_start();
// en caso enviado el form
   $usuario = $_REQUEST['username'];
   $clave = $_REQUEST['pass'];
 
   if (isset($usuario) && isset($clave))
   {
 
   // Comprobar que el usuario está autorizado a entrar
      $conexion= mysql_connect ("localhost", "bizgloba_webmast", "mikex5761880n") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("bizgloba_miembros");  
//      $conexion = mysql_connect ("localhost","bizgloba_webmast","mikex5761880n")or die "No se puede conectar con el servidor");
//      mysql_select_db ("contadores")or die ("No se puede seleccionar la base de datos");
	  $clave = md5($clave);
	


//$_POST['pass'] = stripslashes($_POST['pass']);
//$info['password'] = stripslashes($info['password']);
//$_POST['pass'] = md5($_POST['pass']);
//      $salt = substr ($usuario, 0, 2);
//      $clave_crypt = crypt ($clave, $salt);
      //$usuario



      $instruccion =  "SELECT * FROM bizgloba_miembros.administracion WHERE username = '$username'"  ." and password = '$clave'"; 
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
.style113 {
	color: #F0F0F0;
	font-weight: bold;
}
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
.style16 {color: #000000}
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
-->
</style>
<body>
<table width="902" border="0">
  <tr>
    <td width="98" bgcolor="#42679E">&nbsp;</td>
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

