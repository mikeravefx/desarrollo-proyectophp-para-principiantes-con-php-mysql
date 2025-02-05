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
if (!isset($_POST['guiacliente'])){
echo "Debe especificar una cadena a buscar"; // solamente me entra a esta condicion

//$dbh=mysql_connect ("localhost", "courierp_courier", "hVAC53fjGa7F") or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
echo "</html></body> \n";
exit;
}

$link = mysql_connect("localhost","courierp_courier","hVAC53fjGa7F");
mysql_select_db("bizgloba_miembros", $link);
$result = mysql_query("SELECT nomape, correo, fecha, guiacliente,statusvenezuela,fechaestimada FROM courierp_miembros.tracking WHERE guiacliente = '".$_POST['guiacliente']."'", $link);
if ($row = mysql_fetch_array($result)){
echo "<p align='center'><img src='bizama.png' width='200' height='75'></p>\n ";
echo " <div align='center'>\n ";
echo " <table width='593' border='0'> \n ";
echo " <tr bgcolor='#40659D'> \n "; 
echo "<td colspan='2'><div align='center' class='style10'>Status de Su Orden</div></td>\n";
//Mostramos los nombres de las tablas


while ($field = mysql_fetch_field($result)){
//echo "<td>$field->name</td> \n";
echo "<td colspan='2'><div align='center' class='style10'>Consulta</div></td>\n";
}
echo "</tr> \n";
do {
echo "<tr> \n";
echo " <td width='243' bgcolor='#666666'><span class='style10'>Nombre y Apellido:</span></td> \n";
echo "<td width='334'>".$row["nomape"]."</td> \n";
echo "</tr> \n";
echo " <tr> \n";
echo "<td bgcolor='#666666'><span class='style10'>Correo:</span></td>";
echo " <td>".$row["correo"]."</td> \n";
echo "</tr> \n";
echo "<td bgcolor='#666666'><span class='style10'>Fecha de Llegada a miami:</span></td>";
echo " <td>".$row["fecha"]."</td> \n";
echo "</tr> \n";
echo "</tr> \n";
echo "<td bgcolor='#666666'><span class='style10'>Guia de Su Carga:</span></td>";
echo " <td>".$row["guiacliente"]."</td> \n";
echo "</tr> \n";
//statusvenezuela
echo "</tr> \n";
echo "<td bgcolor='#666666'><span class='style10'>Status de Carga:</span></td>";
echo " <td>".$row["statusvenezuela"]."</td> \n";
echo "</tr> \n";
//fechaestimada
echo "</tr> \n";
echo "<td bgcolor='#666666'><span class='style10'>Fecha Estimada de llegada a Venezuela:</span></td>";
echo " <td>".$row["fechaestimada"]."</td> \n";
echo "</tr> \n";
} while ($row = mysql_fetch_array($result));
echo "</table> \n";
echo "<br> \n";
echo "<br> \n";
echo "<p><a href='home.html' class='style11'>Regresar</a></p>";
echo "</div>";

}
else {
echo "¡ No se ha encontrado ningún registro !";
}
?>

