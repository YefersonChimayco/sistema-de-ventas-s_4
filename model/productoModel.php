<?php
require_once "../librerias/conexion.php";
class productoModel
{ # el model se comunica con el controlador y la abse de datos
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $idcategoria, $imagen, $idproveedor)
    {
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}','{$nombre}', '{$detalle}','{$precio}','{$stock}','{$idcategoria}','{$imagen}','{$idproveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
        print_r($codigo);
    }
    public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id= '{$id}'");
        return 1;
    }
}
