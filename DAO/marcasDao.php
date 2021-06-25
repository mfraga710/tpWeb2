<?php
 

 function daoGuardarMarca($datos = array()){
    $marcas = daoObtenerMarcas();
    //var_dump($productos);die();
    $id = date('Ymdhisu');
    $marcas[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'       
   ); 

   file_put_contents(DIR_BASE.'datos/marca.json',json_encode($marcas));
   return $id;

}

function daoObtenerMarcas(){
    if(file_exists(DIR_BASE.'datos/marca.json')){ 
        $data = json_decode(file_get_contents(DIR_BASE.'datos/marca.json'),TRUE);	
    }else{
        $data = array();
    }

    return $data;

}

function daoObtenerMarca($id){
    $marca = daoObtenerMarcas();  
    return $marca[$id];

}

function daoBorrarMarca($id){
    $marca = daoObtenerMarcas();
    if(isset($marca[$id])){
       unset($marca[$id]); 
       /* $fp = fopen(DIR_BASE.'datos/productos.json','w');
           fwrite($fp, json_encode($productos));
           fclose($fp);
       */
       file_put_contents(DIR_BASE.'datos/marca.json',json_encode($marca));
    }
    
}

function daoModificarMarca($datos, $id){
    $marcas = daoObtenerMarcas();
    $marcas[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'
   ); 
   file_put_contents(DIR_BASE.'datos/marca.json',json_encode($marcas));
}


?>
 