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
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $fecha_reg)
    {   
        $sql = $this->conexion->query("CALL insertpersona('{$nro_identidad}','{$razon_social}', '{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}','{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function buscarpersonapordni($nro_identidad){
        $sql = $this->conexion->query("SELECT*FROM persona WHERE nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_proveedor()
    {
        $arrRespuesta = array();
        // Consulta a la tabla persona para obtener los proveedores
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");
        
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        
        return $arrRespuesta;
    }
  
    public function obtener_personas()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }
    public function verPersona($id){
        $sql = $this->conexion->query("SELECT*FROM persona WHERE id ='$id'");
        $sql =$sql->fetch_object(); 
        return $sql;
        
    }
    public function actualizarPersona($id,$nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol){
        $sql = $this->conexion->query("CALL actualizarpersona('{$id}',,'{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}',
    '{$distrito}','{$codigo_postal}','{$direccion}','{$rol}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminarPersona($id){
        $sql = $this->conexion->query("CALL eliminarpersona('{$id}')");
        $sql =$sql->fetch_object(); 
        return $sql;
        
    }
}
