<?php
require_once('./model/productoModel.php');
$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objProducto = new productoModel();

if ($tipo=="regitrar") {
    if($_POST);
    $codigo= $_POST=['codigo'];
    $nombre= $_POST=['nombre'];
    $detalle= $_POST=['detalle'];
    $precio= $_POST=['precio'];
    $stock= $_POST=['stock'];
    $categoria= $_POST=['categoria'];
    $imagen1= $_POST=['imagen1'];
    $proveedor= $_POST=['proveedor'];
    if ($codigo=="" || $nombre=="" || $detalle=="" || $precio==""|| $stock==""|| $categoria=="" || $imagen1=="" || $proveedor=="") {
        $arr_Respuesta = array('status' => false, 'mensaje'
        =>'error campos vacios');
    }else {
        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $categoria, $imagen1, $proveedor);
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