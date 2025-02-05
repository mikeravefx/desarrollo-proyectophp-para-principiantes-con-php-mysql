<?
session_start();
if(isset($SESSION)){
header("location: user.php"); /* Si ha iniciado la sesion, vamos a user.php */
} else { 
/* Cerramos la parte de codigo PHP porque vamos a escribir bastante HTML y nos será mas cómodo así que metiendo echo's */
?>
<html><head><title>Necesita identificación! </title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {
	font-weight: bold;
	font-size: 10px;
}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.style4 {font-size: 10px}
-->
</style>
</head>
<body>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {
	color: #42679E;
	font-weight: bold;
	font-size: 12px;
}
.style3 {font-size: 12px}
-->
</style>


<p align="center" class="style50 style59 style1"><img src="images/cp_logo.jpg" width="142" height="53"></p>
<p align="center" class="style3"><strong>Esta es una area exclusiva de miembros </strong></p>
<p align="center" class="style3"><strong>Si Usted aun no tiene cuenta debe registrarse <a href="alta.php">aqui</a> <span class="style59">&raquo;</strong></p>
<p align="center" class="style3"><strong>En Caso Contrario Ingrese Login y Contrase&ntilde;a </strong></p>

<form action="validar.php" method="post" class="style59">
<table border="0" align="center">
<tr>
  <td class="style1"><p align="center" class="style4 style1 style59 style50"><strong>Usuario:</strong></p></td><td>
<input name="username" type="text">
</td></tr>
<tr><td class="style1"><p align="center" class="style50 style59 style1 style2">Password:</p></td><td>
<input name="pass" type="password">
</td></tr>
<tr><th colspan=2><input name="submit" type="submit" value="Entrar"></th></tr> </table>
</form>
</body>
</html>
<?
} /* Y cerramos el else */ 
?>
 