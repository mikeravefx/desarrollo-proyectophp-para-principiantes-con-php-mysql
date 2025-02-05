<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="JavaScript" src="calendar_eu.js"></script>
	<link rel="stylesheet" href="calendar.css">
<title>Actualizaciones Masivas de Estatus</title>
<style type="text/css">
<!--
.style2 {font-weight: bold}
.style3 {font-weight: bold}
-->
</style>
</head>

<body>
 <div align="center"><span class="style19"><strong>Modificaciones Masivas de Estatus </strong></span><strong> </strong> </div>
 <form action="" method="post" name="form1" class="style3">
             <p align="center">             <select name="select">
               <option value="Pendiente de Actualizar">1.- Pendiente de Actualizar</option>
               <option value="Recibido en Almacen">2.- Recibido en Almacen</option>
               <option value="En Aduana de Exportacion">3.- En Aduana de Exportacion</option>
               <option value="En Transito">4.- En Transito</option>
               <option value="En Transito">5.- En Aduana de Importacion</option>
               <option value="En Almacen VZLA">6.- En Almacen VZLA</option>
               <option value="En Almacen VZLA-Notificado">7.- En Almacen VZLA-Notificado</option>
               <option value="En Ruta de Entrega">8.- En Ruta de Entrega</option>
               <option value="Entregado">9.- Entregado</option>
             </select>
             
             </p>
             <p align="center" class="style115">Introduzca el Rango de Fechas</p>
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
               <label>
               <input type="submit" name="Submit2" value="Consultar">
               </label>
             </p>
             <p align="left">&nbsp;</p>
</form>&nbsp;</p>

</body>
</html>
