<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST ['tipo'];
# instacncion ña clase model producto
$objProducto = new productoModel();
$objCategoria = new categoriaModel();
$objPersona = new personaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Productos = $objProducto-> obtener_productos();
    if (!empty($arr_Productos)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Productos) ; $i++) { 
            $id_categoria = $arr_Productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categoria($id_categoria);
            $arr_Productos[$i]->categoria=$r_categoria;
            $producto = $arr_Productos[$i]->nombre; 
            
            $opciones='
            <a href=" class ="btn btn-success"><i class="fa fa-pencil"></i> </a>
            ';
            $arr_Productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Productos;
    }
    echo json_encode($arr_Respuesta);
}if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $detalle= $_POST['detalle'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];
    $idcategoria= $_POST['idcategoria'];
    $imagen= 'imagen';
    $idproveedor= $_POST['idproveedor'];
    if ($codigo=="" || $nombre=="" || $detalle=="" || $precio==""|| $stock==""|| $idcategoria=="" || $imagen=="" || $idproveedor=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor);
        if ($arrProducto->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
            $archivo = $_FILES['imagen']['tmp_name'];
            $destino = './assets/img_productos/';
            $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
            $nombre= $arrProducto->id.".".$tipoArchivo;    
            if (move_uploaded_file($archivo,$destino.$nombre)) {
                $arr_imagen  = $objProducto->actualizar_imagen($id,$nombre);

            }
            else {
                $arr_Respuesta = array('status' => true, 'mensaje' =>'ERROR AL SUBIR IMAGEN');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

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