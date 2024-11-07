<?php
require_once('../model/proveedorModel.php');
$tipo = $_REQUEST['tipo'];
// instancia la categria model
$objProveedor = new ProveedorModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Proveedor = $objProveedor-> obtener_proveedor();
    if (!empty($arr_Proveedor)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Proveedor) ; $i++) { 
            $id_proveedor = $arr_Proveedor[$i]->razon_social;
            $proveedor = $arr_Proveedor[$i]->id; 
            $opciones='
            <a href=" class ="btn btn-success"><i class="fa fa-pencil"></i> </a>
            ';
            $arr_Proveedor[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Proveedor;
    }
    echo json_encode($arr_Respuesta);
}

?>