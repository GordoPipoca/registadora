<?php
class Carrito{
    public $base;

    function __construct($baseconectada){
        $this->base = $baseconectada;
    }
    public function introducir_compra($producto, $precio, $fecha){
        $SQL = $this->base->ejecutarSQL("INSERT INTO productos VALUES('$producto','$precio','$fecha', DEFAULT)");
        return $SQL;
    }
    public function listar_compra(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM productos");
        return $SQL;
    }
    public function eliminar_compra($producto){
        $SQL= $this->base->ejecutarSQL("DELETE FROM productos WHERE id_compra=$producto");
        return $SQL;
    }
    public function eliminar_datos(){
        $SQL= $this->base->ejecutarSQL("DELETE FROM productos");
    }
}
?>