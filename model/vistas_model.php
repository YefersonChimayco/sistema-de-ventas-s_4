<?php

    class vistaModelo{
        protected static function obtener_vista($vista){
            $palabras_permitidas = ['perfil','menu','nosotros','detalles','usuario','nuevo-usuario','usuarios','productos','nurvo-producto','producto','carrito','varones','mujeres']; 
            if (in_array($vista,$palabras_permitidas)) {
                if (is_file("./views/".$vista.".php")) {
                    $contenido = "./views/".$vista.".php";
                } else {
                    $contenido ="404";
                }
            } elseif ($vista=="login" || $vista =="index") {
                $contenido = "login";
            }else {
                $contenido ="404";
            }
                return $contenido; // el contenido es la respuesta      
        }
    }


?>