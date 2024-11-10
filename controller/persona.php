<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objPersona = new personaModel();

if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
    $nro_identidad= $_POST['nro_identidad'];
    $razon_social= $_POST['razon_social'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $departamento= $_POST['departamento'];
    $provincia= $_POST['provincia'];
    $distrito= 'distrito';
    $cod_postal= $_POST['cod_postal'];
    $direccion= $_POST['direccion'];
    $rol= $_POST['rol'];
    $password= $_POST['password'];
    $estado= $_POST['estado'];
    $fecha_reg= $_POST['fecha_reg'];
    
    if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo==""|| $departamento==""|| $provincia=="" || $distrito=="" || $cod_postal==""|| $direccion==""|| $rol==""|| $password==""|| $estado==""|| $fecha_reg=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrPersona= $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono,$correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado, $fecha_reg);
        if ($arrPersona->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
           
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}