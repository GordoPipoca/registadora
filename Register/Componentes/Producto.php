<?php
class Producto{
    public $base;

    function __construct($baseconectada){
        $this->base = $baseconectada;
    }
    public function listar_productos(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM productos");
        return $SQL;
    }
}
?>