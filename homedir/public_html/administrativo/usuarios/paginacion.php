<?

function conectar() 
{ 
	$base_de_datos = "bizgloba_noticias";
	$db_usuario = "bizgloba_webmast"; 
	$db_password = "mikex5761880n"; 
   
	if (!($link = mysql_connect("localhost", $db_usuario, $db_password))) 
	{ 
		echo "Error conectando a la base de datos."; 
		exit(); 
	} 
	if (!mysql_select_db($base_de_datos, $link)) 
	{ 
		echo "Error seleccionando la base de datos."; 
		exit(); 
	} 
	return $link; 
} 

$db = conectar();


$registros = 3;

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} 
else { 
    $inicio = ($pagina - 1) * $registros; 
} 


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Noticias</title>
<style>
	body { font-family: arial; font-size:12px}
</style>
</head>

<body>
	<?
	$resultados = mysql_query("SELECT id FROM bizgloba_noticias.articulos WHERE visible = 1");
	$total_registros = mysql_num_rows($resultados); 
	$resultados = mysql_query("SELECT * FROM bizgloba_noticias.articulos WHERE visible = 1 ORDER BY fecha DESC LIMIT $inicio, $registros");	
	$total_paginas = ceil($total_registros / $registros); 		  			

	if($total_registros) {
	
		while($articulo=mysql_fetch_array($resultados)) {
			
			echo "<b>".$articulo["titulo"]."</b><br>";
			echo "<font color='#666666'>".$articulo["descripcion"]."</font><br><br><br>";
			
		}
		
	} else {
		echo "<font color='darkgray'>(sin resultados)</font>";
	}
	
	mysql_free_result($resultados);				
	
	if($total_registros) {
		
		echo "<center>";
		
		if(($pagina - 1) > 0) {
			echo "<a href='paginacion.php?pagina=".($pagina-1)."'>< Anterior</a> ";
		}
		
		for ($i=1; $i<=$total_paginas; $i++){ 
			if ($pagina == $i) 
				echo "<b>".$pagina."</b> "; 
			else
				echo "<a href='paginacion.php?pagina=$i'>$i</a> "; 
		}
	  
		if(($pagina + 1)<=$total_paginas) {
			echo " <a href='paginacion.php?pagina=".($pagina+1)."'>Siguiente ></a>";
		}
		
		echo "</center>";
		
	}
	?>
</body>
</html>
<? mysql_close($db);?>