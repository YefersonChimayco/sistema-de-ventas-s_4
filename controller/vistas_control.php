<?php
// requiere_once no permite errores
require_once "./model/vistas_model.php";
class vistasControlador extends vistaModelo{
    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador(){
        if(isset ($_GET['views'])) { // views se llama del htaccess
            $ruta = explode("/",$_GET['views'] ); // separa los elementos de la cadena por los slashs (explode)
            $respuesta = vistaModelo::obtener_vista($ruta[0]);
        }else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}

?>