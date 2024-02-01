<?php
include("BaseDeDatos.php");
include("Carrito.php");
include("Producto.php");
include("historial.php");


define('SERVIDOR', 'localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BASE','control');

$base = new baseDatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$compra = new Producto($base);
$carro = new Carrito($base);
$history = new Historial($base);
#$esta = new Estadisticas($base);
?>