<?php
require_once "../librerias/conexion.php";
class compraModel
{ # el model se comunica con el controlador y la abse de datos
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompra($id_producto, $cantidad, $precio, $id_trabajador)
    {
        $sql = $this->conexion->query("CALL insertcompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
        print_r($codigo);
    }
    public function obtener_compra(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_trabajador()
    {
        $arrRespuesta = array();
        // Consulta a la tabla persona para obtener los proveedores
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'trabajador'");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        
        return $arrRespuesta;
    }
}
