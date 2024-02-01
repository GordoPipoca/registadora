<?php
class Historial{
    public $base;

    function __construct($baseconectada){
        $this->base = $baseconectada;
    }
    public function introducir_compra($fecha, $monto){
        $SQL = $this->base->ejecutarSQL("INSERT INTO historial VALUES(DEFAULT,'$fecha',$monto )");
        return $SQL;
    }
    public function listar_historial(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM historial  ORDER BY id_venta DESC LIMIT 14");
        return $SQL;
    }
    public function listar_todo(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM historial");
        return $SQL;
    }    
}
?>