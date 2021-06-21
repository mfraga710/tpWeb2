<?php


include_once(DIR_BASE.'DAO/productosDao.php');
include_once(DIR_BASE.'helpers/image.php');


function businessGuardarProducto($datos = array()){

    $id = daoGuardarProducto($datos);
    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);
    } 


}

function businessObtenerProductos(){
 
    return daoObtenerProductos();

}

function businessObtenerProducto($id){
    return daoObtenerProducto($id);

}

function businessModificarProducto($datos ,$id){
    /*if(!empty($_FILES['imagen'])){
        $datos['imagen'] = $_FILES['imagen']['name'];
    }*/
    daoModificarProducto($datos,$id); 
    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);
    } 

//die();   
}

function saveImage($datos,$id){ 
        $ruta = DIR_BASE.'themes/images/products/'.$id.'/';
        if(!is_dir($ruta)){
            mkdir($ruta);
        }
        //var_dump($datos);
        $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'100','alto'=>'200'),
                          1 => array('nombre'=>'small','ancho'=>'50','alto'=>'100'),
                           2 => array('nombre'=>'xl','ancho'=>'500','alto'=>'1000'));
        if(is_array($datos['name'])){
            $cantidadImg = cant_imagenes($ruta);
            foreach($datos['name'] as $index => $name){ 
                redimensionar($ruta,$datos['name'][$index],$datos['tmp_name'][$index],$index+$cantidadImg,$tamanhos);
            }
        }else{
            redimensionar($ruta,$datos['name'],$datos['tmp_name'],cant_imagenes($ruta),$tamanhos);
        }
        
        // move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
       /* if(file_exists(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen'])){
            unlink(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen']);
        } */
     
}

function businessObtenerImagenesProducto($id){
    return obtener_imagenes('themes/images/products/'.$id.'/');
} 

function businessBorrarProducto($id){
    
    daoBorrarProducto($id);
    $ruta = DIR_BASE.'themes/images/products/'.$id.'/';
    eliminar_archivos($ruta);

}
?>