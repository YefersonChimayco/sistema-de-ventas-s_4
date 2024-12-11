<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];
// instancia la categria model
$objCategoria = new CategoriaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Categorias = $objCategoria-> obtener_categorias();
    if (!empty($arr_Categorias)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Categorias) ; $i++) { 
            $id_categoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre; 
            $opciones='
           <a href="'.BASE_URL.'editar_categoria/'.$id_categoria.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_categoria('.$id_categoria.');"> eliminar </button>
            ';
            $arr_Categorias[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Categorias;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
    $nombre= $_POST['nombre'];
    $detalle= $_POST['detalle'];
    if ( $nombre=="" || $detalle=="" ) {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);
        if ($arrCategoria->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}
if ($tipo=="eliminar") {
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->eliminarCategoria($id_categoria);
    if (empty($arr_Respuesta)) {
        $response = array ('status' => false);
    } else {
        $response = array ('status' => true);
    }
    echo json_encode($response);
}

?>