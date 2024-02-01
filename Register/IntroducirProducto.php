<?php
include("Componentes/Recursos.php");
date_default_timezone_set('America/Argentina/Buenos_Aires');
$date = date("Y-m-d H:i:s");  
$carro->introducir_compra($_POST['producto'],$_POST['precio'],$date);
header("location: index.php?ok");
?>