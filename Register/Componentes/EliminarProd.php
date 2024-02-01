<?php
include("Recursos.php");
$carro->eliminar_compra($_GET['idc']);

header("location: ../index.php");
?>