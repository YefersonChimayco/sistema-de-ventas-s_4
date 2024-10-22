<?php
require_once "../librerias/conexion.php";
class productoModel{ # el model se comunica con el controlador y la abse de datos
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = 
        $this->conexion->connect();
    }
    public function registrarProducto
        ($codigo, $nombre, $detalle,$precio, $stock, $categoria, $imagen1, $proveedor){
            $sql = $this->conexion->query("CALL registrarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$imagen1}','{$proveedor}')");
        }
        
}
 
?>