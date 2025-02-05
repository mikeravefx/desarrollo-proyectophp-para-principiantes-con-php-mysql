<?
   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Reportes Generales</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Pragma" content="no-cache" />
<style type="text/css">
<!--
a.p:link {
    color: #0066FF;
    text-decoration: none;
}
a.p:visited {
    color: #0066FF;
    text-decoration: none;
}
a.p:active {
    color: #0066FF;
    text-decoration: none;
}
a.p:hover {
    color: #0066FF;
    text-decoration: underline;
}
a.ord:link {
    color: #000000;
    text-decoration: none;
}
a.ord:visited {
    color: #000000;
    text-decoration: none;
}
a.ord:active {
    color: #000000;
    text-decoration: none;
}
a.ord:hover {
    color: #000000;
    text-decoration: underline;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF">
<hr noshade style="color:AAD2FF;height:1px">
<br>
<?
//inicializo el criterio y recibo cualquier cadena que se desee buscar
 mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F"); 
$criterio = "";
$txt_criterio = "";
if ($_GET["criterio"]!=""){
   $txt_criterio = $_GET["criterio"];
   $criterio = " where cedula like '%".$txt_criterio."%'or nomape like '%".$txt_criterio."%' or articulos like '%".$txt_criterio."%'or statusvenezuela like'%". $txt_criterio ."%' or tracking like '%".$txt_criterio."%' or fechaestimada like'%". $txt_criterio ."%'" ;
}

// id 	nomape 	cedula 	correo 	fecha 	guiacliente 	statusvenezuela fechaestimada 	fecharecep 
// id 	guia 	Lugar 	fecha 	peso 	piezas 	remitente 	status 	cargos

$sql="SELECT * FROM courierp_miembros.tracking ".$criterio;
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros<=0)
{
    echo "<div align='center'>";
    echo "<font face='verdana' size='-2'>No se encontraron resultados</font>";
    echo "</div>";
}else{
    //////////elementos para el orden
    if(!isset($orden))
    {
       $orden="id";
    }
    //////////fin elementos de orden

    //////////calculo de elementos necesarios para paginacion
    //tamaño de la pagina
    $tamPag=20;

    //pagina actual si no esta definida y limites
    if(!isset($_GET["pagina"]))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $pagina = $_GET["pagina"];
    }
    //calculo del limite inferior
    $limitInf=($pagina-1)*$tamPag;

    //calculo del numero de paginas
    $numPags=ceil($numeroRegistros/$tamPag);
    if(!isset($pagina))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $seccionActual=intval(($pagina-1)/$tamPag);
       $inicio=($seccionActual*$tamPag)+1;

       if($pagina<$numPags)
       {
          $final=$inicio+$tamPag-1;
       }else{
          $final=$numPags;
       }

       if ($final>$numPags){
          $final=$numPags;
       }
    }

//////////fin de dicho calculo

//////////creacion de la consulta con limites
$sql="SELECT * FROM courierp_miembros.tracking ".$criterio." ORDER BY ".$orden.",id ASC LIMIT ".$limitInf.",".$tamPag;
$res=mysql_query($sql);

//////////fin consulta con limites
echo "<div align='center'>";
echo "<font face='verdana' size='-2'>Registros encontrados ".$numeroRegistros." resultados<br>";
echo "ordenados por <b>".$orden."</b>";
if(isset($txt_criterio)){
    echo "<br>Criterio de Buqueda: <b>".$txt_criterio."</b>";
}
echo "</font></div>";
echo "<table align='center' width='80%' border='0' cellspacing='1' cellpadding='0'>";
echo "<tr><td colspan='3'><hr noshade></td></tr>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_id&criterio=".$txt_criterio."'>Nombre </a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Cedula</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Correo</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_pais&criterio=".$txt_criterio."'>Articulos</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_pais&criterio=".$txt_criterio."'>Tracking</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Fecha</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_pais&criterio=".$txt_criterio."'># Guia</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Estatus</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_pais&criterio=".$txt_criterio."'>Entrega Estimada</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_pais&criterio=".$txt_criterio."'>Fecha Recepcion</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Consultar</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Actualizar</a></th>";
echo "<th bgcolor='#CCCCCC'><a class='ord' href='".$_SERVER["PHP_SELF"]."?pagina = ".$pagina."&orden=co_nombre&criterio=".$txt_criterio."'>Eliminar</a></th>";

// id 	nomape 	cedula 	correo 	articulos 	tracking 	fecha 	guiacliente 	statusvenezuela 	fechaestimada 	fecharecep


while($registro=mysql_fetch_array($res))
{
?>
   <!-- tabla de resultados -->
    <tr bgcolor="#AAD2FF">
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["nomape"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["cedula"]; ?></b></font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["correo"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["articulos"]; ?></b></font></td>
     <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["tracking"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["fecha"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["guiacliente"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["statusvenezuela"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["fechaestimada"]; ?></b></font></td>
   <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><? echo $registro["fecharecep"]; ?></b></font></td>
   <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><a class='ord' href='detalles_guia.php?id_a=<? echo $registro['id'];?>'>Detalles</a></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#666666"><b><a class='ord' href='parametro_guia.php?id_a=<? echo $registro['id'];?>'>Actualizar</a></b></font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><b><a class='ord' href='eliminar_guia.php?id_a=<? echo urlencode($registro['id']);?>'>Eliminar</a></b></font></td>
    </tr>
   <!-- fin tabla resultados -->
<?
}//fin while
echo "</table>";
}//fin if
//////////a partir de aqui viene la paginacion
?>
    <br>
    <table border="0" cellspacing="0" cellpadding="0" align="center">
    <tr><td align="center" valign="top">
<?
    if($pagina>1)
    {
       echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>anterior</font>";
       echo "</a> ";
    }

    for($i=$inicio;$i<=$final;$i++)
    {
       if($i==$pagina)
       {
          echo "<font face='verdana' size='-2'><b>".$i."</b> </font>";
       }else{
          echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&orden=".$orden."&criterio=".$txt_criterio."'>";
          echo "<font face='verdana' size='-2'>".$i."</font></a> ";
       }
    }
    if($pagina<$numPags)
   {
       echo " <a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>siguiente</font></a>";
   }
//////////fin de la paginacion
?>
    </td></tr>
    </table>
<hr noshade style="color:AAD2FF;height:1px">
<div align="center"><font face="verdana" size="-2"><a class="p" href="guias.php">::Inicio::</a></font></div>

<form action="guias.php" method="get">
  <div align="center">
    <p><span class="ord">Criterio de búsqueda: </span>
      <input type="text" name="criterio" size="22" maxlength="150">
      <input type="submit" value="Buscar">
      </p>
  </div>
</form>

</body>
</html>
<?
    mysql_close();
?>
