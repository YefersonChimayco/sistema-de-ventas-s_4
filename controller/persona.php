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
    $distrito= $_POST ['distrito'];
    $cod_postal= $_POST['cod_postal'];
    $direccion= $_POST['direccion'];
    $rol= $_POST['rol'];
    $password= $_POST['password'];
    $estado= $_POST['estado'];
    $fecha_reg= $_POST['fecha_reg'];
    $secure_password = password_hash($nro_identidad,PASSWORD_DEFAULT);
    
    if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo==""|| $departamento==""|| $provincia=="" || $distrito=="" || $cod_postal==""|| $direccion==""|| $rol==""|| $password==""|| $estado==""|| $fecha_reg=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrPersona= $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono,$correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password, $estado, $fecha_reg);
        if ($arrPersona-> id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
           
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SREGISTRAR persona');
        }
        echo json_encode($arr_Respuesta);
    } 
    if ($tipo=="ver") {
        $arr_Respuesta = array('status'=> false, 'contenido'=>'');
        $arr_Persona = $objPersona-> obtener_proveedores();
        if (!empty($arr_Persona)) {// recorremos el array pra agregar la opciones de las categorias
            for ($i=0; $i <count($arr_Persona) ; $i++) { 
                $id_persona = $arr_Persona[$i]->razon_social;
                $persona = $arr_Persona[$i]->id; 
                $opciones='
                <a href=" class ="btn btn-success"><i class="fa fa-pencil"></i> </a>
                ';
                $arr_Persona[$i]->options= $opciones;
            }
            $arr_Respuesta['status']= true;
            $arr_Respuesta['contenido']= $arr_Persona;
        }
        echo json_encode($arr_Respuesta);
    }
}
if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Persona = $objPersona-> obtener_persona();
    if (!empty($arr_Persona)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Persona) ; $i++) { 
            $id_persona = $arr_Persona[$i]->razon_social;
            $persona = $arr_Persona[$i]->id; 
            $opciones='
            <a href=" class ="btn btn-success"><i class="fa fa-pencil"></i> </a>
            ';
            $arr_Persona[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Persona;
    }
    echo json_encode($arr_Respuesta);
}