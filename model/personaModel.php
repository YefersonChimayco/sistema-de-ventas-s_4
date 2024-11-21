<?php
require_once "../librerias/conexion.php";
class personaModel
{ # el model se comunica con el controlador y la abse de datos
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado, $fecha_reg)
    {   
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}','{$razon_social}', '{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function buscarpersonapordni($nro_identidad){
        $sql = $this->conexion->query("SELECT*FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_proveedor(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM persona where rol='proveedor'");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
}
