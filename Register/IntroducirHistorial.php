<?php
include("Componentes/Recursos.php");
date_default_timezone_set('America/Argentina/Buenos_Aires');
$date = date("Y-m-d H:i:s");  
$history->introducir_compra($date,$_GET['monto']);
#$esta->Introducir_Datos($date,$_GET['monto']);
$carro->eliminar_datos();
header("location: index.php");
?>