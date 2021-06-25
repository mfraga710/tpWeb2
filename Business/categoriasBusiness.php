<?php
include_once(DIR_BASE.'DAO/categoriasDao.php');


function businessGuardarCategoria($datos = array()){

    daoGuardarCategoria($datos);
}

function businessObtenerCategoria($id){
    return daoObtenerCategoria($id);

}

function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessModificarCategoria($datos ,$id){

    daoModificarCategoria($datos,$id);    

}

function businessBorrarCategoria($id){
    
    daoBorrarCategoria($id);
}
?>