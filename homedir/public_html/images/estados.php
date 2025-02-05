<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ciudades de Venezuela</title>
<!-- Licencia GPL -->
<!-- Creado por Draco, modificado y mejorado por Xombra -->
<!-- NECESARIO  -->
<meta content=history name=save>
<style>.saveHistory {
	BEHAVIOR: url(#default#savehistory)
}
</style>
<!-- HASTA AQUI -->
<SCRIPT language=JavaScript>
<!--
v=false;
//-->
</SCRIPT>

<SCRIPT language=JavaScript1.1>
<!--
if (typeof(Option)+"" != "undefined") v=true;
//-->
</SCRIPT>

<SCRIPT language=JavaScript>
<!--
if(v){a=new Array(22);}

function getFormNum (formName) {
	var formNum =-1;
	for (i=0;i<document.forms.length;i++){
		tempForm = document.forms[i];
		if (formName == tempForm) {
			formNum = i;
			break;
		}
	}
	return formNum;
}

function jmp(form, elt)
// The first parameter is a reference to the form.
{
	if (form != null) {
		with (form.elements[elt]) {
			if (0 <= selectedIndex)
				location = options[selectedIndex].value;
		}
	}
}

var catsIndex = -1;
var itemsIndex;

if (v) { // ns 2 fix
function newCat(){
	catsIndex++;
	a[catsIndex] = new Array();
	itemsIndex = 0;
}

function O(txt,url) {
	a[catsIndex][itemsIndex]=new myOptions(txt,url);
	itemsIndex++;
}

function myOptions(text,value){
	this.text = text;
	this.value = value;
}

<?php

// Conexion a bd

$conexion = mysql_connect("localhost", "courierp_courier", "hVAC53fjGa7F")or die ('I cannot connect to the database because: ' . mysql_error());mysql_select_db ("courierp_miembros");
mysql_select_db("courierp_miembros", $conexion);

 $sql="SELECT * FROM courierp_miembros.estados";
 $consulta1=mysql_query($sql,$conexion);
 while (list($id_estado,$tmp_estado)=mysql_fetch_array($consulta1)) {
   $sql2="SELECT ciudad FROM courierp_miembros.ciudades WHERE cod='$id_estado'";
   $consulta2=mysql_query($sql2,$conexion);
   echo 'newCat(); //'.$tmp_estado."\n";
   while (list($tmp_ciudad)= mysql_fetch_array($consulta2)) 
     { echo 'O("'.$tmp_ciudad.'","'.$tmp_ciudad.'");';  }
 }

?>

} // if (v)

function relate(formName,elementNum,j) {
    if(v){
        var formNum = getFormNum(formName);
         if (formNum>=0) {
        	//formNum++; // reference next form, assume it follows in HTML
        	with (document.formulario.ciudades) {
        		for(i=options.length-1;i>0;i--) options[i] = null; // null out in reverse order (bug workarnd)
        		for(i=0;i<a[j].length;i++){
        			options[i] = new Option(a[j][i].text,a[j][i].value);
        		}
        		options[0].selected = true;
        	}
        }
    }
    else { jmp(formName,elementNum);
    }
}

function IEsetup(){
	if(!document.all) return;
	IE5 = navigator.appVersion.indexOf("5.")!=-1;
	if(!IE5) {
		for (i=0;i<document.forms.length;i++) {
			document.forms[i].reset();
		}
	}
}

window.onload = IEsetup;
//-->
</SCRIPT>
</head>
<body>
<form action="ciudades.php"  method="get" Name="formulario">
 <table width="24%" border="0">
   <tr>
     <td width="9%" height="28">Estado:</td>
     <td width="91%"><select class="saveHistory" id="m1" name="Estados" onchange="relate(this.form,0,this.selectedIndex)">
         <?php 	$sql="SELECT * FROM courierp_miembros.estados";
		$consulta=mysql_query($sql,$conexion);
		while (list($cod,$estado)=mysql_fetch_array($consulta)) {
		echo '<option value="'.$cod.'">'.$estado.'</option>';  }
		// --- Ya tengo la lista de Estados --- ?>
       </select>
     </td>
   </tr>
   <tr>
     <td>Ciudades:</td>
     <td>
	 <select class="saveHistory" id="m2" name="ciudades">
         <?php   $sql="SELECT ciudad FROM courierp_miembros.ciudades WHERE cod='1'";
	         $consulta=mysql_query($sql,$conexion);
	        while (list($c_ciudad)=mysql_fetch_array($consulta)) {
                  echo '<option value="'.$c_ciudad.'">'.$c_ciudad.'</option>'; }
	       mysql_close($conexion);?>
       </select>
     </td>
   </tr>
 </table>
</form>
</body>
</html>
