<title>Notificacion</title><?
session_start();
if(!isset($_SESSION["usuario_valido"])){
header("location: index.php");
} else {
echo "
<style type='text/css'>
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
a:link {
	color: #42679C;
}
a:visited {
	color: #006699;
}
a:hover {
	color: #0066CC;
}
a:active {
	color: #0066FF;
}
.style79 {font-size: 12px; color: #000000; }
.style59 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 12px;
}
.style54 {
	font-weight: bold;
	color: #325C96;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.style91 {color: #000000}
.style108 {color: #42679E; font-weight: bold; font-size: 10px; }
.style113 {	color: #F0F0F0;
	font-weight: bold;
}
.style114 {color: #42679E}
.style115 {font-size: 12px}
.style116 {color: #42679E; font-size: 16px; }
-->
</style>
</head>

<body>
<table width='52%' border='0'>
  <tr>
    <td colspan='6'><p align='center'><span class='style50 style59 style1'><img src='bizama.png' width='200' height='75' /></span></p>
      <h1 align='center' class='style116'>Control de Registros</h1>
      <div align='center'><br />
        <table width='200' height='100' border='0' align='left'>
          <tr>
            <td><li class='style113' style=' background:white '>
                <div align='center' class='style115'>
                  <p class='style114'><a href='facturacion.php'>Facturaci&oacute;n </a></p>
                  <p class='style114'><a href='notificacion.php'>Notificaci&oacute;n</a></p>
                  <p class='style114'><span class='style91'>[ <a href='logout.php' class='style114'><b>Desconectarse</b></a> ]</span></p>
                </div>
              </li>
                </td>
          </tr>
          <tr>
            <td></td>
          </tr>
                          </table>
        <br />
        <br />
      </div>
      <p align='center'>&nbsp;</p
>
      <p align='center'>&nbsp;</p
>
    </td>
  </tr>
  

  <tr>
    <td colspan='6'><p align='center'>
      <p align='center'><span class='style28'><span class='style54'>&copy; 2008 Soluciones Creativas</span></span></p></td>
  </tr>
</table>
</body>
</html>
";
}
?>
 