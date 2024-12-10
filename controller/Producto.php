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
            $id_producto = $arr_Productos[$i]->id; 
            //localhost /editarproducto/4
            $opciones='
            <a href="'.BASE_URL.'editar-producto/'.$id_producto.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_producto('.$id_producto.');"> eliminar </button>
            ';
            $arr_Productos[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Productos;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo=="registrar") {
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
    $idproveedor= $_POST['proveedor'];
    if ($codigo=="" || $nombre=="" || $detalle=="" || $precio==""|| $stock==""|| $idcategoria=="" || $imagen=="" || $idproveedor=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $archivo = $_FILES['imagen']['tmp_name'];
        $destino = '../assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));


        $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor ,$tipoArchivo);
        if ($arrProducto->id_n>0) {
            $newid = $arrProducto->id_n;
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            $nombre=$arrProducto->id_n. ".". $tipoArchivo;
            //cargar imagene
            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
                $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}
if ($tipo=="ver") {
   /*  print_r($_POST); */
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
    if (empty($arr_Respuesta)) {
        $response = array ('status' => false, 'mensaje' =>"Error, no hay ifno");
    } else {
        $response = array ('status' => false, 'mensaje' =>"Datos encontrados", 'contenido' =>$arr_Respuesta);
    }
    echo json_encode($response);
}
if ($tipo=="actualizar") {

      $id_producto = $_POST['id_producto'];
    $img = $_POST['img'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $categoria = $_POST['idcategoria'];
    $proveedor = $_POST['proveedor'];
    if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $proveedor == "") {
        //repuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrProducto = $objProducto->actualizarProducto($id_producto, $codigo, $nombre, $detalle,$precio, $stock, $idcategoria, $imagen, $idproveedor );
        if ($arrProducto->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

            if ($_FILES['imagen']['tmp_name'] != "") {
                unlink('../assets/img_productos/' . $img);

                //cargar archivos
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '../assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                if (move_uploaded_file($archivo, $destino . '' . $id_producto.'.'.$tipoArchivo)) {
                }
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
        }
    }
    echo json_encode($arr_Respuesta);
    print_r($_POST['']);
}
if ($tipo=="eliminar") {
    print_r($_POST);
}


?>