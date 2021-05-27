<?php

function guardarProducto($datos = array()){
     
}

function obtenerProductos(){
    if(file_exists(DIR_BASE.'datos/productos.json')){ 
        $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);	
    }else{
        $productos = array();
    }

    return $productos;

}

function obtenerProducto($id){
    $productos = obtenerProductos();  
    return $productos[$id];

}

function modificarProducto($datos = array(), $id){
    
}

function borrarProducto($id){
     
}