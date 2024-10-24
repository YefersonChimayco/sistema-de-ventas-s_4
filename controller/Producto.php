<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objProducto = new productoModel();

if ($tipo=="registrar") {
    if($_POST);
    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $detalle= $_POST['detalle'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];
    $idcategoria= $_POST['idcategoria'];
    $imagen= $_POST['imagen'];
    $idproveedor= $_POST['idproveedor'];
    if ($codigo=="" || $nombre=="" || $detalle=="" || $precio==""|| $stock==""|| $idcategoria=="" || $imagen=="" || $idproveedor=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor);
        if ($arrProducto->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al registrar producto');
        }
        echo json_encode($arr_Respuesta);
    }

}
if ($tipo=="listar") {
    print_r($_POST);
}
if ($tipo=="ver") {
    print_r($_POST);
}
if ($tipo=="actualizar") {
    print_r($_POST);
}
if ($tipo=="eliminar") {
    print_r($_POST);
}


?>