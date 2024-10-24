<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];
// instancia la categria model
$objCategoria = new CategoriaModel();

if ($tipo=="listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Categorias = $objCategoria-> obtener_categorias();
    print_r($arr_Categorias);
}

?>