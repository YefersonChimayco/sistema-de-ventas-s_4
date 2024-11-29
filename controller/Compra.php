<?php
require_once('../model/compraModel.php');
require_once('../model/productoModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
$objCompra = new compraModel();
$objPersona = new personaModel();
if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
   
    $id_producto= $_POST['id_producto'];
    $cantidad= $_POST['cantidad'];
    $precio= $_POST['precio'];
    $id_trabajador= $_POST['id_trabajador'];
   
    if ( $id_producto=="" || $cantidad==""|| $precio==""|| $id_trabajador=="" ) {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrCompra = $objCompra->registrarCompra($id_producto, $cantidad, $precio, $id_trabajador);
        if ($arrCompra->id>0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}
if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');

    // Obtiene las compras
    $arr_Compra = $objCompra->obtener_compra();

    // Validar que el array no esté vacío
    if (!empty($arr_Compra) && is_array($arr_Compra)) {
        // Recorremos el array para agregar las opciones
        for ($i = 0; $i < count($arr_Compra); $i++) {
            // Asignar opciones correctamente formateadas
          
            $opciones = '
            <a href="'.BASE_URL.'editar_producto/'.$id_producto.'" class="btn btn-warnig"> editar </a>
            <button onclick="eliminar_producto('.$id_producto.');"> eliminar </button>
            ';
            // Agregar las opciones al objeto actual
            $arr_Compra[$i]->options = $opciones;
        }

        // Actualizar la respuesta
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Compra;
    }

    // Devolver la respuesta como JSON
    echo json_encode($arr_Respuesta);
}
if ($tipo=="listartrabajador") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Trabajador = $objPersona-> obtener_trabajador();
    if (!empty($arr_Proveedor)) {// recorremos el array pra agregar la opciones de las categorias
        for ($i=0; $i <count($arr_Trabajador) ; $i++) { 
            $id_Trabajador = $arr_Trabajador[$i]->id;
            $razon_social = $arr_Trabajador[$i]->razon_social; 
            $opciones='<a href="" class="btn btn-success"><i class="fa fa-pencil"> Editar</i></a> <a href="" class="btn btn-danger"><i class="fa fa-trash"> Eliminar</i></a>';
            $arr_Trabajador[$i]->options= $opciones;
        }
        $arr_Respuesta['status']= true;
        $arr_Respuesta['contenido']= $arr_Trabajador;
    }
    echo json_encode($arr_Respuesta);
}


?>