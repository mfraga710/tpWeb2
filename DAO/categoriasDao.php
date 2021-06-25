<?php
 
 function daoGuardarCategoria($datos = array()){
    $Categorias = daoObtenerCategorias();
    //var_dump($productos);die();
    $id = date('Ymdhisu');
    $Categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'       
   ); 

   file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($Categorias));
   return $id;

}

 function daoObtenerCategoria($id){
    $categoria = daoObtenerCategorias();  
    return $categoria[$id];

}

function daoObtenerCategorias(){
    if(file_exists(DIR_BASE.'datos/categoria.json')){ 
        $cats = json_decode(file_get_contents(DIR_BASE.'datos/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}

function daoModificarCategoria($datos, $id){
    $categorias = daoObtenerCategorias();
    $categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'
   ); 
   file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($categorias));
}

function daoBorrarCategoria($id){
    $categoria = daoObtenerCategorias();
    if(isset($categoria[$id])){
       unset($categoria[$id]); 

       file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($categoria));
    }
    
}
?>