<?
session_start();
if(!isset($_SESSION["usuario_valido"])){
header("location: index.php");
} else {
session_unset();
session_destroy();
echo "<html><head><title>Identifiquese!</title>
<script>
var howLong = 10;
t = null;
function closeMe(){
t = setTimeout('self.close()',howLong);
}
</script>
</head>
<body onload='closeMe();self.focus()'>
<style type='text/css'>
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


<p align='center' class='style50 style59 style1'><img src='images/cp_logo.jpg' width='142' height='53'></p>
<p align='center' class='style50 style59 style1 style2'>Hasta Pronto, Gracias por Su Visita.</p>
<p align='center' class='style50 style59 style1 style2'><a href='http://www.google.com.ve'>Ir a Google</a></p>";
//window.close()

}
?>